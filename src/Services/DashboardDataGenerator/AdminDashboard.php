<?php
// src/Services/DashboardDataGenerator/AdminDashboard.php

namespace App\Services\DashboardDataGenerator;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;


class AdminDashboard
{
    private $em;
    private $userRepo;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->userRepo = $this->em->getRepository(User::class);
    }
    
    public function genData()
    {
        
        $userdata = $this->genUserData();
        $adminData = array(
            'templatedir' => 'Administration/dashboard.html.twig',
            'userQueued' => $userdata);
        return $adminData;        
     
    }

    private function genUserData()
    {
        return $this->userRepo->findbystate('queued');
    }
}

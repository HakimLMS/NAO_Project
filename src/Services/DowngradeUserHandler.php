<?php

// src/Services/DowngradeUserHandler.php
namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use App\Services\SubscribeDataGenerator\FlusherService;
use App\Entity\User;

class DowngradeUserHandler
{
    private $em;
    private $userRepo;
    private $flusher;
    
    public function __construct(EntityManagerInterface $em, FlusherService $flusher)
    {
        $this->em = $em;
        $this->userRepo = $this->em->getRepository(User::class);
        $this->flusher = $flusher;
    }
    
    private function getUser($id)
    {
        $user = $this->userRepo->findById($id);
        return $user;
    }
    
    public function downgradeUser($id)
    {
        $user = $this->getUser($id);
        $user->setState('downgraded');
        $user->setRoles(array('ROLE_USER'));
        $user->setType('Observateur');
        $this->flusher->flushEntity($user);        
    }
}



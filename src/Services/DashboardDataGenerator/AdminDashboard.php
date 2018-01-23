<?php
// src/Services/DashboardDataGenerator/AdminDashboard.php

namespace App\Services\DashboardDataGenerator;


use App\Services\ArticleListDataGenerator\ListArticleService;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;


class AdminDashboard
{
    private $em;
    private $userRepo;
    private $articleGenerator;
    
    public function __construct(EntityManagerInterface $em, ListArticleService $articleGenerator)
    {
        $this->em = $em;
        $this->userRepo = $this->em->getRepository(User::class);
        $this->articleGenerator = $articleGenerator;
    }
    
    public function genData()
    {
        
        $userdata = $this->genUserData();
        $articleData = $this->genArticleData();
        $adminData = array(
            'templatedir' => 'Administration/dashboard.html.twig',
            'content' => array( 
                'user' => $userdata,
                'articles' => $articleData)
            );          
        return $adminData;        
     
    }

    private function genUserData()
    {
        return $this->userRepo->findbystate('queued');
    }
    
    private function genArticleData()
    {
        return $this->articleGenerator->findAllArticles();
    }
}

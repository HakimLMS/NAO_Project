<?php
// src/Services/DashboardDataGenerator/AdminDashboard.php

namespace App\Services\DashboardDataGenerator;


use App\Services\ArticleListDataGenerator\ListArticleService;
use App\Entity\User;
use App\Entity\Observations;
use Doctrine\ORM\EntityManagerInterface;


class AdminDashboard
{
    private $em;
    private $userRepo;
    private $articleGenerator;
    private $obsRepo;
    
    public function __construct(EntityManagerInterface $em, ListArticleService $articleGenerator)
    {
        $this->em = $em;
        $this->userRepo = $this->em->getRepository(User::class);
        $this->articleGenerator = $articleGenerator;
        $this->obsRepo = $this->em->getRepository(Observations::class);
    }
    
    public function genData()
    {   
        $observations = $this->genObservations();     
        $userdata = $this->genUserData();
        $articleData = $this->genArticleData();
        $adminData = array(
            'templatedir' => 'Administration/AdminDashboard.html.twig',
            'content' => array( 
                'userqueued' => $userdata,
                'articles' => $articleData,
                'observations' => $observations)
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
    
    private function genObservations()
    {
        $obsToValidate = $this->obsRepo->findAllQueued();
        $obsmade = 1;
        return array('obsToValidate' =>$obsToValidate, 'obsmade' => $obsmade);
    }
}

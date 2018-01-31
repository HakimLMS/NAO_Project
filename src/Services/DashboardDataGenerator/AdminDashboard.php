<?php
// src/Services/DashboardDataGenerator/AdminDashboard.php

namespace App\Services\DashboardDataGenerator;


use App\Services\ArticleListDataGenerator\ListArticleService;
use App\Entity\User;
use App\Entity\Observations;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class AdminDashboard
{
    private $em;
    private $userRepo;
    private $articleGenerator;
    private $obsRepo;
    private $tokenStorage;
    
    public function __construct(EntityManagerInterface $em, ListArticleService $articleGenerator, TokenStorageInterface $tokenstorage)
    {
        $this->em = $em;
        $this->userRepo = $this->em->getRepository(User::class);
        $this->articleGenerator = $articleGenerator;
        $this->obsRepo = $this->em->getRepository(Observations::class);
         $this->tokenStorage = $tokenstorage;
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
    
    private function genUser()
    {
        $userNametoken = $this->tokenStorage->getToken()->getUser()->getUsername();
        
        if($userNametoken == 'admin')
        {
           $user = $this->userRepo->LoadUserByUsername('Admin@loiseau-rare.fr');
        }
        else
        {
           $user = $this->userRepo->LoadUserByUsername($userNametoken);
        }
        return $user;   
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
        $id = $this->genUser()->getId();
        $obsmade =  $this->obsRepo->findAllValidatedByUser($id);
        return array('obsToValidate' =>$obsToValidate, 'obsmade' => $obsmade);
    }
}

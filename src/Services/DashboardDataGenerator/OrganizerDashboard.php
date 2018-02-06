<?php

namespace App\Services\DashboardDataGenerator;

use App\Entity\Observations;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class OrganizerDashboard
{
    private $em;
    
    private $userRepo;
    
    private $obsRepo;
    
    private $tokenStorage;


    public function __construct(EntityManagerInterface $em, TokenStorageInterface $tokenstorage)
    {
        $this->em = $em;
        $this->userRepo = $this->em->getRepository(User::class);
        $this->obsRepo = $this->em->getRepository(Observations::class);
        $this->tokenStorage = $tokenstorage;
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
       
    
    private function genObservation($user)
    {
       $id = $user->getId();
       $validated = $this->obsRepo->findAllValidatedByUser($id);
       $toValidate = $this->obsRepo->findAllQueued();
       
       return array('validated' => $validated, 'toValidate' => $toValidate);
    }
    
    private function genObsQeued($id)
    {
        
    }
    
    public function genData()
    {
        $user = $this->genUser();
        $observations = $this->genObservation($user);
        
        if($user->getState != 'validated')
        {
            
        }
        $orgaData = array(
            'templatedir' => 'Administration/OrganizerDashboard.html.twig',
            'content' => array('observations' => $observations),
            'user' => $user
            );          
        return $orgaData;        
     
    }
}


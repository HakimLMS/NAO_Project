<?php
namespace App\Services;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use App\Services\DashboardDataGenerator\AdminDashboard;
use App\Services\DashboardDataGenerator\UserDashboard;
use App\Services\DashboardDataGenerator\OrganizerDashboard;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;


class DashboardHandler
{
    
    private $checker;
    
    private $adminDashboard;
    
    private $tokenStorage;
    
    private $em;
    
    private $userRepo;
    
    private $orgaDashboard;
    
    private $userDashboard;
    
    public function __construct(AuthorizationCheckerInterface $checker, AdminDashboard $adminDashboard, TokenStorageInterface $tokenstorage, EntityManagerInterface $em, UserDashboard $userDashboard, OrganizerDashboard $orgaDashboard) 
    {
        $this->checker = $checker;
        $this->adminDashboard = $adminDashboard;
        $this->orgaDashboard = $orgaDashboard;
        $this->userDashboard = $userDashboard;
        $this->tokenStorage = $tokenstorage;
        $this->em = $em;
        $this->userRepo = $this->em->getRepository(User::class);
    }

    
    private function generateActiveUser()
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
    
    public function generateData()
    {
          
        
        
          if($this->checker->isGranted('ROLE_ADMIN'))
          {
             $activeUser = $this->generateActiveUser();      
             $dashboardData = array('data' => $this->adminDashboard->genData(), 'user' => $activeUser);        
             return $dashboardData;
          }
          elseif($this->checker->isGranted('ROLE_ORGANIZER'))
          {
             $activeUser = $this->generateActiveUser();  
             $dashboardData = array('data' => $this->orgaDashboard->genData(), 'user' => $activeUser);  
             return $dashboardData;
          }
          elseif($this->checker->isGranted('ROLE_USER'))
          {
            $activeUser = $this->generateActiveUser();  
            $dashboardData = array('data' => $this->userDashboard->genData(), 'user' => $activeUser);  
             return $dashboardData;
          }
          
          
    }
}

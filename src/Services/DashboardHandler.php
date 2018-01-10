<?php
namespace App\Services;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use App\Services\DashboardDataGenerator\AdminDashboard;


class DashboardHandler
{
    
    private $checker;
    
    private $adminDashboard;
    
    public function __construct(AuthorizationCheckerInterface $checker, AdminDashboard $adminDashboard) 
    {
        $this->checker = $checker;
        $this->adminDashboard = $adminDashboard;
    }

    
    
    public function generateData()
    {
        $dashboardData = array();
        
          if($this->checker->isGranted('ROLE_ADMIN'))
          {
             //articles + Observations + comptes à valider + Observations à valider;
             $dashboardData = $this->adminDashboard->genData();             var_dump($dashboardData);
             return $dashboardData;
          }
          elseif($this->checker->isGranted('ROLE_ORGANIZER'))
          {
             //Observation + Observations à valider
             return $dashboardData;
          }
          elseif($this->checker->isGranted('ROLE_USER'))
          {
            //Observations
             return $dashboardData;
          }
          
          
    }
}

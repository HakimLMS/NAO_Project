<?php


namespace App\Services\DashboardDataGenerator;

class UserDashboard
{
    public function genData()
    {

        $adminData = array(
            'templatedir' => 'Administration/UserDashboard.html.twig',
            'content' => array(NULL)           
            );          
        return $adminData;        
     
    }
}

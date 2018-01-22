<?php

namespace App\Services\DashboardDataGenerator;

class OrganizerDashboard
{
        public function genData()
    {

        $adminData = array(
            'templatedir' => 'Administration/OrganizerDashboard.html.twig',
            'content' => array(NULL)           
            );          
        return $adminData;        
     
    }
}


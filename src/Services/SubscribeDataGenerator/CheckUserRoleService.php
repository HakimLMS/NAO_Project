<?php
// created to allow flush in DB and for the admin, to validate Naturaliste user later in his dashboard 
namespace App\Services\SubscribeDataGenerator;

Use App\Entity\User;

class CheckUserRoleService
{
    public function checkRole(User $user)
    {
        $type = $user->getType();
        
        if($type == 'Observateur' )
        {
            $user->setRoles(array('ROLE_USER'));
            $user->setState('validated');
        }
        elseif($type == 'Naturaliste')
        {
            $user->setRoles(array('ROLE_ORGANIZER'));
            $user->setState('queued');
        }
    }
}

<?php
// created to allow flush in DB and for the admin, to validate Naturaliste user later in his dashboard 
namespace App\Services;

Use App\Entity\User;

class CheckUserRoleService
{
    public function checkRole(User $user)
    {
        $roles = $user->getRoles();
        
        if($roles == 'Observateur')
        {
            $user->setState('validated');
        }
        elseif($roles == 'Naturaliste')
        {
            $user->setState('queued');
        }
    }
}

<?php
// src/Services/UserFixerService.php
//made to fix user before flush to fit with all class implemented in user
namespace App\Services\SubscribeDataGenerator;

Use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixerService
{
    private $encoder;
    
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->encoder = $passwordEncoder;
    }
    
    public function FixUser(User $user)
    {
        
        $user->setUsername();
        $password = $this->encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($password);
    }
    
}
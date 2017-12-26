<?php
//src/Form/SubscriptionType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LoginType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $option)
    {
         $builder
                 ->add('mail', MailType::class, array('label' => 'Email'))
                 ->add('password', PasswordType::class, array('label' => 'Mot de passe'))
                 ->add('Se connnecter', SubmitType::class);
    }
}

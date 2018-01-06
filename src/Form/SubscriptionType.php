<?php
//src/Form/SubscriptionType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class SubscriptionType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('type', ChoiceType::class, array( 'label' => 'Type de compte',
                'choices' => array(
                    'Obesrvateur' => 'Observateur',
                    'Naturaliste' => 'Naturaliste')
                ))
            ->add('lastname', TextType::class, array('label' => 'Nom'))
            ->add('firstname', TextType::class, array('label' => 'Prénom'))
            ->add('birth', DateType::class, array('label' => 'Date de naissance'))   
            ->add('password', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'invalid_message' => 'Les mots de passe ne correspondent pas',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options'  => array('label' => 'Mot de passe'),
                    'second_options' => array('label' => 'Confirmation du mot de passe'),
                    ))
            ->add('email', EmailType::class, array('label' => 'Adresse Email'))
            ->add('member', CheckboxType::class, array(
                'label'    => 'Je suis adhérent à l\'association',
                'required' => false
                ))
            ->add('newsletter', CheckboxType::class, array(
                'label'    => 'Je souahite m\'inscrire à la Newsletter' ,
                'required' => false
                ))
            ->add('S\'inscrire', SubmitType::class)
               ;
    }
    
}   
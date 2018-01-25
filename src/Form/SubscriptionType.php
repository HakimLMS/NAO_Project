<?php
//src/Form/SubscriptionType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
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
                    'Observateur' => 'Observateur',
                    'Naturaliste' => 'Naturaliste')
                ))
            ->add('lastname', TextType::class, array('label' => 'Votre nom'))
            ->add('firstname', TextType::class, array('label' => 'Votre prénom'))
            ->add('birth', BirthdayType::class, array(
                'label' => 'Votre date de naissance',
                'widget' =>'single_text'))   
            ->add('password', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'invalid_message' => 'Les mots de passe ne correspondent pas',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options'  => array('label' => 'Votre mot de passe'),
                    'second_options' => array('label' => 'Confirmation de votre mot de passe'),
                    ))
            ->add('email', EmailType::class, array('label' => 'Votre adresse email'))
            ->add('member', CheckboxType::class, array(
                'label'    => 'Je suis adhérent à l\'association',
                'required' => false
                ))
            ->add('newsletter', CheckboxType::class, array(
                'label'    => 'Je m\'abonne à la Newsletter' ,
                'required' => false
                ))
            ->add('conditions', CheckboxType::class, array(
                'label'    => 'J\'accepte les conditions générales d\'utilisation' ,
                'required' => true
                ))
            ->add('Inscription', SubmitType::class)
               ;
    }
    
}   
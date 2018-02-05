<?php
/**
 * Created by PhpStorm.
 * User: nduvi
 * Date: 19/12/2017
 * Time: 16:06
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname', TextType::class, array('label' => 'Nom', 'required' => true))
            ->add('firstname', TextType::class, array('label' => 'Prénom', 'required' => true))
            ->add('mail', RepeatedType::class, array('type' => EmailType::class,
                'required' => true,
                'options' => array('attr' => array('class' => 'email-field')),
                'first_options' => array('label' => 'Mail'),
                'second_options' => array('label' => 'Ressaisissez votre mail'),
                'invalid_message' => 'L\'adresse email est différente',))
            ->add('object', ChoiceType::class, array('label' => 'Objet', 'required' => true, 'choices' => array(
                'Demande d\'information' => 'Demande d\'information',
                'Devenir adhérent' => 'Devenir adhérent',
                'Autre' => 'Autre',
            )))
            ->add('content', TextareaType::class, array('label' => 'Message', 'required' => true))
            ->add('notRobot', CheckboxType::class, array('label' => 'Je ne suis pas un robot', 'required' => true))
            ->add('Envoyer', SubmitType::class)
        ;
    }
}
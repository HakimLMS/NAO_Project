<?php
/**
 * Created by PhpStorm.
 * User: nduvi
 * Date: 19/12/2017
 * Time: 16:06
 */

namespace App\Form;


use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType
{
    public function buildForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('lastname', TextType::class, array('label' => 'Nom', 'required' => true))
            ->add('firstname', TextType::class, array('label' => 'Prénom', 'required' => true))
            ->add('mail', EmailType::class, array('label' => 'Mail', 'required' => true))
            ->add('object', ChoiceType::class, array('label' => 'Objet', 'required' => true, 'choices' => array(
                'Demande d\'information' => true,
                'Devenir adhérent' => false,
                'Autre' => null,
            )))
            ->add('content', TextType::class, array('label' => 'Message', 'required' => true))
            ->add('notRobot', CheckboxType::class, array('label' => 'Je ne suis pas un robot', 'required' => true))
            ->add('Envoyer', SubmitType::class)
        ;
    }
}
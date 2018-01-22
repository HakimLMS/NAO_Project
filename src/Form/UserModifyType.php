<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserModifyType extends AbstractType
{
        public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('lastname', TextType::class, array('label' => 'Nom'))
            ->add('firstname', TextType::class, array('label' => 'Prénom'))
            ->add('image', FileType::class, array(
				'label'    => 'Image de votre profil',
				'required' => true,
                                'data_class' => null
				))
            ->add('Mettre à jour', SubmitType::class)
               ;
    }
}

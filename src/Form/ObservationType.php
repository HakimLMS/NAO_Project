<?php
//src/Form/SubscriptionType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ObservationType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('name', TextType::class, array('label' => 'Nom'))
            ->add('lat', NumberType::class, array('label' => 'Lattitude'))
            ->add('lng', NumberType::class, array('label' => 'Longitude', 'scale' => 8))
            ->add('image', FileType::class, array('label' => 'Image'))
            ->add('type', TextType::class, array('label' => 'Type'))
            ->add('Enregistrer', SubmitType::class)
               ;
    }
}

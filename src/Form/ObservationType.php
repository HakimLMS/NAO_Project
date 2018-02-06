<?php
//src/Form/SubscriptionType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ObservationType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('name', TextType::class, array('label' => 'Nom'))
            ->add('lat', NumberType::class, array('label' => 'Lattitude'))
            ->add('lng', NumberType::class, array('label' => 'Longitude', 'scale' => 8))
            ->add('image', FileType::class, array('label' => 'Image', 'required' => false))
            ->add('type', ChoiceType::class, array('label' => 'Ordre', 'choices' => array(
                'Accipitriformes' => 'Accipitriformes',
                'Anseriformes' => 'Anseriformes',
                'Bucerotiformes' => 'Bucerotiformes',
                'Caprimulgiformes' => 'Caprimulgiformes',
                'Charadriiformes' => 'Charadriiformes',
                'Columbiformes' => 'Columbiformes',
                'Coraciiformes' => 'Coraciiformes',
                'Cuculiformes' => 'Cuculiformes',
                'Eurypygiformes' => 'Eurypygiformes',
                'Falconiformes' => 'Falconiformes',
                'Galliformes' => 'Galliformes',
                'Gruiformes' => 'Gruiformes',
                'Leptosomatiformes' => 'Leptosomatiformes',
                'Opisthocomiformes' => 'Opisthocomiformes',
                'Passeriformes' => 'Passeriformes',
                'Phoenicopteriformes' => 'Phoenicopteriformes',
                'Piciformes' => 'Piciformes',
                'Procellariiformes' => 'Procellariiformes',
                'Psittaciformes' => 'Psittaciformes',
                'Sphenisciformes' => 'Sphenisciformes',
                'Strigiformes' => 'Strigiformes',
                'Tinamiformes' => 'Tinamiformes',
                'Trogoniformes' => 'Trogoniformes',
            )))
            ->add('Enregistrer', SubmitType::class)
               ;
    }
}

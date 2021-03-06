<?php
/**
 * Created by PhpStorm.
 * User: nduvi
 * Date: 18/01/2018
 * Time: 00:43
 */

namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class DonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount', NumberType::class, array(
                'label' => 'Montant',
                'attr' => array(
                    'placeholder' => 'Montant €'),
                'required' => true
                ))
            ->add('lastname', TextType::class, array(
                'label' => 'Nom',
                'attr' => array(
                    'placeholder' => 'Nom'),
                'required' => true
                ))
            ->add('firstname', TextType::class, array(
                'label' => 'Prénom',
                'attr' => array(
                    'placeholder' => 'Prénom'),
                'required' => true
                ))
            ->add('mail', EmailType::class, array(
                'label' => 'Mail',
                'attr' => array(
                    'placeholder' => 'Email'),
                'required' => true
                ))
            ->add('CB', SubmitType::class, array('label' => 'Paiement par CB'))
            ->add('CHQ', SubmitType::class, array('label' => 'Paiement par Chèque'))
            ->add('VIR', SubmitType::class, array('label' => 'Paiement par Virement'))
        ;
    }

}
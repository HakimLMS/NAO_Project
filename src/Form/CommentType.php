<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;


class CommentType extends AbstractType
{
	public function buildform(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('content', TextareaType::class, array(
				'label'    => 'Votre commentaire',
				'required' => true
				))
			->add('Publier', SubmitType::class)
		;	
	}
}
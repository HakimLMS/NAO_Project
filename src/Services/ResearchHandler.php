<?php

namespace App\Services;

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Aves;
use App\Form\ResearchBirdType;

class ResearchHandler
{
	private $formFactory;


	public function __construct(FormFactoryInterface $formFactory)
	{
		$this->formFactory = $formFactory;
	}


	private function generateForm(Aves $aves)
	{
		$form = $this->formFactory->create(ResearchBirdType::class, $aves);
		return $form;
	}

	private function generateResponse($form, Request $request)
	{
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			//query code
		}
	}

	public function generateData(Request $request)
	{
		$aves = new Aves;
		$form = $this->generateForm($aves);
		$this->generateResponse($form, $request);

		return array('form' => $form);
	}
}
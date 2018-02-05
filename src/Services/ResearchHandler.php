<?php

namespace App\Services;

use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Aves;
use App\Form\ResearchBirdType;


class ResearchHandler
{
	private $formFactory;
	private $em;
	private $avesRepo;


	public function __construct(FormFactoryInterface $formFactory, EntityManagerInterface $em)
	{
		$this->formFactory = $formFactory;
		$this->em = $em;
		$this->avesRepo = $this->em->getRepository(Aves::class);
	}


	private function generateForm(Aves $aves)
	{
		$form = $this->formFactory->create(ResearchBirdType::class, $aves);
		return $form;
	}

	public function generateBird($cd_name)
	{
		$bird = $this->avesRepo->findOneByCdName($cd_name);
		return $bird;
	}

	public function generateBirds($vernName) 
	{
		$birds = $this->avesRepo->findByVernName($vernName);
		return $birds;
	}

	private function generateResponse($form, Request $request)
	{
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$vernName = $form['vern_name']->getData();
			$birds = $this->generateBirds($vernName);	
		}

		return $form;
	}

	public function generateData(Request $request)
	{
		$aves = new Aves;
		$form = $this->generateForm($aves);
		$this->generateResponse($form, $request);

		return $form;
	}
}
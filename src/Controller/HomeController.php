<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{

	/**
	 * @Route("/", name="home")
	 */
	public function index()
	{
		return $this->render('home.html.twig');
	}


	/**
	 * @Route("/mentions-legales", name="mentions_legales")
	 */
	public function mentions()
	{
		return $this->render('mentions_legales.html.twig');
	}

	/**
	 * @Route("/association", name="association")
	 */
	public function association()
	{
		return $this->render('association.html.twig');
	}

}
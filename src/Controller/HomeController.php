<?php
/**
 * Created by PhpStorm.
 * User: nduvi
 * Date: 20/12/2017
 * Time: 17:14
 */

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormBuilderInterface;

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
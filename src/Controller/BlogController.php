<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Article;
use App\Entity\Comment;
use App\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
    	return $this->render('blog/home.html.twig');
    }	


    /**
     * @Route("/blog", name="blog_list")
     */
    public function list()
    {
        $articles = $this->getDoctrine()
        	->getRepository(Article::class)
        	->findAll();

        return $this->render('blog/list.html.twig', array(
        	'articles' => $articles,
        	));	
    }


    /**
     * @Route("/blog/{id}", name="article_single")
     */
    public function single(Request $request, $id)
    {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        if(!$article) {
            throw $this->createNotFoundException('Pas d\'article correspondant');
        } 

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if($form->isSubmitted() && $form->isValid()) {
            $em(persist($comment));
            $em->flush();

        }

        return $this->render('blog/single.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
            ));   
    }
}

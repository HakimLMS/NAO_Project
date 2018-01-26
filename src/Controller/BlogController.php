<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Services\ArticleListDataGenerator\ListArticleService;
use App\Services\SingleArticleHandler;
use App\Services\NewArticleHandler;
use App\Services\DeleteArticleHandler;
use App\Services\ModifyArticleHandler;
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
    public function bloglist(ListArticleService $articleService)
    {
        $articles = $articleService->findAllArticles();
        return $this->render('blog/list.html.twig', array('articles' => $articles ));	
    }

    
    /**
     * @Route("/blog/single/{id}", name="article_single")
    */
    public function single(Request $request, SingleArticleHandler $singleHandler, $id)
    {
        $arrayData = $singleHandler->generateData($request, $id);
        return $this->render($arrayData['template'], array(
            'data' => $arrayData['data']
            ));   
    }
   
    /**
    * @Route("/blog/new_article", name="new_article")
    */
    public function newArticleAction(Request $request, NewArticleHandler $newHandler)
    {
        $form = $newHandler->generateData($request);
        if($form->isSubmitted() && $form->isValid())
        {
            return $this->redirectToRoute('dashboard');
        }
        return $this->render('blog/new.html.twig', array('form' => $form->createView()));
    }
    
    /**
     * @Route("/blog/delete/{id}", name="delete_article") 
     */
    public function deleteArticleAction(Request $request, DeleteArticleHandler $deleteArticle, $id)
    {
        $deleteArticle->response($id);
        return $this->redirectToRoute('dashboard');
    }
    
    /**
     * @Route("/blog/modify/{id}", name="modify_article")
     */
    public function modifyArticleAction(Request $request, ModifyArticleHandler $modifyArticle, $id)
    {
       $form  = $modifyArticle->response($id, $request);
       return $this->render('blog/modify.html.twig', array('form' => $form->createView()));
    }
}

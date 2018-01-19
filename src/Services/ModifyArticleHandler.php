<?php

namespace App\Services;

use App\Services\SubscribeDataGenerator\FlusherService;
use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ArticleType;
use App\Entity\Article;

class ModifyArticleHandler
{
    private $em;
    
    private $articleRepo;
    
    private $flusher;
    
    private $checker;
    
    private $formFactory;
    
    public function __construct(EntityManagerInterface $em, AuthorizationCheckerInterface $checker, FlusherService $flusher, FormFactoryInterface $formFactory){
        $this->em = $em;
        $this->articleRepo =  $this->em->getRepository(Article::class);
        $this->checker = $checker;
        $this->formFactory = $formFactory;
        $this->flusher = $flusher; 
    }
    
    private function findArticle($id){
        $article = $this->articleRepo->find($id);
        return $article;
    }
    
    private function generateForm(Article $article)
    {   
        $form  = $this->formFactory->create(ArticleType::class, $article);
        return $form;
        
    }
    
    private function updateArticle($form, Article $article, Request $request)
    {
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $this->flusher->flushEntity($article);
        }
    }
    
    public function response($id, Request $request){
        if($this->checker->isGranted('ROLE_ADMIN'))
        {
            $article = $this->findArticle($id);            
            $form = $this->generateForm($article);
            $this->updateArticle($form, $article, $request);
            return $form;            
        }
        else
        {
           throw new AccessDeniedException("Accès refusé. Votre compte n'a pas les droits nécéssaires pour acceder à cette fonctionnalité" );
        }
        
    } 
}

<?php
namespace App\Services;

use App\Services\SubscribeDataGenerator\FlusherService;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Form\CommentType;
use App\Entity\Comment;
use App\Entity\Article;
use App\Entity\User;

class SingleArticleHandler
{
    private $formFactory;
    
    private $flusher;
    
    private $em;
    
    private $articleRepo;
    
    private $commentRepo;
    
    private $userRepo;
    
    private $tokenStorage;
    
    public function __construct(FlusherService $flusher, EntityManagerInterface $em, FormFactoryInterface $formFactory, TokenStorageInterface $tokenstorage)
    {
        $this->formFactory = $formFactory;
        $this->flusher = $flusher;
        $this->em = $em;
        $this->tokenStorage = $tokenstorage;
        $this->articleRepo = $this->em->getRepository(Article::class);
        $this->commentRepo = $this->em->getRepository(Comment::class);
        $this->userRepo = $this->em->getRepository(User::class);
        
    }
    
    private function generateCommentAndForm()
    {        
        $comment = new Comment();
        $form = $this->formFactory->create(CommentType::class, $comment);
            return array("form" => $form, "comment" => $comment);
    }
    
    private function generateArticle($id)
    {
        $article = $this->articleRepo->findById($id);
        return $article;
    }
    
    private function generateComments($articleId)
    {
        $comments = $this->commentRepo->findByArticle($articleId);
        return $comments;
    }
    
    private function generateUser()
    {
        $userNametoken = $this->tokenStorage->getToken()->getUser()->getUsername();
        
        if($userNametoken = 'Admin')
        {
           $user = $this->userRepo->LoadUserByUsername('Admin@loiseau-rare.fr');
        }
        else
        {
           $user = $this->userRepo->LoadUserByUsername($userNametoken);
        }
        return $user;
    }
    
    public function generateData(Request $request, $id)
    {
        
        $article = $this->generateArticle($id);        
        $comments = $this->generateComments($id);
        
        if($article != null && $comments != null)
        {
            $article->setComments($comments);
        }
        
        $array = $this->generateCommentAndForm();
        $form = $array['form'];
        $comment = $array['comment'];
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $user = $this->generateUser();
            $comment->setAuthor($user);
            $article->AddComments($comment);
            $this->flusher->flushEntity($article);
        }
        
        return array('article' => $article, 'form' => $form);
    }
    
}

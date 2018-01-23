<?php

namespace App\Entity;
 use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;


    /**
     * @ORM\Column(type="string")
     */
    private $content;


    /**
     * @ORM\Column(type="datetime")
     */
    private $dateComment;


    /**
     * @ORM\Column(type="boolean")
     */
    private $reported;



    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Article", inversedBy="comments")
     * @ORM\JoinColumn(nullable=true)
     */
    private $article;



    public function __construct()
    {
        $this->dateComment = new \DateTime();
        $this->reported = false;
    }


    public function getId()
    {
        return $this->id;
    }


    public function getAuthor() 
    {
        return $this->author;
    }


    public function setAuthor(User $author)
    {
        $this->author = $author;
        return $this;
    }


    public function getContent() 
    {
        return $this->content;
    }


    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }


    public function getDateComment() 
    {
        return $this->dateComment;
    }


    public function setDateComment($dateComment)
    {
        $this->dateComment = $dateComment;
        return $this;
    }


    public function getReported() 
    {
        return $this->reported;
    }


    public function setReported($reported)
    {
        $this->reported = $reported;
        return $this;
    }


    public function getArticle() 
    {
        return $this->article;
    }


    public function setArticle(Article $article)
    {
        $this->article = $article;
        return $this;
    }
}

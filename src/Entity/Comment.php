<?php

namespace App\Entity;

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
     * @ORM\Column(type="string")
     */
    private $author;


    /**
     * @ORM\Column(type="string")
     */
    private $content;


    /**
     * @ORM\Column(type="date")
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



    public function getId()
    {
        return $this->id;
    }


    public function getAuthor() 
    {
        return $this->author;
    }


    public function setAuthor($author)
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


    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }
}

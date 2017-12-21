<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Comment;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
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
    private $title;


    /**
     * @ORM\Column(type="string")
     */
    private $content;


    /**
     * @ORM\Column(type="string")
     */
    private $author;


    /**
     * @ORM\Column(type="date")
     */
    private $dateArticle;


    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ArticleImage", cascade={"persist"})
     */
    private $image;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="article", cascade={"persist"})
     */
    private $comments;



    public function getId() 
    {
        return $this->id;
    }


    public function getTitle() 
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }


    public function getContent() 
    {
        return $this->content;
    }


    public function setContent($content)
    {
        $this->content = $Content;
        return $this;
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


    public function getDateArticle() 
    {
        return $this->dateArticle;
    }


    public function setDateArticle($dateArticle)
    {
        $this->dateArticle = $dateArticle;
        return $this;
    }


    public function getImage() 
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }


    public function getComments() 
    {
        return $this->comments;
    }


    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\Column(type="date")
     */
    private $dateArticle;


    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Veuillez insérer une image de type JPG ou PNG")
     * 
     */
    private $image;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="article", cascade={"persist"})
     */
    private $comments;



    public function __construct()
    {
        $this->dateArticle = new \DateTime();
        $this->comments = new ArrayCollection();
    }



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
        $this->content = $content;
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


    public function addComments(Comment $comments)
    {
        $this->comments[] = $comments;
        $comments->setArticle($this);

        return $this;
    }


}

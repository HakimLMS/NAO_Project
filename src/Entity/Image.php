<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
abstract class Image
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
    private $url;



    /**
     * @ORM\Column(type="string")
     */
    private $name;



    public function getId()
    {
    	return $this->id;
    }


    public function getUrl() 
    {
        return $this->url;
    }


    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


    public function getName() 
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ObservationsRepository")
 */
class Observations
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
    private $name;
    
    /**
    * @ORM\Column(type="float")
    */
    private $lat;
    
    /**
    * @ORM\Column(type="float")
    */
    private $lng;
    
     /**
    * @ORM\Column(type="string", nullable=true)
    */
    private $Image;
    
    /**
    * @ORM\Column(type="string")
    */
    private $type;
    
     /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    private $validated;
    
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    private $address;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    public function __construct()
    {
        $this->validated = false;
    }
    
    function getAddress() {
        return $this->address;
    }   
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getLat() {
        return $this->lat;
    }

    function getLng() {
        return $this->lng;
    }

    function getType() {
        return $this->type;
    }

    function getValidated() {
        return $this->validated;
    }

    function getImage() {
        return $this->Image;
    }
    
    function getUser() {
        return $this->user;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLat($lat) {
        $this->lat = $lat;
    }

    function setLng($lng) {
        $this->lng = $lng;
    }

    function setImage($Image) {
        $this->Image = $Image;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setValidated($validated) {
        $this->validated = $validated;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setUser($user) {
        $this->user = $user;
    }


    

}

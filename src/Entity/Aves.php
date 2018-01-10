<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AvesRepository")
 */
class Aves
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
    private $order_aves;

    /**
     * @ORM\Column(type="string")
     */
    private $family;

    /**
     * @ORM\Column(type="string")
     */
    private $cd_name;

    /**
     * @ORM\Column(type="string")
     */
    private $lb_name;

    /**
     * @ORM\Column(type="string")
     */
    private $vern_name;


    public function getId()
    {
    	return $this->id;
    }

    public function getOrderAves()
    {
    	return $this->order_aves;
    }

    public function setOrderAves($order_aves)
    {
    	$this->order_aves = $order_aves;
    	return $this;
    }

    public function getFamily()
    {
    	return $this->family;
    }

    public function setFamily($family)
    {
    	$this->family = $family;
    	return $this;
    }

    public function getCdName()
    {
    	return $this->cd_name;
    }

    public function setCdName($cd_name)
    {
    	$this->cd_name = $cd_name;
    	return $this;
    }

    public function getLbName()
    {
    	return $this->lb_name;
    }

    public function setLbName($lb_name)
    {
    	$this->lb_name = $lb_name;
    	return $this;
    }

    public function getVernName()
    {
    	return $this->vern_name;
    }

    public function setVernName($vern_name)
    {
    	$this->vern_name = $vern_name;
    	return $this;
    }
}

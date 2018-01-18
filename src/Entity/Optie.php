<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OptieRepository")
 */
class Optie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $optieOmschrijving;

    /**
     * @ORM\Column(type="decimal")
     */
    private $optiePrijs;

    /**
     * @ORM\Column(type="datetime")
     */
    private $optieDatumUit;

    /**
     * @ORM\Column(type="datetime")
     */
    private $optieDatumTerug;

    /**
     * @ORM\Column(type="dateinterval")
     */
    private $optieDagenVerhuurd;

    /**
     * @ORM\Column(type="string")
     */
    private $beschikbaarheid;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Order", inversedBy="opties")
     */
    private $order;

    /**
     * @return mixed
     */
    public function getOptieOmschrijving()
    {
        return $this->optieOmschrijving;
    }

    /**
     * @param mixed $optieOmschrijving
     */
    public function setOptieOmschrijving($optieOmschrijving)
    {
        $this->optieOmschrijving = $optieOmschrijving;
    }

    /**
     * @return mixed
     */
    public function getOptiePrijs()
    {
        return $this->optiePrijs;
    }

    /**
     * @param mixed $optiePrijs
     */
    public function setOptiePrijs($optiePrijs)
    {
        $this->optiePrijs = $optiePrijs;
    }

    /**
     * @return mixed
     */
    public function getOptieDatumUit()
    {
        return $this->optieDatumUit;
    }

    /**
     * @param mixed $optieDatumUit
     */
    public function setOptieDatumUit($optieDatumUit)
    {
        $this->optieDatumUit = $optieDatumUit;
    }

    /**
     * @return mixed
     */
    public function getOptieDatumTerug()
    {
        return $this->optieDatumTerug;
    }

    /**
     * @param mixed $optieDatumTerug
     */
    public function setOptieDatumTerug($optieDatumTerug)
    {
        $this->optieDatumTerug = $optieDatumTerug;
    }

    /**
     * @return mixed
     */
    public function getOptieDagenVerhuurd()
    {
        return $this->optieDagenVerhuurd;
    }

    /**
     * @param mixed $optieDagenVerhuurd
     */
    public function setOptieDagenVerhuurd($optieDagenVerhuurd)
    {
        $this->optieDagenVerhuurd = $optieDagenVerhuurd;
    }

    /**
     * @return mixed
     */
    public function getBeschikbaarheid()
    {
        return $this->beschikbaarheid;
    }

    /**
     * @param mixed $beschikbaarheid
     */
    public function setBeschikbaarheid($beschikbaarheid)
    {
        $this->beschikbaarheid = $beschikbaarheid;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RijbewijsRepository")
 */
class Rijbewijs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;


    private $klantGegevens;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Testrit", mappedBy="rijbewijs")
     */
    private $testrit;

    /**
     * @ORM\Column(type="integer")
     */
    private $rijbewijsnummer;

    /**
     * @ORM\Column(type="string")
     */
    private $rijbewijsType;

    /**
     * @ORM\Column(type="datetime")
     */
    private $rijbewijsGeldigtot;

    public function __construct()
    {
        $this->testrit = new ArrayCollection();
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

    /**
     * @return mixed
     */
    public function getRijbewijsnummer()
    {
        return $this->rijbewijsnummer;
    }

    /**
     * @param mixed $rijbewijsnummer
     */
    public function setRijbewijsnummer($rijbewijsnummer)
    {
        $this->rijbewijsnummer = $rijbewijsnummer;
    }

    /**
     * @return mixed
     */
    public function getRijbewijsType()
    {
        return $this->rijbewijsType;
    }

    /**
     * @param mixed $rijbewijsType
     */
    public function setRijbewijsType($rijbewijsType)
    {
        $this->rijbewijsType = $rijbewijsType;
    }

    /**
     * @return mixed
     */
    public function getRijbewijsGeldigtot()
    {
        return $this->rijbewijsGeldigtot;
    }

    /**
     * @param mixed $rijbewijsGeldigtot
     */
    public function setRijbewijsGeldigtot($rijbewijsGeldigtot)
    {
        $this->rijbewijsGeldigtot = $rijbewijsGeldigtot;
    }

    /**
     * @return mixed
     */
    public function getKlantGegevens()
    {
        return $this->klantGegevens;
    }

    /**
     * @param mixed $klantGegevens
     */
    public function setKlantGegevens($klantGegevens)
    {
        $this->klantGegevens = $klantGegevens;
    }
}

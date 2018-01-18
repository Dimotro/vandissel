<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KlantadresRepository")
 */
class Klantadres
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Klantgegeven", inversedBy="klantNAW")
     */
    private $klantGegevens;

    /**
     * @ORM\Column(type="string")
     */
    private $klantAdres;

    /**
     * @ORM\Column(type="string")
     */
    private $klantHuisnummer;

    /**
     * @ORM\Column(type="string")
     */
    private $klantWoonplaats;

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
    public function getKlantAdres()
    {
        return $this->klantAdres;
    }

    /**
     * @param mixed $klantAdres
     */
    public function setKlantAdres($klantAdres)
    {
        $this->klantAdres = $klantAdres;
    }

    /**
     * @return mixed
     */
    public function getKlantHuisnummer()
    {
        return $this->klantHuisnummer;
    }

    /**
     * @param mixed $klantHuisnummer
     */
    public function setKlantHuisnummer($klantHuisnummer)
    {
        $this->klantHuisnummer = $klantHuisnummer;
    }

    /**
     * @return mixed
     */
    public function getKlantWoonplaats()
    {
        return $this->klantWoonplaats;
    }

    /**
     * @param mixed $klantWoonplaats
     */
    public function setKlantWoonplaats($klantWoonplaats)
    {
        $this->klantWoonplaats = $klantWoonplaats;
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

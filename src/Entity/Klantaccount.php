<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KlantaccountRepository")
 */
class Klantaccount
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Order", mappedBy="klant")
     */
    private $bestellingen;

    /**
     * @ORM\Column(type="string")
     */
    private $klantEmail;


    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $klantGebruikersnaam;

    /**
     * @ORM\Column(type="string")
     */
    private $klantWachtwoord;

    /**
     * @ORM\Column(type="boolean")
     */
    private $klantStatus;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Klantgegeven", inversedBy="klantAccount")
     */
    private $klantPersoonlijkeGegevens;

    public function __construct()
    {
        $this->bestellingen = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getKlantEmail()
    {
        return $this->klantEmail;
    }

    /**
     * @param mixed $klantEmail
     */
    public function setKlantEmail($klantEmail)
    {
        $this->klantEmail = $klantEmail;
    }

    /**
     * @return mixed
     */
    public function getKlantWachtwoord()
    {
        return $this->klantWachtwoord;
    }

    /**
     * @param mixed $klantWachtwoord
     */
    public function setKlantWachtwoord($klantWachtwoord)
    {
        $this->klantWachtwoord = $klantWachtwoord;
    }

    /**
     * @return mixed
     */
    public function getKlantStatus()
    {
        return $this->klantStatus;
    }

    /**
     * @param mixed $klantStatus
     */
    public function setKlantStatus($klantStatus)
    {
        $this->klantStatus = $klantStatus;
    }

    /**
     * @return mixed
     */
    public function getKlantPersoonlijkeGegevens()
    {
        return $this->klantPersoonlijkeGegevens;
    }

    /**
     * @param mixed $klantPersoonlijkeGegevens
     */
    public function setKlantPersoonlijkeGegevens($klantPersoonlijkeGegevens)
    {
        $this->klantPersoonlijkeGegevens = $klantPersoonlijkeGegevens;
    }

    /**
     * @return mixed
     */
    public function getBestellingen()
    {
        return $this->bestellingen;
    }

    /**
     * @return mixed
     */
    public function getKlantGebruikersnaam()
    {
        return $this->klantGebruikersnaam;
    }

    /**
     * @param mixed $klantGebruikersnaam
     */
    public function setKlantGebruikersnaam($klantGebruikersnaam)
    {
        $this->klantGebruikersnaam = $klantGebruikersnaam;
    }


}

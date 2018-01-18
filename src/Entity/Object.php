<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ObjectRepository")
 */
class Object
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", nullable=false)
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Order", mappedBy="object")
     */
    private $order;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Specificatie", mappedBy="")
     */
    private $specificatie;

    /**
     * @ORM\Column(type="string")
     */
    private $chassisnummer;

    /**
     * @ORM\Column(type="integer")
     */
    private $objId;

    /**
     * @ORM\Column(type="string")
     */
    private $kenteken;

    /**
     * @ORM\Column(type="string")
     */
    private $objType;

    /**
     * @ORM\Column(type="boolean")
     */
    private $beschikbaarheid;

    /**
     * @ORM\Column(type="datetime")
     */
    private $objDatumUit;

    /**
     * @ORM\Column(type="datetime")
     */
    private $objDatumTerug;

    /**
     * @ORM\Column(type="dateinterval")
     */
    private $objDagenVerhuurd;

    /**
     * @return mixed
     */
    public function getChassisnummer()
    {
        return $this->chassisnummer;
    }

    /**
     * @param mixed $chassisnummer
     */
    public function setChassisnummer($chassisnummer)
    {
        $this->chassisnummer = $chassisnummer;
    }

    /**
     * @return mixed
     */
    public function getObjId()
    {
        return $this->objId;
    }

    /**
     * @param mixed $objId
     */
    public function setObjId($objId)
    {
        $this->objId = $objId;
    }

    /**
     * @return mixed
     */
    public function getKenteken()
    {
        return $this->kenteken;
    }

    /**
     * @param mixed $kenteken
     */
    public function setKenteken($kenteken)
    {
        $this->kenteken = $kenteken;
    }

    /**
     * @return mixed
     */
    public function getObjType()
    {
        return $this->objType;
    }

    /**
     * @param mixed $objType
     */
    public function setObjType($objType)
    {
        $this->objType = $objType;
    }

    /**
     * @return mixed
     */
    public function getObjDatumUit()
    {
        return $this->objDatumUit;
    }

    /**
     * @param mixed $objDatumUit
     */
    public function setObjDatumUit($objDatumUit)
    {
        $this->objDatumUit = $objDatumUit;
    }

    /**
     * @return mixed
     */
    public function getObjDatumTerug()
    {
        return $this->objDatumTerug;
    }

    /**
     * @param mixed $objDatumTerug
     */
    public function setObjDatumTerug($objDatumTerug)
    {
        $this->objDatumTerug = $objDatumTerug;
    }

    /**
     * @return mixed
     */
    public function getObjDagenVerhuurd()
    {
        return $this->objDagenVerhuurd;
    }

    /**
     * @param mixed $objDagenVerhuurd
     */
    public function setObjDagenVerhuurd($objDagenVerhuurd)
    {
        $this->objDagenVerhuurd = $objDagenVerhuurd;
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
    public function getSpecificatie()
    {
        return $this->specificatie;
    }

    /**
     * @param mixed $specificatie
     */
    public function setSpecificatie($specificatie)
    {
        $this->specificatie = $specificatie;
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

}

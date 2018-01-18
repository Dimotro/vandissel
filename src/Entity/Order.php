<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Klantaccount", inversedBy="bestellingen")
     */
    private $klant;

    /**
     * @ORM\Column(type="string")
     */
    private $ordernummer;

    /**
     * @ORM\Column(type="datetime")
     */
    private $orderDatum;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Object", inversedBy="order")
     */
    private $object;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Optie", inversedBy="")
     * @ORM\Column(nullable=true)
     */
    private $opties;

    /**
     * @return mixed
     */
    public function getOrdernummer()
    {
        return $this->ordernummer;
    }

    /**
     * @param mixed $ordernummer
     */
    public function setOrdernummer($ordernummer)
    {
        $this->ordernummer = $ordernummer;
    }

    /**
     * @return mixed
     */
    public function getOrderDatum()
    {
        return $this->orderDatum;
    }

    /**
     * @param mixed $orderDatum
     */
    public function setOrderDatum($orderDatum)
    {
        $this->orderDatum = $orderDatum;
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
    public function getKlant()
    {
        return $this->klant;
    }

    /**
     * @param mixed $klant
     */
    public function setKlant($klant)
    {
        $this->klant = $klant;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

}

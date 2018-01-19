<?php

namespace App\Controller;

use App\Entity\Object;
use App\Entity\Specificatie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function addObject ()
    {

        $objecten = new Object();
        $objecten->setObjType(2);
        $objecten->setBeschikbaarheid(2);
        $objecten->setChassisnummer("test");
        $objecten->setKenteken("test");
        $objecten->setObjId(1);

        $specificaties =  new Specificatie();
        $specificaties->setBouwjaar(1995);
        $specificaties->setHoogte(115);
        $specificaties->setLengteOpbouw(123);
        $specificaties->setLengteTot(233);
        $specificaties->setMassaInventaris(123);
        $specificaties->setMassaMax(12);
        $specificaties->setMerk(234);
        $specificaties->setObject(47);
        $specificaties->setPrijsDag(355);
        $specificaties->setRijbewijsBenodigd(true);
        $specificaties->setType(2.5);

        $objecten->setSpecificatie($specificaties);



        $em = $this->getDoctrine()->getManager();
        $em->persist($objecten);
        $em->flush();

    }
}

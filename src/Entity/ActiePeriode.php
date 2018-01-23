<?php
/**
 * Created by PhpStorm.
 * User: imoz
 * Date: 22/01/2018
 * Time: 12:07
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="actie_periode")
 */
class ActiePeriode
{
    /**
     * @ORM\Column(type="string")
     */
    private $actiePercentage;

    /**
     * @ORM\Column(type="string")
     */
    private $actiePeriodeStart;

    /**
     * @ORM\Column(type="string")
     */
    private $actiePeriodeEinde;

    /**
     * @return mixed
     */
    public function getActiePercentage()
    {
        return $this->actiePercentage;
    }

    /**
     * @param mixed $actiePercentage
     */
    public function setActiePercentage($actiePercentage)
    {
        $this->actiePercentage = $actiePercentage;
    }

    /**
     * @return mixed
     */
    public function getActiePeriodeStart()
    {
        return $this->actiePeriodeStart;
    }

    /**
     * @param mixed $actiePeriodeStart
     */
    public function setActiePeriodeStart($actiePeriodeStart)
    {
        $this->actiePeriodeStart = $actiePeriodeStart;
    }

    /**
     * @return mixed
     */
    public function getActiePeriodeEinde()
    {
        return $this->actiePeriodeEinde;
    }

    /**
     * @param mixed $actiePeriodeEinde
     */
    public function setActiePeriodeEinde($actiePeriodeEinde)
    {
        $this->actiePeriodeEinde = $actiePeriodeEinde;
    }


}
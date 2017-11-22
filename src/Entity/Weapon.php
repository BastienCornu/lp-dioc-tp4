<?php
/**
 * Created by PhpStorm.
 * User: bastien.cornu
 * Date: 22/11/17
 * Time: 08:57
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Weapon
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="weapons")
 */
class Weapon
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $damage;

    /**
     * @ORM\Column(type="decimal")
     */
    private $damageDistanceCoef;

    /**
     * @ORM\Column(type="integer")
     */
    private $fireRate;

    /**
     * Weapon constructor.
     * @param $name
     * @param $damage
     * @param $damageDistanceCoef
     * @param $fireRate
     */
    public function __construct($name, $damage, $damageDistanceCoef, $fireRate)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->damageDistanceCoef = $damageDistanceCoef;
        $this->fireRate = $fireRate;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param mixed $damage
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

    /**
     * @return mixed
     */
    public function getDamageDistanceCoef()
    {
        return $this->damageDistanceCoef;
    }

    /**
     * @param mixed $damageDistanceCoef
     */
    public function setDamageDistanceCoef($damageDistanceCoef)
    {
        $this->damageDistanceCoef = $damageDistanceCoef;
    }

    /**
     * @return mixed
     */
    public function getFireRate()
    {
        return $this->fireRate;
    }

    /**
     * @param mixed $fireRate
     */
    public function setFireRate($fireRate)
    {
        $this->fireRate = $fireRate;
    }


}
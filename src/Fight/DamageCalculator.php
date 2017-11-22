<?php
/**
 * Created by PhpStorm.
 * User: bastien.cornu
 * Date: 22/11/17
 * Time: 11:06
 */

namespace App\Fight;


use App\Entity\Player;
use App\Entity\Weapon;

class DamageCalculator
{

    public function calculator(Weapon $weapon,$range){
        $damage = $weapon->getDamage() - ($weapon->getDamageDistanceCoef() * $range);
        return $damage < 0 ? 0 : round($damage);
    }
}
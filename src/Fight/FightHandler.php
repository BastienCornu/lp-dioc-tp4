<?php
/**
 * Created by PhpStorm.
 * User: bastien.cornu
 * Date: 22/11/17
 * Time: 11:11
 */

namespace App\Fight;

use App\Entity\Player;

class FightHandler
{

    private $damageCalculator;

    /**
     * FightHandler constructor.
     * @param $dommageCalculator
     */
    public function __construct(DamageCalculator $damageCalculator)
    {
        $this->damageCalculator = $damageCalculator;
    }

    public function handle(Fight $fight){
        $weapon = $fight->player->getCurrentWeapon();
        $damage = $this->damageCalculator->calculator($weapon,$fight->distance);
        $fight->target->setHealthPoint($fight->target->getHealthPoint() - $damage);

    }
}
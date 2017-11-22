<?php

namespace App\DataFixtures\ORM;

use App\Entity\Weapon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadWeapon extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $weapons = [
            ['shotgun', 100, 5, 3],
            ['sniper', 100, 0.3, 5],
            ['m4', 20, 0.2, 10],
            ['handgun', 25, 1, 3],
        ];

        foreach($weapons as $weaponData){
            $weapon = new Weapon($weaponData[0],$weaponData[1],$weaponData[2],$weaponData[3]);
            $this->addReference($weapon->getName(), $weapon);
            $manager->persist($weapon);
        }
        $manager->flush();
    }
}

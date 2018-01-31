<?php

namespace App\Model\Animal;

use App\Model\Contract\iCreature;
use App\Model\Mixin\Walk;

class Dog extends Animal
{
    use Walk;

    /**
     * @return string
     */
    public function wuf() :string
    {
        return 'wuf';
    }

    /**
     * @return string
     */
    public function run() :string
    {
        return 'run';
    }

    /**
     * Dog can byte any creature (for example Animal or Human)
     *
     * @param iCreature $creature
     * @return string
     */
    public function byte(iCreature $creature) :string
    {
        return 'byte ' . mb_strtolower($creature->getType()) . ' ' . $creature->getName();
    }
}
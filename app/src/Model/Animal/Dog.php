<?php

namespace App\Model\Animal;

use App\Model\Contract\iCreature;
use App\Model\Mixin\Walk;

class Dog extends Animal
{
    use Walk;

    public function wuf()
    {
        return 'wuf';
    }

    public function run()
    {
        return 'run';
    }

    public function byte(iCreature $creature)
    {
        return 'byte ' . mb_strtolower($creature->getType()) . ' ' . $creature->getName();
    }
}
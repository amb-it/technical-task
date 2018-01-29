<?php

namespace App\Model\Animal;

use App\Model\Contract\iCreature;
use App\Model\Mixin\Walk;

class Dog extends Animal
{
    use Walk;

    public function wuf() :string
    {
        return 'wuf';
    }

    public function run() :string
    {
        return 'run';
    }

    public function byte(iCreature $creature) :string
    {
        return 'byte ' . mb_strtolower($creature->getType()) . ' ' . $creature->getName();
    }
}
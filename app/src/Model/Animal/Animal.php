<?php

namespace App\Model\Animal;

use App\Model\Animal\Contract\iAnimal;
use App\Model\Contract\iCreature;
use App\Model\Mixin\CreatureBehaviour;


abstract class Animal implements iCreature, iAnimal
{
    use CreatureBehaviour;
    // todo: add mixin eat
    // todo: add man ate popcorn
    protected $name;
    protected $type;

    public function __construct($name = 'without name')
    {
        $this->name = $name;

        $class = new \ReflectionClass($this);
        $this->type = $class->getShortName();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }
}
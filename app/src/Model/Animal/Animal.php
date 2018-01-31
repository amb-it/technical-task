<?php

namespace App\Model\Animal;

use App\Model\Animal\Contract\iAnimal;
use App\Model\Contract\iCreature;
use App\Model\Mixin\CreatureBehaviour;


abstract class Animal implements iCreature, iAnimal
{
    use CreatureBehaviour;

    protected $name;
    protected $type;

    public function __construct(string $name)
    {
        $this->name = $name;

        $class = new \ReflectionClass($this);
        $this->type = strtolower($class->getShortName());
    }

    /**
     * @return string
     */
    public function getName() :string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType() :string
    {
        return $this->type;
    }
}
<?php

namespace App\Model\Human;

use App\Model\Contract\iCreature;
use App\Model\Mixin\CreatureBehaviour;
use App\Model\Mixin\Walk;

abstract class Human implements iCreature
{
    use CreatureBehaviour;
    use Walk;

    protected $name;
    protected $type;

    public function __construct($name)
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

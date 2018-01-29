<?php

namespace App\Model\Contract;

interface iCreature
{
    public function getName();
    public function getType();
    public function eat();
}
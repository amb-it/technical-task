<?php

namespace App\Model\Contract;

interface iCreature
{
    public function getName() :string;
    public function getType() :string;
    public function eat() :string;
}
<?php

namespace App\Model\Mixin;

trait CreatureBehaviour
{
    public function eat(string $food = 'food') :string
    {
        return 'eat ' . $food;
    }
}
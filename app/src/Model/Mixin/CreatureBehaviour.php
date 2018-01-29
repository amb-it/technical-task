<?php

namespace App\Model\Mixin;

trait CreatureBehaviour
{
    public function eat($food = 'food')
    {
        return 'eat ' . $food;
    }
}
<?php

namespace App\Model\Mixin;

trait CreatureBehaviour
{
    /**
     * @param string $date
     * @return string
     */
    public function bear(string $date) :string
    {
        return 'was born on ' . $date;
    }

    /**
     * @param string $food
     * @return string
     */
    public function eat(string $food = 'food') :string
    {
        return 'eat ' . $food;
    }

    /**
     * @param string $date
     * @return string
     */
    public function die(string $date) :string
    {
        return 'died on ' . $date;
    }
}
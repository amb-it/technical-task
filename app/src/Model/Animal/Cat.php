<?php

namespace App\Model\Animal;

use App\Model\Mixin\Walk;

class Cat extends Animal
{
    use Walk;

    /**
     * @return string
     */
    public function meow() :string
    {
        return 'meow';
    }
}
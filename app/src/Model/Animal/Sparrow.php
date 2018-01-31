<?php

namespace App\Model\Animal;
use App\Model\Mixin\Walk;

class Sparrow extends Animal
{
    use Walk;

    /**
     * @return string
     */
    public function tweet() :string
    {
        return 'tweet';
    }

    /**
     * @return string
     */
    public function fly() :string
    {
        return 'fly';
    }
}
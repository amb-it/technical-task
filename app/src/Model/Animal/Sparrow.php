<?php

namespace App\Model\Animal;
use App\Model\Mixin\Walk;

class Sparrow extends Animal
{
    use Walk;

    public function tweet()
    {
        return 'tweet';
    }

    public function fly()
    {
        return 'fly';
    }
}
<?php

namespace App\Model\Animal;

use App\Model\Animal\{Cat, Dog, Sparrow, Rat};
use App\Model\Animal\Contract\iAnimal;

class AnimalFactory
{
    public static function create($title, $name) :iAnimal
    {
        switch ($title) {
            case 'cat':
                $animal = new Cat($name);
                break;

            case 'dog':
                $animal = new Dog($name);
                break;

            case 'sparrow':
                $animal = new Sparrow($name);
                break;

            case 'rat':
                $animal = new Rat($name);
                break;

            default:
                throw new \Exception('Can not create animal with title = ' . $title);
        }

        return $animal;
    }
}
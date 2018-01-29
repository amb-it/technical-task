<?php

namespace App\Controller;

use App\Config;
use App\Model\Animal\AnimalFactory;
use App\Model\Human\Visitor;

class ZooController extends Controller
{
    public function explore()
    {
        $animals = $this->getAnimalObjectsArray(Config::get()['animals']);

        $this->response .= $this->showAllAnimals($animals);

        $this->response .= $this->showAnimalsBehaviours($animals);
    }

    protected function getAnimalObjectsArray($animals)
    {
        $array_of_objects = [];

        foreach ($animals as $animal) {
            $array_of_objects[] = AnimalFactory::create($animal['title'], $animal['name']);
        }

        return $array_of_objects;
    }

    protected function showAllAnimals($animals)
    {
        $output = "Animals available in the Zoo:\n";

        foreach ($animals as $animal) {
            $output .= strtolower($animal->getType()) . ' ' . $animal->getName()  . "\n";
        }

        return $output;
    }

    protected function showAnimalsBehaviours($animals)
    {
        $output  = "\nAnd what is going on in the Zoo:\n";

        $visitor = new Visitor('John');

        $output .= $visitor->getType() . ' ' . $visitor->getName() . ' ' .
            $visitor->walk() . ' and ' .
            $visitor->eat('popcorn') . "\n";


        foreach ($animals as $animal) {
            switch ($animal->getType()) {
                case 'Cat':
                    $output .= 'cat ' . $animal->getName() .
                        ' is ' . $animal->walk() . 'ing and saying ' . $animal->meow() . "\n";
                    break;

                case 'Dog':
                    $output .= 'dog ' . $animal->getName() . ' ' .
                        $animal->walk() . 'ed, then ' .
                        $animal->wuf() . 'ed to visitor '. $visitor->getName() .
                        ', started to ' . $animal->run()  .
                        ' and ' . $animal->byte($visitor) . "\n";
                    break;

                case 'Sparrow':
                    $output .= 'sparrow ' . $animal->getName() .
                        ' just ' . $animal->walk() . 'ed, ' .
                        $animal->tweet() . 'ed and then ' .
                        $animal->fly() . "ed away\n";
                    break;

                case 'Rat':
                    $output .= 'rat ' . $animal->getName() .
                        ' set at the corner and made sound like a ' . $animal->pi() . "\n";
            }
        }

        $this->response .= $output;
    }
}
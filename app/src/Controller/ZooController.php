<?php

namespace App\Controller;

use App\Config;
use App\Model\Animal\AnimalFactory;
use App\Model\Human\Visitor;

class ZooController extends Controller
{
    /**
     *  Show all animals in the Zoo and show animals behaviour examples
     */
    public function explore() :void
    {
        $animals = $this->getAnimalObjectsArray(Config::get()['animals']);

        $this->response .= $this->showAnimals($animals);

        $this->response .= $this->showAnimalsBehaviours($animals);
    }

    /**
     * Transform array of animals types and names to array of objects
     *
     * @param $animals
     * @return array
     * @throws \Exception
     */
    protected function getAnimalObjectsArray($animals) :array
    {
        $array_of_objects = [];

        foreach ($animals as $animal) {
            $array_of_objects[] = AnimalFactory::create($animal['type'], $animal['name']);
        }

        return $array_of_objects;
    }

    /**
     * Show animals (list of their types and names)
     *
     * @param array $animals
     * @return string
     */
    protected function showAnimals(array $animals) :string
    {
        $output = "Animals available in the Zoo:\n";

        foreach ($animals as $animal) {
            $output .= strtolower($animal->getType()) . ' ' . $animal->getName()  . "\n";
        }

        return $output;
    }

    /**
     * Show animals behaviour as some story what was going on when visitor came to the Zoo
     *
     * @param array $animals
     * @return string
     */
    protected function showAnimalsBehaviours(array $animals) :string
    {
        $output  = "\nAnd what is going on in the Zoo:\n";

        $visitor = new Visitor('John');

        $output .= $visitor->getType() . ' ' . $visitor->getName() . ' ' .
            $visitor->walk() . ' and ' .
            $visitor->eat('popcorn') . "\n";


        foreach ($animals as $animal) {
            switch ($animal->getType()) {
                case 'cat':
                    $output .= 'cat ' . $animal->getName() .
                        ' is ' . $animal->walk() . 'ing and saying ' . $animal->meow() . "\n";
                    break;

                case 'dog':
                    $output .= 'dog ' . $animal->getName() . ' ' .
                        $animal->walk() . 'ed, then ' .
                        $animal->wuf() . 'ed to visitor '. $visitor->getName() .
                        ', started to ' . $animal->run()  .
                        ' and ' . $animal->byte($visitor) . "\n";
                    break;

                case 'sparrow':
                    $output .= 'sparrow ' . $animal->getName() .
                        ' just ' . $animal->walk() . 'ed, ' .
                        $animal->tweet() . 'ed and then ' .
                        $animal->fly() . "ed away\n";
                    break;

                case 'rat':
                    $output .= 'rat ' . $animal->getName() .
                        ' set at the corner and made sound like a ' . $animal->pi() . "\n";
            }
        }

        return $output;
    }
}
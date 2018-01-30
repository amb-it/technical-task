<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Model\Animal\{Cat, Dog, Sparrow, Rat};

class AnimalsTest extends TestCase
{
    public function testAnimalCreation()
    {
        $cat = new Cat('Tom');

        $this->assertEquals($cat->getName(), 'Tom');
        $this->assertEquals($cat->getType(), 'Cat');
    }

    public function testCatActions()
    {
        $cat = new Cat('Tom');

        $this->assertEquals($cat->meow(), 'meow');
        $this->assertEquals($cat->walk(), 'walk');
        $this->assertEquals($cat->eat('wiskas'), 'eat wiskas');
    }

    public function testDogActions()
    {
        $dog = new Dog('Snoop');

        $this->assertEquals($dog->wuf(), 'wuf');
        $this->assertEquals($dog->run(), 'run');
    }

    public function testSparrowActions()
    {
        $sparrow = new Sparrow('Jack');
        $this->assertEquals($sparrow->fly(), 'fly');
        $this->assertEquals($sparrow->tweet(), 'tweet');
    }

    public function testRatActions()
    {
        $rat = new Rat('Splinter');
        $this->assertEquals($rat->pi(), 'pi');
    }
}
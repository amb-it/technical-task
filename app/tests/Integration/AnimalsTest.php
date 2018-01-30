<?php

namespace Test\Integration;

use PHPUnit\Framework\TestCase;
use App\Model\Animal\Dog;
use App\Model\Human\Visitor;

class AnimalsTest extends TestCase
{
    public function testDogActions()
    {
        $dog = new Dog('Snoop');
        $visitor = new Visitor('Snowflake');

        $this->assertEquals($dog->byte($visitor), 'byte visitor Snowflake');
    }
}
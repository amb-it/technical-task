<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Model\Animal\AnimalFactory;
use App\Model\Animal\Cat;

class AnimalFactoryTest extends TestCase
{
    public function testAnimalFactory()
    {
        $cat = AnimalFactory::create('cat', 'Tom');

        $this->assertInstanceOf(Cat::class, $cat);
        $this->assertEquals($cat->getType(), 'cat');
        $this->assertEquals($cat->getName(), 'Tom');
    }

    public function testAnimalFactoryWithDisallowedType()
    {
        AnimalFactory::create('dinosaur', 'Rex');

        $this->expectException(\Exception::class);
    }

    public function testAnimalFactoryWithoutName()
    {
        AnimalFactory::create('cat');

        $this->expectException(\Exception::class);
    }
}
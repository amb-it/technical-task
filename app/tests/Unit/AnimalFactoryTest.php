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
        $this->expectException(\Exception::class);

        AnimalFactory::create('dinosaur', 'Rex');
    }

    public function testAnimalFactoryWithoutName()
    {
        $this->expectException(\ArgumentCountError::class);

        AnimalFactory::create('cat');
    }
}
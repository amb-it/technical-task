<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Model\Human\Visitor;

class HumansTest extends TestCase
{
    public function testVisitorCreation()
    {
        $visitor = new Visitor('Ben');

        $this->assertEquals($visitor->getName(), 'Ben');
        $this->assertEquals($visitor->getType(), 'visitor');
    }

    public function testVisitorActions()
    {
        $visitor = new Visitor('Ben');

        $this->assertEquals($visitor->eat('popcorn'), 'eat popcorn');
    }
}
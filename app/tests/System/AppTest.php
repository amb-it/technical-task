<?php

namespace Test\System;

use PHPUnit\Framework\TestCase;
use App\Core\Kernel;

class AppTest extends TestCase
{
    public function testDefaultRoute()
    {
        $app = new Kernel;

        ob_start();
        $app->run();
        $output_content = ob_get_clean();

        $this->assertNotContains('Error', $output_content);
    }
}
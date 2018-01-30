<?php

namespace App\Controller;

abstract class Controller
{
    protected $response = '';

    public function response() :void
    {
        echo "\n" . $this->response . "\n";
    }
}
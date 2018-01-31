<?php

namespace App\Controller;

abstract class Controller
{
    protected $response = '';

    /**
     *  Response as a simple echoing
     */
    public function response() :void
    {
        echo "\n" . $this->response . "\n";
    }
}
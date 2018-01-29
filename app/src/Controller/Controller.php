<?php

namespace App\Controller;

abstract class Controller
{
    protected $response = '';

    public function response() :void
    {
        echo $this->response;
    }
}
<?php

namespace App\Controller;

abstract class Controller
{
    protected $response = '';

    public function response()
    {
        echo $this->response;
    }
}
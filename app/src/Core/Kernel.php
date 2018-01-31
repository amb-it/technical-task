<?php

namespace App\Core;

class Kernel
{
    const CONTROLLER_NAMESPACE = 'App\Controller\\';

    /**
     *  Here performed some routing, response and Exception handling
     */
    public function run() :void
    {
        // depending on tasks here can be some routing in the future
        if (!isset($router)) {
            $router['controller'] = 'Zoo';
            $router['action'] = 'explore';
        }

        try {
            $controller = $this::CONTROLLER_NAMESPACE . $router['controller'] . 'Controller';

            $controller = new $controller;

            $controller->{$router['action']}();

            $controller->response();
        } catch (\Exception $e) {
            echo "Error. " . $e->getMessage() . "\n";
        }
    }
}
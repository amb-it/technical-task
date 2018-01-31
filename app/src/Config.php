<?php

namespace App;

class Config
{
    /**
     * Returns config as array
     * Array of animals is as starting point
     *
     * @return array
     */
    public static function get() :array
    {
        $config['animals'] = [
            ['type' => 'cat',      'name' => 'Garfield'],
            ['type' => 'cat',      'name' => 'Tom'],
            ['type' => 'dog',      'name' => 'Droopy'],
            ['type' => 'sparrow',  'name' => 'Jack'],
            ['type' => 'rat',      'name' => 'Splinter']
        ];

        return $config;
    }
}
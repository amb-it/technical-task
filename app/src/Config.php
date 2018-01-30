<?php

namespace App;

class Config
{
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
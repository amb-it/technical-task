<?php

namespace App;

class Config
{
    public static function get()
    {
        $config['animals'] = [
            ['title' => 'cat',      'name' => 'Garfield'],
            ['title' => 'cat',      'name' => 'Tom'],
            ['title' => 'dog',      'name' => 'Droopy'],
            ['title' => 'sparrow',  'name' => 'Jack'],
            ['title' => 'rat',      'name' => 'Splinter']
        ];

        return $config;
    }
}
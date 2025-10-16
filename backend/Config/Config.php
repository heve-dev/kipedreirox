<?php

namespace App\Kipedreiro\Config;

class Config
{
    public static function get()
    {
        return [
            'database' => [
            'driver' => 'mysql',
            'mysql' => 
                  [
                    'host' => 'localhost',
                    'db_name' => 'ki_pedreiro',
                    'username' => 'root',
                    'password' => NULL,
                    'charset' => 'utf8',
                    'port' => NULL,
                ],
            ]
        ];
    }
}

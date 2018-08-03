<?php
    return [
        'host' => 'mysql:host=localhost',
        'dbname' => 'dbname=inmobiliaria',
        'user' => 'root',
        'password' => '',
        'options' =>[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]        
    ];
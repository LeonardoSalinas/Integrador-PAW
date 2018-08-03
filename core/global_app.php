<?php
namespace App\Core;

class GlobalApp
{
    protected static $registry = [];

    public static function bind($key, $value)
    {
        $this->registry[$key] = $value;
    }

    public static function get($key)
    {
        return $this->registry[$key];
    }
}
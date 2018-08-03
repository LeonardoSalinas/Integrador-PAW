<?php
namespace App\Core;

class Helper{
    public static function view($name, $data = []){
        extract($data);
        return require "application/views/{$name}.php";
    }

    public static function redirect($path){
        header("Location: /{$path}");
    }
}
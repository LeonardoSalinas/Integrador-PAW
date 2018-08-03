<?php

namespace App\Core\Models\DataBase;

 class Connection{
    
    public static function getConnection($config){
        try{
            
            $conn = new \PDO(
                    $config['host'].";".
                    $config['dbname'],
                    $config['user'],
                    $config['password'],
                    $config['options']);
            return $conn;
        } catch(PDOException $e) {
            $error = $e->getMessage();
            $conn = NULL;
            return $error;
        }
    }
 }


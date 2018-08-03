<?php

namespace App\Core;

use App\Core\GlobalApp;
use App\Core\Models\DataBase\Connection;

GlobalApp::bind('config', require ('config/config.php'));
GlobalApp::bind('db_pdo', Connection::getConnection(GlobalApp::get('config')));



/*require ('core/Router.php');

$router = new Router;
require ('config/routes.php');
$router->direct();
 * 
 */
<?php

//namespace Core;

use App\Core\GlobalApp;
use App\Core\Models\DataBase\{QueryBuilder, Connection};

GlobalApp::bind('config', require ('../config/config.php'));
GlobalAPP::bind('db', new QueryBuilder(Connection::getConnection(GlobalApp::get('config'))));

print var_dump(GlobalApp::get('config'));exit;


require ('../models/connection.php');
require ('../models/queryBuilder.php');
require_once ('../controllers/Basecontroller.php');

/*require ('core/Router.php');

$router = new Router;
require ('config/routes.php');
$router->direct();
 * 
 */
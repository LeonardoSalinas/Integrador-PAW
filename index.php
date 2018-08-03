<?php
require 'vendor/autoload.php';
require 'core/loader.php';
print 'llegue';
//require('application/controllers/home.php');
use App\Core\{GlobalApp, Router, Request};
use App\Core\Exceptions\RouteNotFoundException as RouteNotFoundException;


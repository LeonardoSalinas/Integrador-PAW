<?php
require 'vendor/autoload.php';
require 'core/loader.php';

use App\Core\{GlobalApp, Router, Request};
use App\Core\Exceptions\RouteNotFoundException as RouteNotFoundException;

try {
	Router::load('application/routes.php')
	    ->direct(Request::uri(), Request::method());
} catch (RouteNotFoundException $e) {
	http_response_code(404);
	Router::load('application/routes.php')->direct('not_found', 'GET');
	print ('Status Code: 404 - Route not found'. ["Error" => $e]);
} catch (Exception $e) {
	http_response_code(500);
	Router::load('application/routes.php')->direct('internal_error', 'GET');
	print ('Status Code: 500 - Internal Server Error'. ["Error" => $e]);
}
?>


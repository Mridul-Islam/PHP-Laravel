<?php

declare(strict_types=1);
require 'vendor/autoload.php';


use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$router = new RouteCollector();

$router->get('/', function(){
    return 'This is home page';
});
$router->get('/product/{id:\d+}', function($id){
    return 'This is product page of: ' . $id;
});


$dispatcher = new Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $path);
echo $response;


/*
require "Router.php";
$router = new Router();
$router->add('/', function(){
    echo 'This is the home page';
});
$router->add('/about', function(){
    echo 'This is about page';
});
$router->add('/contact', function(){
    echo 'This is contact page';
});
$router->add('/product/{id}', function($id){
    echo 'Product with id = '.$id;
});
$router->add('/product/{id}/order/{order_id}', function($id, $order_id){
    echo 'Product with id = '.$id . ' order id = '.$order_id;
});

$router->dispatch($path);
*/





/*
switch ($path) {
    case '/':
        echo 'This is home page';
        break;
    case '/about':
        echo 'This is about page';
        break;
    case '/contact':
        echo 'This is contact page';
        break;
    default:
        echo 'Page Not Found';
}
*/

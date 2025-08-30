<?php

use App\User;
use Database\Models\ProductModel;
use Framework\Router;

//spl_autoload_register(function(string $class) {
//    $path = 'src/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
//    require $path;
//});
require __DIR__ . '/vendor/autoload.php';


$user = new User();
echo $user->getName();

$product = new ProductModel();
echo $product->getId();

$router = new Router();
echo get_class($router);

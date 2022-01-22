<?php declare(strict_types=1);

use Backend\Container;

require __DIR__ . '/../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$container = new Container();

if ($uri === '/login') {

}

if ($uri === '/register') {

}

<?php declare(strict_types=1);

use Backend\Container;
use Backend\MySqlConnection;

$container = new Container();

$container->add('pdo', static function (): PDO {
    return MySqlConnection::fromConfig(include __DIR__ . 'database.php');
});

<?php

use app\framework\database\Connection;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__,2));
$dotenv->load();

require './bootstrap.php';
$connection = Connection::getConnection();
$query = $connection->query("select * from pessoas");
var_dump($query->fetchAll());

//routerExecute();
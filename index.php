<?php
require_once("config.php");

use classes\factory\DataBaseFactory as Factory;

$driver = "MYSQL";
//$driver = Factory::MYSQL;
$dbConfig['host'] = 'localhost';
$dbConfig['username'] = "root";
$dbConfig['password'] = '';
$dbConfig['database'] = 'dbphp7';

echo var_dump($dbConfig);

$mysql =  Factory::create($dbConfig, $driver);
$conn = $mysql->getConnection();

echo "conectou na base <br>";

$mysql->closeConnection();

echo "encerrou conexão <br>";
 ?>
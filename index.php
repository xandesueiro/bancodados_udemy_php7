<?php
require_once("config.php");

use classes\factory\DataBaseFactory as Factory;

// mysql database cnnection
//$driver = Factory::MYSQL;
$driver = "MYSQL";
$dbConfig['host'] = 'localhost';
$dbConfig['username'] = "root";
$dbConfig['password'] = '';
$dbConfig['database'] = 'dbphp7';

echo var_dump($dbConfig);

$mysql =  Factory::create($dbConfig, $driver);
$conn = $mysql->getConnection();

echo $conn;
 ?>
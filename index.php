<?php
require_once("config.php");

use factory\DataBaseFactory as Factory;

// mysql database cnnection
//$driver = Factory::MYSQL;
$driver = "MYSQL";
$dbConfig['host'] = 'localhost';
$dbConfig['username'] = "u573737848_isa";
$dbConfig['password'] = 'Wm1sc2FHOTBZWE5rYjNCaGNHRnBNVGszTlNNPQ==';
$dbConfig['database'] = 'u573737848_dbisa';
$dbConfig['token'] = 'UlhOMFpTRERxU0J2SUhSdmEyVnVJSEJoY21FZ1kyOTBjbTlzWlNCdWJ5QmlZVzVqYnlCa1pTQmtZV1J2Y3c9PQ==';
//echo base64_encode(base64_encode("Este é o token para cotrole no banco de dados"))."<br>";

echo var_dump($dbConfig);

$mysql =  Factory::create($dbConfig, $driver);
$conn = $mysql->getConnection();

echo $conn;

 ?>
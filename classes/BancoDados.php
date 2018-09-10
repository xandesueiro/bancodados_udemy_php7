<?php
//namespace classes;

abstract class BancoDados extends PDO
{

	protected $conn;

	//abstract function __construct($dbConfig);
	abstract function getConnection();
	abstract function closeConnection();

}
?>
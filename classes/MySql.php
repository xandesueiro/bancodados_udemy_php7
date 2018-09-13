<?php

//namespace classes;
use interfaces\BancoDados;

/**
 * classe de implementacao para driver MYSQL
 */
class MySql extends PDO implements BancoDados
{
	private $conn;

	function __construct($dbConfig)
	{
		//implemenar
		echo "construtor MYSQL"."<br>";

		$username	= $dbConfig['username'];
		$db 		= $dbConfig['database'];
		$password 	= $dbConfig['password'])
		$host		= $dbConfig['host'];
		$token 		= $dbConfig['token'];

		//cotrutor herdado do PDO
		$connection = new BancoDados("mysql:dbname=".$db.";host=".$host, $username, $password);
		$this->setConn($connection);
	}

	public function getConn()
	{
		return $this->$conn;
	}

	public function setConn($connection)
	{
		$this->$conn = $connection;
	}

	public function getConnection()
	{
		return $this->getConn();
	}

	public function closeConnection()
	{
		//implemenar
	}
}
 ?>
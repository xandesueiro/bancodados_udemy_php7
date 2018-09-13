<?php
namespace classes;

use interfaces\BancoDados;
use \PDO;

/**
 * classe de implementacao para driver MYSQL
 */
//class MySql extends PDO implements BancoDados
class MySql implements BancoDados
{
	private $conn;

	function __construct($dbConfig)
	{
		//implemenar
		echo "construtor MYSQL instanciado"."<br>";

		$username	= $dbConfig['username'];
		$db 		= $dbConfig['database'];
		$password 	= $dbConfig['password'];
		$host		= $dbConfig['host'];

		echo "<strong>username: </strong>"	. $username . "<br>";
		echo "<strong>db: </strong>"		. $db . "<br>";
		echo "<strong>password: </strong>"	. $password . "<br>";
		echo "<strong>host: </strong>"		. $host . "<br>";

		//cotrutor herdado do PDO
		$connection = new PDO("mysql:dbname=".$db.";host=".$host, $username, $password);
		$this->setConn($connection);
	}

	public function getConn()
	{
		return $this->conn;
	}

	public function setConn($connection)
	{
		$this->conn = $connection;
	}

	public function getConnection()
	{
		return $this->getConn();
	}

	public function closeConnection()
	{
		$this->conn = null;
	}
}
 ?>

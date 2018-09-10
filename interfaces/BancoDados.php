<?php
namespace interfaces;

interface BancoDados
{
	//private $conn;
	public function __construct($dbConfig);
	public function getConnection();
	public function closeConnection();
	public function getConn();
	public function setConn($connection);

}
?>
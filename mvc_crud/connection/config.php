<?php

class config
{
	public $hostname;
	public $username;
	public $password;
	public $database;
	public $prefix;
	public $connector;
	
	function __construct($hostname = NULL, $username = NULL, $password = NULL, $database = NULL, $prefix = NULL, $connector = NULL)
	{
		$this->hostname = !empty($hostname) ? $hostname : "";
		$this->username = !empty($username) ? $username : "";
		$this->password = !empty($password) ? $password : "";
		$this->database = !empty($database) ? $database : "";
		$this->prefix = !empty($prefix) ? $prefix : "";
		$this->connector = !empty($connector) ? $connector : "mysqli";
	}
	
	function __destruct()
	{
		
	}
}


?>

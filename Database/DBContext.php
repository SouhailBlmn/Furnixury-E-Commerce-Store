<?php


class DBContext {
	protected string $serverName="localhost";
	protected string $userName="root";
	protected string $password="";
	protected string $DBName="furnixury";

	public $conn = null;

	public function __construct() {

		try {
			$conn = new PDO("mysql:host=$this->serverName;dbname=furnixury", $this->userName, $this->password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected successfully";
		} catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}

	}


}


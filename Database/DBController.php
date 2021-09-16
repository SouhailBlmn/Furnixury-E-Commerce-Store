<?php


class DBController {
	protected string $serverName="localhost";
	protected string $userName="root";
	protected string $password="";
	protected string $DBName="furnixury";

	public $conn = null;

	public function __construct() {

		try {
			$this->conn = new PDO("mysql:host=$this->serverName;dbname=furnixury", $this->userName, $this->password);
			// set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}

	}


}


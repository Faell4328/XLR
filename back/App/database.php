<?php

if(!isset($started)){
	die("Erro 000");
}

class Database{

	private $name_database;
	private $password_database;
	private $connection_database;

	public function __construct(){
		$this->name_database = getenv("DB_NAME");
		$this->password_database = getenv("DB_PASSWORD");

		if($this->name_database == "" && $this->password_database == ""){
			die("Erro: 123");
		}

		$this->connect_database();

	}

	private function connect_database(){
		$this->connection_database = new mysqli("172.19.0.2", "root", $this->password_database, $this->name_database, "3306");

		if($this->connection_database->connect_error){
			die("Erro 442");
		}

	}

}

?>

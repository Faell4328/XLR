<?php

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

		$this->connection_database = new mysqli("mysql", "root", $this->password_database, $this->name_database, "3306");

		if($this->connection_database->connect_error){
			die("Erro 442");
		}
	}

	public function check_status(){

		$sql = "SELECT COUNT(*) FROM sistema;";
		$return = $this->connection_database->query($sql);

		if($return == false){

			$sql = "CREATE TABLE IF NOT EXISTS sistema (status FLOAT(2), nome_loja CHAR(30));";
			$this->connection_database->query($sql);

			$sql = "INSERT INTO sistema (status, nome_loja) VALUES (0, 'default');";
			$this->connection_database->query($sql);

			return 0;
		}
		else{

			$sql = "SELECT status FROM sistema";
			$return = $this->connection_database->query($sql);

			if($return->num_rows){
				$return = $return->fetch_assoc();
			}
			else{
				die("Erro: 312");
			}

			return $return["status"];
		}
	}

	public function update_data($data){

		$consulta_tratada = $this->connection_database->prepare('UPDATE '.$data['name_table'].' SET '.$data['name_column'].';');

		if($data["quatity"] == 1){
			$consulta_tratada->bind_param($data['type'], $data['value']);
		}
		else if($data["quatity"] == 2){
			$consulta_tratada->bind_param($data['type'], $data['value'][0], $data['value'][1]);
		}

		$store_result = $consulta_tratada->execute();
		$retorno = $store_result;

		if($retorno == false){
			return 0;		
		}
		else{
			return 1;
		}
	}

}

?>

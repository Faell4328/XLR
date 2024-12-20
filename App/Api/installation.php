<?php

class Installation{

	private $problem_message="";

	public function receive_information_from_website(){
		if(isset($_POST["name_store"])){
    		if(strlen($_POST["name_store"]) <= 30 && $_POST["name_store"] != ""){
					$return_value=[
						"value"=>[$_POST["name_store"], "0.1"],
						"type"=>"sd",
						"name_table"=>"sistema",
						"name_column"=>"nome_loja=?, status=?",
						"quatity"=>2
					];

					return $return_value;
    		}
    		else{
					die("O nome está vazio ou é maior que 30 caracteres");
  	  	}
		}
		else{
			die("Não foi enviado o valor");
		}
	}

	private function check_admin_name(){
		if(!isset($_POST["admin_name"])){
			return false;
		}
		
		if(strlen($_POST["admin_name"]) < 2 || strlen($_POST["admin_name"]) > 30){
			return false;
		}
		echo "ok";

		return true;
	}

	private function check_admin_password(){
		echo "ok";

		return true;
	}

	public function receive_administrator_name_passowrd(){
		if($this->check_admin_name() && $this->check_admin_password()){
			echo "ok";
		}
		else{
			die("Erro: 571");
		}
	}
}

?>

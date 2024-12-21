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

		return true;
	}

	private function check_admin_password(){
		if(!isset($_POST["admin_password"])){
			return false;
		}
		
		if(strlen($_POST["admin_password"]) < 8 || strlen($_POST["admin_password"]) > 30){
			die("Your passowrd must be a minimum of 8 caracters and a maximum of 30");
		}

		$weight_password = 0;
		$regular_expression = "/\W/";
		if(!preg_match_all($regular_expression, $_POST["admin_password"], $return)){
			die("Você deve colocar caracterer especial");
		}

		$regular_expression = "/[a-z]/";
		if(!preg_match_all($regular_expression, $_POST["admin_password"], $return)){
			die("Você deve colocar pelo menos um caractere minúsculo");
		}

		$regular_expression = "/[A-Z]/";
		if(!preg_match_all($regular_expression, $_POST["admin_password"], $return)){
			die("Você deve colocar pelo menos um caractere maiúsculo");
		}

		$regular_expression = "/[0-9]/";
		if(!preg_match_all($regular_expression, $_POST["admin_password"], $return)){
			die("Você deve colocar pelo menos um número");
		}

		return true;
	}

	public function receive_administrator_name_passowrd(){
		if($this->check_admin_name() && $this->check_admin_password()){
			echo "está ti lindo";
		}
		else{
			die("Nome ou Senha não foi enviado");
		}
	}
}

?>

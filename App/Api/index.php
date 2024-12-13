<?php

class Index{
	public function __construct(){
		include_once("database.php");
		$db = new Database();
		$status = $db->check_status();
		echo $status;

		if($status < 1){
			if($status == 0){
				if(isset($_POST["nome_loja"])){
					if(strlen($_POST["nome_loja"]) <= 30 && $_POST["nome_loja"] != ""){
						$db->insert_data($_POST["nome_loja"]);
					}
					else{
						die("O nome está vázio ou é maioz que 30 caracteres");
					}
				}
			}
		}
		else if($status > 1){

		}
		else{

		}

	}

}

$index = new Index();


?>

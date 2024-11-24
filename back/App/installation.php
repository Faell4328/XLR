<?php

if(!isset($started)){
	die("Erro 000");
}

require_once(__DIR__."/message.php");
$message = new Message;

class Installation{
	
	public function __construct($status){

		if($status == 0){

			if(isset($_POST["nome_loja"])){
				
				if(strlen($_POST["nome_loja"]) > 30 || strlen($_POST["nome_loja"]) == "" ){
					$mensage_return = [
						"status" => "error",
						"mensage" => "Não pode passar de 30 caracteres e nem estar vazia o nome da loja"
					];

					die(json_encode($mensage_return));
				}
				else{
					die($GLOBALS["message"]->message_ok("Nome da loja salvo"));
				}

			}

			else{
				die($GLOBALS["message"]->message_error("Informe o nome da Loja"));
			}

		}
	}
}

?>

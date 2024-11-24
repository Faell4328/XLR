<?php

if(!isset($started)){
	die("Erro 000");
}

class Router{
	public $info;
	public $path;
	public $parameters;

	public function __construct(){

		$this->info = $_SERVER['REQUEST_URI'];

		$this->path = parse_url($this->info)["path"];
		$this->parameters = $_GET;

		$this->check_url();

	}

	private function check_url(){

		# array with valid url
		$url_valid=array("/", "/installation", "/login", "/cadastro");

		if(!in_array($this->path, $url_valid)){
			die("URL invalida, por favor insira uma URL válida");
		}

	}
}

?>

<?php

require_once(__DIR__."/App/router.php");
$router=new Router;

# check if it has already been installed
if($router->path == "/installation" && file_exists(".configSystem")){
	$return=[
		"status" => "erro",
		"mensagem" => "arquivo ja criado"
	];
	die(json_encode($return));
}
else if($router->path == "/installation" && !file_exists(".configSystem")){
	fopen(".configSystem", "a");
	die("Arquivo criado");
}

echo "home";

?>

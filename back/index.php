<?php

$started = true;
$status = "";
$route = "/";

require_once(__DIR__."/App/message.php");
$message = new Message;

require_once(__DIR__."/App/router.php");
$router = new Router;
$route = $router->path;

require_once(__DIR__."/App/database.php");
$db = new Database;
$status = $db->check_status();

if($status < 1 && $route != "/installation"){
	die($message->message_error("É necessário fazer a instalação"));
}
else if($status < 1){
	require_once(__DIR__."/App/installation.php");
	$installation = new Installation($status);
}

?>

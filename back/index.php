<?php

$started = true;
$status = "";

require_once(__DIR__."/App/router.php");
$router = new Router;

require_once(__DIR__."/App/database.php");
$db = new Database();
$status = $db->check_status();

if($status == 0){
	require_once(__DIR__."/App/installation.php");
	$installation = new installation();
}

?>

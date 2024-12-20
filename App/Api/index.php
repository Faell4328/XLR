<?php

class Index{
	private $db;
	public $status;

	public function __construct(){
		include_once("database.php");
		include_once("message.php");

		$this->db = new Database;
		$this->status = $this->db->check_status();

		if($this->status == 0){
			include_once("installation.php");
			$installation = new Installation();
			$return_installation = $installation->receive_information_from_website();
			$this->db->update_data($return_installation);
			$this->status = $this->db->check_status();
		}
		if($this->status == 0.1){
			die("ok");
		}
	}
}

$index = new Index();

?>

<?php

class Message{
	
	public function message_ok($text){
		$message = [
			"status" => "ok",
			"message" => $text
		];

		return json_encode($message);
	}

	public function message_error($text){
		$message = [
			"status" => "error",
			"message" => $text
		];

		return json_encode($message);
	}

}

?>

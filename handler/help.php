<?php  
	use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

	function help($cmd){
		if($cmd == null){
			$result = new TextMessageBuilder("command list : mock.\n/help command_name for more");
		} else if($cmd == "mock") {
			$result = new TextMessageBuilder("/mock name;topic");
		}


		return $result;
	}


?>

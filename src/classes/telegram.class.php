<?php

class JanitorTelegram extends Module {


	private $chat_id;
	private $token;
	public $version;


	function __construct($_settings) {

		$this->version = "1";

		# Instantiate the client.
		$this->chat_id = $_settings["chat_id"];
		$this->token = $_settings["token"];


		// token
		$this->addToModel("telegram_token", array(
			"type" => "string",
			"label" => "Bot token",
			"required" => true,
			"hint_message" => "Type your Bot token.", 
			"error_message" => "Bot token must be filled out."
		));

		// chat_id
		$this->addToModel("telegram_chat_id", array(
			"type" => "string",
			"label" => "Chat ID",
			"required" => true,
			"hint_message" => "Type your Chat ID.", 
			"error_message" => "Chat ID must be filled out."
		));		

	}

	function send($_options) {

		$text = false;

		if($_options !== false) {
			foreach($_options as $_option => $_value) {
				switch($_option) {

					case "text"                  : $text                  = $_value; break;

				}
			}
		}

		// Use curl to send


	}

}

<?php

class Client{
	private $name;

	function __construct($name){
		$this->name = $name;
	}

	static function allClients(){
		$string = file_get_contents("clientes_falsos.json");
		$json_a = json_decode($string, true);
		$string ="";
		foreach ($json_a as $key => $value) {
		    $string = $string . $key;
		    $string = $string . "<br>";
		}	
		return $string;
	}

	static function jsonClients(){
		$string = file_get_contents("clientes_falsos.json");
		$json_a = json_decode($string, true);
		return $json_a;
	}


	function saveClient(){
		$json_a = Client::jsonClients();
		$json_a[$this->name] = "";
		$string = json_encode($json_a);
		file_put_contents('clientes_falsos.json', $string);



	}

	function getName(){
		return $this->name;
	}

	function setName($name){
		$this->name = $name;
	}

}

$cliente = new Client("Cliente 4");
$cliente->saveClient();
//include 'clients_list.php';


<?php
require_once 'Bootstrap\Database.php';


class Client{
	private $name;
	private $password;
	private $id;

	function __construct($id=null,$name,$password){
		$this->id=$id;
		$this->name = $name;
		$this->password=$password;

	}
	//Devuelve la lista de clientes como string
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
	//Devuelve la lista de clientes como un objeto JSON
	static function jsonClients(){
		$string = file_get_contents("clientes_falsos.json");
		$json_a = json_decode($string, true);
		return $json_a;
	}

	//Añade el cliente creado al archivo JSON
	function saveClient(){
		$json_a = Client::jsonClients();
		$json_a[$this->name] = "";
		$string = json_encode($json_a);
		file_put_contents('clientes_falsos.json', $string);



	}

	public static function listClient(){
		$list = [];
		$db = Database::getInstance();
		$req = $db->query('SELECT * FROM clients');
		foreach($req->fetchAll() as $client){
			$list[] = new Client($client['client_id'], $client['client_name'], $client['client_password']);
		}

		return $list;

	}


	function getName(){
		return $this->name;
	}

	function setName($name){
		$this->name = $name;
	}

}

//$cliente = new Client("Cliente 4","");
//$cliente->saveClient();
//$cliente->allClients();
include 'clients_list.php';
//include 'clients_list.php';

var_dump(Client::listClient());


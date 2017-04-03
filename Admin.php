<?php

Class Admin
{
	private $name;
	private $password;

	function __construct($name, $password){
		$this->name = $name;
		$this->password = $password;
	}


	//Devuelve la lista de técnicos como un objeto JSON
	static function jsonAdmins(){
		$string = file_get_contents("false_admin.json");
		$json_a = json_decode($string, true);
		return $json_a;
	}


	//Devuelve la lista de Administradores como string
	static function allAdmins(){
		$json_a = Admin::jsonAdmins();
		$string ="";
		foreach ($json_a as $key => $value) {
		    $string = $string . $key;
		    $string = $string . "<br>";
		}	
		return $string;
	} 

	

	//Añade el técnico creado al archivo JSON
	function saveAdmin(){
		$json_a = Admin::jsonAdmins();
		//$json_a[$this->name] = "Password:".$this->password;
		//Aqui guardamos la "contraseña" asociada al tecnico.
		$json_a[$this->name] = array("Password"=>$this->password);
		$string = json_encode($json_a, JSON_PRETTY_PRINT);
		file_put_contents('false_admin.json', $string);
	}

	function getName(){
		return $this->name;
	}

	function setName($name){
		$this->name = $name;
	}
}

$admin = new Admin("admin2","admin2");
$admin->saveAdmin();
echo Admin::allAdmins();

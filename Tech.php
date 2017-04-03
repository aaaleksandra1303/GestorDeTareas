<?php

Class Tech
{
	private $name;
	private $password;

	function __construct($name, $password){
		$this->name = $name;
		$this->password = $password;
	}

	//Devuelve la lista de técnicos como string
	static function allTechs(){
		$json_a = Tech::jsonTechs();
		$string ="";
		foreach ($json_a as $key => $value) {
		    $string = $string . $key;
		    $string = $string . "<br>";
		}	
		return $string;
	} 

	//Devuelve la lista de técnicos como un objeto JSON
	static function jsonTechs(){
		$string = file_get_contents("false_technician.json");
		$json_a = json_decode($string, true);
		return $json_a;
	}

	//Añade el técnico creado al archivo JSON
	function saveTech(){
		$json_a = Tech::jsonTechs();
		//$json_a[$this->name] = "Password:".$this->password;
		//Aqui guardamos la "contraseña" asociada al tecnico.
		$json_a[$this->name] = array("Password"=>$this->password);
		$string = json_encode($json_a, JSON_PRETTY_PRINT);
		file_put_contents('false_technician.json', $string);
	}

	function getName(){
		return $this->name;
	}

	function setName($name){
		$this->name = $name;
	}
}

$tech = new Tech("tecnico3","3333");
$tech->saveTech();
echo Tech::allTechs();
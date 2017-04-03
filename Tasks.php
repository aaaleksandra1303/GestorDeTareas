<?php

class Task{
	private $title;

	function __construct($title){
		$this->title = $title;
	}
	//Devuelve la lista de tareas como string
	static function allTasks(){
		$string = file_get_contents("false_tasks.json");
		$json_a = json_decode($string, true);
		$string ="";
		foreach ($json_a as $key => $value) {
		    $string = $string . $key;
		    $string = $string . "<br>";

		}
		return $string;
	}
	//Devuelve la lista de tareas como un objeto JSON
	static function jsonTasks(){
		$string = file_get_contents("false_tasks.json");
		$json_a = json_decode($string, true);
		return $json_a;
	}

	//Añade el tarea creado al archivo JSON
	function saveTask(){
		$json_a = Task::jsonTasks();
		$json_a[$this->title] = "";
		$string = json_encode($json_a);
		file_put_contents('false_tasks.json', $string);



	}

	function getTitle(){
		return $this->title;
	}

	function setTitle($title){
		$this->title = $title;
	}

}

$task = new Task("task1");
$task2 = new Task("task2");
$task->saveTask();
$task2->saveTask();
include 'tasks_list.php';


<?php
namespace DreamWeb\Bootstrap;
class Config
{
	private $data;
	private static $instance;
	private function __construct()
	{
		$this->data = require(__DIR__ . '/../config/config.php');
	}
	private function __clone(){}
	public static function getInstance(){
		if (self::$instance == null) {
			self::$instance = new Config();
		}
		return self::$instance;
	}
	public function get($key)
	{
		if (!isset($this->data[$key])) {
			throw new Exception("No se encontro
				$key en la configuración.");
		}
		return $this->data[$key];
	}
}
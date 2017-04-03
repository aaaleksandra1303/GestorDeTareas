<?php
namespace DreamWeb\Bootstrap;
class Request
{
	private $domain;
	private $path;
	private $params;
	private $method;
	public function __construct() {
		$this->domain = $_SERVER['HTTP_HOST'];
		$this->path = explode('?', $_SERVER['REQUEST_URI'])[0];
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->params = array_merge($_POST, $_GET);
	}
	
	public function getUrl(): string {
		return $this->domain . $this->path;
	}
	
	public function getDomain(): string {
		return $this->domain;
	}
	
	public function getPath(): string {
		return $this->path;
	}
	
	public function getParams(): array {
		return $this->params;
	}
	
	public function getParam(string $name) {
		return $this->params[$name] ?? null;
	}
	
	public function hasParam(string $name): bool {
		return isset($this->params[$name]);
	}
	
}
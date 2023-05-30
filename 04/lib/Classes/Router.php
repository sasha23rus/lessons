<?php
namespace Lib;

class Router
{
	private array $routes;
	private object $controller;
	private string $content;
	private object $request;
	
	public function __construct()
	{
		$this->controller = new Controller();
		$this->request = new Request();
	}
	
	/**
	 * @param array $routes
	 * @return void
	 */
	public function setRoutes(Array $routes): void
	{
		$this->routes = $routes;
	}
	
	/**
	 * @return void
	 */
	public function run(): void
	{
		$currentRoute = str_replace(LOCAL_PATH, '', $_SERVER['REQUEST_URI']);
		
		$method = $this->routes[$currentRoute]??'notFoundAction';
		
		if (method_exists($this->controller, $method)) {
			$this->content = $this->controller->{$method}($this->request);
		} else {
			$this->content = 'action not found';
		}
	}
	
	/**
	 * @return string
	 */
	public function getContent(): string
	{
		return $this->content;
	}
}

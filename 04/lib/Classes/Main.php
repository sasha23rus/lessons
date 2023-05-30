<?php
namespace Lib;

class Main
{
	private object $router;

	public function __construct()
	{
		$this->router = new Router();
	}
	
	/**
	 * @return void
	 */
	public function init(): void
	{
		$routes = [
			'/'=>'homeAction',
			'/calc'=>'calcAction',
			'/square'=>'squareAction',
		];
		
		$this->router->setRoutes($routes);
		$this->router->run();
		
		echo $this->router->getContent();
	}
}

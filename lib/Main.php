<?php

namespace Lib;

class Main
{
	private object $database;
	private object $router;

	public function __construct()
	{
		$this->database = new Database();
		$this->router = new Router();
	}

	public function init(): void
	{
		echo 'main';
		$this->database->init();
		$this->router->init();


		echo $this->router->getData();
	}
}

<?php

namespace Lib;

class Main
{
	private object $database;
	private object $router;

	public function __construct()
	{
		$this->database = new Databasekit();
		$this->router = new Router();
	}

	public function init(): void
	{
		$this->database->init();
		$this->router->init();

		echo $this->router->getData();
	}
}

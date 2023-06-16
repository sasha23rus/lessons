<?php

namespace Lib;

use Illuminate\Database\Capsule\Manager as Capsule;

class Databasekit
{
	public function init()
	{
		$capsule = new Capsule();

		$capsule->addConnection([
			'driver' => 'mysql',
			'host' => DB_HOST,
			'database' => DB_NAME,
			'username' => DB_USER,
			'password' => DB_PASS,
			'charset' => 'utf8',
			'collation' => 'utf8mb3_general_ci',
			'prefix' => '',
		]);

		$capsule->bootEloquent();
	}
}

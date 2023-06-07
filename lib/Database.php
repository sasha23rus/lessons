<?php

namespace Lib;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
	public function init()
	{
		$DB = new Capsule();

		$DB->addConnection([
			'driver' => 'mysql',
			'host' => DB_HOST,
			'database' => DB_NAME,
			'username' => DB_USER,
			'password' => DB_PASSWORD,
			'charset' => 'utf8',
			'collation' => 'utf8mb3_general_ci',
			'prefix' => '',
		]);

		$DB->bootEloquent();
	}
}

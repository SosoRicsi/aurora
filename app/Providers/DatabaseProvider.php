<?php

namespace Aurora\Providers;

use Illuminate\Database\Capsule\Manager;

class DatabaseProvider
{

	public function register(): void
	{
		$capsule = new Manager();

		$config = [
			'driver' => config('db.prod.driver'),
			'host' => config('db.prod.host'),
			'database' => config('db.prod.database'),
			'username' => config('db.prod.username'),
			'password' => config('db.prod.password'),
			'charset' => config('db.prod.charset'),
			'collation' => config('db.prod.collation'),
			'prefix' => config('db.prod.prefix')
		];
		
		if (isLocal()) {
			$config = [
				'driver' => config('db.dev.driver'),
				'host' => config('db.dev.host'),
				'database' => config('db.dev.database'),
				'username' => config('db.dev.username'),
				'password' => config('db.dev.password'),
				'charset' => config('db.dev.charset'),
				'collation' => config('db.dev.collation'),
				'prefix' => config('db.dev.prefix')
			];
		}

		$capsule->addConnection($config);
		$capsule->setAsGlobal();
		$capsule->bootEloquent();
	}

	public function boot(): void
	{
		//
	}
}

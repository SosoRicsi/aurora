<?php

namespace Aurora\Providers;

use Aurora\Facades\App;
use Aurora\Facades\Config;
use Aurora\Facades\Route;
use Aurora\http\middlewares\StartSession;
use Dotenv\Dotenv;
use Radiant\Core\Config as CoreConfig;

class AppServiceProvider
{

	public function register(): void
	{
		$application = App::getInstance();

		$dotenv = Dotenv::createImmutable(app() . "/../");
		$dotenv->load();

		Route::setApplication($application);
	}

	public function boot(): void
	{
		require base_path() . "/web/routes.php";
		Route::run();
	}
}

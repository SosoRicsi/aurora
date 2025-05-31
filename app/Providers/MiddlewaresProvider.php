<?php

namespace Aurora\Providers;

use Aurora\Facades\App;
use Aurora\Facades\Route;
use Aurora\http\middlewares\StartSession;

class MiddlewaresProvider
{

	public function register(): void
	{
		$application = App::getInstance();

		$application->web(append: [
			//
		]);

		$application->defineMiddlewareGroup('api', [
			//
		]);
	}

	public function boot(): void
	{
		//
	}
}

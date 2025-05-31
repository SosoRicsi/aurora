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

		$application->defineMiddlewareGroup('web', [
			StartSession::class,
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

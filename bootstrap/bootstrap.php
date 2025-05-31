<?php

use Aurora\Facades\App;
use Aurora\Providers\AppServiceProvider;
use Aurora\Providers\DatabaseProvider;
use Aurora\Providers\MiddlewaresProvider;

App::registerProviders([
	AppServiceProvider::class,
	MiddlewaresProvider::class,
	DatabaseProvider::class,
]);
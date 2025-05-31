<?php

namespace Aurora\Facades;

use Radiant\Facades\Facade;
use Radiant\Http\Request\Route\Router as RouterClass;

class Route extends Facade
{

	public static function getFacadeAccessor(): string 
	{
		return 'route';
	}

	public static function registerAccessor(): object 
	{
		$router = new RouterClass;

		return $router;
	}
}

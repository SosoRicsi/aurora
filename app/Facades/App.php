<?php

namespace Aurora\Facades;

use Radiant\Core\Application;
use Radiant\Facades\Facade;

class App extends Facade
{

	protected static Application $app;

	public static function setApplication(Application $application): void
	{
		self::$app = $application;
	}

	public static function getFacadeAccessor(): string
	{
		return Application::class;
	}

	public static function getInstance(): Application
	{
		if (!isset(self::$app)) {
			throw new \Exception("Application instance not set on App facade.");
		}
		return self::$app;
	}

	public static function registerAccessor(): object
	{
		// Nincs automatikus példányosítás, csak regisztráció után működik
		if (!isset(self::$app)) {
			throw new \Exception("Application instance not set on App facade.");
		}
		return self::$app;
	}
}

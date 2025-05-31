<?php

namespace Aurora\Facades;

use Radiant\Core\Config as CoreConfig;
use Radiant\Facades\Facade;

class Config extends Facade
{

	protected static CoreConfig $config;

	public static function setConfig(CoreConfig $config): void
	{
		self::$config = $config;
	}

	public static function getFacadeAccessor(): string
	{
		return CoreConfig::class;
	}

	public static function getInstance(): CoreConfig
	{
		if (!isset(self::$config)) {
			throw new \Exception("Config instance not set on App facade.");
		}
		return self::$config;
	}

	public static function registerAccessor(): object
	{
		// Nincs automatikus példányosítás, csak regisztráció után működik
		if (!isset(self::$config)) {
			throw new \Exception("Config instance not set on App facade.");
		}
		return self::$config;
	}
}

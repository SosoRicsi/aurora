<?php

return [

	'dev' => [
		'driver' => env('DATABASE_DRIVER', 'mysql'),
	
		'host' => env('DATABASE_HOST', 'localhost'),
	
		'database' => env('DATABASE', 'aurora'),
	
		'username' => env('DATABASE_USER', 'root'),
	
		'password' => env('DATABASE_PASSWORD', ''),
	
		'charset' => env('DATABASE_CHARSET', 'utf8'),
	
		'collation' => env('DATABASE_COLLATION', 'utf8_unicode_ci'),
	
		'prefix' => env('DATABASE_PREFIX', ''),

		'port' => env('DATABASE_PORT', '3306')
	],

	'prod' => [
		'driver' => env('DATABASE_DRIVER', 'mysql'),
	
		'host' => env('DATABASE_HOST', 'localhost'),
	
		'database' => env('DATABASE', 'aurora'),
	
		'username' => env('DATABASE_USER', 'root'),
	
		'password' => env('DATABASE_PASSWORD', ''),
	
		'charset' => env('DATABASE_CHARSET', 'utf8'),
	
		'collation' => env('DATABASE_COLLATION', 'utf8_unicode_ci'),
	
		'prefix' => env('DATABASE_PREFIX', ''),

		'port' => env('DATABASE_PORT', '3306')
	],


];
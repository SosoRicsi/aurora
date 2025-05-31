<?php

use Aurora\Facades\App;
use Aurora\Facades\Route;
use Aurora\Facades\Config;
use Radiant\Core\Container;
use Radiant\Session\Session;
use Radiant\Core\Application;
use Radiant\Core\Config as CoreConfig;

require __DIR__ . "/vendor/autoload.php";

$container = new Container();
$application = new Application($container);

$container->singleton(Application::class, fn() => $application);

App::setApplication($application);

$config = new CoreConfig(app() . "/config/");
Config::setConfig($config);

require __DIR__ . "/bootstrap/bootstrap.php";

App::boot();

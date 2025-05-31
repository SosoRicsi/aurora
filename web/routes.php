<?php

use Aurora\Facades\App;
use Aurora\Facades\Route;
use Radiant\Session\Session;
use Aurora\http\middlewares\StartSession;
use Aurora\http\Models\User;

Route::get('/test', function () {
	print "test";
});

<?php

use Aurora\Facades\App;
use Aurora\Facades\Route;
use Radiant\Session\Session;
use Aurora\http\middlewares\StartSession;
use Aurora\http\Models\User;

Route::get('/a', function () {
	print "<pre>";
	print_r(User::all()->toArray());
})->middleware(['@web']);

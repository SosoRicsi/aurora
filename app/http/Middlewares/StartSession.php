<?php

namespace Aurora\http\middlewares;

use Radiant\Http\Request\Request;
use Radiant\Http\Response\Response;
use Radiant\Http\Middleware\MiddlewareInterface;
use Radiant\Session\Session;

class StartSession implements MiddlewareInterface
{
	
	public function handle(Request $request, Response $response, callable $next): Response
	{
		Session::init();
		Session::flash('banán', 'alma');
		
		return $next($request, $response);
	}

}
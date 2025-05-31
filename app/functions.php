<?php

declare(strict_types=1);

use Aurora\Facades\Config;
use Radiant\Collection\SmartCollection;
use Radiant\Session\Session;

if (! function_exists('wrap')) {
    function wrap(array $items)
    {
        return new SmartCollection($items);
    }
}

if (! function_exists('sessid')) {
    function sessid()
    {
        return Session::sessid();
    }
}

if (! function_exists('session_save')) {
    function session_save(string $key, mixed $item)
    {
        Session::set($key, $item);
    }
}

if (! function_exists('session')) {
    function session(string $key, mixed $default = null)
    {
        return Session::get($key) ?: $default;
    }
}

if (!function_exists("env")) {
    function env(string $key, mixed $default = null)
    {
        return $_ENV[$key] != false ? $_ENV[$key] : $default;
    }
}

if (!function_exists("config")) {
    function config(string $key, mixed $default = null) {
        return Config::get($key, $default);
    }
}

if (!function_exists("base_path")) {
    function base_path()
    {
        return dirname(__DIR__);
    }
}

if (!function_exists("app")) {
    function app()
    {
        return base_path()."/app";
    }
}

if (!function_exists("e")) {
    function e($value, $doubleEncode = true)
    {
        if ($value instanceof BackedEnum) {
            $value = $value->value;
        }

        return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8', $doubleEncode);
    }
}


if (!function_exists("isLocal")) {
    function isLocal(): bool
    {
        return config('app.env', 'local') === 'local' ? true : false;
    }
}
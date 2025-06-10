<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/aaaa/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__ . '/aaaa/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__ . '/aaaa/bootstrap/app.php';

// ✅ IMPORTANT: Tell Laravel that THIS is the public folder
$app->usePublicPath(__DIR__);


$app->handleRequest(Request::capture());

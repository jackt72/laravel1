<?php
<<<<<<< HEAD
=======

>>>>>>> 42e9e963183f1e23f378849f909f89e3ace7720d
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
<<<<<<< HEAD
 * @author   Taylor Otwell <taylorotwell@gmail.com>
=======
 * @author   Taylor Otwell <taylor@laravel.com>
>>>>>>> 42e9e963183f1e23f378849f909f89e3ace7720d
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

<<<<<<< HEAD
$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
	$request = Illuminate\Http\Request::capture()
=======
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
>>>>>>> 42e9e963183f1e23f378849f909f89e3ace7720d
);

$response->send();

$kernel->terminate($request, $response);

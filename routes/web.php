<?php

use Illuminate\Support\Facades\Route;
//import homecontroller
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']) -> name("welcome.index");

Route::get('/signup', [HomeController::class, 'signup']) -> name("signup.index");

Route::get('/productos', [HomeController::class, 'productos']) -> name("productos.index");

Route::get('/noticias', [HomeController::class, 'noticias']) -> name("noticias.index");

Route::get('/empleos', [HomeController::class, 'empleos']) -> name("empleos.index");

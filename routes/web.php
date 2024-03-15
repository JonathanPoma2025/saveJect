<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ruta /login y html
Route::get('/login', function () {
    return view('login');
});

// Ruta /login y Controller
Route::post('/login',[UserController::class, 'login']);

// Ruta /login y html
Route::get('/register', function () {
    return view('register');
});

// Ruta /register y Controller
Route::post('/register',[UserController::class, 'create']);



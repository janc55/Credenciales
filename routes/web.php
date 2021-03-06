<?php

use App\Http\Controllers\CredencialController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("credencial", CredencialController::class);
Route::get("/credencial/{id}/imprimir", [CredencialController::class, "imprimir"]);
Route::get("/credencial/{id}/vista", [CredencialController::class, "vista"]);

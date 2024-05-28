<?php

use App\Http\Controllers\api\apiController;
use App\Http\Controllers\ClientController;
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

Auth::routes(['register' => false, 'request' => false, 'reset' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('oauth/clients',[ClientController::class, 'forUser']);
Route::post('oauth/clients',[ClientController::class, 'store']);
Route::put('oauth/clients/{client_id}',[ClientController::class, 'update']);
Route::delete('oauth/clients/{client_id}',[ClientController::class, 'destroy']);
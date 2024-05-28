<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\api\apiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AccessTokenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => 'auth:api'], function () {
	Route::post('register',[AuthController::class, 'register']);
	Route::get('user',[AuthController::class, 'user']);
	//Route::get('logout',[AuthController::class, 'logout']);
});
//Route::post('login',[AuthController::class, 'login']);
Route::post('oauth/token',[AccessTokenController::class, 'issueToken']);
Route::get('tasks',[apiController::class, 'getData']);
Route::post('tasks-save',[apiController::class, 'taskSave']);
Route::post('get-tasks',[apiController::class, 'taskGet']);
Route::post('tasks-update',[apiController::class, 'taskUpdate']);
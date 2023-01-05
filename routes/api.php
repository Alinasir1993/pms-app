<?php

use App\Http\Controllers\admin\LoginApiController;

use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('login', [LoginApiController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function(){

});
Route::resource('user', \App\Http\Controllers\admin\UserApiController::class);

Route::middleware(['middleware'=> 'loggedin'])->group(function(){

});
Route::resource('business', \App\Http\Controllers\admin\BusinessApiController::class);

Route::resource('team', \App\Http\Controllers\admin\TeamController::class);
Route::resource('team-member', \App\Http\Controllers\admin\TeamMemberController::class);

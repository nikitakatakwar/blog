<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('store',[TestController::class,'store']);

Route::resource('/users', 'UserController');

Route::get('alluser',[UserController::class,'allUser']);
//to

// Route::resource('/users', UserController::class);


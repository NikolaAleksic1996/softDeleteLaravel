<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [UserController::class, 'index']);
Route::get('softDelete/{id}', [UserController::class, 'softDelete']);
Route::get('forceDelete/{id}', [UserController::class, 'forceDelete']);

Route::get('trashed', [UserController::class, 'trashed']);
Route::get('restore/{id}', [UserController::class, 'restore']);
Route::get('restore-all', [UserController::class, 'restoreAll']);

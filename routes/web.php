<?php

use App\Http\Controllers\Api\DocumentController;
use App\Http\Controllers\Auth\RegisteredUserController;
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
  return view('index');
});
Route::get('register/Admin',[RegisteredUserController::class,'store'])->name('register');
Route::get('index',[DocumentController::class,'index']);
require __DIR__.'/auth.php';


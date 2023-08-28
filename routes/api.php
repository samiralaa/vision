<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\LabelController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ContentController;
use App\Http\Controllers\Api\DocumentController;
use App\Http\Controllers\Api\InterestedController;
use App\Http\Controllers\Api\CategoryLangController;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
// Route::resource('/document',[DocumentController::class]);

Route::get('index', [DocumentController::class, 'index']);
Route::put('update/{id}', [DocumentController::class, 'update']);
Route::get('show/{id}', [DocumentController::class, 'show']);
Route::get('getPageDate', [DocumentController::class, 'getPageDate']);
Route::get('getdocument/{id}', [DocumentController::class, 'getdocument']);

Route::post('store/content', [ContentController::class, 'store']);
Route::get('getlang/content', [ContentController::class, 'getlang']);
Route::post('update/content/{id}', [ContentController::class, 'update']);


//  the caregory lang from this youe can change and add any lang
Route::post('store/category', [CategoryLangController::class, 'store']);
Route::get('index/category', [CategoryLangController::class, 'index']);
Route::delete('delete/category/{id}', [CategoryLangController::class, 'delete']);
Route::post('update/category/{id}', [CategoryLangController::class, 'update']);

// interested

Route::get('interested/get',[InterestedController::class,'index']);
Route::post('interested/store',[InterestedController::class,'store']);
Route::delete('interested/delete/{id}',[InterestedController::class,'delete']);


//Contact Requests
Route::post('contact/index',[ContactController::class,'index']);
Route::post('contact/store',[ContactController::class,'store']);
Route::delete('delete/{id}',[ContactController::class,'delete']);

Route::get('index/Lang', [LabelController::class, 'index']);
Route::get('test/{key}/{name}', [PageController::class, 'index']);

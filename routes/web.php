<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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
/// Middleware
Route::view('user','user');
Route::view('home','home');
Route::view('noaccess','noaccess');
/// session
Route::get('session/set',[SessionController::class,'storeSessionData'])->name('boat');
Route::get('session/get',[SessionController::class,'getSessionData']);
Route::get('session/remove',[SessionController::class,'deleteSessionData']);
///DB
Route::get('posts/{name}',[PostController::class,'getAllPost']);
///post_2
Route::get('post-model',[PostController::class,'index']);

Route::post('',[PostController::class,'getAllModel']);

<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PostController;
=======
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。
>>>>>>> main

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

<<<<<<< HEAD
Route::get('/', [PostController::class, 'index']);
=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);  
>>>>>>> main

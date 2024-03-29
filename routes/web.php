<?php

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

Route::get('/home', [App\Http\Controllers\TaskController::class, 'index'])->name('home');
Route::get('/add-task', [App\Http\Controllers\TaskController::class, 'create'])->name('add-task');
Route::post('/store', [App\Http\Controllers\TaskController::class, 'store']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

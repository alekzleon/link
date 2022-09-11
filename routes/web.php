<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UrlController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::post('uploadImage', [AdminController::class, 'uploadImage'])->name('uploadImage');
    Route::post('changeColor', [AdminController::class, 'changeColor'])->name('changeColor');
    Route::post('changeAvatar', [AdminController::class, 'changeAvatar'])->name('changeAvatar');
});

Route::prefix('url')->group(function () {
    Route::get('getUrl', [UrlController::class, 'url'])->name('getUrl');
});
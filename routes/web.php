<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MapController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/admin', AdminController::class)->middleware(['auth'])->name('index', 'admin');

Route::resource('/maps', MapController::class)->middleware(['auth'])->name('index', 'maps');

Route::resource('/blogs', BlogController::class)->middleware(['auth'])->name('index', 'blogs');

require __DIR__.'/auth.php';

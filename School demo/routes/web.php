<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

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

Route::get('/index', [FileController::class,'home'])->name('index');

Route::get('/gallery', [FileController::class,'gallery'])->name('gallery');

Route::get('/blog', [FileController::class,'blog'])->name('blog');

Route::get('/teachers', [FileController::class,'teachers'])->name('teacher');

Route::get('/about', [FileController::class,'about'])->name('about');

Route::get('/contact', [FileController::class,'contact'])->name('contact');

Route::get('/registerlogin', [FileController::class,'registerlogin'])->name('registerlogin');
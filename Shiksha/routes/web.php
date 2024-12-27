<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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


Route::get('/register', function(){
    return view('register');
});

Route::post('/data-store', [TestController::class,'formData'])->name('formdata');

Route::get('/display', [TestController::class, 'show'])->name('display');

Route::get('/delete/{id}' , [TestController::class, 'destroy'])->name('delete-data');

Route::get('editdata/{id}', [Testcontroller::class, 'edit'])->name('edit-data');

Route::post('/edit-store', [TestController::class,'update'])->name('editform');



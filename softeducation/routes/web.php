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

Route::get('/durgesh',[TestController::class,'index'])->name('abc');


Route::get('/rajesh',[TestController::class,'demo'])->name('navneet');



Route::get('/training',[TestController::class,'training']);


Route::post('/store-data',[TestController::class,'storeData'])->name('storedata');


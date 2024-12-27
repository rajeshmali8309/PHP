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

Route::get('/index',function(){
    return view('project-1.index')->name('index');
});

Route::get('/gallery',function(){
    return view('project-1.gallery')->name('gallery');
});

Route::get('/teacher',function(){
    return view('project-1.teacher')->name('teacher');
});

Route:: get('/about',function(){
    return view('project-1.about')->name('about');
});

Route:: get('/contact',function(){
    return view('project-1.contact')->name('contact');
});

Route::get('/blog',function(){
    return view('project-1.blog')->name('blog');
});

Route:: get('/register',function(){
    return view('project-1.register')->name('register');
});

Route::get('/registerlogin',function(){
    return view('project-1.registerlogin')->name('registerlogin');
});


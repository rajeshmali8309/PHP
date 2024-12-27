<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\MailsendController;

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

Route::get('/mailview', [FileController::class,'mailviewfile'])->name('mail-view');




Route::get('/admin', [FileController::class,'adminpanel'])->name('admin');


Route::get('/admin-gallery', [GalleryController::class,'galleryshow'])->name('admin-gallery');
Route::post('/gallery-insert', [GalleryController::class,'store'])->name('gallery-insert');
Route::get('/delete-gallery/{id}' , [GalleryController::class, 'destroy'])->name('delete-gallery');
Route::get('/edit-gallery/{id}' , [GalleryController::class, 'edit'])->name('edit-gallery');
Route::post('/editgallery-store', [GalleryController::class,'update'])->name('editgallery-store');





Route::get('/admin-teacher', [TeacherController::class,'teacher'])->name('admin-teacher');
Route::post('/teacher-insert', [TeacherController::class,'store'])->name('teacher-insert');
Route::get('/delete-teacher/{id}' , [TeacherController::class, 'destroy'])->name('delete-teacher');
Route::get('/edit-teacher/{id}' , [TeacherController::class, 'edit'])->name('edit-teacher');
Route::post('/editteacher-store', [TeacherController::class,'update'])->name('editteacher-store');



Route::get('/admin-about', [AboutController::class,'about'])->name('admin-about');
Route::get('/add-about', [AboutController::class,'addabout'])->name('add-about');
Route::post('/about-insert', [AboutController::class,'store'])->name('about-insert');
Route::get('/delete-about/{id}' , [AboutController::class, 'destroy'])->name('delete-about');
Route::get('/edit-about/{id}' , [AboutController::class, 'edit'])->name('edit-about');
Route::post('/editabout-store', [AboutController::class,'update'])->name('editabout-store');



Route::get('/admin-contact', [ContactController::class,'contact'])->name('admin-contact');
Route::post('/contact-insert', [ContactController::class,'store'])->name('contact-insert');
Route::get('/delete-contact/{id}' , [ContactController::class, 'destroy'])->name('delete-contact');



Route::get('/admin-blogs', [BlogsController::class,'blogs'])->name('admin-blogs');
Route::get('/add-blog', [BlogsController::class,'addblog'])->name('add-blog');
Route::post('/blog-insert', [BlogsController::class,'store'])->name('blog-insert');
Route::get('/delete-blog/{id}' , [BlogsController::class, 'destroy'])->name('delete-blog');
Route::get('/edit-blog/{id}' , [BlogsController::class, 'edit'])->name('edit-blog');
Route::post('/editblog-store', [BlogsController::class,'update'])->name('editblog-store');


Route::get('/registerlogin', [FileController::class,'registerlogin'])->name('registerlogin');
Route::get('/loginshow', [FileController::class,'loginform'])->name('login-form')->middleware('LoginMiddleware');

Route::post('/register-insert', [RegistrationController::class,'store'])->name('register-insert');
Route::get('/teacher-display' , [RegistrationController::class, 'display'])->name('admin-users')->middleware('ShowdataMiddleware');
Route::get('/delete-register/{id}' , [RegistrationController::class, 'delete'])->name('delete-register');
Route::post('/check-teacherlogin', [RegistrationController::class,'checklogin'])->name('check-teacherlogin');
Route::get('/Users-logout' , [RegistrationController::class, 'logout'])->name('Users-logout');
Route::get('/mailsend' , [MailsendController::class, 'mailsend'])->name('send-mail');


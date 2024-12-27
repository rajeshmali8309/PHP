<?php

use Illuminate\Http\Request;
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
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Gallery API.........................................
Route::post('/gallery-store', [GalleryController::class,'insert']);
Route::delete('/gallery-delete/{id}' , [GalleryController::class, 'delete']);
Route::post('/updategallery', [GalleryController::class,'updategallery']);
Route::get('/all-gallery-show', [GalleryController::class,'showgallery']);

// Teachers API.........................................
Route::post('/teacher-store', [TeacherController::class,'insert']);
Route::delete('/teacher-delete/{id}' , [TeacherController::class, 'delete']);
Route::post('/updateteacher', [TeacherController::class,'updateteacher']);
Route::get('/all-teacher-show', [TeacherController::class,'showteacher']);

// About API.........................................
Route::post('/about-store', [AboutController::class,'insert']);
Route::delete('/about-delete/{id}' , [AboutController::class,'delete']);
Route::post('/updateabout-data', [AboutController::class,'updateabout']);
Route::get('/all-about-show', [AboutController::class,'showabout']);

// About API.........................................
Route::post('/blog-store', [BlogsController::class,'insert']);
Route::delete('/blog-delete/{id}' , [BlogsController::class,'delete']);
Route::post('/updateblog-data', [BlogsController::class,'updateblog']);
Route::get('/all-blog-show', [BlogsController::class,'showblog']);

// About API.........................................
Route::post('/userregister-store', [RegistrationController::class,'insert']);
Route::delete('/userregister-delete/{id}' , [RegistrationController::class,'deleteuser']);
Route::post('/updateuserregister-data', [RegistrationController::class,'updateuserregister']);
Route::get('/all-userregister-show', [RegistrationController::class,'showuserregister']);
// About API.........................................
Route::post('/contecttt-store', [ContactController::class,'insert']);
Route::delete('/contecttt-delete/{id}' , [ContactController::class,'deleteuser']);
Route::get('/all-contecttt-show', [ContactController::class,'showcontecttt']);




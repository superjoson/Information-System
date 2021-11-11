<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ImageUploadController;

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

Route::get('test', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('joson', [TestController::class, 'joson']);  
Route::post('edwin', [TestController::class, 'edwin']);
Route::get('displayMode', [TestController::class, 'display']);
Route::delete('delete/{id}', [TestController::class, 'delete']);


Route::get('edit/{id}', [TestController::class,'show_update']);
Route::put('updated/{id}',[TestController::class,'updated']);

Route::get('encrypt',[TestController::class,'ecrypt']);


// Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
// Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');


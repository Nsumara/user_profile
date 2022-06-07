<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LmsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;

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

Route::Resource('user',LmsController::class)->middleware('auth');
Route::get('addstudent',[StudentController::class,'addStudent']);
Route::get('showstudent/{id}', [StudentController::class, 'showStudent']);
Route::get('addsubject', [SubjectController::class, 'addSubject']);
Route::get('showsubject/{id}', [SubjectController::class, 'showSubject']);

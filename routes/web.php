<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Frontend\CoursesController;
use App\Http\Controllers\Frontend\ProjectsController;
use App\Http\Controllers\Admin\PhotosController;

// use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Home Page
Route::get('/', [App\Http\Controllers\FrontendController::class, 'homeIndex']);
Route::get('/course', [App\Http\Controllers\Frontend\CoursesController::class, 'index']);
Route::get('/project', [App\Http\Controllers\Frontend\ProjectsController::class, 'index']);

// Home Page

// Contact
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact.all');
// Contact

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){
	Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');
// Resource Section
	Route::resource('service',ServiceController::class);
	Route::resource('course',CourseController::class);
	Route::resource('project',ProjectController::class);
	Route::resource('contact',ContactController::class);
	Route::resource('photos',PhotosController::class);

// Resource Section
	Route::get('visitor',[App\Http\Controllers\Admin\VisitorController::class,'visitorIndex'])->name('admin.visitor');
	// Route::get('service',[App\Http\Controllers\Admin\ServiceController::class,'serviceIndex'])->name('admin.service');



});


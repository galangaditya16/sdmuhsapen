<?php

use App\Http\Controllers\backend\Achievement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\backend\CategoryProgram;
use App\Http\Controllers\backend\CategoryNewsController;
use App\Http\Controllers\backend\Contact;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\backend\TeacherNew;
use App\Http\Controllers\backend\CategoryContentController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\SliderController;
use App\Models\TeacherPositionnew;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route:Route::prefix('backyard')->group(function () {
    Route::get('/',[DashboardController::class,'index']);
    //category
    Route::resource('category-content',CategoryContentController::class);
    //menu
    Route::resource('management-menu', MenuController::class);
    Route::get('delete/{id}',[MenuController::class,'SoftDelete'])->name('softdel.menu');
    // category news
    Route::resource('category-news',CategoryNewsController::class);
    //category programs
    Route::resource('category-programs', CategoryProgram::class);
    // news
    Route::resource('news',NewsController::class);
    //slider 
    Route::resource('slider',SliderController::class);
    //achievement
    Route::resource('achievement', Achievement::class);
    // teacher
    Route::resource('teacher', TeacherNew::class);
    // teacher position
    Route::resource('teacher-position', TeacherPositionnew::class);
    //contact
    Route::resource('contact', Contact::class);
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [HomeController::class, 'profile']);

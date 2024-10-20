<?php

use App\Http\Controllers\backend\Achievement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\backend\CategoryNews;
use App\Http\Controllers\backend\CategoryProgram;
use App\Http\Controllers\backend\Contact;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\backend\TeacherNew;
use App\Models\Category;
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
    Route::resource('category',CategoryController::class);
    Route::get('category/delete/{status}/{id}',[Category::class,'SoftDelete'])->name('softdel.category');
    //menu
    Route::resource('management-menu', MenuController::class);
    Route::get('delete/{id}',[MenuController::class,'SoftDelete'])->name('softdel.menu');
    // category news
    Route::resource('category-news',CategoryNews::class);
    //category programs
    Route::resource('category-programs', CategoryProgram::class);
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

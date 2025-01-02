<?php

use App\Http\Controllers\Backend\Achievement;
use App\Http\Controllers\Backend\CategoryContentController;
use App\Http\Controllers\Backend\CategoryNewsController;
use App\Http\Controllers\Backend\CategoryProgramController;
use App\Http\Controllers\Backend\Contact;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ContetController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\backend\ProgramController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\backend\TeacherController;
use App\Http\Controllers\Backend\TeacherNew;
use App\Http\Controllers\backend\TeacherPositionController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\UserController;
use App\Models\SysPermission;
use Illuminate\Support\Facades\Route;


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
    Route::resource('category-programs', CategoryProgramController::class);
    // news
    Route::resource('news',NewsController::class);
    // content
    Route::resource('content', ContetController::class);
    //slider
    Route::resource('slider',SliderController::class);
    //achievement
    Route::resource('achievement', Achievement::class);
    // profile
    Route::resource('profile' ,ProfileController::class);
    // teacher position
    Route::resource('teacher-position',TeacherPositionController::class);
    // programs
    Route::resource('programs',ProgramController::class);
    // teacher
    Route::resource('teacher',TeacherController::class);
    // contact
    Route::resource('contact',ContactController::class);
    // user
    Route::resource('user', UserController::class);

    Route::resource('permission',RoleController::class);



});

Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/organization', [HomeController::class, 'organization'])->name('organization');
Route::get('/principals-speech', [HomeController::class, 'principalsSpeech'])->name('principals-speech');
Route::get('/teacher-and-staff', [HomeController::class, 'teacherAndStaff'])->name('teacher-and-staff');
Route::get('/facilities', [HomeController::class, 'facilities'])->name('facilities');
Route::get('/programs', [HomeController::class, 'programs'])->name('programs');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/search-news', [HomeController::class, 'searchNews'])->name('search-news');
Route::get('/news/{id}', [HomeController::class, 'newsDetail'])->name('newsDetail');
Route::get('/galery', [HomeController::class, 'galery'])->name('galery');
Route::get('/galery/{id}', [HomeController::class, 'galeryDetail'])->name('galeryDetail');

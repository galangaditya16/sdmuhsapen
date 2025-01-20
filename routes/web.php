<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\Achievement;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CategoryContentController;
use App\Http\Controllers\Backend\CategoryNewsController;
use App\Http\Controllers\Backend\CategoryProgramController;
use App\Http\Controllers\Backend\Contact;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ContetController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ProgramController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TeacherController;
use App\Http\Controllers\Backend\TeacherNew;
use App\Http\Controllers\Backend\TeacherPositionController;
use App\Http\Controllers\Frontend\BeritaController;
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

Route:Route::prefix('backyard')->middleware('auth')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index']);
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
    // permission
    Route::resource('permission',RoleController::class);
    //banner
    Route::resource('banner', BannerController::class);


    route::resource('gallery',GalleryController::class);
    Route::get('gallery/asset/{id}',[GalleryController::class,'getAsset'])->name('get.asset');
    Route::POST('gallery/remove/}',[GalleryController::class,'removeAsset'])->name('remove.asset-image');
    Route::post('upload/images-gallery/{id}', [GalleryController::class, 'uploadImages'])->name('upload.image-gallery');
    Route::get('gallery/headline/{id}',[GalleryController::class,'headline'])->name('gallery.headline');

    Route::post('logout',[AuthController::class,'logout'])->name('logout');
});

Route::get('login',[AuthController::class,'login'])->name('login');

Route::post('authentication',[AuthController::class,'authenticate'])->name('login.process');
Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/organization', [HomeController::class, 'organization'])->name('organization');
Route::get('/principals-speech', [HomeController::class, 'principalsSpeech'])->name('principals-speech');
Route::get('/teacher-and-staff', [HomeController::class, 'teacherAndStaff'])->name('teacher-and-staff');
Route::get('/facilities', [HomeController::class, 'facilities'])->name('facilities');
Route::get('/programs', [HomeController::class, 'programs'])->name('programs');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
// Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/news',[BeritaController::class,'listNews'])->name('front.news');
Route::get('/search-news', [HomeController::class, 'searchNews'])->name('search-news');
Route::get('/global-search', [HomeController::class, 'globalSearch'])->name('global-search');
Route::get('/news/{id}/{lang}', [HomeController::class, 'newsDetail'])->name('newsDetail');
Route::get('/galery', [HomeController::class, 'galery'])->name('front.galery');
Route::get('/galery/{id}', [HomeController::class, 'galeryDetail'])->name('galeryDetail');

Route::post('/contact-us', [ContactController::class, 'contactUs'])->name('contact-us');

Route::get('test', function () {
    return view('errors.404');
});

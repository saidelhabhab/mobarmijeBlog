<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\FrontendController;


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

///////////// Page 404 //////////////
Route::fallback(function(){

    return view('errors/page404');

  });

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



// authentification by github
Route::get('/auth/github/redirect', [AuthentificationController::class, 'githubredirect'])->name('githublogin');
Route::get('/auth/github/callback', [AuthentificationController::class, 'githubcallback']);

// authentification by google
Route::get('/auth/google/redirect', [AuthentificationController::class, 'googleredirect'])->name('googlelogin');
Route::get('/auth/google/callback', [AuthentificationController::class, 'googlecallback']);

// authentification by facebook
Route::get('/auth/facebook/redirect', [AuthentificationController::class, 'facebookredirect'])->name('facebooklogin');
Route::get('/auth/facebook/callback', [AuthentificationController::class, 'facebookcallback']);

// // // //
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [FrontendController::class, 'index'])->name('frontend');
Route::get('/tutorial/{category_slug}', [FrontendController::class, 'viewCategoryPost'])->name('viewCategoryPost');
Route::get('/tutorial/{category_slug}/{post_slug}', [FrontendController::class, 'viewPost'])->name('viewPost');

Route::get('/test', [FrontendController::class, 'zone'])->name('zone');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact_send', [FrontendController::class, 'contact_send'])->name('contact_send');


// comment
Route::post('/comment', [CommentController::class, 'comment'])->name('comment');
Route::post('/delete_comment', [CommentController::class, 'destory'])->name('destory');

//==============================dashboard============================

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () { // Middleware responsable 3la panel admin

    ////////****************** DASHBOARD ADMIN **************////////////////////
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboardAdmin');

        ////////****************** Category ADMIN **************////////////////////
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/add-category', [CategoryController::class, 'create_category'])->name('add-category');
    Route::post('/add-category', [CategoryController::class, 'store'])->name('store-category');
    Route::get('/edit_category/{id}', [CategoryController::class, 'edit'])->name('edit_category');
    Route::put('/update_category/{id}', [CategoryController::class, 'update'])->name('update_category');
    // Route::get('/delete_category/{id}', [CategoryController::class, 'destory'])->name('delete_category');
    Route::post('/delete_category', [CategoryController::class, 'destory'])->name('delete_category');

     ////////****************** Post ADMIN **************////////////////////
    Route::get('/post', [PostController::class, 'index'])->name('post');
    Route::get('/add-post', [PostController::class, 'create_post'])->name('add-post');
    Route::post('/add-post', [PostController::class, 'store'])->name('store-post');
    Route::get('/edit_post/{id}', [PostController::class, 'edit'])->name('edit_post');
    Route::put('/update_post/{id}', [PostController::class, 'update'])->name('update_post');
    Route::get('/delete_post/{id}', [PostController::class, 'destory'])->name('delete_post');

    ////////****************** Video ADMIN **************////////////////////
    Route::get('/videos', [VideosController::class, 'index'])->name('videos');
    Route::get('/add-video', [VideosController::class, 'create_video'])->name('add-video');
    Route::post('/add-video', [VideosController::class, 'store'])->name('store-video');
    Route::get('/edit_video/{id}', [VideosController::class, 'edit'])->name('edit_video');
    Route::put('/update_video/{id}', [VideosController::class, 'update'])->name('update_video');
    Route::get('/delete_video/{id}', [VideosController::class, 'destory'])->name('delete_video');

     ////////****************** Users  **************////////////////////
     Route::get('/users', [UserController::class, 'index'])->name('users');
     Route::get('/edit_user/{id}', [UserController::class, 'edit'])->name('edit_user');
     Route::put('/update_user/{id}', [UserController::class, 'update'])->name('update_user');


        ////////****************** settings  **************////////////////////
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
        Route::post('/save_settings', [SettingsController::class, 'save_settings'])->name('save_settings');


});

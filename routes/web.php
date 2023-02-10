<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
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

// // // //
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [FrontendController::class, 'index'])->name('frontend');
Route::get('/tutorial/{category_slug}', [FrontendController::class, 'viewCategoryPost'])->name('viewCategoryPost');
Route::get('/tutorial/{category_slug}/{post_slug}', [FrontendController::class, 'viewPost'])->name('viewPost');

Route::get('/test', [FrontendController::class, 'zone'])->name('zone');


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

     ////////****************** Users  **************////////////////////
     Route::get('/users', [UserController::class, 'index'])->name('users');
     Route::get('/edit_user/{id}', [UserController::class, 'edit'])->name('edit_user');
     Route::put('/update_user/{id}', [UserController::class, 'update'])->name('update_user');


        ////////****************** settings  **************////////////////////
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
        Route::post('/save_settings', [SettingsController::class, 'save_settings'])->name('save_settings');


});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// Posts
use App\Http\Controllers\ContentController;
// Category
use App\Http\Controllers\CategoryController;
// Login
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FilerController;
// Auth
use App\Http\Controllers\AuthorizationController;
// User
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Auth\ForgotPasswordController;


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
Auth::routes();

// Route::get('/', [CustomAuthController::class, 'index'])->name('login');
Route::get('/test', [FilerController::class, 'getData'])->name('test'); //TEST


/*
|--------------------------------------------------------------------------
| GUEST AFTER LOGIN
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'guest'], function () {
    // Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
    Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
});

/*
|--------------------------------------------------------------------------
| USER BEFORE LOGIN
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'], function () {

    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
    Route::get('gate', [AuthorizationController::class, 'index'])->name('gate')->middleware('can:isAdmin');
    /*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
*/
    Route::get('/', [ContentController::class, 'index'])->name('post');
    Route::get('/post', [ContentController::class, 'index'])->name('post');

    // Route::get('/post/create', [ContentController::class, 'create'])->name('create');
    Route::get('/post/create/{posts}', [ContentController::class, 'create'])->name('create')->middleware('can:addPost,posts');
    Route::post('/post/store/', [ContentController::class, 'store'])->name('store');

    // Route::get('/post/edit/{posts}', [ContentController::class, 'edit'])->name('edit');
    Route::get('/post/edit/{posts}', [ContentController::class, 'edit'])->name('edit')->middleware('can:update,posts');
    Route::put('/post/edit/{posts}', [ContentController::class, 'update'])->name('update');

    Route::delete('/post/{posts}', [ContentController::class, 'destroy'])->name('destroy')->middleware('can:delete,posts');
    Route::get('/post/search', [ContentController::class, 'search'])->name('search');
    Route::get('/post-detail/{id}', [ContentController::class, 'detail'])->name('detail');
    // Route::get('/post-detail/{posts}', [ContentController::class, 'detail'])->name('detail')->middleware('can:view,posts');

    /*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/
    // Route::get('getdataedt/id{id}', [CategoryController::class, 'getDataEdit'])->name('getdataedt');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    // Route::get('/category/create', [CategoryController::class, 'create'])->name('create.category');

    Route::get('/category/create/{category}', [CategoryController::class, 'create'])->name('create.category')->middleware('can:addCate,category');
    Route::post('/category/store/', [CategoryController::class, 'store'])->name('store.category');

    // Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('edit.category')->middleware('can:editCate,category');
    Route::put('/category/edit/{category}', [CategoryController::class, 'update'])->name('update.category');

    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('destroy.category')->middleware('can:deleteCate,category');

    //Update and Delete all Category status
    Route::get('/category/status', [CategoryController::class, 'editAllStatus'])->name('edit.status');
    Route::put('/edit/status', [CategoryController::class, 'updateAllStatus'])->name('update.status');
    Route::delete('/destroy', [CategoryController::class, 'destroyAllStatus'])->name('destroy.status');
    //Update and Delete List Category status
    Route::get('/category/status/list', [CategoryController::class, 'editListStatus'])->name('edit.list-status');
    Route::put('/edit/status/list', [CategoryController::class, 'updateListStatus'])->name('update.list-status');
    Route::delete('/destroylist', [CategoryController::class, 'destroyAllStatus'])->name('destroy.list-status');

    //Update and Delete all Post status
    Route::get('/post/status', [ContentController::class, 'editAllStatus'])->name('edit.post');
    Route::put('/post/status', [ContentController::class, 'updateAllStatus'])->name('update.post');
    Route::delete('/delete', [ContentController::class, 'destroyAllStatus'])->name('destroy.post');


    Route::get('/bulk-dashboard/bulk-post', [ContentController::class, 'showBulk'])->name('showBulk');
    Route::get('/bulk-dashboard/bulk-category', [CategoryController::class, 'showBulkCategory'])->name('showBulkCategory');

    // Auth
    Route::get('gate', [AuthorizationController::class, 'index'])->name('gate')->middleware('can:isAdmin');


    /*
|--------------------------------------------------------------------------
| User Profile Routes
|--------------------------------------------------------------------------
*/
    // Profile page
    Route::get('/profile', [UserProfileController::class, 'index'])->name('user.profile');
    // Update profile
    Route::put('/profile/update/{user}', [UserProfileController::class, 'updateProfile'])->name('updateProfile');
    //  RESET PASSWORD
    Route::post('/change-password', [UserProfileController::class, 'store'])->name('change.password');

    // Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    // Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    // Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    // Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

    // Route::get('change-password', 'ChangePasswordController@index');

    // Route::post('/profile/show', [UserProfileController::class, 'store']);
});























/*
|--------------------------------------------------------------------------
| Posts Routes (TEST)
|--------------------------------------------------------------------------
*/
// Route::get('/', [ContentController::class, 'index'])->name('post');
// Route::get('/post', [ContentController::class, 'index'])->name('post');
// Route::get('/post/create', [ContentController::class, 'create'])->name('create');
// Route::post('/post/store/', [ContentController::class, 'store'])->name('store');
// Route::get('/post/edit/{posts}', [ContentController::class, 'edit'])->name('edit');
// Route::put('/post/edit/{posts}', [ContentController::class, 'update'])->name('update');
// Route::delete('/post/{posts}', [ContentController::class, 'destroy'])->name('destroy');
// // SEARCH
// Route::get('/post/search', [ContentController::class, 'search'])->name('search');
// // DETAIL
// Route::get('/post-detail/{id}', [ContentController::class, 'detail'])->name('detail');

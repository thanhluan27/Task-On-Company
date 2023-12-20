<?php

use Illuminate\Support\Facades\Route;

// Posts
use App\Http\Controllers\ContentController;
// Category
use App\Http\Controllers\CategoryController;
// Login
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FilerController;
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


Route::get('/', [CustomAuthController::class, 'index'])->name('login');
Route::get('/test', [FilerController::class, 'getData'])->name('test');

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

    // ROUTER POST //
    Route::get('/post', [ContentController::class, 'index'])->name('post');
    Route::get('/post/{posts}', [ContentController::class, 'getCate'])->name('getCate');
    Route::get('/post/create', [ContentController::class, 'create'])->name('create');
    Route::post('/post/store/', [ContentController::class, 'store'])->name('store');
    Route::get('/post/edit/{posts}', [ContentController::class, 'edit'])->name('edit');
    Route::put('/post/edit/{posts}', [ContentController::class, 'update'])->name('update');
    Route::delete('/post/{posts}', [ContentController::class, 'destroy'])->name('destroy');
    Route::get('/post/search', [ContentController::class, 'search'])->name('search');
    Route::get('/post-detail/{id}', [ContentController::class, 'detail'])->name('detail');

    // ROUTER POST //
    // Route::get('getdataedt/id{id}', [CategoryController::class, 'getDataEdit'])->name('getdataedt');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('create.category');
    Route::post('/category/store/', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::put('/category/edit/{category}', [CategoryController::class, 'update'])->name('update.category');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('destroy.category');

    //Update and Delete all Category tatus
    Route::get('/category/status', [CategoryController::class, 'editAllStatus'])->name('edit.status');
    Route::put('/edit/status', [CategoryController::class, 'updateAllStatus'])->name('update.status');
    Route::delete('/destroy', [CategoryController::class, 'destroyAllStatus'])->name('destroy.status');

    //Update and Delete all Post status
    Route::get('/post/status', [ContentController::class, 'editAllStatus'])->name('edit.post');
    Route::put('/post/status', [ContentController::class, 'updateAllStatus'])->name('update.post');
    Route::delete('/delete', [ContentController::class, 'destroyAllStatus'])->name('destroy.post');
});




/*
|--------------------------------------------------------------------------
| Posts Routes
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

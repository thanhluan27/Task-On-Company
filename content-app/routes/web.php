<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContentController;
use App\Http\Controllers\DetailController;
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



// CONTENT
Route::get('/', [ContentController::class, 'index'])->name('post');
Route::get('/post', [ContentController::class, 'index'])->name('post');
Route::get('/post/create', [ContentController::class, 'create'])->name('create');
Route::post('/post/store/', [ContentController::class, 'store'])->name('store');
Route::get('/post/edit/{posts}', [ContentController::class, 'edit'])->name('edit');
Route::put('/post/edit/{posts}', [ContentController::class, 'update'])->name('update');
Route::delete('/post/{posts}', [ContentController::class, 'destroy'])->name('destroy');
// SEARCH
Route::get('/post/search', [ContentController::class, 'search'])->name('search');
// DETAIL
Route::get('/post-detail/{id}', [ContentController::class, 'detail'])->name('detail');

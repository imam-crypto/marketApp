<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/das', function () {
//     return view('cms.pages.dashboard');
// });

Auth::routes();
Route::get('/tes', function () {
    return view('index');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::resource('/banner', BannerController::class);
    Route::resource('/category', CategoryController::class);
    Route::post('banner_status', [BannerController::class, 'bannerStatus'])->name('status');
    Route::get('banner_edit', [BannerController::class, 'edit'])->name('edit');
    Route::post('banner_update', [BannerController::class, 'update'])->name('update');
});

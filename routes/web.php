<?php

use App\Http\Controllers\Admin\aboutController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\Post\PostListController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\front\FrontContactController;
use App\Http\Controllers\Front\FrontpageController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::get('/', [FrontpageController::class ,'index'])->name('front.index');
Route::get('/news', [FrontpageController::class ,'news'])->name('front.news');
Route::get('news/{slug}', [FrontpageController::class ,'news_Single'])->name('front.news_single');
Route::get('/about', [FrontpageController::class ,'about'])->name('front.about');
Route::get('/contact', [FrontpageController::class ,'contact'])->name('front.contact');
Route::get('search/}', [FrontpageController::class ,'search'])->name('front.gozleg');
// Route::post('/contact/{test}', FrontContactController::class, 'store')->name('front.contact.store');


     Route::group([  'middleware'=>['isAdmin','auth'] ,  'prefix'=>'admin'], function(){

        Route::get('dashboard', [ AdminPageController::class, 'index'])->name('admin.index');
        Route::resource('category',CategoryController::class);
        Route::resource('contact', ContactController::class);
        Route::resource('category/{category_id}/posts', PostController::class);
        Route::resource('about', aboutController::class);
        Route::get('/allposts', [PostListController::class, 'list'])->name('allpost.list');
        Route::get('/single-post/{slug}', [PostListController::class, 'single_post'])->name('single.post');


    });

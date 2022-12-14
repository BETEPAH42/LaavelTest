<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::middleware('admin')->prefix('admin')->group(function() {
    Route::get('', [MainController::class,'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/comments', CommentController::class);
});
Route::middleware('guest')->group(function(){
    Route::get('/register', [UserController::class,'create'])->name('register.create');
    Route::post('/register', [UserController::class,'store'])->name('register.store');
    Route::get('/login',[UserController::class,'loginForm'])->name('login.create');
    Route::post('/login',[UserController::class,'login'])->name('login');
});

Route::get('/logout',[UserController::class,'logout'])->name('logout')->middleware('auth');
Route::get('/', [App\Http\Controllers\PostController::class,'index'])->name('home');
Route::get('/articles', [App\Http\Controllers\PostController::class,'showPosts'])->name('post.articles');
Route::get('/article/{slug}', [App\Http\Controllers\PostController::class,'show'])->name('post.single');
Route::get('/category/{slug}', [App\Http\Controllers\CategoryController::class,'show'])->name('category.single');
Route::get('/tag/{slug}', [App\Http\Controllers\TagController::class,'show'])->name('tags.single');
Route::post('/comment/{post_id}', [App\Http\Controllers\CommentController::class,'store'])->name('comment.store');
Route::get('/contact', function(){
    return view('layouts.contact');
})->name('contact');

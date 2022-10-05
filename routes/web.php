<?php

use App\Http\Controllers\Post\StorePostController;
use App\Http\Controllers\Post\DelPostController;
use App\Http\Controllers\Post\EditPostController;
use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', TimelineController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/explore', function () {
    return view('explore');
})->middleware(['auth', 'verified'])->name('explore');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth', 'verified'])->name('profile');

Route::post('/dashboard',[StorePostController::class, 'storePost'])->name('post.store');

Route::get('/post/{post}', [ShowPostController::class])->name('post.show');

Route::get('/delete/{id}', [DelPostController::class, 'deletePost'])->name('post.delete');

Route::get('/edit/{id}', [EditPostController::class, 'editPost'])->name('post.edit');

Route::post('/edit/{id}', [EditPostController::class, 'savePost'])->name('post.save');

require __DIR__.'/auth.php';

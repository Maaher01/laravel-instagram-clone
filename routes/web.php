<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');

Route::get('/post/create', [PostsController::class, 'create']);
Route::post('/post', [PostsController::class, 'store']);
Route::get('/post/{post}', [PostsController::class, 'show']);

Route::get('/email', function () {
    return new NewUserWelcomeMail();
});

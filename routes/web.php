<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    $posts = Post::all();
    return view('pages.home', [
        'posts' => $posts
    ]);   // resources/view/home.blade.php
})->name('home');


Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/blog', function () {
    return view('pages.blog');   // resources/view/blog.blade.php
})->name('blog');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('tags', [TagController::class, 'index']);



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

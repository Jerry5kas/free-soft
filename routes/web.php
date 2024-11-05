<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Web\Home\Index::class)->name('home');
Route::get('home2', App\Livewire\Web\Home\Index2::class)->name('home2');
Route::get('about', App\Livewire\Web\About\Index::class)->name('about');
Route::get('contacts', App\Livewire\Web\Contact\Index::class)->name('contact');
Route::get('service', App\Livewire\Web\Service\Index::class)->name('service');
Route::get('service', App\Livewire\Web\Service\Index::class)->name('service');
Route::get('blog', App\Livewire\Web\Blog\Index::class)->name('blog');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
    ->group(function () {
    Route::get('/dashboard', App\Livewire\Web\Dashboard\Index::class)->name('dashboard');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
    ->group(function () {
        Route::get('/tags', App\Livewire\Common\Tags::class)->name('tags');
        Route::get('/categories', App\Livewire\Common\Category::class)->name('categories');
    });

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
    ->group(function () {
        Route::get('/todos', App\Livewire\Todo\Index::class)->name('todos');
    });



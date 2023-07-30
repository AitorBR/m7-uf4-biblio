<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

Route::get('/', [HomeController::class, 'home'])
    ->name('home.index');

Route::get('catalog', [CatalogController::class, 'index'])
    ->name('catalog.index');

Route::get('catalog/show/{id}', [CatalogController::class, 'show'])
    ->name('catalog.show');

Route::get('catalog/create', [CatalogController::class, 'create'])
    ->name('catalog.create');

Route::get('catalog/edit/{id}', [CatalogController::class, 'edit'])
    ->name('catalog.edit');

Route::get('login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('logout', function () {
    return 'Logout';
})->name('auth.logout');

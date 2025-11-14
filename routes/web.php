<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/contact_create', [ContactController::class, 'create'])->name('portfolio.create');

Route::post('/contact_store', [ContactController::class, 'store'])->name('portfolio.store');

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ModuleController;

Route::get('/modules', [ModuleController::class, 'index'])->name('modules.index');
Route::get('/modules/{id}', [ModuleController::class, 'show'])->name('modules.show');

Route::get('/', \App\Http\Controllers\WelcomeController::class);

use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, '__invoke'])->name('home');


use App\Http\Controllers\MentorController;

Route::get('/mentors', [MentorController::class, 'index'])->name('mentors.index');
Route::get('/mentors/{id}', [MentorController::class, 'show'])->name('mentors.show');


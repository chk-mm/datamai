<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\MentorController;


Route::get('/', function () {
    return view('welcome');
})->name('home');



// Route to submit the form
Route::post('/mentors/{mentor}/modules', [MentorController::class, 'updateModules'])->name('mentors.update.modules');
// Route to show the form for adding modules to a mentor
Route::get('/mentors/{mentor}/modules', [MentorController::class, 'editModules'])->name('mentors.edit.modules');




Route::get('/modules/create', [ModuleController::class, 'create'])->name('modules.create');
    Route::post('/modules', [ModuleController::class, 'store'])->name('modules.store');
Route::get('/modules', [ModuleController::class, 'index'])->name('modules.index');
Route::get('/modules/{id}', [ModuleController::class, 'show'])->name('modules.show');


// In routes/web.php

Route::get('/mentors/create', [MentorController::class, 'create'])->name('mentors.create');
Route::post('/mentors', [MentorController::class, 'store'])->name('mentors.store');
Route::get('/mentors', [MentorController::class, 'index'])->name('mentors.index');
Route::get('/mentors/{id}', [MentorController::class, 'show'])->name('mentors.show');


    




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

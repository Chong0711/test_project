<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/subject', [SubjectController::class, 'showSubjects'])->name('subject');
// Route to show the 'Create Subject' form
Route::get('/subject/create', [SubjectController::class, 'create'])->name('subjects.create');
// Route to store the subject after form submission
Route::post('/subject/store', [SubjectController::class, 'store'])->name('subjects.store');

require __DIR__.'/auth.php';

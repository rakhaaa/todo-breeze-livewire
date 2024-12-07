<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard;
use App\Livewire\Todos\IndexTodo;
use App\Livewire\Users\IndexUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth', 'admin'])->group(function() {
// });
Route::get('/users', IndexUser::class)->name('users')->middleware(['auth', 'admin']);
Route::get('/todos', IndexTodo::class)->name('todos')->middleware('auth');

require __DIR__.'/auth.php';

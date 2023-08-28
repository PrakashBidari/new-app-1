<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');

    Route::get('/admin/user/{userId}/edit', [UserController::class, 'edit'])->name('admin.user.edit');

    Route::put('/admin/user/{user}/update', [UserController::class, 'update'])->name('admin.user.update');

    Route::get('admin/users/{userId}/delete', [UserController::class, 'deleteUser'])->name('user.destroy');
});

require __DIR__ . '/auth.php';
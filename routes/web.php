<?php

use App\Http\Controllers\BloodRequestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestBloodController;
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

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['auth', 'verified', 'admin'])->name('dashboard');

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

    Route::get('admin/blood_donate', [RequestBloodController::class, 'adminBloodReq'])->name('admin.bloodReq');
    Route::get('admin/blood_req', [BloodRequestController::class, 'adminBloodReq'])->name('admin.reqBlood');
});




Route::get('/request_blood', [RequestBloodController::class, 'index'])->name('donate.blood');
Route::get('/request_blood/create', [RequestBloodController::class, 'create'])->name('create_blood');


Route::get('/blood_request', [BloodRequestController::class, 'index'])->name('blood_request');
Route::get('/blood_request/create', [BloodRequestController::class, 'create'])->name('blood_request_create');





require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/landrick', function () {
    return view('layouts.landrick.index');
});

Route::get('/login', [AuthController::class, 'loginAdmin'])->name('admin.login');
Route::get('/register', [AuthController::class, 'registerUser'])->name('user.register');

Route::get('/dashboard', [DashboardController::class, 'dashboardAdmin'])->name('admin.dashboard');

Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
Route::get('/create', [CategoryController::class, 'createForm'])->name('admin.category.create');
Route::post('/create', [CategoryController::class, 'store'])->name('admin.category.store');

Route::get('/job', [JobController::class, 'index'])->name('admin.job');

Route::get('/candidate', [CandidateController::class, 'index'])->name('admin.candidate');

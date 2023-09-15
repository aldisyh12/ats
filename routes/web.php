<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', function () {
    return view('layouts.landrick.index');
});

Route::get('/login', [AuthController::class, 'formLoginAdmin'])->name('admin.form.login');
Route::post('/login-user', [AuthController::class, 'loginAdmin'])->name('admin.login');
Route::get('/register', [AuthController::class, 'formRegisterUser'])->name('user.form.register');
Route::post('/register', [AuthController::class, 'registerUser'])->name('user.register');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix'=>'admin'], function(){
        Route::get('/dashboard', [DashboardController::class, 'dashboardAdmin'])->name('admin.dashboard');

        Route::group(['prefix'=>'category'], function(){
            Route::get('/', [CategoryController::class, 'index'])->name('admin.category');
            Route::get('/create', [CategoryController::class, 'createForm'])->name('admin.category.create');
            Route::post('/create', [CategoryController::class, 'store'])->name('admin.category.store');
        });

        Route::group(['prefix'=>'job'], function(){
            Route::get('/', [JobController::class, 'index'])->name('admin.job');
            Route::get('/create', [JobController::class, 'createForm'])->name('admin.job.create');
            Route::post('/create', [JobController::class, 'create'])->name('admin.job.store');
            Route::get('/count', [JobController::class, 'countDashboard'])->name('admin.job.count');
        });

        Route::group(['prefix'=>'candidate'], function(){
            Route::get('/', [CandidateController::class, 'index'])->name('admin.candidate');
        });
    });

    Route::group(['prefix'=>'user'], function(){
        Route::get('/dashboard', [DashboardController::class, 'dashboardUser'])->name('user.dashboard');

        Route::group(['prefix'=>'job'], function(){
            Route::get('/', [JobController::class, 'indexUser'])->name('user.job');
            Route::get('/detail-pekerjaan/{id}', [JobController::class, 'detailJobUser'])->name('user.job.detail');
            Route::post('/lamar-pekerjaan', [JobController::class, 'lamarKerja'])->name('user.job.lamar');
            Route::get('/list-pekerjaan', [JobController::class, 'pekerjaanUser'])->name('user.job.list');
        });

        Route::group(['prefix'=>'profile'], function(){
            Route::get('/{id}', [ProfileController::class, 'index'])->name('user.profile');
            Route::get('/create-cv/{id}', [ProfileController::class, 'create'])->name('user.profile-create');
            Route::post('/update-cv', [ProfileController::class, 'updateCv'])->name('user.profile-update');
        });
    });
});

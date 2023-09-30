<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
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


Route::get('/', [Controller::class, 'homepage'])->name('home');
Route::get('/lowongan', [Controller::class, 'pekerjaan'])->name('pekerjaan');
Route::get('/about', [Controller::class, 'aboutus'])->name('aboutus');
Route::get('/cabang', [Controller::class, 'cabang'])->name('cabang');

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
            Route::get('/show/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
            Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
            Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
        });

        Route::group(['prefix'=>'skill'], function(){
            Route::get('/', [SkillController::class, 'index'])->name('admin.skill');
            Route::get('/create', [SkillController::class, 'createForm'])->name('admin.skill.create');
            Route::post('/create', [SkillController::class, 'store'])->name('admin.skill.store');
            Route::get('/show/{id}', [SkillController::class, 'show'])->name('admin.skill.show');
            Route::post('/update/{id}', [SkillController::class, 'update'])->name('admin.skill.update');
            Route::post('/delete/{id}', [SkillController::class, 'delete'])->name('admin.skill.delete');
        });

        Route::group(['prefix'=>'job'], function(){
            Route::get('/', [JobController::class, 'index'])->name('admin.job');
            Route::get('/create', [JobController::class, 'createForm'])->name('admin.job.create');
            Route::post('/create', [JobController::class, 'create'])->name('admin.job.store');
            Route::get('/count', [JobController::class, 'countDashboard'])->name('admin.job.count');
            Route::post('/delete/{id}', [JobController::class, 'delete'])->name('admin.job.delete');
            Route::get('/{id}', [JobController::class, 'show'])->name('admin.job.show');
            Route::post('/update/{id}', [JobController::class, 'update'])->name('admin.job.update');
        });

        Route::group(['prefix'=>'candidate'], function(){
            Route::get('/', [CandidateController::class, 'index'])->name('admin.candidate');
            Route::post('/update/{id}', [CandidateController::class, 'update'])->name('admin.candidate.update');
            Route::get('/show/{id}', [CandidateController::class, 'show'])->name('admin.candidate.show');
        });

        Route::group(['prefix'=>'cabang'], function(){
            Route::get('/', [CabangController::class, 'index'])->name('admin.cabang');
            Route::get('/create', [CabangController::class, 'create'])->name('admin.cabang.create');
            Route::post('/create', [CabangController::class, 'store'])->name('admin.cabang.store');
            Route::get('/show/{id}', [CabangController::class, 'show'])->name('admin.cabang.show');
            Route::post('/update/{id}', [CabangController::class, 'update'])->name('admin.cabang.update');
            Route::post('/delete/{id}', [CabangController::class, 'delete'])->name('admin.cabang.delete');
        });
    });

    Route::group(['prefix'=>'user'], function(){
        Route::get('/dashboard', [DashboardController::class, 'dashboardUser'])->name('user.dashboard');
        Route::post('/penilaian', [DashboardController::class, 'penilaian'])->name('user.penilaian');

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
            Route::post('/delete-experience/{id}', [ProfileController::class, 'deletePengelaman'])->name('user.pengalaman.delete');
            Route::post('/delete-pendidikan/{id}', [ProfileController::class, 'deletePendidikan'])->name('user.pendidikan.delete');
            Route::post('/foto', [ProfileController::class, 'ubahGambar'])->name('user.ubahgambar');
        });
    });
});

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\NilaiAjaxController;
use App\Http\Controllers\PageController;

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

Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::group(['middleware' => ['role:siswa'], 'namespace' => 'siswa'], function () {
        Route::get('/nilai', [GradesController::class, 'index'])->name('index');
        Route::get('/dashboard', [PageController::class, 'homeSiswa'])->name('home.siswa');
        Route::get('nilai/export/', [GradesController::class, 'export'])->name('export.nilai');
    });
    Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
        Route::get('/dashboard', [PageController::class, 'homeAdmin'])->name('home.admin');
        Route::resource('student', StudentController::class)->only(['create', 'index']);
        Route::resource('teacher', TeacherController::class)->only(['create', 'index']);
        // Route::resource('nilai', GradesController::class);
        Route::get('/nilaia', [GradesController::class, 'index'])->name('anilai.index');
        Route::get('/nilaiaa', [GradesController::class, 'create'])->name('anilai.create');
        Route::resource('kelas', ClassesController::class)->only(['create', 'index', 'store']);
        Route::get('users/export', [UserController::class, 'export'])->name('siswa.export');
        Route::post('users/import', [UserController::class, 'import'])->name('siswa.import');
        Route::prefix('user')->group(function () {
            Route::resource('student', StudentController::class)->only('create')->only(['edit']);;
        });
    });

    Route::group(['middleware' => ['role:pengajar'], 'prefix' => 'p'], function () {
        Route::get('/dashboard', [PageController::class, 'homeGuru'])->name('home.guru');
        Route::post('/asik', [GradesController::class, 'import'])->name('nilai.import');
        Route::resource('nilai', GradesController::class)->only(['create', 'index', 'store']);
    });
    Route::resource('ajax', NilaiAjaxController::class);
});

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::post('/', [AuthController::class, 'login'])->name('auth.login');

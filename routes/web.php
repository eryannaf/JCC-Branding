<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\NilaiAjaxController;


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

Route::group(['middleware' => ['auth', 'auth.session']], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/dashboard', function () {
        return view('app.app');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('auth.login');
})->name('login');



Route::post('/', [AuthController::class, 'login'])->name('auth.login');
Route::resource('student', StudentController::class);
Route::resource('teacher', TeacherController::class);
// Route::resource('study', StudiesController::class);
Route::resource('nilai', GradesController::class);
Route::resource('kelas', ClassesController::class);

Route::resource('ajax', NilaiAjaxController::class);


Route::get('users/export/', [UserController::class, 'export']);


Route::prefix('user')->group(function () {
    Route::resource('student', StudentController::class)->only('create');
});

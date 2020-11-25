<?php

use Illuminate\Support\Facades\Route;
// controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LoginController;
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

Route::middleware('auth')->prefix('dashboard')->group(function() {
    Route::get('/', [ HomeController::class, 'index' ])->name('home');
    Route::get('students', [ StudentController::class, 'index'])->name('student.index');
    Route::post('student/store', [ StudentController::class, 'store' ])->name('student.store');
    Route::put('student/{id}/update', [ StudentController::class, 'update' ])->name('student.update');
    Route::delete('student/{id}/delete', [ StudentController::class, 'destroy' ])->name('student.destroy');

    Route::get('student/{id}/payment', [ PaymentController::class, 'index' ])->name('payment.index');
    Route::post('student/{id}/payment/store', [ PaymentController::class, 'store' ])->name('payment.store');
    Route::put('student/{student_id}/payment/{id}/update', [ PaymentController::class, 'update' ])->name('payment.update');
    Route::delete('student/{student_id}/payment/{id}/delete', [ PaymentController::class, 'destroy' ])->name('payment.destroy');

    Route::get('payments', [PaymentController::class, 'show'])->name('payment.show');
});

Route::get('/', [ LoginController::class, 'login' ] )->name('login');
Route::post('/login', [ LoginController::class, 'authenticate' ])->name('authenticate');
Route::delete('/logout', [ LoginController::class, 'logout' ])->name('logout');

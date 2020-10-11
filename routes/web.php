<?php

use Illuminate\Support\Facades\Route;
// controllers
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
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

Route::prefix('dashboard')->group(function() {
    Route::get('students', [ StudentController::class, 'index' ]);
    Route::post('student/store', [ StudentController::class, 'store' ])->name('student.store');
    Route::put('student/{id}/update', [ StudentController::class, 'update' ])->name('student.update');
    Route::delete('student/{id}/delete', [ StudentController::class, 'destroy' ])->name('student.destroy');
    Route::get('student/payment', [ PaymentController::class, 'index' ])->name('payment.history');
});
Route::get('/', function () {
    return view('login');
});

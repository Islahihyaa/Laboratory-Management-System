<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\StatusBookController;

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
})->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticating']);

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'registration'])->name('register');

Route::get('index', [UserController::class, 'index'])->middleware(['auth', 'only_user']);
Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'only_admin']);

Route::get('loan', [UserController::class, 'loan']);
Route::get('status-letter', [UserController::class, 'status']);

Route::post('loan', [LoanController::class, 'submitloan'])->name('loan');
Route::get('booking-now', [LoanController::class, 'bookingnow']);

Route::get('status-letter', [StatusBookController::class, 'bookingstatus']);



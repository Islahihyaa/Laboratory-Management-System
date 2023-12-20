<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\StatusBookController;
use App\Http\Controllers\SIBoardController;
use App\Http\Controllers\TIBoardController;
use App\Http\Controllers\DSCBoardController;
use App\Http\Controllers\DetailRoomController;
use App\Http\Controllers\ConfirmationController;

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

Route::get('login', [AuthController::class, 'login'])->name('login');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

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

Route::get('dashboard', [DashboardController::class, 'bookhistory']);

Route::get('book-si', [SIBoardController::class, 'bookSI']);
Route::get('book-ti', [TIboardController::class, 'bookTI']);
Route::get('book-dsc', [DSCboardController::class, 'bookDSC']);

Route::get('history-si', [DashboardController::class, 'historySI']);

Route::get('book-si', [SIBoardController::class, 'historySI']);
Route::get('book-ti', [TIBoardController::class, 'historyTI']);
Route::get('book-dsc', [DSCBoardController::class, 'historyDSC']);

Route::get('detail-room', [DetailRoomController::class, 'detailroom']);

Route::get('confirmation-update/{id}', [ConfirmationController::class, 'confirmation']);
Route::get('confirmation-update/{id}', [ConfirmationController::class, 'getdata']);
Route::put('confirmation-update/{id}', [ConfirmationController::class, 'update']);

Route::get('confirmation-delete/{id}', [DashboardController::class, 'delete']);

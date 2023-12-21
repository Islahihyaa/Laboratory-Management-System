<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoanController;
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

Route::middleware('validate')->group(function(){
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registration'])->name('register');
});

Route::middleware('auth')->group(function(){
    Route::get('logout', [AuthController::class, 'logout']);

    //user-index
    Route::get('index', [UserController::class, 'index'])->middleware('only_user');
    Route::get('loan', [UserController::class, 'loan']);
    Route::get('status-letter', [UserController::class, 'status']);

    //user-index-booking
    Route::post('loan', [LoanController::class, 'submitloan'])->name('loan');
    Route::get('form-success', [LoanController::class, 'successform']);

    //user-index-status
    Route::get('status-letter', [LoanController::class, 'bookingstatus']);
    Route::get('booking-now', [LoanController::class, 'bookingnow']);

    //admin-dashboard
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware('only_admin');
    Route::get('dashboard', [DashboardController::class, 'bookhistory']);
    
    //admin-dashboard-major
    Route::get('book-si', [DashboardController::class, 'bookSI']);
    Route::get('book-ti', [DashboardController::class, 'bookTI']);
    Route::get('book-dsc', [DashboardController::class, 'bookDSC']);
    
    Route::get('book-si', [SIBoardController::class, 'historySI']);
    Route::get('book-ti', [TIBoardController::class, 'historyTI']);
    Route::get('book-dsc', [DSCBoardController::class, 'historyDSC']);
    
    //admin-changestatus
    Route::get('confirmation-update/{id}', [ConfirmationController::class, 'confirmation']);
    Route::get('confirmation-update/{id}', [ConfirmationController::class, 'getdata']);
    Route::put('confirmation-update/{id}', [ConfirmationController::class, 'update']);
    
    //admin-dashboard-delete
    Route::get('confirmation-delete/{id}', [DashboardController::class, 'delete']);

    //admin-detailroom
    Route::get('detail-room', [DetailRoomController::class, 'detailroom']);
    
});


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
<<<<<<< HEAD
use App\Http\Controllers\ManageUserController;
=======
use App\Http\Controllers\LabController;
>>>>>>> 5fc05aebee3f99a86f132ecdd9c623894d6f96cf

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
    Route::post('register', [AuthController::class, 'registration']);
});

Route::middleware('auth')->group(function(){
    Route::get('logout', [AuthController::class, 'logout']);

    Route::middleware('only_user')->group(function(){
        //user-index
        Route::get('index', [UserController::class, 'index']);
        Route::get('status-letter', [UserController::class, 'status']);
    
        //user-index-booking
        Route::post('loan', [LoanController::class, 'submitloan'])->name('loan');
        Route::get('form-success', [LoanController::class, 'successform']);
    
        //user-index-status
        Route::get('status-letter', [LoanController::class, 'bookingstatus']);
        Route::get('booking-now', [LoanController::class, 'bookingnow']);
    });

    Route::middleware('only_admin')->group(function(){
        //admin-dashboard
        Route::get('dashboard', [DashboardController::class, 'dashboard']);
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
        
        
        Route::get('laboratory', [DashboardController::class, 'laboratory']);
        Route::get('laboratory-add', [DashboardController::class, 'addlaboratory']);
        
        Route::get('laboratory', [LabController::class, 'DataLaboratory']);
        Route::post('laboratory-add', [LabController::class, 'AddConfirmation']);
    
        Route::get('laboratory-edit/{id}', [LabController::class, 'EditLaboratory']);
        Route::put('laboratory-edit/{id}', [LabController::class, 'ConfirmEdit']);
    
<<<<<<< HEAD
    //admin-changestatus
    Route::get('confirmation-update/{id}', [ConfirmationController::class, 'confirmation']);
    Route::get('confirmation-update/{id}', [ConfirmationController::class, 'getdata']);
    Route::put('confirmation-update/{id}', [ConfirmationController::class, 'update']);
    
    //admin-dashboard-delete
    Route::get('confirmation-delete/{id}', [DashboardController::class, 'delete']);

    //admin-detailroom
    Route::get('detail-room', [DetailRoomController::class, 'detailroom']);

    
    Route::get('user-manage', [ManageUserController::class, 'showuser']);
    Route::get('user-edit/{id}', [ManageUserController::class, 'edituser']);
    Route::put('user-edit/{id}', [ManageUserController::class, 'confirmedit']);
    Route::get('user-delete/{id}', [ManageUserController::class, 'deletuser']);
=======
>>>>>>> 5fc05aebee3f99a86f132ecdd9c623894d6f96cf
    
        Route::get('laboratory-delete/{id}', [LabController::class, 'DeleteLaboratory']);
    });
});


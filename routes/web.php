<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;

Auth::routes();

Route::get('/index', [Controller::class, 'showIndex'])->name('index');

Route::get('/', [Controller::class, 'showIndex'])->name('index');

Route::get('/lapangan', [Controller::class, 'showLapangan'])->name('lapangan');

// Route for Admin Register
Route::get('/admin/register', [Controller::class, 'showAdminRegistration'])->name('admin.register');

// Route for Admin Storing Data
Route::post('/admin/register', [AdminRegisterController::class, 'register'])->name('admin.register');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');
    
Route::middleware(['auth'])->group(function () {

    Route::get('/category/badminton', [CategoryController::class, 'showBadminton'])->name('category.badminton');

    Route::get('/category/basket', [CategoryController::class, 'showBasket'])->name('category.basket');

    Route::get('/category/futsal', [CategoryController::class, 'showFutsal'])->name('category.futsal');

    Route::get('/category/golf', [CategoryController::class, 'showGolf'])->name('category.golf');

    Route::get('/category/tennis', [CategoryController::class, 'showTennis'])->name('category.tennis');

    Route::get('/category/volley', [CategoryController::class, 'showVolley'])->name('category.volley');

    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

    Route::get('/user/profile', [UserController::class, 'showProfile'])->name('user.profile');
    
    Route::patch('/user/update-profile', [UserController::class, 'updateProfile'])->name('user.update-profile');

    Route::get('/order/{lapanganId}', [OrderController::class, 'showOrder'])->name('order');

    Route::post('/order/create', [OrderController::class, 'create'])->name('order.create');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin-index', [AdminController::class, 'showAdminIndex'])->name('admin.index');

    Route::post('/admin/lapangan', [AdminController::class, 'store'])->name('admin.lapangan.store');

    Route::get('/admin/manage-lapangan', [AdminController::class, 'showManageProduct'])->name('admin.manage');

    Route::get('/admin/add-lapangan', [AdminController::class, 'showAddProduct'])->name('admin.add');

    Route::get('/admin/list-lapangan', [AdminController::class, 'showListProduct'])->name('admin.list');

    Route::get('/admin/delete/{lapangan}', [AdminController::class, 'delete'])->name('admin.delete');

    Route::get('/admin/edit/{lapangan}', [AdminController::class, 'edit'])->name('admin.edit');

    Route::patch('/admin/update/{lapangan}', [AdminController::class, 'update'])->name('admin.update');

    Route::put('/admin/update/pembayaran/{pembayaran}', [AdminController::class, 'changePaymentStatus'])->name('admin.status.pembayaran');

    Route::put('/admin/update/pesanan/{pesanan}', [AdminController::class, 'changeOrderStatus'])->name('admin.status.pesanan');
});

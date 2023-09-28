<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminRegisterController;
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

Route::get('/', [Controller::class, 'showIndex'])->name('index');

Auth::routes();

Route::get('/index', [HomeController::class, 'index'])->name('index');

Route::get('/destination', [Controller::class, 'showDestination'])->name('destination');


Route::get('stripe', [StripePaymentController::class, 'paymentStripe'])->name('addmoney.paymentstripe');

// Route for Admin Register
Route::get('/admin/register', [Controller::class, 'showAdminRegistration'])->name('admin.register');

// Route for Admin Storing Data
Route::post('/admin/register', [AdminRegisterController::class, 'register'])->name('admin.register');

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/destination/japan', [TripController::class, 'showJapan'])->name('destination.japan');

    Route::get('/destination/switzerland', [TripController::class, 'showSwitzerland'])->name('destination.switzerland');

    Route::get('/destination/france', [TripController::class, 'showFrance'])->name('destination.france');

    Route::get('/destination/iceland', [TripController::class, 'showIceland'])->name('destination.iceland');

    Route::get('/destination/indonesia', [TripController::class, 'showIndonesia'])->name('destination.indonesia');

    Route::get('/destination/greece', [TripController::class, 'showGreece'])->name('destination.greece');

    Route::get('/trip/{slug}', 'TripController@show')->name('trip.show');
});

Route::middleware(['web', 'auth:admin'])->group(function () {
    Route::get('/admin-index', [AdminController::class, 'showAdminIndex'])->name('admin.index');

    Route::post('/admin/trips', [AdminController::class, 'store'])->name('admin.trips.store');
});

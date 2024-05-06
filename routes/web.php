<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\LandingpageController;

Route::get('/', [indexController::class, 'index'])->name('/');

//**************DADHBOARD ADMIN **************//
Route::get('/login_admin', [DashboardAdminController::class, 'showloginadmin'])->name('login_admin');
Route::post('/loginProses', [DashboardAdminController::class, 'login'])->name('loginProses');
Route::get('/register_admin', [DashboardAdminController::class, 'showregisteradmin'])->name('register_admin');
Route::post('/regisProses', [DashboardAdminController::class, 'register'])->name('regisProses');
Route::post('/logout_admin', [DashboardAdminController::class, 'logout'])->name('logout_admin');


Route::get('/dashboard', [DashboardAdminController::class, 'show'])->name('dashboard');
//**************END DADHBOARD ADMIN **************//
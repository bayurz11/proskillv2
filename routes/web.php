<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\indexController;

Route::get('/', [indexController::class, 'index'])->name('/');
Route::get('/event', [indexController::class, 'showArtikel'])->name('event');
Route::get('/artikel', [indexController::class, 'showArtikel'])->name('artikel');
Route::get('/Kelastatapmuka', [indexController::class, 'showKelasOffline'])->name('Kelastatapmuka');
Route::get('/kelasOnline', [indexController::class, 'showkelasOnline'])->name('kelasOnline');

//**************DADHBOARD ADMIN **************//
Route::get('/login_admin', [DashboardAdminController::class, 'showloginadmin'])->name('login_admin');
Route::post('/loginProses', [DashboardAdminController::class, 'login'])->name('loginProses');
Route::get('/register_admin', [DashboardAdminController::class, 'showregisteradmin'])->name('register_admin');
Route::post('/regisProses', [DashboardAdminController::class, 'register'])->name('regisProses');
Route::post('/logout_admin', [DashboardAdminController::class, 'logout'])->name('logout_admin');


Route::get('/dashboard', [DashboardAdminController::class, 'show'])->name('dashboard');
Route::get('/HeroSectionSetting', [HeroSectionController::class, 'show'])->name('HeroSectionSetting');
Route::post('/HeroSectionStore', [HeroSectionController::class, 'store'])->name('HeroSectionStore');
Route::get('/artikel_setting', [ArtikelController::class, 'show'])->name('artikel_setting');
//**************END DADHBOARD ADMIN **************//
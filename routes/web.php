<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\KelasOnlineController;
use App\Http\Controllers\KelasTatapMukaController;

Route::get('/', [indexController::class, 'index'])->name('/');
Route::get('/event', [indexController::class, 'showEvent'])->name('event');
Route::get('/event_detail/{id}', [indexController::class, 'Eventdetail'])->name('event_detail');
Route::get('/artikel', [indexController::class, 'showArtikel'])->name('artikel');
Route::get('/artikel_detail/{id}', [indexController::class, 'artikeldetail'])->name('artikel_detail');
Route::get('/Kelastatapmuka', [indexController::class, 'showKelasOffline'])->name('Kelastatapmuka');
Route::get('/Kelastatapmuka_detail/{id}', [indexController::class, 'KelasOfflinedetail'])->name('Kelastatapmuka_detail');
Route::get('/kelasOnline', [indexController::class, 'showkelasOnline'])->name('kelasOnline');
Route::get('/tentangkami', [indexController::class, 'showaboutUs'])->name('tentangkami');

//**************DADHBOARD ADMIN **************//
Route::get('/login_admin', [DashboardAdminController::class, 'showloginadmin'])->name('login_admin');
Route::post('/loginProses', [DashboardAdminController::class, 'login'])->name('loginProses');
Route::get('/register_admin', [DashboardAdminController::class, 'showregisteradmin'])->name('register_admin');
Route::post('/regisProses', [DashboardAdminController::class, 'register'])->name('regisProses');
Route::post('/logout_admin', [DashboardAdminController::class, 'logout'])->name('logout_admin');

//---Dashboard---//
Route::get('/dashboard', [DashboardAdminController::class, 'show'])->name('dashboard');
//---end dashboard---//

//---Hero Section---//
Route::get('/HeroSectionSetting', [HeroSectionController::class, 'show'])->name('HeroSectionSetting');
Route::post('/HeroSectionStore', [HeroSectionController::class, 'store'])->name('HeroSectionStore');
//---end Hero Section---//

//---Kelas Online---//
Route::get('/KelasOnlineSetting', [KelasOnlineController::class, 'show'])->name('KelasOnlineSetting');
Route::post('/KelasOnlineStore', [KelasOnlineController::class, 'store'])->name('KelasOnlineStore');

//---Kelas Tatap Muka---//
Route::get('/KelasOfflineSetting', [KelasTatapMukaController::class, 'show'])->name('KelasOfflineSetting');
Route::post('/KelasOfflineStore', [KelasTatapMukaController::class, 'store'])->name('KelasOfflineStore');
//---end Kelas Tatap Muka---//

//---Artikel---//
Route::get('/artikel_setting', [ArtikelController::class, 'show'])->name('artikel_setting');
Route::post('/artikel_store', [ArtikelController::class, 'store'])->name('artikel_store');
Route::delete('/artikel_destroy/{id}', [ArtikelController::class, 'destroy'])->name('artikel_destroy');
//---end Artikel---//

//---Event---//
Route::get('/event_setting', [EventController::class, 'show'])->name('event_setting');
Route::post('/event_store', [EventController::class, 'store'])->name('event_store');
Route::delete('/event_destroy/{id}', [EventController::class, 'destroy'])->name('event_destroy');

//---about us---//
Route::get('/about_us_setting', [AboutUsController::class, 'show'])->name('about_us_setting');
//**************END DADHBOARD ADMIN **************//
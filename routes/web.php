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
Route::get('/hubungikami', [indexController::class, 'showcontactUs'])->name('hubungikami');

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
Route::delete('/KelasOfflineDestroy/{id}', [KelasTatapMukaController::class, 'destroy'])->name('KelasOfflineDestroy');
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
//---end Event---//

//---Galery---//
Route::get('/galery_setting', [EventController::class, 'showgalery'])->name('galery_setting');
Route::post('/galery_store', [EventController::class, 'storegalery'])->name('galery_store');
Route::delete('/galery_destroy/{id}', [EventController::class, 'destroygalery'])->name('galery_destroy');
Route::get('/galery/{id}/edit', [EventController::class, 'galeryedit'])->name('gallery_edit');
Route::put('/galery/{id}', [EventController::class, 'galeryupdate'])->name('gallery_update');

//---Link---//
Route::get('/link_setting', [EventController::class, 'showlink'])->name('link_setting');
Route::post('/link_store', [EventController::class, 'storelink'])->name('link_store');
Route::delete('/link_destroy/{id}', [EventController::class, 'destroylink'])->name('link_destroy');
Route::get('/data/{id}/edit', [EventController::class, 'linkedit'])->name('data.edit');
Route::put('/data/{id}', [EventController::class, 'linkupdate'])->name('data.update');


//---about us---//
Route::get('/about_us_setting', [AboutUsController::class, 'show'])->name('about_us_setting');
Route::post('/about_us_store', [AboutUsController::class, 'store'])->name('about_us_store');
Route::delete('/about_us_destroy/{id}', [AboutUsController::class, 'destroy'])->name('about_us_destroy');

//izin
Route::get('/izin_setting', [AboutUsController::class, 'showizin'])->name('izin_setting');
Route::post('/izin_store', [AboutUsController::class, 'storeizin'])->name('izin_store');
Route::delete('/izin_destroy/{id}', [AboutUsController::class, 'destroyizin'])->name('izin_destroy');
//**************END DADHBOARD ADMIN **************//
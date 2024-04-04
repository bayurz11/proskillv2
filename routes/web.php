<?php

use App\Http\Controllers\AboutUsController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelYtController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeSettingController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProfileSettingController;
use App\Http\Controllers\SertifikatController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('/');
Route::get('/blog', [LandingPageController::class, 'ShowBlog'])->name('blog');
Route::get('/blog-details/{id}', [LandingPageController::class, 'ShowBlogDetails'])->name('blog-details');
// Route::get('/blog-details/{id}', [LandingPageController::class, 'ShowBlogDetails'])->name('blog-details');
Route::get('/tentang', [LandingPageController::class, 'ShowAboutUs'])->name('tentang');
Route::get('/hubungi', [LandingPageController::class, 'ShowContactUs'])->name('hubungi');

Route::get('/login_email', [AuthUserController::class, 'show'])->name('login_email');





/*****************ADMIN ROUTES*******************/
Route::get('/index_admin', [AuthController::class, 'index'])->name('index_admin');

//Auth
Route::get('/google/redirect', [AuthController::class, 'redirect'])->name('google.redirect');
Route::get('/google/callback', [AuthController::class, 'callback'])->name('google.callback');
Route::get('/show_login', [AuthController::class, 'ShowLogin'])->name('show_login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login');
Route::get('/signOut', [AuthController::class, 'signOut'])->name('signOut');
Route::get('/show_register', [AuthController::class, 'ShowRegis'])->name('show_register');
Route::get('/forgot-password', [AuthController::class, 'ShowforgotPassword'])->name('password.request');

//Profile Setting
Route::get('/profile_setting', [UserProfileController::class, 'index'])->name('profile.setting');
Route::get('/user_setting', [UserProfileController::class, 'UserSetting'])->name('user.setting');

//home setting
Route::get('/show_home_setting', [HomeSettingController::class, 'show'])->name('show_home_setting');
Route::post('/operational_store', [HomeSettingController::class, 'store'])->name('operational_store');

//Category setting
Route::get('/category', [CategoryController::class, 'show'])->name('category');
Route::post('/category_store', [CategoryController::class, 'store'])->name('category_store');
Route::get('/categories', function () {
    $categories = Category::pluck('name')->toArray();
    return response()->json($categories);
});
//Artikel setting
Route::get('/artikel', [ArtikelController::class, 'show'])->name('artikel');
Route::post('/artikel_store', [ArtikelController::class, 'store'])->name('artikel_store');
Route::post('/artikel_destroy/{id}', [ArtikelController::class, 'destroy'])->name('artikel_destroy');

//ArtikelYt setting
Route::post('/artikelYt_store', [ArtikelYtController::class, 'store'])->name('artikelYt_store');
Route::post('/artikelYt_destroy/{id}', [ArtikelYtController::class, 'destroy'])->name('artikelYt_destroy');

//About Us setting
Route::get('/about_us', [AboutUsController::class, 'show'])->name('about_us');
Route::post('/aboutus_store', [AboutUsController::class, 'store'])->name('aboutus_store');

//Contact Us setting
Route::get('/contact_us', [ContactUsController::class, 'show'])->name('contact_us');
Route::post('/contactus_store', [ContactUsController::class, 'store'])->name('contactus_store');

//Kelas setting
Route::get('/kelas', [KelasController::class, 'show'])->name('kelas');
Route::post('/kelas_store', [KelasController::class, 'store'])->name('kelas_store');


//Sertifikat setting
Route::any('/sertifikat', [SertifikatController::class, 'show'])->name('sertifikat');
Route::get('/sertifikat_destroy/{id}', [SertifikatController::class, 'destroy'])->name('sertifikat_destroy');
Route::post('/sertifikat_store', [SertifikatController::class, 'store'])->name('sertifikat_store');
Route::get('/cetak_sertifikat/{id}', [SertifikatController::class, 'cetakSertifikat'])->name('cetak_sertifikat');
Route::put('/sertifikat_update/{id}', [SertifikatController::class, 'update'])->name('sertifikat_update');

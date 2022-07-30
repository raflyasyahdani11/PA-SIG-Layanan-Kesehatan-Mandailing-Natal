<?php

use App\Http\Controllers\AdminWebController;
use App\Http\Controllers\LayananKesehatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TenangaMedisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserWebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::prefix('/')->group(function () {
    Route::get('/', [UserWebController::class, 'showHome'])->name('users.home');
    Route::get('/layanankesehatan/{id}',[UserWebController::class, 'showLayananKesehatan'])->name('users.layanankesehatan');
    Route::get('/profil', [UserWebController::class, 'showProfil'])->name('users.profil');
});

Route::prefix('/bidang')->group(function () {
    Route::get('/kadis', [ProfilController::class, 'showKadis'])->name('users.profile.kadis');
    Route::get('/sekretaris', [ProfilController::class, 'showSekretaris'])->name('users.profile.sekretaris');
    Route::get('/kesehatan', [ProfilController::class, 'showBidangKesehatan'])->name('users.profile.kesehatan');
    Route::get('/pencegahan', [ProfilController::class, 'showBidangPencegahan'])->name('users.profile.pencegahan');
    Route::get('/pelayanan', [ProfilController::class, 'showBidangPelayanan'])->name('users.profile.pelayanan');
    Route::get('/sumber', [ProfilController::class, 'showBidangSumber'])->name('users.profile.sumber');
    Route::get('/unit', [ProfilController::class, 'showUnit'])->name('users.profile.unit');
    Route::get('/kelompok', [ProfilController::class, 'showKelompok'])->name('users.profile.kelompok');
    
});

Route::prefix('/login')->group(function () {
    Route::get('/', [LoginController::class,'showLogin'])->name('login.index');
    Route::post('/', [LoginController::class,'authenticate'])->name('login.post');

});

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', [AdminWebController::class, 'showDashboard'])->name('admin.dashboard');

    Route::prefix('/layanan_kesehatan')->group(function () {
        Route::get('/', [AdminWebController::class, 'showLayananKesehatanHome'])->name('admin.layanan_kesehatan');
        Route::get('/add', [AdminWebController::class, 'showLayananKesehatanAdd'])->name('admin.layanan_kesehatan.add');
        Route::post('/add', [LayananKesehatanController::class, 'store'])->name('admin.layanan_kesehatan.add.post');

        Route::get('/edit/{id}', [AdminWebController::class, 'showLayananKesehatanEdit'])->name('admin.layanan_kesehatan.add.edit');
        Route::post('/edit/{id}', [LayananKesehatanController::class, 'edit'])->name('admin.layanan_kesehatan.edit.post');

        Route::get('/delete/{id}', [LayananKesehatanController::class, 'delete'])->name('admin.layanan_kesehatan.add.delete');
        
        Route::get('/detail/{id}', [AdminWebController::class, 'showLayananKesehatanDetail'])->name('admin.layanan_kesehatan.detail');
    });

    Route::prefix('/tenaga_medis')->group(function () {
        Route::get('/', [AdminWebController::class, 'showTenagaMedisHome'])->name('admin.tenaga_medis');
        Route::get('/add', [AdminWebController::class, 'showTenagaMedisAdd'])->name('admin.tenaga_medis.add');
        Route::post('/add', [TenangaMedisController::class, 'store'])->name('admin.tenaga_medis.add.post');

        Route::get('/edit/{id}', [AdminWebController::class, 'showTenagaMedisEdit'])->name('admin.tenaga_medis.add.edit');
        Route::post('/edit/{id}', [TenangaMedisController::class, 'edit'])->name('admin.tenaga_medis.edit.post');

        Route::get('/delete/{id}', [TenangaMedisController::class, 'delete'])->name('admin.tenaga_medis.add.delete');
    });

    Route::get('/tampildata', [AdminWebController::class, 'showTampildata'])->name('admin.tampildata');
    Route::get('/editdata', [AdminWebController::class, 'showEditdata'])->name('admin.editdata');
    Route::get('/tampiltenagamedis', [AdminWebController::class, 'showTampiltenagamedis'])->name('admin.tampiltenagamedis');
    Route::get('/edittenagamedis', [AdminWebController::class, 'showEdittenagamedis'])->name('admin.edittenagamedis');
});

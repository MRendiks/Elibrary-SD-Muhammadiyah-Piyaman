<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBukuController;
use App\Http\Controllers\DashboardAnggotaController;
use App\Http\Controllers\DashboardPinjamController;
use App\Http\Controllers\DashboardKembaliController;
use App\Http\Controllers\DashboardLaporanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardMinjamController;
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

Route::get('/', [DashboardBukuController::class, 'index2'])->name('index2');
Route::get('/index', function () {
    return view('index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// Route::get('/login', function () {  
//     return view('login');
// });


route::get('/user', function () {
return view('user');
});

Route::group(['middleware' => ['auth', 'ceklevel:anggota']], function(){
    route::get('/welcome', [DashboardBukuController::class, 'welcome'])->name('welcome');
    route::post('/{id}/cetak', [DashboardBukuController::class, 'cetak'])->name('cetak');
    route::get('/search_book_name', [DashboardBukuController::class, 'search_book_name'])->name('search.book_name');

    
});

Route::group(['middleware' => ['auth', 'ceklevel:anggota']], function(){
    route::post('/user_minjam', [UserController::class, 'pinjam'])->name('user_minjam');
});

Route::group(['middleware' => ['auth', 'ceklevel:petugas']], function(){
    route::get('/dashboard', [DashboardBukuController::class, 'index_dashboard'])->name('index_dashboard');

   Route::get('/dashboard/buku', [DashboardBukuController::class, 'index'])->name('mybuku');
    Route::resource('/dashboard/anggota', DashboardAnggotaController::class);
    Route::resource('/dashboard/pinjam', DashboardPinjamController::class);
    Route::resource('/dashboard/kembali', DashboardKembaliController::class);
    Route::resource('/dashboard/laporan', DashboardLaporanController::class);

   route::get('/data-buku', [DashboardBukuController::class, 'index'])->name('databuku');
    route::delete('/data-buku', [DashboardBukuController::class, 'delete']);
    route::get('/addbuku', [DashboardBukuController::class, 'add'])->name('addbuku');;
    route::post('/addbuku', [DashboardBukuController::class, 'store'])->name('storebuku');
    route::get('/data-buku/{id}/update', [DashboardBukuController::class, 'edit']);
    route::put('/data-buku/{id}', [DashboardBukuController::class, 'update']);
    route::get('/barang/kurangi-stok/{id}', [DashboardBukuController::class, 'kurangiStok']);

    route::get('/data-anggota', [DashboardAnggotaController::class, 'index'])->name('dataanggota');
    route::delete('/data-anggota', [DashboardAnggotaController::class, 'delete']);
    route::get('/addanggota', [DashboardAnggotaController::class, 'add'])->name('addanggota');;
    route::post('/addanggota', [DashboardAnggotaController::class, 'store'])->name('storeanggota');
    route::get('/data-anggota/{id}/update', [DashboardAnggotaController::class, 'edit']);
    route::put('/data-anggota/{id}', [DashboardAnggotaController::class, 'update']);

    route::get('/data-pinjam', [DashboardPinjamController::class, 'index'])->name('datapinjam');
    route::delete('/data-pinjam', [DashboardPinjamController::class, 'delete']);
    route::get('/addpinjam', [DashboardPinjamController::class, 'add'])->name('addpinjam');;
    route::post('/addpinjam', [DashboardPinjamController::class, 'store'])->name('storepinjam');
    route::get('/data-pinjam/{id}/update', [DashboardPinjamController::class, 'edit']);
    route::put('/data-pinjam/{id}', [DashboardPinjamController::class, 'update']);

    route::get('/data-kembali', [DashboardKembaliController::class, 'index'])->name('datakembali');
    route::delete('/data-kembali', [DashboardKembaliController::class, 'delete']);
    route::get('/addkembali', [DashboardKembaliController::class, 'add'])->name('addkembali');;
    route::post('/addkembali', [DashboardKembaliController::class, 'store'])->name('storekembali');
    route::get('/data-kembali/{id}/update', [DashboardKembaliController::class, 'edit']);
    route::put('/data-kembali/{id}', [DashboardKembaliController::class, 'update']);

    route::get('/data-laporan', [DashboardLaporanController::class, 'index'])->name('datalaporan');
    route::delete('/data-laporan', [DashboardLaporanController::class, 'delete']);
    route::get('/addlaporan', [DashboardLaporanController::class, 'add'])->name('addlaporan');;
    route::post('/addlaporan', [DashboardLaporanController::class, 'store'])->name('storelaporan');
    route::get('/data-laporan/{id}/update', [DashboardLaporanController::class, 'edit']);
    route::put('/data-laporan/{id}', [DashboardLaporanController::class, 'update']);

    route::get('/minjam', [DashboardMinjamController::class, 'minjam']);
    route::get('/back', [DashboardBackController::class, 'back']);

    # PINJAM
    # FILTER
    route::post('/filter_pinjam', [DashboardPinjamController::class, 'filter_pinjam'])->name('filter.pinjam');

    # CETAK
    route::get('/cetak_pinjam', [DashboardPinjamController::class, 'cetak_pinjam'])->name('cetak.pinjam');

    # KEMBALI
    # FILTER
    route::post('/filter_kembali', [DashboardKembaliController::class, 'filter_kembali'])->name('filter.kembali');

    # CETAK
    route::get('/cetak_kembali', [DashboardKembaliController::class, 'cetak_kembali'])->name('cetak.kembali');
});







<?php

use App\Http\Controllers\IndoregionController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserObatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CariController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckRole;
use GuzzleHttp\Middleware;






Route::post('/getkabupaten', [UserController::class,'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [UserController::class,'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa', [UserController::class,'getdesa'])->name('getdesa');

// member
// Route::get('/profile', [UserController::class,'profile']);


Route::get('/register1', [RegisterController::class,'index']);
Route::post('simpanregister1', [RegisterController::class,'store']);



Route::post('/getkabupaten', [RegisterController::class,'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [RegisterController::class,'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa', [RegisterController::class,'getdesa'])->name('getdesa');
Route::get('/', [ObatController::class,'landingpage']);



Auth::routes();

Route::get('/form', [IndoregionController::class,'form'])->name('form');
Route::post('/getkabupaten', [IndoregionController::class,'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [IndoregionController::class,'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa', [IndoregionController::class,'getdesa'])->name('getdesa');



                // START MIDDLEWARE ADMIN

Route::group(['middleware' => ['auth','hak_akses:1']],function () {
        Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index2'])->name('admin_dashboard');
        Route::get('/adminresep', [ResepController::class,'adminresep']);
        Route::get('/adminresep/block/{id}', [ResepController::class, 'block']);
        Route::get('resep/allow/{id}', [ResepController::class,'allow']);
        Route::get('admin/harga/{id}', [ResepController::class,'harga']);

        Route::get('admin/supplier', [SupplierController::class,'index'])->name('admin_supplier');
        Route::get('admin/tambahsupplier', [SupplierController::class,'create'])->name('admin_tambahsupplier');
        Route::post('admin/simpansupplier', [SupplierController::class,'store'])->name('admin_simpansupplier');
        Route::get('admin/editsupplier/{id}', [SupplierController::class, 'edit'])->name('admin_editsupplier');
        Route::post('admin/simpanupdatesupplier/{id}', [SupplierController::class,'update'])->name('admin_simpanupdatesupplier');
        Route::get('admin/admin/hapussupplier/{id}', [SupplierController::class, 'destroy'])->name('admin_hapussupplier');



        Route::get('admin/kategori', [KategoriController::class,'index'])->name('admin_kategori');
        Route::get('admin/tambahkategori', [KategoriController::class,'create'])->name('admin_tambahkategori');
        Route::post('admin/simpankategori', [KategoriController::class,'store'])->name('admin_simpankategori');
        Route::get('admin/editkategori/{id}', [KategoriController::class, 'edit'])->name('admin_editkategori');
        Route::post('admin/simpanupdatekategori/{id}', [KategoriController::class,'update'])->name('admin_simpanupdatekategori');
        Route::get('admin/admin/hapuskategori/{id}', [KategoriController::class, 'destroy'])->name('admin_hapuskategori');

        Route::get('admin/jenis', [JenisController::class,'index'])->name('admin_jenis');
        Route::get('admin/tambahjenis', [JenisController::class,'create'])->name('admin_tambahjenis');
        Route::post('admin/simpantambahjenis', [JenisController::class,'store'])->name('admin_simpantambahjenis');
        Route::get('admin/editjenis/{id}', [JenisController::class, 'edit'])->name('admin_editjenis');
        Route::post('admin/simpanupdatejenis/{id}', [JenisController::class,'update'])->name('admin_simpanupdatejenis');
        Route::get('admin/admin/hapusjenis/{id}', [JenisController::class, 'destroy'])->name('admin_hapusjenis');

        Route::get('admin/semuaobat', [ObatController::class,'index'])->name('admin_semuaobat');
        Route::get('admin/tambahobat', [ObatController::class,'create'])->name('admin_tambahobat');
        Route::post('admin/simpantambahobat', [ObatController::class,'store'])->name('admin_simpantambahobat');
        Route::get('admin/editobat/{id}', [ObatController::class, 'edit'])->name('admin_editobat');
        Route::post('admin/simpaneditobat/{id}', [ObatController::class, 'update'])->name('admin_simpaneditobat');
        Route::get('admin/admin/hapusobat/{id}', [ObatController::class, 'destroy'])->name('admin_hapusobat');
        Route::get('admin/obathabis', [ObatController::class,'habis'])->name('admin_stokobat');
        Route::get('admin/obatexp', [ObatController::class,'exp'])->name('admin_obatexp');


        Route::get('admin/penjualan', [PenjualanController::class,'index'])->name('admin_penjualan');
        Route::get('admin/tambahpenjualan', [PenjualanController::class,'create'])->name('admin_tambahpenjualan');
        Route::get('detail-obat-{id_obat}', [PenjualanController::class,'oke']);
        Route::post('coba', [PenjualanController::class,'coba']);
        Route::get('print/{id}', [PenjualanController::class,'print'])->name('print');

        Route::get('cari', [CariController::class, 'index']);
        Route::get('/tampil', [CariController::class, 'tampil']);



        Route::get('admin/member', [UserController::class,'index'])->name('admin_member');
        Route::get('admin/tambahmember', [UserController::class,'create'])->name('admin_tambahmember');
        Route::post('admin/simpanmember', [UserController::class,'store'])->name('admin_simpanmember');
        Route::get('admin/viewmember/{id}', [UserController::class,'show']);

        Route::get('admin/admin/hapusmember/{id}', [UserController::class, 'destroy'])->name('admin_hapusmember');

});

                // Middleware Member
Route::group(['middleware' => ['auth','hak_akses:2']],function () {
        Route::get('/member', [App\Http\Controllers\HomeController::class, 'index'])->name('member_dashboard');
        Route::get('/profile', [UserController::class,'profile']);
        Route::get('/editprofile', [EditProfileController::class,'editprofile']);
        Route::put('/editprofilesimpan', [EditProfileController::class,'update']);

        Route::get('/resep', [ResepController::class,'index']);
        Route::get('/resepsaya', [ResepController::class,'show']);

        Route::post('resepsimpan', [ResepController::class,'store']);

        Route::get('/keranjang', [CartController::class,'index']);
        Route::post('keranjangsimpan', [CartController::class,'store']);
        Route::get('member/hapuskeranjang/{id}', [CartController::class, 'destroy']);
        Route::get('cariobat', [UserObatController::class,'search']);

        Route::get('checkout', [CartController::class,'checkout']);
});

Route::post('/getkabupaten', [EditProfileController::class,'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [EditProfileController::class,'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa', [EditProfileController::class,'getdesa'])->name('getdesa');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
                



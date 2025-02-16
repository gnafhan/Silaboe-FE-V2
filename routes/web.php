<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LandingpageumumController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KalebController;
use App\Http\Middleware\AdminMiddleware;

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/do-login', [AuthController::class, 'doLogin'])->name('do-login');
// Route::get('/register', [AuthController::class, 'register'])->name('register');


Route::get('/', [LandingpageController::class, 'index'])->name('homepage.login');
Route::get('about', [LandingpageController::class, 'about'])->name('about.login');
Route::get('software', [LandingpageController::class, 'datasoftware'])->name('datasoftware.login');


Route::get('laboratorium', [LandingpageController::class, 'laboratorium'])->name('laboratorium.login');
Route::get('laboratorium/{id}/detail', [LandingpageController::class, 'laboratoriumdetail'])->name('laboratoriumdetail.login');
Route::get('laboratorium/{id}/riwayatreservasi', [LandingpageController::class, 'riwayatreservasilab'])->name('riwayatreservasilab.login');
Route::get('laboratorium/{id}/formlab', [LandingpageController::class, 'laboratoriumformlab'])->name('formlab.login');
Route::post('laboratorium/{id}/formlab', [LandingpageController::class, 'postFormLab'])->name('formlab.login.post');
Route::get('laboratorium/reservasi/{id}/status', [LandingpageController::class, 'reservasilaboratoriumstatus'])->name('statusreservasilab.login');
Route::get('laboratorium/{id}/riwayatreservasi/search', [LandingpageController::class, 'searchReservasiLab'])->name('riwayatreservasilab.search');


// TODO: Benerin reservasi ketika validasi gagal
Route::get('inventaris', [LandingpageController::class, 'Inventaris'])->name('inventaris.login');
Route::get('inventaris/riwayatreservasi', [LandingpageController::class, 'InventarisRiwayatReservasi'])->name('riwayatreservasiinventaris.login');
Route::get('inventaris/riwayatreservasi/detail/{id}', [LandingpageController::class, 'InventarisRiwayatReservasiDetail'])->name('riwayatreservasiinventarisdetail.login');
Route::get('inventaris/reservasi', [LandingpageController::class, 'inventarisreservasi'])->name('reservasiinventaris.login');
Route::get('inventaris/formreservasi', [LandingpageController::class, 'FormReservasiInventaris'])->name('formreservasiinventaris.login');
Route::post('/formreservasiinventariscek', [LandingpageController::class, 'inventarisformreservasicek'])->name('formreservasiinventariscek.login');
Route::post('inventaris/formreservasi/submit', [LandingpageController::class, 'postFormReservasiInventaris'])->name('formreservasiinventaris.post');
Route::get('inventaris/formreservasi/cek', [LandingpageController::class, 'InventarisFormReservasiCek'])->name('formreservasiinventariscek.login');
Route::post('inventaris/formreservasi/cek', [LandingpageController::class, 'InventarisFormReservasiCek'])->name('formreservasiinventariscek.login');
Route::post('inventaris/remove', [LandingpageController::class, 'removeSelectedItem'])->name('removeSelectedItem');
Route::get('inventaris/formreservasi/berhasil', [LandingpageController::class, 'InventarisFormReservasiBerhasil'])->name('formreservasiinventarisberhasil.login');


//Landing Page
//
//POV User Non Login
// Route::get('/', [LandingpageumumController::class, 'index'])->name('homepage.nonlogin');
// Route::get('landingpage/about', [LandingpageumumController::class, 'about'])->name('about.nonlogin');
// Route::get('landingpage/datasoftware', [LandingpageumumController::class, 'datasoftware'])->name('datasoftware.nonlogin');
// Route::get('landingpage/laboratorium', [LandingpageumumController::class, 'laboratorium'])->name('laboratorium.nonlogin');
// Route::get('landingpage/laboratorium/detail', [LandingpageumumController::class, 'laboratoriumdetail'])->name('laboratoriumdetail.nonlogin');
// Route::get('landingpage/inventaris', [LandingpageumumController::class, 'Inventarisumum'])->name('inventaris.nonlogin');


//POV ADMIN SI
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'Dashboard'])->name('dashboard.admin');
    Route::get('admin/laboratorium', [AdminController::class, 'Laboratorium'])->name('laboratorium.admin');
    Route::get('admin/laboratorium/{id}/detail', [AdminController::class, 'LaboratoriumDetail'])->name('laboratoriumdetail.admin');
    Route::get('admin/laboratorium/tambah', [AdminController::class, 'LaboratoriumTambah'])->name('laboratoriumtambah.admin');
    Route::post('admin/laboratorium/tambah', [AdminController::class, 'laboratoriumtambahPost'])->name('laboratoriumtambah.admin.post');
    Route::get('admin/laboratorium/{id}/edit', [AdminController::class, 'Laboratoriumedit'])->name('laboratoriumedit.admin');
    Route::put('admin/laboratorium/{id}/update', [AdminController::class, 'laboratoriumupdate'])->name('laboratoriumeupdate.admin');
    Route::delete('admin/laboratorium/{id}', [AdminController::class, 'Laboratoriumhapus'])->name('laboratoriumhapus.admin');
    Route::put('admin/laboratorium/reserve/{id}/approve', [AdminController::class, 'approveLabReservation'])->name('approve.labreservation');
    Route::put('admin/laboratorium/reserve/{id}/reject', [AdminController::class, 'rejectLabReservation'])->name('reject.labreservation');

//JadwalLab
    Route::get('admin/jadwallab', [AdminController::class, 'JadwalLab'])->name('jadwallab.admin');
    Route::get('admin/jadwallab/detail/{id}', [AdminController::class, 'JadwalLabDetail'])->name('jadwallabdetail.admin');
    Route::get('admin/jadwallab/tambah', [AdminController::class, 'JadwalLabTambah'])->name('jadwallab.admin.post');
    Route::post('admin/jadwallab/tambah', [AdminController::class, 'JadwalLabTambahPost'])->name('jadwallabtambah.admin.post');
    Route::get('admin/jadwallab/edit/{id}', [AdminController::class, 'JadwalLabEdit'])->name('jadwallabedit.admin');
    Route::post('admin/jadwallab/edit/{id}', [AdminController::class, 'JadwalLabEditPost'])->name('jadwallabedit.admin.Post');

    //PeminjamanLab
    Route::get('admin/peminjamanlab/tidakada', [AdminController::class, 'PeminjamanLabTidakAda'])->name('peminjamanlabtidakada.admin');
    Route::get('admin/peminjamanlab/ada', [AdminController::class, 'PeminjamanLabAda'])->name('peminjamanlabada.admin');
    Route::get('admin/peminjamanlab/detail', [AdminController::class, 'PeminjamanLabDetail'])->name('peminjamanlabdetail.admin');
    Route::get('admin/peminjamanlab/archive', [AdminController::class, 'PeminjamanLabArchive'])->name('peminjamanlabarchive.admin');
    Route::get('admin/peminjamanlab/search', [AdminController::class, 'search'])->name('peminjamanlablist.search');

    //Inventaris
    Route::get('admin/inventaris', [AdminController::class, 'Inventaris'])->name('inventaris.admin');
    Route::get('admin/inventaris/tambah', [AdminController::class, 'InventarisTambah'])->name('inventaristambah.admin');
    Route::post('admin/inventaris/tambah', [AdminController::class, 'InventarisTambahPost'])->name('inventaristambah.admin.post');
    Route::get('admin/inventaris/{id}/edit', [AdminController::class, 'InventarisEdit'])->name('inventarisedit.admin');
    Route::put('admin/inventaris/{id}/update', [AdminController::class, 'Inventarisupdate'])->name('inventarisupdate.admin');
    Route::delete('admin/inventaris/{id}', [AdminController::class, 'Inventarishapus'])->name('inventarishapus.admin');
    Route::put('admin/inventaris/approve/{id}', [AdminController::class, 'approveInventory'])->name('approve.inventory');
    Route::put('admin/inventaris/reject/{id}', [AdminController::class, 'rejectInventory'])->name('reject.inventory');

    //Peminjaman Inventaris
    Route::get('admin/peminjamaninvenatris/tidakAda', [AdminController::class, 'PeminjamanInventarisTidakAda'])->name('peminjamaninvenatristidakada.admin');
    Route::get('admin/peminjamaninvenatris/ada', [AdminController::class, 'PeminjamanInventarisAda'])->name('peminjamaninvenatrisada.admin');
    Route::get('admin/peminjamaninvenatris/detail/{id}', [AdminController::class, 'PeminjamanInventarisDetail'])->name('peminjamaninvenatrisdetail.admin');
    Route::get('admin/peminjamaninvenatris/archive', [AdminController::class, 'PeminjamanInventarisArchive'])->name('peminjamaninvenatrisarchive.admin ');

    //Profile
    Route::get('admin/profil', [AdminController::class, 'Profil'])->name('profil.admin');
    Route::get('admin/profil/edit', [AdminController::class, 'ProfilEdit'])->name('profiledit.admin');
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('profil.update');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



// //POV KALEB
// //Dashboard
// Route::get('/kaleb', [KalebController::class, 'Dashboard'])->name('dashboard.kaleb');

// //Laboratoium
// Route::get('/kaleb/laboratorium', [KalebController::class, 'Laboratorium'])->name('laboratorium.kaleb');
// Route::get('/kaleb/laboratorium/detail', [KalebController::class, 'LaboratoriumDetail'])->name('laboratoriumdetail.kaleb');



// //JadwalLab
// Route::get('/kaleb/jadwalLab', [KalebController::class, 'JadwalLab'])->name('jadwallab.kaleb');
// Route::get('/Kaleb/jadwalLab/detail', [KalebController::class, 'JadwalLabDetail'])->name('jadwallabdetail.kaleb');


// //PeminjamanLab
// Route::get('/kaleb/peminjamanlab/tidakada', [KalebController::class, 'PeminjamanLabTidakAda'])->name('peminjamanlabtidakada.kaleb');
// Route::get('/kaleb/peminjamanlab/ada', [KalebController::class, 'PeminjamanLabAda'])->name('peminjamanlabada.kaleb');
// Route::get('/kaleb/peminjamanlab/detail', [KalebController::class, 'PeminjamanLabDetail'])->name('peminjamanlabdetail.kaleb');
// Route::get('/kaleb/peminjamanlab/archive', [KalebController::class, 'PeminjamanLabArchive'])->name('peminjamanlabarchive.kaleb');


// //Inventaris
// Route::get('/kaleb/inventaris', [KalebController::class, 'Inventaris'])->name('inventaris.kaleb');

// //Pemijaman Inventaris
// Route::get('/kaleb/peminjamaninventaris/tidakada', [KalebController::class, 'PeminjamanInventarisTidakAda'])->name('peminjamaninvenatristidakada.kaleb');
// Route::get('/kaleb/peminjamaninventaris/ada', [KalebController::class, 'PeminjamanInventarisAda'])->name('peminjamaninvenatrisada.kaleb');
// Route::get('/kaleb/peminjamaninventaris/detail', [KalebController::class, 'PeminjamanInventarisDetail'])->name('peminjamaninvenatrisdetail.kaleb ');
// Route::get('/kaleb/peminjamaninventaris/archive', [KalebController::class, 'PeminjamanInventarisArchive'])->name('peminjamaninvenatrisarchive.kaleb');

// //Profile
// Route::get('/kaleb/profil', [KalebController::class, 'Profil'])->name('profil.kaleb');
// Route::get('/kaleb/profil/edit', [KalebController::class, 'ProfilEdit'])->name('profiledit.edit');
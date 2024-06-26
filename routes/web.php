<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LandingpageumumController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KalebController;


//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/do-login', [AuthController::class, 'doLogin'])->name('do-login');
Route::get('/register', [AuthController::class, 'register'])->name('register');


//Landing Page 
//
//POV User Non Login
Route::get('landingpage', [LandingpageumumController::class, 'index'])->name('homepage.nonlogin');
Route::get('landingpage/about', [LandingpageumumController::class, 'about'])->name('about.nonlogin');
Route::get('landingpage/datasoftware', [LandingpageumumController::class, 'datasoftware'])->name('datasoftware.nonlogin');
Route::get('landingpage/laboratorium', [LandingpageumumController::class, 'laboratorium'])->name('laboratorium.nonlogin');
Route::get('landingpage/laboratorium/detail', [LandingpageumumController::class, 'laboratoriumdetail'])->name('laboratoriumdetail.nonlogin');
Route::get('landingpage/inventaris', [LandingpageumumController::class, 'Inventarisumum'])->name('inventaris.nonlogin');

//POV User Login 
Route::get('landingpage/login', [LandingpageController::class, 'index'])->name('homepage.login');
Route::get('login/landingpage/about', [LandingpageController::class, 'about'])->name('about.login');
Route::get('login/landingpage/datasoftware', [LandingpageController::class, 'datasoftware'])->name('datasoftware.login');


//Laboretorium 
Route::get('login/landingpage/laboratorium', [LandingpageController::class, 'laboratorium'])->name('laboratorium.login');
Route::get('login/landingpage/laboratorium/{id}/detail', [LandingpageController::class, 'laboratoriumdetail'])->name('laboratoriumdetail.login');
// Route::get('login/landingpage/laboratorium/reservasi', [LandingpageController::class, 'reservasilaboratorium'])->name('reservasilab.login');
Route::get('login/landingpage/laboratorium/reservasi/{id}/status', [LandingpageController::class, 'reservasilaboratoriumstatus'])->name('statusreservasilab.login');
Route::get('login/landingpage/laboratorium/{id}/formlab', [LandingpageController::class, 'laboratoriumformlab'])->name('formlab.login');
Route::post('login/landingpage/laboratorium/{id}/formlab', [LandingpageController::class, 'postFormLab'])->name('formlab.login.post');


//Reservasi Login 
Route::get('login/landingpage/inventaris', [LandingpageController::class, 'Inventaris'])->name('inventaris.login');
Route::get('login/landingpage/inventaris/reservasiNull', [LandingpageController::class, 'InventarisReservasiNull'])->name('reservasiinventarisnull.login');
Route::get('login/landinggpage/inventaris/riwayatreservasi/detail', [LandingpageController::class, 'InventarisRiwayatReservasiDetail'])->name('riwayatreservasiinventarisdetail.login');
Route::get('login/landingpage/inventaris/reservasi', [LandingpageController::class, 'InventarisReservasi'])->name('reservasiinventaris.login');
Route::get('login/landingpage/inventaris/formreservasi', [LandingpageController::class, 'FormReservasiInventaris'])->name('formreservasiinventaris.login');
Route::get('login/landingpage/inventaris/formreservasi/cek', [LandingpageController::class, 'InventarisFormReservasiCek'])->name('formreservasiinventariscek.login');
Route::get('login/landingpage/inventaris/formreservasi/berhasil', [LandingpageController::class, 'InventarisFormReservasiBerhasil'])->name('formreservasiinventarisberhasil.login');
Route::get('login/landingpage/inventaris/riwayatreservasi', [LandingpageController::class, 'InventarisRiwayatReservasi'])->name('riwayatreservasiinventaris.login');



//POV ADMIN SI
Route::get('/admin', [AdminController::class, 'Dashboard'])->name('dashboard.admin');

//laboratorium
Route::get('admin/laboratorium', [AdminController::class, 'Laboratorium'])->name('laboratorium.admin');
Route::get('admin/laboratorium/{id}/detail', [AdminController::class, 'LaboratoriumDetail'])->name('laboratoriumdetail.admin');
Route::get('admin/laboratorium/tambah', [AdminController::class, 'LaboratoriumTambah'])->name('laboratoriumtambah.admin');
Route::post('admin/laboratorium/tambah', [AdminController::class, 'laboratoriumtambahPost'])->name('laboratoriumtambah.admin.post');
Route::get('admin/laboratorium/{id}/edit', [AdminController::class, 'Laboratoriumedit'])->name('laboratoriumedit.admin');
Route::put('admin/laboratorium/{id}/update', [AdminController::class, 'laboratoriumupdate'])->name('laboratoriumeupdate.admin');
Route::delete('admin/laboratorium/{id}', [AdminController::class, 'Laboratoriumhapus'])->name('laboratoriumhapus.admin');

//JadwalLab
Route::get('admin/jadwallab', [AdminController::class, 'JadwalLab'])->name('jadwallab.admin');
Route::get('admin/jadwallab/detail', [AdminController::class, 'JadwalLabDetail'])->name('jadwallabdetail.admin');
Route::get('admin/jadwallab/tambah', [AdminController::class, 'JadwalLabTambah'])->name('jadwallabtambah.admin');
Route::get('admin/jadwallab/edit', [AdminController::class, 'JadwalLabEdit'])->name('jadwallabedit.admin');

//PeminjamanLab
Route::get('admin/peminjamanlab/tidakada', [AdminController::class, 'PeminjamanLabTidakAda'])->name('peminjamanlabtidakada.admin');
Route::get('admin/peminjamanlab/ada', [AdminController::class, 'PeminjamanLabAda'])->name('peminjamanlabada.admin');
Route::get('admin/peminjamanlab/detail', [AdminController::class, 'PeminjamanLabDetail'])->name('peminjamanlabdetail.admin');
Route::get('admin/peminjamanlab/archive', [AdminController::class, 'PeminjamanLabArchive'])->name('peminjamanlabarchive.admin');

//Inventaris
Route::get('admin/inventaris', [AdminController::class, 'Inventaris'])->name('inventaris.admin');
Route::get('admin/inventaris/tambah', [AdminController::class, 'InventarisTambah'])->name('inventaristambah.admin');
Route::get('admin/inventaris/edit', [AdminController::class, 'InventarisEdit'])->name('inventarisedit.admin');

//Peminjaman Inventaris

Route::get('admin/peminjamaninvenatris/tidakAda', [AdminController::class, 'PeminjamanInventarisTidakAda'])->name('peminjamaninvenatristidakada.admin');
Route::get('admin/peminjamaninvenatris/ada', [AdminController::class, 'PeminjamanInventarisAda'])->name('peminjamaninvenatrisada.admin');
Route::get('admin/peminjamaninvenatris/detail', [AdminController::class, 'PeminjamanInventarisDetail'])->name('peminjamaninvenatrisdetail.admin ');
Route::get('admin/peminjamaninvenatris/archive', [AdminController::class, 'PeminjamanInventarisArchive'])->name('peminjamaninvenatrisarchive.admin ');

//Profile
Route::get('admin/profil', [AdminController::class, 'Profil'])->name('profil.admin');
Route::get('admin/profil/edit', [AdminController::class, 'ProfilEdit'])->name('profiledit.admin');




//POV KALEB
//Dashboard
Route::get('/kaleb', [KalebController::class, 'Dashboard'])->name('dashboard.kaleb');

//Laboratoium 
Route::get('/kaleb/laboratorium', [KalebController::class, 'Laboratorium'])->name('laboratorium.kaleb');
Route::get('/kaleb/laboratorium/detail', [KalebController::class, 'LaboratoriumDetail'])->name('laboratoriumdetail.kaleb');



//JadwalLab
Route::get('/kaleb/jadwalLab', [KalebController::class, 'JadwalLab'])->name('jadwallab.kaleb');
Route::get('/Kaleb/jadwalLab/detail', [KalebController::class, 'JadwalLabDetail'])->name('jadwallabdetail.kaleb');


//PeminjamanLab
Route::get('/kaleb/peminjamanlab/tidakada', [KalebController::class, 'PeminjamanLabTidakAda'])->name('peminjamanlabtidakada.kaleb');
Route::get('/kaleb/peminjamanlab/ada', [KalebController::class, 'PeminjamanLabAda'])->name('peminjamanlabada.kaleb');
Route::get('/kaleb/peminjamanlab/detail', [KalebController::class, 'PeminjamanLabDetail'])->name('peminjamanlabdetail.kaleb');
Route::get('/kaleb/peminjamanlab/archive', [KalebController::class, 'PeminjamanLabArchive'])->name('peminjamanlabarchive.kaleb');


//Inventaris
Route::get('/kaleb/inventaris', [KalebController::class, 'Inventaris'])->name('inventaris.kaleb');

//Pemijaman Inventaris
Route::get('/kaleb/peminjamaninventaris/tidakada', [KalebController::class, 'PeminjamanInventarisTidakAda'])->name('peminjamaninvenatristidakada.kaleb');
Route::get('/kaleb/peminjamaninventaris/ada', [KalebController::class, 'PeminjamanInventarisAda'])->name('peminjamaninvenatrisada.kaleb');
Route::get('/kaleb/peminjamaninventaris/detail', [KalebController::class, 'PeminjamanInventarisDetail'])->name('peminjamaninvenatrisdetail.kaleb ');
Route::get('/kaleb/peminjamaninventaris/archive', [KalebController::class, 'PeminjamanInventarisArchive'])->name('peminjamaninvenatrisarchive.kaleb');

//Profile
Route::get('/kaleb/profil', [KalebController::class, 'Profil'])->name('profil.kaleb');
Route::get('/kaleb/profil/edit', [KalebController::class, 'ProfilEdit'])->name('profiledit.edit');
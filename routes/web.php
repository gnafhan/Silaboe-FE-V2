<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KalebController;


//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');


//Landing Page 

//POV User Login 
Route::get('/', [LandingpageController::class, 'index'])->name('homepage.login');
Route::get('login/landingpage/about', [LandingpageController::class, 'about'])->name('about.login');
Route::get('login/landingpage/datasoftware', [LandingpageController::class, 'datasoftware'])->name('datasoftware.login');

//
    Route::get('login/landingpage/laboratorium', [LandingpageController::class, 'laboratorium'])->name('laboratorium.login');
    Route::get('login/landingpage/laboratorium/detail', [LandingpageController::class, 'laboratoriumdetail'])->name('laboratoriumdetail.login');
    Route::get('login/landingpage/laboratorium/reservasi', [LandingpageController::class, 'reservasilaboratorium'])->name('reservasilab.login');
    Route::get('login/landingpage/laboratorium/reservasi/status', [LandingpageController::class, 'reservasilaboratoriumstatus'])->name('statusreservasilab.login');
    Route::get('login/landingpage/laboratorium/formlab', [LandingpageController::class, 'laboratoriumformlab'])->name('formlab.login');


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
Route::get('admin/laboratorium/detail', [AdminController::class, 'LaboratoriumDetail'])->name('laboratoriumdetail.admin');
Route::get('admin/laboratorium/tambah', [AdminController::class, 'LaboratoriumTambah'])->name('laboratoriumtambah,admin');
Route::get('admin/laboratorium/Edit', [AdminController::class, 'LaboratoriumEdit'])->name('laboratoriumedit.admin');

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
Route::get('/KalebDashboard', [KalebController::class, 'Dashboard'])->name('dashboard');

//Laboratoium 
Route::get('/KalebLaboratorium', [KalebController::class, 'Laboratorium'])->name('laboratorium');
Route::get('/KalebLaboratoriumDetail', [KalebController::class, 'LaboratoriumDetail'])->name('laboratoriumdetail');



//JadwalLab
Route::get('/KalebJadwalLab', [KalebController::class, 'JadwalLab'])->name('jadwallab');
Route::get('/KalebJadwalLabDetail', [KalebController::class, 'JadwalLabDetail'])->name('jadwallabdetail');


//PeminjamanLab
Route::get('/KalebPeminjamanLabTidakAda', [KalebController::class, 'PeminjamanLabTidakAda'])->name('peminjamanlabtidakada');
Route::get('/KalebPeminjamanLabAda', [KalebController::class, 'PeminjamanLabAda'])->name('peminjamanlabada');
Route::get('/KalebPeminjamanLabDetail', [KalebController::class, 'PeminjamanLabDetail'])->name('peminjamanlabdetail');
Route::get('/KalebPeminjamanLabArchive', [KalebController::class, 'PeminjamanLabArchive'])->name('peminjamanlabarchive');


//Inventaris
Route::get('/KalebInventaris', [KalebController::class, 'Inventaris'])->name('inventaris');

//Pemijaman Inventaris
Route::get('/KalebPeminjamanInventarisTidakAda', [KalebController::class, 'PeminjamanInventarisTidakAda'])->name('peminjamaninvenatristidakada ');
Route::get('/KalebPeminjamanInventarisAda', [KalebController::class, 'PeminjamanInventarisAda'])->name('peminjamaninvenatrisada');
Route::get('/KalebPeminjamanInventarisDetail', [KalebController::class, 'PeminjamanInventarisDetail'])->name('peminjamaninvenatrisdetail ');
Route::get('/KalebPeminjamanInventarisArchive', [KalebController::class, 'PeminjamanInventarisArchive'])->name('peminjamaninvenatrisarchive ');

//Profile
Route::get('/KalebProfil', [KalebController::class, 'Profil'])->name('profil');
Route::get('/KalebProfilEdit', [KalebController::class, 'ProfilEdit'])->name('profiledit');
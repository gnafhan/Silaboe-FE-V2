<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller

//POV ADMIN
{
//Dashboard
    public function dashboard()
    {
        return view('Admin.Dashboard');
    }

//Laboratorium
    public function laboratorium()
    {
        return view('Admin.Laboratorium');
    }
    public function laboratoriumdetail()
    {
        return view('Admin.LaboratoriumDetail');
    }

    public function laboratoriumtambah()
    {
        return view('Admin.LaboratoriumTambah');
    }
    public function laboratoriumedit()
    {
        return view('Admin.LaboratoriumEdit');
    }
    

    //Jawal Lab
    public function jadwallab()
    {
        return view('Admin.JadwalLab');
    }

    public function jadwallabdetail()
    {
        return view('Admin.JadwalLabDetail');
    }
    public function jadwallabtambah()
    {
        return view('Admin.JadwalLabTambah');
    }
    public function jadwallabedit()
    {
        return view('Admin.JadwalLabEdit');
    }

//Peminjaman Lab
    public function peminjamanlabtidakada()
    {
        return view('Admin.PeminjamanLabTidakAda');
    }
    public function peminjamanlabada()
    {
        return view('Admin.PeminjamanLabAda');
    }
    public function peminjamanlabdetail()
    {
        return view('Admin.PeminjamanLabDetail');
    }
   
    public function peminjamanlabarchive()
    {
        return view('Admin.PeminjamanLabArchive');
    }
//Inventaris
    public function inventaris()
    {
        return view('Admin.Inventaris');
    }
    public function inventaristambah()
    {
        return view('Admin.InventarisTambah');
    }
    public function inventarisedit()
    {
        return view('Admin.InventarisEdit');
    }


    //Peminjaman Invenataris
    public function peminjamaninventaristidakada()
    {
        return view('Admin.PeminjamanInventarisTidakAda');
    }
    public function peminjamaninventarisada()
    {
        return view('Admin.PeminjamanInventarisAda');
    }
    public function peminjamaninventarisdetail()
    {
        return view('Admin.PeminjamanInventarisDetail');
    }
    public function peminjamaninventarisarchive()
    {
        return view('Admin.PeminjamanInventarisArchive');
    }

//Profil
public function profil()
    {
        return view('Admin.Profil');
    }
    public function profiledit()
    {
        return view('Admin.ProfilEdit');
    }



}

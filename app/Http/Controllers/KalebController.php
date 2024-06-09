<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalebController extends Controller

{
    
    public function dashboard()
    {
        return view('Kaleb.Dashboard');
    }

    //Laboratoium
    public function laboratorium()
    {
        return view('Kaleb.Laboratorium');
    }
    public function laboratoriumdetail()
    {
        return view('Kaleb.LaboratoriumDetail');
    }

    //JadwalLab
    
    public function jadwallab()
    {
        return view('Kaleb.JadwalLab');
    }

    public function jadwallabdetail()
    {
        return view('Kaleb.JadwalLabDetail');
    }

    //PeminjamanLab
    public function peminjamanlabtidakada()
    {
        return view('Kaleb.PeminjamanLabTidakAda');
    }
    public function peminjamanlabada()
    {
        return view('Kaleb.PeminjamanLabAda');
    }
    public function peminjamanlabdetail()
    {
        return view('Kaleb.PeminjamanLabDetail');
    }
   
    public function peminjamanlabarchive()
    {
        return view('Kaleb.PeminjamanLabArchive');
    }

    //inventaris
    
    public function inventaris()
    {
        return view('Kaleb.Inventaris');
    }

    //Peminjaman Inventaris
    public function peminjamaninventaristidakada()
    {
        return view('Kaleb.PeminjamanInventarisTidakAda');
    }
    public function peminjamaninventarisada()
    {
        return view('Kaleb.PeminjamanInventarisAda');
    }
    public function peminjamaninventarisdetail()
    {
        return view('Kaleb.PeminjamanInventarisDetail');
    }
    public function peminjamaninventarisarchive()
    {
        return view('Kaleb.PeminjamanInventarisArchive');
    }

    //profile
    public function profil()
    {
        return view('Kaleb.Profil');
    }
    public function profiledit()
    {
        return view('Kaleb.ProfilEdit');
    }

}
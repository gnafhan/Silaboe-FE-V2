<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller


//POV USER LOGIN
{
    //homepage.userlogin
    public function index()
    {
        return view('UserLogin.homepage');
    }

    public function about()
    {
        return view('UserLogin.About');
    }

    //datasoftware.user login
    public function datasoftware()
    {
        return view('UserLogin.DataSoftware');
    }

    //Inventari.user login 

    public function inventaris()
    {
        return view('UserLogin.Inventaris');
    }

    public function inventarisreservasinull()
    {
        return view('UserLogin.InventarisReservasiNull');
    }
    public function inventarisreservasi()
    {
        return view('UserLogin.InventarisReservasi');
    }
    public function formreservasiinventaris()
    {
        return view('UserLogin.FormReservasiInventaris');
    }

    public function inventarisformreservasiberhasil()
    {
        return view('UserLogin.InventarisFormReservasiBerhasil');
    }
    
    public function inventarisriwayatreservasi()
    {
        return view('UserLogin.InventarisRiwayatReservasi');
    }
    public function inventarisriwayatreservasidetail()
    {
        return view('UserLogin.InventarisRiwayatReservasiDetail');
    }
    public function inventarisformreservasicek()
    {
        return view('UserLogin.InventarisFormReservasiCek');
    }

    //Laboratorium
    public function laboratorium()
    {
        return view('UserLogin.Laboratorium');
    }
    public function laboratoriumdetail()
    {
        return view('UserLogin.LaboratoriumDetail');
    }
    public function reservasilaboratorium()
    {
        return view('UserLogin.ReservasiLaboratorium');
    }
    public function reservasilaboratoriumstatus()
    {
        return view('UserLogin.ReservasiLaboratoriumStatus');
    }
    public function laboratoriumformlab()
    {
        return view('UserLogin.LaboratoriumFormlab');
    }







  








  


}

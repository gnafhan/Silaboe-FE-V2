<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageumumController extends Controller

{
    public function index()
    {
        return view('UserNonLogin.homepage-umum');
    }

    public function about()
    {
        return view('UserNonLogin.About-umum');
    }
    
    public function datasoftware()
    {
        return view('UserNonLogin.DataSoftware-umum');
    }

    //Inventari.user login 

    public function Inventarisumum()
    {
        return view('UserNonLogin.Inventaris-umum');
    }
    public function laboratorium()
    {
        return view('UserLogin.Laboratorium-umum');
    }
    public function laboratoriumdetail()
    {
        return view('UserLogin.LaboratoriumDetail-umum');
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingpageController extends Controller


//POV USER LOGIN
{
    //homepage.userlogin
    public function index()
    {
        $token = session('api_token');
        $jumlahlab = Http::withToken($token)->get(env('API_URL') . '/dashboard/countLab');
        $jumlahMahasiswa = Http::withToken($token)->get(env('API_URL') . '/studentCount');
        $jumlahDosen = Http::withToken($token)->get(env('API_URL') . '/lecturerCount');
        $jumlahResearch = Http::withToken($token)->get(env('API_URL') . '/researchCount');
        $jumlahLaboran = Http::withToken($token)->get(env('API_URL') . '/laboranCount');

        $jumlahLabs = $jumlahlab->json();
        // dd($jumlahLabs);
        $jumlahLabs = $jumlahLabs['data'];

        $jumlahMahasiswa = $jumlahMahasiswa->json();
        //dd($jumlahMahasiswa);
        $jumlahMahasiswa = $jumlahMahasiswa['data'];

        $jumlahDosen = $jumlahDosen->json();
        //dd($jumlahDosen);
        $jumlahDosen = $jumlahDosen['data'];

        $jumlahResearch = $jumlahResearch->json();
        //dd($jumlahResearch);
        $jumlahResearch = $jumlahResearch['data'];

        $jumlahLaboran = $jumlahLaboran->json();
        //dd($jumlahLaboran);
        $jumlahLaboran = $jumlahLaboran['data'];

        return view('UserLogin.homepage', compact('jumlahLabs', 'jumlahMahasiswa', 'jumlahDosen', 'jumlahResearch', 'jumlahLaboran'));
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
        $response = Http::get(env('API_URL').'/laboratorium');
        return view('UserLogin.Laboratorium', [
            'labs' => $response->json()['data']
        ]);
    }
    public function laboratoriumdetail($id)
    {
        $response = Http::get(env('API_URL').'/laboratorium/'. $id);
        return view('UserLogin.LaboratoriumDetail', [
            'lab' => $response->json()['data'],
            'id' => $id
        ]);
    }
    public function reservasilaboratorium()
    {
        return view('UserLogin.ReservasiLaboratorium', [
        ]);
    }
    public function reservasilaboratoriumstatus($id)
    {
        $lab = Http::get(env('API_URL').'/laboratorium/'. $id);
        // dd($lab);
        return view('UserLogin.ReservasiLaboratoriumStatus', [
            'lab' => $lab->json()['data']
        ]);
    }
    public function laboratoriumformlab($id)
    {
        $lab = Http::get(env('API_URL').'/laboratorium/'. $id);
        $syarat = Http::get(env('API_URL').'/rules');
        return view('UserLogin.LaboratoriumFormlab', [
            'id' => $id,
            'syarat' => $syarat->json()['data'],
            'lab' => $lab->json()['data'],
        ]);
    }

    public function postFormLab(Request $request, $id){
        // dd($request);
        $start_datetime = Carbon::parse($request->start . $request->start_time)->format('Y-m-d H:i');
        $end_datetime = Carbon::parse($request->end . $request->end_time)->format('Y-m-d H:i');

        $token = session('api_token');

        $request = [
            'room_id' => $id,
            'identity' => 'test',
            'email' => $request->email,
            'no_wa' => $request->wa,
            'needs' => $request->keterangan,
            'start_time' => $start_datetime,
            'end_time' => $end_datetime,
        ];

        $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '. $token
            ])->post(env('API_URL').'/laboratorium/reserve', $request);

        if ($response->successful()) {
            return redirect()->route('statusreservasilab.login', $id);
        } else {
            $errorBody = $response->body();
            return redirect()->back()->with('error', 'Reservation failed: ' . $errorBody);
        }
    }
}

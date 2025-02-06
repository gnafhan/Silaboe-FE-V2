<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

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
        $response = Http::get(env('API_URL').'/inventory/reserve');
        $data = $response->json();
        // dd($data);
        if (!isset($data['data'])) {
            return view('Admin.PeminjamanInventarisAda', ['reservations' => []]);
        }

        // Convert UTC to Jakarta timezone
        $transformedData = array_map(function($reservation) {
            $reservation['start_time'] = \Carbon\Carbon::parse($reservation['start_time'])
                ->setTimezone('Asia/Jakarta')
                ->format('Y-m-d H:i:s');
            
            $reservation['end_time'] = \Carbon\Carbon::parse($reservation['end_time'])
                ->setTimezone('Asia/Jakarta')
                ->format('Y-m-d H:i:s');
            
            return $reservation;
        }, $data['data']);
        return view('UserLogin.InventarisRiwayatReservasi',  ['reservations' => $transformedData]);
    }

    public function inventarisriwayatreservasidetail($id)
    {
        $response = Http::get(env('API_URL').'/inventory/reserve/'.$id);
        $data = $response->json();
        
        if (!isset($data['data'])) {
            return redirect()->back()->with('error', 'Data reservasi tidak ditemukan');
        }

        // Convert UTC to Jakarta timezone
        $reservation = $data['data'];
        $reservation['start_time'] = \Carbon\Carbon::parse($reservation['start_time'])
            ->setTimezone('Asia/Jakarta')
            ->format('Y-m-d H:i:s');
        
        $reservation['end_time'] = \Carbon\Carbon::parse($reservation['end_time'])
            ->setTimezone('Asia/Jakarta')
            ->format('Y-m-d H:i:s');
        
        return view('UserLogin.InventarisRiwayatReservasiDetail', ['reservation' => $reservation]);
    }

    public function inventarisformreservasicek()
    {
        return view('UserLogin.InventarisFormReservasiCek');
    }

    //Laboratorium
    public function laboratorium()
    {
        $response = Http::get(env('API_URL').'/laboratorium/');
        return view('UserLogin.Laboratorium', [
            'labs' => $response->json()['data']
        ]);
    }
    public function laboratoriumdetail($id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/laboratorium/'. $id);
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
        $lab = Http::get('http://127.0.0.1:8000/api/laboratorium/'. $id);
        // dd($lab);
        return view('UserLogin.ReservasiLaboratoriumStatus', [
            'lab' => $lab->json()['data']
        ]);
    }
    public function laboratoriumformlab($id)
    {
        $lab = Http::get('http://127.0.0.1:8000/api/laboratorium/'. $id);
        $syarat = Http::get('http://127.0.0.1:8000/api/rules');
        return view('UserLogin.LaboratoriumFormlab', [
            'id' => $id,   
            'syarat' => $syarat->json()['data'],
            'lab' => $lab->json()['data'],
        ]);
    }

    public function riwayatreservasilab($id, Request $request)
    {
        $token = session('api_token');
        $perPage = $request->input('entries', 10);
        $page = $request->input('page', 1);
        $search = ''; // Default empty search string
        
        $labResponse = Http::get('http://127.0.0.1:8000/api/laboratorium/'. $id);
        $reserveResponse = Http::withHeaders([
            'Authorization' => 'Bearer '. $token,
            'Accept' => 'application/json'
        ])->get('http://127.0.0.1:8000/api/laboratorium/'. $id .'/reserve');
    
        $reservations = [];
        $totalEntries = 0;
        $startEntry = 0;
        $endEntry = 0;
    
        if ($reserveResponse->successful() && $labResponse->successful()) {
            $reservations = collect($reserveResponse->json()['data'] ?? []);
            $totalEntries = $reservations->count();
            
            // Calculate pagination
            $offset = ($page - 1) * $perPage;
            $reservations = $reservations->slice($offset, $perPage);
            
            $startEntry = $offset + 1;
            $endEntry = min($offset + $perPage, $totalEntries);
        }
    
        return view('UserLogin.RiwayatReservasiLaboratorium', [
            'id' => $id,
            'lab' => $labResponse->json()['data'] ?? null,
            'reservations' => $reservations,
            'totalEntries' => $totalEntries,
            'startEntry' => $startEntry,
            'endEntry' => $endEntry,
            'currentPage' => $page,
            'perPage' => $perPage,
            'lastPage' => ceil($totalEntries / $perPage),
            'search' => $search
        ]);
    }

    public function postFormLab(Request $request, $id){
        // dd($request);
        $start_datetime = Carbon::parse($request->start . ' ' . $request->start_time)
            ->setTimezone('UTC')
            ->format('Y-m-d H:i:s');
        $end_datetime = Carbon::parse($request->end . ' ' . $request->end_time)
            ->setTimezone('UTC')
            ->format('Y-m-d H:i:s');

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
            ])->post('http://127.0.0.1:8000/api/laboratorium/reserve', $request);

        if ($response->successful()) {
            return redirect()->route('statusreservasilab.login', $id);
        } else {
            $errorBody = $response->body();
            return redirect()->back()->with('error', 'Reservation failed: ' . $errorBody);
        }
    }       


}

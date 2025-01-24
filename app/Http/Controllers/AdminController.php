<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller


//POV ADMIN
{
//Dashboard
    public function dashboard()
    {
        $token = session('api_token');
        $jadwal = Http::withToken($token)->get(env('API_URL') . '/dashboard/labReserve');
        $jumlahlab = Http::withToken($token)->get(env('API_URL') . '/dashboard/countLab');
        $jumlahinventaris = Http::withToken($token)->get(env('API_URL') . '/dashboard/countInventory');
        // $inventarisreserve = Http::withToken($token)->get(env('API_URL') . '/dashboard/inventoryReserve');


        
        if($jadwal->successful()){
            $jadwals = $jadwal->json();
            $jadwals = $jadwals['data'];

            $jumlahlabs = $jumlahlab->json();
            $jumlahlabs = $jumlahlabs['data'];

            $jumlahinventariss = $jumlahinventaris->json();
            // dd($jumlahinventaris);
            $jumlahinventariss = $jumlahinventariss['data'];

            // $inventarisreserves = $inventarisreserve ->json();
            // $inventarisreserves = $inventarisreserves['data'];
        }


 
        // $response = Http::get('https://api.thecatapi.com/v1/images/0XYvRd7oD');
        // $response_json = $response->json();
        // dd($response_json['id']);    
        return view('Admin.Dashboard', compact('jadwals','jumlahlabs','jumlahinventariss'));
    //   'jumlahinventariss'
    }
//Laboratorium
    public function laboratorium()
    {
        $token = session('api_token');
        $laboratorium = Http::withToken($token)->get(env('API_URL') . '/laboratorium');
        
        if($laboratorium ->successful()){
            $laboratoriums = $laboratorium->json();
            // dd($laboratoriums);
            $laboratoriums = $laboratoriums['data'];
        }
        return view('Admin.Laboratorium',compact('laboratoriums'));
    }
    public function laboratoriumdetail($id)
    {
        $token = session('api_token');
        $laboratorium = Http::withToken($token)->get(env('API_URL') . '/laboratorium/'.$id);
    
        if($laboratorium ->successful()){
            $laboratoriums = $laboratorium->json();
            // dd($laboratoriums);
            $laboratoriums = $laboratoriums['data'];           
        }
        return view('Admin.LaboratoriumDetail',compact('laboratoriums'));
    }

    public function laboratoriumtambah(Request $request)
    {
        return view('Admin.LaboratoriumTambah');
    }

    public function laboratoriumtambahPost(Request $request)
    {
        $token = session('api_token');
        // dd($request);
        $request = [
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,  
        ];
        // dd($request);
        $laboratorium = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token
        ])->post(env('API_URL').'/rooms', $request);

        // dd($laboratorium);

        if ($laboratorium->successful()) {
            return redirect()->route('laboratorium.admin')->with('message', 'Berhasil menambahkan data')->with('alert-type', 'success');
        } else {
            $errorBody = $laboratorium->body();
            return redirect()->back()->with('error', 'Gagal: ' . $errorBody)->with('alert-type', 'error');
        }
    }

    public function laboratoriumedit($id)
    {
        $token = session('api_token');
        $laboratorium = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token
        ])->get(env('API_URL').'/rooms/'.$id);
        return view('Admin.LaboratoriumEdit', [
            'laboratorium' => $laboratorium->json()['data']
        ]);
    }

    public function laboratoriumupdate(Request $request, $id)
    {
        $token = session('api_token');
        $request = [
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description
        ];
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token
        ])->put(env('API_URL').'/rooms/'.$id, $request);
        
        if ($response->successful()) {
            return redirect()->route('laboratorium.admin')->with('message', 'Berhasil mengedit data')->with('alert-type', 'success');
        } else {
            $errorBody = $response->body();
            return redirect()->back()->with('error', 'Gagal: ' . $errorBody)->with('alert-type', 'error');
        }
    }

    public function laboratoriumhapus($id)
    {
        $token = session('api_token');
        $laboratorium = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token
        ])->delete(env('API_URL').'/rooms/'.$id);


        if ($laboratorium->successful()) {
            return redirect()->route('laboratorium.admin')->with('message', 'Berhasil menghapus data')->with('alert-type', 'success');
        } else {
            $errorBody = $laboratorium->body();
            return redirect()->back()->with('error', 'Gagal: ' . $errorBody)->with('alert-type', 'error');
        }
    }
    

    //Jawal Lab
    // public function jadwallab()
    // {
    //     $token = session('api_token');
    //     $jadwallab = Http::withToken($token)->get(env('API_URL') . '/schedules');
    //     return view('Admin.JadwalLab'
    //     , [
    //         'jadwallab' => $jadwallab->json()['data']
    //     ]
    // );
    // }
    public function jadwallab(Request $request)
{
    $token = session('api_token');

    // Get the selected date from the query parameter, default to today's date if not provided
    $selectedDate = $request->query('date', \Carbon\Carbon::today()->toDateString());

    // Fetch the data from the API
    $response = Http::withToken($token)->get(env('API_URL') . '/schedules');

    // Process the data if the request is successful
    if ($response->successful()) {
        $jadwallab = $response->json()['data'];

        // Filter the schedules based on the selected date
        $jadwallab = array_map(function($room) use ($selectedDate) {
            // Filter the schedules for each room based on the selected date
            $room['schedules'] = array_filter($room['schedules'], function($schedule) use ($selectedDate) {
                // Compare only the date part of the start_time with the selected date
                $scheduleDate = substr($schedule['start_time'], 0, 10); // Extract date (yyyy-mm-dd)
                return $scheduleDate === $selectedDate;
            });

            // Sort the schedules by start_time (earliest to latest)
            usort($room['schedules'], function($a, $b) {
                return strtotime($a['start_time']) - strtotime($b['start_time']);
            });
            
            return $room;
        }, $jadwallab);
    }

    // Return the filtered data to the view
    return view('Admin.JadwalLab', [
        'jadwallab' => $jadwallab
    ]);
}

// a
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
    public function inventaris(Request $request)
    {
        $token = session('api_token');
        $search = $request->query('search');
        $response = Http::withToken($token)->get(env('API_URL') . '/inventories');
        
        if($response->successful()){
            $response = $response->json();
            $response = $response['data'];
        // If search keyword is provided, filter the data
        if ($search) {
            $response = array_filter($response, function($item) use ($search) {
                return stripos($item['item_name'], $search) !== false;
            });
        }
        }

        return view('Admin.Inventaris', [
            'inventaris' => $response
        ]);
    }
    public function inventaristambah()
    {
        return view('Admin.InventarisTambah');
    }

    public function inventaristambahPost(Request $request)
    {
        $token = session('api_token');
        // dd($request);
        $request = [
            'item_name' => $request->item_name,
            'no_item' => $request->no_item,
            'condition' => $request->condition,  
            'information' => $request->information,  
        ];
        // dd($request);
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token
        ])->post(env('API_URL').'/inventories', $request);

        // dd($response);

        if ($response->successful()) {
            return redirect()->route('inventaris.admin')->with('message', 'Berhasil menambahkan data')->with('alert-type', 'success');
        } else {
            $errorBody = $response->body();
            return redirect()->back()->with('error', 'Gagal: ' . $errorBody)->with('alert-type', 'error');
        }
    }
    
    public function inventarisedit($id)
    {
        $token = session('api_token');
        $inventaris = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token
        ])->get(env('API_URL').'/inventories/'.$id);
        // dd($inventaris);
        return view('Admin.InventarisEdit', [
            'inventaris' => $inventaris->json()['data']
        ]);
    }

    public function inventarisupdate(Request $request, $id)
    {
        $token = session('api_token');
        $request = [
            'item_name' => $request->item_name,
            'no_item' => $request->no_item,
            'condition' => $request->condition,  
            'information' => $request->information,  
        ];
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token
        ])->put(env('API_URL').'/inventories/'.$id, $request);
        
        if ($response->successful()) {
            return redirect()->route('inventaris.admin')->with('message', 'Berhasil mengedit data')->with('alert-type', 'success');
        } else {
            $errorBody = $response->body();
            return redirect()->back()->with('error', 'Gagal: ' . $errorBody)->with('alert-type', 'error');
        }
    }

    public function inventarishapus($id)
    {
        $token = session('api_token');
        $inventaris = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token
        ])->delete(env('API_URL').'/inventories/'.$id);
        if ($inventaris->successful()) {
            return redirect()->route('inventaris.admin')->with('message', 'Berhasil menghapus data')->with('alert-type', 'success');
        } else {
            $errorBody = $inventaris->body();
            return redirect()->back()->with('error', 'Gagal: ' . $errorBody)->with('alert-type', 'error');
        }
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

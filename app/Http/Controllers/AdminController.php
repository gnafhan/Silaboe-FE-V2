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
        $labDigunakan =  Http::withToken($token)->get(env('API_URL') . 'dashboard/labReserve');
        $inverntarisDigunakan =  Http::withToken($token)->get(env('API_URL') . 'dashboard/inventoryReserve');
        $inventarisreserve = Http::withToken($token)->get(env('API_URL') . '/dashboard/inventoryReserve');

        if($jadwal->successful()){
            $jadwals = $jadwal->json();
            $jadwals = $jadwals['data'];
            //dd($jadwals);

            $jumlahlabs = $jumlahlab->json();
            // dd($jumlahlabs);
            $jumlahlabs = $jumlahlabs['data'];

            $jumlahinventariss = $jumlahinventaris->json();
            // dd($jumlahinventariss);
            $jumlahinventariss = $jumlahinventariss['data'];

            $inventarisreserves = $inventarisreserve ->json();
            $inventarisreserves = $inventarisreserves['data'];
            // dd($inventarisreserves);
        }

        // $response = Http::get('https://api.thecatapi.com/v1/images/0XYvRd7oD');
        // $response_json = $response->json();
        // dd($response_json['id']);
        return view('Admin.Dashboard', compact('jadwals','jumlahlabs','jumlahinventariss','inventarisreserves'));
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
        // functional search
        if (request('search')) {
            $search = strtolower(request('search'));
            $keywords = explode(' ', $search);

            $laboratoriums = collect($laboratoriums)->filter(function ($item) use ($search, $keywords) {
                $name = strtolower($item['name']);

                if (stripos($name, $search) !== false) {
                    return true;
                }

                foreach ($keywords as $keyword) {
                    if (stripos($name, $keyword) === false) {
                        return false;
                    }
                }

                return true; // Semua keyword cocok
            })->toArray();
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
        $response = Http::get(env('API_URL').'/laboratorium/all-reserve');
        $data = $response->json();

        // KONVERSI UTC KE JAKARTA
        $transformedData = array_map(function($reservation) {
            $reservation['start_time'] = \Carbon\Carbon::parse($reservation['start_time'])
                ->setTimezone('Asia/Jakarta')
                ->format('Y-m-d H:i:s');
            
            $reservation['end_time'] = \Carbon\Carbon::parse($reservation['end_time'])
                ->setTimezone('Asia/Jakarta')
                ->format('Y-m-d H:i:s');
            
            return $reservation;
        }, $data['data']);

        return view('Admin.PeminjamanLabAda', ['reservations' => $transformedData]);
    }

    public function peminjamanlabdetail(Request $request)
    {
        $id = $request->input('id');
    
        try {
            $response = Http::get(env('API_URL').'/laboratorium/reserve/'. $id);
            $data = $response->json();
            // dd($data);
            if ($response->successful()) {
                $data = $response->json()['data'];
                
                // Convert times to Jakarta timezone if needed
                $data['start_time'] = \Carbon\Carbon::parse($data['start_time'])
                    ->setTimezone('Asia/Jakarta')
                    ->format('d/m/Y');
                
                $data['end_time'] = \Carbon\Carbon::parse($data['end_time'])
                    ->setTimezone('Asia/Jakarta')
                    ->format('d/m/Y');
                
                return view('Admin.PeminjamanLabDetail', ['reservation' => $data]);
            } else {
                // Handle API error
                return redirect()->back()->with('error', 'Failed to fetch reservation details');
            }
        } catch (\Exception $e) {
            // Handle any exceptions
            return redirect()->back()->with('error', 'An error occurred while fetching reservation details');
        }
    

        
        return view('Admin.PeminjamanLabDetail',['reservation' => $data]);
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        $response = Http::get(env('API_URL').'/laboratorium/reserve/search/'. $query);
        
        // Check if the response is successful
        if ($response->successful()) {
            $reservations = $response->json()['data'] ?? [];
        } else {
            $reservations = []; 
        }
        
        return view('admin.peminjamanLabAda', compact('reservations'));
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
        // dd($response->json());

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

        return view('Admin.PeminjamanInventarisAda', ['reservations' => $transformedData]);
    }

    public function peminjamaninventarisdetail($id)
    {
        $token = session('api_token');
        $inventoryreserf = Http::withToken($token)->get(env('API_URL') . '/inventory/reserve/' . $id);
        
        if($inventoryreserf->successful()){
            $inventoryreserfs = $inventoryreserf->json();
            return view('Admin.PeminjamanInventarisDetail', compact('inventoryreserfs'));
        }
        
        // Handle error case
        return redirect()->route('peminjamaninvenatrisada.admin')->with('error', 'Failed to fetch reservation details');
    }

    public function peminjamaninventarisarchive()
    {
        return view('Admin.PeminjamanInventarisArchive');
    }
    

    //Profil
    public function profil()
    {
        try {
            $token = session('api_token');
            
            if (!$token) {
                return redirect()->route('login')->with('message', 'Anda harus login terlebih dahulu')->with('alert-type', 'error');
            }
    
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json'
            ])->get(env('API_URL').'/current');
            
            if ($response->successful()) {
                $user = $response->json();
                // dd($user);
                return view('Admin.Profil', compact('user'));
            } else {
                // Handle unauthorized or failed request
                return redirect()->route('login')->with('message', 'Sesi login telah berakhir')->with('alert-type', 'error');
            }
        } catch (\Exception $e) {
            return redirect()->route('login')->with('message', 'Terjadi kesalahan saat mengambil data profil')->with('alert-type', 'error');
        }
    }


    public function profiledit()
    {
        try {
            // Ambil token dari sesi
            $token = session('api_token');
            
            if (!$token) {
                // Redirect ke login jika token tidak ditemukan
                return redirect()->route('login')->with('message', 'Anda harus login terlebih dahulu')->with('alert-type', 'error');
            }

            // Mengambil data profil dengan API
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json'
            ])->get(env('API_URL').'/current');

            if ($response->successful()) {
                // Jika berhasil, ambil data pengguna dari respons API
                $user = $response->json();
                return view('Admin.ProfilEdit', compact('user'));
            } else {
                // Redirect jika gagal mendapatkan data
                return redirect()->route('login')->with('message', 'Sesi login telah berakhir')->with('alert-type', 'error');
            }
        } catch (\Exception $e) {
            // Redirect dengan pesan error jika terjadi kesalahan
            return redirect()->route('login')->with('message', 'Terjadi kesalahan saat mengambil data profil: ' . $e->getMessage())->with('alert-type', 'error');
        }
    }
    
    // Memperbarui profil
    public function updateProfile(Request $request)
    {

        try {
            // Ambil token dari sesi
            $token = session('api_token');
            
            if (!$token) {
                // Redirect ke login jika token tidak ditemukan
                return redirect()->route('login')->with('message', 'Anda harus login terlebih dahulu')->with('alert-type', 'error');
            }

            // Mengambil data profil dengan API
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json'
            ])->get(env('API_URL').'/current');

            if ($response->successful()) {
                // Jika berhasil, ambil data pengguna dari respons API
                $user = $response->json();
            } else {
                // Redirect jika gagal mendapatkan data
                return redirect()->route('login')->with('message', 'Sesi login telah berakhir')->with('alert-type', 'error');
            }
        } catch (\Exception $e) {
            // Redirect dengan pesan error jika terjadi kesalahan
            return redirect()->route('login')->with('message', 'Terjadi kesalahan saat mengambil data profil: ' . $e->getMessage())->with('alert-type', 'error');
        }

        // Validasi input
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
        ]);
    
        try {
            $token = session('api_token');
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json',
            ])->post(env('API_URL').'/update/profil', [
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'username' => $validated['username'],
                'email' => $user['email'],
            ]);
    
            if ($response->successful()) {
                return redirect()->route('profil.admin')->with('success', 'Profil berhasil diperbarui');
            }
    
            // More detailed error handling
            $errorMessage = $response->json('message') ?? 'Gagal memperbarui profil';
            return redirect()->back()->with('error', $errorMessage);
    
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


}

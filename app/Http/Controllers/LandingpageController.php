<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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

    public function inventaris(Request $request)
    {
        $perPage = $request->input('entries', 10);
        $page = $request->input('page', 1);

        $response = Http::get(env('API_URL').'/inventory');
        // dd($response->json());
        $inventories = collect($response->json()['data'] ?? []);

        $totalEntries = $inventories->count();
        $offset = ($page - 1) * $perPage;
        $inventories = $inventories->slice($offset, $perPage);

        return view('UserLogin.Inventaris', [
            'inventories' => $inventories,
            'totalEntries' => $totalEntries,
            'startEntry' => $offset + 1,
            'endEntry' => min($offset + $perPage, $totalEntries),
            'currentPage' => $page,
            'perPage' => $perPage,
            'lastPage' => ceil($totalEntries / $perPage)
        ]);
    }

    public function inventarisreservasinull()
    {
        return view('UserLogin.InventarisReservasiNull');
    }
    public function inventarisreservasi(Request $request)
    {
        $selectedItems = $request->query('selected_items', []);
        $inventories = collect(); // Initialize as a collection

        if (!empty($selectedItems)) {
            $response = Http::get(env('API_URL').'/inventory', [
                'ids' => implode(',', $selectedItems)
            ]);
            $inventories = collect($response->json()['data'] ?? [])->filter(function ($inventory) use ($selectedItems) {
                return in_array($inventory['id'], $selectedItems);
            });
        }

        return view('UserLogin.InventarisReservasi', [
            'selectedInventories' => $inventories
        ]);
    }
    public function formreservasiinventaris(Request $request)
    {
        // Get selected_items as array from URL query
        $selectedItems = $request->query('selected_items', []);

        // Convert to array if it's not already
        if (!is_array($selectedItems)) {
            $selectedItems = [$selectedItems];
        }

        $inventories = collect();

        if (!empty($selectedItems)) {
            $response = Http::get(env('API_URL').'/inventory', [
                'ids' => implode(',', $selectedItems)
            ]);

            if ($response->successful()) {
                $inventories = collect($response->json()['data'] ?? [])->filter(function ($inventory) use ($selectedItems) {
                    return in_array($inventory['id'], $selectedItems);
                });
            }
        }

        // Debug information
        Log::info('Selected Items:', ['items' => $selectedItems]);
        Log::info('Retrieved Inventories:', ['inventories' => $inventories]);

        return view('UserLogin.FormReservasiInventaris', [
            'selectedInventories' => $inventories
        ]);
    }

    public function postFormReservasiInventaris(Request $request)
    {
        // Make sure selected_items exists and is an array
        if (!$request->has('selected_items') || !is_array($request->selected_items)) {
            return redirect()->back()->with('error', 'No items selected for reservation');
        }

        $start_datetime = Carbon::parse($request->start . ' ' . $request->start_time)
            ->setTimezone('UTC')
            ->format('Y-m-d H:i:s');
        $end_datetime = Carbon::parse($request->end . ' ' . $request->end_time)
            ->setTimezone('UTC')
            ->format('Y-m-d H:i:s');

        $token = session('api_token');

        // Cast selected_items to array to ensure foreach works
        $selectedItems = (array) $request->selected_items;

        // Handle file upload directly
        $identityPath = null;
        if ($request->hasFile('identity')) {
            $file = $request->file('identity');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/identitas', $filename);
            $identityPath = 'storage/identitas/' . $filename;
        }

        // Get identity path from form data
        $identityPath = null;
        if ($request->has('identity_path')) {
            $path = $request->input('identity_path');
            $filename = basename($path);
            $identityPath = 'storage/identitas/' . $filename;
        }

        foreach ($selectedItems as $inventory_id) {
            $requestData = [
                'inventory_id' => $inventory_id,
                'identity' => $identityPath ?? 'no-identity',
                'email' => $request->email,
                'no_wa' => $request->no_wa,
                'needs' => $request->keterangan,
                'start_time' => $start_datetime,
                'end_time' => $end_datetime,
                'name' => $request->name
            ];

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $token
            ])->post(env('API_URL').'/inventory/reserve', $requestData);
            // dd($response->json());

            if (!$response->successful()) {
                $errorBody = $response->body();
                // abort($response->status(), 'Reservation failed: ' . $errorBody);
                return redirect()->back()->with('error', 'Reservation failed: ' . $errorBody);
            }
        }

        return redirect()->route('riwayatreservasiinventaris.login');
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
            return view('UserLogin.InventarisRiwayatReservasi', ['reservations' => []]);
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
    public function inventarisformreservasicek(Request $request)
    {
        // Get selected items data for display
        $selectedItems = $request->input('selected_items', []);
        $inventories = collect();

        if (!empty($selectedItems)) {
            $response = Http::get(env('API_URL').'/inventory', [
                'ids' => implode(',', $selectedItems)
            ]);

            if ($response->successful()) {
                $inventories = collect($response->json()['data'] ?? [])->filter(function ($inventory) use ($selectedItems) {
                    return in_array($inventory['id'], $selectedItems);
                });
            }
        }

        // Handle file upload and store temporarily
        $formData = [
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'no_wa' => $request->input('no_wa'),
            'keterangan' => $request->input('keterangan'),
        ];

        if ($request->hasFile('identity')) {
            $file = $request->file('identity');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d_His') . '_' . Str::random(10) . '.' . $extension;
            $path = $file->storeAs('public/identitas', $filename);
            $formData['identity_path'] = $path;
        }

        return view('UserLogin.InventarisFormReservasiCek', [
            'selectedInventories' => $inventories,
            'formData' => $formData
        ]);
    }

    //Laboratorium
    public function laboratorium()
    {
         //SUPPORT
         $response = Http::get(env('API_URL') . '/laboratorium-support');
         if ($response->successful()) {
             $laboratoriumSupports = $response->json();
             $laboratoriumSupports = $laboratoriumSupports['data'];
         } else {
             // dd('API Error: ' . $response->status(), $response->body());
             $laboratoriumSupports = [];
         }
        $response = Http::get(env('API_URL') . '/laboratorium/');
        return view('UserLogin.Laboratorium', [
            'labs' => $response->json()['data'],
            'laboratoriumSupports' => $laboratoriumSupports
        ]);
    }
    public function laboratoriumdetail($id)
    {
        $response = Http::get(env('API_URL').'/laboratorium/' . $id);
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
        $lab = Http::get(env('API_URL').'/laboratorium/' . $id);
        // dd($lab);
        return view('UserLogin.ReservasiLaboratoriumStatus', [
            'lab' => $lab->json()['data']
        ]);
    }
    public function laboratoriumformlab($id)
    {
        $lab = Http::get(env('API_URL').'/laboratorium/' . $id);
        $syarat = Http::get(env('API_URL').'/rules');
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

        $labResponse = Http::get(env('API_URL').'/laboratorium/' . $id);
        $reserveResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json'
        ])->get(env('API_URL').'/laboratorium/' . $id . '/reserve');

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

    public function postFormLab(Request $request, $id)
    {
        try {
        
        $start_datetime = Carbon::parse($request->start . ' ' . $request->start_time)
            ->setTimezone('UTC')
            ->format('Y-m-d H:i:s');
        $end_datetime = Carbon::parse($request->end . ' ' . $request->end_time)
            ->setTimezone('UTC')
            ->format('Y-m-d H:i:s');

        $token = session('api_token');

        // Handle file upload with enhanced filename
        $identityPath = null;
        if ($request->hasFile('identitas')) {
            $file = $request->file('identitas');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d_His') . '_' . Str::random(10) . '.' . $extension;
            $path = $file->storeAs('public/identitas', $filename);
            $identityPath = 'storage/identitas/' . $filename;
        }

        $requestData = [
            'room_id' => $id,
            'identity' => $identityPath ?? 'no-identity',
            'email' => $request->email,
            'no_wa' => $request->wa,
            'needs' => $request->keterangan,
            'start_time' => $start_datetime,
            'end_time' => $end_datetime,
            'name' => $request->name
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $token
        ])->post(env('API_URL').'/laboratorium/reserve', $requestData);

        if ($response->successful()) {
            return redirect()->route('statusreservasilab.login', $id);
        } else {
            $errorBody = $response->body();
            Log::error('Error while reserving lab', ['error' => $errorBody]);
            return redirect()->back()->with('error', 'Reservation failed: ' . $errorBody);
        }

        } catch (\Exception $e) {
            Log::error('Error while reserving lab', ['error' => $e]);
            return redirect()->back()->with('error', 'Reservation failed: ' . $e->getMessage());
        }
    }

    public function removeSelectedItem(Request $request)
    {
        $selectedItems = $request->query('selected_items', []);
        $itemIdToRemove = $request->input('item_id');

        if (($key = array_search($itemIdToRemove, $selectedItems)) !== false) {
            unset($selectedItems[$key]);
        }

        // Re-index the array to remove gaps
        $selectedItems = array_values($selectedItems);

        return redirect()->route('reservasiinventaris.login', ['selected_items' => $selectedItems]);
    }

}

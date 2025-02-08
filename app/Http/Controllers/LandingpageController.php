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

    public function inventaris(Request $request)
    {
        $perPage = $request->input('entries', 10);
        $page = $request->input('page', 1);

        $response = Http::get('http://127.0.0.1:8000/api/inventory');
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
            $response = Http::get('http://127.0.0.1:8000/api/inventory', [
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
            $response = Http::get('http://127.0.0.1:8000/api/inventory', [
                'ids' => implode(',', $selectedItems)
            ]);

            if ($response->successful()) {
                $inventories = collect($response->json()['data'] ?? [])->filter(function ($inventory) use ($selectedItems) {
                    return in_array($inventory['id'], $selectedItems);
                });
            }
        }

        // Debug information
        \Log::info('Selected Items:', ['items' => $selectedItems]);
        \Log::info('Retrieved Inventories:', ['inventories' => $inventories]);

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

        foreach ($selectedItems as $inventory_id) {
            $requestData = [
                'inventory_id' => $inventory_id,
                'identity' => 'test',
                'email' => $request->email,
                'no_wa' => $request->no_wa,
                'needs' => $request->keterangan,
                'start_time' => $start_datetime,
                'end_time' => $end_datetime,
            ];

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $token
            ])->post('http://127.0.0.1:8000/api/inventory/reserve', $requestData);

            if (!$response->successful()) {
                $errorBody = $response->body();
                return redirect()->back()->with('error', 'Reservation failed: ' . $errorBody);
            }
        }

        return redirect()->route('formreservasiinventarisberhasil.login');
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
    public function inventarisformreservasicek(Request $request)
    {
        // Get selected items data for display
        $selectedItems = $request->input('selected_items', []);
        $inventories = collect();

        if (!empty($selectedItems)) {
            $response = Http::get('http://127.0.0.1:8000/api/inventory', [
                'ids' => implode(',', $selectedItems)
            ]);

            if ($response->successful()) {
                $inventories = collect($response->json()['data'] ?? [])->filter(function ($inventory) use ($selectedItems) {
                    return in_array($inventory['id'], $selectedItems);
                });
            }
        }

        // Add request data for form
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

        return view('UserLogin.InventarisFormReservasiCek', [
            'selectedInventories' => $inventories,
            'formData' => $formData
        ]);
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
        $response = Http::get('http://127.0.0.1:8000/api/laboratorium/' . $id);
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
        $lab = Http::get('http://127.0.0.1:8000/api/laboratorium/' . $id);
        // dd($lab);
        return view('UserLogin.ReservasiLaboratoriumStatus', [
            'lab' => $lab->json()['data']
        ]);
    }
    public function laboratoriumformlab($id)
    {
        $lab = Http::get('http://127.0.0.1:8000/api/laboratorium/' . $id);
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

        $labResponse = Http::get('http://127.0.0.1:8000/api/laboratorium/' . $id);
        $reserveResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json'
        ])->get('http://127.0.0.1:8000/api/laboratorium/' . $id . '/reserve');

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
            'Authorization' => 'Bearer ' . $token
        ])->post('http://127.0.0.1:8000/api/laboratorium/reserve', $request);

        if ($response->successful()) {
            return redirect()->route('statusreservasilab.login', $id);
        } else {
            $errorBody = $response->body();
            return redirect()->back()->with('error', 'Reservation failed: ' . $errorBody);
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

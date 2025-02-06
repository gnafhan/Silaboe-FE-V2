<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\User; // Assuming User model is in App\Models namespace
use Illuminate\Support\Facades\Log as FacadesLog;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])->post(env('API_URL') . '/login', [
                'email' => $request->email,
                'password' => $request->password,
            ]);

            FacadesLog::info('check success', ['response' => env('API_URL') . '/login']);

            if ($response->successful()) {
                FacadesLog::info('Login success', ['response' => $response]);
                $content = $response->json();
                $token = $content['token'] ?? null;
                $user = $content['data'];

                if ($token) {
                    session(['api_token' => $token]);
                    session(['user' => $user]);
                    return redirect()->route('login')->with('message', 'Sukses masuk')->with('alert-type', 'success');
                } else {
                    return back()->with('message','Token atau data pengguna tidak ditemukan dalam respons')->with('alert-type', 'error');
                }
            } else {
                $errorMessage = $response->json('message') ?? 'Kesalahan tidak diketahui';
                return back()->with('message', $errorMessage)->with('alert-type', 'error');
            }
        } catch (\Exception $e) {
            FacadesLog::error($e->getMessage());
            return back()->with('message', 'Email atau passowrd yang Anda masukkan salah')->with('alert-type', 'error');
        }
    }

    // public function logout()
    // {
    //     // Update user login status to 'off'
    //     $currentUser = User::find(Auth::user()->id);
    //     $currentUser->update(['loginstatus' => 'off']);

    //     Auth::logout();
    //     return redirect()->route('login')->with('success', 'Berhasil Logout');
    // }

    public function register()
    {
        return view('auth.register');
    }
}

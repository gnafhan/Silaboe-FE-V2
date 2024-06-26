<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\User; // Assuming User model is in App\Models namespace

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        try {
            $response = Http::post(env('API_URL') . '/login', [
                'email' => $request->email,
                'password' => $request->password,
            ]);

            if ($response->successful()) {
                $content = $response->json();
                $token = $content['token'] ?? null;

                if ($token) {
                    session(['api_token' => $token]);
                    return redirect()->route('login')->with('message', 'Sukses masuk')->with('alert-type', 'success');
                } else {
                    return back()->with('message', 'Token atau data pengguna tidak ditemukan dalam respons')->with('alert-type', 'error');
                }
            } else {
                $errorMessage = $response->json('message') ?? 'Kesalahan tidak diketahui';
                return back()->with('message', 'Kesalahan dalam mengambil data: ' . $errorMessage)->with('alert-type', 'error');
            }
        } catch (\Exception $e) {
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

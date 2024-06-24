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
                $token = $content['token'] ?? null; // Adjust the key according to the actual response structure

                // dd($content);

                if ($token) {
                    // Save the token and user data in the session
                    session(['api_token' => $token]);


                    // // Update user login status (assuming you have 'loginstatus' field in User model)
                    // $currentUser = User::find($user['id']);
                    // $currentUser->update(['loginstatus' => 'on']);

                    return redirect()->route('dashboard.admin');
                } else {
                    return back()->withErrors(['message' => 'Token or user data not found in the response']);
                }
            } else {
                $errorMessage = $response->json('message') ?? 'Unknown error';
                return back()->withErrors(['message' => 'Error fetching data: ' . $errorMessage]);
            }
        } catch (\Exception $e) {
            // Log the exception message
            return back()->withErrors(['message' => 'An error occurred while attempting to log in.']);
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

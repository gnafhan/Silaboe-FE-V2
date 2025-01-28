@extends('layouts.AdminLayouts')
@section('content')
    <header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6 sticky w-full top-0">
        <h2 class="text-2xl font-semibold">Profil</h2>
        <div class="flex items-center space-x-4">
            <button class="text-white hover:text-gray-300 focus:outline-none">
                <img src="{{ asset('image/Notification.png') }}" class="h-10 w-10" alt="Notification" />
            </button>
            <div class="relative">
                <button class="flex items-center text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                    <img src="{{ asset('image/Profile.png') }}" class="h-10 w-10" alt="Profile" />
                </button>
            </div>
        </div>
    </header>
    <div class="bg-white">
        <div class="flex-1 lg:mx-12 mx-6 py-8 flex-col flex lg:gap-4 md:gap-4 gap-2">
            <div class="p-4 rounded-xl w-full mx-auto">
                <h1 class="text-2xl font-semibold text-black mb-6">Edit Profil</h1>
                
                {{-- Menampilkan pesan sukses atau error --}}
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('profil.update') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="first_name" class="block text-gray-700 font-bold text-lg">Nama Depan</label>
                            <input type="text" id="first_name" name="first_name" 
                                   value="{{ old('first_name', $user['first_name'] ?? '') }}" 
                                   class="bg-[rgba(98,143,142,0.1)] mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-[#4C8F8B] focus:border-[#4C8F8B]">
                            @error('first_name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="last_name" class="block text-gray-700 font-bold text-lg">Nama Belakang</label>
                            <input type="text" id="last_name" name="last_name" 
                                   value="{{ old('last_name', $user['last_name'] ?? '') }}" 
                                   class="bg-[rgba(98,143,142,0.1)] mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-[#4C8F8B] focus:border-[#4C8F8B]">
                            @error('last_name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="username" class="block text-gray-700 font-bold text-lg">Username</label>
                        <input type="text" id="username" name="username" 
                               value="{{ old('username', $user['username'] ?? '') }}" 
                               class="bg-[rgba(98,143,142,0.1)] mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-[#4C8F8B] focus:border-[#4C8F8B]">
                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-start space-x-4 mt-24">
                        <a href="{{ route('profil.admin') }}" class="bg-[#D46857] hover:scale-105 text-white py-2 px-6 rounded-xl hover:bg-red-600 font-medium">Cancel</a>
                        <button type="submit" class="bg-[#4C8F8B] hover:scale-105 text-white py-2 px-6 rounded-xl hover:bg-teal-500 font-medium">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

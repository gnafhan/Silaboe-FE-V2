@extends('layouts.AdminLayouts')
@section('content')
<header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6 sticky w-full top-0">
    <h2 class="text-2xl font-semibold">Peminjaman Inventaris</h2>
    <div class="flex items-center space-x-4">
        <button class="text-white hover:text-gray-300 focus:outline-none">
            <img src="{{ asset('image/Notification.png') }}" class="  h-10 w-10" alt="Flowbite Logo" />
        </button>
        <div class="relative">
            <button
                class="flex items-center text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                <img src="{{ asset('image/Profile.png') }}" class=" h-10 w-10 " alt="Flowbite Logo" />
            </button>
        </div>
    </div>
</header>
<div class="bg-[rgba(237,245,245,1)]">
    <main class="flex-1 lg:mx-12 mx-12  py-8 flex-col flex lg:gap-4 md:gap-4 gap-2">
        <div class="relative w-full">
            <div class="absolute top-0 left-0 border-l-8 border-[#4C8F8B] rounded-lg h-full"></div>
            <div class="text-xl font-medium py-6 px-4 bg-[rgba(98,143,142,0.2)] rounded-xl flex items-center">
                Tidak ada Pengajuan Peminjaman Inventaris
            </div>
        </div>
    </main>
</div>
@endsection

@extends('layouts.AdminLayouts')
@section('content')
<header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6">
    <h2 class="text-2xl font-semibold">Peminjaman Lab</h2>
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
    <section class="flex-1 lg:mx-20 mx-12 my-6
     flex-col flex lg:gap-4 md:gap-4 gap-4">
        <h2 class="text-2xl font-bold mb-6">Peminjaman Laboratorium HU 106</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-200 px-8 py-6 rounded-lg">
                <p class="text-xl font-bold text-black mb-2">Email</p>
                <p class="text-lg break-words">tamarashsis@mail.ugm.ac.id</p>
            </div>
            <div class="bg-gray-200 px-8 py-6 rounded-lg">
                <p class="text-xl font-bold text-black mb-2">Email</p>
                <p class="text-lg break-words">tamarashsis@mail.ugm.ac.id</p>
            </div>
            <div class="bg-gray-200 px-8 py-6 rounded-lg">
                <p class="text-xl font-bold text-gray-700 mb-2">Nama</p>
                <p class="text-lg">Tamara Sashikirana</p>
            </div>
            <div class="bg-gray-200 px-8 py-6 rounded-lg">
                <p class="text-xl font-bold text-gray-700 mb-2">Jam Peminjaman</p>
                <p class="text-lg">07.15 - 16.00</p>
            </div>
            <div class="bg-gray-200 px-8 py-6 rounded-lg">
                <p class="text-xl font-bold text-gray-700 mb-2">No Whatsapp</p>
                <p class="text-lg">08756721973</p>
            </div>
            <div class="bg-gray-200 px-8 py-6 rounded-lg">
                <p class="text-xl font-bold text-gray-700 mb-2">Keperluan Peminjaman</p>
                <p class="text-lg">Sekolah Kepelatihan Design Graphic</p>
            </div>
            <div class="bg-gray-200 px-8 py-6 rounded-lg ">
                <p class="text-xl font-bold text-gray-700 mb-2">Foto Identitas</p>
                <a href="#" class="text-blue-500">Fotoidentitas.png</a>
            </div>
        </div>
        <div class="flex justify-start">
            <button class="mt-6 bg-[#4C8F8B] text-white px-8 py-2 rounded-md flex items-center">
                <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mr-2">
                    <path
                        d="M8.27669 15.6804L1.74475 9.04361C1.60149 8.8988 1.52114 8.70333 1.52114 8.49964C1.52114 8.29594 1.60149 8.10047 1.74475 7.95566L8.27527 1.31889C8.41846 1.17319 8.49869 0.977077 8.49869 0.772795C8.49869 0.568512 8.41846 0.3724 8.27527 0.226696C8.20532 0.154947 8.12172 0.0979252 8.02939 0.0589924C7.93706 0.0200596 7.83787 0 7.73767 0C7.63747 0 7.53828 0.0200596 7.44595 0.0589924C7.35362 0.0979252 7.27002 0.154947 7.20007 0.226696L0.669549 6.86205C0.240424 7.2991 0 7.88713 0 8.49964C0 9.11214 0.240424 9.70017 0.669549 10.1372L7.20007 16.7726C7.27004 16.8445 7.35373 16.9017 7.44619 16.9408C7.53865 16.9799 7.63801 17 7.73838 17C7.83875 17 7.93811 16.9799 8.03057 16.9408C8.12303 16.9017 8.20672 16.8445 8.27669 16.7726C8.41987 16.6269 8.5001 16.4308 8.5001 16.2265C8.5001 16.0222 8.41987 15.8261 8.27669 15.6804Z"
                        fill="#FCFCFC" />
                </svg>
                Kembali
            </button>
        </div>
    </section>
</div>
@endsection

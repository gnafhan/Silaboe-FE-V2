@extends('layouts.homelayouts')
@section('content')
    <section class="lg:mx-24 mx-16 bg-white flex flex-col">
        <div class="flex flex-col lg:flex-row mt-10 items-start justify-start lg:space-x-2">
            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-md">Beranda</button>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </div>

            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-md">Inventaris</button>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </div>

            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-md">Inventaris Laboratorium Teknologi Rekayasa Perangkat Lunak</button>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </div>

            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-md text-blue-500">Reservasi Inventaris</button>
            </div>
        </div>




        <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-4"></div>
        <div class="py-4">
            <div class=" lg:text-4xl text-xl font-bold text-[#628F8E] lg:mb-6 mb-4">Reservasi Inventaris</div>

        </div>

        <div class="bg-[#F8E0E0] mt-8 relative">
            <div class="absolute top-0 left-0 border-l-8 border-[#D46857] h-full"></div>

            <div class="flex flex-col border border-red-400">
                <div class=" flex lg:px-20 lg:text-2xl text-xl lg:pt-8 p-4 font-semibold text-[#D46857]">Informasi</div>
                <div class="flex text-justify  lg:px-20 lg:pt-4 lg:pb-8 px-6 pb-6 text-sm lg:text-xl">Belum ada inventaris
                    yang ditambahkan.
                </div>
            </div>
        </div>

        <div class="flex flex-row gap-4 mt-12 mb-52 justify-start ">
            <a href="{{ Route('formreservasiinventaris.login') }}" type="submit"
                class="text-white bg-[#F5CD51] hover:scale-105 focus:ring-4 focus:outline-none focus:ring-[#f3e45d] font-reguler rounded-md lg:text-lg md:text-md text-sm w-max-xl  lg:w-max-auto md:w-max-auto lg:px-6 lg:py-3 px-4 py-3 text-center dark:bg-[#F5CD51] ">Tambahkan
                Inventaris</a>

        </div>


        {{-- <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
            <span
                class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">Delivered</span>
        </td> --}}
        {{-- 
        <td class="p-3 text-md text-gray-700 whitespace-nowrap">
            <a href="#" class="font-bold text-hitam hover:underline">Meja PC Server</a>
        </td> --}}
    </section>
@endsection

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
                <button class="lg:text-lg text-md">Laboratorium</button>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </div>

            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-md"> Laboratorium Teknologi Rekayasa Perangkat Lunak</button>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </div>

            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-md text-blue-400 ">{{ $lab['name'] }}</button>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>


            </div>
            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-md text-blue-400 "> Reservasi {{ $lab['name'] }}</button>



            </div>

        </div>
        <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-4"></div>
        <div class="py-4">
            <div class=" lg:text-4xl text-2xl font-bold text-[#628F8E] lg:mb-4 mb-4">Reservasi {{ $lab['name'] }}</div>
        </div>
        <div class="flex flex-row items-center gap-4">
            <svg class="" width="16" height="16" viewBox="0 0 15 15" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.5 7.5C6.46875 7.5 5.58594 7.13281 4.85156 6.39844C4.11719 5.66406 3.75 4.78125 3.75 3.75C3.75 2.71875 4.11719 1.83594 4.85156 1.10156C5.58594 0.367188 6.46875 0 7.5 0C8.53125 0 9.41406 0.367188 10.1484 1.10156C10.8828 1.83594 11.25 2.71875 11.25 3.75C11.25 4.78125 10.8828 5.66406 10.1484 6.39844C9.41406 7.13281 8.53125 7.5 7.5 7.5ZM0 15V12.375C0 11.8438 0.136875 11.3556 0.410625 10.9106C0.684375 10.4656 1.0475 10.1256 1.5 9.89062C2.46875 9.40625 3.45312 9.04312 4.45312 8.80125C5.45312 8.55937 6.46875 8.43812 7.5 8.4375C8.53125 8.4375 9.54687 8.55875 10.5469 8.80125C11.5469 9.04375 12.5312 9.40688 13.5 9.89062C13.9531 10.125 14.3166 10.465 14.5903 10.9106C14.8641 11.3562 15.0006 11.8444 15 12.375V15H0Z"
                    fill="#F5CD51" />
            </svg>

            <div class=" text-sm lg:text-xl font-semibold text-black">Oleh : trpl.sv</div>
        </div>
        <div class="mt-8 mb-56 relative" style="background-color: rgba(76, 143, 139, 0.1); border: 1px solid #4C8F8B;">
            <div class="absolute top-0 left-0 border-l-8 border-[#4C8F8B] h-full"></div>

            <div class="flex lg:px-20 lg:text-2xl text-xl lg:pt-6 p-6 font-semibold text-[#499DBC]">Informasi</div>
            <div class="flex text-justify lg:px-20 lg:pt-4 lg:pb-8 px-6 pb-6 text-sm lg:text-xl text-[#499DBC]">
                Reservasi inventaris berhasil! Tunggu hingga admin menyetujui reservasi!
            </div>
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

@extends('layouts.homelayouts')
@section('content')
    <section class="mx-16 bg-white flex flex-col">

        <div class="flex flex-wrap mt-10 items-center space-x-2 lg:space-x-4">
            <button class="lg:text-lg text-md">Beranda</button>
            <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <button class="lg:text-lg text-md">Inventaris</button>
            <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>
            <button class="lg:text-lg text-md text-blue-500">Laboratorium Teknologi Rekayasa Perangkat Lunak</button>
            <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>
            <button class="lg:text-lg text-md text-blue-500">{{ $lab['name'] }}</button>

        </div>
        <div class="border-b-2 border-yellow-500 w-[100%]  mt-6 LG:mb-8 mb-6"></div>



        <div class="lg:text-4xl text-2xl font-bold text-[#628F8E] mb-4">{{ $lab['name'] }}
        </div>


        <div class="flex flex-row items-center gap-4 mt-2">
            <svg class="" width="16" height="16" viewBox="0 0 15 15" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.5 7.5C6.46875 7.5 5.58594 7.13281 4.85156 6.39844C4.11719 5.66406 3.75 4.78125 3.75 3.75C3.75 2.71875 4.11719 1.83594 4.85156 1.10156C5.58594 0.367188 6.46875 0 7.5 0C8.53125 0 9.41406 0.367188 10.1484 1.10156C10.8828 1.83594 11.25 2.71875 11.25 3.75C11.25 4.78125 10.8828 5.66406 10.1484 6.39844C9.41406 7.13281 8.53125 7.5 7.5 7.5ZM0 15V12.375C0 11.8438 0.136875 11.3556 0.410625 10.9106C0.684375 10.4656 1.0475 10.1256 1.5 9.89062C2.46875 9.40625 3.45312 9.04312 4.45312 8.80125C5.45312 8.55937 6.46875 8.43812 7.5 8.4375C8.53125 8.4375 9.54687 8.55875 10.5469 8.80125C11.5469 9.04375 12.5312 9.40688 13.5 9.89062C13.9531 10.125 14.3166 10.465 14.5903 10.9106C14.8641 11.3562 15.0006 11.8444 15 12.375V15H0Z"
                    fill="#F5CD51" />
            </svg>

            <div class=" text-sm lg:text-lg font-semibold text-black">Oleh : trpl.sv</div>
        </div>
        <div class="w-full md:w-1/3 lg:w-1/4">
            <div class="mb-4">
                <div id="calendar" class="overflow-auto max-h-96"></div>
            </div>
            <a
                href="{{ route('riwayatreservasilab.login', $id) }}" class="bg-[#628F8E] text-white px-4 py-2 lg:text-lg md:text-md text-sm rounded hover:scale-105 shadow-md ">Riwayat
                Reservasi</a>
        </div>
        </div>



        <div class="flex flex-col mt-12 ">
            <img src="{{ env('API') . '/storage' .'/'. $lab['foto_laboratorium'] }}" class="max-w-md place-self-center rounded-sm grid" alt="foto lab" />
            <div class="text-md lg:text-xl text-black text-justify lg:py-12 py-8">{{ $lab['description'] }}</div>

            <div class="lg:text-3xl text-xl font-bold text-[#628F8E] mb-8">Support </div>
            <div class="flex flex-row gap-4 mb-8 ">
                <button
                    class=" bg-[#628F8E] lg:text-sm  text-sm  text-white lg:px-8 lg:py-2 py-2 px-6 rounded-md hover:scale-110">Rendering
                </button>
                <button
                    class=" bg-[#628F8E] lg:text-sm  text-sm  text-white lg:px-8 lg:py-2 py-2 px-6 rounded-md hover:scale-110">Rendering
                </button>
                <button
                    class=" bg-[#628F8E] lg:text-sm  text-sm  text-white lg:px-8 lg:py-2 py-2 px-6 rounded-md hover:scale-110   ">Rendering
                </button>
            </div>
            <a href="{{ route('formlab.login', $id) }}" class="flex lg:justify-end  mb-24 hover:scale-y-125 duration-400">
                <button class="bg-[#F5CD51] text-white py-3 px-4 text-sm lg:text-md flex rounded-md">Reservasi
                    Laboratorium</button>
            </a>
        </div>
    </section>
@endsection

@extends('layouts.AdminLayouts')
@section('content')
<header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6 sticky w-full top-0">
    <h2 class="text-2xl font-semibold">Dashboard</h2>
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
    <!-- Main Dashboard Content -->
    <main class="lg:mx-20 mx-12 py-6 bg-white flex-1">
        <div class="flex flex-col">
            <h1 class="text-2xl font-bold py-4">Overview</h1>
            <!-- Overview Section -->
            <section class="grid lg:grid-cols-3 grid-cols-1 lg:gap-16 gap-12 md:gap-12 mb-6 ">

                <div class="bg-[rgba(98,143,142,0.1)] rounded-3xl p-8 ">
                    <div class="flex flex-col  gap-2">
                        <img src="{{ asset('image/overviewimage1.png') }}" class="  text-center h-16 w-16  "
                            alt="Flowbite Logo" />
                        <h2 class="text-xl text-semibold">Total Laboratorium</h2>
                        <p class="text-4xl font-bold">{{ $jumlahlabs }}</p>
                    </div>
                </div>

                <div class="bg-[rgba(98,143,142,0.1)]  rounded-3xl p-8 ">
                    <div class="flex flex-col  gap-2">
                        <img src="{{ asset('image/overviewimage2.png') }}" class="  text-center h-16 w-16  "
                            alt="Flowbite Logo" />
                        <h2 class="text-xl text-semibold flex-wrap">Total Inventaris</h2>
                        <p class="text-4xl font-bold">{{ $jumlahinventariss }}</p>
                    </div>
                </div>
                <div class="bg-[rgba(98,143,142,0.1)]  rounded-3xl p-8 ">
                    <div class="flex flex-col  gap-2">
                        <img src="{{ asset('image/overviewimage3.png') }}" class="  text-center h-16 w-16  "
                            alt="Flowbite Logo" />
                        <h2 class="text-xl text-semibold flex-wrap">Total Laboratorium Digunkan</h2>
                        <p class="text-4xl font-bold">
                            <span class="text-red-600">{{ count(array_filter($jadwals, fn($jadwal) => $jadwal['is_approved'] == 1)) }}</span>
                            <span class="text-black">/ {{ $jumlahlabs }}</span>
                        </p>

                    </div>
                </div>
            </section>
        </div>

        <!-- Jadwal Laboratorium Section -->
        <section class="mb-16">
            <h2 class="text-2xl py-4 font-bold">Jadwal Laboratorium</h2>
            <div class="overflow-x-auto rounded-2xl shadow-lg ">
                <table class="w-full rounded-2xl  ">
                    <thead class=" border-2 border-gray-200 bg-[rgba(98,143,142,0.1)]  ">
                        <tr>
                            <th
                                class=" py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-black  text-center border-2 border-gray-200">
                                Nama Laboratorium
                            </th>
                            <th
                                class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-black text-center border-2 border-gray-200">
                                Sesi
                            </th>
                            <th
                                class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-black text-center border-2 border-gray-200">
                                Jam Mulai
                            </th>
                            <th
                                class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-black text-center border-2 border-gray-200">
                                Jam Selesai
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($jadwals as $jadwal)
                        @if ($jadwal['is_approved'] == 1)
                        <tr class="bg-[rgba(98,143,142,0.1)] ">
                            <td
                            class="p-4 text-sm md:text-base lg:text-base text-black  whitespace-nowrap border-r border-gray-200">
                            {{ $jadwal['room']['name'] }}
                            </td>
                            <td
                                class="p-4 text-sm md:text-base lg:text-base text-black  whitespace-nowrap border-r border-gray-200">
                                5
                            </td>
                            <td
                                class="p-4 text-sm md:text-base lg:text-base text-black  whitespace-nowrap border-r border-gray-200">
                                {{ $jadwal['start_time'] }}
                            </td>
                            <td
                                class="p-4 text-sm md:text-base lg:text-base text-black  whitespace-nowrap border-r border-gray-200">
                                {{ $jadwal['end_time'] }}
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>


        <!-- Peminjaman Section -->
            <!-- Peminjaman Section -->
            <section class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 lg:gap-20 gap-8">
                <div>
                    <h2 class="text-2xl py-4 font-bold">Peminjaman Laboratorium</h2>
                    <div class="bg-[rgba(98,143,142,0.1)] rounded-xl px-6 md:px-12 shadow-lg py-6">
                        <h1 class="text-xl font-bold py-4 px-2 border-b-2">Semua </h1>
                        <ul>
                            @foreach ($jadwals as $jadwal)
                            <li class="flex justify-between items-center mb-2 p-2 text-md">
                                <span>
                                    {{ $jadwal['identity'] ? $jadwal['identity'] . ' mengajukan peminjaman' : '-' }}
                                </span>
                                <span
                                    class="bg-[{{ isset($jadwal['is_approved']) ? ($jadwal['is_approved'] ? '#499DBC' : '#F5CD51') : '#D46857' }}] text-white px-5 py-2 rounded-2xl">{{ isset($jadwal['is_approved']) ? ($jadwal['is_approved'] ? 'Approved' : 'Waiting') : 'Rejected' }}</span>
                            </li>
                            {{-- <li class="flex justify-between items-center mb-2 p-2 text-md">
                                <span>{{ $jadwal['email'] ?? "-" }}</span>
                                <span
                                    class="bg-[#499DBC] text-white px-5 py-2 rounded-2xl">{{ isset($jadwal['is_approved']) ? ($jadwal['is_approved'] ? 'Approved' : 'Waiting') : '-' }}</span>
                            </li> --}}
                            {{-- <li class="flex justify-between items-center mb-2 p-2 text-md">
                                <span>{{ $jadwal['email'] ?? "-" }}</span>
                                <span class="bg-[#F5CD51] text-white px-5 py-1 rounded-2xl">Waiting</span>
                            </li> --}}
                            {{-- <li class="flex justify-between items-center mb-2 p-2 text-md">
                                <span>Tamara mengajukan peminjaman</span>
                                <span class="bg-[#D46857] text-white px-4 py-1 rounded-2xl">Rejected</span>
                            </li> --}}
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div>
                    <h2 class="text-2xl py-4 font-bold">Peminjaman Inventaris</h2>
                    <div class="bg-[rgba(98,143,142,0.1)] rounded-xl px-6 md:px-12 shadow-lg py-6 ">
                        <h1 class="text-xl font-bold py-4 px-2 border-b-2">Semua </h1>
                        <ul>
                            <ul>
                                @foreach ($inventarisreserves as $inventarisreserve )
                                <li class="flex justify-between items-center mb-2 p-2 text-md">
                                    <span>
                                        {{ $inventarisreserve['identity'] ? $inventarisreserve['identity'] . ' mengajukan peminjaman' : '-' }}
                                    </span>
                                    <span
                                    class="bg-[{{ isset($inventarisreserve['is_approved']) ? ($inventarisreserve['is_approved'] ? '#499DBC' : '#F5CD51') : 'rgba(98,143,142,0.1)' }}] text-white px-5 py-2 rounded-2xl">{{ isset($inventarisreserve['is_approved']) ? ($inventarisreserve['is_approved'] ? 'Approved' : 'Waiting') : '-' }}</span>
                                </li>
                                {{-- <li class="flex justify-between items-center mb-2 p-2 text-md">
                                    <span>Tamara mengajukan peminjaman</span>
                                    <span class="bg-[#F5CD51] text-white px-5 py-1 rounded-2xl">Waiting</span>
                                </li>
                                <li class="flex justify-between items-center mb-2 p-2 text-md">
                                    <span>Tamara mengajukan peminjaman</span>
                                    <span class="bg-[#D46857] text-white px-4 py-1 rounded-2xl">Rejected</span>
                                </li> --}}
                                @endforeach

                            </ul>
                            <!-- Tambahkan entri lain sesuai kebutuhan -->
                        </ul>
                    </div>
                </div>
            </section>
    </div>


    </main>
@endsection

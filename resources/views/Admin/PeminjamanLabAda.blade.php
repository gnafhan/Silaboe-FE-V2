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
    <section class="flex-1 lg:mx-20 mx-12 my-2 flex-col flex lg:gap-4 md:gap-4 gap-4">
        <div class="w-full mb-4">
            <h1 class="text-2xl font-bold my-6">Persetujuan Peminjaman Laboratorium</h1>

            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center mb-4 md:mb-0">
                    <select
                        class=" bg-[rgba(98,143,142,0.2)] shadow appearance-none border rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-4">
                        <option>Cari per status</option>
                        <!-- Tambahkan opsi lainnya di sini -->
                    </select>
                    <span>entri per kategori</span>
                </div>
                <div class="relative">
                    <input type="text" placeholder="Cari laboratorium disini..."
                        class=" bg-[rgba(98,143,142,0.2)] shadow appearance-none border rounded-xl py-2 px-3 text-[#4C8F8B] leading-tight focus:outline-none focus:shadow-outline pr-10">
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-[#4C8F8B]">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35m0 0a7.5 7.5 0 10-10.61-10.61 7.5 7.5 0 0010.61 10.61z"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto rounded-xl shadow-xl">
            <table class="w-full">
                <thead class="bg-[rgba(98,143,142,0.2)] border-b-2 border-gray-200 rounded-t-xl">
                    <tr>
                        <th
                            class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-black text-center border-r border-gray-200">
                            Tanggal</th>
                        <th
                            class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-black text-center border-r border-gray-200">
                            Jam</th>
                        <th
                            class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-black text-center border-r border-gray-200">
                            Laboratorium</th>
                        <th
                            class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-black text-center border-r border-gray-200">
                            Penanggung Jawaab</th>
                        <th
                            class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-black text-center border-r border-gray-200">
                            Status</th>
                        <th
                            class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-black text-center border-r border-gray-200">
                            Detail</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="bg-white">
                        <td
                            class="p-3 text-sm md:text-base text-wrap lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            14/02/2024 - 14/02/2024</td>
                        <td
                            class="text-wrap p-3 text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            09.15 - 16.00</td>
                        <td
                            class="p-3 text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            Laboratorium HU 106</td>
                        <td
                            class="p-3 text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            Tamara Saaaaala</td>
                        <td class="p-3 text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-200 border-r">
                            <span
                                class="px-4 py-2 text-sm font-medium tracking-wider text-white bg-[#499DBC] rounded-xl">Published</span>
                        </td>
                        <td
                            class="p-3 text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-200 border-r flex justify-center items-center">
                            <a href="{{ Route('peminjamanlabdetail.admin') }}"
                                class="px-6 py-2 text-sm font-medium uppercase hover:bg-gray-700 tracking-wider text-white bg-[#4C8F8B] rounded-xl">Lihat</a>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td
                            class="p-3 text-sm md:text-base text-wrap lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            14/02/2024 - 14/02/2024</td>
                        <td
                            class="text-wrap p-3 text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            09.15 - 16.00</td>
                        <td
                            class="p-3 text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            Laboratorium HU 106</td>
                        <td
                            class="p-3 text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            Tamara Saaaaala</td>
                        <td class="p-3 text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-200 border-r">
                            <span
                                class="px-4 py-2 text-sm font-medium tracking-wider text-white bg-[#499DBC] rounded-xl">Published</span>
                        </td>
                        <td
                            class="p-3 text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-200 border-r flex justify-center items-center">
                            <button
                                class="px-6 py-2 text-sm font-medium uppercase tracking-wider text-white bg-[#4C8F8B] rounded-xl">Lihat</button>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td
                            class="p-3 text-sm md:text-base text-wrap lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            14/02/2024 - 14/02/2024</td>
                        <td
                            class="text-wrap p-3 text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            09.15 - 16.00</td>
                        <td
                            class="p-3 text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            Laboratorium HU 106</td>
                        <td
                            class="p-3 text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                            Tamara Saaaaala</td>
                        <td class="p-3 text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-200 border-r">
                            <span
                                class="px-4 py-2 text-sm font-medium tracking-wider text-white bg-[#499DBC] rounded-xl">Published</span>
                        </td>
                        <td
                            class="p-3 text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-200 border-r flex justify-center items-center">
                            <button
                                class="px-6 py-2 text-sm font-medium uppercase tracking-wider text-white bg-[#4C8F8B] rounded-xl">Lihat</button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </section>
@endsection

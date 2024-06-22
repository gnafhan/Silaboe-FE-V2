@extends('layouts.AdminLayouts')
@section('content')
    <header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6">
        <h2 class="text-2xl font-semibold">Jadwal Lab</h2>
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
    <div class="bg-[rgba(237,245,245,1)] ">
        <div class="flex-1 lg:mx-20 mx-12  py-8 flex-col flex lg:gap-4 md:gap-4 gap-2">


            <div class="mb-6">
                <label for="date-picker" class="block text-black mb-2 font-medium">Pilih tanggal untuk menampilkan jadwal
                    pemakaian ruang
                    laboratorium.</label>
                <input type="date" id="date-picker"
                    class="block appearance-none   border border-gray-300 text-black py-2 px-8 rounded-xl leading-tight focus:outline-none bg-[rgba(98,143,142,0.2)] focus:bg-white focus:border-gray-500"
                    value="2024-12-14">.
            </div>


            <div class="flex justify-end mb-4  ">
                <a href="{{ Route('jadwallabtambah.admin') }}"
                    class="bg-[#4C8F8B] text-white py-2 px-4 rounded-xl flex items-center lg:text-lg text-md font-medium ">
                    Tambah Jadwal
                    <svg class="h-7 w-7 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" />
                    </svg>
                </a>
            </div>



            <div class="overflow-x-auto rounded-2xl">
                <table class="min-w-full bg-white rounded ">
                    <thead class="bg-[rgba(98,143,142,0.3)] text-black border-b-2 border-gray-300">
                        <tr>
                            <th class="py-3 px-4 text-left">Laboratorium</th>
                            <th class="py-3 px-4 text-left">Jam Mulai</th>
                            <th class="py-3 px-4 text-left">Jam Selesai</th>
                            <th class="py-3 px-4 text-left">Detail</th>
                        </tr>
                    </thead>
                    <tbody class="text-black ">
                        <!-- Repeat this block for each lab schedule -->
                        <tr class="border-t bg-[rgba(98,143,142,0.2)]">
                            <td class="py-3 px-4">Laboratorium HU 105</td>
                            <td class="py-3 px-4">07.15</td>
                            <td class="py-3 px-4">09.15</td>
                            <td class="py-3 px-4">
                                <a href="{{ Route('jadwallabdetail.admin') }}"
                                    class="hover:bg-gray-700 bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</a>
                            </td>
                        </tr>
                        <tr class="border-t bg-[rgba(98,143,142,0.2)]">
                            <td class="py-3 px-4">Laboratorium HU 105</td>
                            <td class="py-3 px-4">09.15</td>
                            <td class="py-3 px-4">11.55</td>
                            <td class="py-3 px-4">
                                <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                            </td>
                        </tr>
                        <tr class="border-t bg-[rgba(98,143,142,0.2)]">
                            <td class="py-3 px-4">Laboratorium HU 105</td>
                            <td class="py-3 px-4">12.15</td>
                            <td class="py-3 px-4">15.55</td>
                            <td class="py-3 px-4">
                                <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                            </td>
                        </tr>
                        <tr class="border-t bg-[rgba(98,143,142,0.2)]">
                            <td class="py-3 px-4">Laboratorium HU 106</td>
                            <td class="py-3 px-4">07.15</td>
                            <td class="py-3 px-4">09.15</td>
                            <td class="py-3 px-4">
                                <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                            </td>
                        </tr>
                        <tr class="border-t bg-[rgba(98,143,142,0.2)]">
                            <td class="py-3 px-4">Laboratorium HU 106</td>
                            <td class="py-3 px-4">09.15</td>
                            <td class="py-3 px-4">11.55</td>
                            <td class="py-3 px-4">
                                <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                            </td>
                        </tr>
                        <tr class="border-t bg-[rgba(98,143,142,0.2)]">
                            <td class="py-3 px-4">Laboratorium HU 107</td>
                            <td class="py-3 px-4">07.15</td>
                            <td class="py-3 px-4">09.15</td>
                            <td class="py-3 px-4">
                                <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                            </td>
                        </tr>
                        <tr class="border-t bg-[rgba(98,143,142,0.2)]">
                            <td class="py-3 px-4">Laboratorium HU 107</td>
                            <td class="py-3 px-4">09.15</td>
                            <td class="py-3 px-4">11.55</td>
                            <td class="py-3 px-4">
                                <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                            </td>
                        </tr>
                        <tr class="border-t bg-[rgba(98,143,142,0.2)]">
                            <td class="py-3 px-4">Laboratorium HU 107</td>
                            <td class="py-3 px-4">12.15</td>
                            <td class="py-3 px-4">15.55</td>
                            <td class="py-3 px-4">
                                <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

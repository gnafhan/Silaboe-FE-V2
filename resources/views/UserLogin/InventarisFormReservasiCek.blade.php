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
                <button class="lg:text-lg text-md text-blue-400 ">Reservasi Inventaris</button>

            </div>

        </div>
        <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-4"></div>
        <div class="py-4">
            <div class=" lg:text-3xl text-xl font-bold text-[#628F8E] lg:mb-4 mb-4">Reservasi Inventaris</div>
        </div>
        <div class="bg-[#F8E0E0] mt-8 relative">
            <div class="absolute top-0 left-0 border-l-8 border-[#D46857] h-full"></div>

            <div class="flex flex-col">
                <div class=" flex lg:px-20 lg:text-2xl text-xl lg:pt-8 p-6 font-semibold text-[#D46857]">Informasi</div>
                <div class="flex text-justify  lg:px-20 lg:pt-2 lg:pb-8 px-6 pb-6 text-sm lg:text-xl">Belum ada inventaris
                    yang ditambahkan.
                </div>
            </div>
        </div>

        <div>
            <div class=" my-16 bg-white">
                <div class="overflow-x-auto md:overflow-x-auto rounded-lg shadow-xl">
                    <table class="w-full border border-[#CBCBCB]">
                        <thead class="bg-[#F8F7FC] border-b-2 border-gray-200">
                            <tr>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Jenis Inventaris</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    No Id
                                </th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Informasi</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Tanggal
                                    Mulai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Jam
                                    Mulai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Jam
                                    Selesai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Tanggal
                                    Selesai</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="bg-[#F8F7FC]">
                                <td
                                    class="p-3
                                text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    Meja PC
                                    Server</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    MPC001
                                </td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    Laboratorium HU105</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    03/05/2024
                                </td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    08.00</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    20.00</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    03/05/2024
                                </td>
                            </tr>
                            <tr class="bg-[#F8F7FC] ">
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    Meja PC
                                    Server</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    MPC001
                                </td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    Laboratorium HU105</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    03/05/2024
                                </td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    08.00</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    20.00</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    03/05/2024
                                </td>
                            </tr>
                            <tr class="bg-[#F8F7FC]  ">
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    Meja PC
                                    Server</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    MPC001
                                </td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    Laboratorium HU105</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    03/05/2024
                                </td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    08.00</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    20.00</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    03/05/2024
                                </td>
                            </tr>
                            <tr class="bg-[#F8F7FC]  ">
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    Meja PC
                                    Server</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    MPC001
                                </td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    Laboratorium HU105</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    03/05/2024
                                </td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    08.00</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    20.00</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    03/05/2024
                                </td>
                            </tr>
                            <!-- Tambahkan baris data sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="flex flex-row gap-4 mb-48 justify-start ">
                <a href="{{ Route('formreservasiinventaris.login') }}" type="submit"
                    class="text-white bg-[#F5CD51] hover:scale-105 font-medium rounded-md lg:text-lg md:text-md text-sm w-max-xl  lg:w-max-auto md:w-max-auto lg:px-4 lg:py-4 px-4 py-4 text-center dark:bg-[#F5CD51] ">Tambahkan
                    Inventaris</a>
                <a href="{{ Route('formreservasiinventarisberhasil.login') }}" type="submit"
                    class="text-white bg-[#499DBC] hover:scale-105   font-medium rounded-md lg:text-lg md:text-md text-sm w-max-xl lg:w-max-auto md:w-max-auto lg:px-4 lg:py-4 px-4 py-4 text-center dark:bg-[#499DBC] ">Ajukan
                    Reservasi</a>
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

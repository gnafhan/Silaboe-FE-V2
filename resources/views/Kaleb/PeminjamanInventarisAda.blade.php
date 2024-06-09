@extends('layouts.AdminLayouts')
@section('content')
    <section class="flex-1 lg:mx-20 mx-6 my-2 flex-col flex lg:gap-4 md:gap-4 gap-4">
        <div class="w-full mb-2">
            <h1 class="text-xl md:text-2xl font-bold my-6">Persetujuan Peminjaman Inventaris</h1>

            <div class="flex flex-col md:flex-row justify-between items-center mb-4">
                <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-2 mb-4 md:mb-0">
                    <select class="bg-[rgba(98,143,142,0.2)] py-2 px-4 rounded-xl font-medium">
                        <option>Cari Per Status</option>
                    </select>
                    <span class="text-sm text-gray-900">entri per kategori</span>
                </div>
                <div class="flex items-center bg-[rgba(98,143,142,0.2)] rounded-xl w-full sm:w-64">
                    <input type="text" placeholder="Cari inventaris disini..."
                        class="bg-transparent py-2 px-4 text-[#4C8F8B] w-full focus:outline-none">
                    <svg class="w-6 h-6 mr-4" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path
                            d="M16.6 18L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.146 12.3707 1.888 11.112C0.63 9.85333 0.000666667 8.316 0 6.5C0 4.68333 0.629333 3.146 1.888 1.888C3.14667 0.63 4.684 0.000666667 6.5 0C8.31667 0 9.85433 0.629333 11.113 1.888C12.3717 3.14667 13.0007 4.684 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L18 16.6L16.6 18ZM6.5 11C7.75 11 8.81267 10.5627 9.688 9.688C10.5633 8.81333 11.0007 7.75067 11 6.5C11 5.25 10.5627 4.18767 9.688 3.313C8.81333 2.43833 7.75067 2.00067 6.5 2C5.25 2 4.18767 2.43767 3.313 3.313C2.43833 4.18833 2.00067 5.25067 2 6.5C2 7.75 2.43767 8.81267 3.313 9.688C4.18833 10.5633 5.25067 11.0007 6.5 11Z"
                            fill="#4C8F8B" />
                    </svg>
                </div>
            </div>

        </div>
        <div class="overflow-x-auto rounded-xl shadow-xl">
            <table class="w-full min-w-[600px]">
                <thead class="bg-[rgba(98,143,142,0.2)] border-b-2 border-gray-200 rounded-t-xl">
                    <tr>
                        <th
                            class="py-2 px-2 sm:py-4 sm:px-4 text-xs sm:text-sm md:text-md lg:text-xl font-bold tracking-wide text-black text-center border-r border-gray-200">
                            Tanggal</th>
                        <th
                            class="py-2 px-2 sm:py-4 sm:px-4 text-xs sm:text-sm md:text-md lg:text-xl font-bold tracking-wide text-black text-center border-r border-gray-200">
                            Jam</th>
                        <th
                            class="py-2 px-2 sm:py-4 sm:px-4 text-xs sm:text-sm md:text-md lg:text-xl font-bold tracking-wide text-black text-center border-r border-gray-200">
                            Penanggung Jawab</th>
                        <th
                            class="py-2 px-2 sm:py-4 sm:px-4 text-xs sm:text-sm md:text-md lg:text-xl font-bold tracking-wide text-black text-center border-r border-gray-200">
                            Status</th>
                        <th
                            class="py-2 px-2 sm:py-4 sm:px-4 text-xs sm:text-sm md:text-md lg:text-xl font-bold tracking-wide text-black text-center border-r border-gray-200">
                            Detail</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="bg-[rgba(98,143,142,0.1)]">
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-t border-gray-200">
                            14/02/2024 - 14/02/2024</td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-t border-gray-200">
                            09.15 - 16.00</td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-t border-gray-200">
                            Tamara Shakhirana</td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-200 border-t">
                            <span
                                class="px-4  py-1  text-xs sm:text-sm md:text-base font-medium tracking-wider text-white bg-[#499DBC] rounded-xl">Published</span>
                        </td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-200 border-r flex justify-center items-center">
                            <button
                                class="px-6 py-1 text-xs sm:text-sm  lg:text-md font-medium uppercase tracking-wider text-white bg-[#4C8F8B] rounded-xl justify-center ">Lihat</button>
                        </td>
                    </tr>
                    <tr class="bg-[rgba(98,143,142,0.1)]">
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-t border-gray-300">
                            14/02/2024 - 14/02/2024</td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-t border-gray-300">
                            09.15 - 16.00</td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-t border-gray-300">
                            Tamara Shakhirana</td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-300 border-t">
                            <span
                                class="px-4  py-1  text-xs sm:text-sm md:text-base font-medium tracking-wider text-white bg-[#499DBC] rounded-xl">Published</span>
                        </td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-300 border-t flex justify-center items-center">
                            <button
                                class="px-6 py-1 text-xs sm:text-sm  lg:text-md font-medium uppercase tracking-wider text-white bg-[#4C8F8B] rounded-xl justify-center">Lihat</button>
                        </td>
                    </tr>
                    <tr class="bg-[rgba(98,143,142,0.1)]">
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-t border-gray-300">
                            14/02/2024 - 14/02/2024</td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-t border-gray-300">
                            09.15 - 16.00</td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-t border-gray-300">
                            Tamara Shakhirana</td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-300 border-t">
                            <span
                                class="px-4  py-1  text-xs sm:text-sm md:text-base font-medium tracking-wider text-white bg-[#D46857] rounded-xl ">Rejected</span>
                        </td>
                        <td
                            class="p-2 sm:p-3 text-xs sm:text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-300 border-t flex justify-center items-center">
                            <button
                                class="px-6 py-1 text-xs sm:text-sm  lg:text-md font-medium uppercase tracking-wider text-white bg-[#4C8F8B] rounded-xl justify-center">Lihat</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection

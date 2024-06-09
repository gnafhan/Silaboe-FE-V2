@extends('layouts.AdminLayouts')

@section('content')
    <div class="flex-1 lg:mx-20 mx-12 py-8 flex-col flex gap-4">
        <div class="flex justify-end mb-4">
            <button
                class="bg-[#4C8F8B] text-white px-4 py-2 rounded-xl flex items-center space-x-2 font-semibold text-md lg:text-lg">
                <span>Tambah Inventaris</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
            </button>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center mb-4 gap-4 md:gap-0">
            <div class="flex items-center space-x-2">
                <select class="bg-[rgba(98,143,142,0.2)] py-2 px-4 rounded-xl font-medium">
                    <option>Meja PC Server</option>
                </select>
                <span>entri per kategori</span>
            </div>
            <div class="flex items-center bg-[rgba(98,143,142,0.2)] rounded-xl w-full md:w-64">
                <input type="text" placeholder="Cari inventaris disini..."
                    class="bg-transparent py-2 px-4 text-[#4C8F8B] w-full focus:outline-none">
                <svg class="w-6 h-6 mr-4" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                    <path
                        d="M16.6 18L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.146 12.3707 1.888 11.112C0.63 9.85333 0.000666667 8.316 0 6.5C0 4.68333 0.629333 3.146 1.888 1.888C3.14667 0.63 4.684 0.000666667 6.5 0C8.31667 0 9.85433 0.629333 11.113 1.888C12.3717 3.14667 13.0007 4.684 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L18 16.6L16.6 18ZM6.5 11C7.75 11 8.81267 10.5627 9.688 9.688C10.5633 8.81333 11.0007 7.75067 11 6.5C11 5.25 10.5627 4.18767 9.688 3.313C8.81333 2.43833 7.75067 2.00067 6.5 2C5.25 2 4.18767 2.43767 3.313 3.313C2.43833 4.18833 2.00067 5.25067 2 6.5C2 7.75 2.43767 8.81267 3.313 9.688C4.18833 10.5633 5.25067 11.0007 6.5 11Z"
                        fill="#4C8F8B" />
                </svg>
            </div>
        </div>

        <div class="overflow-x-auto rounded-2xl shadow-md">
            <table class="min-w-full bg-[rgba(98,143,142,0.2)] rounded-xl">
                <thead>
                    <tr class="bg-[rgba(98,143,142,0.2)] ">
                        <th class="px-4 py-4 lg:text-xl text-md font-bold">Jenis Inventaris</th>
                        <th class="px-4 py-4 lg:text-xl text-md font-bold">No Id</th>
                        <th class="px-4 py-4 lg:text-xl text-md font-bold border-b-2 border-gray-400" colspan="2">Kondisi
                        </th>
                        <th class="px-4 py-2 lg:text-xl text-md font-bold">Informasi</th>
                    </tr>
                    <tr class="bg-[rgba(98,143,142,0.2)]">
                        <th class="px-4 py-2"></th>
                        <th class="px-4 py-2"></th>
                        <th class="px-4 py-3 lg:text-xl text-md font-bold">Baik</th>
                        <th class="px-4 py-3 lg:text-xl text-md font-bold">Tidak Baik</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 lg:text-lg py-4 md:text-md text-sm">Meja PC Server</td>
                        <td class="border px-4 lg:text-lg md:text-md text-sm py-4">MPC001</td>
                        <td class="border px-4 py-6 flex justify-center"><svg width="18" height="14"
                                viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29448 13.2791L0 6.98466L1.57362 5.41104L6.29448 10.1319L16.4264 0L18 1.57362L6.29448 13.2791Z"
                                    fill="#121212" />
                            </svg></td>
                        <td class="border px-4 py-2"></td>
                        <td class="border lg:text-lg md:text-md text-sm px-4 py-4">Laboratorium HU106</td>
                    </tr>
                    <tr>
                        <td class="border px-4 lg:text-lg py-4 md:text-md text-sm">Meja PC Server</td>
                        <td class="border px-4 lg:text-lg md:text-md text-sm py-4">MPC001</td>
                        <td class="border px-4 py-6 flex justify-center"><svg width="18" height="14"
                                viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29448 13.2791L0 6.98466L1.57362 5.41104L6.29448 10.1319L16.4264 0L18 1.57362L6.29448 13.2791Z"
                                    fill="#121212" />
                            </svg></td>
                        <td class="border px-4 py-2"></td>
                        <td class="border lg:text-lg md:text-md text-sm px-4 py-4">Laboratorium HU106</td>
                    </tr>
                    <tr>
                        <td class="border px-4 lg:text-lg py-4 md:text-md text-sm">Meja PC Server</td>
                        <td class="border px-4 lg:text-lg md:text-md text-sm py-4">MPC001</td>
                        <td class="border px-4 py-6 flex justify-center"><svg width="18" height="14"
                                viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29448 13.2791L0 6.98466L1.57362 5.41104L6.29448 10.1319L16.4264 0L18 1.57362L6.29448 13.2791Z"
                                    fill="#121212" />
                            </svg></td>
                        <td class="border px-4 py-2"></td>
                        <td class="border lg:text-lg md:text-md text-sm px-4 py-4">Laboratorium HU106</td>
                    </tr>
                    <tr>
                        <td class="border px-4 lg:text-lg py-4 md:text-md text-sm">Meja PC Server</td>
                        <td class="border px-4 lg:text-lg md:text-md text-sm py-4">MPC001</td>
                        <td class="border px-4 py-6 flex justify-center"><svg width="18" height="14"
                                viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29448 13.2791L0 6.98466L1.57362 5.41104L6.29448 10.1319L16.4264 0L18 1.57362L6.29448 13.2791Z"
                                    fill="#121212" />
                            </svg></td>
                        <td class="border px-4 py-2"></td>
                        <td class="border lg:text-lg md:text-md text-sm px-4 py-4">Laboratorium HU106</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

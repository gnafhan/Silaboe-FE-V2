@extends('layouts.AdminLayouts')
@section('content')
    <header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6 sticky w-full top-0">
        <h2 class="text-2xl font-semibold">Peminjaman Inventaris</h2>
        <div class="flex items-center space-x-4">
            <button class="text-white hover:text-gray-300 focus:outline-none">
                <img src="{{ asset('image/Notification.png') }}" class="h-10 w-10" alt="Flowbite Logo" />
            </button>
            <div class="relative">
                <button class="flex items-center text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                    <img src="{{ asset('image/Profile.png') }}" class="h-10 w-10" alt="Flowbite Logo" />
                </button>
            </div>
        </div>
    </header>

    <section class="flex-1 lg:mx-12 mx-6 my-2 flex-col flex lg:gap-4 md:gap-4 gap-4">
        <div class="w-full mb-2">
            <h1 class="text-xl md:text-2xl font-bold my-6">Persetujuan Peminjaman Inventaris</h1>

            <div class="flex flex-col md:flex-row justify-between items-center mb-4">
                <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-2 mb-4 md:mb-0">
                    <select id="statusFilter" class="bg-[rgba(98,143,142,0.2)] py-2 px-4 rounded-xl font-medium">
                        <option value="">Cari Per Status</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                        <option value="pending">Pending</option>
                    </select>
                    <span>entri per kategori</span>
                </div>
                <div class="flex items-center bg-[rgba(98,143,142,0.2)] rounded-xl w-full sm:w-64">
                    <input type="text" 
                           id="searchInput"
                           placeholder="Cari inventaris disini..."
                           class="bg-transparent py-2 px-4 text-[#4C8F8B] w-full focus:outline-none">
                    <svg class="w-6 h-6 mr-4" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M16.6 18L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.146 12.3707 1.888 11.112C0.63 9.85333 0.000666667 8.316 0 6.5C0 4.68333 0.629333 3.146 1.888 1.888C3.14667 0.63 4.684 0.000666667 6.5 0C8.31667 0 9.85433 0.629333 11.113 1.888C12.3717 3.14667 13.0007 4.684 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L18 16.6L16.6 18ZM6.5 11C7.75 11 8.81267 10.5627 9.688 9.688C10.5633 8.81333 11.0007 7.75067 11 6.5C11 5.25 10.5627 4.18767 9.688 3.313C8.81333 2.43833 7.75067 2.00067 6.5 2C5.25 2 4.18767 2.43767 3.313 3.313C2.43833 4.18833 2.00067 5.25067 2 6.5C2 7.75 2.43767 8.81267 3.313 9.688C4.18833 10.5633 5.25067 11.0007 6.5 11Z" fill="#4C8F8B" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto rounded-xl shadow-xl">
            <table class="w-full min-w-[600px]">
                <thead class="bg-[rgba(98,143,142,0.2)] border-b-2 border-gray-200 rounded-t-xl">
                    <tr>
                        <th class="py-2 px-2 sm:py-4 sm:px-4 text-xs sm:text-sm md:text-md lg:text-xl font-bold tracking-wide text-black text-center border-r border-gray-200">
                            Tanggal</th>
                        <th class="py-2 px-2 sm:py-4 sm:px-4 text-xs sm:text-sm md:text-md lg:text-xl font-bold tracking-wide text-black text-center border-r border-gray-200">
                            Jam</th>
                        <th class="py-2 px-2 sm:py-4 sm:px-4 text-xs sm:text-sm md:text-md lg:text-xl font-bold tracking-wide text-black text-center border-r border-gray-200">
                            Penanggung Jawab</th>
                        <th class="py-2 px-2 sm:py-4 sm:px-4 text-xs sm:text-sm md:text-md lg:text-xl font-bold tracking-wide text-black text-center border-r border-gray-200">
                            Status</th>
                        <th class="py-2 px-2 sm:py-4 sm:px-4 text-xs sm:text-sm md:text-md lg:text-xl font-bold tracking-wide text-black text-center border-r border-gray-200">
                            Detail</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($reservations as $reservation)
                        <tr class="bg-white">
                            <td class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                                {{ \Carbon\Carbon::parse($reservation['start_time'])->format('d/m/Y') }} - 
                                {{ \Carbon\Carbon::parse($reservation['end_time'])->format('d/m/Y') }}
                            </td>
                            <td class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                                {{ \Carbon\Carbon::parse($reservation['start_time'])->format('H:i') }} - 
                                {{ \Carbon\Carbon::parse($reservation['end_time'])->format('H:i') }}
                            </td>
                            <td class="p-2 sm:p-3 text-xs sm:text-sm md:text-base lg:text-md text-gray-700 whitespace-nowrap border-r border-gray-200">
                                {{ $reservation['name'] }}
                            </td>
                            <td class="p-2 sm:p-3 text-xs sm:text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-200 border-r">
                                @if($reservation['is_approved'] === 1)
                                    <span class="px-2 sm:px-4 py-1 sm:py-2 text-xs sm:text-sm font-medium tracking-wider text-white bg-[#499DBC] rounded-xl">
                                        Approved
                                    </span>
                                @elseif($reservation['is_approved'] === 0)
                                    <span class="px-2 sm:px-4 py-1 sm:py-2 text-xs sm:text-sm font-medium tracking-wider text-white bg-yellow-500 rounded-xl">
                                        Pending
                                    </span>
                                @else
                                    <span class="px-2 sm:px-4 py-1 sm:py-2 text-xs sm:text-sm font-medium tracking-wider text-white bg-[#D46857] rounded-xl">
                                        Rejected
                                    </span>
                                @endif
                            </td>
                            <td class="p-2 sm:p-3 text-xs sm:text-sm lg:text-md text-gray-700 whitespace-nowrap border-gray-200 border-r flex justify-center items-center">
                                <a href="{{ route('peminjamaninvenatrisdetail.admin', $reservation['id']) }}"
                                    class="hover:bg-gray-700 px-4 sm:px-6 py-1 sm:py-2 text-xs sm:text-sm font-medium uppercase tracking-wider text-white bg-[#4C8F8B] rounded-xl">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">Tidak ada data peminjaman</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const originalRows = Array.from(document.querySelectorAll('tbody tr'));
        
        function filterTable() {
            const searchInput = document.getElementById('searchInput');
            const statusFilter = document.getElementById('statusFilter');
            const tbody = document.querySelector('tbody');
            
            const searchTerm = searchInput.value.toLowerCase();
            const statusTerm = statusFilter.value.toLowerCase();
            
            // Filter the original rows
            const filteredRows = originalRows.filter(row => {
                // Get text content for searching
                const text = row.textContent.toLowerCase();
                // Get status cell specifically
                const statusCell = row.querySelector('td:nth-child(4)').textContent.toLowerCase().trim();
                
                // Match search term against all text
                const matchesSearch = searchTerm === '' || text.includes(searchTerm);
                // Match status exactly if selected, or show all if no status selected
                const matchesStatus = statusTerm === '' || statusCell.includes(statusTerm);
                
                return matchesSearch && matchesStatus;
            });
            
            // Clear and repopulate tbody
            tbody.innerHTML = '';
            
            if (filteredRows.length === 0) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan="5" class="text-center py-4">Tidak ada data peminjaman</td>
                    </tr>
                `;
            } else {
                filteredRows.forEach(row => tbody.appendChild(row.cloneNode(true)));
            }
        }

        // Add event listeners with debouncing
        let debounceTimer;
        function debounce(func, delay) {
            return function() {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(() => func(), delay);
            }
        }

        document.getElementById('searchInput').addEventListener('input', debounce(filterTable, 300));
        document.getElementById('statusFilter').addEventListener('change', filterTable);
    });
    </script>
@endsection
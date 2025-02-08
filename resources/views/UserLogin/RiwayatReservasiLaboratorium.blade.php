@extends('layouts.homelayouts')
@section('content')
    <section class="lg:mx-24 mx- bg-white flex flex-col">
        <div class="flex flex-wrap mt-10 items-center space-x-2 lg:space-x-4">
            <button class="lg:text-lg text-md">Beranda</button>
            <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <button class="lg:text-lg text-md">Laboratorium</button>
            <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>
            <button class="lg:text-lg text-md">{{ $lab['name'] }}</button>
            
            <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>
            <button class="lg:text-lg text-md text-blue-500">Riwayat Reservasi Laboratorium</button>
        </div>

        <div class="border-b-2 border-yellow-500 w-[100%] mb-4 mt-4"></div>
        <div class="py-4 lg:flex-row">

            <div class="flex lg:flex-row lg:items-center  flex-col justify-between">
                <div class="flex flex-col ">
                    <div class="lg:text-4xl text-2xl font-bold text-[#628F8E] ">Riwayat Reservasi Laboratorium
                    </div>
                    <div class="flex flex-row items-center gap-4 mt-4">
                        <svg class="" width="16" height="16" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.5 7.5C6.46875 7.5 5.58594 7.13281 4.85156 6.39844C4.11719 5.66406 3.75 4.78125 3.75 3.75C3.75 2.71875 4.11719 1.83594 4.85156 1.10156C5.58594 0.367188 6.46875 0 7.5 0C8.53125 0 9.41406 0.367188 10.1484 1.10156C10.8828 1.83594 11.25 2.71875 11.25 3.75C11.25 4.78125 10.8828 5.66406 10.1484 6.39844C9.41406 7.13281 8.53125 7.5 7.5 7.5ZM0 15V12.375C0 11.8438 0.136875 11.3556 0.410625 10.9106C0.684375 10.4656 1.0475 10.1256 1.5 9.89062C2.46875 9.40625 3.45312 9.04312 4.45312 8.80125C5.45312 8.55937 6.46875 8.43812 7.5 8.4375C8.53125 8.4375 9.54687 8.55875 10.5469 8.80125C11.5469 9.04375 12.5312 9.40688 13.5 9.89062C13.9531 10.125 14.3166 10.465 14.5903 10.9106C14.8641 11.3562 15.0006 11.8444 15 12.375V15H0Z"
                                fill="#F5CD51" />
                        </svg>

                        <div class=" text-sm lg:text-lg font-semibold text-black">Oleh : trpl.sv</div>
                    </div>
                </div>


            </div>

            <div class="bg-[#F8F7FC] mt-8 relative">
                <div class="absolute top-0 left-0 border-l-8 border-yellow-500 h-full"></div>
                <div class="flex text-justify  lg:px-20 lg:py-10 p-8"> SiLaboe (Sistem Informasi Laboratorium) adalah
                    platform
                    website
                    yang menyediakan informasi terkait laboratorium di Program Studi Teknologi Rekayasa Perangkat Lunak UGM.
                    Sistem Informasi ini mencakup deskripsi fasilitas laboratorium, keanggotaan staf dan mahasiswa,
                    publikasi
                    riset, perangkat lunak yang terpasang, jadwal penggunaan laboratorium, prosedur peminjaman, dan
                    inventaris
                    peralatan. Dengan fokus pada efisiensi operasional dan kolaborasi yang lebih baik, SiLaboe memungkinkan
                    pengguna untuk mengakses, mengelola, dan berinteraksi dengan informasi laboratorium secara praktis dan
                    efektif, memfasilitasi pengembangan riset, pembelajaran, dan manajemen sumber daya yang lebih baik.
                </div>
            </div>


            <div class="flex justify-between items-center mb-8 mt-4">
                <div>
                    <form id="entriesForm" method="GET" class="inline">
                        <label for="entries" class="mr-2">Show</label>
                        <select id="entries" name="entries" class="border rounded-md p-1" onchange="document.getElementById('entriesForm').submit();">
                            <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                            <option value="25" {{ $perPage == 25 ? 'selected' : '' }}>25</option>
                            <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                            <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>100</option>
                        </select>
                        <span class="ml-2">entries per page</span>
                    </form>
                </div>
                <div class="flex items-center">
                    <span class="mr-2">Pencarian :</span>
                    <input type="text" 
                           id="searchInput" 
                           placeholder="Search..." 
                           class="border rounded-md p-1">
                </div>
            </div>
    
                <div class="overflow-x-auto rounded-lg shadow-md">
                    <table class="min-w-full bg-white">
                        <thead class="bg-[#F8F7FC] border-b-2 border-gray-200">
                            <tr>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-lg font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Email</th>
                                <th
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-lg font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Laboratorium</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-lg font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Tanggal Mulai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-lg font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Jam Mulai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-lg font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Jam Selesai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-lg font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Tanggal Selesai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-lg font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Tanggal Pengajuan</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-lg font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Keperluan</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-lg font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @if(isset($reservations) && count($reservations) > 0)
                                @foreach($reservations as $reservation)
                                <tr class="bg-[#F8F7FC]">
                                    <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ $reservation['email'] }}
                                    </td>
                                    <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ $lab['name'] }}
                                    </td>
                                    <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ \Carbon\Carbon::parse($reservation['start_time'])->setTimezone('Asia/Jakarta')->format('d/m/Y') }}
                                    </td>
                                    <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ \Carbon\Carbon::parse($reservation['start_time'])->setTimezone('Asia/Jakarta')->format('H:i') }}
                                    </td>
                                    <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ \Carbon\Carbon::parse($reservation['end_time'])->setTimezone('Asia/Jakarta')->format('H:i') }}
                                    </td>
                                    <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ \Carbon\Carbon::parse($reservation['end_time'])->setTimezone('Asia/Jakarta')->format('d/m/Y') }}
                                    </td>
                                    <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ \Carbon\Carbon::parse($reservation['created_at'])->setTimezone('Asia/Jakarta')->format('d/m/Y') }}
                                    </td>
                                    <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ $reservation['needs'] }}
                                    </td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <span class="px-4 py-1 text-sm font-medium uppercase tracking-wider 
                                            @if($reservation['is_approved'] == 1) 
                                                text-green-800 bg-green-200 
                                            @elseif($reservation['is_approved'] == 0) 
                                                text-yellow-800 bg-yellow-200
                                            @else 
                                                text-red-800 bg-red-200 
                                            @endif rounded-lg bg-opacity-50">
                                            @if($reservation['is_approved'] == 1)
                                                APPROVED
                                            @elseif($reservation['is_approved'] == 0)
                                                WAITING
                                            @else
                                                REJECTED
                                            @endif
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8" class="text-center py-4">No reservation data available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
    
                <div class="mt-12 flex justify-between items-center">
                    <div class="lg:text-lg md:text-md text-sm text-gray-700" id="entriesInfo">
                        @if($totalEntries > 0)
                            Menampilkan {{ $startEntry }} sampai {{ $endEntry }} dari {{ $totalEntries }} entri
                        @else
                            Tidak ada data yang tersedia
                        @endif
                    </div>
                
                    <div class="flex items-center space-x-4" id="paginationContainer">
                        @if($totalEntries > $perPage)
                            <a href="{{ route('riwayatreservasilab.login', ['id' => $id, 'page' => 1, 'entries' => $perPage]) }}" 
                               class="text-gray-600 hover:text-gray-800 {{ $currentPage == 1 ? 'pointer-events-none opacity-50' : '' }}">«</a>
                            
                            @for($i = 1; $i <= $lastPage; $i++)
                                <a href="{{ route('riwayatreservasilab.login', ['id' => $id, 'page' => $i, 'entries' => $perPage]) }}" 
                                   class="{{ $currentPage == $i ? 'bg-yellow-500 text-white' : 'text-gray-600 hover:text-gray-800' }} px-2 py-1 rounded">
                                    {{ $i }}
                                </a>
                            @endfor
                            
                            <a href="{{ route('riwayatreservasilab.login', ['id' => $id, 'page' => $lastPage, 'entries' => $perPage]) }}" 
                               class="text-gray-600 hover:text-gray-800 {{ $currentPage == $lastPage ? 'pointer-events-none opacity-50' : '' }}">»</a>
                        @endif
                    </div>
                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    let searchTimer;
                    const searchDelay = 300; // milliseconds

                    document.getElementById('searchInput').addEventListener('input', function() {
                        clearTimeout(searchTimer);
                        searchTimer = setTimeout(() => performSearch(), searchDelay);
                    });

                    document.getElementById('entries').addEventListener('change', performSearch);

                    function performSearch() {
                        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
                        const rows = document.querySelectorAll('tbody tr');
                        let visibleCount = 0;

                        rows.forEach(row => {
                            const cells = row.querySelectorAll('td');
                            let rowContainsSearchTerm = false;

                            cells.forEach(cell => {
                                if (cell.textContent.toLowerCase().includes(searchTerm)) {
                                    rowContainsSearchTerm = true;
                                }
                            });

                            if (rowContainsSearchTerm) {
                                row.style.display = '';
                                visibleCount++;
                            } else {
                                row.style.display = 'none';
                            }
                        });

                        // Update info text
                        const infoElement = document.getElementById('entriesInfo');
                        infoElement.textContent = visibleCount > 0 
                            ? `Menampilkan ${visibleCount} entri` 
                            : 'Tidak ada data yang tersedia';

                        // Hide pagination if searching
                        const paginationContainer = document.getElementById('paginationContainer');
                        if (searchTerm) {
                            paginationContainer.style.display = 'none';
                        } else {
                            paginationContainer.style.display = 'flex';
                        }
                    }
                });
                </script>
            </div>
    </section>
@endsection

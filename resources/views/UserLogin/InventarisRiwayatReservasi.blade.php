    @extends('layouts.homelayouts')
    @section('content')
        <section class="mx-24 bg-white flex flex-col">
            {{-- Breadcrumb navigation remains the same --}}
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
                    <button class="lg:text-lg text-md text-blue-400">Riwayat Inventaris</button>
                </div>
            </div>

            <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-4"></div>
            
            {{-- Header section --}}
            <div class="py-4">
                <div class="lg:text-4xl text-2xl font-bold text-[#628F8E] lg:mb-6 mb-4">
                    Riwayat Reservasi Inventaris
                </div>
                <div class="flex flex-row items-center gap-4">
                    <svg class="" width="16" height="16" viewBox="0 0 15 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.5 7.5C6.46875 7.5 5.58594 7.13281 4.85156 6.39844C4.11719 5.66406 3.75 4.78125 3.75 3.75C3.75 2.71875 4.11719 1.83594 4.85156 1.10156C5.58594 0.367188 6.46875 0 7.5 0C8.53125 0 9.41406 0.367188 10.1484 1.10156C10.8828 1.83594 11.25 2.71875 11.25 3.75C11.25 4.78125 10.8828 5.66406 10.1484 6.39844C9.41406 7.13281 8.53125 7.5 7.5 7.5ZM0 15V12.375C0 11.8438 0.136875 11.3556 0.410625 10.9106C0.684375 10.4656 1.0475 10.1256 1.5 9.89062C2.46875 9.40625 3.45312 9.04312 4.45312 8.80125C5.45312 8.55937 6.46875 8.43812 7.5 8.4375C8.53125 8.4375 9.54687 8.55875 10.5469 8.80125C11.5469 9.04375 12.5312 9.40688 13.5 9.89062C13.9531 10.125 14.3166 10.465 14.5903 10.9106C14.8641 11.3562 15.0006 11.8444 15 12.375V15H0Z"
                            fill="#F5CD51" />
                    </svg>
                    {{-- @dd(auth()->user()) --}}
                    <div class="text-sm lg:text-xl font-semibold text-black">Oleh : {{ auth()->user()->name ?? 'Guest' }}</div>
                </div>
            </div>

            {{-- Description box --}}
            <div class="bg-[#F8F7FC] mt-8 relative shadow-lg">
                <div class="absolute top-0 left-0 border-l-8 border-yellow-500 h-full"></div>
                <div class="flex text-justify lg:px-20 px-10 lg:py-12 py-8 text-sm lg:text-lg">
                    SiLaboe (Sistem Informasi Laboratorium) adalah platform website yang menyediakan informasi terkait laboratorium di Program Studi Teknologi Rekayasa Perangkat Lunak UGM.
                    {{-- Rest of the description --}}
                </div>
            </div>   
            </div>


        
            
        {{-- Entries per page control --}}
        <div class="flex justify-between items-center mt-10 mb-4">
            <div class="flex items-center space-x-2">
                <label for="entriesPerPage" class="text-sm lg:text-base text-gray-600">Show</label>
                <select id="entriesPerPage" class="border rounded px-2 py-1">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <span class="text-sm lg:text-base text-gray-600">entries</span>
            </div>

            <div class="flex items-center space-x-2">
                <label for="searchInput" class="text-sm lg:text-base text-gray-600">Pencarian:</label>
                <input type="text" id="searchInput" class="border rounded px-2 py-1 w-64" placeholder="Cari inventaris disini...">
            </div>
        </div>
        
        

        {{-- Table section --}}
        <div>
            <div class="mt-10 ">
                <div class="overflow-x-auto md:overflow-x-auto rounded-lg shadow-xl border border-[#CBCBCB]">
                    <table class="w-full">
                        <thead class="bg-[#F8F7FC] border-b-2 border-gray-200">
                            <tr>

                                <th class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">Penanggung Jawab</th>
                                <th class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">Tanggal Mulai</th>
                                <th class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">Jam Mulai</th>
                                <th class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">Jam Selesai</th>
                                <th class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">Tanggal Selesai</th>
                                <th class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">Keperluan</th>
                                <th class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">Status</th>
                                <th class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center">Detail</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody" class="divide-y divide-gray-100">
                        </tbody>
                    </table>
                </div>

                {{-- Pagination controls --}}
                <div class="mt-4 flex justify-center space-x-2" id="pagination">
                </div>
            </div>
            <div class=" flex justify-between items-center lg:mb-32">
                <div class="lg:flex-col">
                    {{-- <div class="lg:text-lg md:text-md text-sm text-gray-700">
                        Menampilkan <span id="entryCount">{{ count($reservations) }}</span> entri
                    </div> --}}
                     <div id="tableInfo" class="text-sm text-gray-600"></div>

                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const reservations = @json($reservations);
    let currentPage = 1;
    let entriesPerPage = 10;
    let filteredData = [...reservations];
    
    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('id-ID', { day: '2-digit', month: '2-digit', year: 'numeric' });
    }

    function formatTime(dateString) {
        const date = new Date(dateString);
        return date.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
    }

    function getStatusBadge(isApproved) {
        if (isApproved === 1) {
            return '<span class="px-4 py-1 text-sm font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">Approved</span>';
        } else if (isApproved === 0) {
            return '<span class="px-4 py-1 text-sm font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">Pending</span>';
        } else {
            return '<span class="px-4 py-1 text-sm font-medium uppercase tracking-wider text-red-800 bg-red-200 rounded-lg bg-opacity-50">Rejected</span>';
        }
    }

    function searchData(searchTerm) {
        searchTerm = searchTerm.toLowerCase();
        filteredData = reservations.filter(reservation => {
            return (
                formatDate(reservation.start_time).toLowerCase().includes(searchTerm) ||
                formatTime(reservation.start_time).toLowerCase().includes(searchTerm) ||
                formatTime(reservation.end_time).toLowerCase().includes(searchTerm) ||
                formatDate(reservation.end_time).toLowerCase().includes(searchTerm) ||
                reservation.needs.toLowerCase().includes(searchTerm) ||
                getStatusText(reservation.is_approved).toLowerCase().includes(searchTerm)
            );
        });
        currentPage = 1;
        displayData();
    }

    function getStatusText(isApproved) {
        if (isApproved === true) return 'Published';
        if (isApproved === false) return 'Rejected';
        return 'Waiting';
    }

    function displayData() {
        const tableBody = document.getElementById('tableBody');
        const start = (currentPage - 1) * entriesPerPage;
        const end = start + entriesPerPage;
        const paginatedData = filteredData.slice(start, end);
        
        tableBody.innerHTML = '';
        
        paginatedData.forEach(reservation => {
            const row = document.createElement('tr');
            row.className = 'bg-[#F8F7FC]';
            
            row.innerHTML = `
                <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">${reservation?.name ?? 'Null'}</td>
                <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">${formatDate(reservation.start_time)}</td>
                <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">${formatTime(reservation.start_time)}</td>
                <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">${formatTime(reservation.end_time)}</td>
                <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">${formatDate(reservation.end_time)}</td>
                <td class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">${reservation.needs}</td>
                <td class="p-3 text-sm md:text-base lg:text-base text-center whitespace-nowrap border-r border-gray-200">
                    ${getStatusBadge(reservation.is_approved)}
                </td>
                <td class="p-3 text-sm md:text-base lg:text-base text-center whitespace-nowrap">
                    <a href="/login/landingpage/inventaris/riwayatreservasi/detail/${reservation.id}" 
                        class="px-6 py-1 text-sm font-medium tracking-wider text-green-800 bg-green-50 border border-[#628F8E] rounded-xl bg-opacity-50">
                        Lihat
                    </a>
                </td>
            `;
            
            tableBody.appendChild(row);
        });

        // Update table info
        const tableInfo = document.getElementById('tableInfo');
        tableInfo.textContent = `Menampilkan ${start + 1} sampai ${Math.min(end, filteredData.length)} dari ${filteredData.length} entri`;

        // Update pagination
        updatePagination();
    }

    function updatePagination() {
        const pagination = document.getElementById('pagination');
        const pageCount = Math.ceil(filteredData.length / entriesPerPage);
        
        let paginationHTML = '';
        
        // Previous button
        paginationHTML += `<button
            class="px-3 py-1 rounded ${currentPage === 1 ? 'bg-gray-200' : 'bg-[#628F8E] text-white'}"
            ${currentPage === 1 ? 'disabled' : ''}
            onclick="changePage(${currentPage - 1})">
            Previous
        </button>`;

        // Page numbers
        for (let i = 1; i <= pageCount; i++) {
            if (i === 1 || i === pageCount || (i >= currentPage - 1 && i <= currentPage + 1)) {
                paginationHTML += `<button
                    class="px-3 py-1 rounded ${currentPage === i ? 'bg-[#628F8E] text-white' : 'bg-gray-200'}"
                    onclick="changePage(${i})">
                    ${i}
                </button>`;
            } else if (i === currentPage - 2 || i === currentPage + 2) {
                paginationHTML += `<span class="px-3 py-1">...</span>`;
            }
        }

        // Next button
        paginationHTML += `<button
            class="px-3 py-1 rounded ${currentPage === pageCount ? 'bg-gray-200' : 'bg-[#628F8E] text-white'}"
            ${currentPage === pageCount ? 'disabled' : ''}
            onclick="changePage(${currentPage + 1})">
            Next
        </button>`;

        pagination.innerHTML = paginationHTML;
    }

    // Initialize display
    displayData();

    // Handle entries per page change
    document.getElementById('entriesPerPage').addEventListener('change', function(e) {
        entriesPerPage = parseInt(e.target.value);
        currentPage = 1;
        displayData();
    });

    // Handle search input
    document.getElementById('searchInput').addEventListener('input', function(e) {
        searchData(e.target.value);
    });

    // Make changePage function globally available
    window.changePage = function(page) {
        currentPage = page;
        displayData();
    };
});
    </script>
    @endsection
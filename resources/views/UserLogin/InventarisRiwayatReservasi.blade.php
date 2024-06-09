@extends('layouts.homelayouts')
@section('content')
    <section class="mx-24 bg-white flex flex-col">
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
                <button class="lg:text-lg text-md text-blue-400 ">Riwayat Inventaris</button>

            </div>

        </div>
        <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-4"></div>
        <div class="py-4">
            <div class=" lg:text-4xl text-2xl font-bold text-[#628F8E] lg:mb-6 mb-4">Riwayat Reservasi Laboratorium
            </div>
            <div class="flex flex-row items-center gap-4">
                <svg class="" width="16" height="16" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.5 7.5C6.46875 7.5 5.58594 7.13281 4.85156 6.39844C4.11719 5.66406 3.75 4.78125 3.75 3.75C3.75 2.71875 4.11719 1.83594 4.85156 1.10156C5.58594 0.367188 6.46875 0 7.5 0C8.53125 0 9.41406 0.367188 10.1484 1.10156C10.8828 1.83594 11.25 2.71875 11.25 3.75C11.25 4.78125 10.8828 5.66406 10.1484 6.39844C9.41406 7.13281 8.53125 7.5 7.5 7.5ZM0 15V12.375C0 11.8438 0.136875 11.3556 0.410625 10.9106C0.684375 10.4656 1.0475 10.1256 1.5 9.89062C2.46875 9.40625 3.45312 9.04312 4.45312 8.80125C5.45312 8.55937 6.46875 8.43812 7.5 8.4375C8.53125 8.4375 9.54687 8.55875 10.5469 8.80125C11.5469 9.04375 12.5312 9.40688 13.5 9.89062C13.9531 10.125 14.3166 10.465 14.5903 10.9106C14.8641 11.3562 15.0006 11.8444 15 12.375V15H0Z"
                        fill="#F5CD51" />
                </svg>

                <div class=" text-sm lg:text-xl font-semibold  text-black">Oleh : trpl.sv</div>
            </div>
        </div>
        <div class="bg-[#F8F7FC] mt-8 relative shadow-lg">
            <div class="absolute top-0 left-0 border-l-8 border-yellow-500 h-full"></div>
            <div class="flex text-justify  lg:px-20  px-10 lg:py-12 py-8 text-sm lg:text-lg"> SiLaboe (Sistem Informasi
                Laboratorium) adalah
                platform
                website
                yang menyediakan informasi terkait laboratorium di Program Studi Teknologi Rekayasa Perangkat Lunak UGM.
                Sistem Informasi ini mencakup deskripsi fasilitas laboratorium, keanggotaan staf dan mahasiswa, publikasi
                riset, perangkat lunak yang terpasang, jadwal penggunaan laboratorium, prosedur peminjaman, dan inventaris
                peralatan. Dengan fokus pada efisiensi operasional dan kolaborasi yang lebih baik, SiLaboe memungkinkan
                pengguna untuk mengakses, mengelola, dan berinteraksi dengan informasi laboratorium secara praktis dan
                efektif, memfasilitasi pengembangan riset, pembelajaran, dan manajemen sumber daya yang lebih baik.</div>
        </div>
        <div class="my-16">
            <div class="flex justify-between items-center mb-8 mt-4">
                <div>
                    <label for="entries" class="mr-2">Show</label>
                    <select id="entries" class="border rounded-md p-1">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="ml-2">entries per page</span>
                </div>
                <div>
                    <span class="mr-2">Pencarian :</span>
                    <input type="text" placeholder="Search..." class="border rounded-md p-1">
                </div>
            </div>

            <div class="overflow-x-auto rounded-lg shadow-md">
                <table class="min-w-full bg-white">
                    <thead class="bg-[#F8F7FC] border-b-2 border-gray-200">
                        <tr>
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
                            <th
                                class="py-6 px-4 text-sm md:text-md lg:text-lg font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                Detail</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="bg-[#F8F7FC]">
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                03/05/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                08.00</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                20.00</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                03/05/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                29/04/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                Pengganti Pemrograman Web</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                <span
                                    class="px-4 py-1 text-sm font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">Published</span>
                            </td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap border-l border-gray-200">
                                <a href="{{ Route('riwayatreservasiinventarisdetail.login') }}"
                                    class="px-6 py-1 text-sm font-medium  tracking-wider text-green-800 bg-green-50 border border-[#628F8E] rounded-xl bg-opacity-50">Lihat</a>
                            </td>
                        </tr>
                        <tr class="bg-[#F8F7FC]">
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                03/05/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                08.00</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                20.00</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                03/05/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                29/04/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                Pengganti Pemrograman Web</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                <span
                                    class="px-4 py-1 text-sm font-medium uppercase tracking-wider text-red-800 bg-red-200 rounded-lg bg-opacity-50">Rejected</span>
                            </td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap border-l border-gray-200">
                                <button
                                    class="px-6 py-1 text-sm font-medium  tracking-wider text-green-800 bg-green-50 border border-[#628F8E] rounded-xl bg-opacity-50">Lihat</button>
                            </td>
                        </tr>
                        <tr class="bg-[#F8F7FC]">
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                03/05/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                08.00</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                20.00</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                03/05/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                29/04/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                Pengganti Pemrograman Web</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                <span
                                    class="px-4 py-1 text-sm font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">Waiting</span>
                            </td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap border-l border-gray-200">
                                <button
                                    class="px-6 py-1 text-sm font-medium  tracking-wider text-green-800 bg-green-50 border border-[#628F8E] rounded-xl bg-opacity-50">Lihat</button>
                            </td>
                        </tr>
                        <tr class="bg-[#F8F7FC]">
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                03/05/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                08.00</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                20.00</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                03/05/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                29/04/2024</td>
                            <td
                                class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                Pengganti Pemrograman Web</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                <span
                                    class="px-4 py-1 text-sm font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">Waiting</span>
                            </td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap border-l border-gray-200">
                                <button
                                    class="px-6 py-1 text-sm font-medium  tracking-wider text-green-800 bg-green-50 border border-[#628F8E] rounded-xl bg-opacity-50">Lihat</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-12 flex justify-between items-center">


                <div class="lg:flex-col space-y-6">
                    <div class="lg:text-lg md:text-md text-sm text-gray-700">
                        Menampilkan 1 sampai 10 dari 50 entri
                    </div>
                    <button class="bg-[#499DBC] text-white px-4 py-2 rounded-md lg:text-lg md:text-md text-sm">Riwayat
                        Reservasi</button>
                </div>




                <div class="flex space-x-4 items-center flex-col space-y-6">

                    <div class="flex items-center space-x-4">
                        <button class="text-gray-600 hover:text-gray-800">«</button>
                        <button class="bg-yellow-500 text-white px-2 py-1 rounded">1</button>
                        <button class="text-gray-600 hover:text-gray-800">2</button>
                        <button class="text-gray-600 hover:text-gray-800">3</button>
                        <button class="text-gray-600 hover:text-gray-800">4</button>
                        <button class="text-gray-600 hover:text-gray-800">5</button>
                        <button class="text-gray-600 hover:text-gray-800">»</button>
                    </div>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded-md lg:text-lg md:text-md text-sm">Reservasi
                        Inventaris</button>
                </div>
            </div>
        </div>



        {{-- 
        <td class="p-3 text-md text-gray-700 whitespace-nowrap">
            <a href="#" class="font-bold text-hitam hover:underline">Meja PC Server</a>
        </td> --}}
    </section>
@endsection

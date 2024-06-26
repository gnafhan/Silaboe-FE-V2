@extends('layouts.homelayouts')
@section('content')
    <section class="lg:mx-24 mx-16 bg-white flex flex-col">
        <div class="flex flex-wrap mt-10 items-center space-x-2 lg:space-x-4">
            <button class="lg:text-lg text-md">Beranda</button>
            <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <button class="lg:text-lg text-md">Laboratorium</button>
            <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>
            <button class="lg:text-lg text-md text-blue-500">Laboratorium Teknologi Rekayasa Perangkat Lunak</button>
        </div>

        <div class="border-b-2 border-yellow-500 w-[100%] mb-4 mt-4"></div>
        <div class="py-4 lg:flex-row">

            <div class="flex lg:flex-row lg:items-center  flex-col justify-between">
                <div class="flex flex-col ">
                    <div class="lg:text-4xl text-2xl font-bold text-[#628F8E] ">Laboratorium Teknologi Rekayasa Perangkat
                        Lunak
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
                <div class="relative max-w-4xl my-4 right-0 flex flex-row">
                    <div class="relative flex items-center">
                        <span class="mr-2">Pencarian :</span>
                        <div class="relative">
                            <input type="text" placeholder="Search..." class="border rounded-md p-1 pl-8">
                            <svg class="absolute right-2 top-1/2 transform -translate-y-1/2" width="18" height="18"
                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6 18L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.146 12.3707 1.888 11.112C0.63 9.85333 0.000666667 8.316 0 6.5C0 4.68333 0.629333 3.146 1.888 1.888C3.14667 0.63 4.684 0.000666667 6.5 0C8.31667 0 9.85433 0.629333 11.113 1.888C12.3717 3.14667 13.0007 4.684 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L18 16.6L16.6 18ZM6.5 11C7.75 11 8.81267 10.5627 9.688 9.688C10.5633 8.81333 11.0007 7.75067 11 6.5C11 5.25 10.5627 4.18767 9.688 3.313C8.81333 2.43833 7.75067 2.00067 6.5 2C5.25 2 4.18767 2.43767 3.313 3.313C2.43833 4.18833 2.00067 5.25067 2 6.5C2 7.75 2.43767 8.81267 3.313 9.688C4.18833 10.5633 5.25067 11.0007 6.5 11Z"
                                    fill="#CBCBCB" />
                            </svg>
                        </div>
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


            @foreach ($labs as $lab)
                <div class="flex flex-col mt-8">
                    <a href="{{ Route('laboratoriumdetail.login', $lab['id']) }}" class="flex flex-col w-fit my-8">
                        <div class="lg:text-3xl  text-xl font-bold   text-[#628F8E]">{{ $lab['name'] }}
                        </div>
                        <div class="border-b-4 border-yellow-500 w-full mt-2"></div>
                    </a>

                    <div class="grid lg:grid-cols-2 lg:grid-flow-row  max-h-xl lg:gap-8">
                        <div class=" grid lg:text-lg text-sm md:text-md text-justify ">{{ $lab['description'] }}
                        </div>
                        <div class="flex flex-wrap gap-8 my-8 lg:my-0 ">
                            <img src="{{ asset('image/background.png') }}" class="h-[40%] rounded-lg grid" alt="foto lab" />
                            <div class="flex flex-col gap-2 ">
                                <div class="font-bold text-[#628F8E] lg:text-2xl text-xl grid mb-4 ">Support</div>
                                <button class="bg-[#628F8E] py-2 px-6 rounded-lg text-white">Rendering</button>
                                <button class="bg-[#628F8E] py-2 px-6 rounded-lg text-white">Rendering</button>
                                <button class="bg-[#628F8E] py-2 px-6 rounded-lg text-white">Rendering</button>
                                <button class="bg-[#628F8E] py-2 px-6 rounded-lg text-white">Rendering</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </section>
@endsection

@extends('layouts.homelayouts')
@section('content')
    <section class="mx-8 bg-white flex flex-col">
        <section class="lg:mx-24 mx-8 bg-white flex flex-col">
            <div class="lg:flex lg:flex-row flex-col mt-10 items-center justify-start">
                <a href="{{ Route('homepage.login') }}" class="lg:text-lg text-md flex items-center">
                    Beranda
                    <svg class="w-4 h-4 text-gray-800 dark:text-black ml-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </a>

                <button class="lg:text-lg text-md flex items-center mt-2 lg:mt-0 lg:ml-2">
                    Data Software
                    <svg class="w-4 h-4 text-gray-800 dark:text-black ml-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </button>

                <button class="lg:text-lg text-md text-blue-500 mt-2 lg:mt-0 lg:ml-2 ">
                    Data Software Laboratorium Teknologi Rekayasa Perangkat Lunak
                </button>
            </div>


            <div class="border-b-2 border-yellow-500 w-full mb-2 mt-6"></div>
            <div class="py-4">
                <div class="lg:text-4xl text-lg font-bold text-[#628F8E] mb-4">Data Software Laboratorium Teknologi
                    Rekayasa Perangkat
                    Lunak </div>
                <div class="flex flex-row items-center gap-4">
                    <svg class="" width="16" height="16" viewBox="0 0 15 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.5 7.5C6.46875 7.5 5.58594 7.13281 4.85156 6.39844C4.11719 5.66406 3.75 4.78125 3.75 3.75C3.75 2.71875 4.11719 1.83594 4.85156 1.10156C5.58594 0.367188 6.46875 0 7.5 0C8.53125 0 9.41406 0.367188 10.1484 1.10156C10.8828 1.83594 11.25 2.71875 11.25 3.75C11.25 4.78125 10.8828 5.66406 10.1484 6.39844C9.41406 7.13281 8.53125 7.5 7.5 7.5ZM0 15V12.375C0 11.8438 0.136875 11.3556 0.410625 10.9106C0.684375 10.4656 1.0475 10.1256 1.5 9.89062C2.46875 9.40625 3.45312 9.04312 4.45312 8.80125C5.45312 8.55937 6.46875 8.43812 7.5 8.4375C8.53125 8.4375 9.54687 8.55875 10.5469 8.80125C11.5469 9.04375 12.5312 9.40688 13.5 9.89062C13.9531 10.125 14.3166 10.465 14.5903 10.9106C14.8641 11.3562 15.0006 11.8444 15 12.375V15H0Z"
                            fill="#F5CD51" />
                    </svg>

                    <div class=" text-sm lg:text-xl font-semibold text-black">Oleh : trpl.sv</div>
                </div>
            </div>
            <div class="bg-[#F8F7FC] mt-6 relative">
                <div class="absolute top-0 left-0 border-l-8 border-yellow-500 h-full"></div>
                <div class="flex text-justify lg:px-20 px-10 py-8 lg:text-lg text-md"> SiLaboe (Sistem Informasi
                    Laboratorium)
                    adalah
                    platform website yang menyediakan informasi terkait laboratorium di Program Studi Teknologi Rekayasa
                    Perangkat Lunak UGM.
                    Sistem Informasi ini mencakup deskripsi fasilitas laboratorium, keanggotaan staf dan mahasiswa,
                    publikasi riset, perangkat lunak yang terpasang, jadwal penggunaan laboratorium, prosedur peminjaman,
                    dan
                    inventaris peralatan. Dengan fokus pada efisiensi operasional dan kolaborasi yang lebih baik, SiLaboe
                    memungkinkan
                    pengguna untuk mengakses, mengelola, dan berinteraksi dengan informasi laboratorium secara praktis dan
                    efektif, memfasilitasi pengembangan riset, pembelajaran, dan manajemen sumber daya yang lebih baik.
                </div>
            </div>

            <!-- Card Container Start -->

            <div class="flex flex-wrap my-12 lg:gap-2 md:gap-6 gap-8 justify-evenly
            ">

                <div
                    class="flex flex-col bg-white rounded-lg shadow-md w-full overflow-hidden lg:w-80 lg:py-8 items-center">

                    <h2 class="text-lg lg:text-2xl font-bold lg:py-4">Adobe Illustrator</h2>
                    <div class="bg-[#9EDBE4] w-[150px] h-[150px] rounded-[100px] flex items-center justify-center lg:my-8">
                        <img src="{{ asset('image/adobe-illustrator.png') }}" class="h-20 w-20" alt="Adobe Illustrator">
                    </div>
                    <p class="px-6 py-4 text-md text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum. adipisicing
                        elit. Aut saepe tempore ipsum.
                    </p>

                </div>


                <div
                    class="flex flex-col bg-white rounded-lg shadow-md w-full overflow-hidden lg:w-80 lg:py-8 items-center justify-center">

                    <h2 class="text-lg lg:text-2xl font-bold lg:py-2">Adobe Photoshop</h2>
                    <div class="bg-[#9EDBE4] w-[150px] h-[150px] rounded-[100px] flex items-center justify-center lg:my-8">
                        <img src="{{ asset('image/adobe-photoshop.png') }}" class="h-20 w-20" alt="Adobe Photoshop">
                    </div>
                    <p class="px-6 py-4 text-md text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum. adipisicing
                        elit. Aut saepe tempore ipsum.
                    </p>

                </div>



                <div
                    class="flex flex-col bg-white rounded-lg shadow-md w-full overflow-hidden lg:w-80 lg:py-8 items-center justify-center">

                    <h2 class="text-lg lg:text-2xl font-bold lg:py-2">Adobe Premiere</h2>
                    <div class="bg-[#9EDBE4] w-[150px] h-[150px] rounded-[100px] flex items-center justify-center lg:my-8">
                        <img src="{{ asset('image/adobe-premiere.png') }}" class="h-20 w-20" alt="Adobe Premiere">
                    </div>
                    <p class="px-6 py-4 text-md text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum. adipisicing
                        elit. Aut saepe tempore ipsum.
                    </p>

                </div>



                <div
                    class="flex flex-col bg-white rounded-lg shadow-md w-full overflow-hidden lg:w-80 lg:py-8 items-center justify-center">

                    <h2 class="text-lg lg:text-2xl font-bold lg:py-2">Android Studio</h2>
                    <div class="bg-[#9EDBE4] w-[150px] h-[150px] rounded-[100px] flex items-center justify-center lg:my-8">
                        <img src="{{ asset('image/androidstudio.png') }}" alt="Android Studio">
                    </div>
                    <p class="px-6 py-4 text-md text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum. adipisicing
                        elit. Aut saepe tempore ipsum.
                    </p>

                </div>

            </div>

            <div class="flex flex-wrap justify-center my-10 gap-14">

                <!-- Your other card elements go here -->

            </div>

        </section>
    </section>
@endsection

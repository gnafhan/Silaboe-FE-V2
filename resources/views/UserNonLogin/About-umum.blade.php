@extends('layouts.homelayouts')
@section('content')
    <section class="lg:mx-24 mx-16 bg-white flex flex-col">
        <div class="flex flex-row mt-10 items-center  ">
            <button class="lg:text-lg text-md">Beranda</button>
            <svg class="w-4 h-4 text-gray-800  dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="18" height="18" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <button class="lg:text-lg text-md">About Us</button>
            <svg class="w-4 h-4 text-gray-800  dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="18" height="18" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>
            <button class="lg:text-lg text-md text-blue-500  ">Apa Itu Silaboe ?</button>
        </div>
        <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-4"></div>
        <div class="py-4">
            <div class=" lg:text-4xl text-xl font-bold text-[#628F8E] lg:mb-6 mb-4">Apa Itu Silaboe ?</div>
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
        <div class="bg-[#F8F7FC] mt-8 relative">
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


        <div class="w-full mx-auto  justify-center mt-8 lg:mt-12 ">
            <div class="  mb-6 lg:mt-12 mt-4   lg:mb-32 md:py-6 ">
                <div class="text-black flex flex-wrap">
                    <div class="w-full lg:w-1/2 mb-8 text-center px-2 py-4 lg:py-0 md:px-8 lg:mb-0 lg:px-4">
                        <div class="flex flex-col justify-center items-center mb-12 w-fit mx-auto">
                            <h1 class="text-2xl font-bold lg:text-4xl md:text-2xl mb-2 ">
                                Visi
                            </h1>
                            <div class="border-b-4 border-yellow-500  w-full  "></div>
                        </div>
                        <div class="flex flex-col text-lg gap-2 text-justify max-w-3xl">
                            <p class=" text-justify text-base lg:text-xl">
                                1. Lorem ipsum dolor sit amet consectetur, adipisicing elit.

                            </p>
                            <p class="text-justify text-base lg:text-xl">
                                2. Rerum in, repudiandae harum culpa ipsum pariatur voluptas placeat maiores laudantium,
                                quod iure.

                            </p>
                            <p class=" text-justify text-base lg:text-xl">
                                3. Deserunt doloremque maxime nobis velit nulla, aut esse ea incidunt, tenetur repudiandae
                                illum quam dolorem ut similique a culpa reiciendis minus veniam

                            </p>
                            <p class=" text-justify text-base lg:text-xl">
                                4. Minus cupiditate expedita voluptatum.

                            </p>
                            <p class=" text-justify text-base lg:text-xl">
                                6. Lorem ipsum dolor sit amet consectetur, adipisicing elit.

                            </p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 text-center px-4 pb-6 md:px-8 lg:px-4">
                        <div class="flex flex-col justify-center items-center mb-12 w-fit mx-auto">
                            <h1 class="text-2xl font-bold lg:text-4xl md:text-2xl mb-2 ">
                                Misi
                            </h1>
                            <div class="border-b-4 border-yellow-500  w-full  "></div>
                        </div>
                        <div class="flex flex-col text-lg gap-2 text-justify max-w-3xl">
                            <p class=" text-justify ext-base lg:text-xl">
                                1. Lorem ipsum dolor sit amet consectetur, adipisicing elit.

                            </p>
                            <p class="text-justify text-base lg:text-xl">
                                2. Rerum in, repudiandae harum culpa ipsum pariatur voluptas placeat maiores laudantium,
                                quod iure.

                            </p>
                            <p class=" text-justify text-base lg:text-xl">
                                3. Deserunt doloremque maxime nobis velit nulla, aut esse ea incidunt, tenetur repudiandae
                                illum quam dolorem ut similique a culpa reiciendis minus veniam

                            </p>
                            <p class=" text-justify text-base lg:text-xl">
                                4. Minus cupiditate expedita voluptatum.

                            </p>
                            <p class=" text-justify text-base lg:text-xl">
                                6. Lorem ipsum dolor sit amet consectetur, adipisicing elit.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
@endsection

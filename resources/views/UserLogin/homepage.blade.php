@extends('layouts.homelayouts')
@section('content')
    <div class="relative w-full bg-gray-900 px-16 py-32 lg:py-42 bg-cover bg-center bg-blend-multiply mb-12">
        <!-- Background image with reduced opacity -->
        <div class="absolute inset-0"
            style="background: url('{{ asset('image/background.png') }}') center/cover; opacity: 0.3;"></div>

        <!-- Content with text -->
        <div class="lg:py-56 md:py-32 py-12 items-center relative">
            <div class="flex flex-col text-center justify-center md:flex-row">
                <div class=" items-center justify-center">
                    <img src="{{ asset('image/Silaboe-Logo.png') }}" class="leading-relaxed lg:max-w-md max-w-md  mx-auto"
                        alt="Flowbite Logo" width="45%" height="auto" />

                    <h2
                        class="leading-relaxed text-sm text-white md:text-lg lg:text-2xl text-center font-reguler py-2 lg:max-w-xl  max-w-xs flex-col mx-auto">
                        <div class="">UNIVERSITAS GADJAH MADA</div>
                        <div class=""> TEKNOLOGI REKAYASA PERANGKAT LUNAK </div>
                        <div class=""> INFORMASI LABORATORIUM </div>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class=" container px-2 py-8 mx-auto ">
        <div class="text-center mb-8">
            <div class=" mx-auto w-fit ">
                <h1 class="lg:text-4xl text-xl font-bold title-font text-[#628F8E] mb-2  text-center">Apa Itu
                    Silaboe ?</h1>
                <div class="border-b-4 border-yellow-500 w-full"></div>
            </div>




            <p class="text-sm lg:text-xl leading-relaxed xl:w-full lg:w-full mx-auto mt-8 lg:mb-24 justify-center">
                SiLaboe Sistem Informasi Laboratorium adalah platform website yang menyediakan informasi terkait
                laboratorium di Program Studi Teknologi Rekayasa Perangkat Lunak UGM. Sistem Informasi ini mencakup
                deskripsi fasilitas laboratorium, keanggotaan staf dan mahasiswa, publikasi riset, perangkat lunak yang
                terpasang, jadwal penggunaan laboratorium, prosedur peminjaman, dan inventaris peralatan. Dengan fokus pada
                efisiensi operasional dan kolaborasi yang lebih baik, SiLaboe memungkinkan pengguna untuk mengakses,
                mengelola, dan berinteraksi dengan informasi laboratorium secara praktis dan efektif, memfasilitasi
                pengembangan riset, pembelajaran, dan manajemen sumber daya yang lebih baik.</p>
        </div>
    </div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-18 mx-auto flex flex-wrap lg:mb-32">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/2 md:w-full">
                    <div
                        class="flex border-2 rounded-lg border-gray-200 bg-slate-100 border-opacity-50 p-8 sm:flex-row flex-col-reverse">
                        <div class="flex-grow p-4 lg:p-8">
                            <div class="mb-4 lg:mb-8  text-left w-fit ">
                                <a href="{{ Route('datasoftware.login') }}"
                                    class="text-gray-900 text-xl title-font font-bold mb-2 lg:text-3xl">Data Software</a>
                                <div class="border-b-4  border-yellow-500 w-full     "></div>
                            </div>
                            <p class="leading-relaxed text-base lg:text-xl lg:mr-8 text-left">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Au t saepe tempore ipsum, provident, excepturi culpa
                                exercitationem omnis ex deserunt iusto officia alias doloremque! Tenetur placeat debitis ex
                                veritatis labore accusantium. lorem lorem</p>
                        </div>
                        <div
                            class="w-26 h-26 sm:mr-8 sm:mb-0  ml-4 sm:self-end rounded-full text-indigo-500 flex-shrink-0 flex-direction ">
                            <img src="{{ asset('image/icon1.png') }}" class="mb-2 lg:mb-6" alt="Flowbite Logo" />
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2 md:w-full">
                    <div
                        class="flex border-2 rounded-lg border-gray-200 bg-slate-100 border-opacity-50 p-8 sm:flex-row flex-col-reverse">
                        <div
                            class="w-26 h-26 sm:mr-8 sm:mb-0  ml-12 sm:self-end rounded-full text-indigo-500 flex-shrink-0 flex-direction ">
                            <img src="{{ asset('image/icon2.png') }}" class="mb-6" alt="Flowbite Logo" />
                        </div>
                        <div class="flex-grow lg:p-8  p-4">
                            <div class="mb-4 lg:mb-8 w-fit  text-right ">
                                <a href="{{ Route('inventaris.login') }}"
                                    class="text-gray-900 text-xl title-font font-bold mb-2 lg:text-3xl ">
                                    Inventaris
                                </a>
                                <div class="border-b-4 border-yellow-500  flex justify-end "></div>
                            </div>


                            <p class="leading-relaxed text-base lg:text-xl text-right">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Aut saepe tempore ipsum, provident, excepturi culpa
                                exercitationem omnis ex deserunt iusto officia alias doloremque! Tenetur placeat debitis ex
                                veritatis labore accusantium. lorem lorem</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Caraousel --}}
    <section class="bg-gray-100  pt-10 pb-12 px-8 mb-12 mt-12">
        <div class="flex flex-col justify-center items-center mb-6 w-fit mx-auto">
            <div class="text-black lg:text-4xl text-xl font-bold text-center mt-0 mb-2 ">Laboratorium</div>
            <div class="border-b-4 border-yellow-500  w-full  "></div>
        </div>

        <div class=" mx-auto  w-[90%] h-100%]">

            <div id="default-carousel" class="relative rounded-lg overflow-hidden shadow-lg" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-80 md:h-30 lg:h-[750px]" data-carousel-inner>
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('image/fotolab.png') }}" class="object-cover w-full h-full" alt="Slide 1">
                        {{-- <span
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold text-white md:text-2xl dark:text-gray-800">First
                            Slide</span> --}}
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('image/background.png') }}" class="object-cover w-full h-full" alt="Slide 2">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                            class="object-cover w-full h-full" alt="Slide 3">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
                    <button type="button"
                        class="w-3 h-3 rounded-full bg-[#F5CD51] hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                    <button type="button"
                        class="w-3 h-3 rounded-full bg-[#F5CD51] hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                    <button type="button"
                        class="w-3 h-3 rounded-full bg-[#F5CD51] hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-[#F5CD51] rounded-full hover:bg-gray-300 focus:outline-none transition"
                    data-carousel-prev>
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button type="button"
                    class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-[#F5CD51] rounded-full hover:bg-gray-300 focus:outline-none transition"
                    data-carousel-next>
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
            <div class="flex justify-end  mt-8">
                <div class="flex flex-row items-center rounded-md bg-[#F5CD51] py-2 px-6 justify-center gap-2 ">
                    <a href="{{ Route('laboratorium.login') }}"
                        class="text-white   text-center py-2 font-semibold text-md hover:scale-125 duration-300">
                        Lihat Semua
                    </a>
                    <svg width="24" height="24" viewBox="0 0 14 11" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="ml-2">
                        <path d="M1 5.25L12.3333 5.25M12.3333 5.25L8.08333 9.5M12.3333 5.25L8.08333 1" stroke="white"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>

            </div>
        </div>


    </section>


    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

    </div>


    <section
        class="lg:py-4 md:py-4  bg-white flex flex-wrap items-center justify-evenly gap-2 lg:px-32 md:px-8 lg:justify-between lg:mx-32">
        <div class="px-8 py-4 lg:px-0 text-center">
            <h1 class="text-slate-600 font-bold mb-2 lg:text-5xl md:text-4xl text-2xl">{{$jumlahLabs}}</h1>
            <p class="text-slate-600 font-semibold text-sm lg:text-xl">
                Laboratorium
            </p>
        </div>
        <div class="px-8 py-4 lg:px-0 text-center">
            <h1 class="text-slate-600 font-bold text-2xl mb-2 lg:text-5xl md:text-4xl sm:text-xl">{{count($jumlahMahasiswa)}}</h1>
            <p class="text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                Mahasiswa
            </p>
        </div>
        <div class="px-8 py-4 lg:px-0 text-center">
            <h1 class="text-slate-600 font-bold text-2xl mb-2 lg:text-5xl md:text-4xl">{{count($jumlahLaboran)}}</h1>
            <p class="text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                Laboran
            </p>
        </div>
        <div class="px-8 py-4 lg:px-0 text-center">
            <h1 class="text-slate-600 font-bold text-2xl mb-2 lg:text-5xl md:text-4xl">{{count($jumlahDosen)}}</h1>
            <p class="text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                Dosen
            </p>
        </div>
        <div class="px-8 py-4 lg:px-0 text-center">
            <h1 class="text-slate-600 font-bold text-2xl mb-2 lg:text-5xl md:text-4xl">{{count($jumlahResearch)}}</h1>
            <p class="text-slate-600 font-semibold text-sm lg:text-xl md:text-sm">
                Research
            </p>
        </div>
    </section>

@endsection

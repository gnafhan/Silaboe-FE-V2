@extends('layouts.homelayouts')
@section('content')
    <section class="lg:mx-24 mx-8 bg-white flex flex-col">
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
                <button class="lg:text-lg text-md ">Reservasi Inventaris</button>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </div>
            <button class="lg:text-lg text-md text-blue-400 ">Form Reservasi Inventaris</button>
        </div>
        <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-8"></div>
        <div class="py-4">

            <div class=" lg:text-3xl text-2xl font-bold text-[#628F8E] mb-4">Form Reservasi Inventaris</div>

        </div>
        <div class="bg-[#F8E0E0] mt-8 relative">
            <div class="absolute top-0 left-0 border-l-8 border-[#D46857] h-full"></div>

            <div class="flex flex-col border border-red-600">
                <div class=" flex lg:px-20 lg:text-2xl text-xl lg:pt-8 p-4 font-semibold text-[#D46857]">Informasi</div>
                <div class="flex text-justify  lg:px-20 lg:pt-2 lg:pb-8 px-6 pb-8 text-sm lg:text-xl"> Pemesanan
                    laboratorium tidak
                    dapat dilakukan
                    pada waktu periode berjalan
                </div>
            </div>
        </div>
        <div class="bg-[#e9f8f7]  border-[#4C8F8B] border-2 rounded-lg  min-h-24   px-8 py-4 my-8">
            <div class="flex flex-col text-justify ">
                <div class="lg:text-2xl text-md pb-4 font-semibold flex justify-start">Aturan /Syarat Pemesanan oleh
                    Pengguna</div>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">1. Tanggal pengajuan maksimal H-1 dari tanggal memulai
                    peminjaman</h1>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">2. Pengajuan peminjaman hanya dapat dilakukan pada hari kerja
                    (Senin-Jumat).</h1>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">3. Saat peminjam mengambil inventaris yang dipinjam
                    diwajibkan membawa kartu identitas sebagai jaminan yang diserahkan kepada laboran </h1>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">4. Identitas peminjam akan dikembalikan setelah inventaris
                    selesai dipinjam. </h1>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">5. Kerusakan inventaris ketika peminjaman menjadi tanggung
                    jawab peminjam. </h1>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">5. Keterlambatan pengembalian inventaris yang tidak sesuai
                    jadwal peminjaman yang diajukan akan ditindak tegas. </h1>
            </div>

        </div>


        <div class="bg-gray-20 border-2 border-[#DADADA] lg:px-8 lg:py-6 lg:mb-24 mb-12 p-6 w-full ">

            <h1 class="text-black font-bold lg:text-2xl text-xl  mb-8 ">Form Peminjaman</h1>
            <div class=" lg:mx-16 mx-2 bg-white rounded-xl border-[#DADADA] border-2">
                <div class="bg-[#628F8E] w-full px-12   py-2 rounded-t-xl border-[#DADADA] border-b-2">
                    <div class="text-white font-medium text-xl ">Identitas</div>
                </div>
                <form class="lg:px-12 px-4 py-6">
                    <div class=" lg:gap-32 ">
                        <div class=" w-full">
                            <div class="mb-5">
                                <label for="email"
                                    class="block mb-2 lg:text-xl text-md font-medium text-gray-900">Email</label>
                                <input type="email" id="email"
                                    class="bg-gray-50 border text-sm border-[#DADADA] text-gray-200 lg:text-lg  rounded-lg  block w-full p-2 lg:p-4 dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white "
                                    placeholder="Masukkan Nama Email Peminjam" required />
                            </div>
                            <div class="mb-5">
                                <label for="email"
                                    class="block mb-2 lg:text-xl text-md font-medium text-gray-900">Nama</label>
                                <input type="email" id="email"
                                    class="bg-gray-50 border text-sm border-[#DADADA] text-gray-200 lg:text-lg  rounded-lg  block w-full p-2 lg:p-4 dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white "
                                    placeholder="Masukkan Nama Peminjam" required />
                            </div>
                            <div class="mb-8">
                                <label for="email" class="block mb-2 lg:text-xl text-md font-medium text-gray-900">No
                                    Whatsap</label>
                                <input type="email" id="email"
                                    class="bg-gray-50 border text-sm border-[#DADADA] text-gray-200 lg:text-lg  rounded-lg  block w-full p-2 lg:p-4 dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white "
                                    placeholder="Masukkan No Whatsapp Peminjam" required />
                            </div>
                            <div class="mb-5">
                                <label for="email" class="block mb-2 lg:text-xl text-md font-medium text-gray-900">Foto
                                    Identitas (KTP/KTM) </label>
                                <button type="submit"
                                    class="text-black bg-[#499DBC] hover:bg-[#628F8E] hover:text-white focus:ring-4 focus:outline-none  font-semibold text-lg rounded-lg mt-4 w-full sm:w-auto px-8 py-2.5 text-center dark:bg-[#D9D9D9] dark:hover:bg-blue-70 ">Pilih
                                    File
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class=" lg:mx-16 lg:my-24 mx-2 my-16 bg-white rounded-xl border-[#DADADA] border-2">
                <div class="bg-[#628F8E] w-full px-12 py-2 rounded-t-xl border-[#DADADA] border-b-2">
                    <div class="text-white font-medium text-xl ">Waktu dan Keterangan</div>
                </div>
                <div class="flex lg:flex-row flex-col  lg:m-8 gap-4 lg:gap-12 ">
                    <div date-rangepicker class=" ">
                        <div class="flex flex-col md:gap-6 lg:gap-6 gap-4 max-w-max lg:px-8 px-4 py-6">
                            <div class="mb-5">


                                <label for="email" class="block mb-4 text-md lg:text-xl font-medium text-black">Tanggal
                                    Mulai</label>
                                <div class="relative gap-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="start" type="text"
                                        class="bg-gray-50 border text-center  border-[#DADADA] text-gray-900 lg:text-lg text-md rounded-lg block w-full pl-12 lg:p-4 p-2  dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white "
                                        placeholder="10/02/2024">
                                </div>


                            </div>
                            <div class="mb-5">
                                <label for="email" class="block mb-4 lg:text-xl text-md font-medium text-black">Tanggal
                                    Selesai</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="gray-500" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="start" type="text"
                                        class="bg-gray-50 border text-center border-[#DADADA] text-gray-900 lg:text-lg text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-12 lg:p-4 p-2  dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="12/02/2024">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:gap-6 lg:gap-8 max-w-max p-4">
                        <div class="mb-6 ">
                            <label for="email" class="block mb-4 lg:text-xl text-md font-medium text-black">Jam
                                Mulai</label>
                            <div class="relative ">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">

                                </div>
                                <input type="time" id="time"
                                    class="bg-gray-50 border lg:px-8 leading-none border-gray-300 text-gray-50 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-4 py-4 dark:bg-gray-20 dark:border-gray-20 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-gray-400 dark:focus:border-gray-500"
                                    min="09:00" max="18:00" value="00:00" required />
                            </div>
                        </div>

                        <div class="mb-5">
                            <label for="email" class="block mb-4 lg:text-xl text-md font-medium text-black">Jam
                                Selesai</label>
                            <div class="relative ">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">

                                </div>
                                <input type="time" id="time"
                                    class="bg-gray-50 border lg:px-8 leading-none border-gray-300 text-gray-50 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-4 py-4 dark:bg-gray-20 dark:border-gray-20 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-gray-400 dark:focus:border-gray-500"
                                    min="09:00" max="18:00" value="00:00" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5 lg:py-8 lg:px-16 px-6">
                    <label for="email"
                        class="block mb-4 lg:text-xl text-md font-medium text-gray-900">Keterangan</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border  border-[#DADADA] text-gray-200 lg:text-xl text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full px-8 pb-32 pt-4 dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan keterangan  reservasi" required />
                </div>

            </div>

            <div class="flex flex-row gap-6 lg:my-12  justify-end lg:mx-16">
                <a href="{{Route('formreservasiinventariscek.login')}}"
                 type="submit"
                    class="text-white bg-[#499DBC] hover:scale-110  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md lg:text-xl md:text-md text-sm w-max-xl   lg:w-max-auto md:w-max-auto lg:px-8 lg:py-4 px-4 py-3 text-center dark:bg-[#499DBC]  dark:focus:ring-blue-800">Ajukan
                    Reservasi</a>
                <a href="{{Route('reservasiinventaris.login')}}"
                 type="submit"
                    class="text-white bg-[#D46857] hover:scale-110 focus:ring-4 focus:outline-none focus:ring-red-700 font-medium rounded-md lg:text-xl md:text-md text-sm w-max-xl lg:w-max-auto md:w-max-auto lg:px-8 lg:py-4 px-4 py-3 text-center dark:bg-[#D46857]  dark:focus:ring-red-700">Cancel</a>
            </div>



        </div>
    </section>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="../path/to/flowbite/dist/datepicker.js"></script> --}}
@endsection

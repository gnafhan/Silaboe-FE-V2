@extends('layouts.AdminLayouts')
@section('content')
    <header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6 sticky w-full top-0">
        <h2 class="text-2xl font-semibold">Jadwal Lab</h2>
        <div class="flex items-center space-x-4">
            <button class="text-white hover:text-gray-300 focus:outline-none">
                <img src="{{ asset('image/Notification.png') }}" class="  h-10 w-10" alt="Flowbite Logo" />
            </button>
            <div class="relative">
                <button
                    class="flex items-center text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                    <img src="{{ asset('image/Profile.png') }}" class=" h-10 w-10 " alt="Flowbite Logo" />
                </button>
            </div>
        </div>
    </header>
    <div class="bg-white ">
        <div class="flex-1 lg:mx-12 mx-12  py-8 flex-col flex lg:gap-4 md:gap-4 gap-2">

            <h1 class="text-2xl font-bold mb-2">Tambah Jadwal</h1>

            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="nama-laboratorium">Nama
                        Laboratorium</label>
                    <input
                        class="shadow-sm appearance-none border rounded-xl w-full lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                        id="nama-laboratorium" type="text" placeholder="ex: Laboratorium HU 105">
                </div>

                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class=" w-full md:w-2/5 lg:w-1/5 px-2 mb-4 md:mb-0">
                        <label class="block text-gray-700 text-lg font-bold mb-2" for="jam-mulai">Jam Mulai</label>
                        <input
                            class="shadow appearance-none border rounded-xl  lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                            id="jam-mulai" type="text" placeholder="ex: 07.15">
                    </div>
                    <div class="w-full md:w-2/5  lg:w-1/5 px-2">
                        <label class="block text-gray-700 text-lg font-bold mb-2" for="jam-selesai">Jam Selesai</label>
                        <input
                            class="shadow appearance-none border rounded-xl  lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                            id="jam-selesai" type="text" placeholder="ex: 12.15">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="penanggung-jawab">Penanggung
                        Jawab</label>
                    <input
                        class="shadow appearance-none border rounded-xl w-full lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                        id="penanggung-jawab" type="text" placeholder="ex: Laboratorium HU 105">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-lg font-bold mb-2 " for="keperluan">Keperluan</label>
                    <textarea
                        class="shadow appearance-none border rounded-xl w-full lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                        id="keperluan" placeholder="ex: Laboratorium HU 105" rows="3"></textarea>
                </div>

                <div class="flex justify-start gap-4">
                    <a href="{{ Route('jadwallab.admin') }}" type="button"
                        class="bg-[#D46857] text-white py-2 px-4 rounded-lg hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-500">Cancel</a>
                    <button type="submit"
                        class="bg-[#4C8F8B] text-white py-2 px-4 rounded-lg hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-500">Submit</button>
                </div>
            </form>




        </div>
    </div>
@endsection

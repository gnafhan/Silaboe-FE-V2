@extends('layouts.AdminLayouts')
@section('content')
    <header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6">
        <h2 class="text-2xl font-semibold">Inventaris</h2>
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
    <div class="bg-[rgba(237,245,245,1)] ">
        <div class="flex-1 lg:mx-20 mx-12  py-8 flex-col flex lg:gap-4 md:gap-4 gap-2">

            <h1 class="lg:text-2xl text-xl font-bold mb-2">Edit Inventaris</h1>

            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="nama-laboratorium">Nama
                        Inventaris</label>
                    <input
                        class="shadow-sm appearance-none border rounded-xl w-full lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                        id="nama-laboratorium" type="text" placeholder="ex: Laboratorium HU 105">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="nama-laboratorium">No ID</label>
                    <input
                        class="shadow-sm appearance-none border rounded-xl w-full lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                        id="nama-laboratorium" type="text" placeholder="ex: Laboratorium HU 105">
                </div>

                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class="w-full md:w-2/5 lg:w-1/5 px-2 mb-4 md:mb-0">
                        <label class="block text-gray-700 text-lg font-bold mb-2" for="kondisi">Kondisi</label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full shadow border rounded-xl lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                                id="kondisi">
                                <option value="" disabled selected>Pilih kondisi</option>
                                <option value="baik">Baik</option>
                                <option value="tidak_baik">Tidak Baik</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M7 10l5 5 5-5H7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="penanggung-jawab">Informasi</label>
                    <input
                        class="shadow appearance-none border rounded-xl w-full lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                        id="penanggung-jawab" type="text" placeholder="ex: Laboratorium HU 105">
                </div>


                <div class="flex justify-start gap-4 mt-12">
                    <a href="{{ Route('inventaris.admin') }}" type="button"
                        class=" hover:scale-105 bg-[#D46857] text-white py-2 px-4 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Cancel</a>
                    <button type="submit"
                        class="hover:scale-105 bg-[#4C8F8B] text-white py-2 px-4 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

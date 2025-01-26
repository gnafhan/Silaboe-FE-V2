@extends('layouts.AdminLayouts')
@section('content')
    <header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6 sticky w-full top-0">
        <h2 class="text-2xl font-semibold">Laboratorium</h2>
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
    <main class="flex-1 lg:mx-12 mx-12  md:mx-16  my-8 ">
        <h2 class="text-2xl font-bold mb-6">Tambah Laboratorium</h2>
        <form action="{{ route('laboratoriumtambah.admin.post') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="nama-laboratorium" class="block text-gray-700 font-medium mb-2 text-lg">Nama
                    Laboratorium</label>
                <input type="text" name="name" id="nama-laboratorium" placeholder="ex: Laboratorium HU 105"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#628F8E] bg-[rgba(98,143,142,0.2)]">
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-black font-medium mb-2 text-lg">Deskripsi</label>
                <textarea id="deskripsi" name="description" rows="4" placeholder="ex: Laboratorium HU 105"
                    class="w-full mb-2 p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#628F8E] bg-[rgba(98,143,142,0.2)]"></textarea>
            </div>
            <div class="mb-12">
                <label for="foto-laboratorium" class="block text-black font-medium mb-2 text-lg">Tipe</label>
                <select name="type" id="type" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#628F8E] bg-[rgba(98,143,142,0.2)]">
                    <option value="gudang">Gudang</option>
                    <option value="laboratorium">Laboratorium</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="foto-laboratorium" class="block text-black font-medium mb-2 text-lg">Foto Laboratorium</label>
                <div class="relative">
                    <input type="file" name="photo" id="foto-laboratorium"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#628F8E] bg-[rgba(98,143,142,0.2)] cursor-pointer file:cursor-pointer file:bg-[#4C8F8B] file:text-white file:border-none file:rounded-lg file:py-2 file:px-4 file:hover:bg-green-600 file:focus:ring-2 file:focus:ring-green-500" />
                </div>
            </div>

            <div class="flex justify-start gap-4">
                <a href="{{ Route('laboratorium.admin') }}" type="button"
                    class="bg-[#D46857] text-white py-2 px-4 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Cancel</a>
                <button type="submit"
                    class="bg-[#4C8F8B] text-white py-2 px-4 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Submit</a>
            </div>
        </form>
    </main>
@endsection

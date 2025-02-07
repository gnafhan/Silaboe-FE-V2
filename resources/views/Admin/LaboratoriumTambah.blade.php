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
        <form action="{{ route('laboratoriumtambah.admin.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="nama-laboratorium" class="block text-gray-700 font-medium mb-2 text-lg">Nama
                    Laboratorium</label>
                <input type="text" name="name" id="nama-laboratorium" placeholder="ex: Laboratorium HU 105"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#628F8E] bg-[rgba(98,143,142,0.2)]">
            </div>

            <div id="input-container">
                <div class="mb-4">
                    <label for="support_type_1" class="block text-black font-medium mb-2 text-lg">Support</label>
                    <input id="support_type_1" name="support_type_1" type="text" placeholder="ex: Rendering, Editing etc"
                        class="w-full mb-0 p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#628F8E] bg-[rgba(98,143,142,0.2)]" oninput="handleInput(this)">
                </div>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-black font-medium mb-2 text-lg">Deskripsi</label>
                <textarea id="deskripsi" name="description" rows="4" placeholder="ex: Laboratorium HU 105"
                    class="w-full mb-2 p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#628F8E] bg-[rgba(98,143,142,0.2)]"></textarea>
            </div>

            <div class="mb-12">
                <label for="foto-laboratorium" class="block text-black font-medium mb-2 text-lg">Tipe</label>
                <select name="type" id="type" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#628F8E] bg-[rgba(98,143,142,0.2)]">
                    <option value="laboratorium">Laboratorium</option>
                    <option value="gudang">Gudang</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-black font-medium mb-2 text-lg">Foto Laboratorium</label>
                <div class="relative">
                    <input type="file" name="foto-laboratorium" id="foto-laboratorium"
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

    <script>
        let inputCount = 1;
        const maxInputs = 4;

        function handleInput(inputElement) {
            // Cek jika input sudah terisi dan belum mencapai batas maksimum
            if (inputCount < maxInputs && inputElement.value.trim() !== '') {
                // Cek jika input terakhir sudah terisi
                const lastInput = document.getElementById(`support_type_${inputCount}`);
                if (lastInput && lastInput.value.trim() !== '') {
                    const container = document.getElementById('input-container');
                    inputCount++;
                    if (inputCount <= maxInputs) {
                        const newInput = document.createElement('div');
                        newInput.className = 'mb-4';
                        newInput.innerHTML = `
                            <input id="support_type_${inputCount}" name="support_type_${inputCount}" type="text" placeholder="ex: Rendering, Editing etc"
                                class="w-full mb-0 p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#628F8E] bg-[rgba(98,143,142,0.2)]"
                                oninput="handleInput(this)">
                        `;
                        container.appendChild(newInput);
                    }
                }
            }
        }
    </script>

@endsection

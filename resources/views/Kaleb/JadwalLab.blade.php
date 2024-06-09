@extends('layouts.AdminLayouts')
@section('content')
    <div class="flex-1 lg:mx-20 mx-12  py-8 flex-col flex lg:gap-4 md:gap-4 gap-2">


        <div class="mb-6">
            <label for="date-picker" class="block text-black mb-4 font-medium">Pilih tanggal untuk menampilkan jadwal
                pemakaian ruang
                laboratorium.</label>
            <input type="date" id="date-picker"
                class="block appearance-none   border border-gray-300 text-black py-2 px-12 rounded-xl leading-tight focus:outline-none bg-[rgba(98,143,142,0.2)] focus:bg-white focus:border-gray-500"
                value="2024-12-14">
        </div>



        <div class="overflow-x-auto rounded-2xl">
            <table class="min-w-full bg-[rgba(98,143,142,0.2)] rounded ">
                <thead class="bg-[rgba(98,143,142,0.2)] text-black">
                    <tr>
                        <th class="py-3 px-4 text-left">Laboratorium</th>
                        <th class="py-3 px-4 text-left">Jam Mulai</th>
                        <th class="py-3 px-4 text-left">Jam Selesai</th>
                        <th class="py-3 px-4 text-left">Detail</th>
                    </tr>
                </thead>
                <tbody class="text-black">
                    <!-- Repeat this block for each lab schedule -->
                    <tr class="border-t">
                        <td class="py-3 px-4">Laboratorium HU 105</td>
                        <td class="py-3 px-4">07.15</td>
                        <td class="py-3 px-4">09.15</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">Laboratorium HU 105</td>
                        <td class="py-3 px-4">09.15</td>
                        <td class="py-3 px-4">11.55</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">Laboratorium HU 105</td>
                        <td class="py-3 px-4">12.15</td>
                        <td class="py-3 px-4">15.55</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">Laboratorium HU 106</td>
                        <td class="py-3 px-4">07.15</td>
                        <td class="py-3 px-4">09.15</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">Laboratorium HU 106</td>
                        <td class="py-3 px-4">09.15</td>
                        <td class="py-3 px-4">11.55</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">Laboratorium HU 107</td>
                        <td class="py-3 px-4">07.15</td>
                        <td class="py-3 px-4">09.15</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">Laboratorium HU 107</td>
                        <td class="py-3 px-4">09.15</td>
                        <td class="py-3 px-4">11.55</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">Laboratorium HU 107</td>
                        <td class="py-3 px-4">12.15</td>
                        <td class="py-3 px-4">15.55</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4C8F8B] text-white py-1 px-6 rounded-xl">Lihat</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

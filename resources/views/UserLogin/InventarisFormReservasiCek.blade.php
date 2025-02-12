@extends('layouts.homelayouts')
@section('content')
    <section class="lg:mx-24 mx-16 bg-white flex flex-col">
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
                <button class="lg:text-lg text-md text-blue-400 ">Reservasi Inventaris</button>

            </div>

        </div>
        <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-4"></div>
        <div class="py-4">
            <div class=" lg:text-3xl text-xl font-bold text-[#628F8E] lg:mb-4 mb-4">Reservasi Inventaris</div>
        </div>
        {{-- <div class="bg-[#F8E0E0] mt-8 relative">
            <div class="absolute top-0 left-0 border-l-8 border-[#D46857] h-full"></div>

            <div class="flex flex-col">
                <div class=" flex lg:px-20 lg:text-2xl text-xl lg:pt-8 p-6 font-semibold text-[#D46857]">Informasi</div>
                <div class="flex text-justify  lg:px-20 lg:pt-2 lg:pb-8 px-6 pb-6 text-sm lg:text-xl">Belum ada inventaris
                    yang ditambahkan.
                </div>
            </div>
        </div> --}}

        <div>
            <div class=" my-16 bg-white">
                <div class="overflow-x-auto shadow-lg rounded-lg">
                    <table class="w-full border border-[#CBCBCB]">
                        <thead class="bg-[#F8F7FC] border-b-2 border-gray-200">
                            <tr>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Jenis Inventaris</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    No Id
                                </th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Informasi</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Tanggal
                                    Mulai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Jam
                                    Mulai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Jam
                                    Selesai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Tanggal
                                    Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($selectedInventories as $inventory)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-3 px-4">{{ $inventory['item_name'] }}</td>
                                <td class="py-3 px-4">{{ $inventory['no_item'] }}</td>
                                <td class="py-3 px-4">{{ $inventory['information'] }}</td>
                                <td class="py-3 px-4">{{ $formData['start'] }}</td>
                                <td class="py-3 px-4">{{ $formData['start_time'] }}</td>
                                <td class="py-3 px-4">{{ $formData['end_time'] }}</td>
                                <td class="py-3 px-4">{{ $formData['end'] }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="py-6 text-center text-gray-500">No items selected</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="flex flex-row gap-4 mt-8 mb-48">
                    {{-- Move Add Inventory button to the left --}}
                    <a href="{{ Route('inventaris.login') }}" 
                        class="text-white bg-[#F5CD51] hover:scale-105 font-medium rounded-md lg:text-lg md:text-md text-sm lg:px-4 lg:py-4 px-4 py-4 text-center">
                        Tambahkan Inventaris
                    </a>
            
            
                    {{-- Move submit form and edit button to the right --}}
                    <form action="{{ route('formreservasiinventaris.post') }}" method="POST" enctype="multipart/form-data" class="inline">
                        @csrf
                        {{-- Hidden fields to carry over the data --}}
                        @foreach($formData as $key => $value)
                            @if($key !== 'identity_preview')
                                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                            @endif
                        @endforeach
                        @if(isset($formData['identity_path']))
                            <input type="hidden" name="identity_path" value="{{ $formData['identity_path'] }}">
                        @endif
                        @foreach($selectedInventories as $inventory)
                            <input type="hidden" name="selected_items[]" value="{{ $inventory['id'] }}">
                        @endforeach
                        
                        <button type="submit" class="text-white bg-[#499DBC] hover:scale-105 font-medium rounded-md lg:text-lg md:text-md text-sm lg:px-8 lg:py-4 px-4 py-4 text-center">
                            Ajukan Reservasi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

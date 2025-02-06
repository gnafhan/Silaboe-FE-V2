@extends('layouts.homelayouts')
@section('content')
@php 
    use Illuminate\Support\Str;
@endphp
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
                    width="18" height="18" fill="none" viewBox="0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </div>

            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-md text-blue-500">Reservasi Inventaris</button>
            </div>
        </div>

        <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-4"></div>
        <div class="py-4">
            <div class=" lg:text-4xl text-2xl font-bold text-[#628F8E] lg:mb-4 mb-4">Reservasi Inventaris</div>

        </div>

        <div class="flex flex-col">
            <div class=" my-8 bg-white flex">
                <div class="overflow-x-auto md:overflow-x-auto rounded-2xl shadow-xl">
                    <table class="w-full">
                        <thead class="bg-[#F8F7FC] border-b-2 border-gray-200">
                            <tr>
                                <th
                                    class="py-6 px-32 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Jenis Inventaris
                                </th>
                                <th
                                    class="py-6 px-12 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    No Id
                                </th>
                                <th
                                    class="py-6 px-12 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Informasi
                                </th>
                                <th
                                    class="py-6 px-12 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center border-r border-gray-200">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @if($selectedInventories->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center py-8">
                                        <p class="text-lg text-gray-700">Tidak ada inventaris yang dipilih.</p>
                                    </td>
                                </tr>
                            @else
                                @foreach($selectedInventories as $inventory)
                                <tr class="bg-[#F8F7FC]">
                                    <td
                                        class="py-4 px-8 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ $inventory['item_name'] }}
                                    </td>
                                    <td
                                        class="py-4 px-8 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ $inventory['no_item'] }}
                                    </td>
                                    <td
                                        class="py-4 px-8 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                        {{ $inventory['information'] }}
                                    </td>
                                    <td
                                        class="py-4 px-8 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200 flex justify-center">
                                        <form action="{{ route('removeSelectedItem', ['selected_items' => request()->query('selected_items')]) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="item_id" value="{{ $inventory['id'] }}">
                                            <button type="submit" class="focus:outline-none">
                                                <img src="{{ asset('image/Vector.png') }}" class="h-6 w-6" alt="trash">
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-row gap-4 mb-16 justify-start ">
                <a href="{{ Route('inventaris.login') }}" type="submit"
                    class="text-white bg-[#F5CD51] hover:bg-[#86702e] focus:ring-4 focus:outline-none focus:ring-blue-300 font-reguler rounded-md lg:text-md md:text-md text-sm w-max-xl  lg:w-max-auto md:w-max-auto lg:px-4 lg:py-3.5 px-4 py-3 text-center dark:bg-[#F5CD51] ">Tambahkan
                    Inventaris</a>
                @if($selectedInventories->isEmpty())
                    <a href="#" class="text-white bg-[#499DBC] opacity-50 cursor-not-allowed focus:ring-4 focus:outline-none focus:ring-blue-300 font-reguler rounded-md lg:text-md md:text-md text-sm w-max-xl lg:w-max-auto md:w-max-auto lg:px-4 lg:py-3.5 px-4 py-3 text-center dark:bg-[#499DBC]">Ajukan
                        Reservasi</a>
                @else
                    <a href="{{ route('formreservasiinventaris.login', ['selected_items' => request()->query('selected_items')]) }}" class="text-white bg-[#499DBC] hover:bg-[#2c6b81] focus:ring-4 focus:outline-none focus:ring-blue-300 font-reguler rounded-md lg:text-md md:text-md text-sm w-max-xl lg:w-max-auto md:w-max-auto lg:px-4 lg:py-3.5 px-4 py-3 text-center dark:bg-[#499DBC]">Ajukan
                        Reservasi</a>
                @endif
            </div>
        </div>
    </section>
@endsection

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
    <div class="bg-[rgba(237,245,245,1)] ">
        <!-- Main Content -->
        <div class="flex-1 lg:mx-8  mx-12  py-8 flex-col flex lg:gap-4 md:gap-4 gap-16">
            <!-- Navbar -->
            <div class="inline-flex flex-col md:flex-row lg:inline-flex space-y-2 md:space-y-0 md:space-x-4 items-center justify-between h-16 p-4 text-black">
                <form action="{{ route('laboratorium.admin') }}" method="GET" class="w-full md:w-auto lg:w-auto flex">
                    <input type="text" name="search" placeholder="Cari laboratorium disini..."
                        class="shadow-md px-6 py-3 rounded-xl bg-[rgba(98,143,142,0.2)] text-black border w-full lg:text-xl"
                        value="{{ request('search') }}">
                    <button type="submit"
                        class="ml-2 bg-[#628F8E] text-white px-4 py-2 rounded-lg hover:bg-[#608B8A] shadow-md">
                        Cari
                    </button>
                </form>
                <div
                    class=" hover:scale-105 shadow-md flex flex-row gap-2 items-center w-full bg-[#628F8E] lg:px-8 lg:py-3 p-2 lg:rounded-xl  hover:bg-[#608B8A] md:w-auto lg:w-auto justify-center rounded-md">
                    <a href="{{ Route('laboratoriumtambah.admin') }}"
                        class=" font-medium lg:text-xl  text-md text-white  flex items-center">
                        Tambah Lab
                        <svg width="14" height="14" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ml-2">
                            <path d="M18 10.2857H10.2857V18H7.71429V10.2857H0V7.71429H7.71429V0H10.2857V7.71429H18V10.2857Z"
                                fill="#FCFCFC" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Content -->

            <div class="lg:p-4 md:p-4 mt-2 px-4">
                <div class="grid gap-8">
                    <!-- Card 1 -->
                    @foreach ($laboratoriums as $laboratorium)
                        <a href="{{ Route('laboratoriumdetail.admin', $laboratorium['id']) }}"
                            class="bg-[rgba(98,143,142,0.2)] lg:rounded-2xl rounded-3xl rounded-l-3xl shadow p-0 flex flex-col md:flex-row items-start md:items-stretch">
                            <div class="w-full md:w-1/3 ">
                                <img src="{{ asset('image/laboratoriumimage.png') }}"
                                    class="rounded-3xl w-full h-full object-cover" alt="Flowbite Logo" />
                            </div>
                            <div class="ml-0 md:ml-4 mt-8 md:mt-0 flex-1 flex flex-col lg:flex-row justify-between">
                                <div class="flex flex-col lg:m-8 ">
                                    <div class=" w-fit lg:mb-4 md:mb-4 mb-1 mx-4 md:mt-4">
                                        <h3 class="text-xl lg:text-2xl font-bold mb-2">{{ $laboratorium['name'] }}</h3>
                                        <div class="border-b-4 border-yellow-500 w-full"></div>
                                    </div>


                                    <div class="flex lg:flex-row flex-col m-4 md:mx-4 md:mt-2 ">
                                        <p class="text-gray-600 text-sm lg:text-md font-medium md:text-base lg:mr-20 mb-4 ">
                                            {{ $laboratorium['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2  md:mt-0 lg:ml-4 font-semibold lg:mt-8 lg:mr-8">
                                <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                            </div>
                        </a>
                    @endforeach

                    @if (Session::has('message'))
                    <script>
                        swal({
                            title: "{{ Session::get('alert-type') == 'success' ? 'Success' : 'Error' }}",
                            text: "{{ Session::get('message') }}",
                            icon: "{{ Session::get('alert-type') == 'success' ? 'success' : 'error' }}",
                            button: "Ok",
                        });
                    </script>
                    @endif

                    <!-- Card 4 -->

                </div>
            </div>

        </div>
    </div>
@endsection

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
    <!-- Main Content -->
    <div class="flex-1 lg:px-20 px-12  py-8 flex-col flex lg:gap-4 md:gap-4 gap-16   w-full">
        <!-- Navbar -->
        <div
            class="inline-flex flex-col md:flex-row lg:inline-flex space-y-2 md:space-y-0 md:space-x-4 items-center justify-between h-16 p-4 text-black">
            <input type="text" placeholder="Cari inventaris disini..."
                class="shadow-md px-6 py-3 rounded-xl bg-[rgba(98,143,142,0.2)] text-black border w-full md:w-auto lg:w-auto lg:text-xl">
        </div>

        <!-- Content -->
        <div class="lg:p-4 md:p-4 mt-2 px-4">
            <div class="grid gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-[rgba(98,143,142,0.2)] lg:rounded-2xl rounded-3xl rounded-l-3xl shadow p-0 flex flex-col md:flex-row items-start md:items-stretch">
                    <div class="w-full md:w-1/3 ">
                        <img src="{{ asset('image/laboratoriumimage.png') }}" class="rounded-3xl w-full h-full object-cover"
                            alt="Flowbite Logo" />
                    </div>
                    <div class="ml-0 md:ml-4 mt-8 md:mt-0 flex-1 flex flex-col lg:flex-row justify-between">
                        <div class="flex flex-col lg:m-6 ">
                            <div class=" w-fit lg:mb-4 md:mb-4 mb-1 mx-4 md:mt-4">
                                <h3 class="text-xl lg:text-2xl font-bold mb-2">Laboratorium HU104</h3>
                                <div class="border-b-4 border-yellow-500 w-full"></div>
                            </div>


                            <div class="flex lg:flex-row flex-col m-4 md:mx-4 md:mt-2 ">
                                <p class="text-gray-600 text-sm lg:text-lg font-medium md:text-base lg:mr-20 mb-4 ">
                                    lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe
                                    tempore ipsum. adipisicing elit. Aut saepe tempore ipsum. lorem Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                                    adipisicing elit. Aut saepe tempore ipsum. lorem Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Aut saepe tempore ipsum................
                                </p>

                                <div class="flex flex-col gap-2  md:mt-0 lg:ml-4 font-semibold">
                                    <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                    <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                    <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-[rgba(98,143,142,0.2)] lg:rounded-2xl rounded-3xl rounded-l-3xl shadow p-0 flex flex-col md:flex-row items-start md:items-stretch">
                    <div class="w-full md:w-1/3 ">
                        <img src="{{ asset('image/laboratoriumimage.png') }}" class="rounded-3xl w-full h-full object-cover"
                            alt="Flowbite Logo" />
                    </div>
                    <div class="ml-0 md:ml-4 mt-8 md:mt-0 flex-1 flex flex-col lg:flex-row justify-between">
                        <div class="flex flex-col lg:m-6 ">
                            <div class=" w-fit lg:mb-4 md:mb-4 mb-1 mx-4 md:mt-4">
                                <h3 class="text-xl lg:text-2xl font-bold mb-2">Laboratorium HU104</h3>
                                <div class="border-b-4 border-yellow-500 w-full"></div>
                            </div>


                            <div class="flex lg:flex-row flex-col m-4 md:mx-4 md:mt-2 ">
                                <p class="text-gray-600 text-sm lg:text-lg font-medium md:text-base lg:mr-20 mb-4 ">
                                    lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe
                                    tempore ipsum. adipisicing elit. Aut saepe tempore ipsum. lorem Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                                    adipisicing elit. Aut saepe tempore ipsum. lorem Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Aut saepe tempore ipsum................
                                </p>

                                <div class="flex flex-col gap-2  md:mt-0 lg:ml-4 font-semibold">
                                    <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                    <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                    <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-[rgba(98,143,142,0.2)] lg:rounded-2xl rounded-3xl rounded-l-3xl shadow p-0 flex flex-col md:flex-row items-start md:items-stretch">
                    <div class="w-full md:w-1/3 ">
                        <img src="{{ asset('image/laboratoriumimage.png') }}" class="rounded-3xl w-full h-full object-cover"
                            alt="Flowbite Logo" />
                    </div>
                    <div class="ml-0 md:ml-4 mt-8 md:mt-0 flex-1 flex flex-col lg:flex-row justify-between">
                        <div class="flex flex-col lg:m-6 ">
                            <div class=" w-fit lg:mb-4 md:mb-4 mb-1 mx-4 md:mt-4">
                                <h3 class="text-xl lg:text-2xl font-bold mb-2">Laboratorium HU104</h3>
                                <div class="border-b-4 border-yellow-500 w-full"></div>
                            </div>


                            <div class="flex lg:flex-row flex-col m-4 md:mx-4 md:mt-2 ">
                                <p class="text-gray-600 text-sm lg:text-lg font-medium md:text-base lg:mr-20 mb-4 ">
                                    lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe
                                    tempore ipsum. adipisicing elit. Aut saepe tempore ipsum. lorem Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum.
                                    adipisicing elit. Aut saepe tempore ipsum. lorem Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Aut saepe tempore ipsum................
                                </p>

                                <div class="flex flex-col gap-2  md:mt-0 lg:ml-4 font-semibold">
                                    <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                    <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                    <button class="bg-[#628F8E] px-4 py-2 rounded-md shadow text-white">Rendering</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->

            </div>
        </div>
    </div>
@endsection

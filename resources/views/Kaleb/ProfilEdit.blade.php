@extends('layouts.AdminLayouts')
@section('content')
    <div class="flex-1 lg:mx-20 mx-6 py-8 flex-col flex lg:gap-4 md:gap-4 gap-2">

        <div class="p-4 rounded-xl w-full  mx-auto">
            <h1 class="text-2xl font-semibold text-black mb-6">Edit Profil</h1>
            <div class="flex flex-col md:flex-row justify-start items-center mb-6 space-y-4 md:space-y-0 md:space-x-6">
                <div class="flex flex-col items-center">
                    <h2 class="text-lg font-bold text-balck mb-2 ">Foto Profil</h2>
                    <div class="relative">
                        <img src="{{ asset('image/Profile.png') }}" alt="foto profil"
                            class="w-24 h-24 rounded-full object-cover">
                        <button class="absolute bottom-0 right-0 bg-teal-500 rounded-full p-2">
                            <svg width="16" height="16" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.58033 1.0643C10.0253 0.61926 10.6288 0.369203 11.2581 0.369141C11.8874 0.369078 12.491 0.619016 12.9361 1.06397C13.3811 1.50892 13.6312 2.11245 13.6312 2.74177C13.6313 3.37109 13.3813 3.97466 12.9364 4.4197L12.3449 5.01187L8.98948 1.65581L9.58033 1.0643ZM8.28657 2.35938L1.65535 8.98994C1.38581 9.2592 1.19641 9.59807 1.10827 9.96871L0.382151 13.0204C0.36249 13.1031 0.364333 13.1894 0.387505 13.2711C0.410676 13.3529 0.454403 13.4273 0.514515 13.4874C0.574627 13.5474 0.64912 13.591 0.730889 13.6141C0.812658 13.6372 0.898977 13.639 0.981614 13.6192L4.03264 12.8924C4.40353 12.8044 4.74263 12.615 5.01207 12.3453L11.642 5.71478L8.28657 2.35938Z"
                                    fill="#FCFCFC" />
                            </svg>

                        </button>
                    </div>
                </div>
            </div>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 ">
                    <div>
                        <label for="first-name" class="block text-gray-700 font-bold text-lg">Nama Depan</label>
                        <input type="text" id="first-name" name="first-name" placeholder="ex: shakitra"
                            class=" bg-[rgba(98,143,142,0.1)]  mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-[#4C8F8B] focus:border-[#4C8F8B]">
                    </div>
                    <div>
                        <label for="last-name" class="block text-gray-700 font-bold text-lg">Nama Belakang</label>
                        <input type="text" id="last-name" name="last-name" placeholder="ex: Tamara"
                            class=" bg-[rgba(98,143,142,0.1)]  mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-[#4C8F8B] focus:border-[#4C8F8B]">
                    </div>
                </div>
                <div class="mb-6 ">
                    <label for="username" class="block text-gray-700 font-bold text-lg">Username</label>
                    <input type="text" id="username" name="username" placeholder="ex: Tara123"
                        class="bg-[rgba(98,143,142,0.1)]  mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-[#4C8F8B] focus:border-[#4C8F8B]">
                </div>
                <div class="flex justify-start space-x-4 mt-24">
                    <button type="button"
                        class="bg-[#D46857] text-white py-2 px-6 rounded-xl hover:bg-red-600 font-medium">Cancel</button>
                    <button type="submit"
                        class="bg-[#4C8F8B] text-white py-2 px-6 rounded-xl hover:bg-teal-500 font-medium">Submit</button>
                </div>
            </form>
        </div>`
    </div>
@endsection

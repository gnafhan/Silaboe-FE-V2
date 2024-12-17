@extends('layouts.AdminLayouts')
@section('content')
    <header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6 sticky w-full top-0">
        <h2 class="text-2xl font-semibold">Profil</h2>
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
    <div class="flex-1 lg:mx-12 mx-12 py-8 flex-col flex lg:gap-4 md:gap-4 gap-2">
        <div class="bg-[rgba(98,143,142,0.2)] p-6 rounded-xl w-full lg:mx-auto shadow-lg">
            <div
                class="flex flex-col md:flex-row lg:justify-between md:justify-between justify-center  items-center mb-6 space-y-4 md:space-y-0">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('image/Profile.png') }}" alt="foto profil"
                        class="w-16 h-16 rounded-full object-cover">
                    <div>
                        <h2 class="text-2xl font-semibold text-black">Maritza Angel</h2>
                        <p class="text-md font-semibold text-gray-600">Admin</p>
                    </div>
                </div>
                <a href="{{ Route('profiledit.admin') }}"
                    class="flex items-center  space-x-2 bg-[#4C8F8B] text-white py-2 lg:px-7 md:px-6 px-10 rounded-2xl hover:bg-green-900 lg:text-lg text-md font-medium">
                    <span>Edit</span>
                    <svg width="16" height="16" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5011 0.943395C13.1049 0.339434 13.9239 8.43992e-05 14.778 1.5741e-08C15.632 -8.43678e-05 16.4511 0.339103 17.0551 0.942945C17.659 1.54679 17.9984 2.36582 17.9985 3.21986C17.9986 4.07391 17.6594 4.89301 17.0555 5.49697L16.2528 6.3006L11.6992 1.74612L12.5011 0.943395ZM10.7453 2.70093L1.74616 11.6992C1.38038 12.0646 1.12334 12.5245 1.00373 13.0275L0.0183183 17.1689C-0.00836275 17.2811 -0.00586121 17.3982 0.0255845 17.5091C0.0570302 17.6201 0.116371 17.7211 0.197949 17.8026C0.279526 17.8841 0.380619 17.9433 0.491587 17.9746C0.602555 18.0059 0.719698 18.0083 0.831843 17.9815L4.97236 16.9952C5.47568 16.8757 5.93588 16.6187 6.30153 16.2528L15.2989 7.25451L10.7453 2.70093Z"
                            fill="#FCFCFC" />
                    </svg>
                </a>
            </div>
            <hr class="my-4 border-gray-400">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h3 class="text-lg font-semibold text-gray-500">Nama Depan</h3>
                    <p class="text-xl text-black font-semibold">Maritza</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-500">Nama Akhir</h3>
                    <p class="text-xl text-black font-semibold">Angel</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-500">Alamat Email</h3>
                    <p class="text-xl text-black font-semibold break-words">maritzaangelinaazzahra@mail.ugm.ac.id</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-500">Username</h3>
                    <p class="text-xl text-black font-semibold">maritzaangel</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-500">Role</h3>
                    <p class="text-xl text-black font-semibold">Admin</p>
                </div>
            </div>
        </div>
    </div>
@endsection

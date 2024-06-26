@php
    use Illuminate\Support\Facades\Request;
@endphp

<nav class="bg-white border-gray-200 dark:bg-[#4C8F8B]">
    <div class="max-w-screen-2.5xl flex flex-wrap items-center justify-between mx-auto p-4 px-8">
        <a href="{{ route('homepage.login') }}" class="flex items-center space-x-2 rtl:space-x-reverse flex-row">
            <img src="{{ asset('image/logo.png') }}" class="h-10 lg:h-24" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">
                <div class="flex flex-col  text-sm md:text-md lg:text-lg font-normal">
                    <div class="">Sistem Informasi</div>
                    <div class="">Teknologi Rekayasa Perangkat Lunak</div>
                    <div class="">Universitas Gadjah Mada</div>
                </div>
            </span>
        </a>

        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <div class="flex flex-row gap-4">
                <a href={{ route('login') }} type="button"
                    class=" bg-white px-6  py-1.5 rounded-md items-center justify-center text-black">
                    Login
                </a>


            </div>

            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                    <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                </div>


            </div>

            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400  "
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white bg-[#4C8F8B] ">
                <li>
                    <a href="{{ route('about.login') }}"
                        class=" block py-2 px-3 rounded md:p-0 {{ Request::routeIs('about.login') ? 'text-yellow-500 ' : 'text-lg md:text-md  md:hover:bg-transparent md:hover:text-yellow-500 text-white md:dark:hover:text-yellow-500 dark:hover:text-yellow-500  md:dark:hover:bg-transparent ' }}"
                        aria-current="page">ABOUT US</a>
                </li>
                <li>
                    <a href="{{ route('datasoftware.login') }}"
                        class="block py-2 px-3 rounded md:p-0 {{ Request::routeIs('datasoftware.login') ? 'text-yellow-500 ' : '  text-lg md:text-md md:hover:bg-transparent md:hover:text-yellow-500 text-white md:dark:hover:text-yellow-500 dark:hover:bg-white hover:text-gray-500 md:dark:hover:bg-transparent ' }}">DATA
                        SOFTWARE</a>
                </li>
                <li>
                    <a href="{{ route('inventaris.login') }}"
                        class="block py-2 px-3 rounded md:p-0 {{ Request::routeIs('inventaris.login') ? 'text-yellow-500 ' : ' text-lg md:text-md md:hover:bg-transparent md:hover:text-yellow-500 text-white md:dark:hover:text-yellow-500 dark:hover:bg-white hover:text-gray-500 md:dark:hover:bg-transparent dark:border-gray-700' }}">INVENTARIS</a>
                </li>
                <li>
                    <a href="{{ route('laboratorium.login') }}"
                        class="block py-2 px-3 rounded md:p-0 
                              {{ Request::routeIs('login/landingpage/laboratorium*') ? 'text-yellow-500' : ' text-lg md:text-md md:hover:bg-transparent md:hover:text-yellow-500 text-white md:dark:hover:text-yellow-500 hover:bg-white hover:text-gray-500 md:dark:hover:bg-transparent dark:border-gray-700' }}">
                        LABORATORIUM
                    </a>
                </li>

            </ul>
        </div>


    </div>
</nav>



{{-- <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul> --}}


{{-- <nav class="border-gray-200 bg-[#4C8F8B] dark:bg-[#4C8F8B] dark:border-gray-700 sticky top-0 z-50">
    <div class="max-w-screen-3xl flex flex-wrap items-center justify-between mx-auto p-4 lg:px-16 lg:py-4 ">
        <a href="{{ route('homepage.login') }}" class="flex items-center space-x-2 rtl:space-x-reverse flex-row">
            <img src="{{ asset('image/logo.png') }}" class="h-14 lg:h-32" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                <div class="flex flex-col text-xs md:text-md lg:text-lg font-normal">
                    <div class="">Sistem Informasi</div>
                    <div class="">Teknologi Rekayasa Perangkat Lunak</div>
                    <div class="">Universitas Gadjah Mada</div>
                </div>
            </span>
        </a>

        <div class="flex flex-row items-center md:space-x-8 lg:md:space-x-14 ">
            <button data-collapse-toggle="navbar-solid-bg" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:gray-100 focus:outline-none focus:ring-2 focus:ring-gray-50 dark:text-white dark:focus:ring-gray-600"
                aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 lg:space-x-24  rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="{{ route('about.login') }}"
                            class="block md:text-md lg:text-lg font-normal  py-2 px-3 md:p-0 text-white  rounded md:bg-transparent lg:space-x-12 md:text-blue-700 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent md:dark:hover:text-yellow-300"
                            aria-current="page">ABOUT US</a>
                    </li>
                    <li>
                        <a href="{{ route('datasoftware.login') }}"
                            class="block md:text-md lg:text-lg font-normal py-2 px-3 md:p-0 text-white rounded hover:bg-gray-100 md:hover:bg-transparent lg:space-x-12 md:border-0 md:hover:text-white dark:text-white md:dark:hover:text-yellow-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">DATA
                            SOFTWARE</a>
                    </li>
                    <li>
                        <a href="{{ route('inventaris.login') }}"
                            class="block md:text-md lg:text-lg font-normal  py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-white md:hover:bg-transparent md:border-0 md:hover:text-white dark:text-white md:dark:hover:text-text-yellow-300 dark:hover:bg-gray-700 dark:hover:text-yellow-300 md:dark:hover:bg-transparent">INVENTARIS</a>
                    </li>
                    <li>
                        <a href="{{ route('laboratorium.login') }}"
                            class="block md:text-md lg:text-lg font-normal  py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-white md:hover:bg-transparent md:border-0 md:hover:text-white dark:text-white md:dark:hover:text-text-yellow-300 dark:hover:bg-gray-700 dark:hover:text-yellow-300 md:dark:hover:bg-transparent">LABORATORIUM</a>
                    </li>


                </ul>
            </div>

            <svg width="28" height="28" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.66667 7.58333C8.66667 6.43406 9.12321 5.33186 9.93587 4.5192C10.7485 3.70655 11.8507 3.25 13 3.25C14.1493 3.25 15.2515 3.70655 16.0641 4.5192C16.8768 5.33186 17.3333 6.43406 17.3333 7.58333C17.3333 8.7326 16.8768 9.83481 16.0641 10.6475C15.2515 11.4601 14.1493 11.9167 13 11.9167C11.8507 11.9167 10.7485 11.4601 9.93587 10.6475C9.12321 9.83481 8.66667 8.7326 8.66667 7.58333ZM8.66667 14.0833C7.23008 14.0833 5.85233 14.654 4.8365 15.6698C3.82068 16.6857 3.25 18.0634 3.25 19.5C3.25 20.362 3.59241 21.1886 4.2019 21.7981C4.8114 22.4076 5.63805 22.75 6.5 22.75H19.5C20.362 22.75 21.1886 22.4076 21.7981 21.7981C22.4076 21.1886 22.75 20.362 22.75 19.5C22.75 18.0634 22.1793 16.6857 21.1635 15.6698C20.1477 14.654 18.7699 14.0833 17.3333 14.0833H8.66667Z"
                    fill="white" />
            </svg>

        </div>
    </div>
</nav>













 --}}

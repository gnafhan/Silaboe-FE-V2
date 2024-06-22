@extends('layouts.homelayouts')
@section('content')
    <section class="lg:mx-24 md:mx-6 mx-4 bg-white flex flex-col">
        <div class="flex flex-col lg:flex-row mt-10 items-start justify-start lg:space-x-2">
            <div class="flex items-center space-x-2">
                <a href="{{ route('homepage.login') }}" class="lg:text-lg text-sm md:text-md">Beranda</a>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </div>

            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-sm md:text-md">Laboratorium</button>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </div>

            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-sm md:text-md"> Laboratorium Teknologi Rekayasa Perangkat Lunak</button>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </div>

            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-sm md:text-md text-blue-400 ">Laboratorium HU 104</button>
                <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>


            </div>
            <div class="flex items-center space-x-2">
                <button class="lg:text-lg text-md text-blue-400 "> Reservasi Laboratorium HU 104</button>



            </div>

        </div>
        <div class="border-b-2 border-yellow-500 w-[100%] lg:mb-2 mt-4"></div>
        <div class="py-4">
            <div class=" lg:text-4xl text-2xl font-bold text-[#628F8E] lg:mb-4 lg:mb-4">Reservasi Laboratorium HU104</div>
        </div>
        <div class="flex flex-row items-center gap-4">
            <svg class="" width="16" height="16" viewBox="0 0 15 15" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.5 7.5C6.46875 7.5 5.58594 7.13281 4.85156 6.39844C4.11719 5.66406 3.75 4.78125 3.75 3.75C3.75 2.71875 4.11719 1.83594 4.85156 1.10156C5.58594 0.367188 6.46875 0 7.5 0C8.53125 0 9.41406 0.367188 10.1484 1.10156C10.8828 1.83594 11.25 2.71875 11.25 3.75C11.25 4.78125 10.8828 5.66406 10.1484 6.39844C9.41406 7.13281 8.53125 7.5 7.5 7.5ZM0 15V12.375C0 11.8438 0.136875 11.3556 0.410625 10.9106C0.684375 10.4656 1.0475 10.1256 1.5 9.89062C2.46875 9.40625 3.45312 9.04312 4.45312 8.80125C5.45312 8.55937 6.46875 8.43812 7.5 8.4375C8.53125 8.4375 9.54687 8.55875 10.5469 8.80125C11.5469 9.04375 12.5312 9.40688 13.5 9.89062C13.9531 10.125 14.3166 10.465 14.5903 10.9106C14.8641 11.3562 15.0006 11.8444 15 12.375V15H0Z"
                    fill="#F5CD51" />
            </svg>

            <div class=" text-sm lg:text-xl font-semibold text-black">Oleh : trpl.sv</div>
        </div>
        <div class="bg-[#F8E0E0] mt-8 relative">
            <div class="absolute top-0 left-0 border-l-8 border-[#D46857] h-full"></div>

            <div class="flex flex-col">
                <div class=" flex lg:px-20 lg:text-2xl text-xl lg:pt-8 p-6 font-semibold text-[#D46857]">Informasi</div>
                <div class="flex text-justify  lg:px-20 lg:pt-2 lg:pb-8 px-6 pb-6 text-sm lg:text-xl">Periksa kembali
                    laboratorium yang akan dipinjam sebelum mengajukan reservasi.
                </div>
            </div>
        </div>

        <div>
            <div class=" my-16 bg-white">
                <div class="overflow-x-auto md:overflow-x-auto rounded-lg shadow-xl">
                    <table class="w-full border border-[#CBCBCB]">
                        <thead class="bg-[#F8F7FC] border-b-2 border-gray-200">
                            <tr>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Laboratorium</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Tanggal Pengajuan
                                </th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Tanggal Mulai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Jam Mulai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Jam
                                    Selesai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Tanggal Selesai</th>
                                <th
                                    class="py-6 px-4 text-sm md:text-md lg:text-xl font-semibold tracking-wide text-[#628F8E] text-center  border-r border-gray-200">
                                    Keperluan</th>

                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="bg-[#F8F7FC]">
                                <td
                                    class="p-3
                                text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    Lab 1 RPL</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    29/04/2024
                                </td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    03/05/2024</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    08.00
                                </td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    20.00</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    03/05/2024</td>
                                <td
                                    class="p-3 text-sm md:text-base lg:text-base text-gray-700 whitespace-nowrap border-r border-gray-200">
                                    Pengganti Praktikum </td>

                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="flex flex-row gap-4 mb-16 justify-start ">
                <button type="submit"
                    class="text-white bg-[#499DBC] hover:scale-105 font-reguler rounded-md lg:text-md md:text-md text-sm w-max-xl lg:w-max-auto md:w-max-auto lg:px-6 lg:py-4 px-4 py-3 text-center dark:bg-[#499DBC] ">Ajukan
                    Reservasi</button>
            </div>
        </div>


        {{-- <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
            <span
                class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">Delivered</span>
        </td> --}}
        {{-- 
        <td class="p-3 text-md text-gray-700 whitespace-nowrap">
            <a href="#" class="font-bold text-hitam hover:underline">Meja PC Server</a>
        </td> --}}
    </section>


    <script>
     const daysTag = document.querySelector(".days"),
    currentDate = document.querySelector(".current-date"),
    prevNextIcon = document.querySelectorAll(".icons span");
    
    // getting new date, current year and month
    let date = new Date(),
    currYear = date.getFullYear(),
    currMonth = date.getMonth();
    
    // storing full name of all months in array
    const months = ["January", "February", "March", "April", "May", "June", "July",
                  "August", "September", "October", "November", "December"];
    
    const renderCalendar = () => {
        let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
        let liTag = "";
    
        for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
            liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
        }
    
        for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
            // adding active class to li if the current day, month, and year matched
            let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                         && currYear === new Date().getFullYear() ? "active" : "";
            liTag += `<li class="${isToday}">${i}</li>`;
        }
    
        for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
            liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
        }
        currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
        daysTag.innerHTML = liTag;
    }
    renderCalendar();
    
    prevNextIcon.forEach(icon => { // getting prev and next icons
        icon.addEventListener("click", () => { // adding click event on both icons
            // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
            currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
    
            if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
                // creating a new date of current year & month and pass it as date value
                date = new Date(currYear, currMonth, new Date().getDate());
                currYear = date.getFullYear(); // updating current year with new date year
                currMonth = date.getMonth(); // updating current month with new date month
            } else {
                date = new Date(); // pass the current date as date value
            }
            renderCalendar(); // calling renderCalendar function
        });
    });
    </script>
@endsection

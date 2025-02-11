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
    <div class="bg-[rgba(237,245,245,1)]">
        <section class="flex-1 lg:mx-12 mx-12 my-2 flex-col flex lg:gap-4 md:gap-4 gap-16">
            <div class="flex flex-col mt-12 ">
                <div class="font-bold text-xl lg:text-2xl flex mb-4">{{ $laboratoriums ['name'] }}</div>
                <img src="{{ env('API') . '/storage' .'/'. $laboratoriums['foto_laboratorium'] }}" alt="foto lab" />
                    <div class="text-sm lg:text-xl text-black text-justify lg:py-12 py-6">{{ $laboratoriums ['description'] }}
                </div>
                <div class="lg:text-xl text-lg font-bold text-[#628F8E] mb-4">Support : </div>
                <div class="flex flex-row gap-4 mb-8 ">
                    @foreach ($laboratoriumSupports as $support)
                        @if ($support['room_id'] == $laboratoriums['id'])
                        @foreach (['support_type_1', 'support_type_2', 'support_type_3', 'support_type_4'] as $supportType)
                        @if (!is_null($support[$supportType]))
                            <button
                                class=" bg-[#628F8E] lg:text-lg  text-sm  text-white lg:px-8 lg:py-2 py-2 px-6 rounded-md">{{ $support[$supportType] }}
                            </button>
                        @endif
                        @endforeach
                        @endif
                    @endforeach
                </div>

                {{-- bagian Button bawah  --}}
                <div class="flex flex-col-reverse md:flex-row md:items-center md:justify-between gap-4 py-4">
                    <a href="{{ Route('laboratorium.admin') }}"
                        class=" hover:scale-105 flex flex-row gap-4  items-center bg-[#628F8E] px-4 py-2 rounded-md hover:bg-[#608B8A] shadow-md justify-center w-full md:w-auto">
                        <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.27669 15.6804L1.74475 9.04361C1.60149 8.8988 1.52114 8.70333 1.52114 8.49964C1.52114 8.29594 1.60149 8.10047 1.74475 7.95566L8.27527 1.31889C8.41846 1.17319 8.49869 0.977077 8.49869 0.772795C8.49869 0.568512 8.41846 0.3724 8.27527 0.226696C8.20532 0.154947 8.12172 0.0979252 8.02939 0.0589924C7.93706 0.0200596 7.83787 0 7.73767 0C7.63747 0 7.53828 0.0200596 7.44595 0.0589924C7.35362 0.0979252 7.27002 0.154947 7.20007 0.226696L0.669549 6.86205C0.240424 7.2991 0 7.88713 0 8.49964C0 9.11214 0.240424 9.70017 0.669549 10.1372L7.20007 16.7726C7.27004 16.8445 7.35373 16.9017 7.44619 16.9408C7.53865 16.9799 7.63801 17 7.73838 17C7.83875 17 7.93811 16.9799 8.03057 16.9408C8.12303 16.9017 8.20672 16.8445 8.27669 16.7726C8.41987 16.6269 8.5001 16.4308 8.5001 16.2265C8.5001 16.0222 8.41987 15.8261 8.27669 15.6804Z"
                                fill="#FCFCFC" />
                        </svg>
                        <button class="font-medium text-md lg:text-lg text-white flex items-center">
                            Kembali
                        </button>
                    </a>

                    <div class="flex flex-row gap-4 w-full md:w-auto">
                        <a href="{{ Route('laboratoriumedit.admin', $laboratoriums ['id']) }}"
                            class="hover:scale-105 flex flex-row gap-3 items-center bg-[#499DBC] px-4 py-2 hover:bg-[#608B8A] justify-center w-full md:w-auto rounded-md">
                            <button class="font-medium text-md lg:text-lg text-white flex items-center">
                                Edit Lab
                            </button>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.5011 0.943395C13.1049 0.339434 13.9239 8.43992e-05 14.778 1.5741e-08C15.632 -8.43678e-05 16.4511 0.339103 17.0551 0.942945C17.659 1.54679 17.9984 2.36582 17.9985 3.21986C17.9986 4.07391 17.6594 4.89301 17.0555 5.49697L16.2528 6.3006L11.6992 1.74612L12.5011 0.943395ZM10.7453 2.70093L1.74616 11.6992C1.38038 12.0646 1.12334 12.5245 1.00373 13.0275L0.0183183 17.1689C-0.00836275 17.2811 -0.00586121 17.3982 0.0255845 17.5091C0.0570302 17.6201 0.116371 17.7211 0.197949 17.8026C0.279526 17.8841 0.380619 17.9433 0.491587 17.9746C0.602555 18.0059 0.719698 18.0083 0.831843 17.9815L4.97236 16.9952C5.47568 16.8757 5.93588 16.6187 6.30153 16.2528L15.2989 7.25451L10.7453 2.70093Z"
                                    fill="#FCFCFC" />
                            </svg>
                        </a>

                        <form action="{{ route('laboratoriumhapus.admin', $laboratoriums ['id']) }}" method="POST"
                            class="shadow-md flex flex-row gap-2 items-center bg-[#D46857] px-4 py-2 rounded-md hover:bg-[#608B8A] justify-center w-full md:w-auto">
                            @csrf
                            @method('delete')
                            <button type="submit" class="font-medium text-md lg:text-lg text-white flex items-center">
                                Hapus Lab
                            </button>
                            <svg width="15" height="18" viewBox="0 0 15 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.15385 1.2C0.847827 1.2 0.554342 1.32643 0.337954 1.55147C0.121566 1.77652 0 2.08174 0 2.4V3.6C0 3.91826 0.121566 4.22348 0.337954 4.44853C0.554342 4.67357 0.847827 4.8 1.15385 4.8H1.73077V15.6C1.73077 16.2365 1.9739 16.847 2.40668 17.2971C2.83945 17.7471 3.42642 18 4.03846 18H10.9615C11.5736 18 12.1605 17.7471 12.5933 17.2971C13.0261 16.847 13.2692 16.2365 13.2692 15.6V4.8H13.8462C14.1522 4.8 14.4457 4.67357 14.662 4.44853C14.8784 4.22348 15 3.91826 15 3.6V2.4C15 2.08174 14.8784 1.77652 14.662 1.55147C14.4457 1.32643 14.1522 1.2 13.8462 1.2H9.80769C9.80769 0.88174 9.68613 0.576516 9.46974 0.351472C9.25335 0.126428 8.95987 0 8.65385 0L6.34615 0C6.04013 0 5.74665 0.126428 5.53026 0.351472C5.31387 0.576516 5.19231 0.88174 5.19231 1.2H1.15385ZM4.61538 6C4.76839 6 4.91514 6.06321 5.02333 6.17574C5.13152 6.28826 5.19231 6.44087 5.19231 6.6V15C5.19231 15.1591 5.13152 15.3117 5.02333 15.4243C4.91514 15.5368 4.76839 15.6 4.61538 15.6C4.46238 15.6 4.31563 15.5368 4.20744 15.4243C4.09924 15.3117 4.03846 15.1591 4.03846 15V6.6C4.03846 6.44087 4.09924 6.28826 4.20744 6.17574C4.31563 6.06321 4.46238 6 4.61538 6ZM7.5 6C7.65301 6 7.79975 6.06321 7.90795 6.17574C8.01614 6.28826 8.07692 6.44087 8.07692 6.6V15C8.07692 15.1591 8.01614 15.3117 7.90795 15.4243C7.79975 15.5368 7.65301 15.6 7.5 15.6C7.34699 15.6 7.20025 15.5368 7.09205 15.4243C6.98386 15.3117 6.92308 15.1591 6.92308 15V6.6C6.92308 6.44087 6.98386 6.28826 7.09205 6.17574C7.20025 6.06321 7.34699 6 7.5 6ZM10.9615 6.6V15C10.9615 15.1591 10.9008 15.3117 10.7926 15.4243C10.6844 15.5368 10.5376 15.6 10.3846 15.6C10.2316 15.6 10.0849 15.5368 9.97667 15.4243C9.86847 15.3117 9.80769 15.1591 9.80769 15V6.6C9.80769 6.44087 9.86847 6.28826 9.97667 6.17574C10.0849 6.06321 10.2316 6 10.3846 6C10.5376 6 10.6844 6.06321 10.7926 6.17574C10.9008 6.28826 10.9615 6.44087 10.9615 6.6Z"
                                    fill="#FCFCFC" />
                            </svg>
                        </form>
                    </div>
                </div>




        </section>
    </div>
@endsection

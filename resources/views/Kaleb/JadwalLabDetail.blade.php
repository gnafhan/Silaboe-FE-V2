@extends('layouts.AdminLayouts')
@section('content')
    <div class="flex-1 lg:mx-20 mx-12  py-8 flex-col flex lg:gap-4 md:gap-4 gap-2">
        <div class="flex flex-col gap-4">
            <div class="lg:text-2xl md:text-xl text-lg font-bold text-black">
                Laboratorium HU 105
            </div>

            <div class="overflow-x-auto rounded-2xl">
                <table class="min-w-full bg-white rounded ">
                    <thead class="bg-[rgba(98,143,142,0.2)] text-black">
                        <tr>
                            <th class="py-3 px-4 text-left border-b-2 border-gray-300 text-lg">Jam Mulai</th>
                            <th class="py-3 px-4 text-left border-b-2 border-gray-300 text-lg">Jam Selesai</th>
                            <th class="py-3 px-4 text-left border-b-2 border-gray-300 text-lg">Penanggung Jawab</th>
                            <th class="py-3 px-4 text-left border-b-2 border-gray-300 text-lg">Keperluan</th>
                        </tr>
                    </thead>
                    <tbody class="text-black bg-[rgba(98,143,142,0.2)]  ">
                        <!-- Repeat this block for each lab schedule -->
                        <tr class="border-t">
                            <td class="py-3 px-4 text-lg">07.16
                            </td>
                            <td class="py-3 px-4 text-lg">09.15</td>
                            <td class="py-3 px-4 text-lg">Dinar Nugroho Pratomo,
                                S.Lom., M.IM., M.Cs.</td>
                            <td class="py-3 px-4 text-lg">Sosialisasi Mata Kuliah Pemrograman Website 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex md:flex-row md:items-center md:justify-between gap-4 py-4">
                <div
                    class="flex flex-row gap-4  items-center bg-[#628F8E] px-6 py-2 rounded-xl hover:bg-[#608B8A] shadow-md jutify-center md:w-auto">
                    <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.27669 15.6804L1.74475 9.04361C1.60149 8.8988 1.52114 8.70333 1.52114 8.49964C1.52114 8.29594 1.60149 8.10047 1.74475 7.95566L8.27527 1.31889C8.41846 1.17319 8.49869 0.977077 8.49869 0.772795C8.49869 0.568512 8.41846 0.3724 8.27527 0.226696C8.20532 0.154947 8.12172 0.0979252 8.02939 0.0589924C7.93706 0.0200596 7.83787 0 7.73767 0C7.63747 0 7.53828 0.0200596 7.44595 0.0589924C7.35362 0.0979252 7.27002 0.154947 7.20007 0.226696L0.669549 6.86205C0.240424 7.2991 0 7.88713 0 8.49964C0 9.11214 0.240424 9.70017 0.669549 10.1372L7.20007 16.7726C7.27004 16.8445 7.35373 16.9017 7.44619 16.9408C7.53865 16.9799 7.63801 17 7.73838 17C7.83875 17 7.93811 16.9799 8.03057 16.9408C8.12303 16.9017 8.20672 16.8445 8.27669 16.7726C8.41987 16.6269 8.5001 16.4308 8.5001 16.2265C8.5001 16.0222 8.41987 15.8261 8.27669 15.6804Z"
                            fill="#FCFCFC" />
                    </svg>
                    <button class="font-medium text-md lg:text-lg text-white flex items-center">
                        Kembali
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection

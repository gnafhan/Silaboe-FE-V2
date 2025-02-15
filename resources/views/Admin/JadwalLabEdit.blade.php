@extends('layouts.AdminLayouts')
@section('content')
<header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6 sticky w-full top-0">
        <h2 class="text-2xl font-semibold">Jadwal Lab</h2>
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
    <div class="bg-white ">
        <div class="flex-1 lg:mx-12 mx-12  py-8 flex-col flex lg:gap-4 md:gap-4 gap-2">

            <h1 class="text-2xl font-bold mb-2">Edit Jadwal</h1>

            <form action="{{ route('jadwallabedit.admin.Post', $jadwal['id']) }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="nama-laboratorium">Nama
                        Laboratorium</label>
                    <select
                        class="shadow-sm appearance-none border rounded-xl w-full lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                        id="nama-laboratorium" name="room_id" type="text" placeholder="ex: Laboratorium HU 105">
                        @foreach ($rooms as $room)
                            <option value="{{ $room['id'] }}" {{($room['id']) == $jadwal['room_id'] ? 'selected' : ''}}>{{ $room['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class=" w-full md:w-2/5 lg:w-1/5 px-2 mb-4 md:mb-0">
                        <label class="block text-gray-700 text-lg font-bold mb-2" for="jam-mulai">Jam Mulai</label>
                        <input
                            class="shadow appearance-none border rounded-xl  lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                            id="jam-mulai" name="start_time" type="time" placeholder="ex: 07.15" value="{{ \Carbon\Carbon::parse($jadwal['start_time'])->setTimezone(config('app.timezone'))->format('H:i') }}">
                    </div>
                    <div class="w-full md:w-2/5  lg:w-1/5 px-2">
                        <label class="block text-gray-700 text-lg font-bold mb-2" for="jam-selesai">Jam Selesai</label>
                        <input
                            class="shadow appearance-none border rounded-xl  lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                            id="jam-selesai" name="end_time" type="time" placeholder="ex: 12.15" value="{{ \Carbon\Carbon::parse($jadwal['end_time'])->setTimezone(config('app.timezone'))->format('H:i') }}">
                    </div>
                    <div class="w-full md:w-2/5  lg:w-1/5 px-2">
                        <label class="block text-gray-700 text-lg font-bold mb-2" for="date-picker">Tanggal</label>
                        <input type="date" id="date-picker" name="date" 
        class="shadow appearance-none border rounded-xl  lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
        value="{{ \Carbon\Carbon::parse($jadwal['start_time'])->toDateString() }}">
                    </div>
                    
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="penanggung-jawab">Penanggung
                        Jawab</label>
                    <input
                        class="shadow appearance-none border rounded-xl w-full lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                        id="penanggung-jawab" name="dosen" type="text" placeholder="Nama Penanggung Jawab" value="{{$jadwal['dosen']}}">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-lg font-bold mb-2 " for="mata-kuliah">Mata Kuliah</label>
                    <select
                        class="shadow appearance-none border rounded-xl w-full lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                        id="mata-kuliah" name="subject_id" type="text" placeholder="ex: Laboratorium HU 105">
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject['id'] }}" {{($subject['id']) == $jadwal['subject_id'] ? 'selected' : ''}}>{{ $subject['subject_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-lg font-bold mb-2 " for="keperluan">Keperluan</label>
                    <textarea
                        class="shadow appearance-none border rounded-xl w-full lg:py-4 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-[rgba(98,143,142,0.2)]"
                        id="keperluan" name="information" placeholder="ex: Laboratorium HU 105" rows="3">{{$jadwal['information']}}</textarea>
                </div>

                <div class="flex justify-start gap-4">
                    <a href="javascript:history.back()" type="button"
                        class="bg-[#D46857] text-white py-2 px-4 rounded-lg hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-500">Cancel</a>
                    <button type="submit"
                        class="bg-[#4C8F8B] text-white py-2 px-4 rounded-lg hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-500">Submit</button>
                </div>
            </form>




        </div>
    </div>
@endsection

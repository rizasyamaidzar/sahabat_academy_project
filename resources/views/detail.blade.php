@extends('layouts.main')
@section('container')
<section class="mx-20 my-8 ">
        <!-- start container -->
        <div class="container mx-auto mt-20">
            <h1 class="font-bold text-4xl text-center text-blue-950 mb-4">{{ $detail['nama'] }}</h1>
            <img src="{{ asset('storage/' . $detail->cover) }}" alt="" class="mx-auto w-[300px] delay-[300ms] duration-[600ms] taos:translate-x-[200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">
            <p class=" font-bold text-blue-950 text-center mb-10 mt-5 delay-[300ms] duration-[600ms] taos:translate-y-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="10">{{$detail['deskripsi']}}</p>

            <div class="grid grid-cols-3">
            @if(is_array($detail["img"]))
                @foreach($detail["img"] as $goal)
                <img src="{{ asset('storage/' . $goal) }}" alt="" class="w=[195px] h-[150px] md:w-[390px] md:h-[300px] delay-[300ms] duration-[600ms] taos:translate-x-[200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">
                @endforeach
            @endif
            </div>

            <!-- jadwal latihan -->
            <h2 class="font-bold text-4xl text-blue-950 mb-4 text-center mt-10">Jadwal Latihan</h2>
            <hr class="w-48 h-1 mx-auto my-4 bg-orange-500 border-0 rounded md:my-5">
            <ol class="relative border-s border-gray-200 dark:border-gray-700">                  
                 @foreach($detail->jadwal as $schedule)    
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $schedule->hari }}</h3>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $schedule->jam_mulai }} - {{ $schedule->jam_selesai }}</time>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{ $schedule->lokasi }}</p>
                </li>
                @endforeach
               
            </ol>
            <!-- end jadwal latihan -->
        </div>
        <!-- endcontainer -->

    </section>

@endsection

@extends('layouts.main')

@section('container')
<div class="container mx-auto mt-20">
    <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
        <button type="button" href="/galery" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-blue-500">All Categories</button>
        @foreach($detail as $d)
        <a href="/viewgalery/{{ $d->nama }}"> <button type="button" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3">
               {{ $d->nama }}
            </button></a>
        @endforeach
    </div>
    <div class="grid grid-cols-3 gap-4">
        @foreach($detail as $d)
        @foreach($d->dokumentasi as $b)
            @foreach($b->foto as $a)
                    <div>
                        <img class="max-w-full rounded-lg md:w-[390px] md:h-[300px] w-[195px] h-[150px]" src="../image/{{ $a }}" alt="">
                    </div>
            @endforeach
            @endforeach
        @endforeach
    </div>
</div>
@endsection

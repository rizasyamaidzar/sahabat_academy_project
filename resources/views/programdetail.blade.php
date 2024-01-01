

@extends('layouts.main')

@section('container')
<section class="mx-20 my-8 ">
        <div class="container mx-auto mt-20">
            <h1 class="font-bold text-4xl text-center text-blue-950 mb-4">Program</h1>
            <p class="text-blue-950 text-center mb-10 delay-[300ms] duration-[600ms] taos:translate-y-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="10">Menyediakan Program Pengembangan dan Identifikasi Bakat bola basket yang terkoordinasi dengan baik, konsisten, dan terkoordinasi untuk bola basket di Indonesia yang bertujuan untuk mencapai peningkatan besar dalam kualitas dan kinerja pemain, pelatih, dan tim di club Sahabat dan Negara Indonesia. Hal ini juga memberikan dasar untuk perkembangan semua anak sehingga dapat memberikan pengalaman bola basket yang positif bagi setiap anak yang berpartisipasi dalam olahraga Bola Basket..</p>
            @foreach($detail as $d)
            <!-- menampilkan program -->
            <div class="border rounded-lg shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mx-auto justify-between container p-10 ">
                <div class="text-blue-950 my-auto delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">
                <a href="/programdetail/{{ $d->nama }}"><h1 class="font-bold text-4xl mb-4">{{ $d->nama }}</h1></a>
                <p class="mb-2">{{ $d->deskripsi }} </p>
            <div class="ml-3">
                {!! $d->tujuan !!}
            </div>
            </div>
                <img src="{{ asset('storage/' . $d->cover)  }}" alt="" class="delay-[300ms] duration-[600ms] taos:translate-x-[200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">
            </div>
           <a href="/registrasi"><h1 class="bg-orange-500 text-white text-center font-bold rounded-lg text-xl mb-4 mx-3">Register</h1></a>
        </div>
        @endforeach

        </div>
    </section>

@endsection
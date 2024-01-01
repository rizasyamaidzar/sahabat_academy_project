@extends('admin.admin')
@section('conten')


<a class="mx-auto text-center block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $category->nama }}1</h5>
<p class="font-normal text-gray-700 ">{{ $category->keterangan }}</p>
</a>
<div class="grid grid-cols-1 lg:grid-cols-3">
        @foreach($berita as $b)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow m-2">
            <a href="#">
                <img class="rounded-t-lg" src="../image/{{ $b->cover }}" alt="" />
            </a>
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "> {{ $b->judul }} </h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "> {{ $b->tanggal }} </h5>
                <p class="mb-3 font-normal text-gray-700 line-clamp-2">{{ $b->deskripsi }}</p>
            </div>
        </div>
        @endforeach
    </div>

@endsection
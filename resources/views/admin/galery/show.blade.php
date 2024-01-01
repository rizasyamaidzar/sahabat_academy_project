@extends('admin.admin')
@section('conten')

<h2>{{  $galery->nama }}</h2>
<h2>{{  $galery->deskripsi }}</h2>

<button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    + Dokumentasi
</button>
@foreach($dokumentasi as $d)
<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    @foreach($d->foto as $ft)  
    <div>
        <a href="{{ $ft }}">
        <form action="/dokumentasiAdmin/{{ $ft  }}" method="post">
        @method('delete')
        @csrf
        <button onclick="return confirm('Are you sure?')">
            <svg class="h-4 w-4 text-red-500 mx-auto hover:w-6 hover:h-6 hover:text-red-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z" />
                <line x1="18" y1="9" x2="12" y2="15" />
                <line x1="12" y1="9" x2="18" y2="15" />
            </svg>
        </button>
        </form>
        </a>
        <img class="h-auto max-w-full rounded-lg" src="../image/{{ $ft }}" alt="">
        <img src="{{ asset('storage/' . $ft) }}" alt="">
    </div>
    @endforeach
</div>  
<!-- <h2>{{ $ft }}</h2> -->




<!-- FORM TAMBAH CATEGORY BERITA -->

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create New Category
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="POST" action="{{ route('dokumentasiAdmin.store')}}" class="p-4 md:p-5" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-12">
                    <div class="col-span-12">
                    <input type="hidden" name="galery_id" id="" value="{{ $galery->id }}">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Image</label>
                    <input class="@error('foto') is-invalid @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none " aria-describedby="user_avatar_help" id="foto" name="foto[]" type="file" multiple>   
                    <small class="text-yellow-400">Pilih beberapa foto dokumentasi yang akan diupload</small>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add Dokumentasi
                </button>
            </form>
        </div>
    </div>
</div> 
@endforeach
@endsection
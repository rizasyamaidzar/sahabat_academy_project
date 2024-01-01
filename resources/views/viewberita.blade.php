@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="grid grid-cols-6">
        <div class="md:col-span-5 col-span-4">
            <div class="flex flex-wrap mx-10 mt-20">
                <div class="w-full rounded-lg mx-auto my-2">
                <h1 class="text-orange-600 font-bold text-4xl">{{$berita->judul}}</h1>
                <img src="../image/{{ $berita->cover }}" class="w-full h-[250px] md:h-[500px]" alt="" />
                <h2 class="text-blue-950 font-bold">{{ $berita->tanggal }}</h2>
                <h2 class="text-grey font-italic ">{{ $berita->created_at->diffForHumans() }}</h2>
                <h1 class="text-orange-600 font-bold text-lg">{{$berita->category->nama}}</h1>               
                <p class="">{{ $berita->deskripsi }}</p>
                </div>

                <!-- isi artikel -->
                <ol class="relative border-s border-gray-200 dark:border-gray-700">   
                @foreach ($berita->foto as $d)
                @foreach($berita->isi_artikel as $s)
                    <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <img src="../image/{{ $d }}" class="" alt="" />
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">dklgs</time>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{ $s }}</p>
                </li>
                @endforeach
                @endforeach  
                </ol>
                <!-- endisiartikel -->
        </div>

        

        </div>


            <div class="col-span-2 md:col-span-1">
            <h2 class="text-xl font-bold mt-96 md:mt-[600px] text-center">News Post</h2>
            @foreach ($all as $view)
            <div class="max-w-sm bg-white my-2">
                <a href="/viewberita/{{ $view->judul }}">
                    <img class="rounded-t-lg" src="../image/{{ $view->cover }}" alt="" />
                </a>
                <div class="">
                    
                    <a href="#">
                        <h5 class="mb-2 text-sm md:text-lg font-bold tracking-tight text-gray-900 dark:text-white">{{ $view->judul }}</h5>
                        <h5 class="mb-2 text-sm tracking-tight dark:text-white text-orange-500">{{ $view->tanggal }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-3">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                   
                </div>
            </div>
            @endforeach
            <!-- start category -->
            <div class="category">
            <div class="text-center">
            <h2 class="text-xl font-bold mt-36">Category</h2>
            @foreach($category as $c)
            <a href="../berita/{{ $c->nama }}" class="m-1 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                {{ $c->nama }}
                
            </a>
            @endforeach
            </div>

            </div>
            <!-- end category -->
            </div>

        </div>

    <!-- related -->
    <h2 class="text-center font-bold text-4xl text-blue-950 mb-10">Related</h2>
    <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-80 overflow-hidden rounded-lg md:h-96">
            <!-- menampilkan data related --> 
            @foreach ($detail as $d)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"> 
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-10">
                <a href="../../viewberita/{{ $d->judul }}"><img src="../image/{{ $d->cover }}" class="mx-auto object-cover w-full rounded-t-lg h-32 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" alt="">    
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-blue-950 dark:text-white">{{ $d->judul }}</h5>
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-orange-600 dark:text-white">{{ $d->tanggal }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-3">{{ $d->deskripsi }}</p>
                    </div>
                </a>
                </a>
                </div>
              </div>
            @endforeach
        </div>
        <!-- end menampilkan data relate -->
        <!-- pagination related    -->
            <div class="flex justify-center items-center pt-4">
                <button type="button" class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="flex justify-center items-center h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <!-- end pagination related -->
        </div>
    <!-- endrelate -->

    </div>
@endsection
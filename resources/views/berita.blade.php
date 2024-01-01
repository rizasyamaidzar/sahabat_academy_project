@extends('layouts.main')

@section('container')
<section>
    <div class="container mx-auto delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">
      <h1 class="text-center font-bold text-4xl uppercase mt-20 my-5 text-blue-950">
        Kabar Sahabat News
      </h1>

      <!-- News 3 terbaru  -->
      <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-80 overflow-hidden rounded-lg md:h-96">
            <!-- menampilkan data related --> 
           
            @foreach ($news as $d)
            <div class="hidden  ease-in-out duration-300 " data-carousel-item>
                <div class="absolute block max-w-full h-auto "> 
                <a href="#" class="flex flex-col items-center bg-white  border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-10">
                <a href="../../viewberita/{{ $d->judul }}"><img src="../image/{{ $d->cover }}" class="mx-auto object-cover w-full rounded-t-lg h-32 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" alt="">    
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-blue-950 dark:text-white">{{ $d->judul }}</h5>
                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-blue-950 dark:text-white">{{ $d->category->nama }}</h5>
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


      <!-- end news 3 terbaru -->
      <h1 class="text-center font-bold text-4xl uppercase mt-20 my-5 text-blue-950">
        All Kabar Sahabat
      </h1>
      <!-- start all berita skip 3 terbaru -->
      
      <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
        <a type="button" href="/berita" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-blue-500">All Categories</a>
        
        @foreach($ct->unique('category.id') as $d)
        @if($d->category) <!-- Add null check here -->
        <a href="/berita/{{ $d->category->nama }} ">
            <button type="button" class="text-blue-700 mx-2 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center">
                {{ $d->category->nama }}
            </button>
        </a>
    @endif
        @endforeach
    </div>
      <!-- search judul -->
      <form action="/berita">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600">Search</button>
            </div>
        </form>
      <!-- end search judul -->
      
      <!-- start all sahabat -->
      <div class="flex flex-wrap mx-10 mt-5">
      @foreach ($detail as $b)  
      
        <div class="w-full bg-white shadow-lg lg:w-[520px] p-5 rounded-lg mx-auto my-2">
        <h2>{{ $b->category->nama }}</h2>
        <a href="viewberita/{{ $b->judul }}">  <img src="../image/{{ $b->cover }}" class="w-[485px] h-[185px]" alt="" />
          <h1 class="text-orange-600 font-bold text-lg">{{$b->judul}}</h1>
          <h2 class="text-blue-950 font-bold">{{ $b->tanggal }}</h2>
          <p class="line-clamp-3">{{ $b->deskripsi }}</p>
        </a>
        </div>
        @endforeach
    </div>
    <div class="flex items-center justify-center">
    {{ $detail->links() }}
</div>
    <!-- end all berita -->
    </div>
  </section>
@endsection
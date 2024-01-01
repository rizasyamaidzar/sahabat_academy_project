@extends('admin.admin')
@section('conten')


<div class="container">
   <h2 class="text-2xl md:text-4xl font-semibold">Selamat datang {{ $player->nama }}</h2>
   <h2 class="text-xl mb-5">Let's Explore and Learn</h2>
  <div class="grid grid-cols-2 gap-4 mb-4 bg-gradient-to-tl from-blue-300 to-orange-200 ">
    <!-- Jumlah Pemain Baru registrasi -->
    <div class="flex items-center justify-center rounded-xl text-white bg-gradient-to-tl from-purple-500 to-pink-400 ">
      <div class="flex-auto p-4">
        <div class="flex flex-wrap -mx-3">
          <div class="max-w-full px-3 lg:w-1/2 lg:flex-none my-auto mx-auto">
            <div class="flex flex-col h-full">
              <h5 class="font-bold text-2xl">Menunggu Verifikasi</h5>
              <p class="mb-5 text-2xl">200</p>
              <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="dashboard/verifikasi">
                View Register
                <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumlah Pemain baru registrasi -->


    <!-- Jumlah Semua Pemain -->
    <div class="flex items-center justify-center rounded-xl text-white bg-gradient-to-tl from-purple-500 to-pink-400 ">
      <div class="flex-auto p-4">
        <div class="flex flex-wrap -mx-3">
          <div class="max-w-full px-3 lg:w-1/2 lg:flex-none my-auto mx-auto">
            <div class="flex flex-col h-full">
              <h5 class="font-bold text-2xl">All Player</h5>
              <p class="mb-5 text-2xl">200</p>
              <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="dashboard/player">
                View Player
                <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Jumlah Semua Pemain -->


    <!-- Jumlah pemain percobaan -->
    <a href="dashboard/player/newcomers">
    <div class="flex items-center justify-center rounded bg-transparent shadow-xl">
      <div class="flex flex-col items-center py-10">
        <img class="w-14 h-14 mb-3 rounded-full shadow-lg " src="image/arya.png" alt="Bonnie image" />
       <h5 class="mb-1 text-xl font-medium text-gray-900 text-center">New Comers</h5>
        <span class="text-sm text-gray-500 text-center">Masa Pengenalan Player Baru</span>
        <span class="text-2xl font-bold text-blue-950 text-center">{{ $jumlah }} Player</span>
      </div>
    </div>
    </a>
    <!-- End Jumlah pemain percobaan -->

    <!-- Start Card List -->
    <a href="dashboard/program">
    <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden mt-4 shadow-lg transition duration-300 ease-in-out" style="background-image: url('image/Group 9.png">
      <div class="absolute inset-0 bg-black bg-opacity-50 transition duration-300 ease-in-out"></div>
      <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center">
        <div>
          <div class="text-white text-lg flex space-x-2 items-center">
            <div class="bg-white rounded-md p-2 flex items-center">
              <i class="fas fa-toggle-off fa-sm text-yellow-300"></i>
            </div>
            <p class="text-2xl font-bold">Programs</p>
          </div>
          <h3 class="text-white text-3xl mt-2 font-bold">
            120
          </h3>
        </div>
      </div>
    </div>
    <!-- End Card List -->
  </div>
  </a>

  <!-- Jumlah pemain per program -->

  <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-4 shadow-xl border-b-2">

  <a href="dashboard/player/prehoops">
  <div class="flex items-center justify-center h-24  bg-gradient-to-tl from-purple-500 to-pink-400 shadow-xl rounded-2xl bg-clip-border">
   <p class="text-2xl text-gray-400 dark:text-gray-500">
   <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
     <div class="flex-auto p-4">
       <div class="flex flex-row -mx-3">
         <div class="flex-none w-2/3 max-w-full px-3">
           <div>
             <p class="mb-0 font-sans text-sm font-semibold leading-normal">Elite</p>
             <h5 class="mb-0 font-bold">
               Player
               <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
             </h5>
           </div>
         </div>
         <div class="px-1 text-right basis-1/3">
           <div class="inline-block w-12 h-12 text-center rounded-lg ">
             <img src="image/Group 10.png" class="relative top-3.5" alt="">
           </div>
         </div>
       </div>
     </div>
   </div>
   </p>
</div>
</a>


<a href="dashboard/player/hoops">
<div class="flex items-center justify-center h-24  bg-gradient-to-tl from-purple-500 to-pink-400 shadow-xl rounded-2xl bg-clip-border">
   <p class="text-2xl text-gray-400 dark:text-gray-500">
   <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
     <div class="flex-auto p-4">
       <div class="flex flex-row -mx-3">
         <div class="flex-none w-2/3 max-w-full px-3">
           <div>
             <p class="mb-0 font-sans text-sm font-semibold leading-normal">Elite</p>
             <h5 class="mb-0 font-bold">
               Player
               <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
             </h5>
           </div>
         </div>
         <div class="px-1 text-right basis-1/3">
           <div class="inline-block w-12 h-12 text-center rounded-lg ">
             <img src="image/Group 10.png" class="relative top-3.5" alt="">
           </div>
         </div>
       </div>
     </div>
   </div>
   </p>
</div>
</a>

<div class="flex items-center justify-center h-24  bg-gradient-to-tl from-purple-500 to-pink-400 shadow-xl rounded-2xl bg-clip-border">
   <p class="text-2xl text-gray-400 dark:text-gray-500">
   <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
     <div class="flex-auto p-4">
       <div class="flex flex-row -mx-3">
         <div class="flex-none w-2/3 max-w-full px-3">
           <div>
             <p class="mb-0 font-sans text-sm font-semibold leading-normal">Elite</p>
             <h5 class="mb-0 font-bold">
               Player
               <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
             </h5>
           </div>
         </div>
         <div class="px-1 text-right basis-1/3">
           <div class="inline-block w-12 h-12 text-center rounded-lg ">
             <img src="image/Group 10.png" class="relative top-3.5" alt="">
           </div>
         </div>
       </div>
     </div>
   </div>
   </p>
</div>

<div class="flex items-center justify-center h-24  bg-gradient-to-tl from-purple-500 to-pink-400 shadow-xl rounded-2xl bg-clip-border">
   <p class="text-2xl text-gray-400 dark:text-gray-500">
   <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
     <div class="flex-auto p-4">
       <div class="flex flex-row -mx-3">
         <div class="flex-none w-2/3 max-w-full px-3">
           <div>
             <p class="mb-0 font-sans text-sm font-semibold leading-normal">Elite</p>
             <h5 class="mb-0 font-bold">
               Player
               <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
             </h5>
           </div>
         </div>
         <div class="px-1 text-right basis-1/3">
           <div class="inline-block w-12 h-12 text-center rounded-lg ">
             <img src="image/Group 10.png" class="relative top-3.5" alt="">
           </div>
         </div>
       </div>
     </div>
   </div>
   </p>
</div>

<div class="flex items-center justify-center h-24  bg-gradient-to-tl from-purple-500 to-pink-400 shadow-xl rounded-2xl bg-clip-border">
   <p class="text-2xl text-gray-400 dark:text-gray-500">
   <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
     <div class="flex-auto p-4">
       <div class="flex flex-row -mx-3">
         <div class="flex-none w-2/3 max-w-full px-3">
           <div>
             <p class="mb-0 font-sans text-sm font-semibold leading-normal">Elite</p>
             <h5 class="mb-0 font-bold">
               Player
               <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
             </h5>
           </div>
         </div>
         <div class="px-1 text-right basis-1/3">
           <div class="inline-block w-12 h-12 text-center rounded-lg ">
             <img src="image/Group 10.png" class="relative top-3.5" alt="">
           </div>
         </div>
       </div>
     </div>
   </div>
   </p>
</div>

</div>
<!-- End Jumlah pemain per program -->


      <div class="grid grid-cols-2 gap-4 mt-5">

        <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                  <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('../../image/logo.png')">
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-500 to-pink-400 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4 text-center">
                      <h5 class="pt-2 font-bold text-white">Berita</h5>
                      <p class="text-white text-2xl">{{ $berita }}</p>
                      <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="dashboard/berita">
                        View More
                        <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                      </a>
                    </div>
                  </div>
            </div>

            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">       
                  <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('../../image/logo.png')">
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-500 to-pink-400 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4 text-center">
                      <h5 class="pt-2 font-bold text-white">Gallery</h5>
                      <p class="text-white text-2xl">{{ $galery }}</p>
                      <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="dashboard/galery">
                        View More
                        <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                      </a>
                    </div>
                  </div>
            </div>
          </div>


</div>

@endsection
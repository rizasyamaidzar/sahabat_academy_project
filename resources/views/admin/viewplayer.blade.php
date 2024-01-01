@extends('admin.admin')

@section('conten')

<main class="profile-page">
  <section class="relative block h-500-px">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url(../image/arya.png)">
      <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </section>
  <section class="relative py-2 bg-blueGray-200">
    <div class="container mx-auto px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
        <div class="px-6">
          <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
              <div class="relative">
                <img alt="..." src="../image/arya.png" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
              <div class="py-6 px-3 mt-32 sm:mt-0">
                <button class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                  Elite
                </button>
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-1">
              <div class="flex justify-center py-4 lg:pt-4 pt-8">
                <div class="mr-4 p-3 text-center ">
                <a href="/newcomers"><i class='fas fa-reply text-red-600 text-2xl'> </i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-12">
            <!-- NAMA -->
            <h3 class="text-4xl font-semibold leading-normal text-blueGray-700 mb-2">
              Muhammad Ashfahany Arya Hindrian
            </h3>
            <div class="text-sm leading-normal mt-0 text-blueGray-400 font-bold uppercase">
              <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
              Ponorogo, 17 April 2003
            </div>
            <div class="text-sm leading-normal mt-0 text-blueGray-400 font-bold uppercase">
              <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
              Jalan K Sholikin
            </div>
            <div class="mb-2 text-blueGray-600 mt-2">
              <i class="fa fa-envelope mr-2 text-lg text-blueGray-400"></i>Ashfahany@gmail.com
            </div>
            <div class="mb-2 text-blueGray-600">
              <i class="fas fa-phone-alt mr-2 text-lg text-blueGray-400"></i>081332667707
            </div>
          </div>
          <div class="mt-5 py-10 border-t border-blueGray-200 text-center">

          <div class="mb-4 grid grid-rows-1 grid-flow-col gap-4">
            <div class="mb-4">                    
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Nama Orang tua</label>
                <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Berat Badan">
            </div>
            <div class="mb-4">  
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">No Telepon Orang Tua</label>
                <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Tinggi Badan">
            </div>
        </div>

        <div class="mb-4 grid grid-rows-1 grid-flow-col gap-4">
            <div class="mb-4">                    
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Asal Sekolah</label>
                <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Berat Badan">
            </div>
            <div class="mb-4">  
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Tinggi Badan</label>
                <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Tinggi Badan">
            </div>
        </div>

        <div class="mb-4 grid grid-rows-1 grid-flow-col gap-4">
            <div class="mb-4">                    
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Berat Badan</label>
                <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Berat Badan">
            </div>
            <div class="mb-4">  
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Tinggi Badan</label>
                <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Tinggi Badan">
            </div>
        </div>

        <div class="mb-4 grid grid-rows-1 grid-flow-col gap-4">
            <div class="mb-4">                    
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Berat Badan</label>
                <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Berat Badan">
            </div>
            <div class="mb-4">  
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Tinggi Badan</label>
                <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Tinggi Badan">
            </div>
        </div>
        
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection
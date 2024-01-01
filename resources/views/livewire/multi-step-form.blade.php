<div>
    
<div class="container mx-auto px-5 mt-14">
    <form wire:submit.prevent="register" action="" method="post" enctype="multipart/form-data">
    @csrf

    <!-- START STEP ONE -->
    @if($currentStep == 1)
    <div class="step-one">
        <!-- STEP -->
        <div class="step shadow-md mb-5 bg-blue-950 border-b-4 border-orange-500 rounded-lg p-5 ">
                <div class="grid grid-cols-4 mb-5 text-white">
                    <div class="mx-auto">
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-orange-500" src="image/datadiri.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Data Diri</h2>
                    </div>
                    <div class="mx-auto">     
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-gray-400" src="image/datafisik.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Data Fisik</h2>
                    </div>
                    <div class="mx-auto"> 
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-gray-400" src="image/berkas.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Berkas</h2>
                    </div>
                    <div class="mx-auto"> 
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-gray-400" src="image/akun.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Akun</h2>
                    </div>
                </div>

                <!-- progress -->
                <div class="w-full bg-gray-400 rounded-full h-2.5 dark:bg-gray-700 mb-10">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 12%"></div>
                </div>
                <!-- end progres -->
                 <!-- Start Help -->
                 <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span>Data Apa Saja Yang Perlu Diisi?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>   
                </div>
                <!-- End Help -->

                
        </div>
        <!-- End Step -->   
        <!-- START FORM -->
        <div class="px-10">
                <div class="mb-4">                    
                    <label for="nama" class="block mb-2 text-sm font-medium text-blue-950">Nama Lengkap</label>
                    <input type="text" id="nama" multiple aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Nama Lengkap" wire:model="nama" >
                    <span class="text-red-400">@error('nama'){{ $message }}@enderror</span>
                </div>
                
                <div class="mb-4">
                    <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Jenis Kelamin</label>
                    <div class="flex justify-start">
                        <!--First radio-->
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                          <input class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                            type="radio"
                            name="inlineRadioOptions"
                            id="inlineRadio1"
                            wire:model="jenis_kelamin"
                            value="Laki-laki" />
                          <label
                            class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                            for="inlineRadio1"
                            >Laki-laki</label
                          >
                        </div>
                      
                        <!--Second radio-->
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                          <input
                            class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]"
                            type="radio"
                            name="inlineRadioOptions"
                            id="inlineRadio2"
                            wire:model="jenis_kelamin"
                            value="Perempuan" />
                          <label
                            class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                            for="inlineRadio2"
                            >Perempuan</label
                          >
                        </div>
                        <span class="text-red-400">@error('jenis_kelamin'){{ $message }}@enderror</span>
                      </div>
                </div>

                <div class="mb-4 grid grid-rows-1 grid-flow-col gap-4">
                    <div class="mb-4">                    
                        <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Tempat Lahir</label>
                        <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Tempat Lahir" wire:model="tempat_lahir">
                        <span class="text-red-400">@error('tempat_lahir'){{ $message }}@enderror</span>
                    </div>
                    <div class="mb-4">  
                        <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Tanggal Lahir</label>
                        <input type="date" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Tanggal lahir" wire:model="tanggal_lahir">
                        <span class="text-red-400">@error('tanggal_lahir'){{ $message }}@enderror</span>
                    </div>
                </div> 

                <div class="mb-4">                    
                    <label for="nama" class="block mb-2 text-sm font-medium text-blue-950">No Whatsapp</label>
                    <input type="number" id="no" multiple aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="No Whatsapp" wire:model="no" >
                    <span class="text-red-400">@error('no'){{ $message }}@enderror</span>
                </div>

                <div class="mb-4">                    
                    <label for="nama_ortu" class="block mb-2 text-sm font-medium text-blue-950">Nama Ortu</label>
                    <input type="text" id="nama_ortu" multiple aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Nama Ortu" wire:model="nama_ortu" >
                    <span class="text-red-400">@error('nama_ortu'){{ $message }}@enderror</span>
                </div>
                
                <div class="mb-4">                    
                    <label for="no_ortu" class="block mb-2 text-sm font-medium text-blue-950">Nomor Ortu</label>
                    <input type="number" id="no_ortu" multiple aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Nomor Ortu" wire:model="no_ortu" >
                    <span class="text-red-400">@error('no_ortu'){{ $message }}@enderror</span>
                </div>

                <div class="mb-4">                    
                    <label for="asal_sekolah" class="block mb-2 text-sm font-medium text-blue-950">Asal Sekolah</label>
                    <input type="text" id="asal_sekolah" multiple aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Asal Sekolah" wire:model="asal_sekolah" >
                    <span class="text-red-400">@error('asal_sekolah'){{ $message }}@enderror</span>
                </div>
                
                <div class="mb-4">                    
                    <label for="ukuran_jersey" class="block mb-2 text-sm font-medium text-blue-950">Ukuran Jersey</label>
                    <select id="ukuran_jersey" name="ukuran_jersey" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " wire:model="ukuran_jersey">
                        <option value="XL">XL</option>
                        <option value="L">L</option>
                    </select>
                    <span class="text-red-400">@error('ukuran_jersey'){{ $message }}@enderror</span>
                    <!-- <input type="text" id="ukuran_jersey" multiple aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Ukuran Jersey" wire:model="ukuran_jersey" > -->
                   
                </div>

                <div class="mb-4">
                    <label for="pengalaman" class="block mb-2 text-sm font-medium text-blue-950">Pengalaman Basket</label>
                    <div class="flex justify-start">
                        <!--First radio-->
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                          <input class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                            type="radio"
                            name="inlineRadioOptions"
                            id="pernah"
                            wire:model="pengalaman"
                            value="pernah" />
                          <label
                            class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                            for="pernah"
                            >Pernah</label
                          >
                        </div>
                      
                        <!--Second radio-->
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                          <input
                            class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]"
                            type="radio"
                            name="inlineRadioOptions"
                            id="belum"
                            wire:model="pengalaman"
                            value="belum pernah" />
                          <label
                            class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                            for="belum"
                            >Belum Pernah</label
                          >
                        </div>
                        <span class="text-red-400">@error('pengalaman'){{ $message }}@enderror</span>
                      </div>
                </div>
                
    </div>
        <!-- END FORM -->
    @endif
   
    <!-- END STEP ONE -->
<!-- DATA FISIK -->
<!-- START STEP Two -->
@if($currentStep == 2)
    <div class="step-one">
        <!-- STEP -->
        <div class="step shadow-md mb-5 bg-blue-950 border-b-4 border-orange-500 rounded-lg p-5 ">
                <div class="grid grid-cols-4 mb-5 text-white">
                    <div class="mx-auto">
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-green-400" src="image/datadiri.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Data Diri</h2>
                    </div>
                    <div class="mx-auto">     
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16  p-1 rounded-full ring-2 ring-orange-500" src="image/datafisik.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Data Fisik</h2>
                    </div>
                    <div class="mx-auto"> 
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-gray-400" src="image/berkas.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Berkas</h2>
                    </div>
                    <div class="mx-auto"> 
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-gray-400" src="image/akun.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Akun</h2>
                    </div>
                </div>

                <!-- progress -->
                <div class="w-full bg-gray-400 rounded-full h-2.5 dark:bg-gray-700 mb-10">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 38%"></div>
                </div>
                <!-- end progres -->
        </div>
        <!-- End Step -->   
            



        <!-- START FORM -->
        <div class="px-10">
            <div class="mb-4 grid grid-rows-1 grid-flow-col gap-4">
                <div class="mb-4">                    
                    <label for="berat_badan" class="block mb-2 text-sm font-medium text-blue-950">Berat Badan</label>
                    <input type="number" id="berat_badan" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Berat Badan" wire:model="berat_badan">
                    <span class="text-red-400">@error('berat_badan'){{ $message }}@enderror</span>
                </div>
                <div class="mb-4">  
                    <label for="tinggi_badan" class="block mb-2 text-sm font-medium text-blue-950">Tinggi Badan</label>
                    <input type="number" id="tinggi_badan" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Tinggi Badan" wire:model="tinggi_badan">
                    <span class="text-red-400">@error('tinggi_badan'){{ $message }}@enderror</span>
                </div>
            </div>

                <div class="mb-4">  
                    <label for="golongan_darah" class="block mb-2 text-sm font-medium text-blue-950">Golongan Darah</label>
                    <input type="text" id="golongan_darah" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Golongan Darah" wire:model="golongan_darah">
                    <span class="text-red-400">@error('golongan_darah'){{ $message }}@enderror</span>
                </div>

                <div class="mb-4">  
                    <label for="riwayat" class="block mb-2 text-sm font-medium text-blue-950">Riwayat Penyakit</label>
                    <input type="text" id="riwayat" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Riwayat Penyakit" wire:model="riwayat_penyakit">
                    <span class="text-red-400">@error('riwayat_penyakit'){{ $message }}@enderror</span>
                </div>
        </div> 
    </div>
        <!-- END FORM -->
@endif
<!-- END STEP Two -->
<!-- END DATA FISIK -->

<!-- DATA BERKAS -->
<!-- START STEP Thre -->
@if($currentStep == 3)
    
    <div class="step-three">
        <!-- STEP -->
        <div class="step shadow-md mb-5 bg-blue-950 border-b-4 border-orange-500 rounded-lg p-5 ">
                <div class="grid grid-cols-4 mb-5 text-white">
                    <div class="mx-auto">
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-green-400" src="image/datadiri.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Data Diri</h2>
                    </div>
                    <div class="mx-auto">     
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-green-400" src="image/datafisik.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Data Fisik</h2>
                    </div>
                    <div class="mx-auto"> 
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-orange-500" src="image/berkas.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Berkas</h2>
                    </div>
                    <div class="mx-auto"> 
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-gray-400" src="image/akun.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Akun</h2>
                    </div>
                </div>

                <!-- progress -->
                <div class="w-full bg-gray-400 rounded-full h-2.5 dark:bg-gray-700 mb-10">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 63%"></div>
                </div>
                <!-- end progres -->
                 <!-- Start Help -->
                 <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span>Data Apa Saja Yang Perlu Diisi?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>   
                </div>
                <!-- End Help -->
        </div>
        <!-- End Step -->   
            



        <!-- START FORM -->
        <div class="px-10">
            <div class="mb-4 grid grid-rows-1 grid-flow-col gap-4">
                <div class="mb-4">                    
                    <label for="akta" class="block mb-2 text-sm font-medium text-blue-950">Scan Akta Kelahiran</label>
                    <input type="file" id="akta" aria-describedby="helper-text-explanation" class="px-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5"  wire:model="akta">
                    <span class="text-red-400">@error('akta'){{ $message }}@enderror</span>
                </div>
                <div class="mb-4">  
                    <label for="kk" class="block mb-2 text-sm font-medium text-blue-950">Scan Kartu Keluarga</label>
                    <input type="file" id="kk" aria-describedby="helper-text-explanation" class="px-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5"  wire:model="kartu_keluarga">
                    <span class="text-red-400">@error('kartu_keluarga'){{ $message }}@enderror</span>
                </div>
            </div>

                <div class="mb-4">  
                    <label for="foto" class="block mb-2 text-sm font-medium text-blue-950">Foto 3x4</label>
                    <input type="file" id="foto" aria-describedby="helper-text-explanation" class="px-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5"  wire:model="foto" >
                    <span class="text-red-400">@error('foto'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <!-- END FORM -->
@endif   
<!-- END STEP Three -->
<!-- END DATA BERKAS -->

<!-- AKUN -->
<!-- START STEP Four -->
@if($currentStep == 4)
    
    <div class="step-four">
        <!-- STEP -->
        <div class="step shadow-md mb-5 bg-blue-950 border-b-4 border-orange-500 rounded-lg p-5 ">
                <div class="grid grid-cols-4 mb-5 text-white">
                    <div class="mx-auto">
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-green-500" src="image/datadiri.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Data Diri</h2>
                    </div>
                    <div class="mx-auto">     
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-green-400" src="image/datafisik.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Data Fisik</h2>
                    </div>
                    <div class="mx-auto"> 
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-green-400" src="image/berkas.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Berkas</h2>
                    </div>
                    <div class="mx-auto"> 
                        <img class="my-2 mx-auto w-14 h-14 md:w-16 md:h-16 p-1 rounded-full ring-2 ring-orange-500" src="image/akun.png" alt="Bordered avatar">
                        <h2 class="text-center md:text-2xl">Akun</h2>
                    </div>
                </div>

                <!-- progress -->
                <div class="w-full bg-gray-400 rounded-full h-2.5 dark:bg-gray-700 mb-10">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 88%"></div>
                </div>
                <!-- end progres -->
        </div>
        <!-- End Step -->   
            



        <!-- START FORM -->
        <div class="px-10">
                <div class="mb-4">                    
                    <label for="email" class="block mb-2 text-sm font-medium text-blue-950">Email</label>
                    <input type="email" id="email" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Email" wire:model="email">
                    <span class="text-red-400">@error('email'){{ $message }}@enderror</span>
                </div>

                <div class="mb-4">                    
                    <label for="password" class="block mb-2 text-sm font-medium text-blue-950">password</label>
                    <input type="password" id="password" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Password" wire:model="password">
                    <span class="text-red-400">@error('password'){{ $message }}@enderror</span>
                </div>       
        </div>
        <!-- END FORM -->
@endif   
<!-- END STEP Four -->
<!-- END AKUN -->


    <div class="containerbg-white rounded-lg mx-auto block">
        <!-- <h2 class="mt-[450px] md:mt-[425px]"></h2> -->
        <!-- <h1 class="border-b-4 border-blue-950 text-2xl md:text-4xl p-5 text-blue-950">Data Fisik</h1> -->
        <div class="px-20 mt-10 pb-10">

        @if($currentStep==1 || $currentStep == 2 || $currentStep == 3)
        <button type="button" class="bg-blue-700 hover:bg-green-500 text-white font-bold py-2 px-4 rounded" wire:click="increaseStep()">Next</button>
        @endif
        @if($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
        <button type="button" class="bg-red-500 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded" wire:click="decreaseStep()">Back</button>
        
        @endif
        @if($currentStep == 4)
        <button type="submit" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        @endif

        </div>
    </div>
   











    <!-- start data fisik -->
    <!-- <div class="step-two">
    <div class="container md:mt-44 bg-white rounded-lg mx-auto ">
        <h2 class="mt-[850px] md:mt-[825px]"></h2>
        <h1 class="border-b-4 border-blue-950 text-2xl md:text-4xl p-5 text-blue-950">Data Fisik</h1>
        <div class="px-20 mt-10 pb-10">

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

            <div class="mb-4">  
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Golongan Darah</label>
                <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Golongan Darah">
            </div>

            <div class="mb-4">  
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Riwayat Penyakit</label>
                <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Riwayat Penyakit">
            </div>

        </div>
    </div>
    </div> -->
   
    <!-- end dari fisik -->

    <!-- kelengkapan berkas -->

    <!-- <div class="step-three">
    <div class="container mt-5 bg-white rounded-lg mx-auto">
        <h1 class="border-b-4 border-blue-950 text-2xl md:text-4xl p-5 text-blue-950">Kelengkapan Berkas</h1>
        <div class="px-20 mt-10 pb-10">

        <div class="mb-4 grid grid-rows-1 grid-flow-col gap-4">
            <div class="mb-4">                    
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Scan Akta Kelahiran</label>
                <input type="file" id="namaortu" aria-describedby="helper-text-explanation" class="px-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  ">
            </div>
            <div class="mb-4">  
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Scan Kartu Keluarga</label>
                <input type="file" id="namaortu" aria-describedby="helper-text-explanation" class="px-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  ">
            </div>
        </div>

            <div class="mb-4">  
                <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Foto 3x4</label>
                <input type="file" id="namaortu" aria-describedby="helper-text-explanation" class="px-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " >
            </div>
        </div>
    </div>
    </div> -->
   
    <!-- end kelengkapan Berkas -->
</form>

</div>
</div>

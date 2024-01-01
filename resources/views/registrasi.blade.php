@extends('layouts.main')

@section('container')
<div class="container mx-auto px-5 mt-14">
    <div class="grid grid-rows-1 grid-flow-col gap-3">
        <div class="mx-auto">
            <img src="image/regist1.png" alt="" class="w-[100px] mt-6 md:w-full">
        </div>
        <div class="mx-auto md:mt-14">
            <img src="image/logo.png" alt="" class="mx-auto mt-5 w-14 md:w-32">
            <div class="text-center w-full text-blue-900 font-bold md:text-2xl">
                <h1>Registration Form</h1>
                <h2>Sahabat Basketball Ponorogo</h2>
            </div>
        </div>
        <div class="mx-auto">
            <img src="image/regist2.png" alt="" class="mt-8 w-[150px] md:w-full sm:w-[120px] sticky md:mt-6">
        </div>
      </div>
    </div>

    <!-- start form -->
    <!-- <img src="image/apip.png" alt=""> -->
    <form action="">
    <!-- start data diri -->
    <div class="container mt-[75px] md:mt-52 bg-white rounded-lg absolute z-10 top-32 left-1/2 -translate-x-1/2">
        <h1 class="border-b-4 border-blue-950 text-2xl md:text-4xl p-5 text-blue-950">Form Data Diri</h1>
            <div class="px-20 mt-10 pb-10">
                <div class="mb-4">                    
                    <label for="nama" class="block mb-2 text-sm font-medium text-blue-950">Nama Lengkap</label>
                    <input type="text" id="nama" multiple aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Nama Lengkap">
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
                            value="option1" />
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
                            value="option2" />
                          <label
                            class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                            for="inlineRadio2"
                            >Perempuan</label
                          >
                        </div>
                      </div>
                </div>

                <div class="mb-4 grid grid-rows-1 grid-flow-col gap-4">
                    <div class="mb-4">                    
                        <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Tempat Lahir</label>
                        <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Tempat Lahir">
                    </div>
                    <div class="mb-4">  
                        <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Tanggal Lahir</label>
                        <input type="date" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Tanggal lahir">
                    </div>
                </div>

                <div class="mb-4">                    
                    <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">No whatsapp</label>
                    <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="No whatsapp">
                </div>

                <div class="mb-4">                    
                    <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Nama Orang tua</label>
                    <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Nama orang tua">
                </div>

                <div class="mb-4">                    
                    <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">No Telepon rumah/Hp Orang tua</label>
                    <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="No Telepon Rumah/No Ortu">
                </div>

                <div class="mb-4">                    
                    <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Asal Sekolah</label>
                    <input type="text" id="namaortu" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-950 focus:border-blue-950 block w-full p-2.5  " placeholder="Asal Sekolah">
                </div>
                
                <div class="mb-4">
                    <label for="namaortu" class="block mb-2 text-sm font-medium text-blue-950">Pengalaman Basket</label>
                    <div class="flex justify-start">
                        <!--First radio-->
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                          <input class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                            type="radio"
                            name="inlineRadioOptions"
                            id="inlineRadio1"
                            value="option1" />
                          <label
                            class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                            for="inlineRadio1"
                            >Pernah</label
                          >
                        </div>
                      
                        <!--Second radio-->
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                          <input
                            class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]"
                            type="radio"
                            name="inlineRadioOptions"
                            id="inlineRadio2"
                            value="option2" />
                          <label
                            class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                            for="inlineRadio2"
                            >Belum Pernah</label
                          >
                        </div>
                      </div>
                </div>
            </div>
    </div>
    <!-- end data diri -->

    <!-- start data fisik -->
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
    <!-- end dari fisik -->

    <!-- kelengkapan berkas -->
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
    <!-- end kelengkapan Berkas -->
    <button class=" ml-8 mt-5 bg-orange-600 rounded-xl px-20 text-white text-2xl py-2 mb-10">Submit</button>
</form>
@endsection
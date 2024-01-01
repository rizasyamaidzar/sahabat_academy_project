@extends('admin.admin')

@section('conten')
<div class="container m-5">
    <h2 class="text-center font-bold text-lg m-5 text-blue-950">Tambah Program</h2>
    <form class="max-w-3xl mx-auto" method="post" action="{{ route('programAdmin.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="deskripsi" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="deskripsi" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
        </div>
       
        <div class="relative z-0 w-full mb-5 group">
        <input id="tujuan" type="hidden" name="tujuan">
        <trix-editor input="tujuan"></trix-editor>    
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <img class="img-preview max-w-[200px]">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Cover</label>
            <input class="@error('cover') is-invalid @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none " aria-describedby="user_avatar_help" id="cover" name="cover" type="file" onchange="previewImage()">   
        </div>
        @error('cover')
        <div class="text-red-400">
            {{ $message }}
        </div>
        @enderror
        <div class="relative z-0 w-full mb-5 group">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Image</label>
            <input class="@error('image') is-invalid @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none " aria-describedby="user_avatar_help" id="img" name="img[]" type="file" multiple>   
        </div>
        @error('img')
        <div class="text-red-400">
            {{ $message }}
        </div>
        @enderror
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</div>

@endsection

@section('script')
    <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

        function previewImage(){
        const image = document.querySelector('#cover');
        const imgPreview = document.querySelector('.img-preview');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
            
        }
    </script>
@endsection
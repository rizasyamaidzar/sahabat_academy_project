<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
       
        <title>HALAMAN |{{isset($title) ? $title : 'Sahabat basketball' }}</title>
          <link rel="shortcut icon" href="../image/logo.png">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <!-- Styles -->
        <script>document.documentElement.classList.add('js')</script>
        <!-- trix form -->
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
        <!-- mematikan file upload -->
        <style>
          trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
          }
        </style>

        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
    


    @include('admin.sidebare')

    <div class="p-6 sm:ml-64 mt-14">
      @yield('conten')
    </div>

        @livewireScripts
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
        <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>   
        @yield('script')
    </body>
</html>

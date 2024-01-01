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

        <!-- Styles -->
        <script>document.documentElement.classList.add('js')</script>
        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
    

    @include('partials.navbar')

    <div class="">
        @yield('container')
    </div>


 <!-- footer -->
  
 <footer class="bg-blue-950">
    <div class="container mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
      <div class="md:justify-between">
        <div class="mb-6 md:mb-10">
          <a href="#" class="flex items-center">
            <img src="../image/logo.png" class="h-20 mr-3" alt="Sahabat Logo" />
            <span class="self-center text-2xl lg:text-4xl font-semibold whitespace-nowrap text-white">Sahabat Basketball Ponorogo</span>
          </a>
        </div>
        <div class="grid grid-cols-2 gap-6 sm:gap-6 sm:grid-cols-3 ">
          <div>
            <h2 class="mb-4 text-sm font-semibold text-gray-300 uppercase ">Programs</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
              <li class="mb-2">
                <a href="program.html" class="hover:text-orange-400">Elite</a>
              </li>
              <li class="mb-2">
                <a href="program.html" class="hover:text-orange-400">Srtarter</a>
              </li>
              <li class="mb-2">
                <a href="program.html" class="hover:text-orange-400">Rookie</a>
              </li>
              <li class="mb-2">
                <a href="program.html" class="hover:text-orange-400">Hoops</a>
              </li>
              <li>
                <a href="program.html" class="hover:text-orange-400">Pre Hoops</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-4 text-sm font-semibold text-gray-300 uppercase">Contact</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="https://api.whatsapp.com/send/?phone=6287758777774&text&type=phone_number&app_absent=0" class="hover:text-orange-400 ">+6287758777774</a>
              </li>
              <li>
                <a href="https://www.instagram.com/sahabat_basketball/" class="hover:text-orange-400">Instagram</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-300 uppercase ">Location</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="https://api.whatsapp.com/send/?phone=6287758777774&text&type=phone_number&app_absent=0"
                  class="hover:underline"></a>

              </li>
              <li>
                <a href="https://maps.app.goo.gl/aV4PpytjXyAKgjDc9" class="hover:underline">JL. Sultanagung, Nologaten,
                  Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63411.</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 sm:mx-auto border-orange-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
            class="hover:underline">Sahabat Ponorogo</a>. <a href="https://www.linkedin.com/in/riza-afif-syamaidzar-b52720242/" class="italic">rizaafifs.</a>
        </span>
        <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
          <a href="https://www.instagram.com/sahabat_basketball/" class=""">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="currentColor"
            style="color: #ffffff"
            viewBox="0 0 24 24">
            <path
              d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg>
          </a>

          <a href="https://www.tiktok.com/@sahabatbasketball?_t=8gETEnlweDy&_r=1" class="">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            class="h-5 w-5"
            style="color: #ffffff">
        <path
        fill="currentColor"
        d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
        </svg>

        <a href="https://api.whatsapp.com/send/?phone=6287758777774&text&type=phone_number&app_absent=0" class="">
          <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="currentColor"
          style="color: #ffffff"
            viewBox="0 0 24 24">
          <path
          d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
          </svg>
          </a>   
        </div>
      </div>
    </div>
  </footer>

        @livewireScripts
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
        <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
    </body>
</html>

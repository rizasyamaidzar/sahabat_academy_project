<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <title>Soft UI Dashboard Tailwind</title>
    <!-- Styles -->
    <script>document.documentElement.classList.add('js')</script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @include('dashboard.layouts.partials.link')
  </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">

  @include('dashboard.layouts.partials.header')
  
  <div class="w-full px-6 py-6 mx-auto">
  @auth  
  <h2 class="uppercase">Welcome Back {{ auth()->user()->nama }} !!</h2>
  @endauth  
    @yield('conten')
    </div>
      
      
   @include('dashboard.layouts.partials.footer')
   @include('dashboard.layouts.partials.script')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
        <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
   
  </body>

</html>

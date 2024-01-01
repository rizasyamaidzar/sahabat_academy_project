<nav class="bg-blue-950 fixed w-full z-50 top-0 left-0 border-b border-orange-400">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center">
        <img src="../image/logo.png" class="h-8 mr-3" alt="Sahabat Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Sahabat Basketball</span>
    </a>
    <div class="flex md:order-2">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0"><a href="/login">Login</a></button>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <?php if (!isset($title) || is_null($title)) {

    $title = "Default Title";
    } ?>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-none">
        <li>
          <a href="/" class="block py-2 pl-3 pr-4 text-white {{ ($title === 'Home'  ) ? 'bg-blue-700 md:text-blue-700' : 'hover:text-blue-700 hover:bg-white md:hover:bg-transparent md:hover:text-blue-700'}} rounded md:bg-transparent md:p-0">Home</a>
        </li>
        <li>
          <a href="/berita" class="block py-2 pl-3 pr-4 text-white {{ ($title === 'Berita' ) ? 'bg-blue-700 md:text-blue-700' : 'hover:text-blue-700 hover:bg-white md:hover:bg-transparent md:hover:text-blue-700'}} rounded md:bg-transparent md:p-0">Kabar Sahabat</a>
        </li>
        <li>
          <a href="/program" class="block py-2 pl-3 pr-4 text-white {{ ($title === 'Program' ) ? 'bg-blue-700 md:text-blue-700' : 'hover:text-blue-700 hover:bg-white md:hover:bg-transparent md:hover:text-blue-700'}} rounded md:bg-transparent md:p-0">Programs</a>
        </li>
        <li>
          <a href="/coaching" class="block py-2 pl-3 pr-4 text-white {{ ($title === 'Coaching' ) ? 'bg-blue-700 md:text-blue-700' : 'hover:text-blue-700 hover:bg-white md:hover:bg-transparent md:hover:text-blue-700'}} rounded md:bg-transparent md:p-0">Coaching</a>
        </li>
        <li>
            <a href="/galery" class="block py-2 pl-3 pr-4 text-white {{ ($title === 'Galery' ) ? 'bg-blue-700 md:text-blue-700' : 'hover:text-blue-700 hover:bg-white md:hover:bg-transparent md:hover:text-blue-700'}} rounded md:bg-transparent md:p-0">Gallery</a>
          </li>
      </ul>
    </div>
    </div>
</nav>

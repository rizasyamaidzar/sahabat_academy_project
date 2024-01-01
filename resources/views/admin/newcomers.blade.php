@extends('admin.admin')
@section('conten')

<div class="container">


<h2 class="text-4xl font-bold mb-5 text-blue-950">New Comers Player</h2>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-gradient-to-tl from-purple-500 to-pink-400">
        <div class="m-5">
            <h2 class="text-2xl font-bold text-white mx-3 mb-0">Cowok</h2>
            <h2 class="text-2xl font-bold text-white text-center">13</h2>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 mr-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-gradient-to-tl from-purple-700 to-pink-600">
            <tr class="text-center">
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Umur
                </th>
                <th scope="col" class="px-6 py-3">
                    Kontak
                </th>
                <th scope="col" class="px-6 py-3 text-left">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 ">
                    View
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            <tr class="bg-white border-b hover:bg-gray-50 text-center ">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-10 h-10 rounded-full" src="/image/arya.png" alt="Jese image">
                    <div class="ps-3">
                        <div class="text-base font-semibold">Muhammad Asfahany Arya Hindrian</div>
                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                    </div>  
                </th>
                <td class="px-6 py-4">
                    14 Tahun
                </td>
                <td class="px-6 py-4">
                    081332667707
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> 
                        <h2>Active</h2>
                    </div>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="/newcomers/view" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View user</a>
                </td>
                <td class="px-6 py-4 text-center">
                <a href="#" class="font-medium text-blue-600 ">
                        <svg class="h-4 w-4 text-green-500 mx-auto my-2 hover:w-8 hover:h-8 hover:text-green-900" <svg  width="24"  height="24"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" /></svg>
                    </a>
                    <a href="/hapus" class="font-medium text-blue-600 ">
                        <svg class="h-4 w-4 text-red-500 mx-auto hover:w-8 hover:h-8 hover:text-red-900"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z" />  <line x1="18" y1="9" x2="12" y2="15" />  <line x1="12" y1="9" x2="18" y2="15" /></svg>
                    </a>
                </td>
          
            </tr>
        </tbody>
    </table>
</div>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
<div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-gradient-to-tl from-pink-500 to-purple-400">
        <div class="m-5">
            <h2 class="text-2xl font-bold text-white mx-3 mb-0">Cewek</h2>
            <h2 class="text-2xl font-bold text-white text-center">14</h2>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 mr-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-gradient-to-tl from-purple-700 to-pink-600">
            <tr class="text-center">
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Umur
                </th>
                <th scope="col" class="px-6 py-3">
                    Kontak
                </th>
                <th scope="col" class="px-6 py-3 text-left">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 ">
                    View
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b hover:bg-gray-50 text-center ">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-10 h-10 rounded-full" src="/image/arya.png" alt="Jese image">
                    <div class="ps-3">
                        <div class="text-base font-semibold">Muhammad Asfahany Arya Hindrian</div>
                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                    </div>  
                </th>
                <td class="px-6 py-4">
                    14 Tahun
                </td>
                <td class="px-6 py-4">
                    081332667707
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> 
                        <h2>Active</h2>
                    </div>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="newcomers/view" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View user</a>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="#" class="font-medium text-blue-600 ">
                            <svg class="h-4 w-4 text-green-500 mx-auto my-2 hover:w-8 hover:h-8 hover:text-green-900" <svg  width="24"  height="24"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" /></svg>
                        </a>
                        <a href="/hapus" class="font-medium text-blue-600 ">
                            <svg class="h-4 w-4 text-red-500 mx-auto hover:w-8 hover:h-8 hover:text-red-900"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z" />  <line x1="18" y1="9" x2="12" y2="15" />  <line x1="12" y1="9" x2="18" y2="15" /></svg>
                        </a>
                 </td>
          
            </tr>
        </tbody>
    </table>
</div>
</div>

@endsection
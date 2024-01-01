@extends('layouts.main')

@section('container')
<section>
      <div class="container mt-20 mx-auto">
        <h1 class="text-center m-5 text-2xl md:text-4xl font-bold text-blue-950">Coaching</h1>
      </div>
        <div class="bg-blue-950 bg-cover bg-no-repeat bg-center flex flex-wrap shadow-xl px-10">
            <div class=" lg:grid lg:grid-cols-3 lg:gap-4 mx-auto mt-10">
              <img src="image/Takur 1.png" alt="" class="max-h-[200px] mx-auto lg:max-h-full delay-[300ms] duration-[600ms] taos:translate-x-[-100%] taos:invisible [animation-iteration-count:infinite]" data-taos-offset="400">
              <div class="text-white duration-[800ms] taos:[transform:perspective(2500px)_rotateX(-100deg)] taos:invisible taos:[backface-visibility:hidden] [animation-iteration-count:infinite]" data-taos-offset="100">
              <h2 class="text-2xl text-center lg:text-left lg:text-4xl font-bold">Reindra Swastika Putra</h2>
              <h2 class="bg-orange-600 rounded-xl text-center lg:text-2xl text-white py-1 w-44 my-2 mx-auto lg:mx-0 ">Head Coach</h2> 
              </div>
              <ul class="list-decimal lg:bg-transparent text-white line-clamp-[7] lg:line-clamp-nonlist-outside text-start delay-[300ms] duration-[600ms] taos:translate-x-[100%] taos:invisible [animation-iteration-count:infinite]" data-taos-offset="100">
                <h1 class="text-lg font-bold lg:text-2xl mb-2"><a href="">Experience & Achievement </a></h1>
                <li class="list-inside">Pemain IBL pertama dari Ponorogo</li>
                <li class="list-inside">Ranking pertama pemain IBL CLS di tahun kedua</li>
                <li class="list-inside">2022 Head Coach Tim Porprov Ponorogo PA</li>
                <li class="list-inside">2005 JUARA 1 PIALA GUBERNUR antar UNIVERSITAS se Indonesia</li>
                <li class="list-inside">2004 MVP & TOP SKOR PIALA GUBERNUR </li>
                
            </ul>
            </div>
        </div>
        </div>
        <section>
          <!-- layar kecil -->
          <div class="bg-cover bg-no-repeat bg-center flex flex-wrap shadow-xl px-10 mt-5 lg:hidden">
            <div class=" lg:grid lg:grid-cols-3 lg:gap-4 mx-auto mt-10">
              <img src="image/Bahar1.png" alt="" class="max-h-[200px] mx-auto lg:max-h-full delay-[300ms] duration-[600ms] taos:translate-x-[-100%] taos:invisible [animation-iteration-count:infinite]" data-taos-offset="100">
              <div class="text-blue-950 duration-[800ms] taos:[transform:perspective(2500px)_rotateX(-100deg)] taos:invisible taos:[backface-visibility:hidden] [animation-iteration-count:infinite]" data-taos-offset="100">
                <h2 class="text-2xl text-center lg:text-left lg:text-4xl font-bold">Reindra Swastika Putra</h2>
                <h2 class="bg-orange-600 rounded-xl text-center lg:text-2xl text-white py-1 w-44 my-2 mx-auto lg:mx-0 ">Head Coach</h2> 
                </div>
                <ul class="list-decimal lg:bg-transparent text-blue-950 line-clamp-[7] lg:line-clamp-non list-outside lg:text-start delay-[300ms] duration-[600ms] taos:translate-x-[100%] taos:invisible [animation-iteration-count:infinite]" data-taos-offset="100">
                  <h1 class="text-lg font-bold lg:text-2xl mb-2"><a href="">Experience & Achievement </a></h1>
                  <li class="list-inside">Pemain IBL pertama dari Ponorogo</li>
                  <li class="list-inside">Ranking pertama pemain IBL CLS di tahun kedua</li>
                  <li class="list-inside">2022 Head Coach Tim Porprov Ponorogo PA</li>
                  <li class="list-inside">2005 JUARA 1 PIALA GUBERNUR antar UNIVERSITAS se Indonesia</li>
                  <li class="list-inside">2004 MVP & TOP SKOR PIALA GUBERNUR </li>
              </ul>
            </div>
          </div>
          <!-- layar besar -->
          <div class=" lg:grid lg:grid-cols-3 lg:gap-4 mx-auto mt-10 hidden px-10 shadow-xl">
            <ul class="list-decimal lg:bg-transparent text-blue-950 line-clamp-[7] lg:line-clamp-non list-outside lg:text-start delay-[300ms] duration-[600ms] taos:translate-x-[-100%] taos:invisible [animation-iteration-count:infinite]" data-taos-offset="100">
              <h1 class="text-lg font-bold lg:text-2xl mb-2"><a href="">Experience & Achievement </a></h1>
              <li class="list-inside">Pemain IBL pertama dari Ponorogo</li>
              <li class="list-inside">Ranking pertama pemain IBL CLS di tahun kedua</li>
              <li class="list-inside">2022 Head Coach Tim Porprov Ponorogo PA</li>
              <li class="list-inside">2005 JUARA 1 PIALA GUBERNUR antar UNIVERSITAS se Indonesia</li>
              <li class="list-inside">2004 MVP & TOP SKOR PIALA GUBERNUR </li>
          </ul>
          <div class="text-blue-950 relative duration-[800ms] taos:[transform:perspective(2500px)_rotateX(-100deg)] taos:invisible taos:[backface-visibility:hidden] [animation-iteration-count:infinite]" data-taos-offset="100"">
          <h2 class="text-2xl lg:text-4xl font-bold text-end mb-2">Baharudin Suryo Nugroho</h2>
          <h2 class=" text-white bg-orange-600 rounded-lg text-2xl text-center max-w-[230px] absolute right-0 w-44 py-1">Coach Elite</h2> 
          </div>
          <img src="image/Bahar1.png" alt="" class="max-h-[200px] mx-auto lg:max-h-full delay-[300ms] duration-[600ms] taos:translate-x-[100%] taos:invisible [animation-iteration-count:infinite]" data-taos-offset="100">
        </div>
      </div>
      </div>
    </section>
@endsection

    @extends('layouts.main')
    @section('container')

  <!-- Home -->
  <section id="home" class="pt-2 bg-cover" style="background-image: url(./image/Rectangle.png)">
    <div class="bg-no-repeat bg-center sticky mt-28">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2 lg:pl-28 ">
            <h1 class="text-white font-semibold text-6xl xl:text-8xl mb-10 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0" data-taos-offset="5">
              Let's Explore and Learn
            </h1>
            <a href="/registrasi" class="text-xl lg:text-2xl text-white bg-orange-500 py-2 lg:py-4 px-4 lg:px-6 rounded-2xl delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 " data-taos-offset="5">
              <h>Register</h>
            </a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10">
              <img src="image/syahru.png" alt="" class="delay-[300ms] duration-[600ms] taos:[transform:translate3d(200px,200px,0)] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="10" />
              <img src="image/vanes.png" alt="" class="absolute bottom-36 -z-10 left-1/2 -translate-x-1/2 delay-[300ms] duration-[600ms] taos:[transform:translate3d(200px,200px,0)] taos:opacity-0" data-taos-offset="10" />
              <!-- </span> -->
            </div> 
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- end Home -->

  <!-- tentang sahabat -->
  <section class="pt-2 mx-auto">
    <div class="container my-10 text-blue-950 mx-auto delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="200">
      <h1 class="text-center font-bold text-4xl uppercase mb-10 ">
        Tentang Sahabat
      </h1>
      <div class="grid lg:grid-cols-3 items-center grid-cols-1">
        <div class="text-center px-5">
          <img src="image/visi.png" alt="" class="mx-auto" width="50" />
          <h2 class="font-semibold text-2xl">Sejarah</h2>
          <p class="mt-2">
            Klub bola basket SAHABAT Ponorogo didirikan sekitar tahun 1980an
            hingga sekarang. Sejak dulu kami menyaring, membina dan mencetak
            bibit bibit pemain basket hingga ke level nasional.
          </p>
        </div>
        <div class="text-center px-5">
          <img src="image/visi.png" alt="" class="mx-auto" width="50" />
          <h2 class="font-semibold text-2xl">Visi</h2>
          <p class="mt-2">
            Menjadi pusat pembinaan klub bola basket pemain muda dan usia dini
            untuk mengembangkan minat, bakat dan budaya untuk menciptakan
            atlet-atlet yang berkaratker dan berkualitas agar semakin
            berprestasi
          </p>
        </div>
        <div class="text-center px-5">
          <img src="image/visi.png" alt="" class="mx-auto" width="50" />
          <h2 class="font-semibold text-2xl">Misi</h2>
          <p class="mt-2">
            Mengembangkan bakat yang baik, konsisten dan terkoordinasi untuk
            mencapai peningkatan besar dalam kinerja student athlet.
            Menjadikan wadah konsultatif dan kolaboratif, multifase tentang
            pengembangan student athlet
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- end tentang sahabat -->
  <!-- goals -->
  <section id="home" class="pt-2">
    <div class="bg-blue-950 sticky">
      <div class="container mx-auto">
        <div class="flex flex-wrap bg-no-repeat bg-center">
          <div class="w-full self-start lg:w-1/2">
            <div class="relative mt-10">
              <img src="image/arya.png" alt="" class="max-w-full mx-auto mr-1 duration-[1000ms] [animation-iteration-count:infinite] taos:opacity-0"" data-taos-offset="300" />
              <img src="image/Ellipse.png" alt=""
                class="absolute bottom-0 left-36 lg:left-48 -z-10 -translate-x-1/2 w-full" />
              <!-- </span> -->
            </div>
          </div>
          <div class="w-full self-center lg:w-1/2 text-white duration-[600ms] taos:translate-x-[50%] taos:invisible [animation-iteration-count:infinite]" data-taos-offset="10">
            <h1 class="text-center lg:text-8xl text-4xl pt-5">Goals</h1>
            <ul class="my-10 px-5 delay-[300ms] ">
              <li class="mt-5 ">
                <p class="text-lg lg:text-xl">
                  Menyediakan Program Pengembangan dan Identifikasi Bakat bola
                  basket yang terkoordinasi dengan baik dan konsisten untuk
                  bola basket di Indonesia yang bertujuan untuk mencapai
                  peningkatan besar dalam kualitas dan kinerja pemain,
                  pelatih, dan tim di club Sahabat dan Kota Ponorogo
                </p>
              </li>
              <li class="mt-5">
                <p class="text-lg lg:text-xl">
                  Memberikan dasar untuk perkembangan semua anak sehingga
                  dapat memberikan pengalaman bola basket yang positif bagi
                  setiap anak yang berpartisipasi dalam olahraga Bola Basket.
                </p>
              </li>
              <li class="mt-5">
                <p class="text-lg lg:text-xl">
                  Lingkungan dan kegiatan yang positif dan menyenangkan bagi
                  anak anak. Sehingga mereka bisa bermain sekaligus belajar
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- endgoals -->
  <!-- program -->
  <section id="program">
    <div class="container mx-auto text-blue-950 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">
      <h1 class="text-center font-bold text-4xl uppercase my-20">Progams</h1>
      <div class="flex flex-wrap mt-5 delay-[500ms] duration-[500ms] taos:translate-y-[-30%] taos:invisible [animation-iteration-count:infinite]" data-taos-offset="15">
        <div class="w-44 mx-auto border bg-white rounded-lg shadow-xl text-center m-2 group">
          <div class="bg-blue-950 rounded-lg px-5 my-4 w-32 h-[93px] mx-auto group-hover">
            <img src="image/syahru.png" class="max-h-[100px] mx-auto" alt="" />
          </div>
          <h1 class="font-bold text-2xl">Pre Hoops</h1>
          <div class="mt-2 mb-5 bg-orange-600 text-white text-sm w-32 lg:text-lg rounded-lg mx-auto">
            <a href="\program" class="">View Programs</a>
          </div>
        </div>
        <div class="w-44 mx-auto border bg-white rounded-lg shadow-xl text-center m-2">
          <div class="bg-blue-950 rounded-lg px-5 my-4 w-32 h-[93px] mx-auto group-hover">
            <img src="image/Takur 1.png" class="max-h-[100px] mx-auto" alt="" />
          </div>
          <h1 class="font-bold text-blue-950 text-2xl">Hoops</h1>
          <div class="mt-2 mb-5 bg-orange-600 text-white text-sm w-32 lg:text-lg rounded-lg mx-auto">
            <a href="program.html" class="">View Programs</a>
          </div>
        </div>
        <div class="w-44 mx-auto border bg-white rounded-lg shadow-xl text-center m-2">
          <div class="bg-blue-950 rounded-lg px-5 my-4 w-32 h-[93px] mx-auto group-hover">
            <img src="image/vanes.png" class="max-h-[100px] mx-auto" alt="" />
          </div>
          <h1 class="font-bold text-blue-950 text-2xl">Rookie</h1>
          <div class="mt-2 mb-5 bg-orange-600 text-white text-sm w-32 lg:text-lg rounded-lg mx-auto">
            <a href="program.html" class="">View Programs</a>
          </div>
        </div>
        <div class="w-44 mx-auto border bg-white rounded-lg shadow-xl text-center m-2">
          <div class="bg-blue-950 rounded-lg px-5 my-4 w-32 h-[93px] mx-auto group-hover">
            <img src="image/roza.png" class="max-h-[100px] mx-auto" alt="" />
          </div>
          <h1 class="font-bold text-blue-950 text-2xl">Starter</h1>
          <div class="mt-2 mb-5 bg-orange-600 text-white text-sm w-32 lg:text-lg rounded-lg mx-auto">
            <a href="program.html" class="">View Programs</a>
          </div>
        </div>
        <div class="w-44 mx-auto border bg-white rounded-lg shadow-xl text-center m-2">
          <div class="bg-blue-950 rounded-lg px-5 my-4 w-32 h-[93px] mx-auto group-hover">
            <img src="image/Ellipse.png" class="max-h-[100px] mx-auto" alt="" />
          </div>
          <h1 class="font-bold text-blue-950 text-2xl">Elite</h1>
          <div class="mt-2 mb-5 bg-orange-600 text-white text-sm w-32 lg:text-lg rounded-lg mx-auto">
            <a href="program.html" class="">View Programs</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- endprogram -->

  <!-- coaching -->
  <section id="coaching">
    <div class="container mx-auto delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100" >
      <h1 class="text-center font-bold text-4xl uppercase my-20 text-blue-950">Coaching</h1>
      <div class="flex flex-wrap mt-5 delay-[300ms] duration-[500ms] taos:translate-y-[50%] taos:invisible [animation-iteration-count:infinite] " data-taos-offset="30">
        <div class="w-44 mx-auto border bg-white rounded-lg shadow-xl text-center m-2 border-b-[20px] border-b-orange-600 mb-5 ">
          <div class="bg-blue-950 rounded-lg px-5 my-4 w-32 mx-auto h-16 relative">
            <img src="image/Takur 1.png" class="max-h-[130px] mx-auto absolute bottom-0 right-1" alt="" />
          </div>
          <h1 class="font-bold text-blue-950 text-xl h-[60px] line-clamp-3 px-2">Muhammad Asfahany Arya Hindrian</h1>
          <h1 class="font-semibold text-blue-950 text-sm line-clamp-2 px-3">Pyshical Development</h1>
          <h1 class="font-semibold text-orange-600 text-sm">
          <h1 class="font-semibold text-orange-600 text-sm">
            <a href="coaching.html">View Coach</a>
          </h1>
          <!-- <div class=" bg-orange-600 text-orange-600">.</div> -->
        </div>
        <div class="w-44 mx-auto border bg-white rounded-lg shadow-xl text-center m-2 border-b-[20px] border-b-orange-600  mb-5">
          <div class="bg-blue-950 rounded-lg px-5 my-4 w-32 mx-auto h-16 relative">
            <img src="image/Takur 1.png" class="max-h-[130px] mx-auto absolute bottom-0 right-1" alt="" />
          </div>
          <h1 class="font-bold text-blue-950 text-xl h-[60px] line-clamp-3 px-2">Titis Demokratis</h1>
          <h1 class="font-semibold text-blue-950 text-sm line-clamp-2 px-3">Elite Coach</h1>
          <h1 class="font-semibold text-orange-600 text-sm">
            <a href="coaching.html">View Coach</a>
          </h1>
        </div>
        <div class="w-44 mx-auto border bg-white rounded-lg shadow-xl text-center m-2 border-b-[20px] border-b-orange-600  mb-5">
          <div class="bg-blue-950 rounded-lg px-5 my-4 w-32 mx-auto h-16 relative">
            <img src="image/Takur 1.png" class="max-h-[130px] mx-auto absolute bottom-0 right-6 " alt="" />
          </div>
          <h1 class="font-bold text-blue-950 text-xl h-[60px] line-clamp-3 px-2">Rendra Swastika Putra</h1>
          <h1 class="font-semibold text-blue-950 text-sm line-clamp-2 px-3">Head Coach</h1>
          <h1 class="font-semibold text-orange-600 text-sm">
            <a href="coaching.html">View Coach</a>
          </h1>
        </div>
        <div class="w-44 mx-auto border bg-white rounded-lg shadow-xl text-center m-2 border-b-[20px] border-b-orange-600  mb-5">
          <div class="bg-blue-950 rounded-lg px-5 my-4 w-32 mx-auto h-16 relative">
            <img src="image/Takur 1.png" class="max-h-[130px] mx-auto absolute bottom-0 right-1" alt="" />
          </div>
          <h1 class="font-bold text-blue-950 text-xl h-[60px] line-clamp-3 px-2">Baharuddin Suryo Nugroho</h1>
          <h1 class="font-semibold text-blue-950 text-sm line-clamp-2 px-3">Elite Coach</h1>
          <h1 class="font-semibold text-orange-600 text-sm">
            <a href="#">View Coach</a>
          </h1>
         
        </div>
        <div class="w-44 mx-auto border bg-white rounded-lg shadow-xl text-center m-2 border-b-[20px] border-b-orange-600 mb-5">
          <div class="bg-blue-950 rounded-lg px-5 my-4 w-32 mx-auto h-16 relative">
            <img src="image/Takur 1.png" class="max-h-[130px] mx-auto absolute bottom-0 right-1" alt="" />
          </div>
          <h1 class="font-bold text-blue-950 text-xl h-[60px] line-clamp-3 px-2">Riza Afif Syamaidzar</h1>
          <h1 class="font-semibold text-blue-950 text-sm line-clamp-2 px-3">Fundamental Coach</h1>
          <h1 class="font-semibold text-orange-600 text-sm">
            <a href="#">View Coach</a>
          </h1>
        </div>
      </div>
      <h2 class="bg-blue-950 text-center text-white text-2xl w-56 mx-auto rounded-lg shadow-xl mb-20 mt-8 py-2">
        <a href="coaching.html">View All Coaching</a>
      </h2>
    </div>
  </section>
  <!-- coaching -->
  <!-- kabar sahabat -->
  <section>
    <div class="container mx-auto delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">
      <h1 class="text-center font-bold text-4xl uppercase my-20 text-blue-950">
        Kabar Sahabat
      </h1>
      <div class="flex flex-wrap mx-10">
        <div class="w-full bg-white shadow-lg lg:w-[520px] p-5 rounded-lg mx-auto my-2">
          <a href="">  <img src="image/berita.png" class="w-[485px] h-[185px]" alt="" />
          <h1 class="text-orange-600 font-bold text-lg">
            Pemain Sahabat Berhasil mengantarkan Sekolahnya menuju Fantastic
            Four Dbl
          </h1>
          <h2 class="text-blue-950 font-bold">Sabtu, 19 Agustus 2023</h2>
          <p class="line-clamp-3">
            Dasa,Hafiz,Jojo,Adit,Raka, dan Freya dengan permainan yang sangat
            mendominasi berhasil membawakan tim mereka melaju ke fantastic
            four DBL 2023 Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ad quod similique vel ipsa magnam? Voluptatum odit aliquid atque ut.
          </p>
        </a>
        </div>
        <div class="w-full bg-white shadow-lg lg:w-[520px] mx-auto my-2 p-5 rounded-lg">
          <a href="">  <img src="image/galeri.png" class="w-[485px] h-[185px]" alt="" />
            <h1 class="text-orange-600 font-bold text-lg">
              Pemain Sahabat Berhasil mengantarkan Sekolahnya menuju Fantastic
              Four Dbl
            </h1>
            <h2 class="text-blue-950 font-bold">Sabtu, 19 Agustus 2023</h2>
            <p class="line-clamp-3">
              Dasa,Hafiz,Jojo,Adit,Raka, dan Freya dengan permainan yang sangat
              mendominasi berhasil membawakan tim mereka melaju ke fantastic
              four DBL 2023 Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ad quod similique vel ipsa magnam? Voluptatum odit aliquid atque ut.
            </p>
          </a>
        </div>
        <h2 class="bg-blue-950 text-center text-white text-2xl w-64 mx-auto rounded-lg shadow-xl mb-20 mt-8 py-2">
          <a href="berita.html">View All Kabar Sahabat</a>
        </h2>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section id="galery">
    <div class="container mx-auto delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">
      <h1 class="font-bold text-4xl uppercase text-center my-10 text-blue-950">Gallery</h1>
      <div class="flex flex-wrap ">
        <div class="w-full lg:w-1/4 my-3">
          <a href="">
            <img src="image/galeri.png" alt="" class="w-[270px] h-[205px] mx-auto">
            <h1 class="text-center text-xl bg-blue-950 text-white rounded-sm w-[270px] mx-auto  shadow-xl">coaching clinic</h1>
          </a>
        </div>
        <div class="w-full lg:w-1/4 my-3">
          <a href="">
          <img src="image/arya.png" alt="" class="w-[270px] h-[205px] mx-auto">
          <h1 class="text-center text-xl bg-blue-950 text-white rounded-sm w-[270px]  mx-auto  shadow-xl">coaching clinic</h1>
        </a>
      </div>
      <div class="w-full lg:w-1/4 my-3">
        <a href="">
        <img src="image/galeri.png" alt="" class="w-[270px] h-[205px] mx-auto">
        <h1 class="text-center text-xl bg-blue-950 text-white rounded-sm w-[270px] mx-auto  shadow-xl">coaching clinic</h1>
      </a>
    </div>
    <div class="w-full lg:w-1/4 my-3">
      <a href="">
      <img src="image/berita.png" alt="" class="w-[270px] h-[205px] mx-auto">
      <h1 class="text-center text-xl bg-blue-950 text-white rounded-sm w-[270px] mx-auto  shadow-xl">coaching clinic</h1>
    </a>
  </div>
        
      
      </div>
      <h2 class="font-bold text-lg bg-blue-950 text-center w-48 mx-auto mt-5 text-white rounded-lg p-2 mb-10"><a href="">View
          More Album </a></h2>
    </div>
  </section>
  <!-- end Gallery -->

  @endsection
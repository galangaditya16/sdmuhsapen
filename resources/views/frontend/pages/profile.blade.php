@extends('frontend.layouts.app')

@section('extend-header')
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        .swiper-wrapper {
            width: 100%;
            height: max-content !important;
            padding-bottom: 64px !important;
            -webkit-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
            position: relative;
        }

        .swiper-pagination-bullet {
            background: #4f46e5;
        }

        .swiper-pagination-bullet-active {
            background: #4F46E5 !important;
        }
    </style>
@endsection

@section('content')
    <!-- PROFILE SD MUHAMDIYAH SAPEN -->
    <x-profile-menu-header title="Profil SD Muhammadiyah Sapen" />

    <section class="my-10 md:my-20">
        <!--HTML CODE-->
        <div class="w-full ">
            <div class="flex flex-col">
                <div class="container mx-auto">
                    <iframe class="rounded-2xl w-auto h-auto md:w-[650px] md:h-[400px] lg:w-[900px] lg:h-[497px] mx-6"
                        src="https://www.youtube.com/embed/Tg3HPOaezX4?si=rltAfYV7_FboAb9l"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                    >
                    </iframe>
                </div>
            </div>
        </div>

    </section>

    <!-- PROFILE SD MUHAMDIYAH SAPEN -->
    <section class="my-20">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4">
            <h1 class="text-2xl md:text-5xl font-bold my-8 text-oren text-center">Tentang SD Muhammadiyah Sapen</h1>
            <div class="grid md:grid-cols-2 grid-rows-auto gap-8">
                <div class="flex-auto w-50">
                    <img class="h-auto max-w-full rounded-lg" src="https://sdmuhsapen-yog.sch.id/assets/images/prof-20012025.jpeg"
                        alt="image description">
                </div>
                <div>

                    <h1 class="text-xl md:text-4xl font-bold my-3 text-dark-blue">Sejarah Sekolah Dasar Muhammadiyah Sapen</h1>
                    <p class="text-sm md:text-base mt-3 text-justify">
                        Sekolah Dasar (SD) Sapen, yang terletak di Yogyakarta, memiliki sejarah yang kaya. Didirikan pada tahun 1976, SD Sapen bertujuan untuk memberikan pendidikan dasar yang berkualitas bagi anak-anak di sekitar wilayah Sapen. Sejak awal, sekolah ini fokus pada pengembangan karakter dan akademik siswa, dengan menekankan pentingnya pendidikan yang holistik.
                    </p>
                    <p class="text-sm md:text-base mt-3 text-justify" >
                        Selama bertahun-tahun, SD Sapen mengalami berbagai perkembangan, baik dalam kurikulum maupun fasilitas. Dengan dukungan masyarakat dan pemerintah, sekolah ini terus berupaya untuk meningkatkan mutu pendidikan dan mengadaptasi metode pengajaran yang relevan dengan kebutuhan zaman.
                    </p>

                </div>


            </div>
        </div>

    </section>
    <!-- END - PROFILE SD MUHAMDIYAH SAPEN -->

    <!-- KEUNGGULAN -->
    <section class=" border-gray-200">

        <div class="w-full relative container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl font-bold my-5 text-dark-blue mx-auto">Keunggulan SD Muhammadiyah Sapen</h1>
            </div>
            <div class="flex flex-nowrap md:grid overflow-x-auto md:grid-cols-3 gap-16 max-h-[65%] lg:h-auto">
                {{-- <div class="swiper-wrapper"> --}}
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">
                            <a href="javascript:void(0)"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                              <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                              </svg>
                              <h5
                                class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                Unggul dalam Ilmu Pendidikan
                              </h5>
                              <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                SD Muhammadiyah Sapen Yogyakarta unggul dalam ilmu pendidikan dengan kurikulum terpadu, metode pengajaran inovatif, dan tenaga pendidik berkualitas yang berkomitmen mencetak generasi cerdas, kreatif, dan berakhlak mulia.
                              </p>

                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="javascript:void(0)"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    viewBox="0 0 512 560">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M0 256C0 114.6 114.6 0 256 0c33 0 64.6 6.3 93.6 17.7c7.4 2.9 11.5 10.7 9.8 18.4s-8.8 13-16.7 12.4c-4.8-.3-9.7-.5-14.6-.5c-114.9 0-208 93.1-208 208s93.1 208 208 208c4.9 0 9.8-.2 14.6-.5c7.9-.5 15 4.7 16.7 12.4s-2.4 15.5-9.8 18.4C320.6 505.7 289 512 256 512C114.6 512 0 397.4 0 256zM375.4 137.4c3.5-7.1 13.7-7.1 17.2 0l31.5 63.8c1.4 2.8 4.1 4.8 7.2 5.3l70.4 10.2c7.9 1.1 11 10.8 5.3 16.4l-50.9 49.6c-2.3 2.2-3.3 5.4-2.8 8.5l12 70.1c1.3 7.8-6.9 13.8-13.9 10.1l-63-33.1c-2.8-1.5-6.1-1.5-8.9 0l-63 33.1c-7 3.7-15.3-2.3-13.9-10.1l12-70.1c.5-3.1-.5-6.3-2.8-8.5L261 233.1c-5.7-5.6-2.6-15.2 5.3-16.4l70.4-10.2c3.1-.5 5.8-2.4 7.2-5.3l31.5-63.8z">
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                    Unggul dalam Ilmu Agama
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                    SD Muhammadiyah Sapen Yogyakarta unggul dalam ilmu agama melalui program tahfiz Al-Qur'an, pembiasaan ibadah, dan penguatan akhlak Islami, membimbing siswa menjadi pribadi beriman, berakhlak mulia, dan berkarakter kuat.
                                </p>
                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="javascript:void(0)"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 512 560">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z">
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                    Tenaga Pengajar yang Kompeten
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                    SD Muhammadiyah Sapen Yogyakarta memiliki tenaga pengajar yang kompeten, berpengalaman, dan berdedikasi tinggi dalam mendidik siswa, menggunakan metode inovatif untuk mencetak generasi berprestasi, berkarakter Islami, dan berdaya saing global.
                                </p>
                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="javascript:void(0)"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 512 560">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M512 256c0 .9 0 1.8 0 2.7c-.4 36.5-33.6 61.3-70.1 61.3H344c-26.5 0-48 21.5-48 48c0 3.4 .4 6.7 1 9.9c2.1 10.2 6.5 20 10.8 29.9c6.1 13.8 12.1 27.5 12.1 42c0 31.8-21.6 60.7-53.4 62c-3.5 .1-7 .2-10.6 .2C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-96a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm96 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z">
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                    Unggul dalam Inovasi dan Kreatifitas Pembelajaran
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                    SD Muhammadiyah Sapen Yogyakarta unggul dalam inovasi dan kreativitas pembelajaran dengan menerapkan metode modern, teknologi interaktif, dan pendekatan tematik, sehingga siswa lebih aktif, kreatif, dan terlibat dalam proses belajar.
                                </p>
                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="javascript:void(0)"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 560 560">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M288 0H400c8.8 0 16 7.2 16 16V80c0 8.8-7.2 16-16 16H320.7l89.6 64H512c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H336V400c0-26.5-21.5-48-48-48s-48 21.5-48 48V512H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64H165.7L256 95.5V32c0-17.7 14.3-32 32-32zm48 240a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM80 224c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H80zm368 16v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H464c-8.8 0-16 7.2-16 16zM80 352c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H80zm384 0c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H464z">
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                    Fasilitas Pendukung yang Memadai
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                    SD Muhammadiyah Sapen Yogyakarta memiliki fasilitas pendukung yang memadai, seperti ruang kelas modern, perpustakaan lengkap, laboratorium teknologi, area olahraga, dan tempat ibadah, menciptakan lingkungan belajar yang nyaman dan kondusif.
                                </p>
                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="javascript:void(0)"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 512 560">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M511.8 267.4c-26.1 8.7-53.4 13.8-81 15.1c9.2-105.3-31.5-204.2-103.2-272.4C434.1 41.1 512 139.5 512 256c0 3.8-.1 7.6-.2 11.4zm-3.9 34.7c-5.8 32-17.6 62-34.2 88.7c-97.5 48.5-217.7 42.6-311.9-24.5c23.7-36.2 55.4-67.7 94.5-91.8c79.9 43.2 170.1 50.8 251.6 27.6zm-236-55.5c-2.5-90.9-41.1-172.7-101.9-231.7C196.8 5.2 225.8 0 256 0c2.7 0 5.3 0 7.9 .1c90.8 60.2 145.7 167.2 134.7 282.3c-43.1-2.4-86.4-14.1-126.8-35.9zM138 28.8c20.6 18.3 38.7 39.4 53.7 62.6C95.9 136.1 30.6 220.8 7.3 316.9C2.5 297.4 0 277 0 256C0 157.2 56 71.5 138 28.8zm69.6 90.5c19.5 38.6 31 81.9 32.3 127.7C162.5 294.6 110.9 368.9 90.2 451C66 430.4 45.6 405.4 30.4 377.2c6.7-108.7 71.9-209.9 177.1-257.9zM256 512c-50.7 0-98-14.7-137.8-40.2c5.6-27 14.8-53.1 27.4-77.7C232.2 454.6 338.1 468.8 433 441c-46 44-108.3 71-177 71z">
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                    Program Ekstrakulikuler Penunjang Prestasi
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                    SD Muhammadiyah Sapen Yogyakarta memiliki program ekstrakurikuler unggulan yang menunjang prestasi, seperti seni, olahraga, tahfiz Al-Qur'an, teknologi dan keterampilan , yang membantu mengembangkan bakat dan minat siswa secara optimal.
                                </p>
                            </a>

                        </div>
                    </div>
                {{-- </div> --}}
                <div class="multiple-swiper-pagination"></div>
            </div>

        </div>

    </section>
    <!-- END - KEUNGGULAN -->

    <!-- SEJARAH SEKOLAH  -->
    {{-- <section class="my-20">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4">
            <div class="grid md:grid-cols-2 grid-rows-auto gap-8">
                <div class="flex-auto w-50">
                    <p class="text-sm md:text-base mt-3 text-justify">
                        SD Muhammadiyah Sapen berdiri pada tahun 1 Agustus 1967. Tidak seperti sekolah-sekolah swasta sekarang yang didirikan dengan modal besar oleh pemilik atau yayasannya, SD Muhammadiyah Sapen didirikan dengan modal niat, semangat, dan keihlasan oleh para pendirinya. Diantara para tokoh yang memprakarsai berdirinya SD Muhammadiyah Sapen adalah H. Sutrisno, Drs. Marsum, M.M., Sumarno, Djazari Hisyam, S.H., Drs. Kirmadji, dan tokoh sekitar kampung Sapen yang peduli dengan pendidikan.
                    </p>
                    <a href="#">
                        <button type="button" class="mt-5 text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                            Pelajari Selengkapnya
                        </button>
                    </a>
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/id/1/5000/3333" alt="image description">
                </div>
            </div>
        </div>
    </section> --}}
    <!-- END - SEJARAH SEKOLAH -->

    <!-- PRESTASI -->
    <section class=" border-gray-200 my-10 py-1 bg-biru-tua">

      <div class="w-full relative container mx-auto px-4 py-5">
        <div class="text-center">
          <h1 class="text-4xl font-bold my-5 text-white mx-auto">Prestasi Kami</h1>
        </div>
        <div class="flex flex-nowrap md:grid overflow-x-auto md:grid-cols-6 gap-2 max-h-[65%]">

          <div class="block w-[33%] md:w-auto">
            <div class="flex items-center justify-center">

              <a href="#"
                class="block w-full p-6 h-96 rounded-2xl group justify-items-center">

                <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 600 600">
                  <path fill-rule="evenodd" d="M282.6 78.1c8-27.3 33-46.1 61.4-46.1H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H344L238.7 457c-3.6 12.3-14.1 21.2-26.8 22.8s-25.1-4.6-31.5-15.6L77.6 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H77.6c22.8 0 43.8 12.1 55.3 31.8l65.2 111.8L282.6 78.1zM393.4 233.4c12.5-12.5 32.8-12.5 45.3 0L480 274.7l41.4-41.4c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3L525.3 320l41.4 41.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L480 365.3l-41.4 41.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L434.7 320l-41.4-41.4c-12.5-12.5-12.5-32.8 0-45.3z clip-rule="evenodd"/>
                </svg>

                <h5 class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center" data-text="129">0</h5>
                <p class="group-hover:block text-white font-bold text-center mt-2">
                Bidang Akademis
                </p>

              </a>

            </div>
          </div>

          <div class="block w-[33%] md:w-auto">
            <div class="flex items-center justify-center">

              <a href="#"
                class="block w-full p-6 h-96 rounded-2xl group justify-items-center">

                <svg class="w-[100%] h-[50%] md:w-[40%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 448 512">
                  <path fill-rule="evenodd" d="M0 32v448h448V32H0zm316.5 325.2L224 445.9l-92.5-88.7 64.5-184-64.5-86.6h184.9L252 173.2l64.5 184z" clip-rule="evenodd"/>
                </svg>

                <h5 class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center" data-text="945">0</h5>
                <p class="group-hover:block text-white font-bold text-center mt-2">
                Prestasi Siswa
                </p>

              </a>

            </div>
          </div>

          <div class="block w-[33%] md:w-auto">
            <div class="flex items-center justify-center">

              <a href="#"
                class="block w-full p-6 h-96 rounded-2xl group justify-items-center">

                <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 640 512">
                  <path fill-rule="evenodd" d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z" clip-rule="evenodd"/>
                </svg>

                <h5 class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center" data-text="174">0</h5>
                <p class="group-hover:block text-white font-bold text-center mt-2">
                Prestasi Guru
                </p>

              </a>

            </div>
          </div>

          <div class="block w-[33%] md:w-auto">
            <div class="flex items-center justify-center">

              <a href="#"
                class="block w-full p-6 h-96 rounded-2xl group justify-items-center">

                <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 640 560">
                  <path fill-rule="evenodd" d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96H48C21.5 96 0 117.5 0 144V464c0 26.5 21.5 48 48 48H592c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48H473.7L337.8 5.4zM256 416c0-35.3 28.7-64 64-64s64 28.7 64 64v96H256V416zM96 192h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V208c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V208zM96 320h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V336zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H336V144c0-8.8-7.2-16-16-16z" clip-rule="evenodd"/>
                </svg>

                <h5 class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center" data-text="19">0</h5>
                <p class="group-hover:block text-white font-bold text-center mt-2">
                Prestasi Sekolah
                </p>

              </a>

            </div>
          </div>

          <div class="block w-[33%] md:w-auto">
            <div class="flex items-center justify-center">

              <a href="#"
                class="block w-full p-6 h-96 rounded-2xl group justify-items-center">

                <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 512 560">
                  <path fill-rule="evenodd" d="M51.7 295.1l31.7 6.3c7.9 1.6 16-.9 21.7-6.6l15.4-15.4c11.6-11.6 31.1-8.4 38.4 6.2l9.3 18.5c4.8 9.6 14.6 15.7 25.4 15.7c15.2 0 26.1-14.6 21.7-29.2l-6-19.9c-4.6-15.4 6.9-30.9 23-30.9h2.3c13.4 0 25.9-6.7 33.3-17.8l10.7-16.1c5.6-8.5 5.3-19.6-.8-27.7l-16.1-21.5c-10.3-13.7-3.3-33.5 13.4-37.7l17-4.3c7.5-1.9 13.6-7.2 16.5-14.4l16.4-40.9C303.4 52.1 280.2 48 256 48C141.1 48 48 141.1 48 256c0 13.4 1.3 26.5 3.7 39.1zm407.7 4.6c-3-.3-6-.1-9 .8l-15.8 4.4c-6.7 1.9-13.8-.9-17.5-6.7l-2-3.1c-6-9.4-16.4-15.1-27.6-15.1s-21.6 5.7-27.6 15.1l-6.1 9.5c-1.4 2.2-3.4 4.1-5.7 5.3L312 330.1c-18.1 10.1-25.5 32.4-17 51.3l5.5 12.4c8.6 19.2 30.7 28.5 50.5 21.1l2.6-1c10-3.7 21.3-2.2 29.9 4.1l1.5 1.1c37.2-29.5 64.1-71.4 74.4-119.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm144.5 92.1c-2.1 8.6 3.1 17.3 11.6 19.4l32 8c8.6 2.1 17.3-3.1 19.4-11.6s-3.1-17.3-11.6-19.4l-32-8c-8.6-2.1-17.3 3.1-19.4 11.6zm92-20c-2.1 8.6 3.1 17.3 11.6 19.4s17.3-3.1 19.4-11.6l8-32c2.1-8.6-3.1-17.3-11.6-19.4s-17.3 3.1-19.4 11.6l-8 32zM343.2 113.7c-7.9-4-17.5-.7-21.5 7.2l-16 32c-4 7.9-.7 17.5 7.2 21.5s17.5 .7 21.5-7.2l16-32c4-7.9 .7-17.5-7.2-21.5z" clip-rule="evenodd"/>
                </svg>

                <h5 class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center" data-text="84">0</h5>
                <p class="group-hover:block text-white font-bold text-center mt-2">
                Prestasi Internasional
                </p>

              </a>

            </div>
          </div>

          <div class="block w-[33%] md:w-auto">
            <div class="flex items-center justify-center">

              <a href="#"
                class="block w-full p-6 h-96 rounded-2xl group justify-items-center">

                <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 512 560">
                  <path fill-rule="evenodd" d="M62.7 223.4c-4.8 .4-9.7 .6-14.7 .6c-15.6 0-30.8-2-45.2-5.9C19.2 107.1 107.1 19.2 218.1 2.8C222 17.2 224 32.4 224 48c0 4.9-.2 9.8-.6 14.7c-.7 8.8 5.8 16.5 14.6 17.3s16.5-5.8 17.3-14.6c.5-5.7 .7-11.5 .7-17.3c0-16.5-1.9-32.6-5.6-47.9c1.8 0 3.7-.1 5.6-.1C397.4 0 512 114.6 512 256c0 1.9 0 3.7-.1 5.6c-15.4-3.6-31.4-5.6-47.9-5.6c-5.8 0-11.6 .2-17.3 .7c-8.8 .7-15.4 8.5-14.6 17.3s8.5 15.4 17.3 14.6c4.8-.4 9.7-.6 14.7-.6c15.6 0 30.8 2 45.2 5.9C492.8 404.9 404.9 492.8 293.9 509.2C290 494.8 288 479.6 288 464c0-4.9 .2-9.8 .6-14.7c.7-8.8-5.8-16.5-14.6-17.3s-16.5 5.8-17.3 14.6c-.5 5.7-.7 11.5-.7 17.3c0 16.5 1.9 32.6 5.6 47.9c-1.8 0-3.7 .1-5.6 .1C114.6 512 0 397.4 0 256c0-1.9 0-3.7 .1-5.6C15.4 254.1 31.5 256 48 256c5.8 0 11.6-.2 17.3-.7c8.8-.7 15.4-8.5 14.6-17.3s-8.5-15.4-17.3-14.6zM121.3 208c-8 3.7-11.6 13.2-7.9 21.2s13.2 11.6 21.2 7.9c45.2-20.8 81.7-57.2 102.5-102.5c3.7-8 .2-17.5-7.9-21.2s-17.5-.2-21.2 7.9c-17.6 38.3-48.5 69.2-86.7 86.7zm277.2 74.7c-3.7-8-13.2-11.6-21.2-7.9c-45.2 20.8-81.7 57.2-102.5 102.5c-3.7 8-.2 17.5 7.9 21.2s17.5 .2 21.2-7.9c17.6-38.3 48.5-69.2 86.7-86.7c8-3.7 11.6-13.2 7.9-21.2z" clip-rule="evenodd"/>
                </svg>

                <h5
                  class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center">
                  93
                </h5>
                <p class="group-hover:block text-white font-bold text-center mt-2">
                Bidang Olahraga
                </p>

              </a>

            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- END - PRESTASI -->

    <!-- VISI MISI  -->
    <section class="my-20">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl font-bold my-5 text-oren mx-auto">Visi & Misi SD Muhammadiyah Sapen</h1>
            </div>
            <div class="grid md:grid-cols-2 grid-rows-auto gap-16">
                <div class="flex-auto w-50">
                    <h1 class="text-4xl font-bold my-5 text-biru-tua mx-auto">Visi</h1>
                    <p class="text-sm md:text-xl my-3 text-justify">
                        Terbentuknya pribadi muslim yang unggul, berakhlak mulia, berbudaya, berwawasan global, dan berkemajuan
                    </p>
                    <img class="h-auto max-w-full rounded-lg" src="https://sdmuhsapen-yog.sch.id/assets/images/testi-20012025.jpeg" alt="visi dan misi sd muh sapen">
                </div>
                <div>
                    <h1 class="text-4xl font-bold my-5 text-biru-tua mx-auto">Misi</h1>
                    <ul class="list-disc ml-5">
                        <li class="text-sm md:text-xl">
                            Melaksanakan pembelajaran dan bimbingan secara efektif sehinggapotensi peserta dididik dapat berkembang.
                        </li>
                        <li class="text-sm md:text-xl">
                            Mengembangkan pembelajaran berbasis IT dan keterampilan bahasa asing.
                        </li>
                        <li class="text-sm md:text-xl">
                            Memberikan kesempatan bagi perkembangan kognitif, psikomotor dan kepada pepembentukan manusia pemecah masalah.
                        </li>
                        <li class="text-sm md:text-xl">
                            Mengembangkan budaya disiplin dan etos kerja yang tinggi.
                        </li>
                        <li class="text-sm md:text-xl">
                            Menyelenggarakan pendidikan lingkungan di sekolah yang dapat menumbuhkan dadan meningkatkan kualitas siswa yang religius.
                        </li>
                        <li class="text-sm md:text-xl">
                            Membangkitkan semangat berprestasi di seluruh warga sekolah.
                        </li>
                        <li class="text-sm md:text-xl">
                            Menumbuhkan kesadaran dan kepedulian terhadap lingkungan.
                        </li>

                    </ul>
                </div>


            </div>
        </div>

    </section>
    <!-- END - VISI MISI -->

    <!-- TUJUAN  -->
    <section class="mt-20 mb-0 py-10" style="background-color: rgba(165, 225, 243, 0.2)">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4 py-5">
            <div class="text-center justify-center">
                <h1 class="absolute text-base md:text-6xl m-auto left-0 right-0 font-bold my-5 md:my-20 text-black text-shadow-white-1 mx-auto text-center z-30">
                    The Truly Inspiring <br> Islamic School
                </h1>
                <img class="h-auto max-w-full rounded-2xl self-center opacity-50" src="{{ asset('assets/images/cover-tujuan.jpg') }}" alt="image description">
            </div>
            <div class="flex justify-center w-full">
                <div class="w-full md:w-1/2">
                    <h1 class="text-4xl font-bold my-5 text-biru-tua mx-auto">Tujuan</h1>
                    <ul class="list-disc ml-5">
                        <li class="text-sm md:text-xl">
                            Menginventarisasi dan menilai sumber daya yang ada di SD Muhammadiyah Sapen Yogyakarta. Menetapkan program pelatihan tentang prestasi siswa.
                        </li>
                        <li class="text-sm md:text-xl">
                            Melibatkan komite sekolah untuk mendapatkan masukan dan dukungan bagi pe pepelaksanaan program sekolah.
                        </li>
                        <li class="text-sm md:text-xl">
                            Menjalin kerjasama dengan berbagai pihak/instansi terkait dalam rangka pepeningkatan kualitas sumber daya manusia.
                        </li>
                        <li class="text-sm md:text-xl">
                            Mengembangkan bidang garapan kejuruan, seperti kemampuan bahasa Inggris, olah raraga dan tata kelola TI.
                        </li>
                        <li class="text-sm md:text-xl">
                            Menumbuhkan kesadaran akan pentingnya lingkungan.
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </section>
    <!-- END - TUJUAN -->

    @include('frontend.layouts.footer')
@endsection



@section('extend-script')
    <script>
        var swiper = new Swiper(".default-carousel", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swiperMultipleSlider = new Swiper(".multiple-slide-carousel", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.multiple-swiper-pagination',
            breakpoints: {
                960: {
                    slidesPerView: 3,
                    spaceBetween: 25,
                }
            }
        });
    </script>
@endsection

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
    <section class=" border-gray-200 my-20">

        <div class="w-full relative container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl font-bold my-5 text-dark-blue mx-auto">Keunggulan SD Muhammadiyah Sapen</h1>
            </div>
            <div class="flex flex-nowrap md:grid overflow-x-auto md:grid-cols-3 gap-16 max-h-[65%]">
                {{-- <div class="swiper-wrapper"> --}}
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">
                            <a href="#"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                              <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
                              </svg>
                              <h5
                                class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                Unggul dalam Ilmu Pendidikan
                              </h5>
                              <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                              SD Muhammadiyah Sapen menerapkan kurikulum terbaru yang mengikuti perkembangan kebijakan
                              pendidikan nasional, dengan fokus pada pembelajaran yang berorientasi pada siswa.
                              Sehingga para peserta didik dapat belajar dengan cara terbaik.
                              </p>

                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="#"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                    Unggul dalam Ilmu Agama
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                    SD Muhammadiyah Sapen menerapkan kurikulum terbaru yang mengikuti perkembangan kebijakan
                                    pendidikan nasional, dengan fokus pada pembelajaran yang berorientasi pada siswa.
                                    Sehingga para peserta didik dapat belajar dengan cara terbaik.
                                </p>
                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="#"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                    Tenaga Pengajar yang Kompeten
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                    SD Muhammadiyah Sapen menerapkan kurikulum terbaru yang mengikuti perkembangan kebijakan
                                    pendidikan nasional, dengan fokus pada pembelajaran yang berorientasi pada siswa.
                                    Sehingga para peserta didik dapat belajar dengan cara terbaik.
                                </p>
                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="#"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                    Unggul dalam Inovasi dan Kreatifitas Pembelajaran
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                    SD Muhammadiyah Sapen menerapkan kurikulum terbaru yang mengikuti perkembangan kebijakan pendidikan nasional, dengan fokus pada pembelajaran yang berorientasi pada siswa.
                                </p>
                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="#"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                    Fasilitas Pendukung yang Memadai
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                    SD Muhammadiyah Sapen menerapkan kurikulum terbaru yang mengikuti perkembangan kebijakan
                                    pendidikan nasional, dengan fokus pada pembelajaran yang berorientasi pada siswa.
                                    Sehingga para peserta didik dapat belajar dengan cara terbaik.
                                </p>
                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="#"
                                class="block w-full rounded-2xl shadow bg-dark-blue hover:bg-blue-300 group scrollable-container-with-custom-scrollbar p-6 h-96">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-dark-blue font-bold tracking-tight text-center">
                                    Program Ekstrakulikuler Penunjang Prestasi
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10 p-6">
                                    SD Muhammadiyah Sapen menerapkan kurikulum terbaru yang mengikuti perkembangan kebijakan
                                    pendidikan nasional, dengan fokus pada pembelajaran yang berorientasi pada siswa.
                                    Sehingga para peserta didik dapat belajar dengan cara terbaik.
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
    <section class=" border-gray-200 my-20 py-5 bg-biru-tua">

        <div class="w-full relative container mx-auto px-4 py-5">
            <div class="text-center">
                <h1 class="text-4xl font-bold my-5 text-white mx-auto">Prestasi Kami</h1>
            </div>
            <div class="flex flex-nowrap md:grid overflow-x-auto md:grid-cols-6 gap-2 max-h-[65%]">

                <div class="block w-[33%] md:w-auto">
                    <div class="flex items-center justify-center">

                        <a href="#"
                            class="block w-full p-6 h-96 rounded-2xl group justify-items-center">

                            <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
                            </svg>

                            <h5
                                class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center">
                                129
                            </h5>
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

                            <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
                            </svg>

                            <h5
                                class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center">
                                945
                            </h5>
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

                            <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
                            </svg>

                            <h5
                                class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center">
                                174
                            </h5>
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

                            <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
                            </svg>

                            <h5
                                class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center">
                                19
                            </h5>
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

                            <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
                            </svg>

                            <h5
                                class="mb-2 text-4xl md:text-4xl text-white font-bold tracking-tight text-center">
                                84
                            </h5>
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

                            <svg class="w-[100%] h-[50%] md:w-[50%] md:h-[50%] text-kuning-tua self-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
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
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/id/1/5000/3333" alt="image description">
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

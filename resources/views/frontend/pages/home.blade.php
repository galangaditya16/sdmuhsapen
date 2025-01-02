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
    {{-- SLIDER CAROUSEL --}}
    <section class=" border-gray-200 mb-20 mt-0 content-center">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4 absolute top-28 md:top-[25%] md:left-[25%] z-20">
            <h1 class="text-sx md:text-2xl font-bold text-kuning-muda">Selamat Datang di</h1>
            <h1 class="text-sm md:text-4xl font-bold my-3 text-white">SD Muhammadiyah Sapen Yogyakarta</h1>
            <h1 class="text-sx md:text-lg my-3 text-white">The Truly Inspiring Islamic School</h1>
            <button type="button" class="text-white ml-3 my-5 font-bold bg-biru-tua hover:bg-blue-900 hover:cursor-pointer rounded-lg text-sm px-5 py-2 text-center md:mx-1">
                Pelajari Lebih Lanjut
            </button>
            <a target="_blank" href="https://wa.me/628112642733?text=Halo%2C%20saya%20ingin%20bertanya%20mengenai%20info%20PPDB%20di%20SD%20Muhammadiyah%20Sapen">
                <button type="button" class="text-white ml-3 my-5 font-bold bg-oren hover:bg-orange-800 hover:cursor-pointer rounded-lg text-sm px-5 py-2 text-center md:mx-1">
                    Inden PPDB
                </button>
            </a>
        </div>
        <div class="w-full">
            <div class="w-full h-[835px] absolute z-[19]" style="background: rgba(0, 0, 0, 0.4)">
                &nbsp;
            </div>
            <div class="swiper default-carousel swiper-container">

                <div class="swiper-wrapper overflow-hidden min-h-[450px]">
                    @foreach ($slider as $sl)
                        <div class="swiper-slide">
                            <div class="bg-indigo-50 flex justify-center items-center w-full max-h-[768px]">
                                <img class="min-h-[450px] md:h-auto md:max-w-full md:object-cover" src="{{ $sl->path . '/' . $sl->image }}" alt="{{  $sl->title }}" >
                                {{-- <span class="text-3xl font-semibold text-indigo-600">{{ $sl->title }}</span> --}}
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="flex items-center gap-8 lg:justify-start justify-center">
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="relative z-20 -top-[70px] md:-top-[115px]">
                <div class="mx-auto max-w-7xl px-6 py-12 sm:py-18 lg:px-8 bg-biru-tua rounded-2xl">
                    <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-4     zZx,">
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4 w-full md:border-r-2">
                            <dt class="text-base leading-7 text-oren">Transactions every 24 hours</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-oren sm:text-5xl">945</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4 w-full md:border-r-2">
                            <dt class="text-base leading-7 text-pink">Assets under holding</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-pink sm:text-5xl">174</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4 w-full md:border-r-2">
                            <dt class="text-base leading-7 text-hijau-terang">New users annually</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-hijau-terang sm:text-5xl">19</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base leading-7 text-biru-langit">New users annually</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-biru-langit sm:text-5xl">84</dd>
                        </div>
                    </dl>
                </div>
            </div>

        </div>




    </section>

    {{-- PERKENALAN SD MUH SAMPEN --}}
    <section class=" border-gray-200 my-20">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4">
            <div class="grid md:grid-cols-2 grid-rows-auto gap-8">

                <div>
                    <h1 class="text-lg font-bold text-oren">Selayang Pandang</h1>
                    <h1 class="text-4xl font-bold my-3 text-dark-blue">SD Muhammadiyah Sapen Yogyakarta</h1>
                    <p class="text-base mt-3 text-justify">
                        SD Muhammadiyah Sapen adalah salah satu sekolah dasar yang berada di Yogyakarta, Indonesia. Sekolah
                        ini merupakan bagian dari jaringan Muhammadiyah, sebuah organisasi Islam yang berfokus pada
                        pendidikan dan sosial. SD Muhammadiyah Sapen dikenal karena mengintegrasikan nilai-nilai agama dalam
                        proses pembelajaran, serta mengutamakan pengembangan karakter dan keterampilan siswa.
                    </p>
                    <a href="#">
                        <button type="button"
                            class="mt-5 text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                            Pelajari Selengkapnya
                        </button>
                    </a>
                </div>
                <div class="flex-auto w-50">
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/id/1/5000/3333"
                        alt="image description">
                </div>

            </div>
        </div>

    </section>

    {{-- KEUNGGULAN --}}
    <section class=" border-gray-200 my-20">

        <div class="w-full relative container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl font-bold my-3 text-black mx-auto">Keunggulan SD Muhammadiyah Sapen</h1>
                <p class="text-lg my-6 text-black mx-auto">
                    SD Muhammadiyah Sapen adalah sekolah yang memiliki berbagai keungggulan dalam membentuk karakter peserta
                    didik antara lain :
                </p>
            </div>
            <div class="swiper multiple-slide-carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="#"
                                class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 group">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-oren font-bold tracking-tight text-center">
                                    Unggul dalam Prestasi Akademik
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10">
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
                                class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 hover:duration-300 group">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-oren font-bold tracking-tight text-center">
                                    Unggul dalam Prestasi NonAkademik
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10">
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
                                class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 group">
                                <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
                                </svg>
                                <h5
                                    class="mb-2 text-3xl md:text-4xl text-white group-hover:text-oren font-bold tracking-tight text-center">
                                    Unggul dalam Pendidikan Karakter
                                </h5>
                                <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10">
                                    SD Muhammadiyah Sapen menerapkan kurikulum terbaru yang mengikuti perkembangan kebijakan
                                    pendidikan nasional, dengan fokus pada pembelajaran yang berorientasi pada siswa.
                                    Sehingga para peserta didik dapat belajar dengan cara terbaik.
                                </p>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="multiple-swiper-pagination"></div>
            </div>

        </div>

    </section>

    {{-- BERITA --}}
    <section class=" border-gray-200 my-20 py-20" style="background-color: rgba(248, 111, 3, 0.1)">
        <div class="w-full block container mx-auto px-4">
            <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto">Berita Terkini</h1>
            <div class="flex flex-nowrap md:grid overflow-x-auto md:grid-cols-3 gap-4 max-h-[65%]">
                @foreach ($berita as $b)
                    @php
                      $contentid = $b->content->firstWhere('lang','id');
                    @endphp
                    <div class="bg-white border  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            @if($b->getFirstImage() !== null)
                                <img class="rounded-t-lg relative mx-auto w-full max-h-[50%]" src="{{ asset('assets/images/news/' . $b->getFirstImage()) }}" alt="" style="object-fit: cover" />
                            @else
                                <img class="rounded-t-lg relative mx-auto w-full max-h-[50%]" src="{{ asset('assets/images/not-found-image.png') }}" alt="" style="object-fit: cover" />
                            @endif
                        </a>
                        <span class="bg-oren p-3 rounded-full md:text-sm relative text-white font-bold left-2 -top-10">
                            {{ $b->ContentNews->getCreatedAtFormated() }}
                        </span>
                        <div class="p-5 w-72 md:w-full">
                            <a href="#">
                                <h5 class="mb-2 text-base md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $b->title ?? $b->title }}
                                </h5>
                            </a>
                            <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400">
                                {{
                                    Str::limit(strip_tags($contentid->body ?? $b->body), 250, '...');
                                }}
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="relative flex">
                <a href="{{ route('news') }}" class="mx-auto">
                    <button type="button"
                        class="mt-5 font-bold text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                        Lihat Semua Berita
                    </button>
                </a>
            </div>
        </div>
    </section>

    {{-- GALERY --}}
    <section class=" border-gray-200 my-20 py-20">
        <div class="w-full block container mx-auto px-4">
            <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto">Galeri Kegiatan</h1>

            <div class="grid grid-cols-2 md:grid-cols-4 md:grid-rows-3 gap-2 h-[560px]">
                <div class="relative bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/galeri/galery-1.jpeg') }}') ">
                    <div
                        class="opacity-0 hover:opacity-80 bg-white duration-300 absolute inset-0 z-10 hidden md:flex text-white font-semibold items-end p-5">
                        <div class="flex flex-col">

                            <span class="flex text-black">
                                <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                                25 Gambar
                            </span>

                            <h3 class="text-dark-blue text-xl">
                                Galeri: Suasana Pembelajaran di SD Muhammadiyah Sapen
                            </h3>
                            <p class="italic text-black text-sm"> Oktober 24, 2024</p>

                        </div>
                    </div>
                </div>

                <div class="relative bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/galeri/galery-2.jpeg') }}') ">
                    <div
                        class="opacity-0 hover:opacity-80 bg-white duration-300 absolute inset-0 z-10 hidden md:flex text-white font-semibold items-end p-5">
                        <div class="flex flex-col">

                            <span class="flex text-black">
                                <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                                25 Gambar
                            </span>

                            <h3 class="text-dark-blue text-xl">
                                Galeri: Suasana Pembelajaran di SD Muhammadiyah Sapen
                            </h3>
                            <p class="italic text-black text-sm"> Oktober 24, 2024</p>

                        </div>
                    </div>
                </div>
                <div class="relative col-span-2 row-span-2 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/galeri/galery-3.jpeg') }}') ">
                    <div
                        class="opacity-0 hover:opacity-80 bg-white duration-300 absolute inset-0 z-10 hidden md:flex text-white font-semibold items-end p-5">
                        <div class="flex flex-col">

                            <span class="flex text-black">
                                <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                                25 Gambar
                            </span>

                            <h3 class="text-dark-blue text-xl">
                                Galeri: Suasana Pembelajaran di SD Muhammadiyah Sapen
                            </h3>
                            <p class="italic text-black text-sm"> Oktober 24, 2024</p>

                        </div>
                    </div>
                </div>
                <div class="relative col-span-2 row-span-2 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/galeri/galery-4.jpeg') }}') ">
                    <div
                        class="opacity-0 hover:opacity-80 bg-white duration-300 absolute inset-0 z-10 hidden md:flex text-white font-semibold items-end p-5">
                        <div class="flex flex-col">

                            <span class="flex text-black">
                                <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                                25 Gambar
                            </span>

                            <h3 class="text-dark-blue text-xl">
                                Galeri: Suasana Pembelajaran di SD Muhammadiyah Sapen
                            </h3>
                            <p class="italic text-black text-sm"> Oktober 24, 2024</p>

                        </div>
                    </div>
                </div>
                <div class="relative bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/galeri/galery-5.jpeg') }}') ">
                    <div
                        class="opacity-0 hover:opacity-80 bg-white duration-300 absolute inset-0 z-10 hidden md:flex text-white font-semibold items-end p-5">
                        <div class="flex flex-col">

                            <span class="flex text-black">
                                <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                                25 Gambar
                            </span>

                            <h3 class="text-dark-blue text-xl">
                                Galeri: Suasana Pembelajaran di SD Muhammadiyah Sapen
                            </h3>
                            <p class="italic text-black text-sm"> Oktober 24, 2024</p>

                        </div>
                    </div>
                </div>
                <div class="relative bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/galeri/galery-6.jpeg') }}') ">
                    <div
                        class="opacity-0 hover:opacity-80 bg-white duration-300 absolute inset-0 z-10 hidden md:flex text-white font-semibold items-end p-5">
                        <div class="flex flex-col">

                            <span class="flex text-black">
                                <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                                25 Gambar
                            </span>

                            <h3 class="text-dark-blue text-xl">
                                Galeri: Suasana Pembelajaran di SD Muhammadiyah Sapen
                            </h3>
                            <p class="italic text-black text-sm"> Oktober 24, 2024</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="relative flex">
                <a href="#" class="mx-auto">
                    <button type="button"
                        class="mt-5 font-bold text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                        Lihat Semua Galery
                    </button>
                </a>
            </div>

        </div>
    </section>

    {{-- TESTIMONI --}}
    <section class=" border-gray-200 my-20 py-20" style="background-color: rgba(165, 225, 243, 0.2)">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4">
            <div class="grid md:grid-cols-2 grid-rows-auto gap-8">

                <div class="overflow-hidden">
                    <h1 class="text-lg font-bold text-oren">Testimonial</h1>
                    <h1 class="text-4xl font-bold my-3 text-dark-blue">Kenapa Memilih Kami?</h1>

                    <div id="default-carousel" class="relative w-full min-h-[500px] md:min-h-[350px]" data-carousel="slide">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <p class="text-base mt-3 text-justify">
                                “SD terbaik di Yogyakarta, bahkan Nasional dengan prestasi yang istimewa. Kepala Sekolah dan
                                Guru-guru amat perhatian dengan murid-muridnya untuk melejitkan menggali potensinya. Terima kasih
                                Bapak Ibu Guru yang telah mendidik anak-anak saya disini dengan baik, disiplin, islami, amanah,
                                berdedikasi, dan semangat. Jazakumullahu khoiran katsir”
                            </p>

                            <h3 class="text-2xl font-bold mt-3 text-dark-blue">Ustadz Eki Firdaus</h3>
                            <p class="text-base">
                                Orang Tua Murid
                            </p>
                            <div class="rate flex flex-row">
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <p class="text-base mt-3 text-justify">
                                SD Muhammadiyah Sapen telah meletakan
                                pondasi dasar yang sangat kuat dalam
                                pembentukan karakter peser ta didik.
                                Karakter inilah yang menjadikan keluaran SD
                                Muhammadiyah Sapen memiliki daya saing
                                yang tinggi serta menjunjung nilai‑nilai
                                akhlakul karimah. Kedua karakter ini menjadi
                                modal sosial yang sangat penting agar
                                peserta didik dapat beradaptasi dengan
                                perkembangan jaman tanpa menafikan peran
                                penting akhlak dalam kehidupannya. Sekolah
                                dasar, Ya SD Muhammadiyah Sapen"
                            </p>

                            <h3 class="text-2xl font-bold mt-3 text-dark-blue">Prof. Dr. Sumaryanto, M.Kes. AIFO.</h3>
                            <p class="text-base">
                                Rektor Universitas Negeri Yogyakarta
                            </p>
                            <div class="rate flex flex-row">
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <p class="text-base mt-3 text-justify">
                                Sebagai orang tua yang berpengalaman
                                menyekolahkan tiga orang anak di SD
                                Muhammadiyah Sapen, saya memberikan
                                apresiasi luar biasa untuk sekolah yang selalu
                                kreatif, inovatif, dan adaptif setiap saat
                                dalam menjawab tantangan‑tantangan
                                perkembangan jaman untuk mampu
                                memberikan pengalaman belajar untuk anak‑anak
                                agar bermakna dan bermanfaat didalam
                                kehidupannya kelak.Pokoknya luar biasa
                                keren untuk SD Muhammadiyah Sapen
                                Yogyakarta. SD Muhammadiyah Sapen
                                merupakan pilihan yang tepat untuk dapat
                                memfasilitasi perkembangan murid melalui
                                proses pendidikan yang berkualitas dan
                                berkarakter.
                            </p>

                            <h3 class="text-2xl font-bold mt-3 text-dark-blue">Prof. Dr. Wuri Wuryandani, S.Pd., M.Pd.</h3>
                            <p class="text-base">
                                Ketua Program Studi S3 Pendidikan Dasar <br>
                                Universitas Negeri Yogyakarta
                            </p>
                            <div class="rate flex flex-row">
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <p class="text-base mt-3 text-justify">
                                “SD Muhammadiyah Sapen memandang anak
                                didik secara utuh dan konsisten memfasilitasi
                                pengembangan setiap potensinya. Ketika
                                pandemi, ikhtiar tersebut tidak surut.
                                Beragam inovasi dimunculkan untuk tidak
                                menyerah pada keadaan yan gmemang tidak
                                mudah. Penggunaan layanan Google Edu,
                                Radio Sapen, SapenTV, produksi konten
                                pembelajaran digital,dan pembuatan modul
                                suplemen bahan ajar, merupakan beberapa
                                contoh konkret yang dapat menjadi rujukan
                                sekolahlain.
                            </p>

                            <h3 class="text-2xl font-bold mt-3 text-dark-blue">Prof. Fathul Wahid, ST., M.Sc., Ph.D.</h3>
                            <p class="text-base">
                                Rektor Universitas Islam Indonesia <br>
                                Orang tua dari alumni Dr. Awanis Akalili, S.I.P., M.A dan Abiyyu Amajida, M.Or. (kandidat doktor FIK UNY)
                            </p>
                            <div class="rate flex flex-row">
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <p class="text-base mt-3 text-justify">
                                Satu kebanggaan dan rasa senang kedua anak
                                kami menjadi alumni SD Muhammadiyah Sapen.
                                Selama kedua anak kami menjadi siswa SD
                                Muhammadiyah Sapen, mereka mendapat
                                pendidikan yang sangat baik di bidang mata
                                pelajaran, bidang keagamaan dan kepribadian.
                                Kini, mereka tumbuh menjadi anak‑anak yang
                                cerdas, disiplin dan tekun sehingga sukses dalam
                                menjalani studi di tingkat yang lebih tinggi. Kami
                                berharap SD Muhammadiyah Sapen terus berkarya
                                mendidik tunas‑tunas bangsa dan terus berinovasi
                                meningkatkan kualitas pendidikannya.
                            </p>

                            <h3 class="text-2xl font-bold mt-3 text-dark-blue">Prof. Ir. Panut Mulyono. M.Eng., D.Eng., IPU, ASEAN Eng</h3>
                            <p class="text-base">
                                Orang tua dari alumni Dr. Aji Resindra Widya, S.T., M.Eng., D.Eng., <br>
                                dan Dyah Ayu Permatasari, S.T., M.Mgt.
                            </p>
                            <div class="rate flex flex-row">
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-6 h-6 text-kuning-tua" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                        </div>

                    </div>

                    <a href="#">
                        <button type="button"
                            class="mt-5 relative text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                            Pelajari Selengkapnya
                        </button>
                    </a>
                </div>
                <div class="flex-auto w-50">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/img-testimoni.jpeg') }}"
                        alt="image description">
                </div>

            </div>
        </div>

    </section>

    {{-- SEMUA SPONSOR --}}
    <section class=" border-gray-200 my-20 py-20">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4">
            <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto">Semua Aplikasi Kami</h1>

            <div class="flex flex-row  gap-4 overflow-x-auto">

                <img class="self-center md:w-[20%]" src="{{ asset('assets/images/logo/bos.png') }}" alt="logo-bos">

                <img class="self-center md:w-[20%]" src="{{ asset('assets/images/logo/dapodik-logo.png') }}"
                    alt="logo-bos">

                <img class="self-center md:w-[20%]" src="{{ asset('assets/images/logo/logo-sipintar.png') }}"
                    alt="logo-bos">

                <img class="self-center md:w-[20%]" src="{{ asset('assets/images/logo/pngtree-merdeka.png') }}"
                    alt="logo-bos">

                <img class="self-center md:w-[20%]" src="{{ asset('assets/images/logo/rumah-belajar.png') }}"
                    alt="logo-bos">

            </div>

        </div>
    </section>

    {{-- FAQ --}}
    <section class=" border-gray-200 my-20 py-40">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4">
            <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto">Pertanyaan yang Sering Ditanyakan</h1>
            <p class="text-center mx-auto">Berikut adalah beberapa pertanyaan yang sering ditanyakan kepada kami. Dapatkan
                jawaban Anda di bawah ini atau hubungi kami secara langsung!</p>

            <div class="flex flex-row gap-4">


                <div class="w-full md:w-10/12 mx-auto mt-8 bg-white" id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">

                    <h2 id="accordion-color-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                            aria-controls="accordion-color-body-1">
                            <span class="text-left">
                                Kenapa saya harus mendaftar di SD Muhammadiyah Sapen?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                Flowbite is an open-source library of
                                interactive components built on top of Tailwind CSS including buttons, dropdowns, modals,
                                navbars, and more.
                            </p>
                            <p class="text-gray-500 dark:text-gray-400">
                                Check out this guide to learn how to
                                <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a>
                                and start developing websites even faster with components on top of Tailwind CSS.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-color-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                            aria-controls="accordion-color-body-2">
                            <span class="text-left">
                                Bagaimana cara mendaftar di SD Muhammadiyah Sapen?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed
                                using the Figma software so everything you see in the library has a design equivalent in our
                                Figma file.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out the
                                <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a>
                                based on the utility classes from Tailwind CSS and components from Flowbite.
                            </p>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                            aria-controls="accordion-color-body-3">
                            <span class="text-left">
                                Apa saja keunggulan dari SD Muhammadiyah Sapen?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                components from Flowbite are open source under the MIT license, whereas Tailwind UI is a
                                paid product. Another difference is that Flowbite relies on smaller and standalone
                                components, whereas Tailwind UI offers sections of pages.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                                Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you
                                from using the best of two worlds.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                            <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><a href="https://flowbite.com/pro/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                            </ul>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-4">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-4" aria-expanded="false"
                            aria-controls="accordion-color-body-4">
                            <span class="text-left">
                                Apabila saya mengikuti PPDB berapa biaya yang dikenakan?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                components from Flowbite are open source under the MIT license, whereas Tailwind UI is a
                                paid product. Another difference is that Flowbite relies on smaller and standalone
                                components, whereas Tailwind UI offers sections of pages.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                                Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you
                                from using the best of two worlds.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                            <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><a href="https://flowbite.com/pro/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
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

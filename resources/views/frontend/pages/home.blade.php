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
            background: #4f46e5
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
        <div class="w-full md:w-[75%] container mx-auto px-4 absolute top-52 md:top-[25%] md:left-[5%] lg:top-[25%] lg:left-[25%] z-20">
            <h1 class="text-xl md:text-2xl font-bold text-kuning-muda">Selamat Datang di</h1>
            <h1 class="text-xl md:text-4xl font-bold my-3 text-white">SD Muhammadiyah Sapen Yogyakarta</h1>
            <h1 class="text-xl md:text-lg my-3 text-white">Sekolahku Inspirasiku</h1>
            <button type="button" class="text-white ml-3 my-5 font-bold bg-biru-tua hover:bg-blue-900 hover:cursor-pointer rounded-lg text-sm px-5 py-2 text-center md:mx-1">
                Pelajari Lebih Lanjut
            </button>
            <a target="_blank" href="https://wa.me/628112642733?text=Halo%2C%20saya%20ingin%20bertanya%20mengenai%20info%20PPDB%20di%20SD%20Muhammadiyah%20Sapen">
                <button type="button" class="text-white ml-3 my-5 font-bold bg-oren hover:bg-orange-800 hover:cursor-pointer rounded-lg text-sm px-5 py-2 text-center md:mx-1">
                PPDB
                </button>
            </a>
        </div>
        <div class="w-full">
            <div class="w-full h-full md:h-[835px] absolute z-[19]" style="background: rgba(0, 0, 0, 0.4)">
                &nbsp;
            </div>
            <div class="relative w-full h-full md:h-[835px] z-[18] overflow-hidden">
                {{--  <div class="default-carousel w-full min-h-[450px] h-full" data-carousel="slide" >  --}}
                    <div class="default-carousel w-full min-h-svh h-full" data-carousel="slide" >
                    @foreach ($slider as $indexSlider=>$sl)
                        <div
                          class="bg-cover shrink-0 duration-1000 ease-in-out hidden" {{ $indexSlider == 0 ? "data-carousel-item='active'" : 'data-carousel-item' }}
                          style="background-image: url('{{ $sl->path . '/' . $sl->image }}');">
                            <div class="bg-indigo-50 flex justify-center items-center w-full max-h-[768px]">
                                {{-- <img class="min-h-[450px] md:h-auto max-w-max md:max-w-full object-cover" src="{{ $sl->path . '/' . $sl->image }}" alt="{{  $sl->title }}"> --}}
                                {{-- <span class="text-3xl font-semibold text-indigo-600">{{ $sl->title }}</span> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center z-30 gap-8 lg:justify-start justify-center"></div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="relative z-20 -top-[70px] md:-top-[50px] mx-5">
                <div class="mx-auto max-w-7xl px-6 py-12 sm:py-18 lg:px-8 bg-biru-tua rounded-2xl">
                    <dl class="grid grid-cols-2 md:grid-cols-2 gap-x-8 gap-y-16 text-center lg:grid-cols-4">
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4 w-full lg:border-r-2">
                            <dt class="text-base leading-7 text-oren">Prestasi Matematika dan Sains</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-oren sm:text-5xl" data-text="945">945</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4 w-full lg:border-r-2">
                            <dt class="text-base leading-7 text-pink">Prestasi Bahasa dan Sastra</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-pink sm:text-5xl" data-text="174">174</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4 w-full lg:border-r-2">
                            <dt class="text-base leading-7 text-hijau-terang">Prestasi Bidang Agama</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-hijau-terang sm:text-5xl" data-text="100">19</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base leading-7 text-biru-langit">Prestasi Seni dan Olahraga</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-biru-langit sm:text-5xl" data-text="84">84</dd>
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
                    <a href="{{ route('profile') }}">
                        <button type="button"
                            class="mt-5 text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                            Pelajari Selengkapnya
                        </button>
                    </a>
                </div>
                <div class="flex-auto w-50">
                    <img class="h-auto max-w-full rounded-lg" src="https://sdmuhsapen-yog.sch.id/assets/images/prof-20012025.jpeg"
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
            <div class="flex flex-nowrap lg:grid overflow-x-auto md:grid-cols-2 lg:grid-cols-3 gap-16 max-h-[65%]">
                {{-- <div class="swiper-wrapper "> --}}
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="#"
                                class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 group">
                              <div class="scrollable-container-with-custom-scrollbar h-full">
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
                                    SD Muhammadiyah Sapen Yogyakarta memiliki reputasi gemilang dalam prestasi akademik, baik di tingkat lokal, 
                                    nasional, maupun internasional. Dengan didukung oleh kurikulum yang modern, tenaga pendidik profesional, dan 
                                    metode pembelajaran inovatif, siswa berhasil meraih berbagai penghargaan di bidang sains, matematika, bahasa, dan teknologi. 
                                    Prestasi ini mencerminkan komitmen sekolah dalam mencetak generasi unggul yang berdaya saing tinggi dan berwawasan luas.
                                </p>
                              </div>
                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="#"
                                class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 hover:duration-300 group">
                              <div class="scrollable-container-with-custom-scrollbar h-full">
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
                                    SD Muhammadiyah Sapen Yogyakarta juga unggul dalam prestasi non-akademik dengan berbagai penghargaan di bidang seni, olahraga, dan keterampilan. Siswa-siswa kami sering kali memenangkan kompetisi tari, musik, keagamaan, serta olahraga seperti futsal, pencak silat, tapak suci, renang di tingkat daerah maupun nasional. Keberhasilan ini didukung oleh program ekstrakurikuler yang terarah dan pembinaan intensif, menjadikan siswa tidak hanya cerdas secara akademik, tetapi juga berbakat dan berprestasi di berbagai bidang lainnya.
                                </p>
                              </div>
                            </a>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">

                            <a href="#"
                                class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 group">
                              <div class="scrollable-container-with-custom-scrollbar h-full">
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
                                    SD Muhammadiyah Sapen Yogyakarta unggul dalam pendidikan karakter dengan mengintegrasikan nilai-nilai Islami ke dalam setiap aspek pembelajaran dan kegiatan sekolah. Melalui program seperti pembiasaan ibadah harian, tahfiz Al-Qur'an, dan penguatan akhlak mulia, siswa dibimbing untuk menjadi individu yang beriman, bertanggung jawab, dan memiliki empati tinggi. Pendekatan ini memastikan siswa tidak hanya unggul secara akademik, tetapi juga tumbuh menjadi pribadi yang berkarakter dan siap menghadapi tantangan masa depan.
                                </p>
                              </div>
                            </a>

                        </div>
                    </div>
                {{-- </div> --}}
                <div class="multiple-swiper-pagination"></div>
            </div>

        </div>

    </section>

    {{-- BERITA --}}
    <section class=" border-gray-200 mt-20 py-5" style="background-color: rgba(248, 111, 3, 0.1)">
        <div class="w-full block container mx-auto px-4">
            <h1 class="text-4xl font-bold my-5 text-black text-center mx-auto">Berita Terkini</h1>
            <div class="flex flex-nowrap lg:grid overflow-x-auto lg:grid-cols-3 gap-4 max-h-[65%]">
                @foreach ($berita as $b)
                    @php
                      $categorys = $b->ContentNews->hasCategory->transLite->firstWhere('lang',$lang);
                    @endphp
                    <div style="background-image: url('{{ asset('assets/images/news').'/'.$b->ContentNews->getFirstImage() }}');" alt="{{ $b->ContentNews->getFirstImage() }}"
                        class="swiper-slide rounded-3xl bg-cover bg-center h-[565px] max-h-[600px] w-full relative overflow-hidden">
                        <div class="h-[565px] relative">
                          <button class="py-2 px-4 bg-oren text-white rounded-lg absolute left-8 top-[235px]">{{ $b->created_at->format('F d, Y') }}</button>
                        </div>
                        <div class="absolute bottom-0 bg-white pt-6 px-9 h-1/2 w-full overflow-hidden">
                            <div class="space-y-3">
                                <p class="text-lg font-bold">{{ $b['title'] }}</p>
                                <p class="news-content">{!! Str::limit(strip_tags($b->body), 150) !!}</p>
                            </div>
                            <div class="flex justify-center mt-5">
                                <a href="{{ route('newsDetail', ['id' => $b->slug, 'lang' => $lang]) }}"
                                  class="py-2 px-10 bg-biru-tua text-white rounded-3xl absolute items-center bottom-5"
                                >Baca lagi</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            <div class="relative flex">
                <a href="{{ route('front.news') }}" class="mx-auto">
                    <button type="button"
                        class="mt-5 font-bold text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                        Lihat Semua Berita
                    </button>
                </a>
            </div>
        </div>
    </section>

    {{-- GALERY --}}
    <section class=" border-gray-200 py-10">
        <div class="w-full block container mx-auto px-4">
            <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto">Galeri Kegiatan</h1>
            <div class="grid grid-cols-2 md:grid-cols-4 md:grid-rows-3 gap-2 min-h-[560px] h-[560px]">
              @forelse ( $gallerys as $key => $value)
                @if($key == 2 || $key == 3)
                <div class="relative col-span-2 row-span-2 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/gallery/thumbnail'.'/'.$value->thumbnail) }}') ">
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
                              {{ $value->countGallery() ?? '0' }}
                          </span>

                          <h3 class="text-dark-blue text-xl">
                            @if($lang == 'id')
                            {{ $value->title_id }}
                            @else
                            {{ $value->title_en }}
                            @endif
                          </h3>
                          <p class="italic text-black text-sm">{{ Carbon\Carbon::parse($value->created_at)->format('l, d F Y') }}</p>

                      </div>
                  </div>
              </div>
                @else
                <div class="relative bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/gallery/thumbnail'.'/'.$value->thumbnail) }}') ">
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
                                {{ $value->countGallery() ?? '0' }}
                            </span>
                            <h3 class="text-dark-blue text-xl">
                              @if($lang == 'id')
                              {{ $value->title_id }}
                              @else
                              {{ $value->title_en }}
                              @endif
                            </h3>
                            <p class="italic text-black text-sm">{{ Carbon\Carbon::parse($value->created_at)->format('l, d F Y') }}</p>
                        </div>
                    </div>
                </div>
                @endif

              @empty

              @endforelse
                {{--
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
                </div>  --}}
            </div>

            <div class="relative flex">
                <a href="{{ route('front.galery') }}" class="mx-auto">
                    <button type="button"
                        class="mt-5 font-bold text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                        Lihat Semua Galery
                    </button>
                </a>
            </div>

        </div>
    </section>

    {{-- TESTIMONI --}}
    <section class=" border-gray-200 py-20" style="background-color: rgba(165, 225, 243, 0.5  )">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4">
            <div class="grid md:grid-cols-2 grid-rows-auto gap-28">

                <div class="">
                    <h1 class="text-lg font-bold text-oren">Testimonial</h1>
                    <h1 class="text-4xl font-bold my-3 text-dark-blue">Kenapa Memilih Kami?</h1>

                    <div class="default-carousel relative" data-carousel="slide">
                        <div class="relative overflow-hidden w-full min-h-[500px] md:min-h-[350px] justify-self-center">
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

                        <!-- Slider controls -->
                        <button type="button" class="hidden md:flex absolute top-0 -left-[65px] z-30 items-center justify-center h-full px-2 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-dark-blue  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="hidden md:flex absolute top-0 -right-[65px] z-30 items-center justify-center h-full px-2 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-dark-blue dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>

                    </div>



                    <a target="_blank" href="https://www.google.com/maps/place/SD+Muhammadiyah+Sapen/@-7.7859359,110.3899218,17z/data=!4m8!3m7!1s0x2e7a59dafb0f533f:0x703ab4cd80139883!8m2!3d-7.7859359!4d110.3924967!9m1!1b1!16s%2Fg%2F11f3rdnn6m?entry=ttu&g_ep=EgoyMDI1MDEwOC4wIKXMDSoASAFQAw%3D%3D">
                        <button type="button"
                            class="mt-5 relative text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                            Pelajari Selengkapnya
                        </button>
                    </a>
                </div>
                <div class="flex-auto w-50">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/testi-20012025.jpeg') }}"
                        alt="image description">
                </div>

            </div>
        </div>

    </section>

    {{-- SEMUA SPONSOR --}}
    <section class=" border-gray-200 mt-10">
        <!--HTML CODE-->
        <div class="w-full container mx-auto">
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
    <section class=" border-gray-200 my-10 pt-40">
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
                                SD Muhammadiyah Sapen merupakan salah satu sekolah dasar unggulan yang dikenal dengan pendekatan pendidikan berbasis nilai-nilai Islam. Sekolah ini mengintegrasikan ajaran agama dengan kurikulum nasional, menciptakan lingkungan belajar yang tidak hanya berfokus pada akademik tetapi juga pengembangan karakter dan akhlak mulia. Dengan pendekatan ini, siswa dididik untuk menjadi pribadi yang cerdas, beriman, dan berakhlak baik, sesuai dengan prinsip pendidikan holistik.

                            </p>
                            <p class="text-gray-500 dark:text-gray-400">
                                Selain itu, SD Muhammadiyah Sapen memiliki rekam jejak prestasi gemilang di berbagai bidang, baik akademik maupun non-akademik. Sekolah ini menyediakan fasilitas yang lengkap, tenaga pendidik yang kompeten, serta berbagai kegiatan ekstrakurikuler untuk mendukung pengembangan minat dan bakat siswa. Lingkungan belajar yang positif dan program-program pengayaan yang inovatif menjadikan SD Muhammadiyah Sapen sebagai pilihan yang tepat bagi orang tua yang ingin memberikan pendidikan terbaik bagi anak-anak mereka.

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
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Untuk mendaftar di SD Muhammadiyah Sapen, langkah pertama adalah mendapatkan informasi terbaru mengenai Penerimaan Peserta Didik Baru (PPDB). Anda dapat mengunjungi situs resmi sekolah di sdmuhsapen-yog.sch.id atau menghubungi call center di nomor 0811-2642-733. Informasi yang tersedia mencakup jadwal pendaftaran, persyaratan, dan prosedur yang harus diikuti. Selain itu, sekolah juga menyediakan layanan inden PPDB bagi calon siswa yang berminat mendaftar lebih awal.

                                </p>
                            <p class="text-gray-500 dark:text-gray-400">Selanjutnya, siapkan dokumen-dokumen yang diperlukan, seperti akta kelahiran, kartu keluarga, dan pas foto terbaru. Proses pendaftaran bisa dilakukan secara online melalui platform yang disediakan sekolah atau secara langsung dengan mendatangi kantor administrasi SD Muhammadiyah Sapen. Jika membutuhkan informasi tambahan, Anda dapat menghubungi pihak sekolah melalui email di info@sdmuhsapen-yog.sch.id atau akun Instagram resmi mereka di @sdmuhsapen. Pastikan semua persyaratan terpenuhi agar proses pendaftaran berjalan lancar.
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
                            <p class="mb-2 text-gray-500 dark:text-gray-400">SD Muhammadiyah Sapen memiliki sejumlah keunggulan yang menjadikannya pilihan unggul bagi para orang tua. Sekolah ini menawarkan pendidikan berbasis nilai-nilai Islam yang terintegrasi dengan kurikulum nasional, memastikan siswa tidak hanya berkembang secara akademis tetapi juga memiliki karakter yang berakhlak mulia. Dengan pendekatan ini, sekolah berhasil mencetak siswa yang cerdas, disiplin, dan bertanggung jawab. Selain itu, prestasi akademik dan non-akademik yang diraih siswa di tingkat lokal, nasional, dan internasional menjadi bukti kualitas pendidikan di sekolah ini.

                                </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Fasilitas yang lengkap dan modern, seperti laboratorium, perpustakaan, ruang multimedia, dan area olahraga, mendukung kegiatan belajar yang nyaman dan efektif. Didukung oleh tenaga pendidik yang kompeten dan berdedikasi, siswa mendapatkan bimbingan yang optimal untuk mengembangkan potensi mereka. SD Muhammadiyah Sapen juga menawarkan berbagai kegiatan ekstrakurikuler, seperti robotik, seni, dan olahraga, untuk mengasah minat dan bakat siswa. Dengan kombinasi kurikulum inovatif, lingkungan belajar yang kondusif, dan pendidikan karakter, sekolah ini menjadi pilihan ideal untuk membangun generasi yang unggul dan berintegritas.</p>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-4">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-4" aria-expanded="false"
                            aria-controls="accordion-color-body-4">
                            <span class="text-left">
                                Apabila saya mengikuti PPDB di SD Muhammadiyah Sapen berapa biaya yang dikenakan?
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
                            <p class="mb-2 text-gray-500 dark:text-gray-400">SD Muhammadiyah Sapen menawarkan berbagai program pendidikan dengan biaya yang disesuaikan untuk setiap jenjang dan layanan yang diberikan. Biaya ini mencakup pendaftaran, pengembangan fasilitas sekolah, kebutuhan seragam, buku, serta kegiatan belajar mengajar. Selain itu, ada biaya bulanan yang sudah termasuk layanan makan siang dan kebutuhan harian siswa selama di sekolah. Program reguler dan kelas khusus, seperti program Cerdas Istimewa Matematika dan IPA (CIMIKA), memiliki rincian biaya yang berbeda sesuai dengan fasilitas tambahan yang disediakan.
                                </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Dengan sistem pembayaran yang transparan, sekolah ini juga memastikan bahwa setiap biaya yang dikenakan sebanding dengan fasilitas dan kualitas pendidikan yang diberikan. Untuk mendapatkan informasi lebih lengkap dan memastikan biaya sesuai dengan kebutuhan Anda, calon wali murid disarankan untuk langsung menghubungi pihak sekolah melalui situs resmi atau saluran komunikasi lainnya. SD Muhammadiyah Sapen selalu berkomitmen memberikan layanan terbaik bagi siswa dan orang tua.</p>
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
      var elements = document.querySelectorAll('[data-text]');

      // Now you can manipulate the elements
      elements.forEach(function(element) {
        const text = parseInt(element.getAttribute('data-text'), 10);
        let count = 0;
        const increment = Math.ceil(text / 100);
        const interval = setInterval(() => {
            if (count < text) {
                count += increment;
                if (count > text) count = text;
                element.textContent = count;
            } else {
                clearInterval(interval);
            }
        }, 10);
      });

      var newsContent = document.querySelectorAll('.news-content');
      newsContent.forEach(function(element) {
        const textLength = window.innerWidth >= 1024 ? 150 : 100;
        const originalText = element.innerHTML;
        element.innerHTML = originalText.substring(0, textLength) + '...';
      });

        // var swiper = new Swiper(".default-carousel", {
        //     loop: true,
        //     pagination: {
        //         el: ".swiper-pagination",
        //         clickable: true,
        //     },
        //     navigation: {
        //         nextEl: ".swiper-button-next",
        //         prevEl: ".swiper-button-prev",
        //     },
        // });

        var swiperMultipleSliderKeunggulan = new Swiper(".multiple-slide-carousel-keunggulan", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.multiple-swiper-pagination-keunggulan',
            breakpoints: {
                960: {
                    slidesPerView: 3,
                    spaceBetween: 25,
                }
            }
        });

        // var swiperMultipleSlider = new Swiper(".multiple-slide-carousel", {
        //     loop: true,
        //     slidesPerView: 1,
        //     spaceBetween: 20,
        //     pagination: '.multiple-swiper-pagination',
        //     breakpoints: {
        //         960: {
        //             slidesPerView: 3,
        //             spaceBetween: 25,
        //         }
        //     }
        // });
    </script>
@endsection

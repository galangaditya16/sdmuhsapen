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
            <h1 class="text-xl md:text-2xl font-bold text-kuning-muda">{{ __('message.selamat_datang') }}</h1>
            <h1 class="text-xl md:text-4xl font-bold my-3 text-white">{{ __('message.sd_sapen') }}</h1>
            <h1 class="text-xl md:text-lg my-3 text-white">{{ __('message.sekolahku_inspirasiku') }}</h1>
            <a href="{{ route('profile') }}">
                <button type="button" class="text-white ml-3 my-5 font-bold bg-biru-tua hover:bg-blue-900 hover:cursor-pointer rounded-lg text-sm px-5 py-2 text-center md:mx-1">
                    {{ __('message.learn_more') }}
                </button>
            </a>
            <a target="_blank" href="https://wa.me/628112642733?text=Halo%2C%20saya%20ingin%20bertanya%20mengenai%20info%20PPDB%20di%20SD%20Muhammadiyah%20Sapen">
                <button type="button" class="text-white ml-3 my-5 font-bold bg-oren hover:bg-orange-800 hover:cursor-pointer rounded-lg text-sm px-5 py-2 text-center md:mx-1">
                {{ __('message.ppdb') }}
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
                            <dt class="text-base leading-7 text-oren">{{ __('message.prestasi_matematika_dan_sains') }}</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-oren sm:text-5xl" data-text="945">945</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4 w-full lg:border-r-2">

                            <dt class="text-base leading-7 text-pink">{{ __('message.prestasi_bahasa_dan_sastra') }}</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-pink sm:text-5xl" data-text="174">174</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4 w-full lg:border-r-2">
                            <dt class="text-base leading-7 text-hijau-terang">{{ __('message.prestasi_bidang_agama') }}</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-hijau-terang sm:text-5xl" data-text="100">19</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base leading-7 text-biru-langit">{{ __('message.prestasi_seni_dan_olahraga') }}</dt>
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
                    <h1 class="text-lg font-bold text-oren">{{ __('message.selayang_pandang_judul') }}</h1>
                    <h1 class="text-4xl font-bold my-3 text-dark-blue">SD Muhammadiyah Sapen Yogyakarta</h1>
                    <p class="text-base mt-3 text-justify">
                       {{ __('message.selayang_pandang_content') }}
                    </p>
                    <a href="{{ route('profile') }}">
                        <button type="button"
                            class="mt-5 text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                            {{ __('message.learn_more') }}
                        </button>
                    </a>
                </div>
                <div class="flex-auto w-50">
                    <img class="h-auto max-w-full rounded-lg" src="https://sdmuhsapen-yog.sch.id/assets/images/prof-20012025.jpeg"
                        alt="mengenal SD Muhammadiyah Sapen">
                </div>

            </div>
        </div>

    </section>

    {{-- KEUNGGULAN --}}
    <section class=" border-gray-200 my-20">

        <div class="w-full relative container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl font-bold my-3 text-black mx-auto">{{ __('message.keunggulan') }}</h1>
                <p class="text-lg my-6 text-black mx-auto">
                    {{ __('message.keunggulan_subtitle') }}
                </p>
            </div>
            <div class="flex flex-nowrap lg:grid overflow-x-auto md:grid-cols-2 lg:grid-cols-3 gap-16 max-h-[65%]">
              <div class="swiper-slide">
                <div class="flex items-center justify-center">

                  <a href="javascript:void(0)"
                    class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 hover:duration-300 group">
                    <div class="scrollable-container-with-custom-scrollbar h-full">
                      <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 640 512">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"
                        d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z">
                      </svg>
                      <h5
                        class="mb-2 text-3xl md:text-4xl text-white group-hover:text-oren font-bold tracking-tight text-center">
                        {{ __('message.prestasi_akademik') }}
                      </h5>
                      <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10">
                      {{__('message.prestasi_akademik_content')}}
                      </p>
                    </div>
                  </a>

                </div>
              </div>
              <div class="swiper-slide">
                <div class="flex items-center justify-center">

                  <a href="javascript:void(0)"
                    class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 hover:duration-300 group">
                    <div class="scrollable-container-with-custom-scrollbar h-full">
                      <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        viewBox="0 0 512 560">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1"
                        d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"/>
                      </svg>
                      <h5
                        class="mb-2 text-3xl md:text-4xl text-white group-hover:text-oren font-bold tracking-tight text-center">
                        {{ __('message.prestasi_nonakademik') }}
                      </h5>
                      <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10">
                      {{ __('message.prestasi_nonakademik_content') }}
                      </p>
                    </div>
                  </a>

                </div>
              </div>
              <div class="swiper-slide">
                <div class="flex items-center justify-center">

                  <a href="javascript:void(0)"
                    class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 hover:duration-300 group">
                    <div class="scrollable-container-with-custom-scrollbar h-full">
                      <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 512 560">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"
                        d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z">
                      </svg>
                      <h5
                        class="mb-2 text-3xl md:text-4xl text-white group-hover:text-oren font-bold tracking-tight text-center">
                        {{ __('message.pendidikan_karakter') }}
                      </h5>
                      <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10">
                      {{ __('message.pendidikan_karakter_content') }}
                      </p>
                    </div>
                  </a>

                </div>
              </div>
              <div class="multiple-swiper-pagination"></div>
            </div>

        </div>

    </section>

    {{-- BERITA --}}
    <section class=" border-gray-200 mt-20 py-5" style="background-color: rgba(248, 111, 3, 0.1)">
        <div class="w-full block container mx-auto px-4">
            <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto">{{ __('message.berita_terkini') }}</h1>
            <div class="block w-32 h-1 bg-biru-tua mx-auto mt-0 mb-4"></div>
            <div class="flex flex-nowrap lg:grid overflow-x-auto lg:grid-cols-3 gap-4 max-h-[65%]">
                @foreach ($berita as $b)
                    @php
                      $categorys = $b->ContentNews->hasCategory->transLite->firstWhere('lang',$lang);
                    @endphp
                    <div
                    class="rounded-3xl h-[565px] max-h-[600px] w-full shadow-xl hover:-translate-y-1 hover:scale-101 duration-150 relative overflow-hidden">
                        <div class="relative h-[300px]">
                          <img src="{{ asset('assets/images/news') . '/' . $b->ContentNews->getFirstImage() }}"
                              alt="{{ $b['title'] }}" class="w-full h-[300px] object-cover rounded-t-3xl">
                          <button class="py-2 px-4 bg-oren text-white rounded-lg absolute left-8 top-[235px] z-10">
                              {{ $b->created_at->format('F d, Y') }}
                          </button>
                      </div>
                        <div class="absolute bottom-0 bg-white pt-6 px-9 h-1/2 w-full overflow-hidden">
                            <div class="space-y-3">
                                <a href="{{ route('newsDetail', ['id' => $b->slug, 'lang' => $lang]) }}">
                                    <strong><p class="text-lg font-bold">{{ $b['title'] }}</p></strong>
                                </a>
                                <p class="news-content">{!! Str::limit(strip_tags($b->body), 150) !!}</p>
                            </div>
                            <div class="flex justify-center mt-5">
                                <a href="{{ route('newsDetail', ['id' => $b->slug, 'lang' => $lang]) }}"
                                  class="py-2 px-10 bg-biru-tua text-white rounded-3xl absolute items-center bottom-5"
                                >{{ __('message.read_more') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="relative flex">
                <a href="{{ route('front.news') }}" class="mx-auto">
                    <button type="button"
                        class="mt-5 font-bold text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                        {{ __('message.lihat_semua_berita') }}
                    </button>
                </a>
            </div>
        </div>
    </section>

    {{-- GALERY --}}
    <section class=" border-gray-200 py-10">
        <div class="w-full block container mx-auto px-4">
            <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto my-10">{{ __('message.galeri_kegiatan') }}</h1>
            <div class="block w-32 h-1 bg-biru-tua mx-auto mt-0 mb-4"></div>
            <div class="grid grid-cols-2 md:grid-cols-4 md:grid-rows-3 gap-2 min-h-[560px] h-[560px]">
              @forelse ( $gallerys as $key => $value)
                @if($key == 2 || $key == 3)

                <div class="relative col-span-2 row-span-2 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/gallery/thumbnail'.'/'.$value->thumbnail) }}') ">
                    <a href="{{ route('galeryDetail', $value->slug_id) }}">
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
                </a>
              </div>


                @else
                <div class="relative bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/gallery/thumbnail'.'/'.$value->thumbnail) }}') ">
                    <a href="{{ route('galeryDetail', $value->slug_id) }}">
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
                    </a>
                </div>
                @endif

              @empty

              @endforelse

            </div>

            <div class="relative flex">
                <a href="{{ route('front.galery') }}" class="mx-auto">
                    <button type="button"
                        class="mt-5 font-bold text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                        {{ __('message.lihat_semua_galeri') }}
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
                    <h3 class="text-lg font-bold text-oren">{{ __('message.testimonial') }}</h3>
                    <h2 class="text-4xl font-bold my-3 text-dark-blue">{{ __('message.kenapa_memilih_kami') }}</h2>

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
                            {{ __('message.learn_more') }}
                        </button>
                    </a>
                </div>
                <div class="flex-auto w-50">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/testi-20012025.jpeg') }}"
                        alt="testimoni SD Muhammadiyah Sapen">
                </div>

            </div>
        </div>

    </section>

    {{-- SEMUA SPONSOR --}}
    <section class=" border-gray-200 mx-auto">
      <!--HTML CODE-->
      <div class="w-full container mx-auto">
        <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto">{{ __('message.semua_aplikasi_kami') }}</h1>
        <div class="block w-32 h-1 bg-biru-tua mx-auto mt-2"></div>

        <div class="flex justify-between text-center">
          <div class="my-auto w-[10%] z-10">
            <button class="left-button bg-biru-tua rounded-full p-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-10 h-10 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
              </svg>
            </button>
          </div>
          <div class="carousel flex md:gap-x-4 overflow-hidden h-40 items-stretch">
            <div class="mx-auto bg-white self-auto w-[300px] flex items-center justify-items-center">
              <div class="p-2 my-auto h-fit">
                <img class="object-contain " src="{{ asset('assets/images/logo/bos.png') }}" alt="logo-bes">
              </div>
            </div>
            <div class="mx-auto bg-white self-auto w-[300px] flex items-center justify-items-center">
              <div class="p-2 my-auto h-fit">
                <img class="object-contain " src="{{ asset('assets/images/logo/dapodik-logo.png') }}" alt="logo-mu">
              </div>
            </div>
            <div class="mx-auto bg-white self-auto w-[300px] flex items-center justify-items-center">
              <div class="p-2 my-auto h-fit">
                <img class="object-contain " src="{{ asset('assets/images/logo/logo-sipintar.png') }}" alt="logo-bas">
              </div>
            </div>
            <div class="mx-auto bg-white self-auto w-[300px] flex items-center justify-items-center">
              <div class="p-2 my-auto h-fit">
                <img class="object-contain " src="{{ asset('assets/images/logo/pngtree-merdeka.png') }}" alt="logo-ds">
              </div>
            </div>
            <div class="mx-auto bg-white self-auto w-[300px] flex items-center justify-items-center">
              <div class="p-2 my-auto h-fit">
                <img class="object-contain " src="{{ asset('assets/images/logo/rumah-belajar.png') }}" alt="logo-ku">
              </div>
            </div>
            {{--  <div class="mx-auto bg-white self-auto w-[300px] flex items-center justify-items-center">
                <div class="p-2 my-auto h-fit">
                  <img class="object-contain " src="{{ asset('assets/images/logo/rumah-belajar.png') }}" alt="logo-bos">
                </div>
              </div>  --}}
          </div>
          <div class="my-auto w-[10%]">
            <button class="right-button bg-biru-tua rounded-full p-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-10 h-10 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg>
            </button>
          </div>
        </div>

      </div>
    </section>

    {{-- FAQ --}}
    <section class=" border-gray-200 my-10 pt-20">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4">
            <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto">{{ __('message.faq_judul') }}</h1>
            <p class="text-center mx-auto">{{ __('message.faq_subjudul') }}</p>

            <div class="flex flex-row gap-4">


                <div class="w-full md:w-10/12 mx-auto mt-8 bg-white" id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">

                    <h2 id="accordion-color-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                            aria-controls="accordion-color-body-1">
                            <span class="text-left">
                                {{ __('message.faq_pertanyaan_1') }}
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
                                {{ __('message.faq_jawaban_1_part1') }}
                            </p>
                            <p class="text-gray-500 dark:text-gray-400">
                                {{ __('message.faq_jawaban_1_part2') }}
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-color-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                            aria-controls="accordion-color-body-2">
                            <span class="text-left">
                                {{ __('message.faq_pertanyaan_2') }}
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
                            <p class="mb-2 text-gray-500 dark:text-gray-400">{{ __('message.faq_jawaban_2_part1') }}
                                </p>
                            <p class="text-gray-500 dark:text-gray-400">{{ __('message.faq_jawaban_2_part2') }}
                            </p>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                            aria-controls="accordion-color-body-3">
                            <span class="text-left">
                                {{ __('message.faq_pertanyaan_3') }}
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
                            <p class="mb-2 text-gray-500 dark:text-gray-400">{{ __('message.faq_jawaban_3_part1') }}
                                </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">{{ __('message.faq_jawaban_3_part2') }}</p>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-4">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-4" aria-expanded="false"
                            aria-controls="accordion-color-body-4">
                            <span class="text-left">
                                {{ __('message.faq_pertanyaan_4') }}
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
                            <p class="mb-2 text-gray-500 dark:text-gray-400">{{ __('message.faq_jawaban_4_part1') }}
                                </p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">{{ __('message.faq_jawaban_4_part2') }}</p>
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
      })

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

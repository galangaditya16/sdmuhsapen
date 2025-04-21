@extends('frontend.layouts.app')

@section('styles')
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            /* IE & Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
@endsection

@section('content')
    <x-profile-menu-header title="Hasil Penelusuran" />
    <! -- news -->
        <section class="container mx-auto md:my-20 relative">
            <p class="px-4 md:px-0 font-bold mb-6">Hasil penelusuran berita untuk "{{ request('search') ?? '-' }}"</p>

            <!-- Tombol panah -->
            <button id="scrollLeft"
                class="absolute left-2 top-[50%] -translate-y-1/2 bg-biru-tua hover:bg-gray-300 text-black rounded-full p-2 z-20">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                </svg>
            </button>
            <button id="scrollRight"
                class="absolute right-2 top-[50%] -translate-y-1/2 bg-biru-tua hover:bg-gray-300 text-black rounded-full p-2 z-20">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
                </svg>
            </button>

            <div id="carouselWrapper" class="overflow-x-auto  scrollbar-hide">
                <div class="flex gap-6 px-4 md:px-0 w-max">
                    @forelse ($news as $new)
                        @php
                            if (isset($new['contentNews']) && $new['contentNews']) {
                                $decode =
                                    $new['contentNews'] && $new['contentNews']['images']
                                        ? json_decode($new['contentNews']['images'])
                                        : '';
                                $firstImage = $decode ? $decode[0] : '';
                            }
                        @endphp

                        <div
                            class="min-w-[350px] rounded-3xl h-[565px] max-h-[600px] shadow-xl hover:-translate-y-1 hover:scale-101 duration-150 relative overflow-hidden">
                            <div class="relative h-[300px]">
                                <img src="{{ asset('assets/images/news') . '/' . $firstImage }}" alt="{{ $new['title'] }}"
                                    class="w-[500px] h-[300px] object-cover rounded-t-3xl">
                                <button class="py-2 px-4 bg-oren text-white rounded-lg absolute left-8 top-[235px] z-10">
                                    {{ \Carbon\Carbon::parse($new['created_at'])->format('F d, Y') }}
                                </button>
                            </div>
                            <div class="absolute bottom-0 bg-white pt-6 px-9 h-1/2 w-full overflow-hidden">
                                <div class="space-y-3">
                                    <a href="{{ route('newsDetail', ['id' => $new['slug'], 'lang' => $lang]) }}">
                                        <strong>
                                            <p class="text-lg font-bold">{{ $new['title'] }}</p>
                                        </strong>
                                    </a>
                                    <p>{!! str($new['body'])->limit(100) !!}</p>
                                </div>
                                <div class="flex justify-center mt-5">
                                    <a href="{{ route('newsDetail', ['id' => $new['slug'], 'lang' => $lang]) }}"
                                        class="py-2 px-10 bg-biru-tua text-white rounded-3xl absolute items-center bottom-5">Baca
                                        lagi</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center w-full px-10 py-20">
                            <p class="font-bold text-2xl">Maaf, kata kunci yang Anda masukkan tidak ditemukan.</p>
                            <p>Silakan masukkan kata kunci lain atau kunjungi halaman lain:
                                <a href="{{ route('front.home') }}" class="text-oren">home</a>,
                                <a class="text-oren" href="/profile">tentang kami</a>,
                                atau <a class="text-oren" href="/contacts">kontak</a>
                            </p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- images gallery -->
        <section class="container mx-auto md:my-20 relative">

            @forelse ($galeris as $galeri)
                @dd($galeri)
                @php
                    if (isset($new['contentNews']) && $new['contentNews']) {
                        $decode =
                            $new['contentNews'] && $new['contentNews']['images']
                                ? json_decode($new['contentNews']['images'])
                                : '';
                        $firstImage = $decode ? $decode[0] : '';
                    }
                @endphp
                <p class="px-4 md:px-0 font-bold mb-6">Hasil penelusuran berita untuk "{{ request('search') ?? '-' }}"</p>
                <!-- Tombol panah -->
                <button id="scrollLeft"
                    class="absolute left-2 top-[50%] -translate-y-1/2 bg-biru-tua hover:bg-gray-300 text-black rounded-full p-2 z-20">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                    </svg>
                </button>
                <button id="scrollRight"
                    class="absolute right-2 top-[50%] -translate-y-1/2 bg-biru-tua hover:bg-gray-300 text-black rounded-full p-2 z-20">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
                    </svg>
                </button>
                <div id="carouselWrapper" class="overflow-x-auto  scrollbar-hide">
                    <div class="flex gap-6 px-4 md:px-0 w-max">
                        <div
                            class="min-w-[350px] rounded-3xl h-[565px] max-h-[600px] shadow-xl hover:-translate-y-1 hover:scale-101 duration-150 relative overflow-hidden">
                            <div class="relative h-[300px]">
                                <img src="{{ asset('assets/images/news') . '/' . $firstImage }}" alt="{{ $new['title'] }}"
                                    class="w-[500px] h-[300px] object-cover rounded-t-3xl">
                                <button class="py-2 px-4 bg-oren text-white rounded-lg absolute left-8 top-[235px] z-10">
                                    {{ \Carbon\Carbon::parse($new['created_at'])->format('F d, Y') }}
                                </button>
                            </div>
                            <div class="absolute bottom-0 bg-white pt-6 px-9 h-1/2 w-full overflow-hidden">
                                <div class="space-y-3">
                                    <a href="{{ route('newsDetail', ['id' => $new['slug'], 'lang' => $lang]) }}">
                                        <strong>
                                            <p class="text-lg font-bold">{{ $new['title'] }}</p>
                                        </strong>
                                    </a>
                                    <p>{!! str($new['body'])->limit(100) !!}</p>
                                </div>
                                <div class="flex justify-center mt-5">
                                    <a href="{{ route('newsDetail', ['id' => $new['slug'], 'lang' => $lang]) }}"
                                        class="py-2 px-10 bg-biru-tua text-white rounded-3xl absolute items-center bottom-5">Baca
                                        lagi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse

        </section>



        @include('frontend.layouts.footer')
    @endsection

    @section('extend-script')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const wrapper = document.getElementById("carouselWrapper");
                const scrollLeft = document.getElementById("scrollLeft");
                const scrollRight = document.getElementById("scrollRight");

                scrollLeft.addEventListener("click", () => {
                    wrapper.scrollBy({
                        left: -350,
                        behavior: "smooth"
                    });
                });

                scrollRight.addEventListener("click", () => {
                    wrapper.scrollBy({
                        left: 350,
                        behavior: "smooth"
                    });
                });

                // Drag to scroll
                let isDown = false;
                let startX;
                let scrollLeftStart;

                wrapper.addEventListener('mousedown', (e) => {
                    isDown = true;
                    wrapper.classList.add('active');
                    startX = e.pageX - wrapper.offsetLeft;
                    scrollLeftStart = wrapper.scrollLeft;
                });

                wrapper.addEventListener('mouseleave', () => {
                    isDown = false;
                    wrapper.classList.remove('active');
                });

                wrapper.addEventListener('mouseup', () => {
                    isDown = false;
                    wrapper.classList.remove('active');
                });

                wrapper.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - wrapper.offsetLeft;
                    const walk = (x - startX) * 1.5; // Scroll speed
                    wrapper.scrollLeft = scrollLeftStart - walk;
                });
            });
        </script>
    @endsection

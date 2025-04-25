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
    <x-profile-menu-header title="{{ __('message.halaman_hasil_penelusuran') }}" />
    <!-- news -->
        <section class="container mx-auto md:my-20 relative">
            <p class="px-4 md:px-0 font-bold mb-6">{{ __('message.hasil_penelusuran_berita') }} "{{ request('search') ?? '-' }}"</p>

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

                    @endforelse
                </div>
            </div>
        </section>

        <!-- images gallery -->
        <section class="container mx-auto md:my-20 relative">
            <p class="px-4 md:px-0 font-bold mb-6">{{ __('message.hasil_penelusuran_galeri') }} "{{ request('search') ?? '-' }}"</p>
            <div class="px-4 lg:px-4 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($galeris as $new)
                    <div style="background-image: url('{{ asset('assets/images/gallery/thumbnail/').'/'. $new->thumbnail }}');" alt="galeries-1.png"
                        class="rounded-3xl bg-cover bg-center h-[450px] max-h-[500px] w-full shadow-xl hover:-translate-y-1 hover:scale-101 duration-150 relative overflow-hidden">
                        <div class="h-[480px] relative">
                            <div
                                class="py-1.5 px-4 bg-black bg-opacity-40 text-white rounded-lg absolute left-8 top-[180px] flex gap-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                                <p>{{ $new->countGallery() ?? '0' }} Photos</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 bg-white pt-6 px-9 h-1/2 w-full">
                            <div class="space-y-3">
                                @if ($lang == 'id')
                                    <a href="{{ route('galeryDetail', $new->slug_id) }}">
                                    <p class="text-lg font-bold">Galeri: {{ $new->title_id }}</p>
                                    </a>
                                @else
                                    <a href="{{ route('galeryDetail', $new->slug_en) }}">
                                    <p class="text-lg font-bold">Galeri: {{ $new->title_en }}</p>
                                    </a>
                                @endif
                                <p class="font-thin text-sm">
                                    @if ($lang == 'id')
                                    {{ \Carbon\Carbon::parse($new->created_at)->translatedFormat('l, d F Y') }}
                                    @else
                                    {{ $new->created_at->format('l, d F Y') }}
                                    @endif
                                </p>
                            </div>
                            <div class="flex justify-center mt-20">
                                @if ($lang == 'id')
                                    <a href="{{ route('galeryDetail', $new->slug_id) }}"
                                        class="py-2 px-10 bg-oren text-white rounded-3xl">Lihat Galeri</a>
                                @else
                                    <a href="{{ route('galeryDetail', $new->slug_en) }}"
                                        class="py-2 px-10 bg-oren text-white rounded-3xl">Lihat Galeri</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
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

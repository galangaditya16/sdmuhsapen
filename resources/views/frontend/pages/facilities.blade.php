@extends('frontend.layouts.app')

@push('styles')
    <style>
        .card-container {
            perspective: 1000px;
        }

        .card-wrapper {
            transition: transform 0.8s;
            transform-style: preserve-3d;
            transform-origin: right center;
        }

        .card-front,
        .card-back {
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .card-back {
            transform: rotateY(-180deg);
        }

        .flip-active {
            transform: translateX(-100%) rotateY(-180deg);
        }
    </style>
@endpush

@section('content')
    <x-profile-menu-header title="Fasilitas Sekolah" />
    <section class="container mx-auto grid grid-cols-1 gap-y-14 md:my-20 mb-14">
        <p class="lg:w-1/2 mx-auto text-center text-lg">SD Muhammadiyah Sapen Yogyakarta dilengkapi dengan fasilitas lengkap dan memadai, seperti ruang kelas yang nyaman, perpustakaan dengan koleksi buku berkualitas, laboratorium komputer dan sains, lapangan olahraga, serta ruang ibadah yang mendukung proses belajar mengajar secara optimal.</p>

        @foreach ($facilities as $index => $facility)
            @if ($index % 2 != 0)
                <!-- mobile -->
                <div class="grid grid-cols-1 lg:grid-cols-3 space-y-5 lg:hidden">
                    <div class="lg:justify-items-center lg:content-center text-center lg:text-left">
                        <p
                            class="text-biru-tua font-extrabold text-4xl relative lg:before:block lg:before:h-full lg:before:w-3 lg:before:bg-biru-tua lg:before:absolute lg:before:-left-6 w-3/4 text-wrap mx-auto">
                            {{ $facility['title'] }}</p>
                        <div class="lg:hidden block w-32 h-1 bg-biru-tua mx-auto mt-2"></div>
                    </div>
                    <div class="lg:col-span-2 flex justify-center lg:justify-end lg:flex-none cursor-pointer lg:pr-10">
                        <div class="relative w-4/5 lg:w-[628px] card-container">
                            <div class="card-wrapper relative w-full h-[332px]">
                                <!-- Front of card -->
                                <div class="card-front rounded-3xl">
                                    <img src="{{ asset('assets/images/content') . '/' . $facility->ContentContent->getFirstImage() }}"
                                        alt="masjid-safinatunnajah" class="w-full h-[332px] object-cover rounded-3xl">
                                    <button
                                        class="rounded-xl bg-biru-tua text-white text-sm px-2.5 py-1.5 mt-2 absolute right-5 bottom-5 btn-card-open flex items-center justify-items-center gap-x-0.5 hover:scale-105 transition-transform duration-300">
                                        <p class="my-auto"> Lihat detail </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Back of card -->
                                <div class="card-back rounded-3xl bg-biru-tua">
                                    <div class="w-full h-full p-10 md:text-xl text-white space-y-5">
                                      <div class="scrollable-container-with-custom-scrollbar h-full">
                                        <p class="font-bold text-xl">{{ $facility['title'] }}</p>
                                        <ul class="list-disc pl-10">
                                          {!! $facility->body !!}
                                        </ul>
                                        <button
                                          class="rounded-full bg-red-500 text-white text-sm p-2.5 absolute right-5 bottom-5 hover:scale-105 transition-transform duration-300 btn-card">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18 18 6M6 6l12 12" />
                                          </svg>
                                        </button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- desktop -->
                <div class="lg:grid grid-cols-1 lg:grid-cols-3 hidden">
                    <div class="lg:col-span-2 flex md:ml-4 lg:ml-7 lg:flex-none cursor-pointer lg:pr-10">
                        <div class="relative w-4/5 lg:w-[628px] card-container">
                            <div class="card-wrapper relative w-full h-[332px]">
                                <!-- Front of card -->
                                <div class="card-front rounded-3xl">
                                    <img src="{{ asset('assets/images/content') . '/' . $facility->ContentContent->getFirstImage() }}"
                                        alt="masjid-safinatunnajah" class="w-full h-[332px] object-cover rounded-3xl">
                                    <button
                                        class="rounded-xl bg-biru-tua text-white text-sm px-2.5 py-1.5 mt-2 absolute right-5 bottom-5 btn-card-open flex items-center justify-items-center gap-x-0.5 hover:scale-105 transition-transform duration-300">
                                        <p class="my-auto"> Lihat detail </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- Back of card -->
                                <div class="card-back rounded-3xl bg-biru-tua">
                                    <div class="w-full h-full p-10 md:text-xl text-white space-y-5">
                                      <div class="scrollable-container-with-custom-scrollbar h-full">
                                        <p class="font-bold text-xl">{{ $facility->title }}</p>
                                        <ul class="list-disc pl-10">
                                          {!! $facility->body !!}
                                        </ul>
                                        <button
                                          class="rounded-full bg-red-500 text-white text-sm p-2.5 absolute right-5 bottom-5 hover:scale-105 transition-transform duration-300 btn-card">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18 18 6M6 6l12 12" />
                                          </svg>
                                        </button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="justify-items-center content-center xl:pr-10">
                        <p
                            class="text-biru-tua font-extrabold text-4xl relative before:block before:h-full before:w-3 before:bg-biru-tua before:absolute before:-right-6 w-3/4 text-wrap mx-auto">
                            {{ $facility['title'] }}</p>
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 lg:grid-cols-3 space-y-5">
                    <div class="lg:justify-items-center lg:content-center text-center lg:text-left pl-10 lg:pl-0">
                        <p
                            class="text-biru-tua font-extrabold text-4xl relative lg:before:block lg:before:h-full lg:before:w-3 lg:before:bg-biru-tua lg:before:absolute lg:before:-left-6 w-3/4 text-wrap mx-auto">
                            {{ $facility['title'] }}</p>
                        <div class="lg:hidden block w-32 h-1 bg-biru-tua mx-auto mt-2"></div>
                    </div>
                    <div class="lg:col-span-2 flex justify-center lg:justify-end lg:flex-none cursor-pointer lg:pr-10">
                        <div class="relative w-4/5 lg:w-[628px] card-container">
                            <div class="card-wrapper relative w-full h-[332px]">
                                <!-- Front of card -->
                                <div class="card-front rounded-3xl">
                                    <img src="{{ asset('assets/images/content') . '/' . $facility->ContentContent->getFirstImage() }}"
                                        alt="masjid-safinatunnajah" class="w-full h-[332px] object-cover rounded-3xl">
                                    <button
                                        class="rounded-xl bg-biru-tua text-white text-sm px-2.5 py-1.5 mt-2 absolute right-5 bottom-5 btn-card-open flex items-center justify-items-center gap-x-0.5 hover:scale-105 transition-transform duration-300">
                                        <p class="my-auto"> Lihat detail </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Back of card -->
                                <div class="card-back rounded-3xl bg-biru-tua">
                                    <div class="w-full h-full p-10 md:text-xl text-white space-y-5">
                                      <div class="scrollable-container-with-custom-scrollbar h-full">
                                        <p class="font-bold text-xl">{{ $facility['title'] }}</p>
                                        <ul class="list-disc pl-10">
                                          {!! $facility->body !!}
                                        </ul>
                                        <button
                                          class="rounded-full bg-red-500 text-white text-sm p-2.5 absolute right-5 bottom-5 hover:scale-105 transition-transform duration-300 btn-card">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18 18 6M6 6l12 12" />
                                          </svg>
                                        </button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach


    </section>
    @include('frontend.layouts.footer')
@endsection

@section('extend-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardWrappers = document.querySelectorAll('.card-wrapper');
            const btnCardsOpen = document.querySelectorAll('.btn-card-open');
            const btnCardsClose = document.querySelectorAll('.btn-card');

            function toggleCard(cardWrapper, flip) {
                if (flip) {
                    cardWrapper.classList.add('flip-active');
                } else {
                    cardWrapper.classList.remove('flip-active');
                }
            }

            btnCardsOpen.forEach((btn, index) => {
                btn.addEventListener('click', () => {
                    toggleCard(cardWrappers[index], true);
                });
            });

            btnCardsClose.forEach((btn, index) => {
                btn.addEventListener('click', () => {
                    toggleCard(cardWrappers[index], false);
                });
            });
        });
    </script>
@endsection

@extends('frontend.layouts.app')

@section('content')
    <x-profile-menu-header title="{{ __('message.berita_sekolah') }}" />
    <section class="container mx-auto grid grid-cols-1 gap-y-14 md:my-20 px-2">
        <form action="{{ route('front.news') }}" method="GET">
            <div class="grid md:grid-cols-2 gap-y-4 px-4 lg:px-0">
                <div class="w-full md:flex grid gap-y-4">
                    <div class="flex items-center w-full bg-gray-300 rounded-3xl">
                        <select name="category"
                            class="appearance-none bg-transparent border-none rounded-3xl text-center font-bold bg-gray-300 w-full text-gray-700 mr-3 py-2.5 px-2 leading-tight focus:outline-1"
                            type="text" onchange="this.form.submit()">
                            <option value="" disabled>{{ __('message.semua_kategori') }}</option>
                            @forelse ($categorys as $category)
                                <option value="">{{ $category->title }}</option>
                            @empty
                                <option value="">Kategori Kosong</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="flex items-center w-full bg-gray-300 rounded-3xl">
                        <select name="orderBy"
                            class="appearance-none bg-transparent border-none rounded-3xl text-center font-bold bg-gray-300 w-full text-gray-700 mr-3 py-2.5 px-2 leading-tight focus:outline-1"
                            type="text" onchange="this.form.submit()">
                            <option value="DESC">{{ __('message.terbaru') }}</option>
                            <option value="ASC">{{ __('message.terlama') }}</option>
                        </select>
                    </div>
                </div>

                <div class="md:w-1/2 md:place-self-end">
                    <div class="flex items-center relative bg-gray-300 rounded-3xl">
                        <input name="search"
                            class="appearance-none bg-transparent border-none rounded-3xl text-center md:text-end font-bold bg-gray-300 w-full text-gray-700 py-2.5 pl-2 pr-10 leading-tight focus:outline-2 focus:border-2"
                            type="text" placeholder="Search...." aria-label="Search....">
                        <input name="lang" value="{{ $lang }}" type="hidden">
                        <button type="submit" class="absolute right-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="block lg:flex gap-x-10">
            <div class="px-4 lg:px-0 lg:w-[65%] grid grid-cols-1 lg:grid-cols-2 gap-10">
                @forelse ($news as $new)

                    <div
                        class="rounded-3xl h-[565px] max-h-[600px] w-full shadow-xl hover:-translate-y-1 hover:scale-101 duration-150 relative overflow-hidden">
                        <div class="relative h-[300px]">
                            @if($new->ContentNews->getFirstImage())
                                <img src="{{ asset('assets/images/news') . '/' . $new->ContentNews->getFirstImage() }}"
                            @else
                                <img src="{{ asset('assets/images/no-image.jpg') }}"
                            @endif
                                alt="{{ $new['title'] }}" class="w-full h-[300px] object-cover rounded-t-3xl">
                            <button class="py-2 px-4 bg-oren text-white rounded-lg absolute left-8 top-[235px] z-10">
                                {{ $new->created_at->format('F d, Y') }}
                            </button>
                        </div>
                        <div class="absolute bottom-0 bg-white pt-6 px-9 h-1/2 w-full overflow-hidden">
                            <div class="space-y-3">
                                <a href="{{ route('newsDetail', ['id' => $new->slug, 'lang' => $lang]) }}">
                                    <strong>
                                        <p class="text-lg font-bold">{{ $new['title'] }}</p>
                                    </strong>
                                </a>
                                <p>{!! str($new->body)->limit(100) !!}</p>
                            </div>
                            <div class="flex justify-center mt-5">
                                <a href="{{ route('newsDetail', ['id' => $new->slug, 'lang' => $lang]) }}"
                                    class="py-2 px-10 bg-biru-tua text-white rounded-3xl absolute items-center bottom-5">{{ __('message.read_more') }}</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center lg:col-span-2 px-10 lg:px-30 pt-0 pb-20">
                        <p class="font-bold text-2xl mt-10">Maaf, kata kunci yang Anda masukkan tidak ditemukan.</p>
                        <p class="">Silakan masukkan kata kunci lain atau kunjungi halaman lain: <a
                                href="{{ route('front.home') }}" class="text-oren">home</a>, <a class="text-oren"
                                href="/profile">tentang kami</a>, atau <a class="text-oren" href="/contacts">kontak</a></p>
                    </div>
                @endforelse
            </div>
            <div class="w-[30%] space-y-3 hidden lg:block">
                <x-side-news />
            </div>
        </div>
        <div class="flex justify-center mt-10">
            {{ $news->links('frontend.pagination.index') }}
        </div>
        <div class="px-4 lg:hidden space-y-3">
            <x-side-news />
        </div>
    </section>

    @include('frontend.layouts.footer')
@endsection

@section('extend-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardDates = document.querySelectorAll('.wrapper-flip-date')
            const cardFlipDates = document.querySelectorAll('.flip-date')

            cardDates.forEach((cardDate, index) => {
                cardDate.addEventListener('mouseover', function() {
                    cardFlipDates[index].classList.remove('hidden');
                    cardFlipDates[index].classList.add('flex');
                });
                cardDate.addEventListener('mouseout', function() {
                    cardFlipDates[index].classList.add('hidden');
                    cardFlipDates[index].classList.remove('flex');
                });
                cardDate.addEventListener('touchstart', function() {
                    cardFlipDates[index].classList.remove('hidden');
                    cardFlipDates[index].classList.add('flex');
                });
                cardDate.addEventListener('touchend', function() {
                    cardFlipDates[index].classList.add('hidden');
                    cardFlipDates[index].classList.remove('flex');
                });
            });
        });
    </script>
@endsection

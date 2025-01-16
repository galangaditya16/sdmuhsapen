@extends('frontend.layouts.app')

@section('content')
    <x-profile-menu-header title="Berita Sekolah" />

    <section class="container mx-auto grid grid-cols-1 gap-y-14 md:my-20">
        <div class="grid md:grid-cols-2 gap-y-4 px-4 lg:px-0">
            <div class="w-full md:flex grid gap-y-4">
                <div class="flex items-center w-full bg-gray-300 rounded-3xl">
                    <select name="phone"
                        class="appearance-none bg-transparent border-none rounded-3xl text-center font-bold bg-gray-300 w-full text-gray-700 mr-3 py-2.5 px-2 leading-tight focus:outline-1"
                        type="text" placeholder="No. hp" aria-label="No. hp">
                        <option value="Bagian pendaftaran" value="">Semua kategori</option>
                    </select>
                </div>
                <div class="flex items-center w-full bg-gray-300 rounded-3xl">
                    <select name="phone"
                        class="appearance-none bg-transparent border-none rounded-3xl text-center font-bold bg-gray-300 w-full text-gray-700 mr-3 py-2.5 px-2 leading-tight focus:outline-1"
                        type="text" placeholder="No. hp" aria-label="No. hp">
                        <option value="Bagian pendaftaran" value="">Terbaru</option>
                    </select>
                </div>
            </div>

            <div class="md:w-1/2 md:place-self-end">
                <div class="flex items-center relative bg-gray-300 rounded-3xl">
                    <input name="search"
                        class="appearance-none bg-transparent border-none rounded-3xl text-center md:text-end font-bold bg-gray-300 w-full text-gray-700 py-2.5 pl-2 pr-10 leading-tight focus:outline-2 focus:border-2"
                        type="text" placeholder="Search...." aria-label="Search....">
                    <div class="absolute right-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-gray-700">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="block lg:flex gap-x-10">
            <div class="px-4 lg:px-0 lg:w-[65%] grid grid-cols-1 lg:grid-cols-2 gap-10">
                @forelse ($news as $new)
                    <div style="background-image: url('{{ asset('assets/images/news').'/'.$new->ContentNews->getFirstImage() }}');" alt="$news"
                        class="rounded-3xl bg-cover bg-center h-[565px] max-h-[600px] w-full relative overflow-hidden">
                        <div class="h-[565px] relative">
                            <button class="py-2 px-4 bg-oren text-white rounded-lg absolute left-8 top-[235px]">September
                                24, 2024</button>
                        </div>
                        <div class="absolute bottom-0 bg-white pt-6 px-9 h-1/2">
                            <div class="space-y-3">
                                <p class="text-lg font-bold">{{ $new['title'] }}</p>
                                <p>{!! str($new->body)->limit(100) !!}</p>
                            </div>
                            <div class="flex justify-center mt-5">
                                <a href="{{ route('newsDetail', str($new['title'])->slug()) }}"
                                    class="py-2 px-10 bg-biru-tua text-white rounded-3xl">Baca lagi</a>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
            <div class="w-[30%] space-y-3 hidden lg:block">
                <x-side-news />
            </div>
        </div>

        {{--  <div class="flex justify-center gap-x-1 font-bold">
      <button class="h-10 w-10 bg-oren rounded-full text-white">1</button>
      <button class="h-10 w-10 bg-gray-300 rounded-full text-black">2</button>
      <button class="h-10 w-10 bg-gray-300 rounded-full text-black">...</button>
      <button class="h-10 w-10 bg-gray-300 rounded-full text-black">5</button>
    </div>  --}}

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

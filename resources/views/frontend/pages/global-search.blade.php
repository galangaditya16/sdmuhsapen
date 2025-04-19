@extends('frontend.layouts.app')

@section('content')

  <x-profile-menu-header title="Hasil Penelusuran" />

    <section class="container mx-auto grid grid-cols-1 gap-y-14 md:my-20 px-2">
        <form action="#" method="GET">
            <div class="grid md:grid-cols-2 gap-y-4 px-4 lg:px-0">
                <div class="w-full md:flex grid gap-y-4">
                  <x-breadcumb :breadcrumbs="[
                    ['url' => '', 'name' => 'Hasil Penulusuran'],
                    ]" />
                </div>

                <div class="md:w-1/2 md:place-self-end">
                    <div class="flex items-center relative bg-gray-300 rounded-3xl">
                        <input name="search"
                            class="appearance-none bg-transparent border-none rounded-3xl text-center md:text-end font-bold bg-gray-300 w-full text-gray-700 py-2.5 pl-2 pr-10 leading-tight focus:outline-2 focus:border-2"
                            type="text" placeholder="Search...." aria-label="Search....">
                        {{-- <input name="lang" value="{{ $lang }}" type="hidden"> --}}
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
        <p class="px-4 md:px-0 font-bold">Hasil penelusuran untuk "{{ request('search') ?? '-' }}"</p>
        <div class="block lg:flex gap-x-10">
            <div class="px-4 lg:px-0 lg:w-[65%] grid grid-cols-1 lg:grid-cols-2 gap-10">
                @forelse ($news as $new)
                @php
                if(isset($new['ContentNews']) && $new['ContentNews']){
                  $decode = $new['ContentNews'] && $new['ContentNews']['images'] ? json_decode($new['ContentNews']['images']) : '';
                  $firstImage = $decode ? $decode[0] : '';
                }
                @endphp
                    <div style="background-image: url('{{ asset('assets/images/news').'/'.$firstImage }}');" alt="$news"
                        class="rounded-3xl bg-cover bg-center h-[565px] max-h-[600px] w-full shadow-xl hover:-translate-y-1 hover:scale-101 duration-150 relative overflow-hidden">
                        <div class="h-[565px] relative">
                          <button class="py-2 px-4 bg-oren text-white rounded-lg absolute left-8 top-[235px]">                     
                            {{ \Carbon\Carbon::parse($new['created_at'])->format('F d, Y') }}</button>
                        </div>
                        <div class="absolute bottom-0 bg-white pt-6 px-9 h-1/2 w-full overflow-hidden">
                            <div class="space-y-3">
                                <a href="{{ route('newsDetail', ['id' => $new['slug'], 'lang' => $lang]) }}">
                                    <strong><p class="text-lg font-bold">{{ $new['title'] }}</p></strong>
                                </a>
                                <p>{!! str($new['body'])->limit(100) !!}</p>
                            </div>
                            <div class="flex justify-center mt-5">
                                <a href="{{ route('newsDetail', ['id' => $new['slug'], 'lang' => $lang]) }}"
                                    class="py-2 px-10 bg-biru-tua text-white rounded-3xl absolute items-center bottom-5">Baca lagi</a>
                            </div>
                        </div>
                    </div>
              @empty
                div class="text-center lg:col-span-2 px-10 lg:px-30 pt-0 pb-20">
                  <p class="font-bold text-2xl mt-10">Maaf, kata kunci yang Anda masukkan tidak ditemukan.</p>
                  <p class="">Silakan masukkan kata kunci lain atau kunjungi halaman lain: <a href="{{ route('front.home') }}" class="text-oren">home</a>, <a class="text-oren" href="/profile">tentang kami</a>, atau <a class="text-oren" href="/contacts">kontak</a></p>
                </div>
                @endforelse
            </div>
        </div>

        <div class="px-4 lg:hidden space-y-3">
            <x-side-news />
        </div>
    </section>

    @include('frontend.layouts.footer')
@endsection

@section('extend-script')
    <script></script>
@endsection

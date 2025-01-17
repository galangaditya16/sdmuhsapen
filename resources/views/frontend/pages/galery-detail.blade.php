@extends('frontend.layouts.app')

@section('content')
    <section class="container mx-auto grid grid-cols-1 gap-y-6 md:my-20">
        <div class="sm:flex mt-20 sm:mt-12 lg:mt-5 sm:justify-between grid gap-y-4 sm:gap-y-0">
            <div class="sm:w-[65%] px-2 lg:px-0">
                <x-breadcumb :breadcrumbs="[['url' => '/galery', 'name' => 'Galery'], ['url' => '', 'name' => 'Kategori']]" />
            </div>

            <div class="px-2 lg:px-0 sm:place-self-center sm:place-items-end">
                <div class="flex items-center relative bg-gray-300 rounded-3xl">
                    <input name="search"
                        class="appearance-none bg-transparent border-none rounded-3xl text-center md:text-end font-bold bg-gray-300 w-full text-gray-700 py-3 pl-2 pr-10 leading-tight focus:outline-2 focus:border-2"
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

        <div class="block lg:flex xl:gap-x-20">
            <div class="px-4 lg:px-0 lg:w-[65%] grid grid-cols-1 gap-10">
                <div class="flex gap-x-5">
                    <div class="flex gap-x-2 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="true" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        <p>Author 1</p>
                    </div>
                    <div class="flex gap-x-2 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>
                        <p>24 September 2024</p>
                    </div>
                </div>
                <div class="w-full space-y-12">
                    @if ($lang == 'id')
                        <p
                            class="font-bold text-3xl relative before:content-[''] before:absolute before:left-0 before:-bottom-4 before:h-1 before:w-48 before:bg-biru-tua">
                            {{ $gallery->title_id }}</p>
                    @else
                        <p
                            class="font-bold text-3xl relative before:content-[''] before:absolute before:left-0 before:-bottom-4 before:h-1 before:w-48 before:bg-biru-tua">
                            {{ $gallery->title_en }}</p>
                    @endif

                    @php
                        // Decode JSON dengan validasi
                        $images = json_decode($gallery->images, true);
                        if (!is_array($images)) {
                            $images = []; // Ubah ke array kosong jika JSON tidak valid atau kosong
                        }
                    @endphp

                    @forelse($images as $image)
                        <img src="{{ asset('assets/images/gallery/') . '/' . $image }}" alt="banner.jpg"
                            class="h-[450px] object-cover w-full rounded-lg">
                    @empty
                        <p class="text-gray-500 text-center">Tidak ada gambar yang tersedia.</p>
                    @endforelse
                </div>

            </div>
            <div class="w-[30%] space-y-3 hidden lg:block">
                <x-side-news />
            </div>
        </div>
        <div class="lg:hidden block">
            <x-side-news />
        </div>
    </section>
    @include('frontend.layouts.footer')
@endsection

@extends('frontend.layouts.app')

@section('content')
    <x-profile-menu-header title="Galeri Sekolah" />

    <section class="container mx-auto grid grid-cols-1 gap-y-7 md:my-20">
        <div class="md:flex md:justify-between gap-x-10 grid gap-y-5 px-4 md:px-0">
            <div class="lg:px-0">
                <x-breadcumb :breadcrumbs="[['url' => '', 'name' => 'Galeri Foto Sekolah']]" />
            </div>

            <div class="flex items-center bg-gray-300 rounded-3xl lg:w-[15%]">
                <select name="phone"
                    class="appearance-none bg-transparent border-none rounded-3xl text-center font-bold bg-gray-300 w-full text-gray-700 mr-3 py-2.5 px-2 leading-tight focus:outline-1"
                    type="text" placeholder="No. hp" aria-label="No. hp">
                    <option value="Bagian pendaftaran" value="">Galeri Terbaru</option>
                </select>
            </div>


            <div class="h-full">
                <div class="flex items-center relative bg-gray-300 rounded-3xl">
                    <input name="search"
                        class="appearance-none bg-transparent border-none rounded-3xl text-center md:text-end font-bold bg-gray-300 w-full text-gray-700 py-2.5 pl-2 pr-10 leading-tight focus:outline-2 focus:border-2"
                        type="text" placeholder="Cari berita..." aria-label="Cari berita...">
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

        <div class="px-4 lg:px-0 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($galeries as $new)
                <div style="background-image: url('{{ asset('assets/images/gallery/thumbnail/').'/'. $new->thumbnail }}');" alt="galeries-1.png"
                    class="rounded-3xl bg-cover bg-center h-[565px] max-h-[600px] w-full relative overflow-hidden">
                    <div class="h-[565px] relative">
                        <div
                            class="py-1.5 px-4 bg-black bg-opacity-40 text-white rounded-lg absolute left-8 top-[235px] flex gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            <p>25 Foto</p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 bg-white pt-6 px-9 h-2/3 w-full">
                        <div class="space-y-3">
                            @if ($lang == 'id')
                                <p class="text-lg font-bold">Galeri: {{ $new->title_id }}</p>
                            @else
                                <p class="text-lg font-bold">Galeri: {{ $new->title_en }}</p>
                            @endif
                            <p class="font-thin text-sm">{{ $new->created_at }}</p>
                        </div>
                        <div class="flex justify-center">
                            @if ($lang == 'id')
                                <a href="{{ route('galeryDetail', $new->slug_id) }}"
                                    class="py-2 px-10 bg-oren text-white rounded-3xl absolute items-center bottom-5">Lihat Galeri</a>
                            @else
                                <a href="{{ route('galeryDetail', $new->slug_en) }}"
                                    class="py-2 px-10 bg-oren text-white rounded-3xl absolute items-center bottom-5">Lihat Galeri</a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        {!! $galeries->links('frontend.pagination.index') !!}
    </section>

    @include('frontend.layouts.footer')
@endsection

@section('extend-script')
    <script></script>
@endsection

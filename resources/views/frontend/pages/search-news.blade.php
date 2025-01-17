@extends('frontend.layouts.app')

@section('content')
  <x-profile-menu-header title="Berita Sekolah" />

  <section class="container mx-auto grid grid-cols-1 gap-y-4 md:my-20">
    <div class="md:flex md:justify-between gap-x-10 grid gap-y-5 px-4 md:px-0">
      <div class="lg:px-0">
        <x-breadcumb :breadcrumbs="[
          ['url' => '', 'name' => 'Hasil Penulusuran'],
          ]" />
      </div>

      <div class="flex items-center bg-gray-300 rounded-3xl lg:w-[15%]">
        <select
          name="phone"
          class="appearance-none bg-transparent border-none rounded-3xl text-center font-bold bg-gray-300 w-full text-gray-700 mr-3 py-2.5 px-2 leading-tight focus:outline-1"
          type="text"
          placeholder="No. hp"
          aria-label="No. hp"
          >
          <option value="Bagian pendaftaran" value="">Terbaru</option>
        </select>
      </div>


      <div class="h-full">
        <div class="flex items-center relative bg-gray-300 rounded-3xl">
          <input
            name="search"
            class="appearance-none bg-transparent border-none rounded-3xl text-center md:text-end font-bold bg-gray-300 w-full text-gray-700 py-2.5 pl-2 pr-10 leading-tight focus:outline-2 focus:border-2"
            type="text"
            placeholder="Search...."
            aria-label="Search...."
          >
          <div class="absolute right-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-700">
              <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </div>
        </div>
      </div>
    </div>

    <p class="px-4 md:px-0 font-bold">Hasil penulusuran untuk “Contoh Halaman Hasil Penelusuran</p>

    <div class="px-4 lg:px-0 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ($news as $new)
        <div style="background-image: url('{{ $new['bg-image'] }}');" alt="news-1.png" class="rounded-3xl bg-cover bg-center h-[565px] max-h-[600px] w-full relative overflow-hidden">
          <div class="h-[565px] relative">
            <button class="py-2 px-4 bg-oren text-white rounded-lg absolute left-8 top-[235px]">September 24, 2024</button>
          </div>
          <div class="absolute bottom-0 bg-white pt-6 px-9 h-1/2">
            <div class="space-y-3">
              <p class="text-lg font-bold">{{ $new['title' ]}}</p>
              <p>{{ str($new['body'])->limit(100) }}</p>
            </div>
            <div class="flex justify-center mt-5">
              <a href="{{ route('newsDetail', str($new['title'])->slug()) }}" class="py-2 px-10 bg-biru-tua text-white rounded-3xl">Baca lagi</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>


    <div class="flex justify-center gap-x-1 font-bold">
      <button class="h-10 w-10 bg-oren rounded-full text-white">1</button>
      <button class="h-10 w-10 bg-gray-300 rounded-full text-black">2</button>
      <button class="h-10 w-10 bg-gray-300 rounded-full text-black">...</button>
      <button class="h-10 w-10 bg-gray-300 rounded-full text-black">5</button>
    </div>
  </section>

  @include('frontend.layouts.footer')

@endsection

@section('extend-script')
  <script></script>
@endsection




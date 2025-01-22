@extends('frontend.layouts.app')

@section('content')
  <x-profile-menu-header title="Hasil Penelusuran" />
  <section class="container mx-auto grid grid-cols-1 gap-y-4 md:my-20">
    <div class="md:flex md:justify-between gap-x-10 grid gap-y-5 px-4 md:px-0">
      <div class="lg:px-0">
        <x-breadcumb :breadcrumbs="[
          ['url' => '', 'name' => 'Hasil Penulusuran'],
          ]" />
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

    <div class="px-4 lg:px-0 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
      <ol class="list-disc space-y-3">
        @foreach ($lists as $list)
          <li class="list-none flex justify-between">
            <p class="underline">{{ $list['title'] }}</p>
            <div>type</div>
          </li>
        @endforeach
        <li class="list-none text-biru-tua"><a href="/next">Laman berikutnya >>></a></li>
      </ol>
    </div>
  </section>

  @include('frontend.layouts.footer')
@endsection

@section('extend-script')
  <script></script>
@endsection

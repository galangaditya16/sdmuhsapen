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
        <div class="block lg:flex">
            <div class="px- lg:px-0 lg:w-[65%] grid grid-cols-1">
              <table class="w-full text-left rtl:text-right text-lg">
                @foreach ($lists as $list)
                <tr class="bg-white border-b dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">
                  @if($list['type'] == 'gallery')
                  <th scope="row" class="px-8 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{ route('galeryDetail', $list['title_id'] ?? $list['title_en']) }}">
                      {{ $list['title'] ?? $list['title_id'] ?? $list['title_en'] }}
                    </a>
                  </th>
                  <td class="px-6 py-2 text-right">
                    <button class="py-2 px-4 bg-biru-tua text-white rounded-lg text-sm">Galeri</button>
                  </td>
                  @else
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{ route('newsDetail', ['id' => $list['slug'], 'lang' => 'id']) }}">
                      {{ $list['title'] ?? $list['title_id'] ?? $list['title_en'] }}
                    </a>
                  </th>
                  <td class="px-6 py-2 text-right">
                    <button class="py-2 px-4 bg-oren text-white rounded-lg text-sm">Berita</button>
                  </td>
                  @endif
                </tr>
                @endforeach
              </table>
            </div>
            <div class="w-[30%] space-y-3 hidden lg:block">
                <x-side-news />
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

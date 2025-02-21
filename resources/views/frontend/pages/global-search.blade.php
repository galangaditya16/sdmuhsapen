@extends('frontend.layouts.app')

@section('content')
  <x-profile-menu-header title="Hasil Penelusuran" />
  <section class="container mx-auto grid grid-cols-1 gap-y-4 md:my-5">
    <div class="md:flex md:justify-between sm:mt-5 gap-x-10 grid gap-y-5 px-4 md:px-0">
      <div class="lg:px-0">
        <x-breadcumb :breadcrumbs="[
          ['url' => '', 'name' => 'Hasil Penulusuran'],
          ]" />
      </div>


      <div class="h-ful md:flex">
        <div class="flex items-center relative bg-gray-300 rounded-3xl">
          <form action="{{ route('front.home') }}">
            <input
            name="search"
            class="appearance-none bg-transparent border-none rounded-3xl text-center md:text-end font-bold bg-gray-300 w-full text-gray-700 py-2.5 pl-2 pr-10 leading-tight focus:outline-2 focus:border-2"
            type="text"
            placeholder="Search...."
            aria-label="Search...."
            >
          </form>
          <div class="absolute right-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-700">
              <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </div>
        </div>
      </div>
    </div>

    <p class="px-4 md:px-0 font-bold">Hasil penelusuran untuk "{{ request('search') ?? '-' }}"</p>

    <div class="w-full grid lg:grid-cols-4 md:grid-cols-2">
      <div class="px-4 lg:px-0 gap-10 lg:col-span-3 md:col-span-2 lg:mr-20">
        <table class="w-full text-left rtl:text-right text-lg">
          @foreach ($lists as $list)
          <tr class="bg-white border-b dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">
            @if($list['type'] == 'gallery')
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
          <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
          <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
              <li>
                  <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
              </li>
              <li>
                  <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
              </li>
              <li>
                  <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">2</a>
              </li>
              <li>
                  <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
              </li>
              <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
              </li>
          </ul>
      </nav>
        {{-- <ol class="list-disc space-y-3">
          @foreach ($lists as $list)
            <li class="list-none flex justify-between">
              @if($list['type'] == 'gallery')
              <a href="{{ route('galeryDetail', $list['title_id'] ?? $list['title_en']) }}" class="underline text-blue-600 hover:text-blue-800">
                {{ $list['title'] ?? $list['title_id'] ?? $list['title_en'] }}
              </a>
              <button class="py-2 px-4 bg-oren text-white rounded-lg ">Galeri</button>
              @else
              <a href="{{ route('newsDetail', ['id' => $list['slug'], 'lang' => 'id']) }}" class="underline text-blue-600 hover:text-blue-800">
                {{ $list['title'] ?? $list['title_id'] ?? $list['title_en'] }}
              </a>
              <button class="py-2 px-4 bg-oren text-white rounded-lg ">News</button>
              @endif
            </li>
          @endforeach
          <li class="list-none text-biru-tua">
            <a href="/next" class="underline text-blue-600 hover:text-blue-800">Laman berikutnya >>></a>
          </li>
        </ol> --}}
      </div>
      <div class="space-y-3 lg:block">
        <x-side-news/>
      </div>
    </div>
    {{-- {!! $lists->links('frontend.pagination.index') !!} --}}
  </section>

  @include('frontend.layouts.footer')
@endsection

@section('extend-script')
  <script></script>
@endsection

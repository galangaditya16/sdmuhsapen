<nav class="bg-gray-200 p-3 rounded-3xl shadow-sm font-bold">
  <ol class="flex items-center space-x-2">
    <li>
      <a href="/" class="flex items-center text-black hover:text-gray-900">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
        </svg>
        <span class="ml-1">Home</span>
      </a>
    </li>

    @foreach($breadcrumbs as $breadcrumb)
      <li class="flex items-center">
        <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
        </svg>
        @if($breadcrumb['url'])
          <a href="{{ $breadcrumb['url'] }}" class="ml-1 hover:text-gray-900">
            {{ $breadcrumb['name'] }}
          </a>
        @else
          <span class="ml-1">
            {{ $breadcrumb['name'] }}
          </span>
        @endif
      </li>
    @endforeach
  </ol>
</nav>

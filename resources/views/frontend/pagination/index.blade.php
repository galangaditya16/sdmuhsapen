@if ($paginator->lastPage() > 1)
<div class="flex justify-center gap-x-1 font-bold">
    <!-- Tombol Previous -->
    @if ($paginator->onFirstPage())
        <button class="h-10 w-10 bg-gray-300 rounded-full text-gray-500 cursor-not-allowed" aria-disabled="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="h-10 w-10 bg-oren rounded-full text-white flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
    @endif

    <!-- Nomor Halaman -->
    @foreach (range(1, $paginator->lastPage()) as $i)
        @if ($i == $paginator->currentPage())
            <button class="h-10 w-10 bg-oren rounded-full text-white">{{ $i }}</button>
        @elseif ($i == 1 || $i == $paginator->lastPage() || abs($paginator->currentPage() - $i) <= 1)
            <a href="{{ $paginator->url($i) }}" class="h-10 w-10 bg-gray-300 rounded-full text-black flex items-center justify-center">{{ $i }}</a>
        @elseif ($i == 2 || $i == $paginator->lastPage() - 1)
            <button class="h-10 w-10 bg-gray-300 rounded-full text-black">...</button>
        @endif
    @endforeach

    <!-- Tombol Next -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="h-10 w-10 bg-oren rounded-full text-white flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    @else
        <button class="h-10 w-10 bg-gray-300 rounded-full text-gray-500 cursor-not-allowed" aria-disabled="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    @endif
</div>
@endif

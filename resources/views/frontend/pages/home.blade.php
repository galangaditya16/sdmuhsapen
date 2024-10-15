@extends('frontend.layouts.app')

@section('extend-header')
<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<style>

.swiper-wrapper {
    width: 100%;
    height: max-content !important;
    padding-bottom: 64px !important;
    -webkit-transition-timing-function: linear !important;
    transition-timing-function: linear !important;
    position: relative;
}

.swiper-pagination-bullet {
    background: #4f46e5;
}

</style>

    
@endsection

@section('content')
<section class="bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 mt-10">    

     <!--HTML CODE-->
    <div class="w-full">
        <div class="swiper default-carousel swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-indigo-50 h-[40vh] flex justify-center items-center">
                        <span class="text-3xl font-semibold text-indigo-600">Slide 1 </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-indigo-50 h-[40vh] flex justify-center items-center">
                        <span class="text-3xl font-semibold text-indigo-600">Slide 2 </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-indigo-50 h-[40vh] flex justify-center items-center">
                        <span class="text-3xl font-semibold text-indigo-600">Slide 3 </span>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-8 lg:justify-start justify-center">
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
                
            </div>
        <div class="swiper-pagination"></div>
        </div>
    </div>
        

</section>
@endsection

@section('extend-script')
<script>
    var swiper = new Swiper(".default-carousel", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endsection

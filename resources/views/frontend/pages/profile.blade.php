@extends('frontend.layouts.app')

@section('extend-header')
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
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

        .swiper-pagination-bullet-active {
            background: #4F46E5 !important;
        }
    </style>
@endsection

@section('content')
    {{-- SLIDER CAROUSEL --}}
    <section class="h-[200px] my-20" style="background: url({{ asset('assets/images/cover.jpg') }}); background-size: contain; opacity: 0.1;">
        <!--HTML CODE-->
        <div class="w-full ">
            <h1>ini halaman profile</h1>
            <div style="width: 100%; height: 500px" ></div>
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

        var swiperMultipleSlider = new Swiper(".multiple-slide-carousel", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.multiple-swiper-pagination',
            breakpoints: {
                960: {
                    slidesPerView: 3,
                    spaceBetween: 25,
                }
            }
        });
    </script>
@endsection

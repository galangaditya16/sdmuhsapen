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
        
    
    <div class="relative h-[300px] w-full overflow-hidden">        
        <h1 class="text-xl md:text-5xl absolute left-0 right-0 font-bold text-black z-50 mt-[150px] text-center">Profil SD Muhammadiyah Sapen</h1>        
        
        <img src="{{ asset('assets/images/cover.jpg') }}" style="filter:opacity(50%)">
    </div>

    <section class="h-[800px] mb-20 -mt-[200px]">
        <!--HTML CODE-->
        <div class="w-full ">
            <div class="flex flex-col">
                <div class="container mx-auto">
                    
                </div>
            </div>
        </div>                  

    </section>

    <section class="my-20">
        <!--HTML CODE-->
        <div class="w-full container mx-auto px-4">
            <h1 class="text-2xl md:text-5xl font-bold my-8 text-oren text-center">Tentang SD Muhammadiyah Sapen</h1>
            <div class="grid md:grid-cols-2 grid-rows-auto gap-8">
                <div class="flex-auto w-50">
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/id/1/5000/3333"
                        alt="image description">
                </div>
                <div>
                    
                    <h1 class="text-xl md:text-4xl font-bold my-3 text-dark-blue">Sejarah Sekolah Dasar Muhammadiyah Sapen</h1>
                    <p class="text-sm md:text-base mt-3 text-justify">
                        Sekolah Dasar (SD) Sapen, yang terletak di Yogyakarta, memiliki sejarah yang kaya. Didirikan pada tahun 1976, SD Sapen bertujuan untuk memberikan pendidikan dasar yang berkualitas bagi anak-anak di sekitar wilayah Sapen. Sejak awal, sekolah ini fokus pada pengembangan karakter dan akademik siswa, dengan menekankan pentingnya pendidikan yang holistik.
                    </p>
                    <p class="text-sm md:text-base mt-3 text-justify" >
                        Selama bertahun-tahun, SD Sapen mengalami berbagai perkembangan, baik dalam kurikulum maupun fasilitas. Dengan dukungan masyarakat dan pemerintah, sekolah ini terus berupaya untuk meningkatkan mutu pendidikan dan mengadaptasi metode pengajaran yang relevan dengan kebutuhan zaman.
                    </p>
                    
                </div>
                

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

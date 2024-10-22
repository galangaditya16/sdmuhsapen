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

.swiper-pagination-bullet-active {
    background: #4F46E5 !important;
}

</style>

    
@endsection

@section('content')
<section class=" border-gray-200 my-20">    
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

<section class=" border-gray-200 my-20">    
    <!--HTML CODE-->
   <div class="w-full container mx-auto px-4">
       <div class="grid md:grid-cols-2 grid-rows-auto gap-8">
            
            <div>
                <h1 class="text-lg font-bold text-oren">Selayang Pandang</h1>
                <h1 class="text-4xl font-bold my-3 text-dark-blue">SD Muhammadiyah Sapen Yogyakarta</h1>
                <p class="text-base mt-3 text-justify">
                    SD Muhammadiyah Sapen adalah salah satu sekolah dasar yang berada di Yogyakarta, Indonesia. Sekolah ini merupakan bagian dari jaringan Muhammadiyah, sebuah organisasi Islam yang berfokus pada pendidikan dan sosial. SD Muhammadiyah Sapen dikenal karena mengintegrasikan nilai-nilai agama dalam proses pembelajaran, serta mengutamakan pengembangan karakter dan keterampilan siswa.
                </p>
                <a href="#">
                    <button type="button" class="mt-5 text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                        Pelajari Selengkapnya
                    </button>
                </a>
            </div>
            <div class="flex-auto w-50">
                <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/id/1/5000/3333" alt="image description">
            </div>
            
       </div>
   </div>
       
</section>

<section class=" border-gray-200 my-20">    
       
    <div class="w-full relative container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl font-bold my-3 text-black mx-auto">Keunggulan SD Muhammadiyah Sapen</h1>
            <p class="text-lg my-6 text-black mx-auto">
                SD Muhammadiyah Sapen adalah sekolah yang memiliki berbagai keungggulan dalam membentuk karakter peserta didik antara lain :
            </p>
        </div>
        <div class="swiper multiple-slide-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="flex items-center justify-center">
                       
                        <a href="#" class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 group">
                            <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z"/>
                            </svg>                              
                            <h5 class="mb-2 text-3xl md:text-4xl text-white group-hover:text-oren font-bold tracking-tight text-center">
                                Unggul dalam Prestasi Akademik
                            </h5>
                            <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10">
                                SD Muhammadiyah Sapen menerapkan kurikulum terbaru yang mengikuti perkembangan kebijakan pendidikan nasional, dengan fokus pada pembelajaran yang berorientasi pada siswa. Sehingga para peserta didik dapat belajar dengan cara terbaik.
                            </p>
                        </a>
    
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center justify-center">
                       
                        <a href="#" class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 hover:duration-300 group">
                            <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z"/>
                            </svg>                              
                            <h5 class="mb-2 text-3xl md:text-4xl text-white group-hover:text-oren font-bold tracking-tight text-center">
                                Unggul dalam Prestasi NonAkademik
                            </h5>
                            <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10">
                                SD Muhammadiyah Sapen menerapkan kurikulum terbaru yang mengikuti perkembangan kebijakan pendidikan nasional, dengan fokus pada pembelajaran yang berorientasi pada siswa. Sehingga para peserta didik dapat belajar dengan cara terbaik.
                            </p>
                        </a>
    
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center justify-center">
                       
                        <a href="#" class="block w-full p-6 h-96 rounded-2xl shadow bg-oren hover:bg-orange-200 group">
                            <svg class="w-[50%] h-[50%] text-white mx-auto group-hover:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z"/>
                            </svg>                              
                            <h5 class="mb-2 text-3xl md:text-4xl text-white group-hover:text-oren font-bold tracking-tight text-center">
                                Unggul dalam Pendidikan Karakter
                            </h5>
                            <p class="hidden group-hover:block font-normal text-gray-900 text-center mt-10">
                                SD Muhammadiyah Sapen menerapkan kurikulum terbaru yang mengikuti perkembangan kebijakan pendidikan nasional, dengan fokus pada pembelajaran yang berorientasi pada siswa. Sehingga para peserta didik dapat belajar dengan cara terbaik.
                            </p>
                        </a>
    
                    </div>
                </div>                
            </div>
            <div class="multiple-swiper-pagination"></div>    
        </div>
        
    </div>
        
</section>

<section class=" border-gray-200 my-20 py-20" style="background-color: rgba(248, 111, 3, 0.1)">    
    <div class="w-full block container mx-auto px-4">
        <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto">Berita Terkini</h1>

        <div class="flex flex-nowrap md:grid overflow-x-auto md:grid-cols-3 gap-4 max-h-[65%]">            
            
            @for ($a = 1; $a<=6; $a++)                        
                <div class="bg-white border  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg relative mx-auto w-full" src="https://picsum.photos/300/150" alt="" style="object-fit: cover" />
                    </a>
                    <span class="bg-oren p-3 rounded-full md:text-sm relative text-white font-bold left-2 -top-10">
                        Oktober 22, 2024
                    </span>
                    <div class="p-5 w-72 md:w-full">
                        <a href="#">
                            <h5 class="mb-2 text-base md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endfor

        </div>
        <div class="relative flex">
            <a href="#" class="mx-auto">
                <button type="button" class="mt-5 font-bold text-white bg-oren hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                    Lihat Semua Berita
                </button>
            </a>
        </div>
    </div>
</section>

<section class=" border-gray-200 my-20 py-20">    
    <div class="w-full block container mx-auto px-4">
        <h1 class="text-4xl font-bold my-3 text-black text-center mx-auto">Galeri Kegiatan</h1>

        

        <div class="grid grid-cols-2 md:grid-cols-4 md:grid-rows-3 gap-2">
            <div class="relative">
                <div class="opacity-0 hover:opacity-80 bg-white duration-300 absolute inset-0 z-10 flex text-white font-semibold">
                    <div class="flex">
                        <span class="flex text-black">
                            <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z" clip-rule="evenodd"/>
                            </svg>
                            25 Gambar
                        </span>
                        <span class="flex text-black">
                            <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z" clip-rule="evenodd"/>
                            </svg>
                            25 Gambar
                        </span>
                    </div>
                </div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">                
            </div>
            <div class="relative" >
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
            </div>
            <div class="relative col-span-2 row-span-2">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
            </div>
            <div class="relative col-span-2 row-span-2">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
            </div>
            <div class="relative">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
            <div class="relative">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
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
            960 : {
                slidesPerView: 3,
                spaceBetween: 25,
            }
        }
    });
</script>
@endsection

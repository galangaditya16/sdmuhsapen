@extends('frontend.layouts.app')

@section('content')
  <x-profile-menu-header title="Profil Guru dan Karyawan" />
  <section class="container mx-auto grid grid-cols-1 gap-y-14 md:my-20">
    <p class="w-3/4 mx-auto text-center text-lg">SD Muhammadiyah Sapen memiliki ratusan guru yang memiliki pengalaman mengajar yang tinggi. Selain berpengalaman, tenaga pengajar kami memiliki sertifikasi mengajar.</p>
    <div class="flex justify-between">
      <div></div>
      <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3">
        <div class="font-bold lg:col-start-2 text-center mx-auto">
          <div class="mb-14">
            <p class="text-3xl text-biru-tua place-self-center mx-auto w-fit">Kepala Sekolah</p>
            <div class="block w-32 h-1 bg-biru-tua mx-auto mt-2"> </div>
          </div>
          <div style="background-image: url('{{asset('assets/images/teachers/grand-teacher.jpg')}}');" class="bg-no-repeat bg-center bg-cover rounded-2xl overflow-hidden w-[300px] h-[450px] relative">
            <div class="bg-biru-tua absolute bottom-0 w-full h-32 grid grid-cols-1 justify-between">
              <p class="text-oren font-bold text-2xl">Agung Rahmanto, S.H., M.Pd.</p>
              <p class="text-white font-bold">Kepala SD Muh Sapen</p>
            </div>
          </div>
        </div>
      </div>
      <div></div>
    </div>

    <div class="">
      <div class="mb-14">
        <p class="text-3xl text-biru-tua place-self-center mx-auto w-fit"> Jajaran Kepala Bagian </p>
        <div class="block w-32 h-1 bg-biru-tua mx-auto mt-2"> </div>
      </div>
      <div></div>
      <div class="flex justify-between text-center">
        <div class="my-auto">
          <button id="left-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-20 text-oren">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
          </button>
        </div>
        <div id="carousel" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-5 md:gap-5 transition-transform duration-500 ease-in-out">
          <div class="mx-auto">
            <div style="background-image: url('{{asset('assets/images/teachers/grand-teacher.jpg')}}');" class="bg-no-repeat bg-center bg-cover rounded-2xl overflow-hidden w-60 xl:w-72 max-w-[300px] h-[450px] relative">
              <div class="bg-biru-tua absolute bottom-0 w-full h-32 grid grid-cols-1 justify-between">
                <p class="text-oren font-bold text-2xl">Agung Rahmanto, S.H., M.Pd.</p>
                <p class="text-white font-bold">Kepala SD Muh Sapen</p>
              </div>
            </div>
          </div>
          <div class="mx-auto">
            <div style="background-image: url('{{asset('assets/images/teachers/grand-teacher.jpg')}}');" class="bg-no-repeat bg-center bg-cover rounded-2xl overflow-hidden w-60 xl:w-72 max-w-[300px] h-[450px] relative">
              <div class="bg-biru-tua absolute bottom-0 w-full h-32 grid grid-cols-1 justify-between">
                <p class="text-oren font-bold text-2xl">Agung Rahmanto, S.H., M.Pd.</p>
                <p class="text-white font-bold">Kepala SD Muh Sapen</p>
              </div>
            </div>
          </div>
          <div class="mx-auto">
            <div style="background-image: url('{{asset('assets/images/teachers/grand-teacher.jpg')}}');" class="bg-no-repeat bg-center bg-cover rounded-2xl overflow-hidden w-60 xl:w-72 max-w-[300px] h-[450px] relative">
              <div class="bg-biru-tua absolute bottom-0 w-full h-32 grid grid-cols-1 justify-between">
                <p class="text-oren font-bold text-2xl">Agung Rahmanto, S.H., M.Pd.</p>
                <p class="text-white font-bold">Kepala SD Muh Sapen</p>
              </div>
            </div>
          </div>
        </div>
        <div class="my-auto">
          <button id="right-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-20 text-oren">
              <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
  @include('frontend.layouts.footer-working-hours')
@endsection
@section('extend-script')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const carousel = document.getElementById('carousel');
      const leftButton = document.getElementById('left-button');
      const rightButton = document.getElementById('right-button');
      let currentIndex = 0;

      leftButton.addEventListener('click', function () {
        if (currentIndex > 0) {
          currentIndex--;
          updateCarousel();
        }
      });

      rightButton.addEventListener('click', function () {
        if (currentIndex < carousel.children.length - 1) {
          currentIndex++;
          updateCarousel();
        }
      });

      function updateCarousel() {
        const itemWidth = carousel.children[0].offsetWidth;
        carousel.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
      }
    });
  </script>
@endsection

@extends('frontend.layouts.app')

@section('content')
  <x-profile-menu-header title="{{ __('message.profil_guru_dan_karyawan') }}" />
  <section class="container mx-auto grid grid-cols-1 gap-y-14 md:my-20">
    <p class="w-3/4 mx-auto text-center text-lg">{{ __('message.profil_guru_content') }}</p>
    <div class="flex justify-between">
      <div></div>
      <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3">
        {{--  <div class="font-bold lg:col-start-2 text-center mx-auto">
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
        </div>  --}}
      </div>
      <div></div>
    </div>
    @forelse($positions as $key => $value)
      <x-picture-slider title="{{ $value->title}}" :sliders="$value->CategoryTeacher->Guru"/>
    @empty
    @endforelse
  </section>

  @include('frontend.layouts.footer')
@endsection

@section('extend-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousels = document.querySelectorAll('.carousel');
            const leftButtons = document.querySelectorAll('.left-button');
            const rightButtons = document.querySelectorAll('.right-button');

            function getScrollAmount(carousel) {
                const width = window.innerWidth;
                if (width >= 1440) {
                    return carousel.offsetWidth / 4;
                } else if (width >= 1024) {
                    return carousel.offsetWidth / 3;
                } else if (width >= 768) {
                    return carousel.offsetWidth / 2;
                } else {
                    return carousel.offsetWidth;
                }
            }

            leftButtons.forEach((leftButton, index) => {
                leftButton.addEventListener('click', function() {
                    carousels[index].scrollBy({
                        left: -getScrollAmount(carousels[index]),
                        behavior: 'smooth'
                    });
                });
            });

            rightButtons.forEach((rightButton, index) => {
                rightButton.addEventListener('click', function() {
                    carousels[index].scrollBy({
                        left: getScrollAmount(carousels[index]),
                        behavior: 'smooth'
                    });
                });
            });

            window.addEventListener('resize', function() {
                // Update scroll amount on window resize
                carousels.forEach(carousel => getScrollAmount(carousel));
            });
        });
    </script>
@endsection

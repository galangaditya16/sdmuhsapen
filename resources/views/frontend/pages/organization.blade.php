@extends('frontend.layouts.app')

@section('content')
  <x-profile-menu-header title="Struktur Organisasi" />
  <section class="w-9/12 mx-auto grid grid-cols-1 gap-y-14 md:my-20">
    <p class="w-3/4 mx-auto text-center text-lg">SD Muhammadiyah Sapen memiliki struktur organisasi yang sangat terstruktur sebagai hierarki. berikut adalah struktur organisasi SD Muhammadiyah Sapen</p>
    <div class="sm:hidden flex">
      <img src="{{ asset('assets/images/organization/sapen-1.jpg')}}" alt="organization-sapen-1.jpg" class="clickable-image">
    </div>
    <div class="sm:flex hidden">
      <img src="{{ asset('assets/images/organization/sapen-1.jpg')}}" alt="organization-sapen-1.jpg">
    </div>
  </section>
  @include('frontend.layouts.footer-working-hours')

  <!-- Modal -->
  <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden">
    <div class="relative">
      <span id="closeModal" class="absolute top-0 right-0 text-white text-3xl cursor-pointer">&times;</span>
      <img id="modalImage" src="" alt="Modal Image" class="max-w-full max-h-full">
    </div>
  </div>

@endsection

@section('extend-script')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const images = document.querySelectorAll('.clickable-image');
      const modal = document.getElementById('imageModal');
      const modalImage = document.getElementById('modalImage');
      const closeModal = document.getElementById('closeModal');

      images.forEach(image => {
        image.addEventListener('click', function () {
          modalImage.src = this.src;
          modal.classList.remove('hidden');
        });
      });

      closeModal.addEventListener('click', function () {
        modal.classList.add('hidden');
      });

      modal.addEventListener('click', function (e) {
        if (e.target === modal) {
          modal.classList.add('hidden');
        }
      });
    });
  </script>
@endsection


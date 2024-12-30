@extends('frontend.layouts.app')

@section('content')
  <x-profile-menu-header title="Profil Guru dan Karyawan" />
  <section class="w-10/12 xl:w-9/12 mx-auto grid grid-cols-1 gap-y-14 md:my-20">
    <p class="w-3/4 mx-auto text-center text-lg">SD Muhammadiyah Sapen memiliki ratusan guru yang memiliki pengalaman mengajar yang tinggi. Selain berpengalaman, tenaga pengajar kami memiliki sertifikasi mengajar.</p>
    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3">
      <div class="font-bold lg:col-start-2 text-center mx-auto">
        <p class="text-center text-3xl text-biru-tua mb-14">Kepala Sekolah</p>
        <div style="background-image: url('{{asset('assets/images/teachers/grand-teacher.jpg')}}');" class="bg-no-repeat bg-center bg-cover rounded-2xl overflow-hidden w-[300px] h-[450px] relative">
          <div class="bg-biru-tua absolute bottom-0 w-full h-32 grid grid-cols-1 justify-between">
            <p class="text-oren font-bold text-2xl">Agung Rahmanto, S.H., M.Pd.</p>
            <p class="text-white font-bold">Kepala SD Muh Sapen</p>
          </div>
        </div>
        {{-- <img class="object-cover w-[375px] h-[487px] rounded-3xl mx-auto" src="{{ asset('assets/images/teachers/grand-teacher.jpg')}}" alt="grand-teacher.jpg"> --}}
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
    </div>
  </section>
  @include('frontend.layouts.footer-working-hours')
@endsection

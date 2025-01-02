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

    <x-picture-slider title="Jajaran Kepala Bagian" :sliders="[
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
      ]"/>

    <x-picture-slider title="Guru Kelas" :sliders="[
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
      ]"/>

    <x-picture-slider title="Guru Mata Pelajaran" :sliders="[
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
        [
          'name' => 'Agung Rahmanto, S.H., M.Pd.',
          'role' => 'Kepala SD Muh Sapen',
          'image' => asset('assets/images/teachers/grand-teacher.jpg'),
        ],
      ]"/>
  </section>

  @include('frontend.layouts.footer-working-hours')
@endsection

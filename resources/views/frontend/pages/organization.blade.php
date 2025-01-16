@extends('frontend.layouts.app')

@section('content')
  <x-profile-menu-header title="Struktur Organisasi" />
  <section class="w-9/12 mx-auto grid grid-cols-1 gap-y-14 md:my-20">
    <p class="w-3/4 mx-auto text-center text-lg">SD Muhammadiyah Sapen memiliki struktur organisasi yang sangat terstruktur sebagai hierarki. berikut adalah struktur organisasi SD Muhammadiyah Sapen</p>
    <a href="{{ asset('assets/images/organization/sapen-1.jpg')}}" target="_blank">
      <img src="{{ asset('assets/images/organization/sapen-1.jpg')}}" alt="organization-sapen-1.jpg">
    </a>
  </section>
  @include('frontend.layouts.footer')

@endsection

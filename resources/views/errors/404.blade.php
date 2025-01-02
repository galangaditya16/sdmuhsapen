@extends('frontend.layouts.app')

@section('content')
  <section class="container mx-auto flex justify-center items-center md:my-20 mb-14 px-7 h-screen">
    <div class="text-center">
      <div class="leading-none">
        <p class="text-[300px] text-center font-bold text-oren">404</p>
        <p class="text-6xl text-center font-bold text-oren">NOT FOUND</p>
      </div>
      <p class="font-bold text-2xl mt-10">Maaf, halaman yang Anda cari tidak ditemukan.</p>
      <p class="">Silakan masukkan kata kunci lain atau kunjungi halaman lain: <a href="/" class="text-oren">home</a>, <a class="text-oren" href="/profile">tentang kami</a>, atau <a class="text-oren" href="/contacts">kontak</a></p>
    </div>
  </section>
  @include('frontend.layouts.footer-working-hours')
@endsection

@section('extend-script')
  <script></script>
@endsection



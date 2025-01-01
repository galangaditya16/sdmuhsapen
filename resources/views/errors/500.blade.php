@extends('frontend.layouts.app')

@section('content')
  <section class="container mx-auto flex justify-center items-center md:my-20 mb-14 px-7 h-screen">
    <div class="text-center">
      <div class="leading-none">
        <p class="text-[300px] text-center font-bold text-oren">500</p>
        <p class="text-6xl text-center font-bold text-oren">Server Error</p>
      </div>
    </div>
  </section>
  @include('frontend.layouts.footer-working-hours')
@endsection

@section('extend-script')
  <script></script>
@endsection



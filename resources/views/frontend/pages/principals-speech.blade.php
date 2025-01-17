@extends('frontend.layouts.app')
@section('content')
    @if (!is_null($data))
        <x-profile-menu-header title="Sambutan Kepala Sekolah" />
        <section class="w-10/12 xl:w-9/12 mx-auto my-10 md:my-20">
            <div class="space-y-8">
                <div class="md:float-left md:mr-10 mb-6 md:mb-4 w-full lg:w-[530px]">
                    @if (!is_null($data->ContentContent->images))
                        <img class="object-cover w-full md:h-[500px] lg:h-[615px] rounded-3xl"
                            src="{{ asset('assets/images/content') . '/' . $data->ContentContent->getFirstImage() }}"
                            alt="grand-teacher.jpg">
                    @else
                        <img class="object-cover w-full md:h-[500px] lg:h-[615px] rounded-3xl"
                            src="{{ asset('assets/images/default-profile.jpg') }}"
                            alt="grand-teacher.jpg">
                    @endif
                </div>
                <div class="prose max-w-none">
                    <div class="mt-4 space-y-2">
                        <p class="text-biru-tua text-4xl font-extrabold">Agung Rahmanto, S.H., M.Pd.</p>
                        <p class="text-oren text-lg font-bold">Kepala SD Muhammadiyah Sapen</p>
                    </div>
                    {!! $data->body !!}
                </div>

                <div class="clear-both pt-8">
                    <img class="h-64 w-full object-cover rounded-3xl" src="{{ asset('assets/galeri/galery-1.jpeg') }}"
                        alt="galeri-1.jpeg">
                </div>
            </div>
        </section>
    @endif

    @include('frontend.layouts.footer')
@endsection

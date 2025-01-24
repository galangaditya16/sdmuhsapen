<div class="">
    <div class="mb-14">
        <p class="text-3xl text-biru-tua place-self-center mx-auto w-fit">{{ $title }}</p>
        <div class="block w-32 h-1 bg-biru-tua mx-auto mt-2"> </div>
    </div>
    <div class="flex justify-between text-center">
        <div class="my-auto w-[10%]">
            <button class="left-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 md:w-20 md:h-20 text-oren">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>
        </div>
        @php
            $lang = 'id';
        @endphp
        <div class="carousel flex md:gap-x-4 overflow-hidden">
            @forelse ($sliders as $slider)
                <div class="mx-auto">
                    <div style="background-image: url('{{ $slider->image ? asset('assets/images/teacher') . '/' . $slider->image : asset('assets/images/default-profile.jpg') }}');"
                        class="bg-no-repeat bg-center bg-cover rounded-2xl overflow-hidden w-[345px] md:w-[300px] lg:w-[275px] max-w-[400px] h-[450px] relative">
                        <div class="bg-biru-tua absolute bottom-0 w-full h-32 grid grid-cols-1 justify-between">
                            <p class="text-oren font-bold text-2xl">{{ $slider['name'] }}</p>
                            @if ($lang == 'id')
                                <p class="text-white font-bold">{{ $slider['detail_id'] }}</p>
                            @else
                                <p class="text-white font-bold">{{ $slider['detail_en'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @empty

            @endforelse
        </div>
        <div class="my-auto w-[10%]">
            <button class="right-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 md:w-20 md:h-20 text-oren">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>
</div>

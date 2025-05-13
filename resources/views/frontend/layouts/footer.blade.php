

<footer class="bg-dark-blue text-white mt-5">
    <div class="w-full p-4 pt-6 pb-1 lg:py-8">
        <div class="container md:flex md:flex-row mx-auto ">
            <div class="grid gap-12 md:grid-cols-3 sm:gap-6 sm:grid-cols-1 :grid-cols-1 md:flex-auto md:p-2">
                <div>
                        <a href="{{ url('/') }}" class="flex items-center">
                            <img src="{{ asset('assets/images/LOGO_SAPEN.png') }}" class="h-20 me-3" alt="{{ 'Logo' . env('APP_NAME') }}" />
                            <span class="self-center text-2xl font-semibold">{{ env('APP_NAME') }}</span>
                        </a>
                        <p class="text-xl mt-4">
                            {{ __('message.sekolahku_inspirasiku') }}
                        </p>
                        <p class="text-lg mt-4">
                            {{ __('message.alamat_lengkap') }}
                        </p>
                </div>
                <div>
                    <h2 class="mb-6 text-3xl font-semibold text-center text-kuning-muda">{{ __('message.halaman_website') }}</h2>
                        <ul class="space-y-4 text-left text-bold">
                            <li class="flex items-center space-x-3 rtl:space-x-reverse text-bold">
                                <svg class="w-6 h-6 text-kuning-muda" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                                </svg>
                                <a href="{{ route('profile') }}">
                                <p>{{ __('message.profil_sd_muhammadiyahsapen') }}</p>
                                </a>
                            </li>
                            <li class="flex items-center space-x-3 rtl:space-x-reverse text-bold">
                                <svg class="w-6 h-6 text-kuning-muda" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                                </svg>
                                <a href="{{ route('teacher-and-staff') }}">
                                <span>{{ __('message.profil_guru_dan_karyawan') }}</span>
                                </a>
                            </li>
                            <li class="flex items-center space-x-3 rtl:space-x-reverse text-bold">
                                <svg class="w-6 h-6 text-kuning-muda" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                                </svg>
                                <a href="{{ route('contacts') }}">
                                <p>{{ __('message.hubungi_kami') }}</p>
                                </a>
                            </li>
                            <li class="flex items-center space-x-3 rtl:space-x-reverse text-bold">
                                <svg class="w-6 h-6 text-kuning-muda" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                                </svg>
                                <a href="{{ route('facilities') }}">
                                <p>{{ __('message.fasilitas_sekolah') }}</p>
                                </a>
                            </li>
                            <li class="flex items-center space-x-3 rtl:space-x-reverse text-bold">
                                <svg class="w-6 h-6 text-kuning-muda" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                                </svg>
                                <a href="{{ route('front.news') }}">
                                <span>{{ __('message.berita_sekolah') }}</span>
                                </a>
                            </li>
                            <li class="flex items-center space-x-3 rtl:space-x-reverse text-bold">
                                <svg class="w-6 h-6 text-kuning-muda" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                                </svg>
                                <a href="{{ route('front.galery') }}">
                                <p>{{ __('message.galeri_kegiatan') }}</p>
                                </a>
                            </li>
                        </ul>
                </div>
                <div>
                        <h2 class="mb-6 text-3xl font-semibold text-center text-kuning-muda">{{ __('message.saluran_kami') }}</h2>
                        <div class="w-full bg-kuning-muda rounded-lg p-3 mx-auto">
                                <img class="mx-auto my-2 w-64" src="{{ asset('assets/images/equalizer.gif') }}">
                                <audio controls autoplay class="mx-auto w-full">
                                    <source src="https://stream-154.zeno.fm/xg7mcgf1bf9uv" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <h3 class="text-3xl text-center mt-2 text-black font-bold">Sapen Radio</h3>
                                <h3 class="text-xl text-center text-black">{{ __('message.edukasi_tiada_henti') }}</h3>
                        </div>
                        <div class="flex my-4 md:mt-2 justify-center mx-auto justify-items-center">
                            <a href="https://www.instagram.com/sdmuhsapen/" class="" target="_blank">
                                <div class="p-2 bg-kuning-muda hover:bg-oren rounded-full">
                                    <svg class="w-8 h-8 text-dark-blue dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="sr-only">Instagram</span>
                            </a>
                            <a href="https://youtube.com/@sdmuhammadiyahsapenyogyaka7302" target="_blank" class="text-gray-500 hover: dark:hover:text-white ms-5">
                                <div class="p-2 bg-kuning-muda hover:bg-oren rounded-full">
                                    <svg class="w-8 h-8 text-dark-blue dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="sr-only">Youtube</span>
                            </a>
                            <a href="https://www.facebook.com/sdmsapen/" class="text-gray-500 hover: dark:hover:text-white ms-5" target="_blank">
                                <div class="p-2 bg-kuning-muda hover:bg-oren rounded-full">
                                    <svg class="w-8 h-8 text-dark-blue dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="sr-only">Facebook</span>
                            </a>
                            {{--  <a href="https://moesaradio.radiostream321.com/" target="_blank" class="text-gray-500 hover: dark:hover:text-white ms-5">  --}}
                            <a href="#" target="_blank" class="text-gray-500 hover: dark:hover:text-white ms-5">
                                <div class="p-2 bg-kuning-muda hover:bg-oren rounded-full">
                                    <svg class="w-8 h-8 text-dark-blue dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M17.316 4.052a.99.99 0 0 0-.9.14c-.262.19-.416.495-.416.82v8.566a4.573 4.573 0 0 0-2-.464c-1.99 0-4 1.342-4 3.443 0 2.1 2.01 3.443 4 3.443 1.99 0 4-1.342 4-3.443V6.801c.538.5 1 1.219 1 2.262 0 .56.448 1.013 1 1.013s1-.453 1-1.013c0-1.905-.956-3.18-1.86-3.942a6.391 6.391 0 0 0-1.636-.998 4 4 0 0 0-.166-.063l-.013-.005-.005-.002h-.002l-.002-.001ZM4 5.012c-.552 0-1 .454-1 1.013 0 .56.448 1.013 1 1.013h9c.552 0 1-.453 1-1.013 0-.559-.448-1.012-1-1.012H4Zm0 4.051c-.552 0-1 .454-1 1.013 0 .56.448 1.013 1 1.013h9c.552 0 1-.454 1-1.013 0-.56-.448-1.013-1-1.013H4Zm0 4.05c-.552 0-1 .454-1 1.014 0 .559.448 1.012 1 1.012h4c.552 0 1-.453 1-1.012 0-.56-.448-1.013-1-1.013H4Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="sr-only">Radio</span>
                            </a>

                        </div>
                </div>

          </div>
        </div>

    </div>
    <div class="w-full px-4 py-2 bg-biru-tua">
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-black mx-auto">
                Copyrigth © {{ date('Y') }} <a href="{{ route('front.home') }}">{{env('APP_NAME') }}</a> | Build with &#9825; by <a href="https://www.jagoweb.com/" target="_blank">Jagoweb</a>
            </span>
        </div>
    </div>

</footer>

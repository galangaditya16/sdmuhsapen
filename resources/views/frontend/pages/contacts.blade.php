@extends('frontend.layouts.app')

@section('content')
    <x-profile-menu-header title="Kontak SD Muh Sapen" />
    <section class="container mx-auto grid grid-cols-1 gap-y-14 md:my-20 mb-14 px-7">
        <div class="md:flex md:gap-x-20 space-y-6 md:space-y-0">
            <div class="md:w-1/2 space-y-6">
                <p class="text-3xl font-bold text-biru-tua">Mari Saling Terhubung</p>
                <p class="text-black text-sm">Apakah Anda mencari cara untuk menghubungi kami? Anda dapat menghubungi kami
                    melalui telepon, email, atau dengan mengisi formulir kontak online kami.</p>
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <div class="w-5/6">
                        <p class="text-sm">WhatsApp Call Center</p>
                        <p class="font-bold text-xl">{{ $contact->whatsapp ?? '-' }}</p>
                    </div>
                </div>
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <div class="w-5/6">
                        <p class="text-sm">Email</p>
                        <p class="font-bold text-xl">{{ $contact->email ?? '-' }}</p>
                    </div>
                </div>
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <div class="w-5/6">
                        <p class="text-sm">Telepon</p>
                        <p class="font-bold text-xl">{{ $contact->tlp ?? '-' }}</p>
                    </div>
                </div>
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <div class="w-5/6">
                        <p class="text-sm">Jam Kerja</p>
                        <p class="font-bold text-xl">{{ $contact->working_days ?? '-' }}</p>
                        <p class="font-bold text-xl">{{ $contact->working_hours ?? '-' }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white py-6 lg:py-10 px-10 lg:px-16 md:w-1/2 rounded-3xl shadow-lg space-y-1.5">
                <p class="text-3xl text-biru-tua text-center">Kirimi Kami Pesan</p>
                <p class="text-black text-sm text-center">Kami sangat ingin mendengar pesan, saran, kritik, dan masukan dari
                    Anda.</p>
                <form action="{{ route('contact-us')}}" method="post" class="space-y-6">
                    @csrf
                    <div class="flex items-center border-b border-black py-1">
                        <input name="name"
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text" placeholder="Nama anda" aria-label="Nama anda"
                            required
                            >
                    </div>
                    <div class="flex gap-x-1.5">
                        <div class="flex items-center border-b border-black py-1 w-full">
                            <input name="phone"
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                type="text" placeholder="No. hp" aria-label="No. hp"
                                required
                                >
                        </div>
                        <div class="flex items-center border-b border-black py-1 w-full">
                            <input name="email"
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                type="text" placeholder="Email" aria-label="Email"
                                required
                                >
                        </div>
                    </div>
                    <div class="flex items-center border-b border-black py-1">
                        <select name="phone"
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text" placeholder="No. hp" aria-label="No. hp">
                            <option value="Bagian pendaftaran">Bagian pendaftaran</option>
                        </select>
                    </div>
                    <div class="flex items-center border-b border-black py-1">
                        <textarea
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text" placeholder="Pesan Anda" aria-label="Pesan Anda" required></textarea>
                    </div>
                    <div class="flex gap-x-2 mb-20">
                        <div class="flex items-center border-b border-black py-1 w-1/2">
                            <p>{{ $captcha ?? '-' }}</p>
                        </div>
                        <div class="flex items-center border-b border-black py-1 w-1/2">
                            <input name="email"
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                type="text" placeholder="Tulis captcha" aria-label="Tulis captcha">
                        </div>
                    </div>
                    <button
                        class="bg-biru-tua rounded-3xl w-full block text-white py-2 hover:bg-biru-tua-peteng">Submit</button>
                </form>
            </div>
        </div>

        <div>
            <p class="text-3xl font-bold text-biru-tua text-center relative">Sosial Media & Saluran Kami</p>
            <div class="block w-32 h-1 bg-biru-tua mx-auto mt-2"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-10">
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <div class="w-5/6 my-auto">
                      <a href="{{ $contact->instagram ?? '#' }}">
                        <p class="font-bold text-xl">IG: @sdmuhsapen</p>
                      </a>
                    </div>
                </div>

                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <div class="w-5/6 my-auto">
                        <p class="font-bold text-xl">YouTube: SAPEN TV</p>
                    </div>
                </div>

                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <div class="w-5/6 my-auto">
                        <p class="font-bold text-xl">FB: SD Muh Sapen</p>
                    </div>
                </div>

                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <div class="w-5/6 my-auto">
                        <p class="font-bold text-xl">Sapen Radio</p>
                    </div>
                </div>
            </div>
        </div>
        @if ($contact->google_loc)
            <div>
                <p class="text-3xl font-bold text-biru-tua text-center relative">Lokasi Google Maps</p>
                <div class="block w-32 h-1 bg-biru-tua mx-auto mt-2"></div>
                <div class="w-full mt-10 rounded-xl overflow-hidden">
                  {!! $contact->google_loc !!}
                </div>
            </div>
        @endif
    </section>
    @include('frontend.layouts.footer')
@endsection

@section('extend-script')
    <script></script>
@endsection

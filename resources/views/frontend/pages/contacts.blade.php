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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
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
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                          </svg>                          
                    </div>
                    <div class="w-5/6">
                        <p class="text-sm">Email</p>
                        <p class="font-bold text-xl">{{ $contact->mail ?? '-' }}</p>
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
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
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
                            {{--  <p id="captcha" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $captcha ?? '-' }}</p>  --}}
                            {{--  <p id="captcha" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"></p>  --}}
                        </div>
                        <div class="flex items-center border-b border-black py-1 w-1/2">
                            <input name="captcha"
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                type="text" placeholder="Tulis captcha" aria-label="Tulis captcha">
                        </div>
                    </div>
                    <button
                      id="submit-btn"
                      disabled
                      class="bg-biru-tua rounded-3xl w-full block text-white py-2 hover:bg-biru-tua-peteng disabled:bg-gray-400">Submit</button>
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
    <script>
      const captcha = document.getElementById('captcha').innerText;
      const submitBtn = document.getElementById('submit-btn');

      document.querySelector('input[name="captcha"]').addEventListener('input', function() {
        if (this.value === captcha) {
          submitBtn.disabled = false;
        } else {
          submitBtn.disabled = true;
        }
      });
    </script>
@endsection

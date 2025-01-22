@extends('frontend.layouts.app')

@section('content')
    <x-profile-menu-header title="Kontak SD Muh Sapen" />
    <section class="container mx-auto grid grid-cols-1 gap-y-14 md:my-20 mb-14 px-7">
        <div class="md:flex md:gap-x-20 space-y-6 md:space-y-0">
            <div class="md:w-1/2 space-y-6">
                <p class="text-3xl font-bold text-biru-tua">Mari Saling Terhubung</p>
                <p class="text-black text-sm">Apakah Anda mencari cara untuk menghubungi kami? Anda dapat menghubungi kami
                    melalui telepon, email, atau dengan mengisi formulir kontak online kami.</p>
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white hover:shadow-xl hover:-translate-y-1 hover:scale-101 duration-150">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                        </svg>
                    </div>
                    <div class="w-5/6">
                        <p class="text-sm">WhatsApp Call Center</p>
                        <a href="https://api.whatsapp.com/send/?phone=628112642733&text=Halo%2C+saya+ingin+bertanya+mengenai+info+PPDB+di+SD+Muhammadiyah+Sapen&type=phone_number&app_absent=0" target="_blank">
                            <p class="font-bold text-xl">{{ $contact->whatsapp ?? '-' }}</p>
                        </a>
                    </div>
                </div>
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white hover:shadow-xl hover:-translate-y-1 hover:scale-101 duration-150">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                          </svg>                          
                    </div>
                    <div class="w-5/6">
                        <p class="text-sm">Email</p>
                        <a href="mailto:info@sdmuhsapen-yog.sch.id" target="_blank">
                            <p class="font-bold text-xl">{{ $contact->mail ?? '-' }}</p>
                        </a>
                    </div>
                </div>
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white hover:shadow-xl hover:-translate-y-1 hover:scale-101 duration-150">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <div class="w-5/6">
                        <p class="text-sm">Telepon</p>
                        <a href="tel:62274556674" target="_blank">
                            <p class="font-bold text-xl">{{ $contact->tlp ?? '-' }}</p>
                        </a>
                    </div>
                </div>
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white hover:shadow-xl hover:-translate-y-1 hover:scale-101 duration-150">
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
                            <option value="Bagian pendaftaran">Admin</option>
                        </select>
                    </div>
                    <div class="flex items-center border-b border-black py-1">
                        <textarea
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text" placeholder="Pesan Anda" aria-label="Pesan Anda" required></textarea>
                    </div>
                    <div class="flex gap-x-2 mb-20">
                        <div class="flex items-center border-b border-black py-1 w-1/2">
                             <p id="captcha" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $captcha ?? '-' }}</p>
                             <p id="captcha" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"></p>
                        </div>
                        <div class="flex items-center border-b border-black py-1 w-1/2">
                            <input name="captcha"
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                type="text" placeholder="Tulis captcha" aria-label="Tulis captcha">
                        </div>
                    </div>
                    <button
                      id="submit-btn"
                      class="bg-biru-tua rounded-3xl w-full block text-white py-2 hover:bg-biru-tua-peteng disabled:bg-gray-400">Submit</button>
                </form>
            </div>
        </div>

        <div>
            <p class="text-3xl font-bold text-biru-tua text-center relative">Sosial Media & Saluran Kami</p>
            <div class="block w-32 h-1 bg-biru-tua mx-auto mt-2"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-10">
                <a href="https://www.instagram.com/{{ $contact->instagram ?? '#' }}/" target="_blank">
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </div>
                    <div class="w-5/6 my-auto">
                        <p class="font-bold text-xl">IG: @sdmuhsapen</p>
                    </div>
                </div>
                </a>

                <a href="https://www.youtube.com/@sdmuhammadiyahsapenyogyaka7302" target="_blank">
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 576 512" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                        </svg>
                    </div>
                    <div class="w-5/6 my-auto">
                        <p class="font-bold text-xl">YouTube: SAPEN TV</p>
                    </div>
                </div>
                </a>

                <a href="https://www.facebook.com/sdmsapen/" target="_blank">
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                        </svg>
                    </div>
                    <div class="w-5/6 my-auto">
                        <p class="font-bold text-xl">FB: SD Muh Sapen</p>
                    </div>
                </div>
                </a>

                <a href="https://moesaradio.radiostream321.com/" target="_blank">
                <div class="flex border rounded-2xl py-3 px-2.5 border-black bg-white hover:bg-biru-tua hover:text-white">
                    <div class="w-1/6 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 7.5 16.5-4.125M12 6.75c-2.708 0-5.363.224-7.948.655C2.999 7.58 2.25 8.507 2.25 9.574v9.176A2.25 2.25 0 0 0 4.5 21h15a2.25 2.25 0 0 0 2.25-2.25V9.574c0-1.067-.75-1.994-1.802-2.169A48.329 48.329 0 0 0 12 6.75Zm-1.683 6.443-.005.005-.006-.005.006-.005.005.005Zm-.005 2.127-.005-.006.005-.005.005.005-.005.005Zm-2.116-.006-.005.006-.006-.006.005-.005.006.005Zm-.005-2.116-.006-.005.006-.005.005.005-.005.005ZM9.255 10.5v.008h-.008V10.5h.008Zm3.249 1.88-.007.004-.003-.007.006-.003.004.006Zm-1.38 5.126-.003-.006.006-.004.004.007-.006.003Zm.007-6.501-.003.006-.007-.003.004-.007.006.004Zm1.37 5.129-.007-.004.004-.006.006.003-.004.007Zm.504-1.877h-.008v-.007h.008v.007ZM9.255 18v.008h-.008V18h.008Zm-3.246-1.87-.007.004L6 16.127l.006-.003.004.006Zm1.366-5.119-.004-.006.006-.004.004.007-.006.003ZM7.38 17.5l-.003.006-.007-.003.004-.007.006.004Zm-1.376-5.116L6 12.38l.003-.007.007.004-.004.007Zm-.5 1.873h-.008v-.007h.008v.007ZM17.25 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Zm0 4.5a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                          </svg>
                    </div>
                    <div class="w-5/6 my-auto">
                        <p class="font-bold text-xl">Sapen Radio</p>
                    </div>
                </div>
                </a>
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

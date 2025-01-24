<nav class="bg-dark-blue dark:bg-gray-900 fixed w-full z-50 top-0">
    <div class="container flex flex-wrap items-center justify-between mx-auto p-1">
        <a href="{{ url('/') }}" class="flex items-center rtl:space-x-reverse">
            <img src="{{ asset('assets/images/LOGO_SAPEN.png') }}" class="h-16" alt="Logo SD Muhammadiyah Sapen">
        </a>
        <div class="flex md:order-2 rtl:space-x-reverse">

            <ul class="flex flex-col mt-1 mx-1 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-1">
                <li>
                    <button id="buttonDropdownBahasa" data-dropdown-toggle="dropdownBahasa" class="flex items-center justify-between w-full py-1 px-1 font-bold text-white bg-dark-blue">
                        ID
                        <svg class="w-2.5 h-2.5 ms-1 lg:ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownBahasa" class="z-10 hidden font-bold bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                ID
                            </a>
                        </div>
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                EN
                            </a>
                        </div>
                    </div>
                </li>
            </ul>


            <div class="relative hidden md:flex border-r border-r-white mr-3">
                <button type="button" id="search-navbar" class="p-2.5 ms-2 text-sm font-medium md:mx-2 text-white bg-oren rounded-full hover:bg-orange-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div id="search-popup" class="absolute top-12 right-0 hidden bg-white rounded-lg shadow-lg p-4 w-96">
                    <form class="relative">
                        <input type="text" placeholder="Search..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class="absolute right-2 top-2 text-gray-500 hover:text-blue-500">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <script>
                document.getElementById('search-navbar').addEventListener('click', function() {
                    const popup = document.getElementById('search-popup');
                    popup.classList.toggle('hidden');
                });
            </script>

            <a target="_blank" href="https://wa.me/628112642733?text=Halo%2C%20saya%20ingin%20bertanya%20mengenai%20info%20PPDB%20di%20SD%20Muhammadiyah%20Sapen">
                <button type="button" class="text-white ml-3 font-bold bg-oren hover:bg-orange-800 hover:cursor-pointer rounded-full text-sm px-8 lg:px-10 py-2 text-center md:mx-1">
                    PPDB
                </button>
            </a>

            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>


        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <div class="relative mt-3 md:hidden">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
            </div>
            <ul class="flex flex-col p-1 lg:p-3 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-2 lg:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-1 px-1 font-bold text-white bg-dark-blue">
                        Tentang Kami
                        <svg class="w-2.5 h-2.5 ms-1 lg:ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-bold bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('profile') }}" class="block px-4 py-2 font-bold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Profil Sekolah
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('principals-speech') }}" class="block px-4 py-2 font-bold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Sambutan Kepala Sekolah
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('organization') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Struktur Organisasi
                                </a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="{{ route('teacher-and-staff')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                Profil Guru dan Karyawan
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="{{ route('facilities') }}" class="block py-1 px-1 text-white font-bold bg-dark-blue">
                        Fasilitas
                    </a>
                </li>
                <li>
                    <a href="{{ route('programs') }}" class="block py-1 px-1 text-white font-bold bg-dark-blue">
                        Program
                    </a>
                </li>
                <li>
                    <a href="{{ route('front.news') }}" class="block py-1 px-1 text-white font-bold bg-dark-blue">
                        Berita
                    </a>
                </li>
                <li>
                    <a href="{{ route('contacts') }}" class="block py-1 px-1 text-white font-bold bg-dark-blue">
                        Hubungi Kami
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="hidden md:hidden w-full p-5" id="search-navbar-form">
        <div class="container mx-auto">
            <form class="relative mx-auto  w-9/12">
                <input type="text" placeholder="Search" class="border border-gray-300 rounded-full py-2 px-4 pl-10 w-full focus:outline-none focus:ring-2 focus:ring-red-600">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="3" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </span>
            </form>
        </div>
    </div>
</nav>

@section('script')
<script>

    var navSearch = $('#search-navbar')
    var navSearchForm = $('#search-navbar-form')
    navSearch.on("click", function(){
        if(navSearchForm.css('display') == 'none') {
            navSearchForm.css('display', 'flex')
        } else {
            navSearchForm.css('display', 'none')
        }
    })

</script>
@endsection

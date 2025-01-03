<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/backend') }}/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/demo.min.css?1692870487" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
	@yield('css')
</head>

<body>
    <script src="{{ asset('assets/backend') }}/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('backend.layout.sidebar')
        <div class="page-wrapper">
            <!-- Page header -->
            @include('backend.layout.header')
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('backend.layout.footer')
        </div>
    </div>
    <!-- Libs JS -->
    {{-- <script src="{{ asset('assets/backend') }}/libs/apexcharts/dist/apexcharts.min.js?1692870487" defer></script>
    <script src="{{ asset('assets/backend') }}/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487" defer></script>
    <script src="{{ asset('assets/backend') }}/libs/jsvectormap/dist/maps/world.js?1692870487" defer></script>
    <script src="{{ asset('assets/backend') }}/libs/jsvectormap/dist/maps/world-merc.js?1692870487" defer></script> --}}
    <!-- Tabler Core -->
    <script src="{{ asset('assets/backend') }}/js/tabler.min.js?1692870487" defer></script>
    <script src="{{ asset('assets/backend') }}/js/demo.min.js?1692870487" defer></script>
    @yield('js')
</body>

</html>

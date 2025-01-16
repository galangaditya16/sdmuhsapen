<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('assets/images/LOGO_SAPEN.png') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{--  <!-- dev -->  --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    {{--  <!-- production -->  --}}
    {{--  @foreach (\App\Helpers\ViteHelper::viteAssets() as $asset)
        @vite($asset)
    @endforeach  --}}
    @yield('extend-header')
    @stack('styles')

</head>

<body class="font-abeezee w-screen" style="background: url('{{ asset('assets/images/body-bg.png') }}')">
    @include('frontend.layouts.navbar')

    <div class="dark:bg-gray-900 min-h-96">
        @yield('content')
    </div>

    @yield('extend-script')
    @stack('scripts')
</body>

</html>

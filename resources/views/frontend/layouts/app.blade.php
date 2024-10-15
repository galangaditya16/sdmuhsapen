<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>    
    <link rel="icon" href="{{ asset('assets/images/LOGO_SAPEN.png') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('extend-header')
    
</head>

<body class="font-abeezee">
    @include('frontend.layouts.navbar') 

    <div class="container mx-auto px-4 bg-white dark:bg-gray-900 min-h-96">
        @yield('content')
    </div>

    @include('frontend.layouts.footer')
    @yield('extend-script')
</body>

</html>

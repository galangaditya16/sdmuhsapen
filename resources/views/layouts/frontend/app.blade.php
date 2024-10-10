<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/LOGO_SAPEN.png') }}">    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body class="font-abeezee">
    @include('layouts.frontend.navbar') 

    <div class="container mx-auto px-4 bg-white dark:bg-gray-900">
        @yield('content')
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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

    <style>
      .scrollable-container {
        overflow-y: auto;

        -ms-overflow-style: none;
        scrollbar-width: none;
      }

      .scrollable-container::-webkit-scrollbar {
        display: none;
      }

      .scrollable-container-with-custom-scrollbar {
        overflow-y: auto;

        &::-webkit-scrollbar {
          width: 8px;
          background: transparent;
        }

        &::-webkit-scrollbar-thumb {
          background-color: rgba(0, 0, 0, 0.2);
          border-radius: 4px;
        }

        &::-webkit-scrollbar-thumb:hover {
          background-color: rgba(0, 0, 0, 0.3);
        }

        scrollbar-width: thin;
        scrollbar-color: rgba(0, 0, 0, 0.2) transparent;
      }
    </style>

</head>

<body class="font-abeezee w-screen overflow-x-hidden" style="background: url('{{ asset('assets/images/body-bg.png') }}')">
    @include('frontend.layouts.navbar')

    <div class="dark:bg-gray-900 min-h-96">
        @yield('content')
    </div>

    @yield('extend-script')
    @stack('scripts')
</body>

</html>

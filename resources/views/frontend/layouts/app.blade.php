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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const carousels = document.querySelectorAll('.carousel');
      const leftButtons = document.querySelectorAll('.left-button');
      const rightButtons = document.querySelectorAll('.right-button');

      function getScrollAmount(carousel) {
        const width = window.innerWidth;
        if (width >= 1440) {
          return carousel.offsetWidth / 4;
        } else if (width >= 1024) {
          return carousel.offsetWidth / 3;
        } else if (width >= 768) {
          return carousel.offsetWidth / 2;
        } else {
          return carousel.offsetWidth;
        }
      }

      leftButtons.forEach((leftButton, index) => {
        leftButton.addEventListener('click', function() {
          console.log(leftButton);
          carousels[index].scrollBy({
            left: -getScrollAmount(carousels[index]),
            behavior: 'smooth'
          });
        });
      });

      rightButtons.forEach((rightButton, index) => {
        rightButton.addEventListener('click', function() {
          carousels[index].scrollBy({
            left: getScrollAmount(carousels[index]),
            behavior: 'smooth'
          });
        });
      });

      window.addEventListener('resize', function() {
        // Update scroll amount on window resize
        carousels.forEach(carousel => getScrollAmount(carousel));
      });
    });

    function animateElements() {
      var elements = document.querySelectorAll('[data-text]');

      elements.forEach(function(element) {
        if (!element.classList.contains('counted')) {
          const text = parseInt(element.getAttribute('data-text'), 10);
          let count = 0;
          const increment = Math.ceil(text / 100);
          const interval = setInterval(() => {
            if (count < text) {
              count += increment;
              if (count > text) count = text;
              element.textContent = count;
            } else {
              clearInterval(interval);
              element.classList.add('counted');
            }
          }, 10);
        }
      });
    }

    function isElementInViewport(el) {
      const rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    function checkElementsInView() {
      var elements = document.querySelectorAll('[data-text]');
      elements.forEach(function(element) {
        if (isElementInViewport(element) && !element.classList.contains('counted')) {
          animateElements();
        }
      });
    }

    document.addEventListener('DOMContentLoaded', function() {
      checkElementsInView();
      window.addEventListener('scroll', checkElementsInView);
    });
  </script>
</body>

</html>

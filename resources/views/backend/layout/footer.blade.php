<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
      <div class="row text-center align-items-center flex-row-reverse">
        <div class="col-lg-auto ms-lg-auto">
          <ul class="list-inline list-inline-dots mb-0">
            <li class="list-inline-item"><p>Useful Link ->  <a href="{{ route('profile') }}" class="link-secondary">Profile</a></p></li>
            <li class="list-inline-item"><a href="{{ route('front.news') }}" class="link-secondary" rel="noopener">Berita</a></li>
            <li class="list-inline-item"><a href="mailto:jagowebhosting@gmail.com" target="_blank" class="link-secondary" rel="noopener">✉️ Maintenance</a></li>
          </ul>
        </div>
        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
          <ul class="list-inline list-inline-dots mb-0">
            <li class="list-inline-item">
            Copyrigth © {{ date('Y') }} <a href="{{ route('front.home') }}">{{env('APP_NAME') }}</a>
            </li>
            <li class="list-inline-item">
            Build with &#9825; by <a href="https://www.jagoweb.com/" target="_blank">Jagoweb</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
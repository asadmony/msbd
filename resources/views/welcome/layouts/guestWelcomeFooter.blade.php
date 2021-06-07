
<div style="height: 60px"></div>
<!-- Offices -->
<div class="office my-5">
    <div class="container-fluid office_foregr">
      <div class="container" style="line-height: 1">
        <img src="{{ asset('img/Group32.png') }}" alt="" />
        <p class="fw-lighter text-white">SCAN TO VIEW</p>
        <h1 class="text-white">{{ __('OUR OFFICES') }}</h1>
        <div class="row office_row">
          <div class="col-sm-6 col-6 col-md-2">
            <div class="as-footer-box mt-4 text-white">
              <h3 class="mt-3 text-white text-center">{{ __('ASAD GATE') }}</h3>
              <ul style="margin-right: 2rem">
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01720504504') }}</p></li>
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01633036062') }}</p></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-6 col-md-2">
            <div class="as-footer-box mt-4">
              <h3 class="mt-3 text-white text-center">{{ __('GULSHAN') }}</h3>
              <ul style="margin-right: 2rem">
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01777118606') }}</p></li>
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01907550361') }}</p></li>
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01705761333') }}</p></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-6 col-md-2">
            <div class="as-footer-box mt-lg-4">
              <h3 class="mt-lg-3 text-white text-center">{{ __('UTTARA') }}</h3>
              <ul style="margin-right: 1.5rem">
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01776687989') }}</p></li>
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01791266153') }}</p></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-6 col-md-2">
            <div class="as-footer-box mt-4">
              <h3 class="mt-3 text-white text-center">{{ __('KAKRAIL') }}</h3>
              <ul style="margin-right: 2rem">
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01780414897') }}</p></li>
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01319378112') }}</p></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-6 col-md-2">
            <div class="as-footer-box mt-lg-4">
              <h3 class="mt-lg-3 text-white text-center">{{ __('CHATTOGRAM') }}</h3>
              <ul>
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01617014140') }}</p></li>
                <li><p class="text-center text-white" style="line-height: 1;">{{ __('01617013455') }}</p></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- !Offices -->

<footer>
    <div class="container">
      <img src="{{ asset('img/logo.png') }}" class="img-fluid d-flex mx-auto" alt="" />
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
          <button
            class="navbar-toggler border-0 mx-auto"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href=""> HOME </a>
              </li>
              @if(isset($welcomeFooterMenu))
            @foreach ($welcomeFooterMenu->pages as $wfm)

                <li class="nav-item"> <a class="nav-link"
                    href="{{ route('page', [$wfm->id, $wfm->route_name]) }}"> {{ Str::upper($wfm->page_title) }}</a>
                </li>
            @endforeach
            @endif
            <li class="nav-item">
              <a class="nav-link" href="{{ route('blog') }}">BLOG</a>
            </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="">MANAGEMENT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">PACKAGES & PAYMENTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">WHO WE ARE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">CAREER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">TERMS & CONSITIONS</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
      <div>
        <div class="d-flex my-4">
          <p class="mx-auto">© Copyright {{date('Y')}} | Marriage Solution BD |  Site by <a class="w3-text-grey"
            target="_blank" href="{{url('https://a2sys.co')}}" title="a2sys">#a2sys</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- !Footer -->
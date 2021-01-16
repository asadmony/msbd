<header id="header" class="header-transparent header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                {{-- <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="img/logo.png"> --}}

                                {{-- <img class="img-responsive rounded" src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}"
                                alt="{{ env('APP_NAME_BIG') }}" style="width: 100px; margin-top: -14px;"> --}}

                                <img alt="Porto" width="140" height="70" data-sticky-width="92" data-sticky-height="45"
                                    src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}">

                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div
                            class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a href="tel:{{ $websiteParameter->contact_mobile }}"
                                                class="dropdown-item"><i class="fa fa-phone fa-rotate-90 mr-2"></i>
                                                {{ $websiteParameter->contact_mobile }}</a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="{{ url('/') }}">
                                                Home
                                            </a>
                                        </li>
                                        @foreach ($welcomeHeaderMenu->pages as $whm)
                                        <li class="dropdown">
                                            <a class="dropdown-item"
                                                href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                {{ $whm->page_title }}
                                            </a>
                                        </li>
                                        @endforeach
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="{{ route('login') }}">
                                                Login
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="{{ route('signup') }}">
                                                Register
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                data-target=".header-nav-main nav" style="background-color: #9C27B0">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

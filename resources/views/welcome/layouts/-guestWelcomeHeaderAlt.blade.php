<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 w3-black">
        <div class="header-container container-fluid px-lg-4">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img alt="Porto" width="140" height="70" data-sticky-width="92" data-sticky-height="45" src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-item w3-text-white"><i class="fa fa-phone fa-rotate-90 mr-2"></i> {{ $websiteParameter->contact_mobile }}</a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle w3-text-white" href="{{ url('/') }}">
                                                Home
                                            </a>
                                        </li>
                                        @foreach ($welcomeHeaderMenu->pages as $whm)
                                        <li class="dropdown">
                                            <a class="dropdown-item w3-text-white" href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                {{ $whm->page_title }}
                                            </a>
                                        </li>
                                        @endforeach
                                        <li class="dropdown">
                                            <a class="dropdown-item w3-text-white" href="{{ route('login') }}">
                                                Login
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item w3-text-white" href="{{ route('signup') }}">
                                                Register
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body w3-black w3-text-white">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img alt="{{ env('APP_NAME') }}" width="140" height="70" data-sticky-width="92" data-sticky-height="45" src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="{{ url('/') }}">
                                                Home
                                            </a>
                                        </li>
                                        @foreach ($welcomeHeaderMenu->pages as $whm)
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="{{ route('page', $whm->id, $whm->route_name) }}">
                                                {{ $whm->page_title }}
                                            </a>
                                        </li>
                                        @endforeach
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Login
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('login') }}">Signin</a></li>
                                                <li><a class="dropdown-item" href="{{ route('signup') }}">Signup</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}
<div id="intro" class="">
    <header id="header" class="header-narrow header-below-slider"
        data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header', 'stickySetTop': '0', 'stickyChangeLogo': false}">
        <div class="header-body header-body-bottom-border-fixed" style="border-top: none !important">
            <div class="header-container header-container-height-sm container" style="height: 70px !important">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="/">
                                    <img alt="Marriage Solution BD" width="100" height="48" data-sticky-width="82"
                                        data-sticky-height="40" src="{{ asset('img/logo.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-no-space-dropdown header-nav-stretch">
                                <div
                                    class="header-nav-main header-nav-main-rounded header-nav-main-dropdown-no-borders header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a href="tel:{{ $websiteParameter->contact_mobile }}"
                                                    class="dropdown-item"><i class="fa fa-phone fa-rotate-90 mr-2"></i>
                                                    {{ $websiteParameter->contact_mobile }}</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="/">
                                                    Home
                                                </a>
                                            </li>
                                            @if(isset($welcomeHeaderMenu))
                                            @foreach ($welcomeHeaderMenu->pages as $whm)
                                            <li class="dropdown">
                                                <a class="dropdown-item"
                                                    href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                    {{ $whm->page_title }}
                                                </a>
                                            </li>
                                            @endforeach
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="{{ route('welcome.ourBranches') }}">
                                                    Branches
                                                </a>
                                            </li>
                                            @endif
                                            @auth
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="{{ url('/') }}">
                                                    {{ auth()->user()->name }}
                                                </a>
                                            </li>
                                            @else
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
                                            @endauth
                                        </ul>
                                    </nav>
                                </div>
                                <ul class="header-social-icons social-icons d-none d-sm-block">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                            title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                    data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
@if (isset($page))
@include('welcome.layouts.guestWelcomePageHeader')
@endif

@push('css')
    <style>
        nav > .nav-pills > li > a  {
            border-radius: 0px !important;
        }
        /* #mainNav:hover nav > .nav-pills > li > a  {
            transform: skew(-20deg);
            border-radius: 0px !important;
        } */
        #mainNav > li:hover{
            transform: skew(-20deg) !important;
        }
        /* #mainNav > li :hover{
            transform: skew(-20deg);
            border-radius: 0px !important;
        }
         #mainNav > li > a :hover{
            transform: skew(-20deg) !important;
            border-radius: 0px !important;
        }
        #mainNav > li > ul :hover{
            transform: skew(0deg) !important;
            border-radius: 0px !important;
        } */
    </style>
@endpush
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
                                            {{-- <li class="dropdown">
                                                <a href="tel:{{ $websiteParameter->contact_mobile }}"
                                            class="dropdown-item"><i class="fa fa-phone fa-rotate-90 mr-2"></i>
                                            {{ $websiteParameter->contact_mobile }}</a>
                                            </li> --}}
                                            <li class="">
                                                <a class="" href="/">
                                                    Home
                                                </a>
                                            </li>
                                            @if(isset($welcomeHeaderMenu))
                                            {{-- @if ($welcomeHeaderMenu->subMenus->count() > 0)
                                            @foreach ($welcomeHeaderMenu->subMenus as $subMenus)
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                    {{ $subMenus->menu_title }} <i class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu"  style="transform: skew(20deg) !important; margin-left: 10px !important;">

                                                @foreach ($subMenus->pages as $whm)
                                                <li> <a class="dropdown-item"
                                                        href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                        {{ $whm->page_title }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            </li>
                                            @endforeach
                                            @endif --}}
                                            @foreach ($welcomeHeaderMenu->pages as $whm)
                                            <li class="dropdown w3-hover-purple">
                                                <a class="dropdown-item w3-hover-purple"
                                                    href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                    {{ $whm->page_title }}
                                                </a>
                                            </li>
                                            @endforeach
                                            @endif
                                            @if (isset($management))
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                    {{ $management->menu_title }} &nbsp <i
                                                        class="fa fa-caret-down d-none d-md-block">
                                                    </i></a>
                                                <ul class="dropdown-menu"  style="transform: skew(20deg) !important; margin-left: 10px !important;">

                                                    @foreach ($management->pages as $whm)
                                                    <li> <a class="dropdown-item w3-hover-purple"
                                                            href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                            {{ $whm->page_title }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                    {{-- <li> <a class="dropdown-item w3-hover-purple"
                                                        href="{{ route('welcome.teamMembers') }}">
                                                        Management Team
                                                    </a>
                                                    </li> --}}
                                                </ul>
                                            </li>
                                            @endif
                                            @if (isset($membership))
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                    {{ $membership->menu_title }} &nbsp <i
                                                        class="fa fa-caret-down d-none d-md-block"></i></a>
                                                <ul class="dropdown-menu" style="transform: skew(20deg) !important; margin-left: 10px !important;">

                                                    @foreach ($membership->pages as $whm)
                                                    <li> <a class="dropdown-item w3-hover-purple"
                                                            href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                            {{ $whm->page_title }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endif
                                            @if (isset($ownersMsg))
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                    {{ $ownersMsg->menu_title }} &nbsp <i
                                                        class="fa fa-caret-down d-none d-md-block"></i></a>
                                                <ul class="dropdown-menu" style="transform: skew(20deg) !important; margin-left: 10px !important;">

                                                    @foreach ($ownersMsg->pages as $whm)
                                                    <li> <a class="dropdown-item w3-hover-purple"
                                                            href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                            {{ $whm->page_title }}
                                                        </a>
                                                    </li>
                                                    @if ($loop->iteration == 1)
                                                    <li> 
                                                        <a class="dropdown-item w3-hover-purple"
                                                        href="{{ route('welcome.successStories') }}">
                                                        Success Stories
                                                        </a>
                                                    </li>
                                                    <li> 
                                                        <a class="dropdown-item w3-hover-purple"
                                                        href="{{ route('welcome.teamMembers') }}">
                                                        Employee Stories
                                                        </a>
                                                    </li>
                                                    {{-- <li> 
                                                        <a class="dropdown-item w3-hover-purple"
                                                        href="{{ route('welcome.photoGallery') }}">
                                                        Success Stories (Photos)
                                                        </a>
                                                    </li> --}}
                                                    {{-- <li> 
                                                        <a class="dropdown-item w3-hover-purple"
                                                        href="{{ route('welcome.videoGallery') }}">
                                                        Success Stories (Videos)
                                                        </a>
                                                    </li> --}}
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endif
                                            {{-- <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                ab &nbsp <i
                                                    class="fa fa-caret-down d-none d-md-block"></i></a>
                                            <ul class="dropdown-menu">
                                                
                                            </ul>
                                            </li> --}}
                                            @if (isset($contactUs))
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                    {{ $contactUs->menu_title }} &nbsp <i
                                                        class="fa fa-caret-down d-none d-md-block"></i></a>
                                                <ul class="dropdown-menu"  style="transform: skew(20deg) !important; margin-left: 10px !important;">
                                                    @foreach ($contactUs->pages as $whm)
                                                    
                                                    <li> <a class="dropdown-item w3-hover-purple"
                                                        href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                        {{ $whm->page_title }}
                                                    </a>
                                                    </li>
                                                    @if ($loop->first)
                                                    <li> <a class="dropdown-item w3-hover-purple" href="{{route('welcome.ourBranches')}}">Branch office Address</a></li> 
                                                    @endif
                                                    
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endif
                                            {{-- <li class="dropdown">
                                                <a class="dropdown-item" href="{{ route('welcome.ourBranches') }}">
                                            Branches
                                            </a>
                                            </li> --}}
                                            @auth
                                            <li class="dropdown">
                                                <a class="dropdown-item w3-hover-purple" href="{{ url('/') }}">
                                                    {{ auth()->user()->name }}
                                                </a>
                                            </li>
                                            @else



                                            <li class="dropdown d-md-none">
                                                <a class="dropdown-item" href="{{ route('login') }}">
                                                    Login
                                                </a>
                                            </li>
                                            <li class="dropdown d-md-none">
                                                <a class="dropdown-item" href="{{ route('register') }}">
                                                    Register
                                                </a>
                                            </li>
                                            @endauth
                                            
                                            <li class="">
                                                <a class="" href="{{ route('blog') }}">
                                                    Blog
                                                </a>
                                            </li>
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

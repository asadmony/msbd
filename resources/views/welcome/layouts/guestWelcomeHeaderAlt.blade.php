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
            /* transform: skew(0deg) !important; */
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

        .floatbutton1{
            background-color: #641b69;
            color: white;
            position: fixed;
            top:80px; 
            right: 0px; 
            z-index:1;
        }
        .floatbutton2{
            position: fixed;
            top:130px; 
            right: 0px; 
            z-index:1;
        }
        .floatbutton3{
            position: fixed;
            background-color: #85248b;
            color: white;
            top:119px; 
            right: 0px; 
            z-index:1;
        }
        @media only screen and (max-width: 600px) {
            .floatbutton1{
            position: fixed;
            top:15px;
            right: 60px;
            z-index:1;
        }
        .floatbutton2{
            position: fixed;
            top:15px;
             right: 120px; 
             z-index:1;
        }
        .floatbutton3{
            position: fixed;
            top:17px; right: 180px; 
            z-index:1;
        }
        }
    </style>
@endpush
<div id="intro" class="">
    <header id="header" class="header-narrow header-below-slider"
        data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header', 'stickySetTop': '0', 'stickyChangeLogo': false}">
        <div class="header-body header-body-bottom-border-fixed" style="border-top: none !important">
            <div class="header-container header-container-height-sm container" style="height: 100px !important">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="/">
                                    <img alt="Marriage Solution BD" width="120" height="60" data-sticky-width="82"
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
                                    <nav class="collapse w3-text-medium">
                                        <ul class="nav nav-pills" id="mainNav">
                                            {{-- <li class="dropdown">
                                                <a href="tel:{{ $websiteParameter->contact_mobile }}"
                                            class="dropdown-item"><i class="fa fa-phone fa-rotate-90 mr-2"></i>
                                            {{ $websiteParameter->contact_mobile }}</a>
                                            </li> --}}
                                            <li class="">
                                                <a class="" href="/">
                                                    {{ __('Home') }}
                                                </a>
                                            </li>
                                            @if(isset($welcomeHeaderMenu))
                                            {{-- @if ($welcomeHeaderMenu->subMenus->count() > 0)
                                            @foreach ($welcomeHeaderMenu->subMenus as $subMenus)
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                    {{ $subMenus->menu_title }} <i class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu"  -style="transform: skew(20deg) !important; margin-left: 10px !important;">

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
                                                <a class="dropdown-item w3-hover-purple text-2"
                                                    href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                    {{ $whm->localeTitle }}
                                                </a>
                                            </li>
                                            @endforeach
                                            @endif
                                            @if (isset($management))
                                            <li class="dropdown"> <a class="dropdown-item text-2 dropdown-toggle" href="#">
                                                    {{ $management->localeTitle }} &nbsp <i
                                                        class="fa fa-caret-down d-none d-md-block">
                                                    </i></a>
                                                <ul class="dropdown-menu"  -style="transform: skew(20deg) !important; margin-left: 10px !important;">

                                                    @foreach ($management->pages as $whm)
                                                    <li> 
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                            {{ $whm->localeTitle }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                    <li> 
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                        href="{{ route('welcome.teamMembers') }}">
                                                        {{ __('Employee Stories') }}
                                                        </a>
                                                    </li>
                                                    
                                                    {{-- <li> 
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                        href="{{ route('welcome.successStories') }}">
                                                        {{ __('Success Stories') }}
                                                        </a>
                                                    </li> --}}
                                                    {{-- <li> <a class="dropdown-item w3-hover-purple"
                                                        href="{{ route('welcome.teamMembers') }}">
                                                        Management Team
                                                    </a>
                                                    </li> --}}
                                                </ul>
                                            </li>
                                            @endif
                                            @if (isset($membership))
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle text-2" href="#">
                                                    {{ $membership->localeTitle }} &nbsp <i
                                                        class="fa fa-caret-down d-none d-md-block"></i></a>
                                                <ul class="dropdown-menu" -style="transform: skew(20deg) !important; margin-left: 10px !important;">

                                                    <li> <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{ route('welcome.membershipPackages') }}">
                                                            {{ __('Membership Packages') }}
                                                        </a>
                                                    </li>
                                                    @foreach ($membership->pages as $whm)
                                                    <li> <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                            {{ $whm->localeTitle }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endif
                                            {{-- @if (isset($ownersMsg))
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                    {{ $ownersMsg->localeTitle }} &nbsp <i
                                                        class="fa fa-caret-down d-none d-md-block"></i></a>
                                                <ul class="dropdown-menu" -style="transform: skew(20deg) !important; margin-left: 10px !important;">

                                                    @foreach ($ownersMsg->pages as $whm)
                                                    <li> <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                            {{ $whm->localeTitle }}
                                                        </a>
                                                    </li>
                                                    @if ($loop->iteration == 1)
                                                    <li> 
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                        href="{{ route('welcome.successStories') }}">
                                                        {{ __('Success Stories') }}
                                                        </a>
                                                    </li>
                                                    <li> 
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                        href="{{ route('welcome.teamMembers') }}">
                                                        {{ __('Employee Stories') }}
                                                        </a>
                                                    </li>
                                                    <li> 
                                                        <a class="dropdown-item w3-hover-purple"
                                                        href="{{ route('welcome.photoGallery') }}">
                                                        Success Stories (Photos)
                                                        </a>
                                                    </li>
                                                    <li> 
                                                        <a class="dropdown-item w3-hover-purple"
                                                        href="{{ route('welcome.videoGallery') }}">
                                                        Success Stories (Videos)
                                                        </a>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endif --}}
                                            {{-- <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                ab &nbsp <i
                                                    class="fa fa-caret-down d-none d-md-block"></i></a>
                                            <ul class="dropdown-menu">
                                                
                                            </ul>
                                            </li> --}}
                                            @if (isset($contactUs))
                                            <li class="dropdown"> <a class="dropdown-item dropdown-toggle text-2" href="#">
                                                    {{ $contactUs->localeTitle }} &nbsp <i
                                                        class="fa fa-caret-down d-none d-md-block"></i></a>
                                                <ul class="dropdown-menu"  -style="transform: skew(20deg) !important; margin-left: 10px !important;">
                                                    <li> <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple" href="{{route('welcome.ourBranches')}}">{{ __('Our Offices') }}</a></li> 
                                                    @foreach ($contactUs->pages as $whm)
                                                    
                                                    <li> <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                        href="{{ route('page', [$whm->id, $whm->route_name]) }}">
                                                        {{ $whm->localeTitle }}
                                                    </a>
                                                    </li>
                                                    {{-- @if ($loop->first)
                                                    <li> <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple" href="{{route('welcome.ourBranches')}}">{{ __('Branch office') }}</a></li> 
                                                    @endif --}}
                                                    
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
                                                <a class="dropdown-item w3-hover-purple text-2" href="{{ url('/') }}">
                                                    {{ auth()->user()->name }}
                                                </a>
                                            </li>
                                            @else
                                            <li class="">
                                                <a class=" text-2" href="{{ route('blog') }}">
                                                    {{ __('Blog') }}
                                                </a>
                                            </li>
                                            {{-- <li class="dropdown">
                                                <a class="dropdown-item" href="{{ route('login') }}">
                                                    {{ __('login') }} / {{ __('register') }}
                                                </a>
                                            </li> --}}
                                            <li class="dropdown">
                                                <a href="{{ route('login') }}" class="btn login "><span><img src="{{ asset('img/Icon feather-heart.png') }}"/></span>  &nbsp; {{ __('login') }}</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="{{ route('register') }}" class="btn register text-white "><img src="{{ asset('img/Icon feather-heart2.png') }}"/> &nbsp; {{ __('register') }}</a>
                                            </li>
                                            {{-- <li class="dropdown">
                                                <a class="dropdown-item" href="{{ route('register') }}">
                                                    {{ __('register') }}
                                                </a>
                                            </li> --}}
                                            @endauth
                                            
                                            
                                            {{-- <li class="">
                                                <a class="" title="{{__('welcome.change_language')}}"  href="{{route('welcome.languageChange')}}" >
                                                    @if(app()->getLocale() == 'bn')
                                                    English
                                                    @else
                                                    বাংলা
                                                    @endif
                                                </a>
                                            </li> --}}
                                            {{-- <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                More &nbsp; <i class="fa fa-caret-down d-none d-md-block"></i></a>
                                            <ul class="dropdown-menu"  -style="transform: skew(20deg) !important; margin-left: 10px !important;">
                                                
                                                <li> 
                                                    <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                    href="{{ route('blog') }}">
                                                    {{ __('Blog') }}
                                                </a>
                                                </li>
                                                <li> 
                                                    <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple" href="{{route('welcome.languageChange')}}">
                                                        @if(app()->getLocale() == 'bn')
                                                        English
                                                        @else
                                                        বাংলা
                                                        @endif
                                                    </a>
                                                </li> 
                                             
                                            </ul>
                                        </li> --}}
                                        </ul>
                                    </nav>
                                </div>
                                {{-- <ul class="header-social-icons social-icons d-none d-sm-block">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                            title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul> --}}
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                    data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                        <div>
                            {{-- <a class="floatbutton2 border w3-deep-orange p-2 w3-medium w3-hover-purple btn"  href="{{ route('blog') }}" >
                                {{ __('Blog') }}
                            </a> --}}
                            <a class="floatbutton1 w3-green- border- p-2 m-auto w3-medium w3-hover-purple " title="{{__('Change Language')}}"  href="{{route('welcome.languageChange')}}" >
                                @if(app()->getLocale() == 'bn')
                                EN
                                @else
                                BN
                                @endif
                            </a>
                            <a class="floatbutton3 border- rounded- text-center m-auto py-1 social-icons-facebook w3-blue- w3-hover-white w3-hover-text-blue" style="width: 36px;" href="http://www.facebook.com/marriagebd2012" 
                                title="Facebook"><i class="fab fa-facebook-f"></i>
                            </a>
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

 
<nav class="navbar  fixed-top  navbar-expand-lg bg-primary" color-on-scroll="100" id="sectionsNav">
{{-- <nav class="navbar  
{{ Route::currentRouteName() == 'welcome.welcome' ? ' navbar-color-on-scroll navbar-transparent ' : '' }} 
fixed-top  navbar-expand-lg bg-primary" color-on-scroll="100" id="sectionsNav"> --}}
    
        <div class="container">
            <div class="navbar-translate">
                <a 
                title="" 
                rel="tooltip" 
                data-placement="bottom" 
                class="navbar-brand custom-shadow" 
                data-original-title="{{ env('APP_NAME_BIG') }}"
                href="{{url('/')}}">
                <img class="img-responsive rounded" src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}" alt="{{ env('APP_NAME_BIG') }}" style="width: 120px; margin-top: -16px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="tel:+8801782006615" >
                            <span class="w3-small">
                             <i class="material-icons">local_phone</i> {{ $websiteParameter->contact_mobile }}</span>
                        </a>
                    </li>
                    
                    @if(isset($welcomeHeaderMenu))
                    @foreach($welcomeHeaderMenu->pages as $whmPage)

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('page', $whmPage->route_name) }}" >
                            <i class="material-icons">contact_phone</i> {{ $whmPage->page_title }}
                        </a>
                    </li>

                    @endforeach
                    @endif

                     {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome.blog') }}" >
                             <img src="{{ asset('img/book.svg') }}" alt="{{ env('APP_NAME_BIG') }}" width="27"> Blog
                        </a>
                    </li> --}}

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('page', 'contact_us') }}" >
                            <i class="material-icons">contact_phone</i> Contact Us
                        </a>
                    </li> -->

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('page', 'membership_package') }}" >
                            <i class="material-icons">contact_phone</i> Membership
                        </a>
                    </li> --}}

                    {{-- @include('welcome.includes.others.pageLinkList') --}}

                    @if (Browser::isDesktop())

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome.successProfiles') }}" >
                            <i class="material-icons">contact_phone</i> Success Stories
                        </a>
                    </li> --}}
                    @endif


                    {{-- @include('welcome.includes.others.userSearchLinkList') --}}


                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#myLoginModal" >
                            <span class="w3-border w3-padding w3-round">
                                
                            <i class="material-icons">apps</i> LOGIN
                            </span>
                        </a>

                        
                    </li>


                    {{-- <li class="dropdown nav-item">

                        

                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">apps</i> LOGIN
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="{{route('login')}}" class="dropdown-item">
                                <i class="material-icons">layers</i> Login
                            </a>
                            <a href="{{route('signup')}}" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Signup
                            </a>
                        </div>

                     
                        
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('signup')}}" >
                            <span class="w3-border w3-padding w3-round">
                            <i class="material-icons">featured_play_list</i> Register
                        </span>
                        </a>

                        
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="javascript::void(0)" target="_blank" data-original-title="Follow us on Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="{{ url('https://www.facebook.com/secondlifebd1') }}" target="_blank" data-original-title="Like us on Facebook">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>

                    {{-- @include('welcome.includes.others.socialLinkList') --}}

                    {{-- <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="javascript::void(0)" target="_blank" data-original-title="Follow us on Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
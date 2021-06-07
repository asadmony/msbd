{{-- <nav class="navbar   fixed-top  navbar-expand-lg bg-danger" color-on-scroll="100" id="sectionsNav"> --}}
<nav class="navbar    fixed-top  navbar-expand-lg bg-primary " color-on-scroll="100" id="sectionsNav">

    <div class="container">
        <div class="navbar-translate">
            <a title="" rel="tooltip" data-placement="bottom" class="navbar-brand"
                data-original-title="{{ env('APP_NAME_BIG') }}" href="{{url('/')}}">
                <img class="img-responsive rounded"
                    src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}"
                    alt="{{ env('APP_NAME_BIG') }}" style="width: 120px; margin-top: -16px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">

                @if (Browser::isDesktop())

                @if($websiteParameter->contact_mobile)
                {{-- <li class="nav-item">
                    <a class="nav-link" href="tel:{{ $websiteParameter->contact_mobile }}">
                <span class="w3-large">
                    <i class="material-icons">local_phone</i> {{ $websiteParameter->contact_mobile }}</span>
                </a>
                </li> --}}
                @endif

                @if(isset($userHeaderMenu))
                {{-- @if ($userHeaderMenu->subMenus->count() > 0)
                @foreach($userHeaderMenu->subMenus as $subMenu)
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">{{ $subMenu->menu_title }}</span>
                </a>
                <ul class="dropdown-menu">
                    @foreach($subMenu->pages as $uhmPage)
                    <li class="header"><a class="nav-link"
                            href="{{ route('page', [$uhmPage->id, $uhmPage->route_name]) }}">
                            {{ Str::limit( $uhmPage->page_title , 30,'..') }}
                        </a></li>
                    @endforeach
                </ul>
                </li>
                @endforeach
                @endif --}}
                @foreach($userHeaderMenu->pages as $uhmPage)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('page', [$uhmPage->id, $uhmPage->route_name]) }}">
                        {{ Str::limit( $uhmPage->localeTitle , 30,'..') }}
                    </a>
                </li>
                @endforeach
                @endif
                @if (isset($management))
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true">
                        <span class="w3-text-white">{{ $management->localeTitle }}</span>
                        <div class="ripple-container"></div>
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        @foreach($management->pages as $uhmPage)
                        <a class="dropdown-item" href="{{ route('page', [$uhmPage->id, $uhmPage->route_name]) }}">
                            {{ Str::limit( $uhmPage->localeTitle , 30,'..') }}
                        </a>
                        @endforeach
                        {{-- <a class="dropdown-item" href="{{ route('welcome.teamMembers') }}">
                            Management Team
                        </a> --}}
                    </div>
                </li>

                @endif
                @if (isset($membership))
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true">
                        <span class="w3-text-white">{{ $membership->localeTitle }}</span>
                        <div class="ripple-container"></div>
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        @foreach($membership->pages as $uhmPage)
                        <a class="dropdown-item" href="{{ route('page', [$uhmPage->id, $uhmPage->route_name]) }}">
                            {{ Str::limit( $uhmPage->localeTitle , 30,'..') }}
                        </a>
                        @endforeach
                        <a class="dropdown-item" href="{{ route('welcome.teamMembers') }}">
                            {{ __('Employee Stories') }}
                        </a>
                    </div>
                </li>
                @endif
                {{-- @if (isset($ownersMsg))
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true">
                        <span class="w3-text-white">{{ $ownersMsg->localeTitle }}</span>
                        <div class="ripple-container"></div>
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        @foreach($ownersMsg->pages as $uhmPage)
                        <a class="dropdown-item" href="{{ route('page', [$uhmPage->id, $uhmPage->route_name]) }}">
                            {{ Str::limit( $uhmPage->localeTitle , 30,'..') }}
                        </a>
                        @if ($loop->iteration == 1)
                        <a class="dropdown-item" href="{{ route('welcome.successStories') }}">
                            {{ __('Success Stories') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('welcome.teamMembers') }}">
                            {{ __('Employee Stories') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('welcome.photoGallery') }}">
                            Success Stories (Photos)
                        </a>
                        <a class="dropdown-item" href="{{ route('welcome.videoGallery') }}">
                            Success Stories (Videos)
                        </a>
                        @endif
                        @endforeach

                        <a class="dropdown-item" href="{{ route('welcome.successStories', 'photo') }}">
                            Success Stories (Photos)
                        </a>
                    </div>
                </li>
                @endif --}}
                @if (isset($contactUs))
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true">
                        <span class="w3-text-white">{{ $contactUs->localeTitle }}</span>
                        <div class="ripple-container"></div>
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        @foreach($contactUs->pages as $uhmPage)
                        <a class="dropdown-item" href="{{ route('page', [$uhmPage->id, $uhmPage->route_name]) }}">
                            {{ Str::limit( $uhmPage->localeTitle , 30,'..') }}
                        </a>
                        @if ($loop->first)
                        <a class="dropdown-item" href="{{ route('welcome.ourBranches')}}">
                            {{ __('Branch Office Address') }}
                        </a>
                        @endif
                        @endforeach
                    </div>
                </li>
                @endif
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome.ourBranches')}}">
                Branches
                </a>
                </li> --}}

                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}" >
                     {{ __('Blog') }}
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" title="{{__('welcome.change_language')}}"  href="{{route('welcome.languageChange')}}" >
                        @if(Cookie::get('locale') == 'bn')
                        English
                        @else
                        বাংলা
                        @endif
                    </a>
                </li> --}}
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true">
                        <span class="w3-text-white">More </span>
                        <div class="ripple-container"></div>
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a class="dropdown-item" href="{{ route('blog') }}">
                            {{ __('Blog') }}
                        </a>
                        <a class="dropdown-item" href="{{route('welcome.languageChange')}}">
                            @if(Cookie::get('locale') == 'bn')
                            English
                            @else
                            বাংলা
                            @endif
                        </a>
                    </div>
                </li>


                @endif
                {{-- <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" >
                            <i class="material-icons">add_alert</i> Notifications
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" >
                            <i class="material-icons">view_module
</i> Gallery
                        </a>
                    </li> --}}




                @if (Browser::isDesktop())

                {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome.blog') }}" >
                <img src="{{ asset('img/book.svg') }}" alt="{{ env('APP_NAME_BIG') }}" width="27"> Blog
                </a>
                </li> --}}

                @else
                @include('user.includes.others.myLeftMobileMenu')
                @endif

                {{-- @include('welcome.includes.others.pageLinkList') --}}

                @if (Browser::isDesktop())
                {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome.successProfiles') }}" >
                <i class="material-icons">contact_phone</i> Success Stories
                </a>
                </li> --}}


                {{-- <li class="nav-item">
                        <a class="nav-link" href="{{route('userMessageDashboard')}}">
                <i class="material-icons">forum</i> Message
                </a>
                </li> --}}

                @endif





                <li class="dropdown nav-item">



                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">apps</i> {{Str::limit(Auth::user()->email, 15,'..')}}
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">


                        @if(Auth::user()->isAdmin())
                        <a href="{{route('admin.dashboard')}}" class="dropdown-item">
                            <i class="material-icons">layers</i> {{ __('Admin Dashboard') }}
                        </a>
                        @endif

                        @if(Auth::user()->isCommonWithoutAdmin())
                        <a href="{{route('common1.dashboard')}}" class="dropdown-item">
                            <i class="material-icons">layers</i> {{ Auth::user()->commonRole()->role_value }} Dashboard
                        </a>
                        @endif

                        @if(Auth::user()->isMediaPerson())
                        <a href="{{route('mediaperson.dashboard')}}" class="dropdown-item">
                            <i class="material-icons">layers</i> {{ __('Media Person Dashboard') }}
                        </a>
                        @endif


                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                            <i class="material-icons">content_paste</i> {{ __('logout') }}
                        </a>




                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>



                </li>

                {{-- @include('welcome.includes.others.userSearchLinkList') --}}






                {{-- <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">settings</i> Settings
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="{{route('welcome.username',$u->username)}}" class="dropdown-item">
                <i class="material-icons">layers</i> View Profile
                </a>

                <a href="{{route('user.settings','edit_my_profile')}}" class="dropdown-item">
                    <i class="material-icons">layers</i> Edit my profile
                </a>


                <a href="{{route('user.settings', 'edit_personal_info_for_office')}}" class="dropdown-item">
                    <i class="material-icons">layers</i> Edit Personal Information
                </a>

                <a href="{{route('user.myProfile')}}" class="dropdown-item">
                    <i class="material-icons">photo_library</i> Edit my Photos
                </a>

                <a href="{{route('user.allRelatedUsers', 'favourite')}}" class="dropdown-item">
                    <i class="material-icons">account_circle</i> My Favourite Users
                </a>

                <a href="{{route('user.allRelatedUsers', 'block')}}" class="dropdown-item">
                    <i class="material-icons">account_circle</i> My Blocked Users
                </a>



                <a href="{{route('user.settings', 'change_password')}}" class="dropdown-item">
                    <i class="material-icons">account_circle</i> Change Password
                </a>

                <a href="{{route('user.settings', 'change_email')}}" class="dropdown-item">
                    <i class="material-icons">account_circle</i> Change Email
                </a>

                <a href="{{route('user.settings', 'change_contact')}}" class="dropdown-item">
                    <i class="material-icons">account_circle</i> Update Contact Number
                </a>



                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <i class="material-icons">content_paste</i> Logout
                </a>

        </div>
        </li> --}}


        {{-- <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="javascript::void(0)" target="_blank" data-original-title="Follow us on Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li> --}}
        {{-- <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="{{ url('https://www.facebook.com/taslimamediabd/') }}"
        target="_blank" data-original-title="Like us on Facebook">
        <i class="fa fa-facebook-square"></i>
        </a>
        </li> --}}
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

<li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <img src="{{ asset('img/online.svg') }}" alt="Online" style="width: 20px;"> My Profile
    </a>
    <div class="dropdown-menu dropdown-with-icons">

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'my_visitor_users') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> My Visitors 
            <span class="ml-2 text-red">(
              {{ $me->visitors()->count() }}
            )</span>
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'my_favourite_users') }}">
            <img src="{{ asset('img/heart1.svg') }}" style="width: 18px;" alt="Favourite Taslima Marriage Media"> Favourite Users 
            <span class="ml-2 text-red">(
              {{ $me->favs()->count() }}
            )</span>
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'my_blocked_users') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Blocked Users 
            <span class="ml-2 text-red">(
              {{ $me->blockss()->count() }}
            )</span>
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'proposal_pending') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Proposal Pending 
            <span class="ml-2 text-red">(
              {{ $me->proposalToMe()->whereAccepted(false)->count() }}
            )</span>
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'proposal_to_me') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Proposal to me 
            <span class="ml-2 text-red">(
              {{ $me->proposalToMe()->whereAccepted(true)->count() }}
            )</span>
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'proposal_by_me') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Proposal by me 
            <span class="ml-2 text-red">(
              {{ $me->proposal()->count() }}
            )</span>
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'my_contacts') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Contacts ({{ $me->contactLimit() }}) 
            <span class="ml-2 text-red">(
              {{ $me->cont()->count() }}
            )</span>
            </a>

            

    </div>
</li>




<li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <img src="{{ asset('img/img.svg') }}" alt="{{ env('APP_NAME_BIG') }} Photo" style="width: 15px;"> Photo
    </a>
    <div class="dropdown-menu dropdown-with-icons">

 

            <a href="{{ route('user.myPhotoUpload') }}" 
            class="dropdown-item btn btn-primary btn-link">
            <i class="mr-1 fa fa-circle-o text-purple"></i>  &nbsp; Manage Photos 
            <span class="ml-1 text-red">({{ $me->ppStatus() }})</span>
            </a>
    </div>
</li>



{{-- 
<li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <i class="fa fa-cog fa-spin w3-text-purple"></i>  Settings
    </a>
    <div class="dropdown-menu dropdown-with-icons">

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'setting_basic_info') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Basic Info 
            <span class="ml-1 text-red">({{ $me->basicInfoStatus() }})</span>
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'setting_contact_info') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Contact Info 
            <span class="ml-1 text-red">({{ $me->contactInfoStatus() }})</span>
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'setting_personal_info') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Personal Info 
            <span class="ml-1 text-red">({{ $me->personalInfoStatus() }})</span>
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'setting_personal_activity') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Personal Act
            <span class="ml-1 text-red">({{ $me->personalActivityStatus() }})</span>
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset','search_setting') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Partner Preference
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'setting_email') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Edit Email 
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'setting_mobile') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Edit Mobile 
            </a>

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'setting_password') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Edit Password
            </a>

            
    </div>
</li>
 --}}
{{-- <li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <img src="{{ asset('img/message.svg')  }}" alt="{{ env('APP_NAME_BIG') }} Message" style="width: 23px;"> 

                      Message
    </a>
    <div class="dropdown-menu dropdown-with-icons">

            <a href="{{ route('userMessageDashboard') }}" 
            class="dropdown-item btn btn-primary btn-link">
            <i class="mr-1 fa fa-circle-o text-purple"></i> My All Messages

            </a>
    </div>
</li>
 --}}
{{-- <li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <img src="{{ asset('img/magnify.gif') }}" alt="Online" style="width: 24px;"> Search
    </a>
    <div class="dropdown-menu dropdown-with-icons">

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'search_all') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Search All 
            </a>   

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'search_username') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Search Username 
            </a>   

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'search_profession') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Profession Search 
            </a>           


            <a href="" data-url="{{ route('user.myAsset','search_setting') }}" class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"><i class=" mr-1 fa fa-cog text-purple"></i> Search (Preference) Setting</a> 

            <a href="" data-url="{{ route('user.myAsset','search_preference') }}" class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"><i class=" mr-1 fa fa-circle-o text-purple"></i> Preference / Custom Search</a>

    </div>
</li>
 --}}
{{-- <li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <img src="{{ asset('img/payment.svg') }}" alt="Online" style="width: 22px;"> Payment
    </a>
    <div class="dropdown-menu dropdown-with-icons">

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'membership_packages') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Mem. Packages
            </a>   

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'pay_now') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Upgrade / Pay Now 
            </a>   

            <a href="" 
            class="dropdown-item btn btn-primary btn-link  btn-menu-to-container"  
            data-url="{{ route('user.myAsset', 'my_payments') }}">
            <i class="mr-1 fa fa-circle-o text-purple"></i> My Invoice
            </a>   

            <a href="{{ route('user.myComments') }}" 
            class="dropdown-item btn btn-primary btn-link">
            <i class="mr-1 fa fa-circle-o text-purple"></i> Complain to Admin
            </a>             

    </div>
</li>
 --}}
 



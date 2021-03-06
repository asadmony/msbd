                    <div class="w3-card-2">
                        <div class="box box-widget w3-hover-shadow">
                            <div class="box-header with-border">
                              <img src="{{ asset('img/online.svg') }}" alt="Online" style="width: 20px;"> {{ __('Hello') }} {{ Str::limit($me->name, 17,'..') }}

                              <div class="box-tool pull-right">
                                <i class="fa fa-circle-o-notch w3-text-purple fa-spin btn-speener" style="display:none;"></i>
                              </div>
                          </div>
                          <div class="box-body">

                            <table class="table table-condensed">
                              <tbody>
                                <tr>
                                  <td width="75" style="border-top: 0;padding-right: 10px;">
                                    <img src="{{ asset($me->latestCheckedPP()) }}" class="rounded img-bordered mb-4 "  alt="{{ $me->username }}" style="max-width: 75px;">
                                  </td>
                                  <td style="border-top: 0;">

                                    <a href="{{ route('user.myPhotoUpload') }}" class="btn btn-primary btn-link no-padding"><i class="fa fa-circle-o w3-text-purple"></i> &nbsp; {{ __('Manage Photos') }}</a>


                                    <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset','setting_basic_info') }}"><i class="fa fa-circle-o w3-text-purple"></i> &nbsp; {{ __('Edit Basic Info') }} </a> 

                                    <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset','setting_education') }}"><i class="fa fa-circle-o w3-text-purple"></i> &nbsp; {{ __('Update Education') }} </a>

                                    <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset','setting_work') }}"><i class="fa fa-circle-o w3-text-purple"></i> &nbsp; {{ __('Update Work Info') }} </a>

                                    <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset','setting_family') }}"><i class="fa fa-circle-o w3-text-purple"></i> &nbsp; {{ __('Update Family Info') }} </a>

                                    <a href="" data-url="{{ route('user.myAsset','search_setting') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o w3-text-purple"></i> &nbsp; {{ __('Preference Settings') }}</a>

                                  </td>
                                </tr>
                              </tbody>
                            </table>

                            {{-- <hr class=" mt-0">

                            <span class="text-muted">
                              
                            <i class="fa fa-check-circle-o"></i>
                            Mobile Number Verified 
                            </span>  


                            <hr>

                            <span class="text-muted">
                              
                            <i class="fa fa-check-circle-o"></i>
                            Email Verified 
                            </span>   --}}

                        </div>
                      </div>
                    </div>

                    <div class="w3-card-2">
                      <div class="box box-widget">
                        <div class="box-body">
                          


                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"  data-url="{{ route('user.myAsset', 'my_visitor_users') }}"><img src="{{ asset('img/visitor.svg') }}" alt="Online" style="width: 20px;"> &nbsp; {{ __('My Visitors') }}</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->visitors()->count() }}</span><br>

                            
                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"  data-url="{{ route('user.myAsset', 'my_favourite_users') }}"><img src="{{ asset('img/heart1.svg') }}" style="width: 18px;" alt="Favourite Taslima Marriage Media"> &nbsp;  {{ __('My Favourite Users') }}</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->favs()->count() }}</span><br>


                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'my_blocked_users') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; {{ __('My Blocked Users') }}</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->blockss()->count() }}</span> <br>

                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; {{ __('My Contact Lists') }}</a> <br>

                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'proposal_pending') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  {{ __('Proposal Pending') }}</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->proposalToMe()->whereAccepted(false)->count() }}</span> <br>

                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'proposal_to_me') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  {{ __('Proposal to me') }}</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->proposalToMe()->whereAccepted(true)->count() }}</span> <br>

                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'proposal_by_me') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  {{ __('Proposal sent by me') }}</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->proposal()->count() }}</span><br>

                            {{-- <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'my_contacts') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; {{ __('My Contacts') }} ({{ $me->contactLimit() }} remaining)</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->cont()->count() }}</span>
                            <br> --}}

                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'my_contacts') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; {{ __('My Contacts') }} ({{ $me->contactLimit() }} {{ __('remaining') }})</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->cont()->count() }}</span>
                            <br>

                            

                        </div>
                    </div>
                </div>



                <div class="w3-card-2">
        <div class="box box-default">
            <div class="box-header with-border">
              <img src="{{ asset('img/magnify.gif') }}" alt="Online" style="width: 24px;">  {{ __('Search') }}

              <div class="box-tool pull-right">
                                <i class="fa fa-circle-o-notch w3-text-purple fa-spin btn-speener" style="display:none;"></i>
                              </div>
          </div>
          <div class="box-body">
            <a href="" data-url="{{ route('user.myAsset','search_all') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  {{ __('Search All') }}</a> <br>

            <a href="" data-url="{{ route('user.myAsset','search_username') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; {{ __('Username Search') }}</a> <br>

            {{-- <a href="" data-url="{{ route('user.myAsset','search_photo') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; {{ __('Photo Search') }}</a> <br> --}}

            <a href="" data-url="{{ route('user.myAsset','search_profession') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; {{ __('Profession Search') }}</a> <br>

            <a href="" data-url="{{ route('user.myAsset','search_setting') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-cog text-purple"></i> &nbsp; &nbsp; {{ __('Search (Preference) Settings') }}</a> <br>

            <a href="" data-url="{{ route('user.myAsset','search_preference') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; {{ __('Preference / Custom Search') }}</a> <br>


            {{-- <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; Easy Search</a> <br>
            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; Advance Search</a> <br>
            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Profession Search </a> <br>
 

            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-cog text-purple"></i> &nbsp; &nbsp;  Custom Search Setting</a> --}}


        </div>
    </div>
</div>

               {{--  <div class="w3-card-2">
                    <div class="box box-default">
                        <div class="box-header with-border">
                          <img src="{{ asset('img/img.svg') }}" alt="{{ env('APP_NAME_BIG') }} Photo" style="width: 15px;"> 

                          Photo

                          <div class="box-tool pull-right">
                                <i class="fa fa-circle-o-notch w3-text-purple fa-spin btn-speener" style="display:none;"></i>
                              </div>
                      </div>
                      <div class="box-body">

                        <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'my_photos') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  My Photos/Pictures</a> 



                        

                        <br> 

                        <a href="{{ route('user.myPhotoUpload') }}" class="btn btn-primary btn-link no-padding"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Upload Photo</a> 

                        <span class="btn-link btn btn-danger pull-right no-padding">pp status</span>


                       


                    </div>
                </div>
            </div> --}}


{{--             <div class="w3-card-2">
            <div class="box box-default">
                <div class="box-header with-border">
                  <i class="fa fa-cog fa-spin w3-text-purple"></i>  Settings

                  <div class="box-tool pull-right">
                    <i class="fa fa-circle-o-notch w3-text-purple fa-spin btn-speener" style="display:none;"></i>
                  </div>

              </div>
              
              <div class="box-body">

                <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset','setting_basic_info') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; Edit Basic Info 
                </a> 
                <span class="btn-link btn btn-danger pull-right no-padding"> basic info status</span><br>

                <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'setting_contact_info') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Edit Contact Info</a> <span class="btn-link btn btn-danger pull-right no-padding">con info status</span><br>

                <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'setting_personal_info') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Edit Personal Info</a> <span class="btn-link btn btn-danger pull-right no-padding"> per info status</span><br>

                <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'setting_personal_activity') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Edit Personal Act..</a> <span class="btn-link btn btn-danger pull-right no-padding">per act status</span><br>

                <a href="" data-url="{{ route('user.myAsset','search_setting') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; Partner Preference</a> <br>

                <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset','setting_email') }}">
                  <i class="fa fa-circle-o text-purple"></i> 
                  &nbsp; &nbsp; Edit Email
                </a> <br>


                <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset','setting_mobile') }}">
                  <i class="fa fa-circle-o text-purple"></i> 
                &nbsp; &nbsp; 
              Edit Mobile
              </a> <br>

                <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"  data-url="{{ route('user.myAsset','setting_password') }}">
                  <i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Edit Password
                </a> <br>

                

                

            </div>
        </div>
    </div> --}}


            {{-- <div class="w3-card-2">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <img src="{{ asset('img/message.svg') }}" alt="{{ env('APP_NAME_BIG') }} Message" style="width: 23px;"> 

                      Message

                      <div class="box-tool pull-right">
                                <i class="fa fa-circle-o-notch w3-text-purple fa-spin btn-speener" style="display:none;"></i>
                              </div>
                  </div>
                  <div class="box-body">

                    <a href="{{ route('userMessageDashboard') }}" class="btn btn-primary btn-link no-padding">
                  <i class="fa fa-circle-o text-purple"></i> 
                &nbsp; &nbsp; 
              My All Messages
              </a> 




                </div>
            </div>
        </div> --}}


        


{{--     <div class="w3-card-2">
        <div class="box box-default">
            <div class="box-header with-border">
              <img src="{{ asset('img/magnify.gif') }}" alt="Online" style="width: 24px;">  Search

              <div class="box-tool pull-right">
                                <i class="fa fa-circle-o-notch w3-text-purple fa-spin btn-speener" style="display:none;"></i>
                              </div>
          </div>
          <div class="box-body">
            <a href="" data-url="{{ route('user.myAsset','search_all') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Search All</a> <br>

            <a href="" data-url="{{ route('user.myAsset','search_username') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; Username Search</a> <br>

            <a href="" data-url="{{ route('user.myAsset','search_photo') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; Photo Search</a> <br>

            <a href="" data-url="{{ route('user.myAsset','search_profession') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; Profession Search</a> <br>

            <a href="" data-url="{{ route('user.myAsset','search_setting') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-cog text-purple"></i> &nbsp; &nbsp; Search (Preference) Setting</a> <br>

            <a href="" data-url="{{ route('user.myAsset','search_preference') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; Preference / Custom Search</a> <br>




        </div>
    </div>
</div> --}}

{{-- <div align="center">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-3322244656717684"
     data-ad-slot="7937748008"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div> --}}

{{-- <div class="w3-card-2">
    <div class="box box-default">
        <div class="box-header with-border">
          <img src="{{ asset('img/payment.svg') }}" alt="{{ env('APP_NAME_BIG') }} payment" style="width: 22px;"> 

          Payment

          <div class="box-tool pull-right">
                                <i class="fa fa-circle-o-notch w3-text-purple fa-spin btn-speener" style="display:none;"></i>
                              </div>
      </div>
      <div class="box-body">

        <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'membership_packages') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Membership Packages </a> <br>

        <a href="" data-url="{{ route('user.myAsset', 'pay_now') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Upgrade Account / Pay Now</a> <br>


        <a href="" data-url="{{ route('user.myAsset', 'my_payments') }}" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  My Invoice</a> <br>

        <a href="{{ route('user.myComments') }}" class="btn btn-primary btn-link no-padding"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Complain to Admin</a> 


    </div>
</div>
</div> --}}

@if(env('APP_ENV') == 'production')

@include('welcome.includes.others.fbPageAreaContainer')
 
@include('welcome.includes.others.ourVisitorContainer')
 @endif


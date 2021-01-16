                    <div class="w3-card-2">
                        <div class="box box-widget w3-hover-shadow">
                            <div class="box-header with-border">
                              <img src="{{ asset('img/online.svg') }}" alt="Online" style="width: 20px;"> {{ $me->name }}'s Profile

                              <div class="box-tool pull-right">
                                <i class="fa fa-circle-o-notch w3-text-red fa-spin btn-speener" style="display:none;"></i>
                              </div>
                          </div>
                          <div class="box-body">

                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"  data-url="{{ route('user.myAsset', 'my_visitor_users') }}"><img src="{{ asset('img/visitor.svg') }}" alt="Online" style="width: 20px;"> &nbsp; My Visitors</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->visitors()->count() }}</span><br>

                            
                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"  data-url="{{ route('user.myAsset', 'my_favourite_users') }}"><img src="{{ asset('img/heart1.svg') }}" style="width: 18px;" alt="Favourite Taslima Marriage Media"> &nbsp;  My  Favourite Users</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->favs()->count() }}</span><br>


                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'my_blocked_users') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; My  Blocked Users</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->blockss()->count() }}</span> <br>

                            {{-- <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; My Contact Lists</a> <br> --}}

                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'proposal_pending') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Proposal Pending</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->proposalToMe()->whereAccepted(false)->count() }}</span> <br>

                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'proposal_to_me') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Proposal to me</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->proposalToMe()->whereAccepted(true)->count() }}</span> <br>

                            <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'proposal_by_me') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Proposal sent by me</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->proposal()->count() }}</span><br>

                            {{-- <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'my_contacts') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp; My Contacts ({{ $me->contactLimit() }} remaining)</a> <span class="btn-link btn btn-danger pull-right no-padding">{{ $me->cont()->count() }}</span>
                            <br> --}}

                            

                        </div>
                    </div>
                </div>

                <div class="w3-card-2">
                    <div class="box box-default">
                        <div class="box-header with-border">
                          <img src="{{ asset('img/img.svg') }}" alt="{{ env('APP_NAME_BIG') }} Photo" style="width: 15px;"> 

                          Photo

                          <div class="box-tool pull-right">
                                <i class="fa fa-circle-o-notch w3-text-red fa-spin btn-speener" style="display:none;"></i>
                              </div>
                      </div>
                      <div class="box-body">

                        <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container" data-url="{{ route('user.myAsset', 'my_photos') }}"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  My Photos/Pictures</a> 



                        

                        <br> 

                        <a href="{{ route('user.myPhotoUpload') }}" class="btn btn-primary btn-link no-padding"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Upload Photo</a> 

                        <span class="btn-link btn btn-danger pull-right no-padding">pp status</span>


                        {{-- <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Upload Public Photo</a>  --}}

                        {{-- <a href="" class="btn btn-primary btn-link no-padding btn-menu-to-container"><i class="fa fa-circle-o text-purple"></i> &nbsp; &nbsp;  Upload Private Photo </a>  --}}


                    </div>
                </div>
            </div>


{{--             <div class="w3-card-2">
            <div class="box box-default">
                <div class="box-header with-border">
                  <i class="fa fa-cog fa-spin w3-text-purple"></i>  Settings

                  <div class="box-tool pull-right">
                    <i class="fa fa-circle-o-notch w3-text-red fa-spin btn-speener" style="display:none;"></i>
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
                                <i class="fa fa-circle-o-notch w3-text-red fa-spin btn-speener" style="display:none;"></i>
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
                                <i class="fa fa-circle-o-notch w3-text-red fa-spin btn-speener" style="display:none;"></i>
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
                                <i class="fa fa-circle-o-notch w3-text-red fa-spin btn-speener" style="display:none;"></i>
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


 
<div class="w3-card-2">
    <div class="box box-default">
      <div class="box-header with-border">
         <i class="fa fa-globe"></i> Our Website Visitors  
      </div>    
      <div class="box-body" style="min-height: 200px;">

        {{-- <script type="text/javascript" id="clstr_globe" src="{{ asset('//cdn.clustrmaps.com/globe.js?d=QoEcJl3taHE5VjWTdDZbaoBwWvluBPIcrLNoHj9qEB0') }}"></script>

        <script type="text/javascript" id="clustrmaps" src="{{ asset('//cdn.clustrmaps.com/map_v2.js?d=QoEcJl3taHE5VjWTdDZbaoBwWvluBPIcrLNoHj9qEB0&cl=ffffff&w=a') }}"></script> --}}


    </div>
</div>
</div>
 

<div class="w3-card-2">
    <div class="box box-default">         
      <div class="box-body">

        {{-- @include('welcome.includes.others.fbPageArea') --}}


    </div>
</div>
</div>
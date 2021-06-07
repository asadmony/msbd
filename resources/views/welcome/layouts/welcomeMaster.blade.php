<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    @if ($websiteParameter->favicon)

    <link rel="shortcut icon" href="{{ asset('storage/favicon/'. $websiteParameter->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('storage/favicon/'. $websiteParameter->favicon) }}" type="image/x-icon">

    @else

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    @endif

    <title>
        @if ($websiteParameter->title)
        {!! $websiteParameter->title !!}
        @else
        {{ env('APP_NAME_BIG') }} | Matrimony Service in Bangladesh | Marriage Media Service provider in Bangladesh |
        Matchmaker Service in Bangladesh
        @endif
    </title>


    {{-- <meta name="google-site-verification" content="hXsQ0jlq5t5lKq_HJiI4fkx7B7hAQnWFEgr4OnUzpo0" /> --}}

    <meta name="description" content="{{ $websiteParameter->meta_description ?: 'Matrimony Service in Bangladesh' }}">

    <meta name="author" content="{{ $websiteParameter->meta_author ?: 'Marriage Solution' }}">
    <meta name="keywords" content="{{ $websiteParameter->meta_keyword ?: 'Matchmaker Service in Bangladesh' }}">

    @if ($websiteParameter->google_analytics_code)
    {!! $websiteParameter->google_analytics_code !!}
    @endif

    @if ($websiteParameter->facebook_pixel_code)
    {!! $websiteParameter->facebook_pixel_code !!}
    @endif

    <link rel="stylesheet" href="{{asset('assets/sweetalert2/dist/sweetalert2.css')}}">
    <!-- SweetAlert2 -->
    {{-- <link rel="stylesheet" href="{{ asset('cp/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}"> --}}
    <script src="{{asset('assets/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('cp/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">


    {{-- <link rel="stylesheet" href="{{ asset('assets/jquery-bg-slide/demo/css/jquery.slide.css') }}" /> --}}



    <!-- cropperjs-->
    {{-- <link href="{{asset('assets/cropperjs-master/dist/cropper.min.css')}}" rel='stylesheet' type='text/css'> --}}

    <!-- Ionicons -->
    {{-- not used --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('fonts/ion/css/ionicons.min.css')}}"> --}}


    {{-- <link href="{{asset('css/w3.css')}}" rel="stylesheet" /> --}}

    <!-- Theme style -->
    {{-- <link rel="stylesheet" href="{{asset('cp/dist/css/AdminLTE.css')}}"> --}}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
    {{-- <link rel="stylesheet" href="{{asset('cp/dist/css/skins/_all-skins.min.css')}}"> --}}




    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}" />


    {{-- <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}"
    /> --}}
    <link rel="stylesheet" href="{{asset('prt/vendor/fontawesome-free/css/all.min.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('fonts/fa/css/font-awesome.min.css') }}"> --}}

    {{-- <link rel="stylesheet" href="{{asset('mk/mk/BS4/assets/css/material-kit.css?v=2.0.2')}}"> --}}
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    {{-- <link href="{{asset('mk/mk/BS4/assets/assets-for-demo/demo.css')}}" rel="stylesheet" /> --}}
    <!-- iframe removal -->


    {{-- <link href="{{asset('assets/rc/x_rotating_card_v1.4/css/rotating-card.min.css')}}" rel='stylesheet' /> --}}

    <link rel="stylesheet" href="{{ asset('css/frontMaster.min.css') }}" />

    <link rel="stylesheet" type="text/css"
        href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/select2-bootstrap4/dist/select2-bootstrap4.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('cp/bower_components/select2/dist/css/select2.css')}}">
    --}}

    <style>
        .modal-open {
            overflow: unset;
        }
    </style>

    <link href="{{asset('css/card.css')}}" rel="stylesheet" />
    <link href="{{asset('css/dswcard.css')}}" rel="stylesheet" />
    <link href="{{asset('css/welcome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/front.min.css')}}" rel="stylesheet" />





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- sweetalert css and js -->
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/dist/sweetalert2.css')}}">
    <script src="{{asset('assets/sweetalert2/dist/sweetalert2.min.js')}}"></script>




    @auth

    <style>
        .main {
            background: #f1f1f2 !important;
        }

        .width-100 {
            width: 100px;
        }
    </style>

    @endauth
    <link href="{{asset('css/user.css')}}" rel="stylesheet" />


    @stack('css')

    <!-- Scripts -->
    <script>
        window.Laravel = @php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); @endphp
    </script>

</head>


<body  oncontextmenu="return false;" class="{{Auth::check() ? 'profile-page' : 'index-page'}}">
    @include('alerts.alertSweet')
    {{-- <body class="{{Auth::check() ? 'profile-page' : 'landing'}}"> --}}
    <div id="backtop">&#9650;</div>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v4.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your customer chat code -->
    {{-- <div class="fb-customerchat" attribution=install_email theme_color="#9c27b0" page_id="693694820697281">
    </div> --}}




    {{--         <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> --}}

    @auth
    @include('user.layouts.userHeader')
    <br>
    @else
    @include('welcome.layouts.welcomeHeader')
    @if (Route::currentRouteName() != 'welcome.welcome')
    <br>
    @endif
    @endauth
    @yield('content')
    @include('welcome.layouts.welcomeFooter')

    <!--   Core JS Files   -->
    {{-- <script src="{{asset('mk/mk/BS4/assets/js/core/jquery.min.js')}}"></script> --}}
    {{-- <script src="{{asset('mk/mk/BS4/assets/js/core/popper.min.js')}}"></script> --}}
    {{-- <script src="{{asset('mk/mk/BS4/assets/js/bootstrap-material-design.js')}}"></script> --}}
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    {{-- <script src="{{asset('mk/mk/BS4/assets/js/plugins/moment.min.js')}}"></script> --}}
<script>
    $(function () {
        if (response.sessionMessage) 
          {
            swal({
            text: response.sessionMessage,
            title: "Error!",
            timer: 8000,
            type: "error",
            showConfirmButton: true,
            confirmButtonText: "Close",
            confirmButtonColor: "#ff0000"
            });
          }
    })
</script>
    <script src="{{asset('js/frontMaster.js')}}"></script>

    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>
    <!-- cropperjs -->
    <script src="{{asset('assets/cropperjs-master/dist/cropper.js')}}"></script>



    <!-- Slimscroll -->
    <script src="{{asset('cp/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

    {{-- <script src="{{asset('cp/bower_components/select2/dist/js/select2.full.min.js')}}"></script> --}}


    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{asset('mk/mk/BS4/assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('mk/mk/BS4/assets/js/plugins/nouislider.min.js')}}"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="{{asset('mk/mk/BS4/assets/js/material-kit.js?v=2.0.2')}}"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="{{asset('mk/mk/BS4/assets/assets-for-demo/js/material-kit-demo.js')}}"></script>

    <script src="{{ asset('assets/jquery-bg-slide/dist/jquery.slide.js') }}"></script>


    {{--
<script>

$(function(){

$(document).bind("contextmenu",function(e) {
  e.preventDefault();
});
$(document).keydown(function(e){
  if(e.which === 123){ return false;    }})

    });
    </script> --}}


    <script>
        $(document).ready(function() {

            //init DateTimePickers
            materialKit.initFormExtendedDatetimepickers();

            // Sliders Init
            materialKit.initSliders();
        });
    </script>


    <script type="text/javascript">
        $().ready(function(){
        $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        // console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
    </script>


    <script>
        $(document).ready(function() {
            $('.simple-select2').select2({
                theme: 'bootstrap4',
                placeholder: "Select an option",
                allowClear: true
            });

            $('.simple-select2-sm').select2({
                theme: 'bootstrap4',
                containerCssClass: ':all:',
                placeholder: "Select an option",
                allowClear: true
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
        $('.slide').slide({
          'slideSpeed': 5000,
          'isShowArrow': true,
          'dotsEvent': 'mouseenter',
          'isLoadAllImgs': false
        });
      });

      $(".s-story").click(function() {
          $('html, body').animate({
              scrollTop: $('#s-story').offset().top
          }, 2000);
      });

    </script>

    <script src="{{asset('js/user.min.js')}}"></script>
    <script src="{{asset('js/userSetting.js')}}"></script>
    <script src="{{asset('js/front.min.js')}}"></script>





    {{-- @auth --}}
    {{-- @if (Auth::user()->hasIncompleteData())   --}}

    {{-- modal is outside of .main .main-raised class --}}
    {{-- @include('user.includes.modal.settingModal') --}}

    {{-- <script>
$(document).ready(function(){
    // Show the Modal on load

    $("#settingModal").modal({backdrop: "static"});
    $("#settingModal").modal("show");

    // alert('ok');
});
</script> --}}
    {{-- @endif --}}

    {{-- @endauth --}}

    @auth

    <?php $me = Auth::user(); ?>
    @if(!$me->profile)
    @if (Route::currentRouteName() != 'user.incompleteProfile' )
    @include('user.includes.modal.incompleteProfileModal')
    <script>
        $(document).ready(function(){
    // Show the Modal on load

    $("#incompleteProfile").modal({backdrop: "static"});
    $("#incompleteProfile").modal("show");

    });
    </script>
    @endif


@else
    @if(!$me->hasEducation() or !$me->hasWork() or ! $me->familyInfo )

    @include('user.includes.modal.eduWorkModal')
    <script>
        $(document).ready(function(){
    // Show the Modal on load

    $("#eduWorkModal").modal({backdrop: "static"});
    $("#eduWorkModal").modal("show");

    });
    </script>
    @endif

    {{-- @if (!empty($inactivePayment))
    @include('user.includes.modal.incompletePaymentModal')
    <script>
        $(document).ready(function(){
    // Show the Modal on load

    $("#inactivePayment").modal({backdrop: "static"});
    $("#inactivePayment").modal("show");

    });
    </script>
    @endif --}}
@endif

    @endauth

    @auth
    @include('user.includes.modal.myModal')

    @else

    @include('welcome.includes.modals.loginModal')
    @include('welcome.includes.modals.registerModal')
    @endauth



    @stack('js')

    @if(env('APP_ENV') == 'production')

    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c32dced82491369baa0bfd2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> --}}
    <!--End of Tawk.to Script-->
    @endif

</body>

</html>

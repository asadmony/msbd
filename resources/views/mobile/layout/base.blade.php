<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    @if ($websiteParameter->favicon)

    <link rel="shortcut icon" href="{{ asset('storage/favicon/'. $websiteParameter->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('storage/favicon/'. $websiteParameter->favicon) }}" type="image/x-icon">

    @else
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    @endif

    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/select2-bootstrap4/dist/select2-bootstrap4.css') }}">


    <title>
        @if ($websiteParameter->title)
        {!! $websiteParameter->title !!}
        @else
        {{ env('APP_NAME_BIG') }} | Matrimony Service in Bangladesh | Marriage Media Service provider in Bangladesh |
        Matchmaker Service in Bangladesh
        @endif
    </title>

    <meta name="description" content="{{ $websiteParameter->meta_description ?: 'Matrimony Service in Bangladesh' }}">

    <meta name="author" content="{{ $websiteParameter->meta_author ?: 'Marriage Solution' }}">
    <meta name="keywords" content="{{ $websiteParameter->meta_keyword ?: 'Matchmaker Service in Bangladesh' }}">

    @if ($websiteParameter->google_analytics_code)
    {!! $websiteParameter->google_analytics_code !!}
    @endif

    @if ($websiteParameter->facebook_pixel_code)
    {!! $websiteParameter->facebook_pixel_code !!}
    @endif

    <!-- jQuery -->
    <link href="{{ asset('msbd/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font awesome 5 -->
    <link href="{{ asset('msbd/fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="{{ asset('msbd/css/mobile.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('msbd/css/w3.css') }}" rel="stylesheet" type="text/css" />
    <!-- sweetalert css and js -->
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/dist/sweetalert2.css')}}">
    <script src="{{asset('assets/sweetalert2/dist/sweetalert2.min.js')}}"></script>



    <!-- custom javascript -->
    <style>
        .right:focus {
            outline: none;
            box-shadow: none;
        }

        .nav-sidebar a {
            font-size: 11px !important;
            padding-left: 0 !important;
            margin-left: 0 !important;
        }

        .nav-sidebar a>i {
            margin-right: 3px !important;
        }
    </style>
    @stack('css')

</head>

<body  oncontextmenu="return false;">
    <i class="screen-overlay"></i>
    @include('mobile.layout.left_sidebar')
    <!-- =============== screen-wrap =============== -->
    <div class="screen-wrap">
        @include('mobile.layout.header')
        <main class="app-content">
            @include('alerts.alerts')
            @yield('body')
        </main>

        @include('mobile.layout.footer')

    </div>

    @if(!$me->profile)
    @if (Route::currentRouteName() != 'user.incompleteProfile')
    @include('user.includes.modal.incompleteProfileModal')
    @endif

    <script>
    //     $(document).ready(function(){
    //     // Show the Modal on load

    //     $("#incompleteProfile").modal({backdrop: "static"});
    //     $("#incompleteProfile").modal("show");

    // });
    </script>
    @endif

    <!-- =============== screen-wrap end.// =============== -->
    @include('mobile.layout.right_sidebar')

    <script src="{{ asset('msbd/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('msbd/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('msbd/js/script.js') }}" type="text/javascript"></script>
    <script src="{{asset('js/frontMaster.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/user.min.js')}}"></script>
    <script src="{{asset('js/userSetting.js')}}"></script>
    <script src="{{asset('js/front.min.js')}}"></script>
    {{-- <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js') }}">
    </script> --}}
    <script type="text/javascript">
        $(document).ready(function() {
            // jQuery code
            $("#incompleteProfile").modal({backdrop: "static"});
        $("#incompleteProfile").modal("show");
        });
        // jquery end
    </script>
    @stack('js')
</body>

</html>

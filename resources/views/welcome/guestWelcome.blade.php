@extends('welcome.layouts.guestWelcomeMaster')

@section('title')

@if ($websiteParameter->title)
{!! $websiteParameter->title !!}
@else
{{ env('APP_NAME_BIG') }} | Matrimony Service in Bangladesh | Marriage Media Service provider in Bangladesh |
Matchmaker Service in Bangladesh
@endif

@endsection

@section('meta')
@endsection

@push('css')
<style>
    @import url('https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Ubuntu:400,500,700');

    .lob-font {
        font-family: 'Lobster Two', cursive;
    }

    .lobster {
        font-family: 'Lobster Two', cursive;
        line-height: 95px;
        letter-spacing: 1px;
        font-weight: 800 !important;
        font-size: 79px;
    }

    .sd {
        opacity: 0.7 !important;
    }

    h2.married-date {
        background: rgba(0, 0, 0, 0) url(svg/red_hidding_bg.svg) no-repeat scroll center center / contain;
        display: inline-block;
        font-size: 40px;
        font-weight: 400;
        margin-bottom: 0;
        padding: 5px 100px 10px;
        color: #fff;
    }

    .sda {
        padding-top: 8rem !important;
    }

    .timeline-box {
        opacity: 0.7;
        background-color: #ffff;
    }

    .slider-container .tp-opacity-overlay {
        background: #000;
        opacity: 0.6;
    }


    .bg-prods {
        background: #180405 url(/img/Elite-bg1.jpg) bottom repeat-x;
        min-height: 400px;
        border-bottom: #f7e1e6 solid 1px;
    }

    .prod-ops {
        padding: 20px;
        text-align: center;
        border-radius: 50px 0px;
        box-shadow: #180408 1px 1px 6px;
        /* background-image: linear-gradient(to top, #49082a 0%, #170104 100%); */
        margin-bottom: 10px;
        border: solid 1px rgba(255, 255, 255, 0.13);
        background: #0b0b0b url(/img/back.jpg) no-repeat center top;
    }

    .total-single-service-area .single-services-area {
        background: url(/img/bg-box.png) no-repeat;
        padding: 30px 0;
        transition: all 0.5s ease 0s;
        background-size: cover;
        background-position: 0 0;

    }

    .total-single-service-area .single-services-area:hover {
        background: url(/img/bg-box-hover.png) no-repeat;
        padding: 30px 0;
        transition: all 0.5s ease 0s;
        background-size: cover;
        background-position: 0 0;

    }

    .total-single-service-area .single-services-area h3 {
        font-family: 'Open Sans', Arial;
        font-size: 18px;
        color: #fff;
        font-weight: 600;
        position: relative;
        margin: 58px 0px 15px 0px;
        line-height: 35px;
        transition: all 0.5s ease 0s;
    }

    .total-single-service-area .single-services-area h3 strong {
        color: #cd3162;
    }

    .total-single-service-area .single-services-area h3 span {
        font-weight: 700;
        color: #e9b52e;
        font-style: italic;
        text-transform: uppercase;
    }

    .read-more {
        display: inline-block;
    }

    .read-more a {
        display: block;
        padding: 10px 30px;
        font-weight: 600;
        border: 1px solid;
        transition: all 0.5s ease 0s;
        -webkit-border-radius: 40px;
        -moz-border-radius: 40px;
        border-radius: 40px;
        color: #fff;
        border-color: #cd3162;
    }

    .read-more a:hover {
        background: #cd3162;
        color: #ffffff;
    }

    .home-title {
        /* color: gold !important; */
        /* font-family: 'Sacramento', cursive; */
        font-family: 'Lobster Two', cursive;
        font-style: italic;
        padding: 10px;
        /* font-size: 60pt; */
        background: -webkit-linear-gradient(#c246c2, gold, #a740a7);
        /* background: linear-gradient(to top right, #8B008B 20%, gold 51%, gold 51%, #8B008B 80%); */
        /* background: linear-gradient(to top right, red 20%, gold 51%, gold 51%, red 80%); */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        /* text-shadow: 4px 2px 5px rgba(255, 255, 255, 0.267); */
    }


    .home-title2 {
        /* font-family: 'Lobster Two', cursive; */
        color: rgba(236, 201, 0, 0.979) !important;
        /* background: -webkit-linear-gradient(rgb(151, 132, 25), gold, rgb(151, 132, 25)) !important; */
        font-size: 18px;
    }

    .home-title3 {
        font-size: 18px;
        /* background: linear-gradient(to top right, rgb(253, 24, 24) 0%, gold 51%, gold 51%, red 100%); */
        background: -webkit-linear-gradient(rgb(151, 132, 25), gold, rgb(151, 132, 25));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-style: italic;
    }

    @media screen and (min-width: 782px) {
        .home-title3 {
            font-size: 18pt !important;
        }

        .home-title2 {
            font-size: 14pt !important;
            font-weight: bold;
        }
    }
</style>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
@endpush

@section('header')
{{-- @include('welcome.layouts.guestWelcomeHeader') --}}
@endsection
@section('content')

<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
        data-plugin-options="{'sliderLayout': 'fullscreen', 'fullScreenOffsetContainer': '', 'fullScreenOffset': '0', 'responsiveLevels': [4096,1200,992,500]}">
        <ul>
            <li class="slide-overlay" data-transition="fade">
                <img src="" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                    class="rev-slidebg">

                <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%"
                    data-videoheight="100%" data-videomp4="{{ asset('videos/msbd.mp4') }}" data-videopreload="preload"
                    data-videoloop="loop" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true"
                    data-autoplayonlyfirsttime="false" data-nextslideatend="false">
                </div>

                {{-- <div class="tp-caption" data-x="center" data-hoffset="['-170','-170','-170','-350']" data-y="center"
                    data-voffset="['-50','-50','-50','-75']" data-start="1000"
                    data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"
                    style="z-index: 5;"><img src="img/slides/slide-title-border.png" alt=""></div> --}}

                {{-- <div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center"
                    data-voffset="['-50','-50','-50','-75']" data-start="700" data-fontsize="['16','16','16','40']"
                    data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:5000;"
                    style="z-index: 5;">WE WORK HARD AND PORTO HAS</div> --}}

                {{-- <div class="tp-caption" data-x="center" data-hoffset="['170','170','170','350']" data-y="center"
                        data-voffset="['-50','-50','-50','-75']" data-start="1000"
                        data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"
                        style="z-index: 5;"><img src="{{ asset('msbd\images\banners\banner1.jpg') }}" alt="">
    </div> --}}

    {{-- <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
        data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']"
        style="z-index: 5;"> <span class="home-title text-shadow" style="opacity: 1;">Marriage Solution
            BD</span>
    </div>

    <div class="tp-caption -font-weight-light ws-normal text-center"
        data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
        data-x="center" data-y="center" data-voffset="['60','60','60','105']" data-width="['530','530','530','1100']"
        data-fontsize="['18','18','18','60']" data-lineheight="['26','26','26','45']"
        style="color: #b5b5b5; z-index: 5;"> <span class="home-title2" style="opacity: 1;">
            A Reliable Matrimonial Organization</span>
    </div>
    <div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center"
        data-voffset="['100','100','100','200']" data-start="2500" data-fontsize="['16','16','16','40']"
        data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:2000;" style="z-index: 5;">
        <span class="home-title3">"দৃষ্টিভঙ্গি বদলান-জীবন বদলে যাবে"</span>
    </div> --}}

    <div class="tp-dottedoverlay tp-opacity-overlay-"></div>
    </li>
    </ul>
</div>
</div>
{{--
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
                                    <img alt="Porto" width="100" height="48" data-sticky-width="82"
                                        data-sticky-height="40" src="img/logo.png">
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
@foreach ($welcomeHeaderMenu->pages as $whm)
<li class="dropdown">
    <a class="dropdown-item" href="{{ route('page', [$whm->id, $whm->route_name]) }}">
        {{ $whm->page_title }}
    </a>
</li>
@endforeach

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
</ul>
</nav>
</div>
<ul class="header-social-icons social-icons d-none d-sm-block">
    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                class="fab fa-facebook-f"></i></a>
    </li>
</ul>
<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
    <i class="fas fa-bars"></i>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</header>
</div> --}}

@include('welcome.layouts.guestWelcomeHeaderAlt')

<div class="container-fluid py-5 w-100"
    style=" background:url({{ asset('img/form-bg.jpg')  }}) ; background-repeat: no-repeat; background-size: cover;">
    <div class="row justify-content-center">
        <div class="col-md-6 mx-md-auto">
            {{-- <img class="rounded w-100" style="opacity: 0.8" src="{{ asset('img/mrg.jpg') }}" alt=""> --}}
        </div>
        <div class="col-md-6 pt-5 mx-md-auto">
            <div class="col-lg-12 order-1 order-lg-2">
                <div class=" row justify-content-md-center">
					<div class=" ">
                    <div class=" featured-box featured-box-primary text-left mt-0">
                    <div class="box-content text-center">
                        <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Marriage Solution
                            BD</h4>
                        <hr>
                        <form action="/" id="frmSignUp" method="post" class="pb-3 needs-validation">
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                        maxlength="100" class="form-control" name="name" placeholder="First Name"
                                        required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" value="" data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control" name="email" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    {{-- <label class="font-weight-bold text-dark text-2">Country</label> --}}
                                    <select class="form-control">
                                        <option value="" selected disabled>Seeking Alliance for</option>
                                        <option value="">Self</option>
                                        <option value="">Daughter</option>
                                        <option value="">Son</option>
                                        <option value="">Brother</option>
                                        <option value="">Sister</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    {{-- <label class="font-weight-bold text-dark text-2">E-mail Address</label> --}}
                                    <input type="text" value="" placeholder="email address"
                                        class="form-control form-control-lg" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                        maxlength="100" class="form-control" name="name" placeholder="+880" required>
                                </div>
                                <div class="form-group col-lg-8">
                                    <input type="text" value="" data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control" name="email" placeholder="phone number" required>
                                </div>
                            </div>
                            <div class="text-center pt-2">
                                <button class="btn btn-default btn-lg" type="reset">Reset</button>
                                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>



<div class="text-center">
    <div class="text-center w3-large p-2 w3-text-black"
        style="background: url({{ asset('img/bg-ribon.jpg') }}) repeat;min-height: 20px;width: 100%;font-weight:bold;">
        Marriage Solution BD: The Largest Matrimony Organization in Bangladesh
    </div>

</div>

{{-- <section>
    <div style="min-height: 300px; background: url({{ asset('https://www.marriagesolutionbd.com/storage/media/image/p12G21020133.png
    ') }}); background-repeat: no-repeat;
  background-size: 100%;" >
    <div class="text-center">
        <img src="https://www.marriagesolutionbd.com/storage/media/image/8aQK21020140.png
  " alt="" >
    </div>
    <div class="text-center w3-round-xxlarge w3-white- bg-semitransparent p-3 mt-4 w3-card" style="background-color: #8910d454">
        <div class="appear-animation w3-tag w3-white- w3-round-xlarge mb-3 mt-n5 w3-card"
        data-appear-animation="fadeInDown" data-appear-animation-delay="100" style="background-color: #f5f5f5e6">
            <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
            <br>
            <p class="w3-xlarge w3-text-dark-gray lob-font "><b>Welcome</b></p>
        </div>

        <div class="appear-animation text-white w3-medium w3-shadow w3-round-xlarge text-justify px-md-4 bold " data-appear-animation="fadeInRight" data-appear-animation-delay="300">
            
                Dear customers and well wishers, <br>
                Assalamu Alaikum, marriage is a great deed from a religious point of view. If any of your relatives, friends and colleagues is getting married, convey the message of Marriage Solution BD to them. According toevery religion, marriage is a sacred process. Be patient and inspire others in this full-fledged humanitarian initiative. May you and your family be protected in the shadow of Allah's mercy.

        </div>
        <div class="appear-animation text-white text-right w3-medium bold"
        data-appear-animation="fadeInLeft" data-appear-animation-delay="300"> <i> "Service is good worship, come forward in the service of humanity, you also takepart in the great service"
        </i>
        </div> 
    </div>
    </div>
    
</section> --}}
<section
    class="section-overlay-opacity section-overlay-opacity-scale-8 parallax- section section-parallax section-center pb-0 my-0"
    data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('img/back2.png') }}">
    <div class="container">
        <div class="section-space bg-prods">
            <div class="container">
                <div class="col-md-10 offset-md-1 LV-content">
                    <div class="row">
                        <div class="col-xs-12">
                            {{-- <div class="appear-animation w3-tag mb-3 px-4 py-3 w3-xxlarge w3-round-xlarge text-center w3-text-black"
                            data-appear-animation="fadeInDown" data-appear-animation-delay="100"
                            style="background: url({{ asset('img/bg-ribon.jpg') }}) repeat;min-height: 20px;font-weight:bold;"
                            >
                                بسم الله الرحمن الرحيم
                                
                            </div> --}}
                            <div class="text-center">
                                <img src="https://www.marriagesolutionbd.com/storage/media/image/8aQK21020140.png" alt="">
                            </div>
                            <div class="text-center w3-round-xxlarge w3-white- bg-semitransparent p-3 mt-4 w3-card" >
                                {{-- <div class="appear-animation w3-tag w3-white- w3-round-xlarge mb-3 mt-n5 w3-card"
                                data-appear-animation="fadeInDown" data-appear-animation-delay="100" style="background-color: #f5f5f5e6">
                                    <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
                                    <br>
                                    <p class="w3-xlarge w3-text-dark-gray lob-font "><b>Welcome</b></p>
                                </div> --}}

                                <div class="lob-font appear-animation text-white w3-medium w3-shadow w3-round-xlarge text-justify px-md-4 bold " data-appear-animation="fadeInRight" data-appear-animation-delay="300" >
                                    {{-- <p class="w3-xlarge lob-font text-center text-white"><b>Welcome</b></p> --}} <p style="color: #ffa500e3; font-size:19px;">
                                        Dear customers and well wishers, <br>
                                        Assalamu Alaikum, marriage is a great deed from a religious point of view. If any of your relatives, friends and colleagues is getting married, convey the message of Marriage Solution BD to them. According toevery religion, marriage is a sacred process. Be patient and inspire others in this full-fledged humanitarian initiative. May you and your family be protected in the shadow of Allah's mercy.
                                    </p>
                                </div>
                                <div class="appear-animation text-white text-right w3-medium bold"
                                data-appear-animation="fadeInLeft" data-appear-animation-delay="300"> 
                                <p style="color: #fff; font-size: 16px;">
                                    <i> "Service is good worship, come forward in the service of humanity, you also takepart in the great service"
                                    </i>
                                </p>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="mb-0" style="background-color: #eee">
    <div class="container py-5">
        <div class="text-center w3-round-xxlarge w3-white p-3 w3-card">
            <div class="appear-animation w3-tag w3-white w3-round-xlarge mb-3 mt-n5 w3-card"
            data-appear-animation="fadeInDown" data-appear-animation-delay="100">
                <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
                <br>
                <p class="w3-xlarge w3-text-dark-gray lob-font "><b>Marriage Counselling Services</b></p>
            </div>
            <div class="col-xs-12">
                {{-- <div class="w3-tag w3-white py-2 px-3 w3-border w3-round-large">
                    <h1 class="w3-text-red m-0 p-0 bold" style="color:#c246c2; text-shadow: 1px 4px 6px #def, 0 0 0 #000, 1px 4px 6px #def;">
                        
                    </h1>
                </div> --}}
                <div class="p-3 mt-3 w3-round-xlarge w3-black" style="background: url(img/bg-home.jpg) no-repeat center;background-size: cover; background-height: 100%;"
                >
                    <div class="appear-animation w3-medium text-justify"        data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                        A GROUP OF HIGHLY EDUCATED, SMART, LOYAL, HONEST, HUMBLE, SKILLED, EXPERIENCED, CLEVER AND EXECUTIVE IS WORKING TOWARDS MARRIAGE AND FAMILY FORMATION OF WEALTHY AND ELITE FAMILIES, ALSO MARRIAGE SOLUTION BDIS NOW PRROVIDING MATCHING / COUNSELLING SERVICES.
                    </div>
                    <div class="appear-animation text-right w3-large" data-appear-animation="fadeInRight" data-appear-animation-delay="300">“Change the view, life will change”</div> 
                </div>
                <div class="appear-animation row my-4 px-3 justify-content-center"
                data-appear-animation="fadeInUp" data-appear-animation-delay="500">
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 p-0 m-0 border" style="background-color: #673003; margin: auto; height: 100px; color: white;">
                        <img class="" width="80%" style="margin-top: -20px !important; border: 4px solid #5a2a03" src="{{ asset('img/qr.png') }}" alt="">
                    </div>
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 border" style="background-color: #673003; margin: auto; height: 100px; color: white;"   >
                        <div class="w3-text-medium pt-2">
                            <span style="color: gold; font-weight: bold;"> ASAD GATE</span> <br>
                            01720504504 <br>
                            01633036062
                        </div>
                    </div>
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 border" style="background-color: #673003; margin: auto; height: 100px; color: white;" >
                        <div  class="w3-text-medium pt-2">
                            <span style="color: gold; font-weight: bold;"> GULSHAN</span> <br>
                            01777118606 <br>
                            01907550361
                        </div>
                    </div>
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 border" style="background-color: #673003; margin: auto; height: 100px; color: white;" >
                        <div class="w3-text-medium pt-2">
                            <span style="color: gold; font-weight: bold;"> UTTARA</span> <br>
                            01705761333 <br>
                            01776687989
                        </div>
                    </div>
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 border" style="background-color: #673003; margin: auto; height: 100px; color: white;" >
                        <div class="w3-text-medium pt-2">

                            <span style="color: gold; font-weight: bold;"> KAKRAIL</span> <br>
                            01780414897 <br>
                            01319378112
                        </div>
                    </div>
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 border" style="background-color: #673003; margin: auto; height: 100px; color: white;" >
                        <div class="w3-text-medium pt-2">

                            <span style="color: gold; font-weight: bold;"> CHATTOGRAM </span><br>
                            01617014140 <br>
                            01617013455
                        </div>
                    </div>
                </div>
            </div>
            {{-- <p class="text-justify w3-medium">Marriage Solution BD, the world's largest online matchmaking site
                was founded
                with one simple objective - to provide a superior matchmaking experience all over the world. The company
                pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony
                category
                after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has
                touched the lives of 1 Million people all over the world and helped over 3 Million people find their
                matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world's 50
                Most Innovative Companies by Fast Company.
            </p> --}}
        </div>
    </div>
</div>


@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function(){
  });
</script>
@endpush

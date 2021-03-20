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
        /*background-image: linear-gradient(to top, #49082a 0%, #170104 100%);*/
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
</style>
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

                <div class="tp-caption" data-x="center" data-hoffset="['-170','-170','-170','-350']" data-y="center"
                    data-voffset="['-50','-50','-50','-75']" data-start="1000"
                    data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"
                    style="z-index: 5;"><img src="img/slides/slide-title-border.png" alt=""></div>

                {{-- <div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center"
                        data-voffset="['-50','-50','-50','-75']" data-start="700" data-fontsize="['16','16','16','40']"
                        data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;"
                        style="z-index: 5;">WE WORK HARD AND PORTO HAS</div> --}}

                {{-- <div class="tp-caption" data-x="center" data-hoffset="['170','170','170','350']" data-y="center"
                        data-voffset="['-50','-50','-50','-75']" data-start="1000"
                        data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"
                        style="z-index: 5;"><img src="{{ asset('msbd\images\banners\banner1.jpg') }}" alt="">
    </div> --}}

    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
        data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']"
        style="z-index: 5;"> <span style="opacity: .65;">Marriage Solution
            BD</span>
    </div>

    <div class="tp-caption font-weight-light ws-normal text-center"
        data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
        data-x="center" data-y="center" data-voffset="['60','60','60','105']" data-width="['530','530','530','1100']"
        data-fontsize="['18','18','18','40']" data-lineheight="['26','26','26','45']"
        style="color: #b5b5b5; z-index: 5;"> <span style="opacity: .65;"> A
            <strong class="text-color-light">Reliable </strong>Matrimonial Organization </span>
    </div>

    <div class="tp-dottedoverlay tp-opacity-overlay"></div>
    </li>
    </ul>
</div>
</div>

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
                                                <a class="dropdown-item"
                                                    href="{{ route('page', [$whm->id, $whm->route_name]) }}">
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

<div class="container-fluid py-5 w-100"
    style=" background:url({{ asset('img/form-bg.jpg')  }}) ; background-repeat: no-repeat; background-size: cover;">
    <div class="row justify-content-center">
        <div class="col-md-6 mx-md-auto">
            {{-- <img class="rounded w-100" style="opacity: 0.8" src="{{ asset('img/mrg.jpg') }}" alt=""> --}}
        </div>
        <div class="col-md-6 pt-5 mx-md-auto">
            <div class="col-lg-12 order-1 order-lg-2">
                <div class=" row justify-content-md-center"">
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
    <div class="text-center w3-xlarge p-2 w3-text-black"
        style="background: url({{ asset('img/bg-ribon.jpg') }}) repeat;min-height: 20px;width: 100%;font-weight:bold;">
        Marriage Solution BD: The Largest Matrimony Organization in Bangladesh
    </div>

</div>

<section
    class="section-overlay-opacity section-overlay-opacity-scale-8 parallax section section-parallax section-center my-0"
    data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('img/Elite-bg1.jpg') }}">
    <div class="container">
        <div class="section-space bg-prods">
            <div class="container text-center">
                <div class="col-md-10 offset-md-1 LV-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="prod-ops">
                                <div class="total-single-service-area">
                                    <div class="single-services-area">
                                        <div class="service-icon"><img src="{{ asset('img/msbdElite.png') }}"
                                                width="180" alt=""></div>
                                        <h3>Exclusive matchmaking service<br> for the elite</h3>
                                        {{-- <div class="read-more">
                                            <a href="">Know More</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="prod-ops">
                                <div class="total-single-service-area">
                                    <div class="single-services-area">
                                        <div class="service-icon"><img src="{{ asset('img/msbdVivah.png') }}"
                                                width="180" alt=""></div>
                                        <h3>Marriage Solution BD <span> guarantees </span> &nbsp to get you the best
                                            match
                                            <strong></strong></h3>
                                        {{-- <div class="read-more">
                                            <a href="">Know More</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container pt-5">
    <div class="text-center">
        <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
        <br>
        <p class="w3-large w3-text-dark-gray lob-font"><b>What we do for you</b></p>
        <p class="text-justify">Marriage Solution BD, the world's largest online matchmaking site was founded with one
            simple objective - to provide a superior matchmaking experience all over the world. The company pioneered
            online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more
            than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the
            lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst
            many other awards MarriageSolutionBD.com was recently recognized amongst the world's 50 Most Innovative
            Companies by Fast Company.</p>
    </div>
</div>



@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function(){
  });
</script>
@endpush

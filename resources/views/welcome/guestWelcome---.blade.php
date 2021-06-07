@extends('welcome.layouts.guestWelcomeMaster')

@section('title')

@if ($websiteParameter->title)
{!! $websiteParameter->title !!}
@else
{{ env('APP_NAME_BIG') }} | Matrimony Service in Bangladesh | Marriage Media Service provider in Bangladesh |
Matchmaker Service in Bangladesh
@endif

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


{{-- <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
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
                </div> --}}

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

    {{-- <div class="tp-dottedoverlay tp-opacity-overlay-"></div>
    </li>
    </ul>
</div>
</div> --}}
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

<div class="container py-5 w-100"
style=" background:url({{ asset('-img/form-bg.jpg')  }}); background-repeat: no-repeat; background-size: cover;">
<div class="row mb-4">
    <div class="col-md-5 m-auto">
        <div class="text-center">
            <img style="max-width: 100%" src="{{ asset('img/Bishmillah.png') }}" alt="">
        </div>
    </div>
</div>
<div class="row">
        <div class="col-md-6 shadow rounded p-0 ">
            <div class="text-center py-2 ">
                <img class="px-5" style="max-width: 90%; margin: auto; " src="{{ asset('img/msbd_logo_big.png') }}">
            </div>
            <div class="h2 text-center py-2 bold">
                {{ __('A Reliable Matrimonial Organization') }}
            </div>
            <div class="h2 w3-text-green font-weight-bold px-5 pt-2 text-center kalpurush" style="margin-left: -135px !important">
                “দৃষ্টিভঙ্গি বদলান
            </div>
            <div class="h2 w3-text-green font-weight-bold px-5 pb-2 text-center kalpurush" style="margin-right: -135px !important">
                জীবন বদলে যাবে”
            </div>
            <div class="text-center">
                <div class="h4 bold w3-round-large  mx-3 py-2 text-white w3-tag" style="background-color: #3F559E;">
                    {{ __('MARRIAGE COUNCELING SERVICES') }}
                </div>
            </div>
        </div>
        <div class="col-lg-6 shadow rounded p-3 text-center">
            <img class="rounded shadow" style="max-width: 100%; max-height:400px; margin: auto;" src="{{ asset('img/bride_groom.png') }}">
        </div>
    </div>
</div>



<div class="text-center">
    <div class="text-center w3-large p-2 w3-text-white"
        style="background: rgb(138, 2, 138) url({{ asset('img/-bg-ribon.jpg') }}) repeat;min-height: 20px;width: 100%;font-weight:bold;">
        <span class="w3-text-white h4" style="text-shadow: 1px 4px 6px rgb(42, 104, 167), 0 0 0 rgb(245, 244, 244), 1px 4px 6px rgb(21, 75, 130);">
             {{ __('Marriage Solution BD') }}: {{ __('The Largest Matrimony Organization in Bangladesh') }}
        </span>
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
{{-- <section
    class="section-overlay-opacity section-overlay-opacity-scale-8 parallax- section section-parallax section-center pb-0 my-0"
    data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('img/back2.png') }}" style="background-color: white !important">
    <div class="container">
        <div class="section-space bg-prods">
            <div class="container">
                <div class="col-md-10 offset-md-1 LV-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="appear-animation w3-tag mb-3 px-4 py-3 w3-xxlarge w3-round-xlarge text-center w3-text-black"
                            data-appear-animation="fadeInDown" data-appear-animation-delay="100"
                            style="background: url({{ asset('img/bg-ribon.jpg') }}) repeat;min-height: 20px;font-weight:bold;"
                            >
                                بسم الله الرحمن الرحيم
                                
                            </div>
                            <div class="text-center">
                                <img style="max-width: 100%" src="https://www.marriagesolutionbd.com/storage/media/image/8aQK21020140.png" alt="">
                            </div>
                            <div class="text-center w3-round-xxlarge w3-white- bg-semitransparent p-3 mt-4 w3-card" >
                                <div class="appear-animation w3-tag w3-white- w3-round-xlarge mb-3 mt-n5 w3-card"
                                data-appear-animation="fadeInDown" data-appear-animation-delay="100" style="background-color: #f5f5f5e6">
                                    <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
                                    <br>
                                    <p class="w3-xlarge w3-text-dark-gray lob-font "><b>Welcome</b></p>
                                </div>

                                <div class="lob-font appear-animation text-white w3-medium w3-shadow w3-round-xlarge text-justify px-md-4 bold " data-appear-animation="fadeInRight" data-appear-animation-delay="300" >
                                    <p class="w3-xlarge lob-font text-center text-white"><b>Welcome</b></p> 
                                    <div style="color: #ffa500e3; font-size:19px;">
                                        Dear customers and well wishers, <br>
                                        Assalamu Alaikum, marriage is a great deed from a religious point of view. If any of your relatives, friends and colleagues is getting married, convey the message of Marriage Solution BD to them. According toevery religion, marriage is a sacred process. Be patient and inspire others in this full-fledged humanitarian initiative. May you and your family be protected in the shadow of Allah's mercy.
                                    </div>
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
</section> --}}

<section
    class="section-overlay-opacity- section-overlay-opacity-scale-8- parallax- section section-parallax section-center  my-0"
    data-plugin-parallax data-plugin-options="{'speed': 1.5}" style="background-color: white !important">
    <div class="container">
    <div class="w3-tag w3-white py-2 pt-3 px-3 w3-border w3-round-large">
        <div class="w3-text-red m-0 p-0 bold kalpurush w3-xxlarge" style="color:#c246c2; text-shadow: 1px 4px 6px #def, 0 0 0 #000, 1px 4px 6px #def;">
            {{ __('Introduction') }}
        </div>
    </div>
        <img class="float-right" style="width: 140px;" src="{{ asset('img/Mujib_100_Logo.png') }}" alt="">
    </div>
    <div class="container mt-4 text-justify text-dark w3-medium kalpurush w3-large">
        @if(app()->getLocale() == 'bn')
        সম্মানিত গ্রাহকবৃন্দ ও প্রিয়শুভানুধ্যায়ীগন, <br>
        আসসালামুআলাইকুম,<br>
        “সেবা উত্তম এবাদত, মানবতার সেবায় এগিয়ে আসুন, মহৎ সেবায় আপনিও অংশ নিন”<br>

        ম্যারেজ সলিউশন বিডি একটি সেবা মূলক প্রতিষ্ঠান। যার রেজিস্ট্রেশন নং-05-85865 এবং এর প্রতিষ্ঠাকাল 12.12.12। প্রতিষ্ঠানটির নাম দিয়ে তার কর্ম্ পরিচয়। বিবাহ এবং পরিবার গঠন সম্পর্কিত যাবতীয় বিষয় নিয়ে তার কর্ম্ পরিকল্পনা। আর এ কারনে বাংলাদেশের বিবাহ সংক্রান্ত পরিষেবা এ ম্যারেজ সলিউশন বিডি একটি বৈশিষ্ট্য হিসাবে প্রতিষ্ঠিত। যুগের দাবী অনুযায়ী প্রতিষ্ঠানটি এ পর্য্ন্ত সফলতার সাথে বহুসংখ্যক বিবাহ কার্য্ সুসম্পন্ন করেছে। বিবাহত্তোর সুখী ও আদর্শ্ পরিবার গঠনে প্রতিষ্ঠানটি নিখুঁত ভাবে কাজ করে যাচ্ছে। সামাজিক ও জাতীয় পর্যায়ে একক প্রতিষ্ঠান হিসেবে সেবা প্রদান করারেই বিরল দৃষ্টান্ত স্থাপন করেছে ম্যারেজ সলিউশন বিডি।
        @else
        Dear customers and well wishers, <br> 
        Assalamualaikum, <br> 
        "Service is good worship, come forward in the service of humanity, you also take part in the great service" <br>
        Marriage  Solution  BD  is  a  service  organization.  Whose  registration  is  No.  05-85865  and  its  date  of  establishment  is 12.12.12. His work is known by the name of the organization. His work plan on all matters related to marriage and family formation. And for this reason, Marriage Solution BD has been established as a feature in the marriage related services in Bangladesh. The company has so far successfully completed a large number of marriages, as Yuga claims. The organization is  working  perfectly  to  build  a happy  and  ideal  family  after  marriage.  Marriage  Solution  BD  has  set  a  rare  example  of providing services as a single entity at the social and national level.
        @endif
    </div>
</section>

<div class="mb-0" style="background-color: #eee">
    <div class="container py-5">
        <div class="text-center w3-round-xxlarge w3-white p-3 w3-card">
            {{-- <div class="appear-animation w3-tag w3-white w3-round-xlarge mb-3 mt-n5 w3-card"
            data-appear-animation="fadeInDown" data-appear-animation-delay="100">
                <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
                <br>
                <p class="h2 lob-font " style="color: red"><b>ব্যবস্থাপনা ও সাংগঠিন কাঠামো</b></p>
            </div> --}}
            <div class="col-xs-12">
                <div class="w3-tag w3-white py-2 pt-3 px-3 w3-border w3-round-large">
                    <div class="w3-text-red m-0 p-0 bold kalpurush w3-xxlarge" style="color:#c246c2; text-shadow: 1px 4px 6px #def, 0 0 0 #000, 1px 4px 6px #def;">
                        {{ __('Management and Organizational Structure') }}
                    </div>
                </div>
                <div class="p-2 mt-3 w3-round-xlarge" style="background: #3F559E url(-img/bg-home.jpg) no-repeat center;background-size: cover; background-height: 100%;"
                >
                    <div class="appear-animation w3-medium text-left w3-text-white p-5 kalpurush w3-large"        data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                        @if(app()->getLocale() == 'bn')
                        বর্তমানে Marriage Solution BD এর প্রধান কার্যালয় ঢাকার আসাদগেট, আড়ং সংলগ্ন লালমাটিয়া। এছাড়া প্রতিষ্ঠানটির আরো শাখা অফিসসমূহ গুলশান, উত্তরা, কাকরাইল ও চট্টগ্রাম বিভাগে রয়েছে। অফিসগুলোতে মার্কেটিং শাখা, কাস্টমার সাপোর্ট শাখা ও আইটি সাপোর্ট শাখা সহ কর্পোরেট সার্ভিসের সমস্ত ব্যবস্থা রয়েছে। প্রতিষ্ঠানটির সকল গ্রাহকদের মাঝে সঠিক প্রক্রিয়ার মাধ্যমে শতভাগ সেবা নিশ্চিত করার লক্ষ্যে সমাজের একদল উচ্চশিক্ষিত, মেধাবী, স্মার্ট, দক্ষ, অনুগত, সৎ, যোগ্য, অভিজ্ঞ, বিনয়ী, সহমর্মী ও চৌকসকর্মী তরুন-তরুনীদের নিয়ে দল গঠন করেছে। যারা দক্ষতা, আন্তরিকতা ও দায়িত্বের সাথে গ্রাহকের ব্যক্তিগত নিরাপত্তা বজায় রাখার মাধ্যমে নির্ভূল তথ্য প্রদানে প্রতিনিয়ত কাজ করে যাচ্ছে। ম্যারেজ সলিউশন বিডি এর সাফল্যের জন্য পরম করুনাময়ের কাছে অশেষ কৃতজ্ঞতা জ্ঞাপন করছি। ম্যারেজ সলিউশন বিডি এর সকল গ্রাহক, প্রতিনিধি ও শুভানুধ্যায়ীগনকে অন্তরের অন্তঃস্থল থেকে কৃতজ্ঞতা, শ্রদ্ধা, ভালোবাসা ও দোয়া রইল। 
                        @else
                        At present Marriage Solution BD is headquartered at Asadgate in Dhaka, Lalmatia adjacent to Arang. Besides, the company has more branch offices in Gulshan, Uttara, Kakrail and Chittagong divisions. The offices have all the arrangements for corporate services including marketing branch, customer support branch and IT support branch. In order to ensure 100% service among all the customers of the organization through proper process, a group of highly educated, talented, smart, skilled, loyal, honest, competent, experienced, humble, compassionate and smart young people have been formed. Who are constantly working to provide accurate information by maintaining customer personal security with efficiency, sincerity and responsibility. I would like to express my sincere gratitude to Absolute Merciful for the success of Marriage Solution BD. Gratitude, respect, love and blessings from the bottom of my heart to all the customers, representatives and well-wishers of Marriage Solution BD.
                        @endif
                    </div>
                    {{-- <div class="appear-animation text-right w3-large" data-appear-animation="fadeInRight" data-appear-animation-delay="300">“Change the view, life will change”</div>  --}}
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="mb-0" style="background-color: #eee">
    <div class="container py-5">
        <div class="text-center w3-round-xxlarge w3-light-grey p-3 w3-card" >
            <div class="col-xs-12">
                <div class="w3-tag w3-white py-2 px-3 w3-border w3-round-large">
                    <div class="h2 w3-text-red m-0 p-0 bold" style="color:#c246c2; text-shadow: 1px 4px 6px #def, 0 0 0 #000, 1px 4px 6px #def;">
                        {{ __('Featured Profiles') }}
                    </div>
                </div>
                <div class="p-2 mt-3 w3-round-xlarge" style=" background-height: 100%;"
                >
                    <div class="appear-animation w3-medium text-justify w3-text-white p-5"   data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                        
                        <div class="owl-carousel owl-theme-" data-plugin-options="{'center': true, 'loop': true, 'nav': false, 'dots': true, 'margin': 10, 'autoplay': true}">
                            @foreach ($featuredProfiles as $profile)
                            <div class="card rounded px-2 py-1 my-3 w3-hover-shadow">
                                <div class="w3-display-middle" style="top: 34% !important;">
                                    <i class="fa fa-lock fa-2x w3-text-light-gray"></i>
                                </div>
                                <img alt="" class="img-fluid rounded-" src="{{ route('imagecache', [ 'template'=>'ppsmbl','filename' => $profile->latestCheckedPP() ]) }}">
                                <div class="bold text-center mt-n5">
                                    <div class="rounded p-1">
                                        ID # {{ $profile->id }}
                                    </div>
                                </div>
                                <div class="mt-3 w3-text-black px-2 py-2 text-center">
                                    <span>0 {{ __('Followers') }}</span> | <span> 0 {{ __('Following') }}</span>
                                </div>
                                <div class="text-center pb-2">
                                    <a href="#" class="btn btn-primary btn-sm btn-3d w3-hover-shadow">{{ __('Full Profile') }}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-0" style="background-color: #eee">
    <div class="container py-2">
        <div class="text-center w3-round-xxlarge w3-white p-3 w3-card">
            {{-- <div class="appear-animation w3-tag w3-white w3-round-xlarge mb-3 mt-n5 w3-card"
            data-appear-animation="fadeInDown" data-appear-animation-delay="100">
                <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
                <br>
                <p class="w3-xlarge w3-text-dark-gray lob-font "><b>ব্যবস্থাপনা ও সাংগঠিন কাঠামো</b></p>
            </div> --}}
            <div class="col-xs-12">
                <div class="appear-animation row my-4 px-3 justify-content-center"
                data-appear-animation="fadeInUp" data-appear-animation-delay="500">
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 p-0 m-0 border" style="background-color: red; margin: auto; height: 100px; color: white;">
                        <img class="" width="80%" style="margin-top: -20px !important; border: 4px solid #5a2a03" src="{{ asset('img/qr.png') }}" alt="">
                    </div>
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 border" style="background-color: red; margin: auto; height: 100px; color: white;"   >
                        <div class="w3-text-medium pt-2">
                            <span style="color: gold; font-weight: bold;"> {{ __('ASAD GATE') }}</span> <br>
                            01720504504 <br>
                            01633036062
                        </div>
                    </div>
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 border" style="background-color: red; margin: auto; height: 100px; color: white;" >
                        <div  class="w3-text-medium pt-2" style="line-height: normal;">
                            <span style="color: gold; font-weight: bold;"> {{ __('GULSHAN') }}</span> <br>
                            01777118606 <br>
                            01907550361 <br>
                            01705761333
                        </div>
                    </div>
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 border" style="background-color: red; margin: auto; height: 100px; color: white;" >
                        <div class="w3-text-medium pt-2">
                            <span style="color: gold; font-weight: bold;"> {{ __('UTTARA') }}</span> <br>
                            01791266153 <br>
                            01776687989
                        </div>
                    </div>
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 border" style="background-color: red; margin: auto; height: 100px; color: white;" >
                        <div class="w3-text-medium pt-2">

                            <span style="color: gold; font-weight: bold;"> {{ __('KAKRAIL') }}</span> <br>
                            01780414897 <br>
                            01319378112
                        </div>
                    </div>
                    <div class="col-md-2 div col-sm-3 col-xs-6 col-6 border" style="background-color: red; margin: auto; height: 100px; color: white;" >
                        <div class="w3-text-medium pt-2">

                            <span style="color: gold; font-weight: bold;"> {{ __('CHATTOGRAM') }} </span><br>
                            01617014140 <br>
                            01617013455
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

{{-- <div class="mb-0" style="background-color: #eee">
    <div class="container py-5">
        <div class="text-center w3-round-xxlarge w3-white p-3 w3-card">
            <div class="appear-animation w3-tag w3-white w3-round-xlarge mb-3 mt-n5 w3-card"
            data-appear-animation="fadeInDown" data-appear-animation-delay="100">
                <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
                <br>
                <p class="w3-xlarge w3-text-dark-gray lob-font "><b>Marriage Counselling Services</b></p>
            </div>
            <div class="col-xs-12">
                <div class="w3-tag w3-white py-2 px-3 w3-border w3-round-large">
                    <h1 class="w3-text-red m-0 p-0 bold" style="color:#c246c2; text-shadow: 1px 4px 6px #def, 0 0 0 #000, 1px 4px 6px #def;">
                        
                    </h1>
                </div>
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
                            01791266153 <br>
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
            <p class="text-justify w3-medium">Marriage Solution BD, the world's largest online matchmaking site
                was founded
                with one simple objective - to provide a superior matchmaking experience all over the world. The company
                pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony
                category
                after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has
                touched the lives of 1 Million people all over the world and helped over 3 Million people find their
                matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world's 50
                Most Innovative Companies by Fast Company.
            </p>
        </div>
    </div>
</div> --}}


@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function(){
  });
</script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script>
        // $(document).ready(function () {
        //     $("#monthly_income").focus(function () {
        //         $("monthly_income_tips").css("display", "inline").fadeOut(2000);
        //     })

        // })
        $(document).ready(function(){
              $("#monthly_income").focus(function(){
                $("#monthly_income_tips").css("display", "inline")
                // .fadeOut(5000);
              });
            });
    </script>
@endpush

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
<link href="{{ asset('css/LandingPage.css') }}" rel="stylesheet">
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



<div class="z-index-1 appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="100">
  <div class="owl-carousel owl-theme full-width owl-loaded owl-drag owl-carousel-init m-0" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false,
  {{-- 'animateOut':'fadeOut', --}}
   {{-- 'animateOut': 'slideOutLeft', 'animateIn': 'slideInRight', --}} 'autoplayHoverPause':false,  'autoplay':true, 'autoplayTimeout': 5000}">
   @foreach ($sliders as $slider)
       
   <div>
          <img src="{{ route('imagecache', [ 'template'=>'cpxlg','filename' => $slider->image_name ]) }}"  class="img-fluid" alt="">

          <div class="row slider-custom-caption" style="margin-top: -60px;">

                      
            <div class="col-md-12">

                <div class="container p-0">
                    
                  @if ($slider->pp_url || $slider->title || $slider->description)
                      
                <div class="w3-card-">
            <div class="card- w3-card-4- px-5 rounded slider-card-bg-color-" style="background-color:#fef5ff">
                <div class="card- shadow- card1- mx-auto- w3-animate-zoom w-100 p-0" style="background-color:#fef5ff">
                    <div class="row g-0">
                      <div class="col-lg-2 col-md-3 pt-2">
                        <img
                          src="{{ asset($slider->pp_url) }}"
                          class="m-auto p-2 d-flex w3-circle"
                          style="max-width: 100px; max-height: 100px;"
                          alt=""
                        />
                      </div>
                      <div class="col-lg-10 col-md-9 pl-0">
                        <div class="card-body pt-4 pb-0 pl-0">
                          <div class="card-title fw-bold bold w3-large p-0 text-dark pl-0"  style="color: #605154; font-weight: 400 !important;">{{ $slider->title }}</div>
                          <p class="fw-lighter fst-italic w3-medium text-dark">
                            {{ $slider->description }}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
                
        @endif
                </div>
            </div>
        </div>
          
      </div>  
@endforeach
  </div>
</div>


{{-- <!-- Hero -->
<div class="container hero">
    <div class="hero_shadows mx-auto"></div>
    <div>
      <img
        src="{{ asset('img/NowrinFaruki.png') }}"
        class="p-0 hero_img img-fluid"
        alt=""
      />
    </div>
    <div class="hero_front"></div>
    <div class="card shadow card1 mx-auto">
      <div class="row g-0">
        <div class="col-md-1">
          <img
            src="{{ asset('img/NowrinFaruki1.png') }}"
            class="mx-3 mt-4 d-flex"
            height="86px"
            width="86px"
            alt="..."
          />
        </div>
        <div class="col-md-11">
          <div class="card-body mt-3">
            <div class="card-title fw-bold">Nowrin & Faruki</div>
            <p class="fw-lighter fst-italic">
              "Lorem ipsum dolor sit amet, consectetur adi pisi cing elit,
              sed do eiusmod tempor exercitationemut labore et dolore magna
              aliqua. Ut enim ad consequatur quis aliquip ex ea commodo
              consequat"
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- !Hero --> --}}
</header>
<!-- Intro -->
<div class="container intro">
  <div class="row">
    <div class="col-lg-4 col-md-12 col-sm-12">
      <h1 class="fw-bold">INTRODUCTION</h1>
      <div class="h1"></div>

      <p class="left_p">
        Let us assist you to choose your right life partner. 
      </p>
    </div>
    <div class="col-lg-8 col-md-12 col-sm-12">
      <p class="right_p w3-large">
        Marriage Solution BD's philosophy is to change attitudes and misconceptions about marriage media
of Bangladesh. We trust, changing to right attitude towards marriage will change lives. We believe
in integrity, reliability, trust and our far-reaching services to touch the hearts of millions across. We
are here to help! Our yearlong experiences will help the clients to match their potential better half.
We have successfully carried out – number of marriages till date!
      </p>
    </div>
  </div>
</div>
<!-- !Intro -->
<!-- Recent Stories -->
<div class="stories">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 str_left">
        <h1 class="fw-bold bold text-center">RECENT STORIES</h1>
        <p class="text-center">BRIDE & GROOM</p>
      </div>
      <div class="col-lg-8 col-md-12 col-sm-12 d-flex">
        <div class="v1"></div>
        <p class="my-auto p-4 str_right bold w3-medium">
          Every story has a wonderful bonding & We create the bonding of a life time
        </p>
      </div>
    </div>
  </div>
  <!-- Brid -->
  <div class="container">
    <div class="row pb-5 pt-5">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div
          class="card card2 mx-auto bg-transparent border-0 text-center"
          style="width: 20rem"
        >
          <img
            src="{{ asset('img/Group4.png') }}"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h1 class="card-title">Sabrina Amin</h1>
            <p class="card-text">
              "Our family is grateful to have the support from Marriage Solution BD. We have trusted their work ethics to build our relationships between families."
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-1 ml-5 v2"></div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <div
          class="card card2 bg-transparent border-0 text-center"
          style="width: 20rem"
        >
          <img
            src="{{ asset('img/Group5.png') }}"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h1 class="card-title">Sadman Sakib</h1>
            <p class="card-text">
              "Marriage Solution BD has really helped me and my family to find the right life partner. Their dedication and effort is remarkable."
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="container d-flex mx-auto w-75">
    <div
      class="card card2 mx-auto bg-transparent border-0 text-center"
      style="width: auto"
    >
      <img
        src="./img/Group 4.png"
        class="card-img-top w-50 mx-auto"
        alt="..."
      />
      <div class="card-body">
        <h1 class="card-title">Sabrina Amin</h1>
        <p class="card-text">
          "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
          nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
          erat, sed diam voluptua. At vero eos et accusam et justo duo
          dolores"
        </p>
      </div>
    </div>
    <div class="v2"></div>
    <div
      class="card card2 bg-transparent border-0 text-center"
      style="width: auto"
    >
      <img
        src="./img/Group 5.png"
        class="card-img-top w-50 mx-auto"
        alt="..."
      />
      <div class="card-body">
        <h1 class="card-title">Sadman Sakib</h1>
        <p class="card-text">
          "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
          nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
          erat, sed diam voluptua. At vero eos et accusam et justo duo
          dolores"
        </p>
      </div>
    </div>
  </div> -->
  <!-- !Brid -->
  <!-- Gallery -->
  <div class="container gallery">
    <div class="row">
      <div class="col">
        <h1 class="text-center">GALLERY OF HAPPY MOMENTS &nbsp;&nbsp; <a href="{{ route('welcome.photoGallery') }}" class="w3-medium btn-link p-2 rounded">View All <i class="fa fa-angle-right"></i></a></h1>
        <div class="owl-carousel owl-theme show-nav-title" data-plugin-options="{'items': 3, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
          @foreach ($photos as $photo)
          <div>
            <img alt="" class="img-fluid rounded" src="{{ route('imagecache', [ 'template'=>'cpxs','filename' => $photo->image_name ]) }}">
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
    {{-- <h1 class="my-5 fw-bold text-center">GALLERY OF HAPPY MOMENTS</h1> --}}

    {{-- <div class="row pb-5">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <img src="./img/20170104.png" class="img-fluid" alt="" />
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <img
          src="./img/118508456_3362110627189007_5297299518122107661_n.png"
          class="img-fluid"
          alt=""
        />
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <img src="./img/Saif (8).png" class="img-fluid" alt="" />
      </div>
    </div> --}}
  </div>
  <!-- !Gallery -->
</div>
<!-- !Recent Stories -->
<!-- Profiles -->
<div class="container profiles py-5">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div>
        <img src="{{ asset('img/Group15.png') }}" class="img-fluid" alt="" />
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <h1 class="fw-bold">FEATURED PROFILES</h1>
      <p class="fw-light w3-medium">
        Matching your partner is a wonderful process. Our specific profile creation will help you to reach your perfect match.
      </p>
      <a href="{{ route('welcome.membershipPackages') }}" class="btn fw-lighter">Become Our Member</a
      ><br />
      <div class="icon">
        <i class="bi bi-facebook"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-linkedin"></i>
        <i class="bi bi-instagram"></i>
        <i class="bi bi-youtube"></i>
      </div>
    </div>
  </div>
</div>
<!-- !Profiles -->



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

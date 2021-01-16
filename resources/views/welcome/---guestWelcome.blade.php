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
  .lob-font{
    font-family: 'Lobster Two', cursive; 
  }
  .lobster{
    font-family: 'Lobster Two', cursive;
    line-height: 95px;
    letter-spacing: 1px;
    font-weight: 800 !important;
    font-size: 79px;
  }
  .sd{
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
  .sda{
    padding-top: 8rem !important;
  }
  .timeline-box{
    opacity: 0.7;
    background-color: #ffff;
  }
</style>
@endpush

@section('header')
@include('welcome.layouts.guestWelcomeHeader')
@endsection
@section('content')
        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
          <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
            <ul>
              @foreach($sliders as $slider)
              <li class="slide-overlay slide-overlay-level-3"  data-transition="slide">
                <img src="{{asset('img/slider.jpeg')}}"  
                  alt=""
                  data-bgposition="center center" 
                  data-bgfit="cover" 
                  data-bgrepeat="no-repeat" 
                  class="rev-slidebg">

                <div class="tp-caption text-color-light negative-ls-1 lobster"
                  data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                  data-x="center"
                  data-y="center"
                  data-fontsize="['99','99','99','90']"
                  data-lineheight="['55','55','55','95']">Marriage Solution BD</div>
        
                <div class="tp-caption w3-xlarge font-weight-light ws-normal text-center sda"
                  data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                  data-x="center"
                  data-y="center" data-voffset="['60','60','60','105']"
                  data-width="['530','530','530','1100']"
                  data-fontsize="['18','18','18','40']"
                  data-lineheight="['26','26','26','45']"
                  style="color: #b5b5b5; "> 
                  @if ($loop->first)
                  <h2 class="married-date" style="transition: none 0s ease 0s; text-align: inherit; line-height: 38px; border-width: 0px; margin: 0px; padding: 4px 79px 8px; letter-spacing: 0px; font-weight: 400; font-size: 21px;">Elite Matrimony</h2>
                  @else
                  <h2 class="married-date" style="transition: none 0s ease 0s; text-align: inherit; line-height: 38px; border-width: 0px; margin: 0px; padding: 4px 79px 8px; letter-spacing: 0px; font-weight: 400; font-size: 21px;">Trusted Worldwide</h2>
                  @endif
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="text-center w3-xlarge p-2 w3-text-black" style="background: url({{ asset('img/bg-ribon.jpg') }}) repeat;min-height: 20px;width: 100%;font-weight:bold;">
    Marriage Solution BD: The Largest Matrimony Organization in Bangladesh
</div>
<br> <br>
<div class="container">  
  <div class="text-center">
      <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
      <br> 
      <p class="w3-large w3-text-dark-gray lob-font"><b>What we do for you</b></p>
      <p class="text-justify">Marriage Solution BD, the world's largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world's 50 Most Innovative Companies by Fast Company.</p>
  </div>
</div>
  <section style="background-color: #eee" class="p-lg-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-0">
          <div class="section section-text-light section-background section-center match-height border-top-0 m-0" style="background-image: url(demo/19.jpg); min-height: 260px;">
            <div class="container">
              <div class="row">
                <div class="col">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 p-0">
          <section class="section pl-4 pr-4 match-height border-top-0 w3-purple m-0">
            <div class="row">
              <div class="col">
                <h4 class="mb-0 lob-font w3-text-white">Company Introduction</h4>
                <p class="mb-0 w3-text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <br>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                <button type="button" class="btn btn-outline btn-rounded btn-secondary  btn-with-arrow mb-2 w3-white w3-text-purple" href="#">Read More<span><i class="fas fa-chevron-right"></i></span></button>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <br>
  
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-0">
          <section class="section pl-4 pr-4 match-height border-top-0 w3-purple m-0">
            <div class="row">
              <div class="col">
                <h4 class="mb-0 lob-font w3-text-white">Why Choose Us</h4>
                <p class="mb-0 w3-text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <br>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                <button type="button" class="btn btn-outline btn-rounded btn-secondary  btn-with-arrow mb-2 w3-white w3-text-purple" href="#">Read More<span><i class="fas fa-chevron-right"></i></span></button>
              </div>
            </div>
          </section>
        </div>
        <div class="col-lg-6 p-0">
          <section class="parallax section section-parallax match-height border-top-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('demo/15.jpg') }}" style="min-height: 260px;">
          </section>
        </div>
      </div>
    </div>
    <br>
  
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-0">
          <section class="parallax section section-parallax match-height border-top-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('demo/16.jpg') }}" style="min-height: 260px;">
          </section>
        </div>
        <div class="col-lg-6 p-0">
          <section class="section w3-purple pl-4 pr-4 match-height border-top-0 m-0">
            <div class="row">
              <div class="col">
                <h4 class="mb-0 w3-text-white lob-font">About Us</h4>
                <p class="mb-0 w3-text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <br>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                <button type="button" class="btn btn-outline btn-rounded btn-secondary  btn-with-arrow mb-2 w3-white w3-text-purple" href="#">Read More<span><i class="fas fa-chevron-right"></i></span></button>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <br>
  
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-0">
          <section class="section pl-4 pr-4 match-height border-top-0 w3-purple m-0">
            <div class="row">
              <div class="col">
                <h4 class="mb-0 w3-text-white lob-font">Our Speciality</h4>
                <p class="mb-0 w3-text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <br>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                <button type="button" class="btn btn-outline btn-rounded btn-secondary  btn-with-arrow mb-2 w3-white w3-text-purple" href="#">Read More<span><i class="fas fa-chevron-right"></i></span></button>
              </div>
            </div>
          </section>
        </div>
        <div class="col-lg-6 p-0">
          <section class="parallax section section-parallax match-height border-top-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('demo/10.jpg') }}" style="min-height: 260px;">
          </section>
        </div>
      </div>
    </div>
    <br>
  </section>
  <section id="clients" class="section section-background section-height-4 overlay overlay-dark border-0 m-0" style="background-image: url(demo/11.jpg); background-size: cover; background-position: center;">
   <div>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
          <br>
          <h2 class="font-weight-bold mb-2 lob-font w3-text-white">Why Are We Different</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          
          <div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
              <div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-light mb-0">
                <blockquote>
                  <p class="text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
                </blockquote>
                <div class="testimonial-author">
                  <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
                </div>
              </div>
            <div>
              <div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-light mb-0">
                <blockquote>
                  <p class="text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
                </blockquote>
                <div class="testimonial-author">
                  <p><strong class="font-weight-extra-bold text-2">- John Smith. Doe</strong></p>
                </div>
              </div>
            </div>
            <div>
              <div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
                <blockquote>
                  <p class="text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
                </blockquote>
                <div class="testimonial-author">
                  <p><strong class="font-weight-extra-bold text-2">- John Smith. William</strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
</section>
<div class="container pb-2">
  <div class="text-center">
    <br> <br>
    <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
    <br>
    <p class="w3-large w3-text-dark-gray lob-font w3-xlarge"><b>What We Do</b></p>
    <p class="text-justify">Marriage Solution BD, the world's largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world's 50 Most Innovative Companies by Fast Company.</p>
</div>
<div class="row justify-content-center mb-3">
  <button type="button" class="btn btn-rounded btn-secondary btn-lg mb-2 w3-purple">Standard</button>
  &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
  <button type="button" class="btn btn-rounded btn-secondary btn-lg mb-2 w3-purple">Vip</button>
  <br>
</div>
</div>

<div class="container-fluid py-4 px-0" style="background-image: url(demo/8.png); background-size: cover; background-position: center;">
  <div class="row">
    <div class="col">
      <div class="container">
        <div class="blog-posts">
          <section class="timeline">
            <div class="timeline-body">
              <div class="timeline-date">
                <h3 class="lob-font w3-xlarge w3-text-purple">Our Quality</h3>  
              </div>
              <article class="timeline-box left post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Professionals</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>
        
              <article class="timeline-box right post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Elite individuals</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>

              <article class="timeline-box left post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation"  data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Successful</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>
        
              <article class="timeline-box right post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Personality</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>

              <article class="timeline-box left post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Offline Procedure</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>
        
              <article class="timeline-box right post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Online Procedure</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>

              <article class="timeline-box left post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">An Unique Approach</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>
        
              <article class="timeline-box right post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Background Cheked And Verified</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>

              <article class="timeline-box left post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Secure</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>
        
              <article class="timeline-box right post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Confidential</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>

              <article class="timeline-box left post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Our Team</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>
        
              <article class="timeline-box right post post-medium">
                <div class="timeline-box-arrow w3-purple"></div>
											<div class="p-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
												<div class="row">
													<div class="col">
														<div class="post-content">
															<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html" class="w3-text-purple">Deidicated Matchmaker</a></h2>
															<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
														</div>
													</div>
												</div>
											</div>
              </article>
            </div>
          </section>
      </div>
      </div>
    </div>
  </div>
</div>
<section style="background-color: #eee" class=" p-lg-5">
  <br>
  <div class="container">
    <div class="text-center">
      <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
      <br> 
      <p class="w3-xlarge w3-text-dark-gray lob-font"><b>Our Services</b></p>
    </div>
    <div class="row">
      <div class="col-lg-6 p-0">
        <div class="section section-text-light section-background section-center match-height border-top-0 m-0" style="background-image: url(demo/17.jpg); min-height: 260px;">
          <div class="container">
            <div class="row">
              <div class="col">
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0">
        <section class="section pl-4 pr-4 match-height border-top-0 m-0" style="background-color: #fff">
          <div class="row">
            <div class="col">
              <h4 class="mb-0 lob-font w3-text-purple">Marriage Solution BD Agency</h4>
              <p class="mb-0 w3-text-purple">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <br>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
              <button type="button" class="btn btn-outline btn-rounded btn-secondary  btn-with-arrow mb-2 w3-white w3-text-purple" href="#">Read More<span><i class="fas fa-chevron-right"></i></span></button>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 p-0">
        <section class="section pl-4 pr-4 match-height border-top-0 m-0" style="background-color: #fff">
          <div class="row">
            <div class="col">
              <h4 class="mb-0 lob-font w3-text-purple">Marriage Solution BD (Online)</h4>
              <p class="mb-0 w3-text-purple">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <br>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
              <button type="button" class="btn btn-outline btn-rounded btn-secondary  btn-with-arrow mb-2 w3-white w3-text-purple" href="#">Read More<span><i class="fas fa-chevron-right"></i></span></button>
            </div>
          </div>
        </section>
      </div>
      <div class="col-lg-6 p-0">
        <section class="parallax section section-parallax match-height border-top-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('demo/18.jpg') }}" style="min-height: 260px;">
        </section>
      </div>
    </div>
  </div>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 p-0">
        <section class="parallax section section-parallax match-height border-top-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('demo/14.jpg') }}" style="min-height: 260px;">
        </section>
      </div>
      <div class="col-lg-6 p-0">
        <section class="section pl-4 pr-4 match-height border-top-0 m-0" style="background-color: #fff">
          <div class="row">
            <div class="col">
              <h4 class="mb-0 w3-text-purple lob-font">Marriage Solution BD Wedding Planner</h4>
              <p class="mb-0 w3-text-purple">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <br>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
              <button type="button" class="btn btn-outline btn-rounded btn-secondary  btn-with-arrow mb-2 w3-white w3-text-purple" href="#">Read More<span><i class="fas fa-chevron-right"></i></span></button>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row justify-content-center">
      <button type="button" class="btn btn-rounded btn-secondary btn-lg mb-2 w3-purple">View All</button>
    </div>
  </div>
  <br>
</section>

<section class="section-overlay-opacity section-overlay-opacity-scale-8 parallax section section-parallax section-center mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('img/wedding1.jpg') }}">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
              <br> 
              <h4 class="mb-0 text-light w3-xlarge lob-font mb-2">Get in Touch</h4>
              <br>
              <h5 class="text-light"> </h5>
          </div>
      </div>

<div class="row mb-5 pb-3">
      
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

          <div class="card- flip-card text-center rounded-0">
              <div class="flip-front p-5">
                  <div class="flip-content my-4">
                      <strong class="font-weight-extra-bold text-color-dark line-height-1 text-8 mb-3 d-inline-block lob-font">Register</strong>
                      <h4 class="font-weight-bold text-color-primary text-4">FIRST STEP</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p> 
                  </div>
              </div>
              <div class="flip-back d-flex align-items-center p-5" style="background-image: url({{ asset('img/kalie.jpg') }}); background-size: cover; background-position: center;">
                  <div class="flip-content my-4">
                      <h4 class="font-weight-bold text-color-light">FIRST MEETING</h4>
                      <p class="font-weight-light w3-text-white opacity-5-">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                      <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN MORE</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">

          <div class="card- flip-card flip-card-vertical text-center rounded-0">
              <div class="flip-front p-5">
                  <div class="flip-content my-4">
                      <strong class="font-weight-extra-bold text-color-dark line-height-1 text-8 mb-3 d-inline-block lob-font">Take A Package</strong>
                      <h4 class="font-weight-bold text-color-primary text-4">SECOND STEP</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p> 
                  </div>
              </div>
              <div class="flip-back d-flex align-items-center p-5" style="background-image: url({{ asset('img/kalie.jpg') }}); background-size: cover; background-position: center;">
                  <div class="flip-content my-4">
                      <h4 class="font-weight-bold text-color-light- w3-text-white">FIRST MEETING</h4>
                      <p class="font-weight-light w3-text-white opacity-5-">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                      <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN MORE</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
          <div class="card- flip-card flip-card-3d text-center rounded-0">
              <div class="flip-front p-5">
                  <div class="flip-content my-4">
                      <strong class="font-weight-extra-bold text-color-dark line-height-1 text-8 mb-3 d-inline-block lob-font">Match</strong>
                      <h4 class="font-weight-bold text-color-primary text-4">THIRD STEP</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p> 
                  </div>
              </div>
              <div class="flip-back d-flex align-items-center p-5" style="background-image: url({{ asset('img/kalie.jpg') }}); background-size: cover; background-position: center;">
                  <div class="flip-content my-4">
                      <h4 class="font-weight-bold w3-text-white">Get Your Correct Match</h4>
                      <p class="font-weight-light w3-text-white opacity-5-">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                      <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN MORE</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
</section>
@endsection

@push('js') 
<script type="text/javascript">
	$(document).ready(function(){
  });
</script> 
@endpush

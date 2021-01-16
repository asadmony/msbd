<div id="projects" class="container">
    <div class="row justify-content-center pt-5 mt-5">
      <div class="col-lg-4">
        <div class="appear-animation" data-appear-animation="fadeInUpShorter">
          <h2 class="font-weight-bold mb-2">
            {{-- <img alt="Porto" width="120" height="52" data-sticky-width="92" data-sticky-height="45" src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}"> --}}
            <img alt="Porto" width="185" height="105"src="{{ asset('img/msbd-logo.png') }}">
          </h2>
          <p class="mb-4 text-justify">
            Marriage Solution BD, the world's largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world's 50 Most Innovative Companies by Fast Company.
          </p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="appear-animation" data-appear-animation="fadeInUpShorter">
          <h2 class="font-weight-bold mb-2 lob-font">Contact Us</h2>
        </div>
        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
            <h4 class="mt-2 mb-1 lob-font">Our <strong>Office</strong></h4>
            <ul class="list list-icons list-icons-style-2 mt-2">
                <li><i class="fas fa-map-marker-alt top-6 w3-purple"></i> <strong class="text-dark">Address:</strong> {!! $websiteParameter->footer_address !!}</li>
                <li><i class="fas fa-phone top-6 w3-purple"></i> <strong class="text-dark">Phone:</strong> {{ $websiteParameter->contact_mobile }}</li>
                <li><i class="fas fa-envelope top-6 w3-purple"></i> <strong class="text-dark">Email:</strong> <a href="mailto:{{ $websiteParameter->contact_email }}">{{ $websiteParameter->contact_email }}</a></li>
            </ul>
        </div>
        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
            <h4 class="pt-5 lob-font">Business <strong>Hours</strong></h4>
            <ul class="list list-icons list-dark mt-2">
                <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
            </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="appear-animation" data-appear-animation="fadeInUpShorter">
          <h2 class="font-weight-bold mb-2 lob-font">Follow Us</h2>
          <p class="mb-4">
            <div class="fb-page"
            data-href="https://www.facebook.com/secondlifebd1" 
            data-width="300"
            data-height="410"
            data-hide-cover="false"
            data-tabs="timeline,messages"
            data-show-facepile="true"></div>
          </p>
        </div>
      </div>
    </div>
</div>
<footer id="footer">
    {{-- <div class="container my-4 py-2">
        <div class="row py-4">
            <div class="col-lg-4 text-center text-lg-left">
                <h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
                <p class="text-3 mb-0">Get all the latest informaton on Events, Sales and Offfers.</p>
                <p class="text-3 mb-0">Sign up for newsletter today.</p>
            </div>
            <div class="col-lg-5 text-center text-lg-left px-4 mt-1 mt-lg-3">
                <div class="pt-1 pt-lg-3 mt-1">
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100">
                        <div class="input-group input-group-rounded">
                            <input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="text">
                            <span class="input-group-append">
                                <button class="btn btn-primary  text-color-light text-2 py-3 px-4" type="submit"><strong>SUBSCRIBE!</strong></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 text-center text-lg-left">
                <div class="pt-3 mt-1">
                    <ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-0 mt-lg-3">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid  pt-2 pb-2">
        <div class="row p-3 d-flex align-items-center">
            <div class="col-sm-12 d-flex">
                @foreach ($welcomeFooterMenu->pages as $wfm)
                    <a class="mx-2 text-4" href="{{ route('page', [$wfm->id, $wfm->route_name]) }}" style="display: inline-block;">
                        {{ $wfm->page_title }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="row p-3"  style="border-top: 1px solid darkgray">
            <img src="https://securepay.sslcommerz.com/public/image/SSLCommerz-Pay-With-logo-All-Size-01.png" width="100%">
        </div>
        <div class="row d-flex align-items-center p-3" style="border-top: 1px solid darkgray">
            <div class="col-sm-6">
                <span class="text-3 pt-3">© Copyright 2020. {{ env('APP_NAME_BIG') }}. All Rights Reserved. Designed & Developed By <a href="http://a2sys.co/">a2sys</a></span>
            </div>
            <div class="col-sm-6 text-center">
                <ul class="footer-social-icons social-icons social-icons-clean social-icons-opacity-light social-icons-icon-light mt-0 mt-lg-3">
                    <li class="social-icons-facebook"><a href="{{ $websiteParameter->fb_page_code }}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
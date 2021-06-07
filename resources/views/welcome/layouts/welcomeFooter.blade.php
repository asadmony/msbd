<footer id="footer" class="bg-color-primary border-top-0 m-0" style="background: #48276E!important;">
    <div class="container py-4 text-left">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                {{-- <div class="py-1">
                    <p class="text-white"><img width="200" src="{{asset('img/msbd_logo.png')}}"
                            alt="{{env('APP_NAME_BIG')}}"></p>
                </div> --}}
                <div class="py-1">
                    {{-- <i class="fas fa-map-marker-alt text-4 p-relative text-white"></i> --}}
                    <span class="text-4 p-relative text-white">
                        {!! $websiteParameter->footer_address !!}
                    </span>
                </div>
                <div class="py-1" style="">
                    <a href="{{ route('welcome.ourBranches') }}" class="p-2 px-4 text-center w3-btn w3-round w3-border w3-white"><span
                            class="w3-large p-relative w3-text-purple"><i class="fab fa-sourcetree"></i> {{ __('Our Branches') }}</span></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <h4 class="text-white">{{ __('Our Policies') }}</h4>
                <div class=" ">
                    <ul class="list list-icons list-icons-sm mb-0 text-white d-flex flex-column">
                        @if(isset($userFooterMenu))
                        @foreach ($userFooterMenu->pages as $ufmPage)
                        <li class=""> <a class="py-1 ink-hover-style-1 text-white"
                                href="{{ route('page', [$ufmPage->id, $ufmPage->route_name]) }}"> <i
                                    class="fas fa-angle-right top-8 text-white"></i> {{$ufmPage->page_title}}</a></li>
                        @endforeach
                        @endif
                        <li class=""> <a class="py-1 ink-hover-style-1 text-white"
                            href="{{ route('blog') }}"> <i
                                class="fas fa-angle-right top-8 text-white"></i> {{ __('Blog') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4 class="text-white text-bold text-center">{{ __('Follow Us') }}</h4>
                <div class="pl-lg-5">
                    <p class="px-0  text-center text-white" style="font-size: 22px">{{ __('Social Media') }}</p>
                    <div class="text-center">
                        <a class="text-white px-3" href="https://www.facebook.com/secondlifebd1"><i class="fab fa-facebook text-5"></i></a>
                        <a class="text-white px-3" href=""><i class="fab fa-twitter text-5"></i></a>
                        <a class="text-white px-3" href="https://www.linkedin.com/in/marriage-solution-bd-uttara-branch-021b17201/"><i class="fab fa-linkedin-in text-5"></i></a>
                        <a class="text-white px-3" href="https://www.youtube.com/channel/UCQ-C09YIwBV5LVOpzAgGz3A"><i class="fab fa-youtube text-5"></i></a>
                        <a class="text-white px-3" href="https://www.instagram.com/marriagesolutionbd/"><i class="fab fa-instagram text-5"></i></a>
                        <br> <br>
                        {{-- <div class="d-none d-sm-block">
                            <img width="160" class="rounded" src="{{asset('img/msbd-logo.png')}}"
                                alt="{{env('APP_NAME_BIG')}}">
                        </div> --}}
                        
                    <div class="p-2 rounded border text-center w3-white w3-hover-shadow">
                        <a href="{{ route('welcome.videoGallery') }}" class="w3-large w3-text-purple"> {{ __('Client Review') }}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</footer>
<div class="container-fluid">
    <div class="row justify-content-center" style="background: #412363 !important;">
        <div class="footer-copyright bg-color-primary bg-color-scale-overlay bg-color-scale-overlay-2">
            <div class="bg-color-scale-overlay-wrapper">
                <div class="container pt-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p class="text-white">
                                    © Copyright {{date('Y')}} | {{env('APP_NAME_BIG')}} | Site by <a class="text-white"
                                        target="_blank" href="{{url('https://a2sys.co')}}" title="a2sys">#a2sys</a>
                                    <br>
                                    <img width="160" class="rounded" src="{{asset('img/payment.png')}}" alt="Pay">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

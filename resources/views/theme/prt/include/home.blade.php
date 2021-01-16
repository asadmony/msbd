<div role="main" class="main shop py-0">


<script src="{{ asset('assets/js_slider/js27.js') }}" type="text/javascript"></script>

<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
              {$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1400;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 053 css*/
        .jssorb053 .i {position:absolute;cursor:pointer;}
        .jssorb053 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb053 .i:hover .b {fill-opacity:.7;}
        .jssorb053 .iav .b {fill-opacity: 1;}
        .jssorb053 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 093 css*/
        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" class="" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:625px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('assets/js_slider/img/spin.svg') }}" />
        </div>
         
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:625px;overflow:hidden;">
            @foreach($sliders as $slider)
            <div>
                <img data-u="image" src="{{asset($slider->image_url)}}" />

                 {{-- <div data-ts="flat" data-p="540" data-po="40% 50%" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:350px;top:360px;width:900px;height:500px;position:absolute;">
                        <svg viewbox="0 0 800 60" data-to="50% 50%" width="800" height="60" data-t="7" style="left:0px;top:-70px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:700;letter-spacing:0.05em;overflow:visible;">
                            <text fill="#454447" stroke="#ff9500" stroke-width="2" text-anchor="middle" x="400" y="60">INTERIOR DESIGN
                            </text>
                        </svg>
                        <div data-to="50% 50%" data-t="8" style="filter:url('#jssor_1_flt_1');left:200px;top:0px;width:600px;height:60px;position:absolute;opacity:0;color:#C49D8F;font-family:Roboto Condensed, sans-serif;font-size:48px;line-height:1.2;letter-spacing:0.1em;text-align:center;">FOR STYLISH LIFE</div>
                        <svg viewbox="0 0 800 100" width="800" height="100" data-t="9" style="left:40px;top:250px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:100px;font-weight:900;letter-spacing:0.5em;overflow:visible;">
                            <text fill="rgba(255,255,255,0.7)" stroke="#ff9500" text-anchor="middle" x="400" y="100">BRAND NAME
                            </text>
                        </svg>
                    </div>
                </div> --}}
            </div>
           @endforeach

           {{-- <div>
                <img data-u="image" src="img/sl01.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/pic72.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/pic2.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/pic3.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/pic4.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/pic5.jpg" />
            </div> --}}
        </div>
        
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>


<div class="welcome-front-cover-">
    <div class="welcome-front-cover-inner-">
        <div class="container- ">

            <div class="site-title brand custom-shadow-">
              <div class="row">
                <div class="col-md-12 ">


                    


                </div>
            </div>
        </div>      
 
    </div>
</div>

</div>

<div class="text-center w3-xlarge p-2 w3-text-black" style="background: url({{ asset('img/bg-ribon.jpg') }}) repeat;min-height: 20px;width: 100%;font-weight:bold;">
    Marriage Solution BD:  
    The Largest        
 
  Matrimony Organization in Bangladesh
</div>

</div>

<br> <br>


<div class="container">
    
<div class="text-center">
    <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">

    <br> 

    <p class="w3-large w3-text-dark-gray"><b>
        
What we do for you
    </b>
</p>

<p class="text-justify">Marriage Solution BD, the world's largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world's 50 Most Innovative Companies by Fast Company.</p>
</div>
</div>


<section class="section-overlay-opacity section-overlay-opacity-scale-8 parallax section section-parallax section-center" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('img/wedding1.jpg') }}">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h4 class="mb-0 text-light">Get in Touch</h4>
                                <h5 class="text-light"> </h5>
                                <p class="mb-0 w3-text-light-gray p-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <br>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>


                            </div>
                        </div>



<div class="row mb-5 pb-3">
                        
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <h4 class="mb-4 w3-text-white">Create New Profile</h4>

                            <div class="card- flip-card text-center rounded-0">
                                <div class="flip-front p-5">
                                    <div class="flip-content my-4">
                                        <strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">01</strong>
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
                            <h4 class="mb-4 w3-text-white">Take a Package</h4>

                            <div class="card- flip-card flip-card-vertical text-center rounded-0">
                                <div class="flip-front p-5">
                                    <div class="flip-content my-4">
                                        <strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">02</strong>
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
                            <h4 class="mb-4 w3-text-white">Get Your Parfect Match</h4>

                            <div class="card- flip-card flip-card-3d text-center rounded-0">
                                <div class="flip-front p-5">
                                    <div class="flip-content my-4">
                                        <strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">03</strong>
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
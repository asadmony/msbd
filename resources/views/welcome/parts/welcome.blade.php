{{-- <div class="page-header header-filters clear-filters purple-filters" data-parallax="true"

> --}}


<script src="{{ asset('assets/js_slider/js27.js') }}" type="text/javascript"></script>

<br> <br> <br>

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
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /*jssor slider bullet skin 053 css*/
    .jssorb053 .i {
        position: absolute;
        cursor: pointer;
    }

    .jssorb053 .i .b {
        fill: #fff;
        fill-opacity: 0.5;
    }

    .jssorb053 .i:hover .b {
        fill-opacity: .7;
    }

    .jssorb053 .iav .b {
        fill-opacity: 1;
    }

    .jssorb053 .i.idn {
        opacity: .3;
    }

    /*jssor slider arrow skin 093 css*/
    .jssora093 {
        display: block;
        position: absolute;
        cursor: pointer;
    }

    .jssora093 .c {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
    }

    .jssora093 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
    }

    .jssora093:hover {
        opacity: .8;
    }

    .jssora093.jssora093dn {
        opacity: .6;
    }

    .jssora093.jssora093ds {
        opacity: .3;
        pointer-events: none;
    }
</style>
<div id="jssor_1" class=""
    style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:625px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin"
        style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
            src="{{ asset('assets/js_slider/img/spin.svg') }}" />
    </div>

    <div data-u="slides"
        style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:625px;overflow:hidden;">
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
    <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1"
        data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="b"
                    d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z">
                </path>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2"
        data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
            <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
            <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2"
        data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
            <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
            <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
        </svg>
    </div>
</div>
<script type="text/javascript">
    jssor_1_slider_init();
</script>


{{-- <div class="slide" style="width: 100%;margin-top: -22px;">

  <ul>
    @if (count($sliders))
    @foreach($sliders as $slider)
    <li data-bg="{{ asset($slider->image_url) }}"></li>
@endforeach
@else
<li data-bg="{{ asset('img/pic1.jpg') }}"></li>
<li data-bg="{{ asset('img/pic2.jpg') }}"></li>
<li data-bg="{{ asset('img/pic3.jpg') }}"></li>
<li data-bg="{{ asset('img/pic4.jpg') }}"></li>
<li data-bg="{{ asset('img/pic5.jpg') }}"></li>
<li data-bg="{{ asset('img/pic6.jpg') }}"></li>
<li data-bg="{{ asset('img/sl01.jpg') }}"></li>
<li data-bg="{{ asset('img/pic72.jpg') }}"></li>
<li data-bg="{{ asset('img/pic82.jpg') }}"></li>
@endif

</ul>

</div> --}}
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
{{-- </div> --}}


<div class="main main-raised mb-3" style="margin-top: 10px;">
    <div class="sections section-basics">
        <div class="container">

            <div class="text-center">
                <h3> &nbsp; </h3>
            </div>

            <div class="row">
                <div class="col-sm-9">
                    @include('welcome.includes.others.featuredProfessions')
                </div>
                <div class="col-sm-3">


                    @include('welcome.includes.others.fbPageAreaContainer')


                </div>
            </div>


            @include('welcome.includes.others.branches')








            @include('welcome.includes.others.imageGallery')

            <div class="row">
                <div class="row">
                    <div class="col-sm-10">

                        @include('welcome.includes.others.videoGallery')
                    </div>
                    <div class="col-sm-2">
                        <div class="w3-card-2 w3-round">
                            <div class="box box-widget" id="video-gallery">
                                <div class="box-header w3-panel w3-leftbar w3-border-purple">
                                    <h3 class="box-title">
                                        Our Visitors
                                    </h3>
                                </div>
                                <div class="box-body w3-topbar">


                                    <script type="text/javascript" id="clstr_globe"
                                        src="//cdn.clustrmaps.com/globe.js?d=j9LnyN1WwJOiWTSiUgUf2AIItjOIgGY20jn1JS8J2Co">
                                    </script>




                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Classic Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link">Nice Button</button>
                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->

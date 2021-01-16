<div class="page-header header-filters clear-filters purple-filters" data-parallax="true" 

>
<div class="slide" style="width: 100%;margin-top: -22px;">

  <ul>
    @if (count($sliders))
    @foreach($sliders as $slider)
    <li data-bg="{{ asset($slider->image_url) }}"></li>
    @endforeach
    @else
    {{-- <li data-bg="{{ asset('img/pic1.jpg') }}"></li>
    <li data-bg="{{ asset('img/pic2.jpg') }}"></li>
    <li data-bg="{{ asset('img/pic3.jpg') }}"></li>
    <li data-bg="{{ asset('img/pic4.jpg') }}"></li>
    <li data-bg="{{ asset('img/pic5.jpg') }}"></li>
    <li data-bg="{{ asset('img/pic6.jpg') }}"></li> --}}
    <li data-bg="{{ asset('img/sl01.jpg') }}"></li>
    <li data-bg="{{ asset('img/pic72.jpg') }}"></li>
    {{-- <li data-bg="{{ asset('img/pic82.jpg') }}"></li> --}}
    @endif

</ul>

</div>
<div class="welcome-front-cover">
    <div class="welcome-front-cover-inner">
        <div class="container ">

            <div class="site-title brand custom-shadow">
              <div class="row">
                <div class="col-md-12 ">


                    <h1 class="site-title-details text-center ">
                        @if($websiteParameter->h1)
                        {{ $websiteParameter->h1 }}
                        @else
                        {{ env('APP_NAME_BIG') }}
                        @endif
                    </h1>
                    <h3>

                        @if($websiteParameter->slogan)
                        {{ $websiteParameter->slogan }}
                        @else
                        {{ env('APP_DESC') }}
                        @endif

                    </h3>



                </div>
            </div>
        </div>      
        {{-- <div class="d-none d-sm-block">      

            @include('welcome.includes.forms.welcomeForm')
        </div> --}}

        <div class="ml-auto mr-auto">
             <a href="" class="top-next-btn featured-professions"><i class="fa fa-angle-double-down fa-2x"></i></a>
        </div>
    </div>
</div>

</div>
</div>


    <div class="main main-raiseds"  style="margin-top: 10px;">
        <div class="sections section-basics">
            <div class="container" >

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


            <script type="text/javascript" id="clstr_globe" src="//cdn.clustrmaps.com/globe.js?d=j9LnyN1WwJOiWTSiUgUf2AIItjOIgGY20jn1JS8J2Co"></script>
              

              
               
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


   
    


    
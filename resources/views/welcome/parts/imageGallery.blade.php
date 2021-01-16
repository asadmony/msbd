<div class="main main-raiseds " style="z-index: 400;">
    <div class="section section-basic" style="min-height: 900px;">

        <div class="container">

            <div class="row">
                <div class="col-sm-3">

                    @if (Browser::isDesktop())

                    @auth
                    @include('user.includes.others.myLeftMenu')
                    @else
                    @include('welcome.includes.others.welcomeLeftSidebar')
                    @endauth

                    @endif



                </div>
                <div class="col-sm-9">

    @include('welcome.includes.others.imageGalleryForGallery') 
 
                  
 
                    



                    @if (Browser::isDesktop())
                    @else
                    @include('welcome.includes.others.hotLineImage')
                    @include('welcome.includes.others.ourWebsiteVisitors')
                    <div class="w3-card-2">
                    <div class="box box-widget">         
                    <div class="box-body">
                    @include('welcome.includes.others.fbPageArea')
                    </div>
                    </div>
                    </div>
                    @endif
 
            </div>



            </div>


        </div>
    </div>
</div>





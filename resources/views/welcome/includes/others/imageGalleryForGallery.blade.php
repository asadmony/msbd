@if($latestGallery) 
 <style>
  .pgwSlideshow .ps-caption {
    font-size: 16px;
  }
</style>

 <div class="w3-card-2 w3-round">
    <div class="box box-widget">
    
    <div class="box-header w3-leftbar w3-border-purple ajax-box-header-remove">
        <h3 class="box-title">
           Success Story / Picture Gallery
        </h3>
   </div>
   
        
   <div class="box-body box-body-container p-0" style="background-color: #fbfbfb;">

<div class="p-2">
     

<div class="row">
                <div class="col-sm-7">
                  <ul class="pgwSlideshow">

            @foreach($latestGallery->activeItems() as $item)
                <li><img  src="{{asset($item->fi())}}" alt="{{$item->title}}" data-description="{{$item->description}} {{$item->photo_credit ? 'Photo: '.$item->photo_credit : ''}}"></li>
                @endforeach
            </ul>

            <br>

                </div>
                <div class="col-sm-5">


                  @foreach($galleries->chunk(2) as $gallery2)
                  <div class="row">
                    @foreach($gallery2 as $gallery)
                      <div class="col-sm-6">
                        <a href="{{route('welcome.gallery',$gallery)}}"> 
                      <div class="w3-display-container">
                      <img src="{{asset($gallery->fi())}}"  alt="{{$gallery->title}}" style="width:100%;height: 100px;">
                      <div class="w3-padding w3-display-topleft">
                        <button class="w3-btn w3-border w3-border-white w3-text-light-gray w3-round w3-hover-purple" style="background-color: #f4f4f46b;"><i class="fa fa-camera-retro fa-2x"></i></button>                        
                      </div>                     
                    </div>
                    <div class="w3-container">
                      <p class="w3-text-gray">{{date('d M, Y', strtotime($gallery->date))}}</p>
                    </div>
                  </a>
                      </div>
                    @endforeach
                  </div>
                  @endforeach

                  {{$galleries->links()}}


                </div>

              </div>

</div>
</div>
{{-- overlay here --}}
<div class="overlay my-loading-overlay" style="display: none;">
      <i class="fa fa-circle-o-notch w3-jumbo w3-text-red fa-spin" style="top: 20%;"></i>
  </div>
  <!-- end loading -->
</div>
</div>
@endif   
 




 

 
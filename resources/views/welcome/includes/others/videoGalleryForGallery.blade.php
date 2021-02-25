@if($latestGallery) 
 
 <div class="w3-card-2 w3-round">
    <div class="box box-widget">
    
    <div class="box-header w3-leftbar w3-border-purple ajax-box-header-remove">
        <h3 class="box-title">
           Video Gallery
        </h3>
   </div>
   
        
   <div class="box-body box-body-container p-0" style="background-color: #fbfbfb;">

<div class="p-2">
<div class="row">
                <div class="col-sm-7">

                  <a href="{{route('welcome.videoGallery',$latestGallery)}}"> 

                      <iframe style="width: 100%;height: 400px;" src="{{asset($latestGallery->video_url)}}?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>

                    <div class="w3-container">
                      <p class="w3-text-gray">{{Str::limit($latestGallery->title,35,'..')}}</p>
                    </div>
                  </a>

                </div>
                <div class="col-sm-5">


                  @foreach($galleries->chunk(2) as $gallery2)
                  <div class="row">
                    @foreach($gallery2 as $gallery)
                      <div class="col-sm-6">

                        <a title="{{ date('d M Y'), strtotime($gallery->date) }}, {{ $gallery->title }}" href="{{route('welcome.videoGallery',$gallery)}}"> 

                        <iframe style="width: 100%;height: 100px;" src="{{asset($gallery->video_url)}}?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        <div class="w3-container">
                      <p class="w3-text-gray">{{Str::limit($gallery->title,15,'..')}}</p>

                    </div>

                  </a>
                         
                      </div>
                    @endforeach
                  </div>
                  @endforeach

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="w3-center" style="margin: auto;">
                        {{$galleries->links()}}
                      </div>
                    </div>
                  </div>


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
 

 
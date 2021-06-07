@if(count($videoGalleries))

<div class="row">
    <div class="col-sm-12">
        <div class="w3-card-2 w3-round">

            <div class="box box-widget" id="video-gallery">
                <div class="box-header w3-panel w3-leftbar w3-border-purple">
                    <h3 class="box-title">
                        {{ __('Video Gallery') }}
                    </h3>
                </div>
                <div class="box-body w3-topbar">


                    <div class="row">
                        @foreach($videoGalleries as $gallery)
                        <div class="col-sm-3">
                            <a title="{{ date('d M Y'), strtotime($gallery->date) }}, {{ $gallery->title }}"
                                href="{{route('welcome.videoGallery',$gallery)}}">

                                <iframe style="width: 100%;height: 120px;"
                                    src="{{asset($gallery->video_url)}}?rel=0&amp;showinfo=0" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen=""></iframe>

                                <div class="w3-container">
                                    <p class="w3-text-gray">{{Str::limit($gallery->title,20,'..')}}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach

                        <div class="col-sm-3">
                            <div class="text-center">
                                <br> <br>
                                <a class="w3-btn w3-white w3-text-purple w3-round w3-border w3-border-purple w3-small"
                                    href="{{route('welcome.videoGallery')}}">{{ __('More Videos') }} <i
                                        class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</div>

<br>
@endif

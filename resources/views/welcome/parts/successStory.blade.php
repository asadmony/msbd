<div class=" pt-5 pb-5" style="background: url({{ asset('img/back2.png') }})">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="m-0 px-3 text-center" style="color: gold; font-family: 'Lobster Two', cursive; font-style: italic;"><strong><u>Our Activities Album</u></strong></h1>
            </div>
            <div style="width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;"></div>
        </div>
        <div class="row">
            <div class="col-sm-6 my-3">
                <a class="btn-primary" href="{{ route('welcome.photoGallery') }}">
                    <div class="card- w3-indigo-" 
                    {{-- style="background: url(https://www.marriagesolutionbd.com/storage/media/image/aBU721021031.jpg) no-repeat; background-size: 100% 100%; border-radius: 8px;" --}}
                    >
                        <div class="card-body text-center pt-5 pb-3 text-white">
                            <div class="m-auto w3-text-white">
                                {{-- <i class="fa fa-image fa-6x"></i> --}}
                                <img class="rounded" style="max-width: 240px" src="{{ asset('img/photo-gallery.gif') }}" alt="">
                                <h3 class="text-white p-0 pt-2">Photos</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 my-3">
                <a class="btn-primary" href="{{ route('welcome.videoGallery') }}">
                    <div class="card- w3-indigo-" 
                    {{-- style="background: url(https://www.marriagesolutionbd.com/storage/media/image/aBU721021031.jpg) no-repeat; background-size: 100% 100%; border-radius: 8px;" --}}
                    >
                        <div class="card-body text-center pt-5 pb-3 text-white">
                            <div class="m-auto w3-text-white">
                                {{-- <i class="fa fa-video fa-6x"></i> --}}
                                <img class="rounded" style="max-width: 240px" src="{{ asset('img/video-gallery.gif') }}" alt="">
                                <h3 class="text-white p-0 pt-2">Videos</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
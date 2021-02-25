@extends('mobile.layout.base')

@push('css')
<link href="{{ asset('msbd/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">
@endpush

@section('body')
<?php $me = Auth::user(); ?>

<section class="gallery-wrap">

	@foreach($galleries  as $gallery)

	@if($loop->first)
    <a href="{{ asset('storage/gallery/'.$gallery->image_name) }}" data-fancybox="gallery" class="img-big-wrap"><img class="w-100"
            src="{{ asset('storage/gallery/'.$gallery->image_name) }}" alt="{{ env('APP_NAME_BIG') }}"></a>

    @break
    @endif
    @endforeach




    <div class="thumbs-wrap ">
        @foreach ($galleries as $photo)
        <a href="{{ asset('storage/gallery/'.$photo->image_name) }}" data-fancybox="gallery" class="item-thumb"> 
        {{-- <a href="{{ route('imagecache', [ 'template'=>'cpmd','filename' => $photo->image_name ]) }}" data-fancybox="gallery" class="item-thumb">  --}}
        	<img
                src="{{ asset('storage/gallery/'.$photo->image_name) }}" alt="{{ env('APP_NAME_BIG') }}"></a>
        @endforeach

    </div>
</section>

	<div class="text-center mt-3">

	<style>
		.leading-5{padding-top: 10px !important;}
	</style>
		
	{{ $galleries->render()}}

	</div>
  
@endsection

@push('js')
<script src="{{ asset('msbd/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
@endpush
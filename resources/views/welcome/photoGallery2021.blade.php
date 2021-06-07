@extends('welcome.layouts.guestWelcomeMaster')

@section('title')
Photo Gallery
@endsection

@section('meta')
@endsection

@push('css')

{{-- new 2021 --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/dnlightbox/dist/css/style-d1d37711690.css')}}">

<link rel="stylesheet" href="{{ asset('prt/vendor/rs-plugin/css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('prt/vendor/rs-plugin/css/layers.css') }}">
<link rel="stylesheet" href="{{ asset('prt/vendor/rs-plugin/css/navigation.css') }}">
<link rel="stylesheet" href="{{ asset('prt/vendor/circle-flip-slideshow/css/component.css') }}">

<style>
    @import url('https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Ubuntu:400,500,700');

    .lob-font {
        font-family: 'Lobster Two', cursive;
    }

    .lobster {
        font-family: 'Lobster Two', cursive;
        line-height: 95px;
        letter-spacing: 1px;
        font-weight: 800 !important;
        font-size: 79px;
    }

    .sd {
        opacity: 0.7 !important;
    }

    h2.married-date {
        background: rgba(0, 0, 0, 0) url(svg/red_hidding_bg.svg) no-repeat scroll center center / contain;
        display: inline-block;
        font-size: 40px;
        font-weight: 400;
        margin-bottom: 0;
        padding: 5px 100px 10px;
        color: #fff;
    }

    .sda {
        padding-top: 8rem !important;
    }

    .timeline-box {
        opacity: 0.7;
        background-color: #ffff;
    }
</style>

<link rel="stylesheet" href="{{ asset('css/Member.css') }}">
@endpush

@section('header')
@include('welcome.layouts.guestWelcomeHeaderAlt')
@endsection
@section('content')
{{-- <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-dark"><strong>Success Stories</strong></h1>
            </div>

            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="/">Home</a></li>
                    <li class="active">
                        <a href="">Success Stories </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}
<div class=" pt-5 pb-5" style="background: url({{ asset('img/back2.png') }})">
    <div class="row">
        <div class="col-sm-12">

            @include('welcome.parts.photoGallery')

        </div>
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function(){
  });
</script>
@endpush

 

@section('content')

@if(Auth::check())
<?php $u = Auth::user(); ?>
@endif

 {{-- @include('welcome.parts.imageGallery') --}}
@endsection

@push('js') 
<script src="{{ asset('assets/dnlightbox/dist/js/lightBox-ba9e08126f.js') }}"></script>
<script>
jQuery(document).ready(function(e){e.DNLightBox({speed:500})});
</script>
@endpush 
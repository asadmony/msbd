@extends('welcome.layouts.guestWelcomeMaster')

@section('title')
| {{env('APP_NAME_BIG')}}
@endsection

@section('meta')
@endsection

@push('css')
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
@endpush

@section('header')
@include('welcome.layouts.guestWelcomeHeaderAlt')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 p-0 m-0">

<section class="content-fluid py-2">
    <div class="container">
        <div class="w3-row w3-border w3-round mb-3" style="background: rgb(0, 0, 0) url('http://msbd.test/storage/media/image/mxv620121536.jpg') no-repeat top right; background-size: auto 100%;"> 
            <div class="w3-half w3-mobile w-100 d-sm-none d-md-none d-lg-none"> 
                <img class="w-100" src="http://msbd.test/storage/media/image/mxv620121536.jpg" alt="">
            </div>
            <div class="w3-container w3-half w3-purple"> 
                <h2 class="text-white">w3-half</h2> 
                 <p class="text-white">Our Values
                    Put Customers First - Caring for and respecting customers is at the core of everything we do. It defines our work and shapes our culture, radiating out to our shareholders and communities.
                    
                    Be the Best - We are relentless in our search for new and better ways of doing things. As a leader in our industry, we constantly raise the bar with our innovation and dedication to our customers.
                    
                    Make Things Easier - Products in our industry aren’t always easy to understand. That’s why we are always looking for simpler ways to connect customers to the best solutions. 
                    
                    Succeed Together - We live by a collective commitment to honesty, integrity and diversity. We are open and inclusive, taking and applying the best ideas from every part of our.
                    On screens smaller than 601 pixels it resizes to 100%.
                </p>
            </div>
            
        </div>
        <div class="w3-row w3-border w3-round mb-3" style="background: rgb(0, 0, 0) url('http://msbd.test/storage/media/image/mxv620121536.jpg') no-repeat top left; background-size: auto 100%;"> 
            <div class="w3-mobile d-sm-none d-md-none d-lg-none"> 
                <img class="w-100" src="http://msbd.test/storage/media/image/mxv620121536.jpg"> 
            </div>
            <div class="w3-container w3-threequarter w3-white w3-right"> 
                <h2 class="">w3-half</h2> 
                 <p class="">Our Values
                    Put Customers First - Caring for and respecting customers is at the core of everything we do. It defines our work and shapes our culture, radiating out to our shareholders and communities.
                    
                    Be the Best - We are relentless in our search for new and better ways of doing things. As a leader in our industry, we constantly raise the bar with our innovation and dedication to our customers.
                    
                    Make Things Easier - Products in our industry aren’t always easy to understand. That’s why we are always looking for simpler ways to connect customers to the best solutions. 
                    
                    Succeed Together - We live by a collective commitment to honesty, integrity and diversity. We are open and inclusive, taking and applying the best ideas from every part of our.
                    On screens smaller than 601 pixels it resizes to 100%.
                </p>
            </div>
            
        </div>
        <div class="w3-row w3-border w3-round mb-3" style="background: rgb(0, 0, 0) url('http://msbd.test/storage/media/image/mxv620121536.jpg') no-repeat top right; background-size: auto 100%;"> 
            <div class="w3-mobile d-sm-none d-md-none d-lg-none"> 
                <img class="w-100" src="http://msbd.test/storage/media/image/mxv620121536.jpg"> 
            </div>
            <div class="w3-container w3-threequarter w3-white"> 
                <h2 class="">w3-half</h2> 
                 <p class="">Our Values
                    Put Customers First - Caring for and respecting customers is at the core of everything we do. It defines our work and shapes our culture, radiating out to our shareholders and communities.
                    
                    Be the Best - We are relentless in our search for new and better ways of doing things. As a leader in our industry, we constantly raise the bar with our innovation and dedication to our customers.
                    
                    Make Things Easier - Products in our industry aren’t always easy to understand. That’s why we are always looking for simpler ways to connect customers to the best solutions. 
                    
                    Succeed Together - We live by a collective commitment to honesty, integrity and diversity. We are open and inclusive, taking and applying the best ideas from every part of our.
                    On screens smaller than 601 pixels it resizes to 100%.
                </p>
            </div>
            
        </div>
    </div>
</section>

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

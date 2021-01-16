@extends('mobile.layout.base')
@section('body')

<section class="scroll-horizontal padding-x">
    @auth
    <?php $me = Auth::user(); ?>

    @include('mobile.user.parts.home')

    {{-- modal is outside of .main .main-raised class --}}
    {{-- @include('user.includes.modal.reportModal') --}}

    @else

    <div class="w3-white">

        @include('welcome.parts.welcome')
    </div>
    @endauth
</section>

{{-- <h5 class="title-section pt-3">My Selection</h5>

<section class="scroll-horizontal padding-x">
    <div class="item">
		<a href="#" class="product-sm">
			<div class="img-wrap"> <img src="{{ asset('msbd/images/demo/image2.png') }}"> </div>
<div class="text-wrap">
    <p class="title text-truncate w3-small">Muslim</p>
    <p class="title text-truncate w3-small">Male, 36</p>
    <p class="title text-truncate w3-small">Never Married</p>
    <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
    <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
    <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
    <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
</div>
</a>
</div>
<div class="item">
    <a href="#" class="product-sm">
        <div class="img-wrap"> <img src="{{ asset('msbd/images/demo/image2.png') }}"> </div>
        <div class="text-wrap">
            <p class="title text-truncate w3-small">Muslim</p>
            <p class="title text-truncate w3-small">Male, 36</p>
            <p class="title text-truncate w3-small">Never Married</p>
            <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
            <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
            <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
            <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
        </div>
    </a>
</div>
<div class="item">
    <a href="#" class="product-sm">
        <div class="img-wrap"> <img src="{{ asset('msbd/images/demo/image2.png') }}"> </div>
        <div class="text-wrap">
            <p class="title text-truncate w3-small">Muslim</p>
            <p class="title text-truncate w3-small">Male, 36</p>
            <p class="title text-truncate w3-small">Never Married</p>
            <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
            <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
            <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
            <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
        </div>
    </a>
</div>
</section>

<h5 class="title-section pt-3">My Visitors</h5>

<section class="scroll-horizontal padding-x">
    <div class="item">
        <a href="#" class="product-sm">
            <div class="img-wrap"> <img src="{{ asset('msbd/images/demo/image2.png') }}"> </div>
            <div class="text-wrap">
                <p class="title text-truncate w3-small">Muslim</p>
                <p class="title text-truncate w3-small">Male, 36</p>
                <p class="title text-truncate w3-small">Never Married</p>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="#" class="product-sm">
            <div class="img-wrap"> <img src="{{ asset('msbd/images/demo/image2.png') }}"> </div>
            <div class="text-wrap">
                <p class="title text-truncate w3-small">Muslim</p>
                <p class="title text-truncate w3-small">Male, 36</p>
                <p class="title text-truncate w3-small">Never Married</p>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="#" class="product-sm">
            <div class="img-wrap"> <img src="{{ asset('msbd/images/demo/image2.png') }}"> </div>
            <div class="text-wrap">
                <p class="title text-truncate w3-small">Muslim</p>
                <p class="title text-truncate w3-small">Male, 36</p>
                <p class="title text-truncate w3-small">Never Married</p>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
            </div>
        </a>
    </div>
</section>

<h5 class="title-section pt-3">My Matched Profiles</h5>

<section class="scroll-horizontal padding-x">
    <div class="item">
        <a href="#" class="product-sm">
            <div class="img-wrap"> <img src="{{ asset('msbd/images/demo/image2.png') }}"> </div>
            <div class="text-wrap">
                <p class="title text-truncate w3-small">Muslim</p>
                <p class="title text-truncate w3-small">Male, 36</p>
                <p class="title text-truncate w3-small">Never Married</p>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="#" class="product-sm">
            <div class="img-wrap"> <img src="{{ asset('msbd/images/demo/image2.png') }}"> </div>
            <div class="text-wrap">
                <p class="title text-truncate w3-small">Muslim</p>
                <p class="title text-truncate w3-small">Male, 36</p>
                <p class="title text-truncate w3-small">Never Married</p>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
            </div>
        </a>
    </div>
    <div class="item">
        <a href="#" class="product-sm">
            <div class="img-wrap"> <img src="{{ asset('msbd/images/demo/image2.png') }}"> </div>
            <div class="text-wrap">
                <p class="title text-truncate w3-small">Muslim</p>
                <p class="title text-truncate w3-small">Male, 36</p>
                <p class="title text-truncate w3-small">Never Married</p>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
                <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
            </div>
        </a>
    </div>
</section> --}}
@endsection

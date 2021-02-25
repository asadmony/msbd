@extends('welcome.layouts.welcomeMaster')

@push('css')

{{-- <link href="{{asset('css/userProfile.css')}}" rel="stylesheet" /> --}}
@endpush

@section('content')
@auth
<?php $me = Auth::user(); ?>
@endauth




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


                    <div align="center">

                    </div>

                    <div class="w3-card-2">
                        <div class="box box-widget">
                            <div class="box-header w3-leftbar w3-border-purple ajax-box-header-remove">
                                <h3 class="box-title">
                                    Success Stories
                                </h3>
                            </div>
                            <div class="box-body">

                                {{-- @include('welcome.photoGallery') --}}
                                @include('welcome.parts.successStory')
                            </div>
                        </div>
                    </div>



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

@endsection

@push('js')

{{-- <script src="{{asset('js/userProfile.js')}}"></script> --}}


@endpush

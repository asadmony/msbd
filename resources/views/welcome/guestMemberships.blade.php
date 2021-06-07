@extends('welcome.layouts.guestWelcomeMaster')

@section('title')
Our Membership Packages
@endsection

@section('meta')
@endsection

@push('css')

@endpush

@section('header')
@include('welcome.layouts.guestWelcomeHeaderAlt')
@endsection
@section('content')
<section class="page-header page-header-modern bg-color-light-scale-1- bg-color-custom page-header-md">
    <div class="container">
        <div class="row">


            <div class="col-md-12 order-2 order-md-1- bg-color-custom text-center p-static">
                <h1 class="fw-bold bold text-uppercase w3-xxlarge" style="color: #605154;">{{ __('Membership Packages') }}</h1>
            </div>

            {{-- <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="/">{{ __('Home') }}</a></li>
                    <li class="active">
                        <a href="{{ route('welcome.membershipPackages') }}">{{ __('Membership Packages') }} </a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </div>
</section>
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-sm-12">

            @include('welcome.parts.membershipPackages')

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

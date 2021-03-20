@php
    if(!isset($me)){
        $me = auth()->user();
    }
@endphp
@extends('mobile.layout.base')
@section('body')
<h5 class="title-section pt-3">Search All</h5>
<section class="padding-x">
    @include('welcome.parts.teammemberpart')

</section> <!-- section body .// -->
<br>


@endsection

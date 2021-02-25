@extends('mobile.layout.base')
@section('body')
<div class="container">
    <h5>Success Stories</h5>
    <div class="row">
        {{-- @include('welcome.photoGallery') --}}
        @include('welcome.parts.successStory')
    </div>
</div>
@endsection

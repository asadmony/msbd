@extends('welcome.layouts.welcomeMasterForUser')

@section('title')
{{ $post->title }} | Bandhan Media
@endsection

@push('css') 
@endpush

@section('content')

@auth
<?php $u = Auth::user(); ?>
@endauth
@include('blog.parts.blogPostDetailsPart')
@endsection

@push('js') 
@endpush 

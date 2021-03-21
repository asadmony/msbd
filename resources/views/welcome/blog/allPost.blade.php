@extends('welcome.layouts.guestWelcomeMaster')

@section('title')

@if ($websiteParameter->title)
{!! $websiteParameter->title !!}
@else
{{ env('APP_NAME_BIG') }} | Matrimony Service in Bangladesh | Marriage Media Service provider in Bangladesh |
Matchmaker Service in Bangladesh
@endif

@endsection

@section('meta')
@endsection

@push('css')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
@endpush

@section('header')
{{-- @include('welcome.layouts.guestWelcomeHeader') --}}
@endsection
@section('content')


@include('welcome.layouts.guestWelcomeHeaderAlt')

<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">

                    <h1 class="text-dark font-weight-bold text-8">{{ env('APP_NAME_BIG') }}</h1>
                    <span class="sub-title text-dark">Check out our Latest News, Events and All!</span>
                </div>

                <div class="col-md-12 align-self-center order-1">

                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col-lg-3 order-lg-2">
                <aside class="sidebar">
                    @include('welcome.blog.parts.rightSideSearch')

                    @include('welcome.blog.parts.rightSideCategories')

                    @include('welcome.blog.parts.rightSidePosts')
                    
                    <div class="h3 w3-text-purple font-weight-bold pt-4 text-center">
                        <img src="{{ asset('img/logo.png') }}" alt="{{ env('APP_NAME_BIG') }}">  <br> <br>
                        {{ $websiteParameter->slogan }}
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 order-lg-1">
                <div class="blog-posts">

                    @foreach ($posts as $postItem)
                        @include('welcome.blog.parts.blogCard')
                    @endforeach
                    

                    {{ $posts->links() }}

                </div>
            </div>
        </div>

    </div>

</div>


@endsection

@push('js')
@endpush

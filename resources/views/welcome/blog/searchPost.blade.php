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

<link rel="stylesheet" href="{{ asset('css/Payment.css') }}">
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

                    <h3 class="text-dark font-weight-bold- text-8">
                        Search results for {{ $search }}
                    </h3>
                    {{-- <span class="sub-title text-dark">
                        
                    </span> --}}
                </div>

                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/">{{ __('Home') }}</a></li>
                        <li><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
                        <li class="active">
                            {{ __('Search') }}
                        </li>
                        <li class=""><a href="{{ route('blog') }}"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @if (isset($posts) && $posts->count() < 1 )
        <div>
            No result found.
        </div>
    @else
    @include('welcome.blog.parts.postsBody')
    @endif

</div>
@endsection

@push('js')
@endpush

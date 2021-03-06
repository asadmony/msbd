<!DOCTYPE html>
<html class="sticky-header-reveal">

<head>

    <title>
        {{-- @if ($websiteParameter->title)
			{!! $websiteParameter->title !!}
			@else
			{{ env('APP_NAME_BIG') }} | Matrimony Service in Bangladesh | Marriage Media Service provider in Bangladesh |
        Matchmaker Service in Bangladesh
        @endif --}}

        @yield('title')
    </title>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if ($websiteParameter->favicon)

    <link rel="shortcut icon" href="{{ asset('storage/favicon/'. $websiteParameter->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('storage/favicon/'. $websiteParameter->favicon) }}" type="image/x-icon">

    @else

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    @endif


    @yield('meta')
    <meta name="description" content="{{ $websiteParameter->meta_description ?: 'Matrimony Service in Bangladesh' }}">
    <meta name="author" content="{{ $websiteParameter->meta_author ?: 'Marriage Solution' }}">
    <meta name="keywords" content="{{ $websiteParameter->meta_keyword ?: 'Matchmaker Service in Bangladesh' }}">

    @if ($websiteParameter->google_analytics_code)
    {!! $websiteParameter->google_analytics_code !!}
    @endif

    @if ($websiteParameter->facebook_pixel_code)
    {!! $websiteParameter->facebook_pixel_code !!}
    @endif

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
        rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('prt/css/w3.css')}}">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('prt/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('prt/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('prt/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('prt/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('prt/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('prt/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('prt/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('prt/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('prt/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('prt/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('prt/css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('prt/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('prt/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('prt/vendor/rs-plugin/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('prt/vendor/circle-flip-slideshow/css/component.css')}}">


    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('prt/css/skins/default.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('prt/css/custom.css')}}">

    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">




    <!-- Head Libs -->
    <script src="{{asset('prt/vendor/modernizr/modernizr.min.js')}}"></script>
    <style>
        ::selection {
            color: #FFF;
            background: #9c27b0;
        }

        a {
            color: #9c27b0;
        }

        a:hover {
            color: #af2cc5;
        }

        a:focus {
            color: #af2cc5;
        }

        a:active {
            color: #89229b;
        }

        html .text-color-primary,
        html .text-primary {
            color: #9c27b0 !important;
        }

        html .text-color-hover-primary:hover,
        html .text-hover-primary:hover {
            color: #9c27b0 !important;
        }

        html .text-color-secondary,
        html .text-secondary {
            color: #d42257 !important;
        }

        html .text-color-hover-secondary:hover,
        html .text-hover-secondary:hover {
            color: #d42257 !important;
        }

        html .text-color-tertiary,
        html .text-tertiary {
            color: #2b38b1 !important;
        }

        html .text-color-hover-tertiary:hover,
        html .text-hover-tertiary:hover {
            color: #2b38b1 !important;
        }

        html .text-color-quaternary,
        html .text-quaternary {
            color: #383f48 !important;
        }

        html .text-color-hover-quaternary:hover,
        html .text-hover-quaternary:hover {
            color: #383f48 !important;
        }

        html .text-color-dark,
        html .text-dark {
            color: #212529 !important;
        }

        html .text-color-hover-dark:hover,
        html .text-hover-dark:hover {
            color: #212529 !important;
        }

        html .text-color-light,
        html .text-light {
            color: #FFF !important;
        }

        html .text-color-hover-light:hover,
        html .text-hover-light:hover {
            color: #FFF !important;
        }

        html .svg-fill-color-primary {
            fill: #9c27b0 !important;
        }

        html .svg-fill-color-primary svg path,
        html .svg-fill-color-primary svg rect,
        html .svg-fill-color-primary svg line,
        html .svg-fill-color-primary svg polyline,
        html .svg-fill-color-primary svg polygon {
            fill: #9c27b0 !important;
        }

        html .svg-stroke-color-primary {
            stroke: #9c27b0 !important;
        }

        html .svg-stroke-color-primary svg path,
        html .svg-stroke-color-primary svg rect,
        html .svg-stroke-color-primary svg line,
        html .svg-stroke-color-primary svg polyline,
        html .svg-stroke-color-primary svg polygon {
            stroke: #9c27b0 !important;
        }

        html .svg-fill-color-secondary {
            fill: #d42257 !important;
        }

        html .svg-fill-color-secondary svg path,
        html .svg-fill-color-secondary svg rect,
        html .svg-fill-color-secondary svg line,
        html .svg-fill-color-secondary svg polyline,
        html .svg-fill-color-secondary svg polygon {
            fill: #d42257 !important;
        }

        html .svg-stroke-color-secondary {
            stroke: #d42257 !important;
        }

        html .svg-stroke-color-secondary svg path,
        html .svg-stroke-color-secondary svg rect,
        html .svg-stroke-color-secondary svg line,
        html .svg-stroke-color-secondary svg polyline,
        html .svg-stroke-color-secondary svg polygon {
            stroke: #d42257 !important;
        }

        html .svg-fill-color-tertiary {
            fill: #2b38b1 !important;
        }

        html .svg-fill-color-tertiary svg path,
        html .svg-fill-color-tertiary svg rect,
        html .svg-fill-color-tertiary svg line,
        html .svg-fill-color-tertiary svg polyline,
        html .svg-fill-color-tertiary svg polygon {
            fill: #2b38b1 !important;
        }

        html .svg-stroke-color-tertiary {
            stroke: #2b38b1 !important;
        }

        html .svg-stroke-color-tertiary svg path,
        html .svg-stroke-color-tertiary svg rect,
        html .svg-stroke-color-tertiary svg line,
        html .svg-stroke-color-tertiary svg polyline,
        html .svg-stroke-color-tertiary svg polygon {
            stroke: #2b38b1 !important;
        }

        html .svg-fill-color-quaternary {
            fill: #383f48 !important;
        }

        html .svg-fill-color-quaternary svg path,
        html .svg-fill-color-quaternary svg rect,
        html .svg-fill-color-quaternary svg line,
        html .svg-fill-color-quaternary svg polyline,
        html .svg-fill-color-quaternary svg polygon {
            fill: #383f48 !important;
        }

        html .svg-stroke-color-quaternary {
            stroke: #383f48 !important;
        }

        html .svg-stroke-color-quaternary svg path,
        html .svg-stroke-color-quaternary svg rect,
        html .svg-stroke-color-quaternary svg line,
        html .svg-stroke-color-quaternary svg polyline,
        html .svg-stroke-color-quaternary svg polygon {
            stroke: #383f48 !important;
        }

        html .svg-fill-color-dark {
            fill: #212529 !important;
        }

        html .svg-fill-color-dark svg path,
        html .svg-fill-color-dark svg rect,
        html .svg-fill-color-dark svg line,
        html .svg-fill-color-dark svg polyline,
        html .svg-fill-color-dark svg polygon {
            fill: #212529 !important;
        }

        html .svg-stroke-color-dark {
            stroke: #212529 !important;
        }

        html .svg-stroke-color-dark svg path,
        html .svg-stroke-color-dark svg rect,
        html .svg-stroke-color-dark svg line,
        html .svg-stroke-color-dark svg polyline,
        html .svg-stroke-color-dark svg polygon {
            stroke: #212529 !important;
        }

        html .svg-fill-color-light {
            fill: #FFF !important;
        }

        html .svg-fill-color-light svg path,
        html .svg-fill-color-light svg rect,
        html .svg-fill-color-light svg line,
        html .svg-fill-color-light svg polyline,
        html .svg-fill-color-light svg polygon {
            fill: #FFF !important;
        }

        html .svg-stroke-color-light {
            stroke: #FFF !important;
        }

        html .svg-stroke-color-light svg path,
        html .svg-stroke-color-light svg rect,
        html .svg-stroke-color-light svg line,
        html .svg-stroke-color-light svg polyline,
        html .svg-stroke-color-light svg polygon {
            stroke: #FFF !important;
        }

        .gradient-text-color {
            color: #9c27b0;
            background: linear-gradient(to bottom right, #9c27b0, #d42257);
            background-image: linear-gradient(to right, #9c27b0, #d42257);
        }

        html .bg-color-primary,
        html .bg-primary {
            background-color: #9c27b0 !important;
        }

        html .bg-color-hover-primary:hover,
        html .bg-hover-primary:hover {
            background-color: #9c27b0 !important;
        }

        html .bg-color-after-primary:after {
            background-color: #9c27b0 !important;
        }

        html .bg-color-hover-after-primary:after:hover {
            background-color: #9c27b0 !important;
        }

        html .bg-color-before-primary:before {
            background-color: #9c27b0 !important;
        }

        html .bg-color-hover-before-primary:before:hover {
            background-color: #9c27b0 !important;
        }

        html .bg-color-secondary,
        html .bg-secondary {
            background-color: #d42257 !important;
        }

        html .bg-color-hover-secondary:hover,
        html .bg-hover-secondary:hover {
            background-color: #d42257 !important;
        }

        html .bg-color-after-secondary:after {
            background-color: #d42257 !important;
        }

        html .bg-color-hover-after-secondary:after:hover {
            background-color: #d42257 !important;
        }

        html .bg-color-before-secondary:before {
            background-color: #d42257 !important;
        }

        html .bg-color-hover-before-secondary:before:hover {
            background-color: #d42257 !important;
        }

        html .bg-color-tertiary,
        html .bg-tertiary {
            background-color: #2b38b1 !important;
        }

        html .bg-color-hover-tertiary:hover,
        html .bg-hover-tertiary:hover {
            background-color: #2b38b1 !important;
        }

        html .bg-color-after-tertiary:after {
            background-color: #2b38b1 !important;
        }

        html .bg-color-hover-after-tertiary:after:hover {
            background-color: #2b38b1 !important;
        }

        html .bg-color-before-tertiary:before {
            background-color: #2b38b1 !important;
        }

        html .bg-color-hover-before-tertiary:before:hover {
            background-color: #2b38b1 !important;
        }

        html .bg-color-quaternary,
        html .bg-quaternary {
            background-color: #383f48 !important;
        }

        html .bg-color-hover-quaternary:hover,
        html .bg-hover-quaternary:hover {
            background-color: #383f48 !important;
        }

        html .bg-color-after-quaternary:after {
            background-color: #383f48 !important;
        }

        html .bg-color-hover-after-quaternary:after:hover {
            background-color: #383f48 !important;
        }

        html .bg-color-before-quaternary:before {
            background-color: #383f48 !important;
        }

        html .bg-color-hover-before-quaternary:before:hover {
            background-color: #383f48 !important;
        }

        html .bg-color-dark,
        html .bg-dark {
            background-color: #212529 !important;
        }

        html .bg-color-hover-dark:hover,
        html .bg-hover-dark:hover {
            background-color: #212529 !important;
        }

        html .bg-color-after-dark:after {
            background-color: #212529 !important;
        }

        html .bg-color-hover-after-dark:after:hover {
            background-color: #212529 !important;
        }

        html .bg-color-before-dark:before {
            background-color: #212529 !important;
        }

        html .bg-color-hover-before-dark:before:hover {
            background-color: #212529 !important;
        }

        html .bg-color-light,
        html .bg-light {
            background-color: #FFF !important;
        }

        html .bg-color-hover-light:hover,
        html .bg-hover-light:hover {
            background-color: #FFF !important;
        }

        html .bg-color-after-light:after {
            background-color: #FFF !important;
        }

        html .bg-color-hover-after-light:after:hover {
            background-color: #FFF !important;
        }

        html .bg-color-before-light:before {
            background-color: #FFF !important;
        }

        html .bg-color-hover-before-light:before:hover {
            background-color: #FFF !important;
        }

        .bg-gradient {
            background: linear-gradient(135deg, #9c27b0 0%, #d42257 80%);
        }

        /* Color Transition */
        @keyframes colorTransition {
            0% {
                background-color: #9c27b0;
            }

            33% {
                background-color: #d42257;
            }

            66% {
                background-color: #2b38b1;
            }

            100% {
                background-color: #383f48;
            }

            ;
        }

        html .border-color-primary {
            border-color: #9c27b0 !important;
        }

        html .border-color-hover-primary:hover {
            border-color: #9c27b0 !important;
        }

        html .border-color-secondary {
            border-color: #d42257 !important;
        }

        html .border-color-hover-secondary:hover {
            border-color: #d42257 !important;
        }

        html .border-color-tertiary {
            border-color: #2b38b1 !important;
        }

        html .border-color-hover-tertiary:hover {
            border-color: #2b38b1 !important;
        }

        html .border-color-quaternary {
            border-color: #383f48 !important;
        }

        html .border-color-hover-quaternary:hover {
            border-color: #383f48 !important;
        }

        html .border-color-dark {
            border-color: #212529 !important;
        }

        html .border-color-hover-dark:hover {
            border-color: #212529 !important;
        }

        html .border-color-light {
            border-color: #FFF !important;
        }

        html .border-color-hover-light:hover {
            border-color: #FFF !important;
        }

        .alternative-font {
            color: #9c27b0;
        }

        html .box-shadow-1-primary:before {
            box-shadow: 0 30px 90px #9c27b0 !important;
        }

        html .box-shadow-1-secondary:before {
            box-shadow: 0 30px 90px #d42257 !important;
        }

        html .box-shadow-1-tertiary:before {
            box-shadow: 0 30px 90px #2b38b1 !important;
        }

        html .box-shadow-1-quaternary:before {
            box-shadow: 0 30px 90px #383f48 !important;
        }

        html .box-shadow-1-dark:before {
            box-shadow: 0 30px 90px #212529 !important;
        }

        html .box-shadow-1-light:before {
            box-shadow: 0 30px 90px #FFF !important;
        }

        html .blockquote-primary {
            border-color: #9c27b0 !important;
        }

        html .blockquote-secondary {
            border-color: #d42257 !important;
        }

        html .blockquote-tertiary {
            border-color: #2b38b1 !important;
        }

        html .blockquote-quaternary {
            border-color: #383f48 !important;
        }

        html .blockquote-dark {
            border-color: #212529 !important;
        }

        html .blockquote-light {
            border-color: #FFF !important;
        }

        p.drop-caps:first-letter {
            color: #9c27b0;
        }

        p.drop-caps.drop-caps-style-2:first-letter {
            background-color: #9c27b0;
        }

        html .nav-color-primary nav>ul>li>a {
            color: #9c27b0 !important;
        }

        html .nav-color-primary:not(.header-nav-main-dropdown-arrow) nav>ul>li>a:before {
            background-color: #9c27b0 !important;
        }

        html .nav-color-primary:not(.header-nav-main-dropdown-arrow) nav>ul>li ul {
            border-top-color: #9c27b0 !important;
        }

        html .nav-color-secondary nav>ul>li>a {
            color: #d42257 !important;
        }

        html .nav-color-secondary:not(.header-nav-main-dropdown-arrow) nav>ul>li>a:before {
            background-color: #d42257 !important;
        }

        html .nav-color-secondary:not(.header-nav-main-dropdown-arrow) nav>ul>li ul {
            border-top-color: #d42257 !important;
        }

        html .nav-color-tertiary nav>ul>li>a {
            color: #2b38b1 !important;
        }

        html .nav-color-tertiary:not(.header-nav-main-dropdown-arrow) nav>ul>li>a:before {
            background-color: #2b38b1 !important;
        }

        html .nav-color-tertiary:not(.header-nav-main-dropdown-arrow) nav>ul>li ul {
            border-top-color: #2b38b1 !important;
        }

        html .nav-color-quaternary nav>ul>li>a {
            color: #383f48 !important;
        }

        html .nav-color-quaternary:not(.header-nav-main-dropdown-arrow) nav>ul>li>a:before {
            background-color: #383f48 !important;
        }

        html .nav-color-quaternary:not(.header-nav-main-dropdown-arrow) nav>ul>li ul {
            border-top-color: #383f48 !important;
        }

        html .nav-color-dark nav>ul>li>a {
            color: #212529 !important;
        }

        html .nav-color-dark:not(.header-nav-main-dropdown-arrow) nav>ul>li>a:before {
            background-color: #212529 !important;
        }

        html .nav-color-dark:not(.header-nav-main-dropdown-arrow) nav>ul>li ul {
            border-top-color: #212529 !important;
        }

        html .nav-color-light nav>ul>li>a {
            color: #FFF !important;
        }

        html .nav-color-light:not(.header-nav-main-dropdown-arrow) nav>ul>li>a:before {
            background-color: #FFF !important;
        }

        html .nav-color-light:not(.header-nav-main-dropdown-arrow) nav>ul>li ul {
            border-top-color: #FFF !important;
        }

        .nav-pills>li.active>a,
        .nav-pills .nav-link.active {
            background-color: #9c27b0;
        }

        .nav-pills>li.active>a:hover,
        .nav-pills .nav-link.active:hover,
        .nav-pills>li.active>a:focus,
        .nav-pills .nav-link.active:focus {
            background-color: #9c27b0;
        }

        .nav-active-style-1>li>a:hover,
        .nav-active-style-1>li>a:focus,
        .nav-active-style-1>li>a.active {
            border-bottom-color: #9c27b0;
        }

        html .nav-pills-primary a {
            color: #9c27b0;
        }

        html .nav-pills-primary a:hover {
            color: #af2cc5;
        }

        html .nav-pills-primary a:focus {
            color: #af2cc5;
        }

        html .nav-pills-primary a:active {
            color: #89229b;
        }

        html .nav-pills-primary .nav-link.active,
        html .nav-pills-primary>li.active>a {
            background-color: #9c27b0;
        }

        html .nav-pills-primary .nav-link.active:hover,
        html .nav-pills-primary>li.active>a:hover,
        html .nav-pills-primary .nav-link.active:focus,
        html .nav-pills-primary>li.active>a:focus {
            background-color: #9c27b0;
        }

        html .nav-pills-secondary a {
            color: #d42257;
        }

        html .nav-pills-secondary a:hover {
            color: #de3165;
        }

        html .nav-pills-secondary a:focus {
            color: #de3165;
        }

        html .nav-pills-secondary a:active {
            color: #be1e4e;
        }

        html .nav-pills-secondary .nav-link.active,
        html .nav-pills-secondary>li.active>a {
            background-color: #d42257;
        }

        html .nav-pills-secondary .nav-link.active:hover,
        html .nav-pills-secondary>li.active>a:hover,
        html .nav-pills-secondary .nav-link.active:focus,
        html .nav-pills-secondary>li.active>a:focus {
            background-color: #d42257;
        }

        html .nav-pills-tertiary a {
            color: #2b38b1;
        }

        html .nav-pills-tertiary a:hover {
            color: #303ec6;
        }

        html .nav-pills-tertiary a:focus {
            color: #303ec6;
        }

        html .nav-pills-tertiary a:active {
            color: #26329c;
        }

        html .nav-pills-tertiary .nav-link.active,
        html .nav-pills-tertiary>li.active>a {
            background-color: #2b38b1;
        }

        html .nav-pills-tertiary .nav-link.active:hover,
        html .nav-pills-tertiary>li.active>a:hover,
        html .nav-pills-tertiary .nav-link.active:focus,
        html .nav-pills-tertiary>li.active>a:focus {
            background-color: #2b38b1;
        }

        html .nav-pills-quaternary a {
            color: #383f48;
        }

        html .nav-pills-quaternary a:hover {
            color: #434c56;
        }

        html .nav-pills-quaternary a:focus {
            color: #434c56;
        }

        html .nav-pills-quaternary a:active {
            color: #2d323a;
        }

        html .nav-pills-quaternary .nav-link.active,
        html .nav-pills-quaternary>li.active>a {
            background-color: #383f48;
        }

        html .nav-pills-quaternary .nav-link.active:hover,
        html .nav-pills-quaternary>li.active>a:hover,
        html .nav-pills-quaternary .nav-link.active:focus,
        html .nav-pills-quaternary>li.active>a:focus {
            background-color: #383f48;
        }

        html .nav-pills-dark a {
            color: #212529;
        }

        html .nav-pills-dark a:hover {
            color: #2c3237;
        }

        html .nav-pills-dark a:focus {
            color: #2c3237;
        }

        html .nav-pills-dark a:active {
            color: #16181b;
        }

        html .nav-pills-dark .nav-link.active,
        html .nav-pills-dark>li.active>a {
            background-color: #212529;
        }

        html .nav-pills-dark .nav-link.active:hover,
        html .nav-pills-dark>li.active>a:hover,
        html .nav-pills-dark .nav-link.active:focus,
        html .nav-pills-dark>li.active>a:focus {
            background-color: #212529;
        }

        html .nav-pills-light a {
            color: #FFF;
        }

        html .nav-pills-light a:hover {
            color: #ffffff;
        }

        html .nav-pills-light a:focus {
            color: #ffffff;
        }

        html .nav-pills-light a:active {
            color: #f2f2f2;
        }

        html .nav-pills-light .nav-link.active,
        html .nav-pills-light>li.active>a {
            background-color: #FFF;
        }

        html .nav-pills-light .nav-link.active:hover,
        html .nav-pills-light>li.active>a:hover,
        html .nav-pills-light .nav-link.active:focus,
        html .nav-pills-light>li.active>a:focus {
            background-color: #FFF;
        }

        .section-scroll-dots-navigation.scroll-dots-navigation-colored>ul>li>a:before {
            background: #9c27b0;
        }

        .sort-source-wrapper .nav>li.active>a {
            color: #9c27b0;
        }

        .sort-source-wrapper .nav>li.active>a:hover,
        .sort-source-wrapper .nav>li.active>a:focus {
            color: #9c27b0;
        }

        .sort-source.sort-source-style-2>li.active>a:after {
            border-top-color: #9c27b0;
        }

        .sort-source.sort-source-style-3>li.active>a {
            border-bottom-color: #9c27b0 !important;
            color: #9c27b0 !important;
        }

        html .badge-primary {
            background-color: #9c27b0;
        }

        html .badge-secondary {
            background-color: #d42257;
        }

        html .badge-tertiary {
            background-color: #2b38b1;
        }

        html .badge-quaternary {
            background-color: #383f48;
        }

        html .badge-dark {
            background-color: #212529;
        }

        html .badge-light {
            background-color: #FFF;
        }

        html .overlay-color-primary:not(.no-skin):before {
            background-color: #9c27b0 !important;
        }

        html .overlay-color-secondary:not(.no-skin):before {
            background-color: #d42257 !important;
        }

        html .overlay-color-tertiary:not(.no-skin):before {
            background-color: #2b38b1 !important;
        }

        html .overlay-color-quaternary:not(.no-skin):before {
            background-color: #383f48 !important;
        }

        html .overlay-color-dark:not(.no-skin):before {
            background-color: #212529 !important;
        }

        html .overlay-color-light:not(.no-skin):before {
            background-color: #FFF !important;
        }

        .overlay-gradient:before {
            background-color: #2b38b1 !important;
            background-image: linear-gradient(to right, #2b38b1 0%, #383f48 100%) !important;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2b38b1', endColorstr='#383f48', GradientType=1);
        }

        .btn-link {
            color: #9c27b0;
        }

        .btn-link:hover {
            color: #af2cc5;
        }

        .btn-link:active {
            color: #89229b;
        }

        html .btn-primary {
            background-color: #9c27b0;
            border-color: #9c27b0 #9c27b0 #771e86;
            color: #FFF;
        }

        html .btn-primary:hover,
        html .btn-primary.hover {
            background-color: #b82ecf;
            border-color: #bc37d3 #bc37d3 #9c27b0;
            color: #FFF;
        }

        html .btn-primary:focus,
        html .btn-primary.focus {
            background-color: #802091;
            border-color: #771e86 #771e86 #52145d;
            color: #FFF;
            box-shadow: 0 0 0 3px rgba(156, 39, 176, 0.5);
        }

        html .btn-primary.disabled,
        html .btn-primary:disabled {
            background-color: #9c27b0;
            border-color: #9c27b0 #9c27b0 #771e86;
        }

        html .btn-primary:active,
        html .btn-primary.active {
            background-color: #802091 !important;
            background-image: none !important;
            border-color: #771e86 #771e86 #52145d !important;
        }

        html .btn-primary-scale-2 {
            background-color: #771e86;
            border-color: #771e86 #771e86 #52145d;
            color: #FFF;
        }

        html .btn-primary-scale-2:hover,
        html .btn-primary-scale-2.hover {
            background-color: #9325a6;
            border-color: #9c27b0 #9c27b0 #771e86;
            color: #FFF;
        }

        html .btn-primary-scale-2:focus,
        html .btn-primary-scale-2.focus {
            background-color: #5b1767;
            border-color: #52145d #52145d #2d0b33;
            color: #FFF;
            box-shadow: 0 0 0 3px rgba(119, 30, 134, 0.5);
        }

        html .btn-primary-scale-2.disabled,
        html .btn-primary-scale-2:disabled {
            background-color: #771e86;
            border-color: #771e86 #771e86 #52145d;
        }

        html .btn-primary-scale-2:active,
        html .btn-primary-scale-2.active {
            background-color: #5b1767 !important;
            background-image: none !important;
            border-color: #52145d #52145d #2d0b33 !important;
        }

        html .show>.btn-primary.dropdown-toggle,
        html .show>.btn-primary-scale-2.dropdown-toggle {
            background-color: #802091 !important;
            background-image: none !important;
            border-color: #771e86 #771e86 #52145d !important;
        }

        html .btn-secondary {
            background-color: #d42257;
            border-color: #d42257 #d42257 #a81b45;
            color: #FFF;
        }

        html .btn-secondary:hover,
        html .btn-secondary.hover {
            background-color: #e03c6d;
            border-color: #e24775 #e24775 #d42257;
            color: #FFF;
        }

        html .btn-secondary:focus,
        html .btn-secondary.focus {
            background-color: #b31d49;
            border-color: #a81b45 #a81b45 #7c1433;
            color: #FFF;
            box-shadow: 0 0 0 3px rgba(212, 34, 87, 0.5);
        }

        html .btn-secondary.disabled,
        html .btn-secondary:disabled {
            background-color: #d42257;
            border-color: #d42257 #d42257 #a81b45;
        }

        html .btn-secondary:active,
        html .btn-secondary.active {
            background-color: #b31d49 !important;
            background-image: none !important;
            border-color: #a81b45 #a81b45 #7c1433 !important;
        }

        html .btn-secondary-scale-2 {
            background-color: #a81b45;
            border-color: #a81b45 #a81b45 #7c1433;
            color: #FFF;
        }

        html .btn-secondary-scale-2:hover,
        html .btn-secondary-scale-2.hover {
            background-color: #c92052;
            border-color: #d42257 #d42257 #a81b45;
            color: #FFF;
        }

        html .btn-secondary-scale-2:focus,
        html .btn-secondary-scale-2.focus {
            background-color: #871637;
            border-color: #7c1433 #7c1433 #500d21;
            color: #FFF;
            box-shadow: 0 0 0 3px rgba(168, 27, 69, 0.5);
        }

        html .btn-secondary-scale-2.disabled,
        html .btn-secondary-scale-2:disabled {
            background-color: #a81b45;
            border-color: #a81b45 #a81b45 #7c1433;
        }

        html .btn-secondary-scale-2:active,
        html .btn-secondary-scale-2.active {
            background-color: #871637 !important;
            background-image: none !important;
            border-color: #7c1433 #7c1433 #500d21 !important;
        }

        html .show>.btn-secondary.dropdown-toggle,
        html .show>.btn-secondary-scale-2.dropdown-toggle {
            background-color: #b31d49 !important;
            background-image: none !important;
            border-color: #a81b45 #a81b45 #7c1433 !important;
        }

        html .btn-tertiary {
            background-color: #2b38b1;
            border-color: #2b38b1 #2b38b1 #212b88;
            color: #FFF;
        }

        html .btn-tertiary:hover,
        html .btn-tertiary.hover {
            background-color: #3443ce;
            border-color: #3f4dd0 #3f4dd0 #2b38b1;
            color: #FFF;
        }

        html .btn-tertiary:focus,
        html .btn-tertiary.focus {
            background-color: #242e92;
            border-color: #212b88 #212b88 #171e5f;
            color: #FFF;
            box-shadow: 0 0 0 3px rgba(43, 56, 177, 0.5);
        }

        html .btn-tertiary.disabled,
        html .btn-tertiary:disabled {
            background-color: #2b38b1;
            border-color: #2b38b1 #2b38b1 #212b88;
        }

        html .btn-tertiary:active,
        html .btn-tertiary.active {
            background-color: #242e92 !important;
            background-image: none !important;
            border-color: #212b88 #212b88 #171e5f !important;
        }

        html .btn-tertiary-scale-2 {
            background-color: #212b88;
            border-color: #212b88 #212b88 #171e5f;
            color: #FFF;
        }

        html .btn-tertiary-scale-2:hover,
        html .btn-tertiary-scale-2.hover {
            background-color: #2935a7;
            border-color: #2b38b1 #2b38b1 #212b88;
            color: #FFF;
        }

        html .btn-tertiary-scale-2:focus,
        html .btn-tertiary-scale-2.focus {
            background-color: #1a2169;
            border-color: #171e5f #171e5f #0d1136;
            color: #FFF;
            box-shadow: 0 0 0 3px rgba(33, 43, 136, 0.5);
        }

        html .btn-tertiary-scale-2.disabled,
        html .btn-tertiary-scale-2:disabled {
            background-color: #212b88;
            border-color: #212b88 #212b88 #171e5f;
        }

        html .btn-tertiary-scale-2:active,
        html .btn-tertiary-scale-2.active {
            background-color: #1a2169 !important;
            background-image: none !important;
            border-color: #171e5f #171e5f #0d1136 !important;
        }

        html .show>.btn-tertiary.dropdown-toggle,
        html .show>.btn-tertiary-scale-2.dropdown-toggle {
            background-color: #242e92 !important;
            background-image: none !important;
            border-color: #212b88 #212b88 #171e5f !important;
        }

        html .btn-quaternary {
            background-color: #383f48;
            border-color: #383f48 #383f48 #22262b;
            color: #FFF;
        }

        html .btn-quaternary:hover,
        html .btn-quaternary.hover {
            background-color: #49525e;
            border-color: #4e5865 #4e5865 #383f48;
            color: #FFF;
        }

        html .btn-quaternary:focus,
        html .btn-quaternary.focus {
            background-color: #272c32;
            border-color: #22262b #22262b #0b0d0f;
            color: #FFF;
            box-shadow: 0 0 0 3px rgba(56, 63, 72, 0.5);
        }

        html .btn-quaternary.disabled,
        html .btn-quaternary:disabled {
            background-color: #383f48;
            border-color: #383f48 #383f48 #22262b;
        }

        html .btn-quaternary:active,
        html .btn-quaternary.active {
            background-color: #272c32 !important;
            background-image: none !important;
            border-color: #22262b #22262b #0b0d0f !important;
        }

        html .btn-quaternary-scale-2 {
            background-color: #22262b;
            border-color: #22262b #22262b #0b0d0f;
            color: #FFF;
        }

        html .btn-quaternary-scale-2:hover,
        html .btn-quaternary-scale-2.hover {
            background-color: #323941;
            border-color: #383f48 #383f48 #22262b;
            color: #FFF;
        }

        html .btn-quaternary-scale-2:focus,
        html .btn-quaternary-scale-2.focus {
            background-color: #111316;
            border-color: #0b0d0f #0b0d0f #000000;
            color: #FFF;
            box-shadow: 0 0 0 3px rgba(34, 38, 43, 0.5);
        }

        html .btn-quaternary-scale-2.disabled,
        html .btn-quaternary-scale-2:disabled {
            background-color: #22262b;
            border-color: #22262b #22262b #0b0d0f;
        }

        html .btn-quaternary-scale-2:active,
        html .btn-quaternary-scale-2.active {
            background-color: #111316 !important;
            background-image: none !important;
            border-color: #0b0d0f #0b0d0f #000000 !important;
        }

        html .show>.btn-quaternary.dropdown-toggle,
        html .show>.btn-quaternary-scale-2.dropdown-toggle {
            background-color: #272c32 !important;
            background-image: none !important;
            border-color: #22262b #22262b #0b0d0f !important;
        }

        html .btn-dark {
            background-color: #212529;
            border-color: #212529 #212529 #0a0c0d;
            color: #FFF;
        }

        html .btn-dark:hover,
        html .btn-dark.hover {
            background-color: #32383e;
            border-color: #383f45 #383f45 #212529;
            color: #FFF;
        }

        html .btn-dark:focus,
        html .btn-dark.focus {
            background-color: #101214;
            border-color: #0a0c0d #0a0c0d #000000;
            color: #FFF;
            box-shadow: 0 0 0 3px rgba(33, 37, 41, 0.5);
        }

        html .btn-dark.disabled,
        html .btn-dark:disabled {
            background-color: #212529;
            border-color: #212529 #212529 #0a0c0d;
        }

        html .btn-dark:active,
        html .btn-dark.active {
            background-color: #101214 !important;
            background-image: none !important;
            border-color: #0a0c0d #0a0c0d #000000 !important;
        }

        html .btn-dark-scale-2 {
            background-color: #0a0c0d;
            border-color: #0a0c0d #0a0c0d #000000;
            color: #FFF;
        }

        html .btn-dark-scale-2:hover,
        html .btn-dark-scale-2.hover {
            background-color: #1b1f22;
            border-color: #212529 #212529 #0a0c0d;
            color: #FFF;
        }

        html .btn-dark-scale-2:focus,
        html .btn-dark-scale-2.focus {
            background-color: #000000;
            border-color: #000000 #000000 #000000;
            color: #FFF;
            box-shadow: 0 0 0 3px rgba(10, 11, 13, 0.5);
        }

        html .btn-dark-scale-2.disabled,
        html .btn-dark-scale-2:disabled {
            background-color: #0a0c0d;
            border-color: #0a0c0d #0a0c0d #000000;
        }

        html .btn-dark-scale-2:active,
        html .btn-dark-scale-2.active {
            background-color: #000000 !important;
            background-image: none !important;
            border-color: #000000 #000000 #000000 !important;
        }

        html .show>.btn-dark.dropdown-toggle,
        html .show>.btn-dark-scale-2.dropdown-toggle {
            background-color: #101214 !important;
            background-image: none !important;
            border-color: #0a0c0d #0a0c0d #000000 !important;
        }

        html .btn-light {
            background-color: #FFF;
            border-color: #FFF #FFF #e6e6e6;
            color: #777;
        }

        html .btn-light:hover,
        html .btn-light.hover {
            background-color: #ffffff;
            border-color: #ffffff #ffffff #FFF;
            color: #777;
        }

        html .btn-light:focus,
        html .btn-light.focus {
            background-color: #ececec;
            border-color: #e6e6e6 #e6e6e6 #cccccc;
            color: #777;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.5);
        }

        html .btn-light.disabled,
        html .btn-light:disabled {
            background-color: #FFF;
            border-color: #FFF #FFF #e6e6e6;
        }

        html .btn-light:active,
        html .btn-light.active {
            background-color: #ececec !important;
            background-image: none !important;
            border-color: #e6e6e6 #e6e6e6 #cccccc !important;
        }

        html .btn-light-scale-2 {
            background-color: #e6e6e6;
            border-color: #e6e6e6 #e6e6e6 #cccccc;
            color: #777;
        }

        html .btn-light-scale-2:hover,
        html .btn-light-scale-2.hover {
            background-color: #f9f9f9;
            border-color: #ffffff #ffffff #e6e6e6;
            color: #777;
        }

        html .btn-light-scale-2:focus,
        html .btn-light-scale-2.focus {
            background-color: #d2d2d2;
            border-color: #cccccc #cccccc #b3b3b3;
            color: #777;
            box-shadow: 0 0 0 3px rgba(230, 230, 230, 0.5);
        }

        html .btn-light-scale-2.disabled,
        html .btn-light-scale-2:disabled {
            background-color: #e6e6e6;
            border-color: #e6e6e6 #e6e6e6 #cccccc;
        }

        html .btn-light-scale-2:active,
        html .btn-light-scale-2.active {
            background-color: #d2d2d2 !important;
            background-image: none !important;
            border-color: #cccccc #cccccc #b3b3b3 !important;
        }

        html .show>.btn-light.dropdown-toggle,
        html .show>.btn-light-scale-2.dropdown-toggle {
            background-color: #ececec !important;
            background-image: none !important;
            border-color: #e6e6e6 #e6e6e6 #cccccc !important;
        }

        html .btn-outline.btn-primary {
            color: #9c27b0;
            background-color: transparent;
            background-image: none;
            border-color: #9c27b0;
        }

        html .btn-outline.btn-primary:hover,
        html .btn-outline.btn-primary.hover {
            color: #FFF;
            background-color: #9c27b0;
            border-color: #9c27b0;
        }

        html .btn-outline.btn-primary:focus,
        html .btn-outline.btn-primary.focus {
            box-shadow: 0 0 0 3px rgba(156, 39, 176, 0.5);
        }

        html .btn-outline.btn-primary.disabled,
        html .btn-outline.btn-primary:disabled {
            color: #9c27b0;
            background-color: transparent;
        }

        html .btn-outline.btn-primary:active,
        html .btn-outline.btn-primary.active {
            color: #FFF !important;
            background-color: #9c27b0 !important;
            border-color: #9c27b0 !important;
        }

        html .show>.btn-outline.btn-primary.dropdown-toggle {
            color: #FFF !important;
            background-color: #9c27b0 !important;
            border-color: #9c27b0 !important;
        }

        html .btn-outline.btn-secondary {
            color: #d42257;
            background-color: transparent;
            background-image: none;
            border-color: #d42257;
        }

        html .btn-outline.btn-secondary:hover,
        html .btn-outline.btn-secondary.hover {
            color: #FFF;
            background-color: #d42257;
            border-color: #d42257;
        }

        html .btn-outline.btn-secondary:focus,
        html .btn-outline.btn-secondary.focus {
            box-shadow: 0 0 0 3px rgba(212, 34, 87, 0.5);
        }

        html .btn-outline.btn-secondary.disabled,
        html .btn-outline.btn-secondary:disabled {
            color: #d42257;
            background-color: transparent;
        }

        html .btn-outline.btn-secondary:active,
        html .btn-outline.btn-secondary.active {
            color: #FFF !important;
            background-color: #d42257 !important;
            border-color: #d42257 !important;
        }

        html .show>.btn-outline.btn-secondary.dropdown-toggle {
            color: #FFF !important;
            background-color: #d42257 !important;
            border-color: #d42257 !important;
        }

        html .btn-outline.btn-tertiary {
            color: #2b38b1;
            background-color: transparent;
            background-image: none;
            border-color: #2b38b1;
        }

        html .btn-outline.btn-tertiary:hover,
        html .btn-outline.btn-tertiary.hover {
            color: #FFF;
            background-color: #2b38b1;
            border-color: #2b38b1;
        }

        html .btn-outline.btn-tertiary:focus,
        html .btn-outline.btn-tertiary.focus {
            box-shadow: 0 0 0 3px rgba(43, 56, 177, 0.5);
        }

        html .btn-outline.btn-tertiary.disabled,
        html .btn-outline.btn-tertiary:disabled {
            color: #2b38b1;
            background-color: transparent;
        }

        html .btn-outline.btn-tertiary:active,
        html .btn-outline.btn-tertiary.active {
            color: #FFF !important;
            background-color: #2b38b1 !important;
            border-color: #2b38b1 !important;
        }

        html .show>.btn-outline.btn-tertiary.dropdown-toggle {
            color: #FFF !important;
            background-color: #2b38b1 !important;
            border-color: #2b38b1 !important;
        }

        html .btn-outline.btn-quaternary {
            color: #383f48;
            background-color: transparent;
            background-image: none;
            border-color: #383f48;
        }

        html .btn-outline.btn-quaternary:hover,
        html .btn-outline.btn-quaternary.hover {
            color: #FFF;
            background-color: #383f48;
            border-color: #383f48;
        }

        html .btn-outline.btn-quaternary:focus,
        html .btn-outline.btn-quaternary.focus {
            box-shadow: 0 0 0 3px rgba(56, 63, 72, 0.5);
        }

        html .btn-outline.btn-quaternary.disabled,
        html .btn-outline.btn-quaternary:disabled {
            color: #383f48;
            background-color: transparent;
        }

        html .btn-outline.btn-quaternary:active,
        html .btn-outline.btn-quaternary.active {
            color: #FFF !important;
            background-color: #383f48 !important;
            border-color: #383f48 !important;
        }

        html .show>.btn-outline.btn-quaternary.dropdown-toggle {
            color: #FFF !important;
            background-color: #383f48 !important;
            border-color: #383f48 !important;
        }

        html .btn-outline.btn-dark {
            color: #212529;
            background-color: transparent;
            background-image: none;
            border-color: #212529;
        }

        html .btn-outline.btn-dark:hover,
        html .btn-outline.btn-dark.hover {
            color: #FFF;
            background-color: #212529;
            border-color: #212529;
        }

        html .btn-outline.btn-dark:focus,
        html .btn-outline.btn-dark.focus {
            box-shadow: 0 0 0 3px rgba(33, 37, 41, 0.5);
        }

        html .btn-outline.btn-dark.disabled,
        html .btn-outline.btn-dark:disabled {
            color: #212529;
            background-color: transparent;
        }

        html .btn-outline.btn-dark:active,
        html .btn-outline.btn-dark.active {
            color: #FFF !important;
            background-color: #212529 !important;
            border-color: #212529 !important;
        }

        html .show>.btn-outline.btn-dark.dropdown-toggle {
            color: #FFF !important;
            background-color: #212529 !important;
            border-color: #212529 !important;
        }

        html .btn-outline.btn-light {
            color: #FFF;
            background-color: transparent;
            background-image: none;
            border-color: #FFF;
        }

        html .btn-outline.btn-light:hover,
        html .btn-outline.btn-light.hover {
            color: #777;
            background-color: #FFF;
            border-color: #FFF;
        }

        html .btn-outline.btn-light:focus,
        html .btn-outline.btn-light.focus {
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.5);
        }

        html .btn-outline.btn-light.disabled,
        html .btn-outline.btn-light:disabled {
            color: #FFF;
            background-color: transparent;
        }

        html .btn-outline.btn-light:active,
        html .btn-outline.btn-light.active {
            color: #777 !important;
            background-color: #FFF !important;
            border-color: #FFF !important;
        }

        html .show>.btn-outline.btn-light.dropdown-toggle {
            color: #777 !important;
            background-color: #FFF !important;
            border-color: #FFF !important;
        }

        html .btn-with-arrow.btn-primary {
            background-color: transparent;
            border-color: transparent;
            color: #9c27b0;
        }

        html .btn-with-arrow.btn-primary:active {
            background-color: transparent !important;
            border-color: transparent !important;
            color: #9c27b0 !important;
        }

        html .btn-with-arrow.btn-primary span {
            background-color: #9c27b0;
            box-shadow: 2px 3px 18px -3px #9c27b0;
        }

        html .btn-with-arrow.btn-primary.btn-outline {
            border-color: #9c27b0 !important;
        }

        html .btn-with-arrow.btn-primary.btn-outline:hover span {
            background-color: #af2cc5 !important;
            box-shadow: none;
        }

        html .btn-with-arrow.btn-secondary {
            background-color: transparent;
            border-color: transparent;
            color: #d42257;
        }

        html .btn-with-arrow.btn-secondary:active {
            background-color: transparent !important;
            border-color: transparent !important;
            color: #d42257 !important;
        }

        html .btn-with-arrow.btn-secondary span {
            background-color: #d42257;
            box-shadow: 2px 3px 18px -3px #d42257;
        }

        html .btn-with-arrow.btn-secondary.btn-outline {
            border-color: #d42257 !important;
        }

        html .btn-with-arrow.btn-secondary.btn-outline:hover span {
            background-color: #de3165 !important;
            box-shadow: none;
        }

        html .btn-with-arrow.btn-tertiary {
            background-color: transparent;
            border-color: transparent;
            color: #2b38b1;
        }

        html .btn-with-arrow.btn-tertiary:active {
            background-color: transparent !important;
            border-color: transparent !important;
            color: #2b38b1 !important;
        }

        html .btn-with-arrow.btn-tertiary span {
            background-color: #2b38b1;
            box-shadow: 2px 3px 18px -3px #2b38b1;
        }

        html .btn-with-arrow.btn-tertiary.btn-outline {
            border-color: #2b38b1 !important;
        }

        html .btn-with-arrow.btn-tertiary.btn-outline:hover span {
            background-color: #303ec6 !important;
            box-shadow: none;
        }

        html .btn-with-arrow.btn-quaternary {
            background-color: transparent;
            border-color: transparent;
            color: #383f48;
        }

        html .btn-with-arrow.btn-quaternary:active {
            background-color: transparent !important;
            border-color: transparent !important;
            color: #383f48 !important;
        }

        html .btn-with-arrow.btn-quaternary span {
            background-color: #383f48;
            box-shadow: 2px 3px 18px -3px #383f48;
        }

        html .btn-with-arrow.btn-quaternary.btn-outline {
            border-color: #383f48 !important;
        }

        html .btn-with-arrow.btn-quaternary.btn-outline:hover span {
            background-color: #434c56 !important;
            box-shadow: none;
        }

        html .btn-with-arrow.btn-dark {
            background-color: transparent;
            border-color: transparent;
            color: #212529;
        }

        html .btn-with-arrow.btn-dark:active {
            background-color: transparent !important;
            border-color: transparent !important;
            color: #212529 !important;
        }

        html .btn-with-arrow.btn-dark span {
            background-color: #212529;
            box-shadow: 2px 3px 18px -3px #212529;
        }

        html .btn-with-arrow.btn-dark.btn-outline {
            border-color: #212529 !important;
        }

        html .btn-with-arrow.btn-dark.btn-outline:hover span {
            background-color: #2c3237 !important;
            box-shadow: none;
        }

        html .btn-with-arrow.btn-light {
            background-color: transparent;
            border-color: transparent;
            color: #FFF;
        }

        html .btn-with-arrow.btn-light:active {
            background-color: transparent !important;
            border-color: transparent !important;
            color: #FFF !important;
        }

        html .btn-with-arrow.btn-light span {
            background-color: #FFF;
            box-shadow: 2px 3px 18px -3px #FFF;
        }

        html .btn-with-arrow.btn-light.btn-outline {
            border-color: #FFF !important;
        }

        html .btn-with-arrow.btn-light.btn-outline:hover span {
            background-color: #ffffff !important;
            box-shadow: none;
        }

        .btn-gradient:not(.btn-outline) {
            background: linear-gradient(135deg, #9c27b0 0%, #d42257 80%);
            color: #FFF;
        }

        .btn-gradient:not(.btn-outline):hover,
        .btn-gradient:not(.btn-outline).hover {
            background: linear-gradient(135deg, #b82ecf 0%, #e03c6d 80%);
            color: #FFF;
        }

        .btn-gradient:not(.btn-outline):focus,
        .btn-gradient:not(.btn-outline).focus {
            box-shadow: 0 0 0 3px rgba(156, 39, 176, 0.5);
        }

        .btn-gradient:not(.btn-outline).disabled,
        .btn-gradient:not(.btn-outline):disabled {
            background: linear-gradient(135deg, #9c27b0 0%, #d42257 80%);
        }

        .btn-gradient:not(.btn-outline):active,
        .btn-gradient:not(.btn-outline).active {
            background: linear-gradient(135deg, #802091 0%, #b31d49 80%) !important;
            color: #FFF !important;
        }

        .btn-gradient.btn-outline {
            border-image: linear-gradient(135deg, #9c27b0 0%, #d42257 80%);
            color: #9c27b0;
        }

        .btn-gradient.btn-outline:hover,
        .btn-gradient.btn-outline.hover {
            border-image: linear-gradient(135deg, #b82ecf 0%, #e03c6d 80%);
            color: #b82ecf;
        }

        .btn-gradient.btn-outline:focus,
        .btn-gradient.btn-outline.focus {
            box-shadow: 0 0 0 3px rgba(156, 39, 176, 0.5);
        }

        .btn-gradient.btn-outline.disabled,
        .btn-gradient.btn-outline:disabled {
            border-image: linear-gradient(135deg, #9c27b0 0%, #d42257 80%);
        }

        .btn-gradient.btn-outline:active,
        .btn-gradient.btn-outline.active {
            border-image: linear-gradient(135deg, #802091 0%, #b31d49 80%);
            color: #802091;
        }

        .pagination>a,
        .pagination>a:hover,
        .pagination>a:focus,
        .pagination>li>a,
        .pagination>li>span,
        .pagination>li>a:hover,
        .pagination>li>span:hover,
        .pagination>li>a:focus,
        .pagination>li>span:focus {
            color: #9c27b0;
        }

        .pagination>.active>a,
        .pagination>.active>span,
        .pagination>.active>a:hover,
        .pagination>.active>span:hover,
        .pagination>.active>a:focus,
        .pagination>.active>span:focus,
        .pagination .page-item.active .page-link {
            background-color: #9c27b0 !important;
            border-color: #9c27b0;
        }

        body.dark .pagination>li>a,
        body.dark .pagination>li>span,
        body.dark .pagination>li>a:hover,
        body.dark .pagination>li>span:hover,
        body.dark .pagination>li>a:focus,
        body.dark .pagination>li>span:focus {
            color: #9c27b0;
        }

        body.dark .pagination>.active>a,
        body.dark .pagination>.active>span,
        body.dark .pagination>.active>a:hover,
        body.dark .pagination>.active>span:hover,
        body.dark .pagination>.active>a:focus,
        body.dark .pagination>.active>span:focus {
            background-color: #9c27b0;
            border-color: #9c27b0;
        }

        .pagination>.active>a,
        body.dark .pagination>.active>a {
            background-color: #9c27b0;
            border-color: #9c27b0 #9c27b0 #771e86;
            color: #fff;
        }

        .pagination>.active>a:hover,
        body.dark .pagination>.active>a:hover,
        .pagination>.active>a.hover,
        body.dark .pagination>.active>a.hover {
            background-color: #b82ecf;
            border-color: #bc37d3 #bc37d3 #9c27b0;
            color: #fff;
        }

        .pagination>.active>a:focus,
        body.dark .pagination>.active>a:focus,
        .pagination>.active>a.focus,
        body.dark .pagination>.active>a.focus {
            background-color: #802091;
            border-color: #771e86 #771e86 #52145d;
            color: #fff;
            box-shadow: 0 0 0 3px rgba(156, 39, 176, 0.5);
        }

        .pagination>.active>a.disabled,
        body.dark .pagination>.active>a.disabled,
        .pagination>.active>a:disabled,
        body.dark .pagination>.active>a:disabled {
            background-color: #9c27b0;
            border-color: #9c27b0 #9c27b0 #771e86;
        }

        .pagination>.active>a:active,
        body.dark .pagination>.active>a:active,
        .pagination>.active>a.active,
        body.dark .pagination>.active>a.active {
            background-color: #802091 !important;
            background-image: none !important;
            border-color: #771e86 #771e86 #52145d !important;
        }

        .custom-control-input:checked~.custom-control-label::before,
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #9c27b0;
        }

        html .alert-primary {
            background-color: #9c27b0;
            border-color: #9124a3;
            color: #FFF;
        }

        html .alert-primary .alert-link {
            color: #FFF;
        }

        html .alert-secondary {
            background-color: #d42257;
            border-color: #c72052;
            color: #FFF;
        }

        html .alert-secondary .alert-link {
            color: #FFF;
        }

        html .alert-tertiary {
            background-color: #2b38b1;
            border-color: #2834a5;
            color: #FFF;
        }

        html .alert-tertiary .alert-link {
            color: #FFF;
        }

        html .alert-quaternary {
            background-color: #383f48;
            border-color: #31373f;
            color: #FFF;
        }

        html .alert-quaternary .alert-link {
            color: #FFF;
        }

        html .alert-dark {
            background-color: #212529;
            border-color: #1a1d21;
            color: #FFF;
        }

        html .alert-dark .alert-link {
            color: #FFF;
        }

        html .alert-light {
            background-color: #FFF;
            border-color: #f7f7f7;
            color: #777;
        }

        html .alert-light .alert-link {
            color: #777;
        }

        html .progress-bar-primary {
            background-color: #9c27b0;
        }

        html .progress-bar-secondary {
            background-color: #d42257;
        }

        html .progress-bar-tertiary {
            background-color: #2b38b1;
        }

        html .progress-bar-quaternary {
            background-color: #383f48;
        }

        html .progress-bar-dark {
            background-color: #212529;
        }

        html .progress-bar-light {
            background-color: #FFF;
        }

        html .word-rotator.loading-bar-primary .word-rotator-words::after {
            background-color: #9c27b0;
        }

        html .word-rotator.loading-bar-secondary .word-rotator-words::after {
            background-color: #d42257;
        }

        html .word-rotator.loading-bar-tertiary .word-rotator-words::after {
            background-color: #2b38b1;
        }

        html .word-rotator.loading-bar-quaternary .word-rotator-words::after {
            background-color: #383f48;
        }

        html .word-rotator.loading-bar-dark .word-rotator-words::after {
            background-color: #212529;
        }

        html .word-rotator.loading-bar-light .word-rotator-words::after {
            background-color: #FFF;
        }

        .process .process-step-circle {
            border-color: #9c27b0;
        }

        .process .process-step:hover .process-step-circle {
            background-color: #9c27b0;
        }

        .process .process-step:hover .process-step-circle .process-step-circle-content {
            color: #FFF !important;
        }

        .process.process-shapes .process-step-circle .process-step-circle-content,
        .process.process-shapes .process-step-circle:before,
        .process.process-shapes .process-step-circle:after {
            background-color: #9c27b0;
        }

        .process-connecting-line .connecting-line {
            background: #9c27b0;
        }

        html .rating-primary .filled-stars {
            color: #9c27b0;
        }

        html .rating-secondary .filled-stars {
            color: #d42257;
        }

        html .rating-tertiary .filled-stars {
            color: #2b38b1;
        }

        html .rating-quaternary .filled-stars {
            color: #383f48;
        }

        html .rating-dark .filled-stars {
            color: #212529;
        }

        html .rating-light .filled-stars {
            color: #FFF;
        }

        html section.section-primary {
            background-color: #9c27b0 !important;
            border-color: #89229b !important;
        }

        html section.section-primary h1,
        html section.section-primary h2,
        html section.section-primary h3,
        html section.section-primary h4,
        html section.section-primary h5,
        html section.section-primary h6 {
            color: #FFF;
        }

        html section.section-primary p {
            color: #e6e6e6;
        }

        html section.section-primary-scale-2 {
            background-color: #771e86 !important;
            border-color: #641971 !important;
        }

        html section.section-primary-scale-2 .sort-source.sort-source-style-2>li.active>a:after {
            border-top-color: #771e86;
        }

        html section.section-secondary {
            background-color: #d42257 !important;
            border-color: #be1e4e !important;
        }

        html section.section-secondary h1,
        html section.section-secondary h2,
        html section.section-secondary h3,
        html section.section-secondary h4,
        html section.section-secondary h5,
        html section.section-secondary h6 {
            color: #FFF;
        }

        html section.section-secondary p {
            color: #e6e6e6;
        }

        html section.section-secondary-scale-2 {
            background-color: #a81b45 !important;
            border-color: #92173c !important;
        }

        html section.section-secondary-scale-2 .sort-source.sort-source-style-2>li.active>a:after {
            border-top-color: #a81b45;
        }

        html section.section-tertiary {
            background-color: #2b38b1 !important;
            border-color: #26329c !important;
        }

        html section.section-tertiary h1,
        html section.section-tertiary h2,
        html section.section-tertiary h3,
        html section.section-tertiary h4,
        html section.section-tertiary h5,
        html section.section-tertiary h6 {
            color: #FFF;
        }

        html section.section-tertiary p {
            color: #e6e6e6;
        }

        html section.section-tertiary-scale-2 {
            background-color: #212b88 !important;
            border-color: #1c2573 !important;
        }

        html section.section-tertiary-scale-2 .sort-source.sort-source-style-2>li.active>a:after {
            border-top-color: #212b88;
        }

        html section.section-quaternary {
            background-color: #383f48 !important;
            border-color: #2d323a !important;
        }

        html section.section-quaternary h1,
        html section.section-quaternary h2,
        html section.section-quaternary h3,
        html section.section-quaternary h4,
        html section.section-quaternary h5,
        html section.section-quaternary h6 {
            color: #FFF;
        }

        html section.section-quaternary p {
            color: #e6e6e6;
        }

        html section.section-quaternary-scale-2 {
            background-color: #22262b !important;
            border-color: #17191d !important;
        }

        html section.section-quaternary-scale-2 .sort-source.sort-source-style-2>li.active>a:after {
            border-top-color: #22262b;
        }

        html section.section-dark {
            background-color: #212529 !important;
            border-color: #16181b !important;
        }

        html section.section-dark h1,
        html section.section-dark h2,
        html section.section-dark h3,
        html section.section-dark h4,
        html section.section-dark h5,
        html section.section-dark h6 {
            color: #FFF;
        }

        html section.section-dark p {
            color: #e6e6e6;
        }

        html section.section-dark-scale-2 {
            background-color: #0a0c0d !important;
            border-color: #000000 !important;
        }

        html section.section-dark-scale-2 .sort-source.sort-source-style-2>li.active>a:after {
            border-top-color: #0a0c0d;
        }

        html section.section-light {
            background-color: #FFF !important;
            border-color: #f2f2f2 !important;
        }

        html section.section-light h1,
        html section.section-light h2,
        html section.section-light h3,
        html section.section-light h4,
        html section.section-light h5,
        html section.section-light h6 {
            color: #777;
        }

        html section.section-light p {
            color: #5e5e5e;
        }

        html section.section-light-scale-2 {
            background-color: #e6e6e6 !important;
            border-color: #d9d9d9 !important;
        }

        html section.section-light-scale-2 .sort-source.sort-source-style-2>li.active>a:after {
            border-top-color: #e6e6e6;
        }

        section.section.section-background-half-primary-half-secondary {
            background: linear-gradient(to right, #9c27b0 50%, #d42257 50%);
        }

        section.section.section-overlay-opacity-gradient:before {
            background: linear-gradient(135deg, #9c27b0 0%, #d42257 80%);
        }

        html .bg-color-light-scale-1 {
            background-color: #f7f7f7 !important;
        }

        html .section.bg-color-light-scale-1,
        html .bg-color-light-scale-border-top-1 {
            border-top-color: #efefef !important;
        }

        html .bg-color-light-scale-2 {
            background-color: #e8e8e8 !important;
        }

        html .section.bg-color-light-scale-2,
        html .bg-color-light-scale-border-top-2 {
            border-top-color: #e0e0e0 !important;
        }

        html .bg-color-light-scale-3 {
            background-color: #e0e0e0 !important;
        }

        html .section.bg-color-light-scale-3,
        html .bg-color-light-scale-border-top-3 {
            border-top-color: #d8d8d8 !important;
        }

        html .bg-color-light-scale-4 {
            background-color: #d8d8d8 !important;
        }

        html .section.bg-color-light-scale-4,
        html .bg-color-light-scale-border-top-4 {
            border-top-color: #d1d1d1 !important;
        }

        html .bg-color-light-scale-5 {
            background-color: #d1d1d1 !important;
        }

        html .section.bg-color-light-scale-5,
        html .bg-color-light-scale-border-top-5 {
            border-top-color: #c9c9c9 !important;
        }

        html .bg-color-light-scale-6 {
            background-color: #c9c9c9 !important;
        }

        html .section.bg-color-light-scale-6,
        html .bg-color-light-scale-border-top-6 {
            border-top-color: #c1c1c1 !important;
        }

        html .bg-color-light-scale-7 {
            background-color: #c1c1c1 !important;
        }

        html .section.bg-color-light-scale-7,
        html .bg-color-light-scale-border-top-7 {
            border-top-color: #bababa !important;
        }

        html .bg-color-light-scale-8 {
            background-color: #bababa !important;
        }

        html .section.bg-color-light-scale-8,
        html .bg-color-light-scale-border-top-8 {
            border-top-color: #b2b2b2 !important;
        }

        html .bg-color-light-scale-9 {
            background-color: #b2b2b2 !important;
        }

        html .section.bg-color-light-scale-9,
        html .bg-color-light-scale-border-top-9 {
            border-top-color: #ababab !important;
        }

        html .bg-color-dark-scale-1 {
            background-color: #212529 !important;
        }

        html .section.bg-color-dark-scale-1,
        html .bg-color-dark-scale-border-top-1 {
            border-top-color: #1a1d21 !important;
        }

        html .bg-color-dark-scale-2 {
            background-color: #1c2023 !important;
        }

        html .section.bg-color-dark-scale-2,
        html .bg-color-dark-scale-border-top-2 {
            border-top-color: #16181b !important;
        }

        html .bg-color-dark-scale-3 {
            background-color: #181b1e !important;
        }

        html .section.bg-color-dark-scale-3,
        html .bg-color-dark-scale-border-top-3 {
            border-top-color: #111315 !important;
        }

        html .bg-color-dark-scale-4 {
            background-color: #131618 !important;
        }

        html .section.bg-color-dark-scale-4,
        html .bg-color-dark-scale-border-top-4 {
            border-top-color: #0d0e10 !important;
        }

        html .bg-color-dark-scale-5 {
            background-color: #0f1112 !important;
        }

        html .section.bg-color-dark-scale-5,
        html .bg-color-dark-scale-border-top-5 {
            border-top-color: #08090a !important;
        }

        html .bg-color-dark-scale-6 {
            background-color: #0a0c0d !important;
        }

        html .section.bg-color-dark-scale-6,
        html .bg-color-dark-scale-border-top-6 {
            border-top-color: #030404 !important;
        }

        html .bg-color-dark-scale-7 {
            background-color: #060607 !important;
        }

        html .section.bg-color-dark-scale-7,
        html .bg-color-dark-scale-border-top-7 {
            border-top-color: #000000 !important;
        }

        html .bg-color-dark-scale-8 {
            background-color: #010101 !important;
        }

        html .section.bg-color-dark-scale-8,
        html .bg-color-dark-scale-border-top-8 {
            border-top-color: #000000 !important;
        }

        html .bg-color-dark-scale-9 {
            background-color: #000000 !important;
        }

        html .section.bg-color-dark-scale-9,
        html .bg-color-dark-scale-border-top-9 {
            border-top-color: #000000 !important;
        }

        section.page-header .page-header-title-border {
            background-color: #9c27b0 !important;
        }

        section.page-header.custom-product {
            background-color: #89229b;
            border-top-color: #9525a8;
        }

        html .page-header-color.page-header-primary {
            background-color: #9c27b0;
            border-bottom-color: #9c27b0;
            color: #FFF;
        }

        html .page-header-color.page-header-primary h1 {
            color: #FFF;
        }

        html .page-header-color.page-header-primary h1 span {
            color: #FFF;
        }

        html .page-header-color.page-header-primary a {
            color: #FFF;
        }

        html .page-header-color.page-header-primary .breadcrumb>.active {
            color: #FFF;
        }

        html .page-header-color.page-header-secondary {
            background-color: #d42257;
            border-bottom-color: #d42257;
            color: #FFF;
        }

        html .page-header-color.page-header-secondary h1 {
            color: #FFF;
        }

        html .page-header-color.page-header-secondary h1 span {
            color: #FFF;
        }

        html .page-header-color.page-header-secondary a {
            color: #FFF;
        }

        html .page-header-color.page-header-secondary .breadcrumb>.active {
            color: #FFF;
        }

        html .page-header-color.page-header-tertiary {
            background-color: #2b38b1;
            border-bottom-color: #2b38b1;
            color: #FFF;
        }

        html .page-header-color.page-header-tertiary h1 {
            color: #FFF;
        }

        html .page-header-color.page-header-tertiary h1 span {
            color: #FFF;
        }

        html .page-header-color.page-header-tertiary a {
            color: #FFF;
        }

        html .page-header-color.page-header-tertiary .breadcrumb>.active {
            color: #FFF;
        }

        html .page-header-color.page-header-quaternary {
            background-color: #383f48;
            border-bottom-color: #383f48;
            color: #FFF;
        }

        html .page-header-color.page-header-quaternary h1 {
            color: #FFF;
        }

        html .page-header-color.page-header-quaternary h1 span {
            color: #FFF;
        }

        html .page-header-color.page-header-quaternary a {
            color: #FFF;
        }

        html .page-header-color.page-header-quaternary .breadcrumb>.active {
            color: #FFF;
        }

        html .page-header-color.page-header-dark {
            background-color: #212529;
            border-bottom-color: #212529;
            color: #FFF;
        }

        html .page-header-color.page-header-dark h1 {
            color: #FFF;
        }

        html .page-header-color.page-header-dark h1 span {
            color: #FFF;
        }

        html .page-header-color.page-header-dark a {
            color: #FFF;
        }

        html .page-header-color.page-header-dark .breadcrumb>.active {
            color: #FFF;
        }

        html .page-header-color.page-header-light {
            background-color: #FFF;
            border-bottom-color: #FFF;
            color: #777;
        }

        html .page-header-color.page-header-light h1 {
            color: #777;
        }

        html .page-header-color.page-header-light h1 span {
            color: #777;
        }

        html .page-header-color.page-header-light a {
            color: #777;
        }

        html .page-header-color.page-header-light .breadcrumb>.active {
            color: #777;
        }

        html .toggle-primary .toggle label,
        html .toggle-primary .toggle .toggle-title {
            color: #9c27b0;
            border-left-color: #9c27b0;
            border-right-color: #9c27b0;
        }

        html .toggle-primary .toggle.active>label,
        html .toggle-primary .toggle.active>.toggle-title {
            background-color: #9c27b0;
            border-color: #9c27b0;
            color: #FFF;
        }

        html .toggle-primary.toggle-simple .toggle>label:after,
        html .toggle-primary.toggle-simple .toggle>.toggle-title:after {
            background-color: #9c27b0;
        }

        html .toggle-primary.toggle-minimal .toggle.active>label,
        html .toggle-primary.toggle-minimal .toggle.active>.toggle-title {
            color: #9c27b0;
        }

        html .toggle-secondary .toggle label,
        html .toggle-secondary .toggle .toggle-title {
            color: #d42257;
            border-left-color: #d42257;
            border-right-color: #d42257;
        }

        html .toggle-secondary .toggle.active>label,
        html .toggle-secondary .toggle.active>.toggle-title {
            background-color: #d42257;
            border-color: #d42257;
            color: #FFF;
        }

        html .toggle-secondary.toggle-simple .toggle>label:after,
        html .toggle-secondary.toggle-simple .toggle>.toggle-title:after {
            background-color: #d42257;
        }

        html .toggle-secondary.toggle-minimal .toggle.active>label,
        html .toggle-secondary.toggle-minimal .toggle.active>.toggle-title {
            color: #d42257;
        }

        html .toggle-tertiary .toggle label,
        html .toggle-tertiary .toggle .toggle-title {
            color: #2b38b1;
            border-left-color: #2b38b1;
            border-right-color: #2b38b1;
        }

        html .toggle-tertiary .toggle.active>label,
        html .toggle-tertiary .toggle.active>.toggle-title {
            background-color: #2b38b1;
            border-color: #2b38b1;
            color: #FFF;
        }

        html .toggle-tertiary.toggle-simple .toggle>label:after,
        html .toggle-tertiary.toggle-simple .toggle>.toggle-title:after {
            background-color: #2b38b1;
        }

        html .toggle-tertiary.toggle-minimal .toggle.active>label,
        html .toggle-tertiary.toggle-minimal .toggle.active>.toggle-title {
            color: #2b38b1;
        }

        html .toggle-quaternary .toggle label,
        html .toggle-quaternary .toggle .toggle-title {
            color: #383f48;
            border-left-color: #383f48;
            border-right-color: #383f48;
        }

        html .toggle-quaternary .toggle.active>label,
        html .toggle-quaternary .toggle.active>.toggle-title {
            background-color: #383f48;
            border-color: #383f48;
            color: #FFF;
        }

        html .toggle-quaternary.toggle-simple .toggle>label:after,
        html .toggle-quaternary.toggle-simple .toggle>.toggle-title:after {
            background-color: #383f48;
        }

        html .toggle-quaternary.toggle-minimal .toggle.active>label,
        html .toggle-quaternary.toggle-minimal .toggle.active>.toggle-title {
            color: #383f48;
        }

        html .toggle-dark .toggle label,
        html .toggle-dark .toggle .toggle-title {
            color: #212529;
            border-left-color: #212529;
            border-right-color: #212529;
        }

        html .toggle-dark .toggle.active>label,
        html .toggle-dark .toggle.active>.toggle-title {
            background-color: #212529;
            border-color: #212529;
            color: #FFF;
        }

        html .toggle-dark.toggle-simple .toggle>label:after,
        html .toggle-dark.toggle-simple .toggle>.toggle-title:after {
            background-color: #212529;
        }

        html .toggle-dark.toggle-minimal .toggle.active>label,
        html .toggle-dark.toggle-minimal .toggle.active>.toggle-title {
            color: #212529;
        }

        html .toggle-light .toggle label,
        html .toggle-light .toggle .toggle-title {
            color: #FFF;
            border-left-color: #FFF;
            border-right-color: #FFF;
        }

        html .toggle-light .toggle.active>label,
        html .toggle-light .toggle.active>.toggle-title {
            background-color: #FFF;
            border-color: #FFF;
            color: #777;
        }

        html .toggle-light.toggle-simple .toggle>label:after,
        html .toggle-light.toggle-simple .toggle>.toggle-title:after {
            background-color: #FFF;
        }

        html .toggle-light.toggle-minimal .toggle.active>label,
        html .toggle-light.toggle-minimal .toggle.active>.toggle-title {
            color: #FFF;
        }

        .thumb-info .thumb-info-type,
        .thumb-info .thumb-info-action-icon,
        .thumb-info-social-icons a,
        .thumbnail .zoom,
        .img-thumbnail .zoom,
        .thumb-info-ribbon {
            background-color: #9c27b0;
        }

        html .thumb-info .thumb-info-action-icon-primary {
            background-color: #9c27b0;
        }

        html .thumb-info .thumb-info-action-icon-primary i {
            color: #FFF;
        }

        html .thumb-info .thumb-info-action-icon-secondary {
            background-color: #d42257;
        }

        html .thumb-info .thumb-info-action-icon-secondary i {
            color: #FFF;
        }

        html .thumb-info .thumb-info-action-icon-tertiary {
            background-color: #2b38b1;
        }

        html .thumb-info .thumb-info-action-icon-tertiary i {
            color: #FFF;
        }

        html .thumb-info .thumb-info-action-icon-quaternary {
            background-color: #383f48;
        }

        html .thumb-info .thumb-info-action-icon-quaternary i {
            color: #FFF;
        }

        html .thumb-info .thumb-info-action-icon-dark {
            background-color: #212529;
        }

        html .thumb-info .thumb-info-action-icon-dark i {
            color: #FFF;
        }

        html .thumb-info .thumb-info-action-icon-light {
            background-color: #FFF;
        }

        html .thumb-info .thumb-info-action-icon-light i {
            color: #777;
        }

        .thumb-info-ribbon:before {
            border-right-color: #641971;
            border-left-color: #641971;
        }

        .thumb-info.thumb-info-block-primary .thumb-info-wrapper:before {
            background: rgba(156, 39, 176, 0.9);
        }

        .thumb-info-floating-caption-title .thumb-info-floating-caption-type {
            background-color: #9c27b0;
        }

        .inverted {
            background-color: #9c27b0;
        }

        html .inverted-primary {
            background-color: #9c27b0;
        }

        html .inverted-secondary {
            background-color: #d42257;
        }

        html .inverted-tertiary {
            background-color: #2b38b1;
        }

        html .inverted-quaternary {
            background-color: #383f48;
        }

        html .inverted-dark {
            background-color: #212529;
        }

        html .inverted-light {
            background-color: #FFF;
        }

        .owl-carousel .owl-dots .owl-dot.active span,
        .owl-carousel .owl-dots .owl-dot:hover span {
            background-color: #862197;
        }

        .owl-carousel.show-nav-title .owl-nav button[class*="owl-"],
        .owl-carousel.show-nav-title .owl-nav button[class*="owl-"]:hover,
        .owl-carousel.show-nav-title .owl-nav button[class*="owl-"].hover {
            color: #9c27b0;
        }

        .owl-carousel:not(.nav-arrows-1):not(.show-nav-title) .owl-nav button[class*="owl-"] {
            background-color: #9c27b0;
            border-color: #9c27b0 #9c27b0 #771e86;
            color: #FFF;
        }

        .owl-carousel:not(.nav-arrows-1):not(.show-nav-title) .owl-nav button[class*="owl-"]:hover,
        .owl-carousel:not(.nav-arrows-1):not(.show-nav-title) .owl-nav button[class*="owl-"].hover {
            background-color: #b82ecf;
            border-color: #bc37d3 #bc37d3 #9c27b0;
        }

        .owl-carousel:not(.nav-arrows-1):not(.show-nav-title) .owl-nav button[class*="owl-"]:active,
        .owl-carousel:not(.nav-arrows-1):not(.show-nav-title) .owl-nav button[class*="owl-"].active {
            background-color: #802091;
            background-image: none;
            border-color: #771e86 #771e86 #52145d;
        }

        .owl-carousel.nav-with-transparency:not(.nav-style-1):not(.show-nav-title):not(.nav-arrows-1) .owl-nav button[class*="owl-"] {
            background-color: rgba(156, 39, 176, 0.4);
        }

        .owl-carousel.nav-style-1 .owl-nav .owl-next,
        .owl-carousel.nav-style-1 .owl-nav .owl-prev {
            color: #9c27b0 !important;
        }

        .owl-carousel.nav-style-2 .owl-nav .owl-next:before,
        .owl-carousel.nav-style-2 .owl-nav .owl-prev:before,
        .owl-carousel.nav-style-2 .owl-nav .owl-next:after,
        .owl-carousel.nav-style-2 .owl-nav .owl-prev:after {
            border-color: #9c27b0;
        }

        .owl-carousel.nav-svg-arrows-1 .owl-nav .owl-prev svg polygon,
        .owl-carousel.nav-svg-arrows-1 .owl-nav .owl-next svg polygon {
            fill: #9c27b0;
            stroke: #9c27b0;
        }

        .owl-carousel.nav-arrows-1 .owl-nav .owl-prev,
        .owl-carousel.nav-arrows-1 .owl-nav .owl-next {
            color: #9c27b0;
        }

        .owl-carousel.carousel-center-active-item-2 .owl-item.active>div {
            background: #9c27b0;
        }

        html body .tabs .nav-tabs .nav-link,
        html.dark body .tabs .nav-tabs .nav-link,
        html body .tabs .nav-tabs .nav-link:hover,
        html.dark body .tabs .nav-tabs .nav-link:hover,
        html body .tabs .nav-tabs li.active .nav-link,
        html.dark body .tabs .nav-tabs li.active .nav-link {
            color: #9c27b0;
        }

        html body .tabs .nav-tabs .nav-link:hover,
        html.dark body .tabs .nav-tabs .nav-link:hover,
        html body .tabs .nav-tabs .nav-link:focus,
        html.dark body .tabs .nav-tabs .nav-link:focus,
        html body .tabs .nav-tabs li.active .nav-link,
        html.dark body .tabs .nav-tabs li.active .nav-link,
        html body .tabs .nav-tabs.nav-justified .nav-link:hover,
        html.dark body .tabs .nav-tabs.nav-justified .nav-link:hover,
        html body .tabs .nav-tabs.nav-justified .nav-link:focus,
        html.dark body .tabs .nav-tabs.nav-justified .nav-link:focus {
            border-top-color: #9c27b0;
        }

        html body .tabs.tabs-bottom .nav-tabs li .nav-link:hover,
        html.dark body .tabs.tabs-bottom .nav-tabs li .nav-link:hover,
        html body .tabs.tabs-bottom .nav-tabs li.active .nav-link,
        html.dark body .tabs.tabs-bottom .nav-tabs li.active .nav-link,
        html body .tabs.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html body .tabs.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs.tabs-bottom .nav-tabs li.active .nav-link:focus {
            border-bottom-color: #9c27b0;
        }

        html body .tabs.tabs-vertical.tabs-left .nav-tabs li .nav-link:hover,
        html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li .nav-link:hover,
        html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active .nav-link,
        html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active .nav-link,
        html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active .nav-link:hover,
        html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active .nav-link:focus {
            border-left-color: #9c27b0;
        }

        html body .tabs.tabs-vertical.tabs-right .nav-tabs li .nav-link:hover,
        html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li .nav-link:hover,
        html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active .nav-link,
        html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active .nav-link,
        html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active .nav-link:hover,
        html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active .nav-link:focus {
            border-right-color: #9c27b0;
        }

        html body .tabs.tabs-simple .nav-tabs>li.active .nav-link,
        html.dark body .tabs.tabs-simple .nav-tabs>li.active .nav-link,
        html body .tabs.tabs-simple .nav-tabs>li.active .nav-link:focus,
        html.dark body .tabs.tabs-simple .nav-tabs>li.active .nav-link:focus,
        html body .tabs.tabs-simple .nav-tabs>li .nav-link:hover,
        html.dark body .tabs.tabs-simple .nav-tabs>li .nav-link:hover,
        html body .tabs.tabs-simple .nav-tabs>li.active .nav-link:hover,
        html.dark body .tabs.tabs-simple .nav-tabs>li.active .nav-link:hover {
            border-top-color: #9c27b0;
            color: #9c27b0;
        }

        html body .tabs-primary .nav-tabs li .nav-link,
        html.dark body .tabs-primary .nav-tabs li .nav-link,
        html body .tabs-primary .nav-tabs.nav-justified li .nav-link,
        html.dark body .tabs-primary .nav-tabs.nav-justified li .nav-link,
        html body .tabs-primary .nav-tabs li .nav-link:hover,
        html.dark body .tabs-primary .nav-tabs li .nav-link:hover,
        html body .tabs-primary .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-primary .nav-tabs.nav-justified li .nav-link:hover {
            color: #9c27b0;
        }

        html body .tabs-primary .nav-tabs li .nav-link:hover,
        html.dark body .tabs-primary .nav-tabs li .nav-link:hover,
        html body .tabs-primary .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-primary .nav-tabs.nav-justified li .nav-link:hover {
            border-top-color: #9c27b0;
        }

        html body .tabs-primary .nav-tabs li.active .nav-link,
        html.dark body .tabs-primary .nav-tabs li.active .nav-link,
        html body .tabs-primary .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-primary .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-primary .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-primary .nav-tabs li.active .nav-link:hover,
        html body .tabs-primary .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-primary .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-primary .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-primary .nav-tabs li.active .nav-link:focus,
        html body .tabs-primary .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-primary .nav-tabs.nav-justified li.active .nav-link:focus {
            border-top-color: #9c27b0;
            color: #9c27b0;
        }

        html body .tabs-primary.tabs-bottom .nav-tabs li .nav-link:hover,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs li .nav-link:hover,
        html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-primary.tabs-bottom .nav-tabs li.active .nav-link,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active .nav-link,
        html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-primary.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-primary.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus {
            border-bottom-color: #9c27b0;
        }

        html body .tabs-primary.tabs-simple .nav-tabs li .nav-link:hover,
        html.dark body .tabs-primary.tabs-simple .nav-tabs li .nav-link:hover,
        html body .tabs-primary.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-primary.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-primary.tabs-simple .nav-tabs li.active .nav-link,
        html.dark body .tabs-primary.tabs-simple .nav-tabs li.active .nav-link,
        html body .tabs-primary.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-primary.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-primary.tabs-simple .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-primary.tabs-simple .nav-tabs li.active .nav-link:hover,
        html body .tabs-primary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-primary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-primary.tabs-simple .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-primary.tabs-simple .nav-tabs li.active .nav-link:focus,
        html body .tabs-primary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-primary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus {
            color: #9c27b0 !important;
            border-bottom-color: #9c27b0;
        }

        html body .tabs-primary.tabs-vertical.tabs-left li .nav-link:hover,
        html.dark body .tabs-primary.tabs-vertical.tabs-left li .nav-link:hover,
        html body .tabs-primary.tabs-vertical.tabs-left li.active .nav-link,
        html.dark body .tabs-primary.tabs-vertical.tabs-left li.active .nav-link,
        html body .tabs-primary.tabs-vertical.tabs-left li.active .nav-link:hover,
        html.dark body .tabs-primary.tabs-vertical.tabs-left li.active .nav-link:hover,
        html body .tabs-primary.tabs-vertical.tabs-left li.active .nav-link:focus,
        html.dark body .tabs-primary.tabs-vertical.tabs-left li.active .nav-link:focus {
            border-left-color: #9c27b0;
        }

        html body .tabs-primary.tabs-vertical.tabs-right li .nav-link:hover,
        html.dark body .tabs-primary.tabs-vertical.tabs-right li .nav-link:hover,
        html body .tabs-primary.tabs-vertical.tabs-right li.active .nav-link,
        html.dark body .tabs-primary.tabs-vertical.tabs-right li.active .nav-link,
        html body .tabs-primary.tabs-vertical.tabs-right li.active .nav-link:hover,
        html.dark body .tabs-primary.tabs-vertical.tabs-right li.active .nav-link:hover,
        html body .tabs-primary.tabs-vertical.tabs-right li.active .nav-link:focus,
        html.dark body .tabs-primary.tabs-vertical.tabs-right li.active .nav-link:focus {
            border-right-color: #9c27b0;
        }

        html body .tabs-secondary .nav-tabs li .nav-link,
        html.dark body .tabs-secondary .nav-tabs li .nav-link,
        html body .tabs-secondary .nav-tabs.nav-justified li .nav-link,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li .nav-link,
        html body .tabs-secondary .nav-tabs li .nav-link:hover,
        html.dark body .tabs-secondary .nav-tabs li .nav-link:hover,
        html body .tabs-secondary .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li .nav-link:hover {
            color: #d42257;
        }

        html body .tabs-secondary .nav-tabs li .nav-link:hover,
        html.dark body .tabs-secondary .nav-tabs li .nav-link:hover,
        html body .tabs-secondary .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li .nav-link:hover {
            border-top-color: #d42257;
        }

        html body .tabs-secondary .nav-tabs li.active .nav-link,
        html.dark body .tabs-secondary .nav-tabs li.active .nav-link,
        html body .tabs-secondary .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-secondary .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-secondary .nav-tabs li.active .nav-link:hover,
        html body .tabs-secondary .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-secondary .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-secondary .nav-tabs li.active .nav-link:focus,
        html body .tabs-secondary .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li.active .nav-link:focus {
            border-top-color: #d42257;
            color: #d42257;
        }

        html body .tabs-secondary.tabs-bottom .nav-tabs li .nav-link:hover,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs li .nav-link:hover,
        html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-secondary.tabs-bottom .nav-tabs li.active .nav-link,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active .nav-link,
        html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-secondary.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-secondary.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus {
            border-bottom-color: #d42257;
        }

        html body .tabs-secondary.tabs-simple .nav-tabs li .nav-link:hover,
        html.dark body .tabs-secondary.tabs-simple .nav-tabs li .nav-link:hover,
        html body .tabs-secondary.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-secondary.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-secondary.tabs-simple .nav-tabs li.active .nav-link,
        html.dark body .tabs-secondary.tabs-simple .nav-tabs li.active .nav-link,
        html body .tabs-secondary.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-secondary.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-secondary.tabs-simple .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-secondary.tabs-simple .nav-tabs li.active .nav-link:hover,
        html body .tabs-secondary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-secondary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-secondary.tabs-simple .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-secondary.tabs-simple .nav-tabs li.active .nav-link:focus,
        html body .tabs-secondary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-secondary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus {
            color: #d42257 !important;
            border-bottom-color: #d42257;
        }

        html body .tabs-secondary.tabs-vertical.tabs-left li .nav-link:hover,
        html.dark body .tabs-secondary.tabs-vertical.tabs-left li .nav-link:hover,
        html body .tabs-secondary.tabs-vertical.tabs-left li.active .nav-link,
        html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active .nav-link,
        html body .tabs-secondary.tabs-vertical.tabs-left li.active .nav-link:hover,
        html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active .nav-link:hover,
        html body .tabs-secondary.tabs-vertical.tabs-left li.active .nav-link:focus,
        html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active .nav-link:focus {
            border-left-color: #d42257;
        }

        html body .tabs-secondary.tabs-vertical.tabs-right li .nav-link:hover,
        html.dark body .tabs-secondary.tabs-vertical.tabs-right li .nav-link:hover,
        html body .tabs-secondary.tabs-vertical.tabs-right li.active .nav-link,
        html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active .nav-link,
        html body .tabs-secondary.tabs-vertical.tabs-right li.active .nav-link:hover,
        html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active .nav-link:hover,
        html body .tabs-secondary.tabs-vertical.tabs-right li.active .nav-link:focus,
        html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active .nav-link:focus {
            border-right-color: #d42257;
        }

        html body .tabs-tertiary .nav-tabs li .nav-link,
        html.dark body .tabs-tertiary .nav-tabs li .nav-link,
        html body .tabs-tertiary .nav-tabs.nav-justified li .nav-link,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li .nav-link,
        html body .tabs-tertiary .nav-tabs li .nav-link:hover,
        html.dark body .tabs-tertiary .nav-tabs li .nav-link:hover,
        html body .tabs-tertiary .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li .nav-link:hover {
            color: #2b38b1;
        }

        html body .tabs-tertiary .nav-tabs li .nav-link:hover,
        html.dark body .tabs-tertiary .nav-tabs li .nav-link:hover,
        html body .tabs-tertiary .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li .nav-link:hover {
            border-top-color: #2b38b1;
        }

        html body .tabs-tertiary .nav-tabs li.active .nav-link,
        html.dark body .tabs-tertiary .nav-tabs li.active .nav-link,
        html body .tabs-tertiary .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-tertiary .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-tertiary .nav-tabs li.active .nav-link:hover,
        html body .tabs-tertiary .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-tertiary .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-tertiary .nav-tabs li.active .nav-link:focus,
        html body .tabs-tertiary .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active .nav-link:focus {
            border-top-color: #2b38b1;
            color: #2b38b1;
        }

        html body .tabs-tertiary.tabs-bottom .nav-tabs li .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li .nav-link:hover,
        html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-tertiary.tabs-bottom .nav-tabs li.active .nav-link,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active .nav-link,
        html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-tertiary.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-tertiary.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus {
            border-bottom-color: #2b38b1;
        }

        html body .tabs-tertiary.tabs-simple .nav-tabs li .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-simple .nav-tabs li .nav-link:hover,
        html body .tabs-tertiary.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-tertiary.tabs-simple .nav-tabs li.active .nav-link,
        html.dark body .tabs-tertiary.tabs-simple .nav-tabs li.active .nav-link,
        html body .tabs-tertiary.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-tertiary.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-tertiary.tabs-simple .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-simple .nav-tabs li.active .nav-link:hover,
        html body .tabs-tertiary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-tertiary.tabs-simple .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-tertiary.tabs-simple .nav-tabs li.active .nav-link:focus,
        html body .tabs-tertiary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-tertiary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus {
            color: #2b38b1 !important;
            border-bottom-color: #2b38b1;
        }

        html body .tabs-tertiary.tabs-vertical.tabs-left li .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-left li .nav-link:hover,
        html body .tabs-tertiary.tabs-vertical.tabs-left li.active .nav-link,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active .nav-link,
        html body .tabs-tertiary.tabs-vertical.tabs-left li.active .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active .nav-link:hover,
        html body .tabs-tertiary.tabs-vertical.tabs-left li.active .nav-link:focus,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active .nav-link:focus {
            border-left-color: #2b38b1;
        }

        html body .tabs-tertiary.tabs-vertical.tabs-right li .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-right li .nav-link:hover,
        html body .tabs-tertiary.tabs-vertical.tabs-right li.active .nav-link,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active .nav-link,
        html body .tabs-tertiary.tabs-vertical.tabs-right li.active .nav-link:hover,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active .nav-link:hover,
        html body .tabs-tertiary.tabs-vertical.tabs-right li.active .nav-link:focus,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active .nav-link:focus {
            border-right-color: #2b38b1;
        }

        html body .tabs-quaternary .nav-tabs li .nav-link,
        html.dark body .tabs-quaternary .nav-tabs li .nav-link,
        html body .tabs-quaternary .nav-tabs.nav-justified li .nav-link,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li .nav-link,
        html body .tabs-quaternary .nav-tabs li .nav-link:hover,
        html.dark body .tabs-quaternary .nav-tabs li .nav-link:hover,
        html body .tabs-quaternary .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li .nav-link:hover {
            color: #383f48;
        }

        html body .tabs-quaternary .nav-tabs li .nav-link:hover,
        html.dark body .tabs-quaternary .nav-tabs li .nav-link:hover,
        html body .tabs-quaternary .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li .nav-link:hover {
            border-top-color: #383f48;
        }

        html body .tabs-quaternary .nav-tabs li.active .nav-link,
        html.dark body .tabs-quaternary .nav-tabs li.active .nav-link,
        html body .tabs-quaternary .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-quaternary .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-quaternary .nav-tabs li.active .nav-link:hover,
        html body .tabs-quaternary .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-quaternary .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-quaternary .nav-tabs li.active .nav-link:focus,
        html body .tabs-quaternary .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active .nav-link:focus {
            border-top-color: #383f48;
            color: #383f48;
        }

        html body .tabs-quaternary.tabs-bottom .nav-tabs li .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li .nav-link:hover,
        html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-quaternary.tabs-bottom .nav-tabs li.active .nav-link,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active .nav-link,
        html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-quaternary.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-quaternary.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus {
            border-bottom-color: #383f48;
        }

        html body .tabs-quaternary.tabs-simple .nav-tabs li .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-simple .nav-tabs li .nav-link:hover,
        html body .tabs-quaternary.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-quaternary.tabs-simple .nav-tabs li.active .nav-link,
        html.dark body .tabs-quaternary.tabs-simple .nav-tabs li.active .nav-link,
        html body .tabs-quaternary.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-quaternary.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-quaternary.tabs-simple .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-simple .nav-tabs li.active .nav-link:hover,
        html body .tabs-quaternary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-quaternary.tabs-simple .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-quaternary.tabs-simple .nav-tabs li.active .nav-link:focus,
        html body .tabs-quaternary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-quaternary.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus {
            color: #383f48 !important;
            border-bottom-color: #383f48;
        }

        html body .tabs-quaternary.tabs-vertical.tabs-left li .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-left li .nav-link:hover,
        html body .tabs-quaternary.tabs-vertical.tabs-left li.active .nav-link,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active .nav-link,
        html body .tabs-quaternary.tabs-vertical.tabs-left li.active .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active .nav-link:hover,
        html body .tabs-quaternary.tabs-vertical.tabs-left li.active .nav-link:focus,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active .nav-link:focus {
            border-left-color: #383f48;
        }

        html body .tabs-quaternary.tabs-vertical.tabs-right li .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-right li .nav-link:hover,
        html body .tabs-quaternary.tabs-vertical.tabs-right li.active .nav-link,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active .nav-link,
        html body .tabs-quaternary.tabs-vertical.tabs-right li.active .nav-link:hover,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active .nav-link:hover,
        html body .tabs-quaternary.tabs-vertical.tabs-right li.active .nav-link:focus,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active .nav-link:focus {
            border-right-color: #383f48;
        }

        html body .tabs-dark .nav-tabs li .nav-link,
        html.dark body .tabs-dark .nav-tabs li .nav-link,
        html body .tabs-dark .nav-tabs.nav-justified li .nav-link,
        html.dark body .tabs-dark .nav-tabs.nav-justified li .nav-link,
        html body .tabs-dark .nav-tabs li .nav-link:hover,
        html.dark body .tabs-dark .nav-tabs li .nav-link:hover,
        html body .tabs-dark .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-dark .nav-tabs.nav-justified li .nav-link:hover {
            color: #212529;
        }

        html body .tabs-dark .nav-tabs li .nav-link:hover,
        html.dark body .tabs-dark .nav-tabs li .nav-link:hover,
        html body .tabs-dark .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-dark .nav-tabs.nav-justified li .nav-link:hover {
            border-top-color: #212529;
        }

        html body .tabs-dark .nav-tabs li.active .nav-link,
        html.dark body .tabs-dark .nav-tabs li.active .nav-link,
        html body .tabs-dark .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-dark .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-dark .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-dark .nav-tabs li.active .nav-link:hover,
        html body .tabs-dark .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-dark .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-dark .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-dark .nav-tabs li.active .nav-link:focus,
        html body .tabs-dark .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-dark .nav-tabs.nav-justified li.active .nav-link:focus {
            border-top-color: #212529;
            color: #212529;
        }

        html body .tabs-dark.tabs-bottom .nav-tabs li .nav-link:hover,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs li .nav-link:hover,
        html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-dark.tabs-bottom .nav-tabs li.active .nav-link,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active .nav-link,
        html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-dark.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-dark.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus {
            border-bottom-color: #212529;
        }

        html body .tabs-dark.tabs-simple .nav-tabs li .nav-link:hover,
        html.dark body .tabs-dark.tabs-simple .nav-tabs li .nav-link:hover,
        html body .tabs-dark.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-dark.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-dark.tabs-simple .nav-tabs li.active .nav-link,
        html.dark body .tabs-dark.tabs-simple .nav-tabs li.active .nav-link,
        html body .tabs-dark.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-dark.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-dark.tabs-simple .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-dark.tabs-simple .nav-tabs li.active .nav-link:hover,
        html body .tabs-dark.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-dark.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-dark.tabs-simple .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-dark.tabs-simple .nav-tabs li.active .nav-link:focus,
        html body .tabs-dark.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-dark.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus {
            color: #212529 !important;
            border-bottom-color: #212529;
        }

        html body .tabs-dark.tabs-vertical.tabs-left li .nav-link:hover,
        html.dark body .tabs-dark.tabs-vertical.tabs-left li .nav-link:hover,
        html body .tabs-dark.tabs-vertical.tabs-left li.active .nav-link,
        html.dark body .tabs-dark.tabs-vertical.tabs-left li.active .nav-link,
        html body .tabs-dark.tabs-vertical.tabs-left li.active .nav-link:hover,
        html.dark body .tabs-dark.tabs-vertical.tabs-left li.active .nav-link:hover,
        html body .tabs-dark.tabs-vertical.tabs-left li.active .nav-link:focus,
        html.dark body .tabs-dark.tabs-vertical.tabs-left li.active .nav-link:focus {
            border-left-color: #212529;
        }

        html body .tabs-dark.tabs-vertical.tabs-right li .nav-link:hover,
        html.dark body .tabs-dark.tabs-vertical.tabs-right li .nav-link:hover,
        html body .tabs-dark.tabs-vertical.tabs-right li.active .nav-link,
        html.dark body .tabs-dark.tabs-vertical.tabs-right li.active .nav-link,
        html body .tabs-dark.tabs-vertical.tabs-right li.active .nav-link:hover,
        html.dark body .tabs-dark.tabs-vertical.tabs-right li.active .nav-link:hover,
        html body .tabs-dark.tabs-vertical.tabs-right li.active .nav-link:focus,
        html.dark body .tabs-dark.tabs-vertical.tabs-right li.active .nav-link:focus {
            border-right-color: #212529;
        }

        html body .tabs-light .nav-tabs li .nav-link,
        html.dark body .tabs-light .nav-tabs li .nav-link,
        html body .tabs-light .nav-tabs.nav-justified li .nav-link,
        html.dark body .tabs-light .nav-tabs.nav-justified li .nav-link,
        html body .tabs-light .nav-tabs li .nav-link:hover,
        html.dark body .tabs-light .nav-tabs li .nav-link:hover,
        html body .tabs-light .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-light .nav-tabs.nav-justified li .nav-link:hover {
            color: #FFF;
        }

        html body .tabs-light .nav-tabs li .nav-link:hover,
        html.dark body .tabs-light .nav-tabs li .nav-link:hover,
        html body .tabs-light .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-light .nav-tabs.nav-justified li .nav-link:hover {
            border-top-color: #FFF;
        }

        html body .tabs-light .nav-tabs li.active .nav-link,
        html.dark body .tabs-light .nav-tabs li.active .nav-link,
        html body .tabs-light .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-light .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-light .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-light .nav-tabs li.active .nav-link:hover,
        html body .tabs-light .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-light .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-light .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-light .nav-tabs li.active .nav-link:focus,
        html body .tabs-light .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-light .nav-tabs.nav-justified li.active .nav-link:focus {
            border-top-color: #FFF;
            color: #FFF;
        }

        html body .tabs-light.tabs-bottom .nav-tabs li .nav-link:hover,
        html.dark body .tabs-light.tabs-bottom .nav-tabs li .nav-link:hover,
        html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-light.tabs-bottom .nav-tabs li.active .nav-link,
        html.dark body .tabs-light.tabs-bottom .nav-tabs li.active .nav-link,
        html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-light.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-light.tabs-bottom .nav-tabs li.active .nav-link:hover,
        html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-light.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-light.tabs-bottom .nav-tabs li.active .nav-link:focus,
        html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active .nav-link:focus {
            border-bottom-color: #FFF;
        }

        html body .tabs-light.tabs-simple .nav-tabs li .nav-link:hover,
        html.dark body .tabs-light.tabs-simple .nav-tabs li .nav-link:hover,
        html body .tabs-light.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html.dark body .tabs-light.tabs-simple .nav-tabs.nav-justified li .nav-link:hover,
        html body .tabs-light.tabs-simple .nav-tabs li.active .nav-link,
        html.dark body .tabs-light.tabs-simple .nav-tabs li.active .nav-link,
        html body .tabs-light.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html.dark body .tabs-light.tabs-simple .nav-tabs.nav-justified li.active .nav-link,
        html body .tabs-light.tabs-simple .nav-tabs li.active .nav-link:hover,
        html.dark body .tabs-light.tabs-simple .nav-tabs li.active .nav-link:hover,
        html body .tabs-light.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html.dark body .tabs-light.tabs-simple .nav-tabs.nav-justified li.active .nav-link:hover,
        html body .tabs-light.tabs-simple .nav-tabs li.active .nav-link:focus,
        html.dark body .tabs-light.tabs-simple .nav-tabs li.active .nav-link:focus,
        html body .tabs-light.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus,
        html.dark body .tabs-light.tabs-simple .nav-tabs.nav-justified li.active .nav-link:focus {
            color: #FFF !important;
            border-bottom-color: #FFF;
        }

        html body .tabs-light.tabs-vertical.tabs-left li .nav-link:hover,
        html.dark body .tabs-light.tabs-vertical.tabs-left li .nav-link:hover,
        html body .tabs-light.tabs-vertical.tabs-left li.active .nav-link,
        html.dark body .tabs-light.tabs-vertical.tabs-left li.active .nav-link,
        html body .tabs-light.tabs-vertical.tabs-left li.active .nav-link:hover,
        html.dark body .tabs-light.tabs-vertical.tabs-left li.active .nav-link:hover,
        html body .tabs-light.tabs-vertical.tabs-left li.active .nav-link:focus,
        html.dark body .tabs-light.tabs-vertical.tabs-left li.active .nav-link:focus {
            border-left-color: #FFF;
        }

        html body .tabs-light.tabs-vertical.tabs-right li .nav-link:hover,
        html.dark body .tabs-light.tabs-vertical.tabs-right li .nav-link:hover,
        html body .tabs-light.tabs-vertical.tabs-right li.active .nav-link,
        html.dark body .tabs-light.tabs-vertical.tabs-right li.active .nav-link,
        html body .tabs-light.tabs-vertical.tabs-right li.active .nav-link:hover,
        html.dark body .tabs-light.tabs-vertical.tabs-right li.active .nav-link:hover,
        html body .tabs-light.tabs-vertical.tabs-right li.active .nav-link:focus,
        html.dark body .tabs-light.tabs-vertical.tabs-right li.active .nav-link:focus {
            border-right-color: #FFF;
        }

        html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li .nav-link:hover,
        html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active .nav-link,
        html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active .nav-link:hover,
        html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active .nav-link:focus {
            border-right-color: #9c27b0;
            border-left-color: transparent;
        }

        html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li .nav-link:hover,
        html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active .nav-link,
        html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active .nav-link:hover,
        html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active .nav-link:focus {
            border-right-color: transparent;
            border-left-color: #9c27b0;
        }

        .list.list-icons li>[class*="fa-"]:first-child,
        .list.list-icons li a:first-child>[class*="fa-"]:first-child,
        .list.list-icons li>.icons:first-child,
        .list.list-icons li a:first-child>.icons:first-child {
            color: #9c27b0;
            border-color: #9c27b0;
        }

        .list.list-icons.list-icons-style-3 li>[class*="fa-"]:first-child,
        .list.list-icons.list-icons-style-3 li a:first-child>[class*="fa-"]:first-child,
        .list.list-icons.list-icons-style-3 li>.icons:first-child,
        .list.list-icons.list-icons-style-3 li a:first-child>.icons:first-child {
            background-color: #9c27b0;
        }

        .list.list-ordened li:before {
            color: #9c27b0;
            border-color: #9c27b0;
        }

        .list.list-ordened.list-ordened-style-3 li:before {
            background-color: #9c27b0;
        }

        html .list-primary.list-icons li>[class*="fa-"]:first-child,
        html .list-primary.list-icons li a:first-child>[class*="fa-"]:first-child,
        html .list-primary.list-icons li>.icons:first-child,
        html .list-primary.list-icons li a:first-child>.icons:first-child {
            color: #9c27b0;
            border-color: #9c27b0;
        }

        html .list-primary.list-icons.list-icons-style-3 li>[class*="fa-"]:first-child,
        html .list-primary.list-icons.list-icons-style-3 li a:first-child>[class*="fa-"]:first-child,
        html .list-primary.list-icons.list-icons-style-3 li>.icons:first-child,
        html .list-primary.list-icons.list-icons-style-3 li a:first-child>.icons:first-child {
            background-color: #9c27b0;
            color: #FFF;
        }

        html .list-primary.list-ordened li:before {
            color: #9c27b0;
        }

        html .list-primary.list-ordened.list-ordened-style-3 li:before {
            background-color: #9c27b0;
            color: #FFF;
        }

        html .list-secondary.list-icons li>[class*="fa-"]:first-child,
        html .list-secondary.list-icons li a:first-child>[class*="fa-"]:first-child,
        html .list-secondary.list-icons li>.icons:first-child,
        html .list-secondary.list-icons li a:first-child>.icons:first-child {
            color: #d42257;
            border-color: #d42257;
        }

        html .list-secondary.list-icons.list-icons-style-3 li>[class*="fa-"]:first-child,
        html .list-secondary.list-icons.list-icons-style-3 li a:first-child>[class*="fa-"]:first-child,
        html .list-secondary.list-icons.list-icons-style-3 li>.icons:first-child,
        html .list-secondary.list-icons.list-icons-style-3 li a:first-child>.icons:first-child {
            background-color: #d42257;
            color: #FFF;
        }

        html .list-secondary.list-ordened li:before {
            color: #d42257;
        }

        html .list-secondary.list-ordened.list-ordened-style-3 li:before {
            background-color: #d42257;
            color: #FFF;
        }

        html .list-tertiary.list-icons li>[class*="fa-"]:first-child,
        html .list-tertiary.list-icons li a:first-child>[class*="fa-"]:first-child,
        html .list-tertiary.list-icons li>.icons:first-child,
        html .list-tertiary.list-icons li a:first-child>.icons:first-child {
            color: #2b38b1;
            border-color: #2b38b1;
        }

        html .list-tertiary.list-icons.list-icons-style-3 li>[class*="fa-"]:first-child,
        html .list-tertiary.list-icons.list-icons-style-3 li a:first-child>[class*="fa-"]:first-child,
        html .list-tertiary.list-icons.list-icons-style-3 li>.icons:first-child,
        html .list-tertiary.list-icons.list-icons-style-3 li a:first-child>.icons:first-child {
            background-color: #2b38b1;
            color: #FFF;
        }

        html .list-tertiary.list-ordened li:before {
            color: #2b38b1;
        }

        html .list-tertiary.list-ordened.list-ordened-style-3 li:before {
            background-color: #2b38b1;
            color: #FFF;
        }

        html .list-quaternary.list-icons li>[class*="fa-"]:first-child,
        html .list-quaternary.list-icons li a:first-child>[class*="fa-"]:first-child,
        html .list-quaternary.list-icons li>.icons:first-child,
        html .list-quaternary.list-icons li a:first-child>.icons:first-child {
            color: #383f48;
            border-color: #383f48;
        }

        html .list-quaternary.list-icons.list-icons-style-3 li>[class*="fa-"]:first-child,
        html .list-quaternary.list-icons.list-icons-style-3 li a:first-child>[class*="fa-"]:first-child,
        html .list-quaternary.list-icons.list-icons-style-3 li>.icons:first-child,
        html .list-quaternary.list-icons.list-icons-style-3 li a:first-child>.icons:first-child {
            background-color: #383f48;
            color: #FFF;
        }

        html .list-quaternary.list-ordened li:before {
            color: #383f48;
        }

        html .list-quaternary.list-ordened.list-ordened-style-3 li:before {
            background-color: #383f48;
            color: #FFF;
        }

        html .list-dark.list-icons li>[class*="fa-"]:first-child,
        html .list-dark.list-icons li a:first-child>[class*="fa-"]:first-child,
        html .list-dark.list-icons li>.icons:first-child,
        html .list-dark.list-icons li a:first-child>.icons:first-child {
            color: #212529;
            border-color: #212529;
        }

        html .list-dark.list-icons.list-icons-style-3 li>[class*="fa-"]:first-child,
        html .list-dark.list-icons.list-icons-style-3 li a:first-child>[class*="fa-"]:first-child,
        html .list-dark.list-icons.list-icons-style-3 li>.icons:first-child,
        html .list-dark.list-icons.list-icons-style-3 li a:first-child>.icons:first-child {
            background-color: #212529;
            color: #FFF;
        }

        html .list-dark.list-ordened li:before {
            color: #212529;
        }

        html .list-dark.list-ordened.list-ordened-style-3 li:before {
            background-color: #212529;
            color: #FFF;
        }

        html .list-light.list-icons li>[class*="fa-"]:first-child,
        html .list-light.list-icons li a:first-child>[class*="fa-"]:first-child,
        html .list-light.list-icons li>.icons:first-child,
        html .list-light.list-icons li a:first-child>.icons:first-child {
            color: #FFF;
            border-color: #FFF;
        }

        html .list-light.list-icons.list-icons-style-3 li>[class*="fa-"]:first-child,
        html .list-light.list-icons.list-icons-style-3 li a:first-child>[class*="fa-"]:first-child,
        html .list-light.list-icons.list-icons-style-3 li>.icons:first-child,
        html .list-light.list-icons.list-icons-style-3 li a:first-child>.icons:first-child {
            background-color: #FFF;
            color: #777;
        }

        html .list-light.list-ordened li:before {
            color: #FFF;
        }

        html .list-light.list-ordened.list-ordened-style-3 li:before {
            background-color: #FFF;
            color: #777;
        }

        .parallax blockquote i.fa-quote-left {
            color: #9c27b0;
        }

        section.video blockquote i.fa-quote-left {
            color: #9c27b0;
        }

        .accordion .card-header a {
            color: #9c27b0;
        }

        html .accordion.accordion-primary .card-header {
            background-color: #9c27b0 !important;
        }

        html .accordion.accordion-primary .card-header a {
            color: #FFF;
        }

        html .accordion.accordion-secondary .card-header {
            background-color: #d42257 !important;
        }

        html .accordion.accordion-secondary .card-header a {
            color: #FFF;
        }

        html .accordion.accordion-tertiary .card-header {
            background-color: #2b38b1 !important;
        }

        html .accordion.accordion-tertiary .card-header a {
            color: #FFF;
        }

        html .accordion.accordion-quaternary .card-header {
            background-color: #383f48 !important;
        }

        html .accordion.accordion-quaternary .card-header a {
            color: #FFF;
        }

        html .accordion.accordion-dark .card-header {
            background-color: #212529 !important;
        }

        html .accordion.accordion-dark .card-header a {
            color: #FFF;
        }

        html .accordion.accordion-light .card-header {
            background-color: #FFF !important;
        }

        html .accordion.accordion-light .card-header a {
            color: #777;
        }

        html .divider.divider-primary [class*="fa-"],
        html .divider.divider-primary .icons {
            color: #9c27b0;
        }

        html .divider.divider-primary.divider-small hr {
            background: #9c27b0;
        }

        html .divider.divider-secondary [class*="fa-"],
        html .divider.divider-secondary .icons {
            color: #d42257;
        }

        html .divider.divider-secondary.divider-small hr {
            background: #d42257;
        }

        html .divider.divider-tertiary [class*="fa-"],
        html .divider.divider-tertiary .icons {
            color: #2b38b1;
        }

        html .divider.divider-tertiary.divider-small hr {
            background: #2b38b1;
        }

        html .divider.divider-quaternary [class*="fa-"],
        html .divider.divider-quaternary .icons {
            color: #383f48;
        }

        html .divider.divider-quaternary.divider-small hr {
            background: #383f48;
        }

        html .divider.divider-dark [class*="fa-"],
        html .divider.divider-dark .icons {
            color: #212529;
        }

        html .divider.divider-dark.divider-small hr {
            background: #212529;
        }

        html .divider.divider-light [class*="fa-"],
        html .divider.divider-light .icons {
            color: #FFF;
        }

        html .divider.divider-light.divider-small hr {
            background: #FFF;
        }

        html .divider.divider-style-2.divider-primary [class*="fa-"],
        html .divider.divider-style-2.divider-primary .icons {
            background: #9c27b0;
            color: #FFF;
        }

        html .divider.divider-style-2.divider-secondary [class*="fa-"],
        html .divider.divider-style-2.divider-secondary .icons {
            background: #d42257;
            color: #FFF;
        }

        html .divider.divider-style-2.divider-tertiary [class*="fa-"],
        html .divider.divider-style-2.divider-tertiary .icons {
            background: #2b38b1;
            color: #FFF;
        }

        html .divider.divider-style-2.divider-quaternary [class*="fa-"],
        html .divider.divider-style-2.divider-quaternary .icons {
            background: #383f48;
            color: #FFF;
        }

        html .divider.divider-style-2.divider-dark [class*="fa-"],
        html .divider.divider-style-2.divider-dark .icons {
            background: #212529;
            color: #FFF;
        }

        html .divider.divider-style-2.divider-light [class*="fa-"],
        html .divider.divider-style-2.divider-light .icons {
            background: #FFF;
            color: #777;
        }

        html .divider.divider-style-3.divider-primary [class*="fa-"],
        html .divider.divider-style-3.divider-primary .icons {
            border-color: #9c27b0;
        }

        html .divider.divider-style-3.divider-secondary [class*="fa-"],
        html .divider.divider-style-3.divider-secondary .icons {
            border-color: #d42257;
        }

        html .divider.divider-style-3.divider-tertiary [class*="fa-"],
        html .divider.divider-style-3.divider-tertiary .icons {
            border-color: #2b38b1;
        }

        html .divider.divider-style-3.divider-quaternary [class*="fa-"],
        html .divider.divider-style-3.divider-quaternary .icons {
            border-color: #383f48;
        }

        html .divider.divider-style-3.divider-dark [class*="fa-"],
        html .divider.divider-style-3.divider-dark .icons {
            border-color: #212529;
        }

        html .divider.divider-style-3.divider-light [class*="fa-"],
        html .divider.divider-style-3.divider-light .icons {
            border-color: #FFF;
        }

        #header .tip {
            background: #9c27b0;
            color: #FFF;
        }

        #header .tip:before {
            border-right-color: #9c27b0;
            border-left-color: transparent;
        }

        html #header .tip-primary {
            background: #9c27b0 !important;
            color: #FFF !important;
        }

        html #header .tip-primary:before {
            border-right-color: #9c27b0 !important;
        }

        html #header .tip-secondary {
            background: #d42257 !important;
            color: #FFF !important;
        }

        html #header .tip-secondary:before {
            border-right-color: #d42257 !important;
        }

        html #header .tip-tertiary {
            background: #2b38b1 !important;
            color: #FFF !important;
        }

        html #header .tip-tertiary:before {
            border-right-color: #2b38b1 !important;
        }

        html #header .tip-quaternary {
            background: #383f48 !important;
            color: #FFF !important;
        }

        html #header .tip-quaternary:before {
            border-right-color: #383f48 !important;
        }

        html #header .tip-dark {
            background: #212529 !important;
            color: #FFF !important;
        }

        html #header .tip-dark:before {
            border-right-color: #212529 !important;
        }

        html #header .tip-light {
            background: #FFF !important;
            color: #777 !important;
        }

        html #header .tip-light:before {
            border-right-color: #FFF !important;
        }

        html[dir="rtl"] #header .tip:before {
            border-left-color: #9c27b0;
        }

        html[dir="rtl"] #header .tip.skin:before {
            border-left-color: #9c27b0;
        }

        html[dir="rtl"] #header .tip-primary:before {
            border-left-color: #9c27b0 !important;
            border-right-color: transparent !important;
        }

        html[dir="rtl"] #header .tip-secondary:before {
            border-left-color: #d42257 !important;
            border-right-color: transparent !important;
        }

        html[dir="rtl"] #header .tip-tertiary:before {
            border-left-color: #2b38b1 !important;
            border-right-color: transparent !important;
        }

        html[dir="rtl"] #header .tip-quaternary:before {
            border-left-color: #383f48 !important;
            border-right-color: transparent !important;
        }

        html[dir="rtl"] #header .tip-dark:before {
            border-left-color: #212529 !important;
            border-right-color: transparent !important;
        }

        html[dir="rtl"] #header .tip-light:before {
            border-left-color: #FFF !important;
            border-right-color: transparent !important;
        }

        #header .header-btn-collapse-nav {
            background: #9c27b0;
        }

        @media (min-width: 992px) {
            #header .header-nav-main nav>ul>li>a {
                color: #9c27b0;
            }

            #header .header-nav-main nav>ul>li.open>a,
            #header .header-nav-main nav>ul>li:hover>a {
                background: #9c27b0;
            }

            #header .header-nav-main nav>ul>li.dropdown .dropdown-menu {
                border-top-color: #9c27b0;
            }

            #header .header-nav-main nav>ul>li.dropdown.open>a:before,
            #header .header-nav-main nav>ul>li.dropdown:hover>a:before {
                border-bottom-color: #9c27b0;
            }

            #header .header-nav-main nav>ul>li.dropdown-mega-signin .dropdown-menu {
                border-top-color: #9c27b0;
            }

            #header .header-nav-main nav>ul>li.dropdown-mega-signin .dropdown-menu li a {
                color: #9c27b0;
            }

            #header .header-nav-main nav>ul:not(:hover)>li>a.active {
                background-color: #9c27b0;
                color: #FFF;
            }

            #header .header-nav.header-nav-stripe nav>ul>li:hover>a,
            #header .header-nav.header-nav-stripe nav>ul>li.open>a {
                background-color: #9c27b0;
            }

            #header .header-nav.header-nav-stripe nav>ul:not(:hover)>li>a.active {
                background-color: #9c27b0;
            }

            #header .header-nav.header-nav-stripe nav>ul:hover>li>a.active {
                color: #9c27b0;
            }

            #header .header-nav.header-nav-links nav>ul li:hover>a {
                color: #9c27b0;
            }

            #header .header-nav.header-nav-links nav>ul:not(:hover)>li>a.active {
                color: #9c27b0;
            }

            #header .header-nav.header-nav-links.header-nav-links-vertical-slide nav ul li.dropdown .dropdown-menu::-webkit-scrollbar-thumb {
                background: #9c27b0 !important;
            }

            #header .header-nav.header-nav-line nav>ul li:hover>a {
                color: #9c27b0;
            }

            #header .header-nav.header-nav-line nav>ul li:hover>a:before {
                background: #9c27b0;
            }

            #header .header-nav.header-nav-line nav>ul:not(:hover) li>a.active {
                color: #9c27b0;
            }

            #header .header-nav.header-nav-line nav>ul:not(:hover) li>a.active:before {
                background: #9c27b0;
            }

            #header .header-nav-main.header-nav-main-slide nav>ul>li.open>span>a,
            #header .header-nav-main.header-nav-main-slide nav>ul>li:hover>span>a {
                color: #9c27b0;
            }

            #header .header-nav-main.header-nav-main-slide nav>ul:not(:hover)>li>span>a.active {
                color: #9c27b0;
            }

            html.side-header #header.side-header .header-nav-main nav>ul li.dropdown.open>.dropdown-menu,
            html.side-header #header.side-header .header-nav-main nav>ul li.dropdown:hover>.dropdown-menu {
                border-left-color: #9c27b0;
            }

            html.side-header-right #header.side-header .header-nav-main nav>ul li.dropdown.open>.dropdown-menu,
            html.side-header-right #header.side-header .header-nav-main nav>ul li.dropdown:hover>.dropdown-menu {
                border-right-color: #9c27b0;
            }

            ;
        }

        @media (min-width: 992px) {
            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary .dropdown-menu {
                background-color: #9c27b0;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary .dropdown-menu li a {
                color: #FFF;
                border-bottom-color: #9124a3;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary .dropdown-menu li:hover>a {
                background: #a72abd;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary.open>a:before,
            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary:hover>a:before {
                border-bottom-color: #9c27b0;
                background: #9c27b0;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-mega.dropdown-primary .dropdown-mega-sub-title {
                color: #FFF;
                opacity: 0.70;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary:hover>a {
                background: #9c27b0;
                color: #FFF;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary .dropdown-menu li a {
                color: #FFF;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-primary>a.active {
                background: #9c27b0;
                color: #FFF;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary a:focus,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary a:hover {
                color: #9c27b0;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary a:focus:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary a:hover:before {
                background-color: #9c27b0;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary:hover>a {
                color: #9c27b0;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary.open>a:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary:hover>a:before {
                background: #9c27b0;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-primary>a.active {
                color: #9c27b0;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-primary>a.active:before {
                background-color: #9c27b0;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary a {
                color: #9c27b0;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary a:focus,
            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary a:hover {
                color: #9c27b0;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary:hover>a {
                color: #9c27b0;
            }

            html #header .header-nav-links .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-primary>a.active {
                color: #9c27b0;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary .dropdown-menu {
                background-color: #d42257;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary .dropdown-menu li a {
                color: #FFF;
                border-bottom-color: #c72052;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary .dropdown-menu li:hover>a {
                background: #dd295e;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary.open>a:before,
            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary:hover>a:before {
                border-bottom-color: #d42257;
                background: #d42257;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-mega.dropdown-secondary .dropdown-mega-sub-title {
                color: #FFF;
                opacity: 0.70;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary:hover>a {
                background: #d42257;
                color: #FFF;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary .dropdown-menu li a {
                color: #FFF;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-secondary>a.active {
                background: #d42257;
                color: #FFF;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary a:focus,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary a:hover {
                color: #d42257;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary a:focus:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary a:hover:before {
                background-color: #d42257;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary:hover>a {
                color: #d42257;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary.open>a:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary:hover>a:before {
                background: #d42257;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-secondary>a.active {
                color: #d42257;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-secondary>a.active:before {
                background-color: #d42257;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary a {
                color: #d42257;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary a:focus,
            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary a:hover {
                color: #d42257;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary:hover>a {
                color: #d42257;
            }

            html #header .header-nav-links .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-secondary>a.active {
                color: #d42257;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary .dropdown-menu {
                background-color: #2b38b1;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary .dropdown-menu li a {
                color: #FFF;
                border-bottom-color: #2834a5;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary .dropdown-menu li:hover>a {
                background: #2e3cbd;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary.open>a:before,
            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary:hover>a:before {
                border-bottom-color: #2b38b1;
                background: #2b38b1;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-mega.dropdown-tertiary .dropdown-mega-sub-title {
                color: #FFF;
                opacity: 0.70;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary:hover>a {
                background: #2b38b1;
                color: #FFF;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary .dropdown-menu li a {
                color: #FFF;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-tertiary>a.active {
                background: #2b38b1;
                color: #FFF;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary a:focus,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary a:hover {
                color: #2b38b1;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary a:focus:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary a:hover:before {
                background-color: #2b38b1;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary:hover>a {
                color: #2b38b1;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary.open>a:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary:hover>a:before {
                background: #2b38b1;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-tertiary>a.active {
                color: #2b38b1;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-tertiary>a.active:before {
                background-color: #2b38b1;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary a {
                color: #2b38b1;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary a:focus,
            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary a:hover {
                color: #2b38b1;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary:hover>a {
                color: #2b38b1;
            }

            html #header .header-nav-links .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-tertiary>a.active {
                color: #2b38b1;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary .dropdown-menu {
                background-color: #383f48;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary .dropdown-menu li a {
                color: #FFF;
                border-bottom-color: #31373f;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary .dropdown-menu li:hover>a {
                background: #3f4751;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary.open>a:before,
            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary:hover>a:before {
                border-bottom-color: #383f48;
                background: #383f48;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-mega.dropdown-quaternary .dropdown-mega-sub-title {
                color: #FFF;
                opacity: 0.70;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary:hover>a {
                background: #383f48;
                color: #FFF;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary .dropdown-menu li a {
                color: #FFF;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-quaternary>a.active {
                background: #383f48;
                color: #FFF;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary a:focus,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary a:hover {
                color: #383f48;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary a:focus:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary a:hover:before {
                background-color: #383f48;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary:hover>a {
                color: #383f48;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary.open>a:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary:hover>a:before {
                background: #383f48;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-quaternary>a.active {
                color: #383f48;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-quaternary>a.active:before {
                background-color: #383f48;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary a {
                color: #383f48;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary a:focus,
            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary a:hover {
                color: #383f48;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary:hover>a {
                color: #383f48;
            }

            html #header .header-nav-links .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-quaternary>a.active {
                color: #383f48;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark .dropdown-menu {
                background-color: #212529;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark .dropdown-menu li a {
                color: #FFF;
                border-bottom-color: #1a1d21;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark .dropdown-menu li:hover>a {
                background: #282d31;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark.open>a:before,
            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark:hover>a:before {
                border-bottom-color: #212529;
                background: #212529;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-mega.dropdown-dark .dropdown-mega-sub-title {
                color: #FFF;
                opacity: 0.70;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark:hover>a {
                background: #212529;
                color: #FFF;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark .dropdown-menu li a {
                color: #FFF;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-dark>a.active {
                background: #212529;
                color: #FFF;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark a:focus,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark a:hover {
                color: #212529;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark a:focus:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark a:hover:before {
                background-color: #212529;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark:hover>a {
                color: #212529;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark.open>a:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark:hover>a:before {
                background: #212529;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-dark>a.active {
                color: #212529;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-dark>a.active:before {
                background-color: #212529;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark a {
                color: #212529;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark a:focus,
            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark a:hover {
                color: #212529;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-dark:hover>a {
                color: #212529;
            }

            html #header .header-nav-links .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-dark>a.active {
                color: #212529;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light .dropdown-menu {
                background-color: #FFF;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light .dropdown-menu li a {
                color: #777;
                border-bottom-color: #f7f7f7;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light .dropdown-menu li:hover>a {
                background: #ffffff;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light.open>a:before,
            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light:hover>a:before {
                border-bottom-color: #FFF;
                background: #FFF;
            }

            html #header .header-nav .header-nav-main nav>ul>li.dropdown-full-color.dropdown-mega.dropdown-light .dropdown-mega-sub-title {
                color: #777;
                opacity: 0.70;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light:hover>a {
                background: #FFF;
                color: #777;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light .dropdown-menu li a {
                color: #777;
            }

            html #header .header-nav:not(.header-nav-line):not(.header-nav-links) .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-light>a.active {
                background: #FFF;
                color: #777;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light a:focus,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light a:hover {
                color: #FFF;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light a:focus:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light a:hover:before {
                background-color: #FFF;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light:hover>a {
                color: #FFF;
            }

            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light.open>a:before,
            html #header .header-nav-line .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light:hover>a:before {
                background: #FFF;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-light>a.active {
                color: #FFF;
            }

            html #header .header-nav-line .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-light>a.active:before {
                background-color: #FFF;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light a {
                color: #FFF;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light a:focus,
            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light a:hover {
                color: #FFF;
            }

            html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-light:hover>a {
                color: #FFF;
            }

            html #header .header-nav-links .header-nav-main nav>ul:not(:hover)>li.dropdown-full-color.dropdown-light>a.active {
                color: #FFF;
            }

            ;
        }

        @media (min-width: 992px) {

            html #header .header-nav-force-light-text-active-skin-color .header-nav-main nav>ul>li:hover>a,
            html #header .header-nav-force-light-text-active-skin-color .header-nav-main nav>ul>li .wrapper-items-cloned:hover>a {
                color: #9c27b0 !important;
            }

            html #header .header-nav-force-light-text-active-skin-color .header-nav-main nav>ul:not(:hover)>li>a.active,
            html #header .header-nav-force-light-text-active-skin-color .header-nav-main nav>ul:not(:hover)>li .wrapper-items-cloned>a.active {
                color: #9c27b0 !important;
            }

            ;
        }

        @media (max-width: 991px) {
            #header .header-nav-main:not(.header-nav-main-mobile-dark) nav>ul>li>a {
                color: #9c27b0;
            }

            #header .header-nav-main:not(.header-nav-main-mobile-dark) nav>ul>li>a:active {
                color: #9c27b0;
            }

            #header .header-nav-main:not(.header-nav-main-mobile-dark) nav>ul>li>a.active {
                background: #9c27b0;
            }

            #header .header-nav-main:not(.header-nav-main-mobile-dark) nav>ul>li>a.active:focus,
            #header .header-nav-main:not(.header-nav-main-mobile-dark) nav>ul>li>a.active:hover {
                background: #9c27b0;
            }

            #header .header-nav-main.header-nav-main-mobile-dark nav>ul>li>a.active {
                background: #9c27b0;
            }

            #header .header-nav-main.header-nav-main-mobile-dark nav>ul>li>a.active:focus,
            #header .header-nav-main.header-nav-main-mobile-dark nav>ul>li>a.active:hover {
                background: #9c27b0;
            }

            html.side-header-hamburguer-sidebar #header.side-header .header-nav.header-nav-links .header-nav-main.header-nav-main-mobile-dark nav>ul>li>a.active {
                color: #9c27b0 !important;
            }

            html.side-header-hamburguer-sidebar #header.side-header .header-nav.header-nav-links nav::-webkit-scrollbar-thumb {
                background-color: #9c27b0;
            }

            html.side-header-hamburguer-sidebar #header.side-header .header-nav.header-nav-links nav>ul>li>a.active {
                color: #9c27b0 !important;
            }

            html.side-header-hamburguer-sidebar #header.side-header .header-nav.header-nav-links nav>ul>li:hover>a {
                color: #9c27b0 !important;
            }

            ;
        }

        @media (max-width: 991px) {
            html #header .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary>a {
                color: #9c27b0;
            }

            html #header .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary>a.active {
                background: #9c27b0 !important;
                color: #FFF !important;
            }

            html #header .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary>a {
                color: #d42257;
            }

            html #header .header-nav-main nav>ul>li.dropdown-full-color.dropdown-secondary>a.active {
                background: #d42257 !important;
                color: #FFF !important;
            }

            html #header .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary>a {
                color: #2b38b1;
            }

            html #header .header-nav-main nav>ul>li.dropdown-full-color.dropdown-tertiary>a.active {
                background: #2b38b1 !important;
                color: #FFF !important;
            }

            html #header .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary>a {
                color: #383f48;
            }

            html #header .header-nav-main nav>ul>li.dropdown-full-color.dropdown-quaternary>a.active {
                background: #383f48 !important;
                color: #FFF !important;
            }

            ;
        }

        html #header .header-top.header-top-primary {
            background: #9c27b0;
            border-top-color: #89229b;
        }

        html #header .header-top.header-top-primary .header-nav-top ul>li.open>a {
            background: #af2cc5;
        }

        html #header .header-top.header-top-primary .header-nav-top ul>li>a:hover,
        html #header .header-top.header-top-primary .header-nav-top ul>li.open>a:hover,
        html #header .header-top.header-top-primary .header-nav-top ul>li>a:focus,
        html #header .header-top.header-top-primary .header-nav-top ul>li.open>a:focus {
            background: #af2cc5;
        }

        html #header .header-top.header-top-primary .dropdown-menu {
            background: #af2cc5;
            border-color: #af2cc5;
        }

        html #header .header-top.header-top-primary .dropdown-menu a:hover,
        html #header .header-top.header-top-primary .dropdown-menu a:focus {
            background: #bc37d3 !important;
        }

        html #header .header-top.header-top-secondary {
            background: #d42257;
            border-top-color: #be1e4e;
        }

        html #header .header-top.header-top-secondary .header-nav-top ul>li.open>a {
            background: #de3165;
        }

        html #header .header-top.header-top-secondary .header-nav-top ul>li>a:hover,
        html #header .header-top.header-top-secondary .header-nav-top ul>li.open>a:hover,
        html #header .header-top.header-top-secondary .header-nav-top ul>li>a:focus,
        html #header .header-top.header-top-secondary .header-nav-top ul>li.open>a:focus {
            background: #de3165;
        }

        html #header .header-top.header-top-secondary .dropdown-menu {
            background: #de3165;
            border-color: #de3165;
        }

        html #header .header-top.header-top-secondary .dropdown-menu a:hover,
        html #header .header-top.header-top-secondary .dropdown-menu a:focus {
            background: #e24775 !important;
        }

        html #header .header-top.header-top-tertiary {
            background: #2b38b1;
            border-top-color: #26329c;
        }

        html #header .header-top.header-top-tertiary .header-nav-top ul>li.open>a {
            background: #303ec6;
        }

        html #header .header-top.header-top-tertiary .header-nav-top ul>li>a:hover,
        html #header .header-top.header-top-tertiary .header-nav-top ul>li.open>a:hover,
        html #header .header-top.header-top-tertiary .header-nav-top ul>li>a:focus,
        html #header .header-top.header-top-tertiary .header-nav-top ul>li.open>a:focus {
            background: #303ec6;
        }

        html #header .header-top.header-top-tertiary .dropdown-menu {
            background: #303ec6;
            border-color: #303ec6;
        }

        html #header .header-top.header-top-tertiary .dropdown-menu a:hover,
        html #header .header-top.header-top-tertiary .dropdown-menu a:focus {
            background: #3f4dd0 !important;
        }

        html #header .header-top.header-top-quaternary {
            background: #383f48;
            border-top-color: #2d323a;
        }

        html #header .header-top.header-top-quaternary .header-nav-top ul>li.open>a {
            background: #434c56;
        }

        html #header .header-top.header-top-quaternary .header-nav-top ul>li>a:hover,
        html #header .header-top.header-top-quaternary .header-nav-top ul>li.open>a:hover,
        html #header .header-top.header-top-quaternary .header-nav-top ul>li>a:focus,
        html #header .header-top.header-top-quaternary .header-nav-top ul>li.open>a:focus {
            background: #434c56;
        }

        html #header .header-top.header-top-quaternary .dropdown-menu {
            background: #434c56;
            border-color: #434c56;
        }

        html #header .header-top.header-top-quaternary .dropdown-menu a:hover,
        html #header .header-top.header-top-quaternary .dropdown-menu a:focus {
            background: #4e5865 !important;
        }

        html #header .header-top.header-top-dark {
            background: #212529;
            border-top-color: #16181b;
        }

        html #header .header-top.header-top-dark .header-nav-top ul>li.open>a {
            background: #2c3237;
        }

        html #header .header-top.header-top-dark .header-nav-top ul>li>a:hover,
        html #header .header-top.header-top-dark .header-nav-top ul>li.open>a:hover,
        html #header .header-top.header-top-dark .header-nav-top ul>li>a:focus,
        html #header .header-top.header-top-dark .header-nav-top ul>li.open>a:focus {
            background: #2c3237;
        }

        html #header .header-top.header-top-dark .dropdown-menu {
            background: #2c3237;
            border-color: #2c3237;
        }

        html #header .header-top.header-top-dark .dropdown-menu a:hover,
        html #header .header-top.header-top-dark .dropdown-menu a:focus {
            background: #383f45 !important;
        }

        html #header .header-top.header-top-light {
            background: #FFF;
            border-top-color: #f2f2f2;
        }

        html #header .header-top.header-top-light .header-nav-top ul>li.open>a {
            background: #ffffff;
        }

        html #header .header-top.header-top-light .header-nav-top ul>li>a:hover,
        html #header .header-top.header-top-light .header-nav-top ul>li.open>a:hover,
        html #header .header-top.header-top-light .header-nav-top ul>li>a:focus,
        html #header .header-top.header-top-light .header-nav-top ul>li.open>a:focus {
            background: #ffffff;
        }

        html #header .header-top.header-top-light .dropdown-menu {
            background: #ffffff;
            border-color: #ffffff;
        }

        html #header .header-top.header-top-light .dropdown-menu a:hover,
        html #header .header-top.header-top-light .dropdown-menu a:focus {
            background: #ffffff !important;
        }

        @media (min-width: 992px) {
            html #header .header-nav-bar-primary {
                background: #9c27b0 !important;
                color: #FFF !important;
            }

            html #header .header-nav-bar-secondary {
                background: #d42257 !important;
                color: #FFF !important;
            }

            html #header .header-nav-bar-tertiary {
                background: #2b38b1 !important;
                color: #FFF !important;
            }

            html #header .header-nav-bar-quaternary {
                background: #383f48 !important;
                color: #FFF !important;
            }

            html #header .header-nav-bar-dark {
                background: #212529 !important;
                color: #FFF !important;
            }

            html #header .header-nav-bar-light {
                background: #FFF !important;
                color: #777 !important;
            }

            ;
        }

        @media (min-width: 992px) {

            #header .header-nav-main.header-nav-main-light nav>ul>li.open>a,
            #header .header-nav-main.header-nav-main-light nav>ul>li:hover>a {
                color: #9c27b0;
            }

            #header .header-nav-main.header-nav-main-light nav>ul>li>a.active {
                color: #9c27b0;
            }

            ;
        }

        #header .header-nav-features .header-nav-features-search-reveal-big-search .form-control {
            border-bottom-color: #0088cc;
        }

        .testimonial blockquote {
            background: #af2cc5;
        }

        .testimonial .testimonial-arrow-down {
            border-top-color: #af2cc5;
        }

        html .testimonial-primary blockquote {
            background: #af2cc5;
        }

        html .testimonial-primary .testimonial-arrow-down {
            border-top-color: #af2cc5;
        }

        html .testimonial-primary.testimonial-style-7 {
            background: #af2cc5;
        }

        html .testimonial-quotes-primary blockquote:before,
        html .testimonial-quotes-primary blockquote:after {
            color: #9c27b0 !important;
        }

        html .testimonial-secondary blockquote {
            background: #de3165;
        }

        html .testimonial-secondary .testimonial-arrow-down {
            border-top-color: #de3165;
        }

        html .testimonial-secondary.testimonial-style-7 {
            background: #de3165;
        }

        html .testimonial-quotes-secondary blockquote:before,
        html .testimonial-quotes-secondary blockquote:after {
            color: #9c27b0 !important;
        }

        html .testimonial-tertiary blockquote {
            background: #303ec6;
        }

        html .testimonial-tertiary .testimonial-arrow-down {
            border-top-color: #303ec6;
        }

        html .testimonial-tertiary.testimonial-style-7 {
            background: #303ec6;
        }

        html .testimonial-quotes-tertiary blockquote:before,
        html .testimonial-quotes-tertiary blockquote:after {
            color: #9c27b0 !important;
        }

        html .testimonial-quaternary blockquote {
            background: #434c56;
        }

        html .testimonial-quaternary .testimonial-arrow-down {
            border-top-color: #434c56;
        }

        html .testimonial-quaternary.testimonial-style-7 {
            background: #434c56;
        }

        html .testimonial-quotes-quaternary blockquote:before,
        html .testimonial-quotes-quaternary blockquote:after {
            color: #9c27b0 !important;
        }

        html .testimonial-dark blockquote {
            background: #2c3237;
        }

        html .testimonial-dark .testimonial-arrow-down {
            border-top-color: #2c3237;
        }

        html .testimonial-dark.testimonial-style-7 {
            background: #2c3237;
        }

        html .testimonial-quotes-dark blockquote:before,
        html .testimonial-quotes-dark blockquote:after {
            color: #9c27b0 !important;
        }

        html .testimonial-light blockquote {
            background: #ffffff;
        }

        html .testimonial-light .testimonial-arrow-down {
            border-top-color: #ffffff;
        }

        html .testimonial-light.testimonial-style-7 {
            background: #ffffff;
        }

        html .testimonial-quotes-light blockquote:before,
        html .testimonial-quotes-light blockquote:after {
            color: #9c27b0 !important;
        }

        .circular-bar.only-icon [class*="fa-"],
        .circular-bar.only-icon .icons {
            color: #9c27b0;
        }

        html .counters .counter-primary [class*="fa-"],
        html .counters .counter-primary .icons,
        html .counters .counter-primary strong {
            color: #9c27b0;
        }

        html .counters .counter-secondary [class*="fa-"],
        html .counters .counter-secondary .icons,
        html .counters .counter-secondary strong {
            color: #d42257;
        }

        html .counters .counter-tertiary [class*="fa-"],
        html .counters .counter-tertiary .icons,
        html .counters .counter-tertiary strong {
            color: #2b38b1;
        }

        html .counters .counter-quaternary [class*="fa-"],
        html .counters .counter-quaternary .icons,
        html .counters .counter-quaternary strong {
            color: #383f48;
        }

        html .counters .counter-dark [class*="fa-"],
        html .counters .counter-dark .icons,
        html .counters .counter-dark strong {
            color: #212529;
        }

        html .counters .counter-light [class*="fa-"],
        html .counters .counter-light .icons,
        html .counters .counter-light strong {
            color: #FFF;
        }

        html .countdown.countdown-primary>span>span {
            color: #9c27b0;
        }

        html .countdown.countdown-secondary>span>span {
            color: #d42257;
        }

        html .countdown.countdown-tertiary>span>span {
            color: #2b38b1;
        }

        html .countdown.countdown-quaternary>span>span {
            color: #383f48;
        }

        html .countdown.countdown-dark>span>span {
            color: #212529;
        }

        html .countdown.countdown-light>span>span {
            color: #FFF;
        }

        html .image-hotspot-primary strong {
            color: #FFF !important;
        }

        html .image-hotspot-primary .circle {
            background: #9c27b0 !important;
        }

        html .image-hotspot-primary .ring {
            border-color: rgba(156, 39, 176, 0.9);
        }

        html .image-hotspot-secondary strong {
            color: #FFF !important;
        }

        html .image-hotspot-secondary .circle {
            background: #d42257 !important;
        }

        html .image-hotspot-secondary .ring {
            border-color: rgba(212, 34, 87, 0.9);
        }

        html .image-hotspot-tertiary strong {
            color: #FFF !important;
        }

        html .image-hotspot-tertiary .circle {
            background: #2b38b1 !important;
        }

        html .image-hotspot-tertiary .ring {
            border-color: rgba(43, 56, 177, 0.9);
        }

        html .image-hotspot-quaternary strong {
            color: #FFF !important;
        }

        html .image-hotspot-quaternary .circle {
            background: #383f48 !important;
        }

        html .image-hotspot-quaternary .ring {
            border-color: rgba(56, 63, 72, 0.9);
        }

        html .image-hotspot-dark strong {
            color: #FFF !important;
        }

        html .image-hotspot-dark .circle {
            background: #212529 !important;
        }

        html .image-hotspot-dark .ring {
            border-color: rgba(33, 37, 41, 0.9);
        }

        html .image-hotspot-light strong {
            color: #777 !important;
        }

        html .image-hotspot-light .circle {
            background: #FFF !important;
        }

        html .image-hotspot-light .ring {
            border-color: rgba(255, 255, 255, 0.9);
        }

        .icon-featured {
            background-color: #9c27b0;
        }

        html .featured-box-primary .icon-featured {
            background-color: #9c27b0;
        }

        html .featured-box-primary h4 {
            color: #9c27b0;
        }

        html .featured-box-primary .box-content {
            border-top-color: #9c27b0;
        }

        html .featured-box-primary .box-content-border-bottom {
            border-bottom-color: #9c27b0;
        }

        html .featured-box-secondary .icon-featured {
            background-color: #d42257;
        }

        html .featured-box-secondary h4 {
            color: #d42257;
        }

        html .featured-box-secondary .box-content {
            border-top-color: #d42257;
        }

        html .featured-box-secondary .box-content-border-bottom {
            border-bottom-color: #d42257;
        }

        html .featured-box-tertiary .icon-featured {
            background-color: #2b38b1;
        }

        html .featured-box-tertiary h4 {
            color: #2b38b1;
        }

        html .featured-box-tertiary .box-content {
            border-top-color: #2b38b1;
        }

        html .featured-box-tertiary .box-content-border-bottom {
            border-bottom-color: #2b38b1;
        }

        html .featured-box-quaternary .icon-featured {
            background-color: #383f48;
        }

        html .featured-box-quaternary h4 {
            color: #383f48;
        }

        html .featured-box-quaternary .box-content {
            border-top-color: #383f48;
        }

        html .featured-box-quaternary .box-content-border-bottom {
            border-bottom-color: #383f48;
        }

        html .featured-box-dark .icon-featured {
            background-color: #212529;
        }

        html .featured-box-dark h4 {
            color: #212529;
        }

        html .featured-box-dark .box-content {
            border-top-color: #212529;
        }

        html .featured-box-dark .box-content-border-bottom {
            border-bottom-color: #212529;
        }

        html .featured-box-light .icon-featured {
            background-color: #FFF;
        }

        html .featured-box-light h4 {
            color: #FFF;
        }

        html .featured-box-light .box-content {
            border-top-color: #FFF;
        }

        html .featured-box-light .box-content-border-bottom {
            border-bottom-color: #FFF;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-primary .icon-featured {
            border-color: #9c27b0;
            color: #9c27b0;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-secondary .icon-featured {
            border-color: #d42257;
            color: #d42257;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-tertiary .icon-featured {
            border-color: #2b38b1;
            color: #2b38b1;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-quaternary .icon-featured {
            border-color: #383f48;
            color: #383f48;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-dark .icon-featured {
            border-color: #212529;
            color: #212529;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-light .icon-featured {
            border-color: #FFF;
            color: #FFF;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-primary .icon-featured {
            border-color: #9c27b0;
            color: #9c27b0;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-secondary .icon-featured {
            border-color: #d42257;
            color: #d42257;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-tertiary .icon-featured {
            border-color: #2b38b1;
            color: #2b38b1;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-quaternary .icon-featured {
            border-color: #383f48;
            color: #383f48;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-dark .icon-featured {
            border-color: #212529;
            color: #212529;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-light .icon-featured {
            border-color: #FFF;
            color: #FFF;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-primary .icon-featured {
            color: #9c27b0;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-secondary .icon-featured {
            color: #d42257;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-tertiary .icon-featured {
            color: #2b38b1;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-quaternary .icon-featured {
            color: #383f48;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-dark .icon-featured {
            color: #212529;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-light .icon-featured {
            color: #FFF;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-primary .icon-featured {
            color: #9c27b0;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-secondary .icon-featured {
            color: #d42257;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-tertiary .icon-featured {
            color: #2b38b1;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-quaternary .icon-featured {
            color: #383f48;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-dark .icon-featured {
            color: #212529;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-light .icon-featured {
            color: #FFF;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-primary .icon-featured {
            color: #9c27b0;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-secondary .icon-featured {
            color: #d42257;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-tertiary .icon-featured {
            color: #2b38b1;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-quaternary .icon-featured {
            color: #383f48;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-dark .icon-featured {
            color: #212529;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-light .icon-featured {
            color: #FFF;
        }

        .featured-boxes-modern-style-primary .featured-box {
            background: #9c27b0;
            background: linear-gradient(135deg, #9c27b0 0%, #383f48 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#9c27b0', endColorstr='#383f48', GradientType=1);
        }

        .featured-boxes-modern-style-secondary .featured-box {
            background: #d42257;
            background: linear-gradient(135deg, #d42257 0%, #383f48 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#d42257', endColorstr='#383f48', GradientType=1);
        }

        .featured-boxes-modern-style-tertiary .featured-box {
            background: #2b38b1;
            background: linear-gradient(135deg, #2b38b1 0%, #383f48 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2b38b1', endColorstr='#383f48', GradientType=1);
        }

        html .featured-box-effect-2.featured-box-primary .icon-featured:after {
            box-shadow: 0 0 0 3px #9c27b0;
        }

        html .featured-box-effect-2.featured-box-secondary .icon-featured:after {
            box-shadow: 0 0 0 3px #d42257;
        }

        html .featured-box-effect-2.featured-box-tertiary .icon-featured:after {
            box-shadow: 0 0 0 3px #2b38b1;
        }

        html .featured-box-effect-2.featured-box-quaternary .icon-featured:after {
            box-shadow: 0 0 0 3px #383f48;
        }

        html .featured-box-effect-2.featured-box-dark .icon-featured:after {
            box-shadow: 0 0 0 3px #212529;
        }

        html .featured-box-effect-2.featured-box-light .icon-featured:after {
            box-shadow: 0 0 0 3px #FFF;
        }

        html .featured-box-effect-3.featured-box-primary .icon-featured:after {
            box-shadow: 0 0 0 10px #9c27b0;
        }

        html .featured-box-effect-3.featured-box-primary:hover .icon-featured {
            background: #9c27b0 !important;
        }

        html .featured-box-effect-3.featured-box-secondary .icon-featured:after {
            box-shadow: 0 0 0 10px #d42257;
        }

        html .featured-box-effect-3.featured-box-secondary:hover .icon-featured {
            background: #d42257 !important;
        }

        html .featured-box-effect-3.featured-box-tertiary .icon-featured:after {
            box-shadow: 0 0 0 10px #2b38b1;
        }

        html .featured-box-effect-3.featured-box-tertiary:hover .icon-featured {
            background: #2b38b1 !important;
        }

        html .featured-box-effect-3.featured-box-quaternary .icon-featured:after {
            box-shadow: 0 0 0 10px #383f48;
        }

        html .featured-box-effect-3.featured-box-quaternary:hover .icon-featured {
            background: #383f48 !important;
        }

        html .featured-box-effect-3.featured-box-dark .icon-featured:after {
            box-shadow: 0 0 0 10px #212529;
        }

        html .featured-box-effect-3.featured-box-dark:hover .icon-featured {
            background: #212529 !important;
        }

        html .featured-box-effect-3.featured-box-light .icon-featured:after {
            box-shadow: 0 0 0 10px #FFF;
        }

        html .featured-box-effect-3.featured-box-light:hover .icon-featured {
            background: #FFF !important;
        }

        .feature-box .feature-box-icon {
            background-color: #9c27b0;
        }

        html .feature-box-primary .feature-box-icon {
            background-color: #9c27b0;
        }

        html .feature-box-secondary .feature-box-icon {
            background-color: #d42257;
        }

        html .feature-box-tertiary .feature-box-icon {
            background-color: #2b38b1;
        }

        html .feature-box-quaternary .feature-box-icon {
            background-color: #383f48;
        }

        html .feature-box-dark .feature-box-icon {
            background-color: #212529;
        }

        html .feature-box-light .feature-box-icon {
            background-color: #FFF;
        }

        .feature-box.feature-box-style-2 .feature-box-icon [class*="fa-"],
        .feature-box.feature-box-style-2 .feature-box-icon .icons {
            color: #9c27b0;
        }

        html .feature-box-primary.feature-box-style-2 .feature-box-icon [class*="fa-"],
        html .feature-box-primary.feature-box-style-2 .feature-box-icon .icons {
            color: #9c27b0;
        }

        html .feature-box-secondary.feature-box-style-2 .feature-box-icon [class*="fa-"],
        html .feature-box-secondary.feature-box-style-2 .feature-box-icon .icons {
            color: #d42257;
        }

        html .feature-box-tertiary.feature-box-style-2 .feature-box-icon [class*="fa-"],
        html .feature-box-tertiary.feature-box-style-2 .feature-box-icon .icons {
            color: #2b38b1;
        }

        html .feature-box-quaternary.feature-box-style-2 .feature-box-icon [class*="fa-"],
        html .feature-box-quaternary.feature-box-style-2 .feature-box-icon .icons {
            color: #383f48;
        }

        html .feature-box-dark.feature-box-style-2 .feature-box-icon [class*="fa-"],
        html .feature-box-dark.feature-box-style-2 .feature-box-icon .icons {
            color: #212529;
        }

        html .feature-box-light.feature-box-style-2 .feature-box-icon [class*="fa-"],
        html .feature-box-light.feature-box-style-2 .feature-box-icon .icons {
            color: #FFF;
        }

        .feature-box.feature-box-style-3 .feature-box-icon {
            border-color: #9c27b0;
        }

        .feature-box.feature-box-style-3 .feature-box-icon [class*="fa-"],
        .feature-box.feature-box-style-3 .feature-box-icon .icons {
            color: #9c27b0;
        }

        html .feature-box-primary.feature-box-style-3 .feature-box-icon {
            border-color: #9c27b0;
        }

        html .feature-box-primary.feature-box-style-3 .feature-box-icon [class*="fa-"],
        html .feature-box-primary.feature-box-style-3 .feature-box-icon .icons {
            color: #9c27b0;
        }

        html .feature-box-secondary.feature-box-style-3 .feature-box-icon {
            border-color: #d42257;
        }

        html .feature-box-secondary.feature-box-style-3 .feature-box-icon [class*="fa-"],
        html .feature-box-secondary.feature-box-style-3 .feature-box-icon .icons {
            color: #d42257;
        }

        html .feature-box-tertiary.feature-box-style-3 .feature-box-icon {
            border-color: #2b38b1;
        }

        html .feature-box-tertiary.feature-box-style-3 .feature-box-icon [class*="fa-"],
        html .feature-box-tertiary.feature-box-style-3 .feature-box-icon .icons {
            color: #2b38b1;
        }

        html .feature-box-quaternary.feature-box-style-3 .feature-box-icon {
            border-color: #383f48;
        }

        html .feature-box-quaternary.feature-box-style-3 .feature-box-icon [class*="fa-"],
        html .feature-box-quaternary.feature-box-style-3 .feature-box-icon .icons {
            color: #383f48;
        }

        html .feature-box-dark.feature-box-style-3 .feature-box-icon {
            border-color: #212529;
        }

        html .feature-box-dark.feature-box-style-3 .feature-box-icon [class*="fa-"],
        html .feature-box-dark.feature-box-style-3 .feature-box-icon .icons {
            color: #212529;
        }

        html .feature-box-light.feature-box-style-3 .feature-box-icon {
            border-color: #FFF;
        }

        html .feature-box-light.feature-box-style-3 .feature-box-icon [class*="fa-"],
        html .feature-box-light.feature-box-style-3 .feature-box-icon .icons {
            color: #FFF;
        }

        .feature-box.feature-box-style-4 .feature-box-icon [class*="fa-"],
        .feature-box.feature-box-style-4 .feature-box-icon .icons {
            color: #9c27b0;
        }

        html .feature-box-primary.feature-box-style-4 .feature-box-icon [class*="fa-"],
        html .feature-box-primary.feature-box-style-4 .feature-box-icon .icons {
            color: #9c27b0;
        }

        html .feature-box-secondary.feature-box-style-4 .feature-box-icon [class*="fa-"],
        html .feature-box-secondary.feature-box-style-4 .feature-box-icon .icons {
            color: #d42257;
        }

        html .feature-box-tertiary.feature-box-style-4 .feature-box-icon [class*="fa-"],
        html .feature-box-tertiary.feature-box-style-4 .feature-box-icon .icons {
            color: #2b38b1;
        }

        html .feature-box-quaternary.feature-box-style-4 .feature-box-icon [class*="fa-"],
        html .feature-box-quaternary.feature-box-style-4 .feature-box-icon .icons {
            color: #383f48;
        }

        html .feature-box-dark.feature-box-style-4 .feature-box-icon [class*="fa-"],
        html .feature-box-dark.feature-box-style-4 .feature-box-icon .icons {
            color: #212529;
        }

        html .feature-box-light.feature-box-style-4 .feature-box-icon [class*="fa-"],
        html .feature-box-light.feature-box-style-4 .feature-box-icon .icons {
            color: #FFF;
        }

        .feature-box.feature-box-style-5 .feature-box-icon [class*="fa-"],
        .feature-box.feature-box-style-5 .feature-box-icon .icons {
            color: #9c27b0;
        }

        html .feature-box-primary.feature-box-style-5 .feature-box-icon [class*="fa-"],
        html .feature-box-primary.feature-box-style-5 .feature-box-icon .icons {
            color: #9c27b0;
        }

        html .feature-box-secondary.feature-box-style-5 .feature-box-icon [class*="fa-"],
        html .feature-box-secondary.feature-box-style-5 .feature-box-icon .icons {
            color: #d42257;
        }

        html .feature-box-tertiary.feature-box-style-5 .feature-box-icon [class*="fa-"],
        html .feature-box-tertiary.feature-box-style-5 .feature-box-icon .icons {
            color: #2b38b1;
        }

        html .feature-box-quaternary.feature-box-style-5 .feature-box-icon [class*="fa-"],
        html .feature-box-quaternary.feature-box-style-5 .feature-box-icon .icons {
            color: #383f48;
        }

        html .feature-box-dark.feature-box-style-5 .feature-box-icon [class*="fa-"],
        html .feature-box-dark.feature-box-style-5 .feature-box-icon .icons {
            color: #212529;
        }

        html .feature-box-light.feature-box-style-5 .feature-box-icon [class*="fa-"],
        html .feature-box-light.feature-box-style-5 .feature-box-icon .icons {
            color: #FFF;
        }

        html .feature-box-primary.feature-box-style-6 .feature-box-icon [class*="fa-"],
        html .feature-box-primary.feature-box-style-6 .feature-box-icon .icons {
            color: #9c27b0;
        }

        html .feature-box-secondary.feature-box-style-6 .feature-box-icon [class*="fa-"],
        html .feature-box-secondary.feature-box-style-6 .feature-box-icon .icons {
            color: #d42257;
        }

        html .feature-box-tertiary.feature-box-style-6 .feature-box-icon [class*="fa-"],
        html .feature-box-tertiary.feature-box-style-6 .feature-box-icon .icons {
            color: #2b38b1;
        }

        html .feature-box-quaternary.feature-box-style-6 .feature-box-icon [class*="fa-"],
        html .feature-box-quaternary.feature-box-style-6 .feature-box-icon .icons {
            color: #383f48;
        }

        html .feature-box-dark.feature-box-style-6 .feature-box-icon [class*="fa-"],
        html .feature-box-dark.feature-box-style-6 .feature-box-icon .icons {
            color: #212529;
        }

        html .feature-box-light.feature-box-style-6 .feature-box-icon [class*="fa-"],
        html .feature-box-light.feature-box-style-6 .feature-box-icon .icons {
            color: #FFF;
        }

        html .featured-boxes-full-scale>.featured-box-full-primary:nth-child(1) {
            background-color: #771e86;
        }

        html .featured-boxes-full-scale>.featured-box-full-primary:nth-child(2) {
            background-color: #89229b;
        }

        html .featured-boxes-full-scale>.featured-box-full-primary:nth-child(3) {
            background-color: #9c27b0;
        }

        html .featured-boxes-full-scale>.featured-box-full-primary:nth-child(4) {
            background-color: #af2cc5;
        }

        html .featured-boxes-full-scale>.featured-box-full-primary:nth-child(5) {
            background-color: #bc37d3;
        }

        html .featured-boxes-full-scale>.featured-box-full-primary:nth-child(6) {
            background-color: #c34cd7;
        }

        html .featured-boxes-full .featured-box-full-primary {
            background-color: #9c27b0;
            color: #FFF;
        }

        html .featured-boxes-full .featured-box-full-secondary {
            background-color: #d42257;
            color: #FFF;
        }

        html .featured-boxes-full .featured-box-full-tertiary {
            background-color: #2b38b1;
            color: #FFF;
        }

        html .featured-boxes-full .featured-box-full-quaternary {
            background-color: #383f48;
            color: #FFF;
        }

        html .featured-boxes-full .featured-box-full-dark {
            background-color: #212529;
            color: #FFF;
        }

        html .featured-boxes-full .featured-box-full-light {
            background-color: #FFF;
            color: #777;
        }

        .pricing-table .most-popular {
            border-color: #9c27b0;
        }

        .pricing-table .most-popular h3 {
            background-color: #9c27b0;
        }

        .pricing-table.princig-table-flat .plan h3 {
            background-color: #9c27b0;
        }

        .pricing-table.princig-table-flat .plan h3 span {
            background: #9c27b0;
        }

        html .call-to-action.featured.featured-primary {
            border-top-color: #9c27b0;
        }

        html .call-to-action.call-to-action-primary {
            background: #9c27b0;
        }

        html .call-to-action.with-full-borders-primary {
            border-color: #9c27b0;
        }

        html .call-to-action.call-to-action-primary {
            background: #9c27b0;
        }

        html .call-to-action.call-to-action-primary h3,
        html .call-to-action.call-to-action-primary p {
            color: #FFF;
        }

        html .call-to-action.featured.featured-secondary {
            border-top-color: #d42257;
        }

        html .call-to-action.call-to-action-secondary {
            background: #d42257;
        }

        html .call-to-action.with-full-borders-secondary {
            border-color: #d42257;
        }

        html .call-to-action.call-to-action-secondary {
            background: #d42257;
        }

        html .call-to-action.call-to-action-secondary h3,
        html .call-to-action.call-to-action-secondary p {
            color: #FFF;
        }

        html .call-to-action.featured.featured-tertiary {
            border-top-color: #2b38b1;
        }

        html .call-to-action.call-to-action-tertiary {
            background: #2b38b1;
        }

        html .call-to-action.with-full-borders-tertiary {
            border-color: #2b38b1;
        }

        html .call-to-action.call-to-action-tertiary {
            background: #2b38b1;
        }

        html .call-to-action.call-to-action-tertiary h3,
        html .call-to-action.call-to-action-tertiary p {
            color: #FFF;
        }

        html .call-to-action.featured.featured-quaternary {
            border-top-color: #383f48;
        }

        html .call-to-action.call-to-action-quaternary {
            background: #383f48;
        }

        html .call-to-action.with-full-borders-quaternary {
            border-color: #383f48;
        }

        html .call-to-action.call-to-action-quaternary {
            background: #383f48;
        }

        html .call-to-action.call-to-action-quaternary h3,
        html .call-to-action.call-to-action-quaternary p {
            color: #FFF;
        }

        html .call-to-action.featured.featured-dark {
            border-top-color: #212529;
        }

        html .call-to-action.call-to-action-dark {
            background: #212529;
        }

        html .call-to-action.with-full-borders-dark {
            border-color: #212529;
        }

        html .call-to-action.call-to-action-dark {
            background: #212529;
        }

        html .call-to-action.call-to-action-dark h3,
        html .call-to-action.call-to-action-dark p {
            color: #FFF;
        }

        html .call-to-action.featured.featured-light {
            border-top-color: #FFF;
        }

        html .call-to-action.call-to-action-light {
            background: #FFF;
        }

        html .call-to-action.with-full-borders-light {
            border-color: #FFF;
        }

        html .call-to-action.call-to-action-light {
            background: #FFF;
        }

        html .call-to-action.call-to-action-light h3,
        html .call-to-action.call-to-action-light p {
            color: #777;
        }

        section.timeline .timeline-box.left:before,
        section.timeline .timeline-box.right:before {
            background: #9c27b0;
            box-shadow: 0 0 0 3px #FFF, 0 0 0 6px #9c27b0;
        }

        ul.history li .featured-box .box-content {
            border-top-color: #9c27b0;
        }

        .portfolio-list .portfolio-item.portfolio-item-new:after {
            background: linear-gradient(135deg, #9c27b0 0%, #d42257 80%);
        }

        .recent-posts .date .month,
        article.post .post-date .month {
            background-color: #9c27b0;
        }

        .recent-posts .date .day,
        article.post .post-date .day {
            color: #9c27b0;
        }

        .slider .tp-bannertimer {
            background-color: #9c27b0;
        }

        .home-concept strong {
            color: #9c27b0;
        }

        html .home-intro-primary {
            background: #9c27b0;
        }

        html .home-intro-secondary {
            background: #d42257;
        }

        html .home-intro-tertiary {
            background: #2b38b1;
        }

        html .home-intro-quaternary {
            background: #383f48;
        }

        html .home-intro-dark {
            background: #212529;
        }

        html .home-intro-light {
            background: #FFF;
        }

        html .slide-overlay-primary .slotholder:after {
            background-color: #9c27b0 !important;
        }

        html .slider-container .tp-caption-overlay-primary {
            background: #9c27b0;
        }

        html .slider-container .tp-caption-overlay-opacity-primary {
            background: rgba(156, 39, 176, 0.4);
        }

        html .tp-bullets.bullets-color-primary .tp-bullet:hover,
        html .tp-bullets.bullets-color-primary .tp-bullet.selected {
            background: #9c27b0;
        }

        html .slide-overlay-secondary .slotholder:after {
            background-color: #d42257 !important;
        }

        html .slider-container .tp-caption-overlay-secondary {
            background: #d42257;
        }

        html .slider-container .tp-caption-overlay-opacity-secondary {
            background: rgba(212, 34, 87, 0.4);
        }

        html .tp-bullets.bullets-color-secondary .tp-bullet:hover,
        html .tp-bullets.bullets-color-secondary .tp-bullet.selected {
            background: #d42257;
        }

        html .slide-overlay-tertiary .slotholder:after {
            background-color: #2b38b1 !important;
        }

        html .slider-container .tp-caption-overlay-tertiary {
            background: #2b38b1;
        }

        html .slider-container .tp-caption-overlay-opacity-tertiary {
            background: rgba(43, 56, 177, 0.4);
        }

        html .tp-bullets.bullets-color-tertiary .tp-bullet:hover,
        html .tp-bullets.bullets-color-tertiary .tp-bullet.selected {
            background: #2b38b1;
        }

        html .slide-overlay-quaternary .slotholder:after {
            background-color: #383f48 !important;
        }

        html .slider-container .tp-caption-overlay-quaternary {
            background: #383f48;
        }

        html .slider-container .tp-caption-overlay-opacity-quaternary {
            background: rgba(56, 63, 72, 0.4);
        }

        html .tp-bullets.bullets-color-quaternary .tp-bullet:hover,
        html .tp-bullets.bullets-color-quaternary .tp-bullet.selected {
            background: #383f48;
        }

        html .slide-overlay-dark .slotholder:after {
            background-color: #212529 !important;
        }

        html .slider-container .tp-caption-overlay-dark {
            background: #212529;
        }

        html .slider-container .tp-caption-overlay-opacity-dark {
            background: rgba(33, 37, 41, 0.4);
        }

        html .tp-bullets.bullets-color-dark .tp-bullet:hover,
        html .tp-bullets.bullets-color-dark .tp-bullet.selected {
            background: #212529;
        }

        html .slide-overlay-light .slotholder:after {
            background-color: #FFF !important;
        }

        html .slider-container .tp-caption-overlay-light {
            background: #FFF;
        }

        html .slider-container .tp-caption-overlay-opacity-light {
            background: rgba(255, 255, 255, 0.4);
        }

        html .tp-bullets.bullets-color-light .tp-bullet:hover,
        html .tp-bullets.bullets-color-light .tp-bullet.selected {
            background: #FFF;
        }

        html .slide-overlay.slide-overlay-gradient .slotholder:after {
            background-color: #2b38b1 !important;
            background-image: linear-gradient(to right, #2b38b1 0%, #383f48 100%) !important;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2b38b1', endColorstr='#383f48', GradientType=1);
        }

        .cd-product-viewer-handle .handle {
            background: #9c27b0;
        }

        .tparrows.tparrows-carousel.tp-leftarrow,
        .tparrows.tparrows-carousel.tp-rightarrow {
            background-color: #9c27b0;
            border-color: #9c27b0 #9c27b0 #771e86;
            color: #fff;
        }

        .tparrows.tparrows-carousel.tp-leftarrow:hover,
        .tparrows.tparrows-carousel.tp-rightarrow:hover,
        .tparrows.tparrows-carousel.tp-leftarrow.hover,
        .tparrows.tparrows-carousel.tp-rightarrow.hover {
            background-color: #b82ecf;
            border-color: #bc37d3 #bc37d3 #9c27b0;
            color: #fff;
        }

        .tparrows.tparrows-carousel.tp-leftarrow:focus,
        .tparrows.tparrows-carousel.tp-rightarrow:focus,
        .tparrows.tparrows-carousel.tp-leftarrow.focus,
        .tparrows.tparrows-carousel.tp-rightarrow.focus {
            background-color: #802091;
            border-color: #771e86 #771e86 #52145d;
            color: #fff;
            box-shadow: 0 0 0 3px rgba(156, 39, 176, 0.5);
        }

        .tparrows.tparrows-carousel.tp-leftarrow.disabled,
        .tparrows.tparrows-carousel.tp-rightarrow.disabled,
        .tparrows.tparrows-carousel.tp-leftarrow:disabled,
        .tparrows.tparrows-carousel.tp-rightarrow:disabled {
            background-color: #9c27b0;
            border-color: #9c27b0 #9c27b0 #771e86;
        }

        .tparrows.tparrows-carousel.tp-leftarrow:active,
        .tparrows.tparrows-carousel.tp-rightarrow:active,
        .tparrows.tparrows-carousel.tp-leftarrow.active,
        .tparrows.tparrows-carousel.tp-rightarrow.active {
            background-color: #802091 !important;
            background-image: none !important;
            border-color: #771e86 #771e86 #52145d !important;
        }

        .tparrows.arrows-primary:before {
            color: #9c27b0;
        }

        .shop .products .product .onsale {
            background-color: #9c27b0;
            border-bottom-color: #7e208f;
        }

        .shop .cart-totals tr.total .amount {
            color: #9c27b0;
        }

        .shop .products .product .quick-view {
            background: rgba(156, 39, 176, 0.7);
        }

        .shop .products .product:hover .quick-view:hover {
            background: #9c27b0;
        }

        .product .product-thumb-info .addtocart-btn-wrapper .addtocart-btn:hover {
            color: #FFF;
            background: #9c27b0;
        }

        .product .product-thumb-info .countdown-offer-wrapper {
            background: #9c27b0;
        }

        #footer .footer-ribbon {
            background: #9c27b0;
        }

        #footer .footer-ribbon:before {
            border-right-color: #641971;
            border-left-color: #641971;
        }

        #footer .footer-nav.footer-nav-bottom-line nav>ul:not(:hover)>li>a.active {
            color: #9c27b0 !important;
        }

        #footer .footer-nav.footer-nav-bottom-line nav>ul:not(:hover)>li>a.active:before {
            background: #9c27b0 !important;
        }

        #footer .footer-nav.footer-nav-bottom-line nav>ul:hover>li:hover>a {
            color: #9c27b0 !important;
        }

        #footer .footer-nav.footer-nav-bottom-line nav>ul:hover>li:hover>a:before {
            background: #9c27b0 !important;
        }

        .scrollable.colored-slider .scrollable-slider {
            background: #9c27b0;
        }

        .sample-icon-list .sample-icon a:hover {
            background-color: #9c27b0;
        }

        html.boxed .body {
            border-top-color: #9c27b0;
        }
    </style>
    @stack('css')

</head>

<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
		FB.init({
			xfbml            : true,
			version          : 'v4.0'
		});
		};

		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=install_email theme_color="#9c27b0" page_id="693694820697281">
    </div>
    <div class="body">

        @yield('header')
        <div role="main" class="main">
            @yield('content')
        </div>

        {{-- @include('welcome.layouts.guestWelcomeFooter') --}}
    </div>

    <!-- Vendor -->
    <script src="{{asset('prt/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('prt/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('prt/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('prt/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('prt/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('prt/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('prt/vendor/common/common.min.js')}}"></script>
    <script src="{{asset('prt/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('prt/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('prt/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('prt/vendor/jquery.lazyload/jquery.lazyload.js')}}"></script>
    <script src="{{asset('prt/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('prt/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('prt/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('prt/vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{asset('prt/vendor/vivus/vivus.min.js')}}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('prt/js/theme.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{asset('prt/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('prt/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('prt/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')}}"></script>
    <script src="{{asset('prt/js/views/view.home.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('prt/js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('prt/js/theme.init.js')}}"></script>

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
         -->
    @stack('js')

</body>

</html>

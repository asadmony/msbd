<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if ($websiteParameter->favicon)
    <link rel="shortcut icon" href="{{ asset('storage/favicon/'. $websiteParameter->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('storage/favicon/'. $websiteParameter->favicon) }}" type="image/x-icon">
  
    @else
  
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
      <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>
        @if ($websiteParameter->title)
        {!! $websiteParameter->title !!}
        @else
        {{ env('APP_NAME_BIG') }} | Matrimony Service in Bangladesh | Marriage Media Service provider in Bangladesh | 
        Matchmaker Service in Bangladesh
        @endif
    </title>
	
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/login/css/style.css') }}" type="text/css" media="all" /><!-- Style-CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/fa/css/font-awesome.min.css') }}">
    
</head>

<body>
	@yield('body')


    @stack('js')
</body>

</html>
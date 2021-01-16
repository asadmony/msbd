@extends('theme.prt.layouts.prtMaster')

@section('contents')

    @auth
    @include('user.parts.timeline')
    
    @else
    @include('theme.prt.include.home')
    @endauth


@endsection
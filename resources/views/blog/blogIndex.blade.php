@extends('theme.prt.layouts.prtMaster')

@section('title')
Blog Index | Marriage Solution
@endsection

@push('css') 
@endpush

@section('content')

@auth
<?php $u = Auth::user(); ?>
@endauth
@include('blog.parts.blogIndexPart')
@endsection

@push('js') 
@endpush 

 

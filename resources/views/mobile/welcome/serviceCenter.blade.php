@extends('mobile.layout.base')
@push('css')
    <style>
        .selected{
        border: 4px solid green !important;
    }
    </style>
@endpush
@section('body')
@include('welcome.parts.selectServiceCenter')
@endsection
@push('js')

@endpush
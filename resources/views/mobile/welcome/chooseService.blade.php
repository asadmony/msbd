

@extends('mobile.layout.base')
@push('css')
    <style>
        .selected{
        border: 4px solid green !important;
    }
    </style>
@endpush
@section('body')
<div class="container">
    <div class="h4 bold pt-3">
        Choose our service 
    </div>
    @include('welcome.parts.chooseServicePart')
</div>
@endsection
@push('js')

@endpush
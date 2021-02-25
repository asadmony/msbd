@extends('admin.layouts.adminMaster')
<?php $me = Auth::user(); ?>
@push('css')
@endpush

@section('content')

  @include('common.pages.parts.dashboard')

@endsection


@push('js')
@endpush

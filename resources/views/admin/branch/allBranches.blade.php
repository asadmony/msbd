@extends('admin.layouts.adminMaster')
{{-- @section('title', 'MSBD') --}}

@push('css')
@endpush

@section('content')

  @include('admin.branch.parts.allBranches')

@endsection


@push('js')

@endpush

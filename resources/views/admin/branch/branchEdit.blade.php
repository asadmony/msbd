@extends('admin.layouts.adminMaster')
{{-- @section('title', 'MSBD') --}}

@push('css')
@endpush

@section('content')

  @include('admin.branch.parts.branchEdit')

@endsection


@push('js')

<script src="{{asset('js/location.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcjU4Z83IrRvF3DdDYqsBW66_2eUC8krU&libraries=places&callback=initAutocomplete"
    async defer></script>

    

@endpush

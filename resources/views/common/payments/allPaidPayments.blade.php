@extends('admin.layouts.adminMaster')

@push('css')
@endpush

@section('content')

  @include('common.payments.parts.allPaidPayments')

@endsection


@push('js')

@endpush

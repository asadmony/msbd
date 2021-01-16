@extends('admin.layouts.adminMaster')

@push('css')
@endpush

@section('content')

  @include('common.payments.parts.allPendingPayments')

@endsection


@push('js')

@endpush

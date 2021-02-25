@extends('admin.layouts.adminMaster')

@push('css')

<style type="text/css" media="print">
   .no-print { display: none; }
   
  tr.nowrap td {
       white-space:nowrap;
   }
</style>
@endpush

@section('content')

  @include('admin.parts.regInfoTable')

@endsection

@push('js')
@endpush
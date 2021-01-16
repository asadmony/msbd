@extends('mediaperson.layouts.mediaMaster')


@push('css')
@endpush

@section('content')

  @include('mediaperson.parts.dashboard')

@endsection


@push('js')
{{-- <script type="text/javascript">
  alert('ok');
</script> --}}
@endpush

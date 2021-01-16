@extends('mediaperson.layouts.mediaMaster')


@push('css')
@endpush

@section('content')

  @include('mediaperson.users.parts.usersAll')

@endsection


@push('js')
{{-- <script type="text/javascript">
  alert('ok');
</script> --}}
@endpush


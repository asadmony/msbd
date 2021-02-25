@extends('admin.layouts.adminMaster')

@push('css')
@endpush

@section('content')

  @include('common.pages.parts.allPages')

@endsection


@push('js')
{{-- <script src="{{asset('cp/bower_components/ckeditor/ckeditor.js')}}"></script> --}}

{{-- <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('content');
  });
</script> --}}
@endpush

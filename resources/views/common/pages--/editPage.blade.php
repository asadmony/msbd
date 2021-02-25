@extends('admin.layouts.adminMaster')

@push('css')
<link href="{{ asset('assets/summernote/dist/summernote.css') }}" rel="stylesheet">
@endpush

@section('content')

  @include('common.pages.parts.editPage')

@endsection


@push('js')

<script src="{{ asset('assets/summernote/dist/summernote.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
  </script>
{{-- <script src="{{asset('cp/bower_components/ckeditor/ckeditor.js')}}"></script> --}}

{{-- <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('content');
  });
</script> --}}
@endpush
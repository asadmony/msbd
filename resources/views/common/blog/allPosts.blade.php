@extends('admin.layouts.adminMaster')

@push('css')
@endpush

@section('content')

<div class="container">
    <div class="box">
        <div class="box-header">
            All blog Posts
        </div>
    </div>
    
    <div class="box">
        <div class="box-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Views</th>
                            <th>Created By</th>
                            <th>Active</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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

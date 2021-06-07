@extends('admin.layouts.adminMaster')

@section('title')
Admin Dashboard
@endsection

@push('css')
<!-- include summernote css/js -->
{{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}

 {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/summernote.css') }}"> --}}
@endpush

@section('content')

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
               
              <small>Admin Dashboard</small>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">

      

      {{-- <a href="{{ route('admin.depoDistDealerAutoAdd',['type'=>'market']) }}">Market add</a> <br> --}}
 admin area
    </section>


{{-- @include('welcome.includes.modals.modalLg') --}}

@endsection



@push('js')

{{-- <script src="{{ asset('js/summernote.js') }}"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
  $(function () {
    $('.summernote').summernote();
  })

</script> --}}

@endpush

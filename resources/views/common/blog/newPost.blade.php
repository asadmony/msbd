@extends('admin.layouts.adminMaster')



@section('content')

  <div class="container">
      <div class="box">
          <div class="box-header">
              New blog Post
          </div>
      </div>
      
      @include('common.blog.parts.newBlogForm')
  </div>

@endsection



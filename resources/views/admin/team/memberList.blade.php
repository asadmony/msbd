@extends('admin.layouts.adminMaster')
{{-- @section('title', 'MSBD') --}}
<?php $me = Auth::user(); ?>
@push('css')
@endpush

@section('content')

<style>
    .panel {
      background-color: rgba(0,40,68,.2);
      color: #fff;
      font-weight: bolder;
  }
  .panel .panel-heading{
    background-color: #fff;
  }
  </style>
  
  
  
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Team Members
          <small>Home</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Team Members</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content" style="min-height: 700px;">
        @include('alerts.alerts')
        <div class="row">
          <div class="col-sm-12">
  
            <div class="w3-card-4 w3-border w3-border-blue w3-round">
              <div class="box box-widget" style="margin-bottom: 0;">
                <div class="box-header with-border">
                  <h3 class="box-title">
                    Add new member 
                  </h3>
                </div>
                <div class="box-body w3-animate-zoom">
  
                    @if (isset($member))
                    <form action="{{ route('admin.teamMember.save', $member) }}" method="POST" enctype="multipart/form-data">
                    @else
                    <form action="{{ route('admin.teamMember.save') }}" method="POST" enctype="multipart/form-data">
                    @endif
                        @csrf
                        <div class="w3-padding-24">
                            <div class="col-md-4">
                                <label for="branch_id">Select Branch</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" name="branch_id" id="branch_id" required>
                                    @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}" @if(isset($member) && $member->branch_id == $branch->id) selected @endif>{{ $branch->branch_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="  w3-padding-24">
                            <div class="col-md-4">
                                <label for="team_name">Select team</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" name="team_name" id="team_name">
                                    <option value="CEO" @if(isset($member) && $member->team_name == 'CEO') selected @endif>CEO</option>
                                    <option value="Marketing Team" @if(isset($member) && $member->team_name == 'Marketing Team') selected @endif>Marketing Team</option>
                                    <option value="Service Team" @if(isset($member) && $member->team_name == 'Service Team') selected @endif>Service Team</option>
                                    <option value="IT Team" @if(isset($member) && $member->team_name == 'IT Team') selected @endif>IT Team</option>
                                </select>
                            </div>
                        </div>
                        <div class="  w3-padding-24">
                            <div class="col-md-4">
                                <label for="name">Team Member Name</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="name" id="name" value="{{ old('name') ?: $member->name ?? '' }}" required>
                            </div>
                        </div>
                        <div class="w3-padding-24">
                            <div class="col-md-4">
                                <label for="designation">Designation</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="designation" id="designation" value="{{ old('designation') ?: $member->designation ?? '' }}" required>
                            </div>
                        </div>
                        <div class="  w3-padding-24">
                            <div class="col-md-4">
                                <label for="education">Education</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="education" id="education" value="{{ old('education') ?: $member->education ?? '' }}" >
                            </div>
                        </div>
                        <div class="  w3-padding-24">
                            <div class="col-md-4">
                                <label for="mobile">Mobile</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="mobile" id="mobile" value="{{ old('mobile') ?: $member->mobile ?? '' }}" >
                            </div>
                        </div>
                        <div class="  w3-padding-24 ">
                            <div class="col-md-4">
                                <label for="image">Image</label>
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="image" id="image" onchange="previewimg(event)">
                            </div>
                            <div class="col-md-4 p-2">
                                @if (isset($member->image))
                                    <img class="m-1" style="max-height: 160px; max-width: 100%" id="preview" src="{{ asset
                                    ($member->image) }}">
                                @else
                                    <img class="m-1" style="max-height: 160px; max-width: 100%" id="preview" src="">
                                @endif
                            </div>
                        </div>
                        <div class="text-center w3-padding-24">
                            <input type="checkbox" name="active" @if(isset($member->active) && $member->active == 1) checked @endif >
                            <label for="active"> Active</label>
                        </div>
                        <div class="text-center w3-padding-24">
                            <button class="btn btn-primary" type="submit"> <i class="fa fa-save"></i> Submit</button>
                        </div>
                    </form>
                
                </div>

            </div>
        </div>
        <div class="box box-widget" style="margin-top: 20px;">
        <div class="box-header with-border">
          <h3 class="box-title">
            Member List
          </h3>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Branch</th>
                            <th>Team</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Education</th>
                            <th>Mobile Number</th>
                            <th>Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teamMembers as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if ($item->branch)
                                    {{ $item->branch->branch_name }}
                                    @endif
                                </td>
                                <td>{{ $item->team_name }}</td>
                                <td>
                                    <img class="w3-circle" style="max-height: 60px; max-with:100%" src="{{ asset($item->image ?? '') }}" alt="">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->designation }}</td>
                                <td>{{ $item->education }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>
                                    @if ($item->active)
                                        <span class="px-2 w3-green rounded">Yes</span>
                                    @else
                                        <span class="px-2 rounded w3-grey w3-text-white">No</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-primary m-1" href="{{ route('admin.teamMember.edit', $item->id) }}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger m-1" href="#" onclick="event.preventDefault(); if(confirm('Are you sure to delete?')){ document.getElementById('delete-member-{{ $item->id }}').submit()}"><i class="fa fa-trash"></i></a>
                                    <form id="delete-member-{{ $item->id }}" action="{{ route('admin.teamMember.delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
  
          </div>
        </div>
        
  
      </section>
      <!-- /.content -->

@endsection


@push('js')
{{-- <script type="text/javascript">
  alert('ok');
</script> --}}
<script>
    function previewimg(e){
        var src = URL.createObjectURL(e.target.files[0])
        $("#preview").attr('src', src)
    }
</script>
@endpush

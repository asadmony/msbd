@extends('admin.layouts.adminMaster')
{{-- @section('title', 'MSBD') --}}
<?php $me = Auth::user(); ?>
@push('css')
@endpush

@section('content')

  <div class="card mx-2">
      <div class="card-header h3">
          Career Applications
      </div>

      <div class="card-body">
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Address</th>
                          <th>Cover Letter</th>
                          <th>CV</th>
                      </tr>
                  </thead>
                  <tbody>
                     @foreach ($applications as $application)
                         <tr>
                             <td>{{ $loop->iteration }}</td>
                             <td>{{ $application->name }}</td>
                             <td>{{ $application->email }}</td>
                             <td>{{ $application->mobile }}</td>
                             <td>{{ $application->address }}</td>
                             <td>{{ $application->cover_letter }}</td>
                             <td>
                                <a href="{{ asset($application->cv) }}" download> <i class="fa fa-download"></i> Download </a>
                             </td>
                         </tr>
                     @endforeach
                  </tbody>
              </table>
          </div>
          <div>
              {{ $applications->links() }}
          </div>
      </div>
  </div>

@endsection


@push('js')
{{-- <script type="text/javascript">
  alert('ok');
</script> --}}
@endpush

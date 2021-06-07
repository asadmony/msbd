<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              {{ ucfirst($type) }}
              <small>All</small>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{ ucfirst($type) }}</a></li>
              <li class="breadcrumb-item active">All</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content"> 




<!-- Info cardes -->
      <div class="row">
      <div class="col-md-12">

       @include('alerts.alerts')

      	<div class="card card-widget">
            <div class="card-header with-border">
              <h3 class="card-title"><i class="fa fa-th"></i> All {{ ucfirst($type) }}</h3>

              <div class="float-right">
                <a  class="btn btn-primary" href="{{ route('admin.rolesAllType', $type) }}">All {{ ucfirst($type) }} At-a-glance</a>
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal">Add New {{ ucfirst($type) }}</a>
 

              </div>
            </div>

            <div class="card-body">
            	<table class="table table-bordered text-center">
			    <thead>
			      <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Mobile</th>
			        <th>Email</th>

              <th>{{ $type }} Name</th>
 
              @if($type == 'depo')
              <th>Division</th>

              @elseif($type == 'distributor')
              <th>Division</th>
              <th>District</th>

              @elseif($type == 'dealer')

              <th>Division</th>
              <th>District</th>
              <th>Upazila</th>


              @elseif($type == 'agent')

              <th>Division</th>
              <th>District</th>
              <th>Upazila</th>
 



              @endif
              <th>Address</th>
              <th>Contacts</th>
              <th>Active</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>

			    @foreach($rolesAll as $admin)
			      <tr>
              <td>{{ $admin->id }}</td>              
			        <td>{{$admin->user ? $admin->user->name : '' }}</td>
              <td>{{$admin->user ? $admin->user->mobile : '' }}</td>
			        <td>{{$admin->user ? $admin->user->email : '' }}</td>
              <td>{{$admin->name ? $admin->name : '' }}</td>

              @if($type == 'depo')
                <td>{{ $admin->division->name }}</td>

              @elseif($type == 'distributor')
              <td>{{ $admin->division->name }}</td>
              <td>{{ $admin->district->name }}</td>

              @elseif($type == 'dealer')
              <td>{{ $admin->division->name }}</td>
              <td>{{ $admin->district->name }}</td>
              <td>{{ $admin->upazila->name }}</td>

              @elseif($type == 'agent')
              <td>{{ $admin->division->name }}</td>
              <td>{{ $admin->district->name }}</td>
              <td>{{ $admin->upazila->name }}</td>

              @endif

              <td>
                {{ $admin->address }}
              </td>

              <td>
                {{ $admin->contact_numbers }}
              </td>

              <td>
                 @if($admin->active)
                 <span class="badge badge-success">Yes</span>
                 @else
                 <span class="badge badge-danger">No</span>
                 @endif
              </td>
 
			        <td>
                <a href="{{ route('admin.roleEdit',['type' => $type, 'role' => $admin->id]) }}"><i class="fa fa-edit"></i></a>
              </td>

			      </tr>
			    @endforeach
			    </tbody>
			  </table>
            </div>

            <div class="card-footer text-center">
            	{{$rolesAll->appends(['type' => $type])->render()}}
            </div>
        </div>
      	
      </div>        
      </div>
      <!-- /.row -->




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title">{{ __('Add New') }} {{ __(ucfirst($type)) }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

         
      </div>
      <div class="modal-body">
        <div class="card card-widget">
             
            <!-- /.card-header -->
            <!-- form start -->
            <form  class="" method="post" action="{{route('admin.roleAddNewPost',$type)}}">
            {{csrf_field()}}
              <div class="card-body">





   


  <div class="form-group has-feedback{{ $errors->has('user') ? ' has-error' : '' }}">
    <label for="user"> {{ __('User') }}:</label>

    <select id="user"
      name="user"
      class="form-control select2-container step2-select select2"
      data-placeholder="Mobile or Email"
      data-ajax-url="{{route('admin.selectNewRole')}}"
      data-ajax-cache="true"
      data-ajax-dataType="json"
      data-ajax-delay="200"
      style="width: 100%;">
          <option>{{old('user')}}</option>
        </select>
      @if( $errors->has('user') )
        <span class="help-block">{{ $errors->first('user') }}</span>
      @endif
  </div>

@if($type == 'depo')

  <div class="form-group has-feedback{{ $errors->has('division') ? ' has-error' : '' }}">
    <label for="division">{{ __('Division') }}:</label>
     
     <select class="form-control" name="division" id="division">
      <option value="">{{ __('Select Division') }}</option>
       @foreach($divisions as $division)
       <option value="{{ $division->id }}">{{ $division->name }}</option>
       @endforeach
     </select>
  </div>


@elseif($type == 'distributor')

<div class="form-group has-feedback{{ $errors->has('depo') ? ' has-error' : '' }}">
    <label for="depo">{{ __('Depo') }}:</label>
     
     <select class="form-control select2" name="depo" id="depo">
      <option value="">{{ __('Select Depo') }}</option>
       @foreach($depos as $depo)
       <option value="{{ $depo->id }}">{{ $depo->name }} ({{$depo->user ? $depo->user->name : '' }}, {{ $depo->division->name }})  </option>
       @endforeach
     </select>
  </div>

<div class="form-group has-feedback{{ $errors->has('district') ? ' has-error' : '' }}">
    <label for="district">{{ __('District') }}:</label>
     
     <select class="form-control select2" name="district" id="district">
      <option value="">{{ __('Select District') }}</option>
       @foreach($districts as $district)
       <option value="{{ $district->id }}">{{ $district->name }} ({{ $district->division->name }})</option>
       @endforeach
     </select>
  </div>

 

  @elseif($type == 'dealer')

<div class="form-group has-feedback{{ $errors->has('distributor') ? ' has-error' : '' }}">
    <label for="distributor">Distributor:</label>
     
     <select class="form-control select2" name="distributor" id="distributor">
      <option value="">Select Distributor</option>
       @foreach($distributors as $distributor)
       <option value="{{ $distributor->id }}">{{ $distributor->name }} ({{ $distributor->user ? $distributor->user->name : '' }}({{ $distributor->user ? $distributor->user->mobileOrEmail() : '' }}) >> {{ $distributor->division->name }} >> {{ $distributor->district->name }})  </option>
       @endforeach
     </select>
  </div>

<div class="form-group has-feedback{{ $errors->has('upazila') ? ' has-error' : '' }}">
    <label for="upazila">Upazila:</label>
     
     <select style="width: 100%;" class="form-control select2" name="upazila" id="upazila">
      <option value="">Select Upazila</option>
       @foreach($upazilas as $upazila)
       <option value="{{ $upazila->id }}">{{ $upazila->name }} ({{ $upazila->division->name }} >> {{ $upazila->district->name }})</option>
       @endforeach
     </select>
  </div>


  @elseif($type == 'agent')

<div class=" form-group has-feedback{{ $errors->has('dealer') ? ' has-error' : '' }}">
    <label for="dealer">Dealer:</label>     
   <select style="width:100%;" class="form-control select2" name="dealer" id="dealer">
    <option value="">Select Dealer</option>
     @foreach($dealers as $dealer)
     <option value="{{ $dealer->id }}">{{ $dealer->name }} ({{ $dealer->user ? $dealer->user->name : '' }}({{ $dealer->user ? $dealer->user->mobileOrEmail() : '' }}) >> {{ $dealer->division->name }} >> {{ $dealer->district->name }} >> {{ $dealer->upazila->name }})  </option>
     @endforeach
   </select>
</div>


{{-- <div class="form-group has-feedback{{ $errors->has('union ') ? ' has-error' : '' }}">
    <label for="union">Union/Area:</label>
     
      <input type="text" name="union" value="{{ old('union') }}" class="form-control" placeholder="Union/Area Name">

      @if( $errors->has('union') )
        <span class="help-block">{{ $errors->first('union') }}</span>
      @endif

  </div> --}}
 

@endif


<div class="form-group has-feedback{{ $errors->has('title ') ? ' has-error' : '' }}">
    <label for="title">{{ ucfirst($type) }} Name:</label>
     
      <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="{{ ucfirst($type)  }} Name">

      @if( $errors->has('title') )
        <span class="help-block">{{ $errors->first('title') }}</span>
      @endif

  </div>

  <div class="form-group has-feedback{{ $errors->has('address ') ? ' has-error' : '' }}">
    <label for="address"> {{ __('Address') }}</label>
     
      <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="{{ __('Address') }}">

      @if( $errors->has('address') )
        <span class="help-block">{{ $errors->first('address') }}</span>
      @endif
  </div>


 <div class="form-group has-feedback{{ $errors->has('contact_numbers ') ? ' has-error' : '' }}">
    <label for="contact_numbers"> {{ __('Contact Numbers') }}</label>
     
      <input type="text" name="contact_numbers" value="{{ old('contact_numbers') }}" class="form-control" placeholder="{{ __('Contact Numbers') }}">

      @if( $errors->has('contact_numbers') )
        <span class="help-block">{{ $errors->first('contact_numbers') }}</span>
      @endif
  </div>

  <div class="form-group  ">
      <div class="form-check">
          <input class="form-check-input" type="checkbox" name="active" id="active" {{ old('active') ? 'checked' : '' }}>

          <label class="form-check-label" for="active">
              {{ __('Active') }}
          </label>
      </div>
  </div>

  <button class="btn btn-sm btn-primary">Create {{ ucfirst($type) }}</button>
 







                 
 
           
 


              </div>
              <!-- /.card-body -->
               
            </form>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      

      

    </section>

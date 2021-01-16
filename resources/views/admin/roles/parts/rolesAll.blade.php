
    <section class="content-header">
      <h1>
        Roles
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Roles</a></li>
        <li class="active">All</li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content"> 




<!-- Info boxes -->
      <div class="row">
      <div class="col-md-12">

      @include('alerts.alerts')


      <div class="box box-widget">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-th"></i> All Roles</h3>


              
            </div>

            <div class="box-body">
              <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Branch</th>
              <th>Role Name</th>
              <th>Role Items</th> 
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

          @foreach($rolesAll as $role)
            <tr>
              
              <td>{{$role->user->name}}</td>
              <td>{{$role->user->email}}</td>

              <td>
                {{ $role->branchStatus() }}

              </td>

              <td>{{$role->role_value}}</td>
              <td>
                
                @foreach($role->items as $item)
                <span class="label label-default">{{ $item->name }}</span> &nbsp;
                @endforeach

              </td>
 
              <td>


              

              <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-warning edit-cat" data-url="">Delete</button> -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown">
                     Delete</button>
                    <ul class="dropdown-menu" role="menu">
                      <li>

                      <form class="delete-admin" action="{{route('admin.roleDelete',$role)}}" method="POST" >
                        {{ csrf_field() }}

                      <button class="btn btn-xs btn-danger">Confirm</button> 
                    </form>
                        

                      </li>

                    </ul>
                  </div>
                </div>





              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
            </div>

            <div class="box-footer text-center">
              {{$rolesAll->render()}}
            </div>
        </div>

         
      </div>        
      </div>
      <!-- /.row -->


    </section>

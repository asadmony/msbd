
    <section class="content-header">
      <h1>
        Branches
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Branches</a></li>
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
              <h3 class="box-title"><i class="fa fa-th"></i> All Branches</h3>
                            
        </div>
        <div class="box-body">
          <table class="table table-bordered">
          <thead>
            <tr>
              <th>SL</th>
              <th>Branch Name</th>
              <th>Details</th>
              <th style="width: 250px !important;">Map</th> 
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

          @foreach($allBranches as $branch)
            <tr>
              <td>
                {{ $loop->iteration }}
              </td>
              <td>{{$branch->branch_name}}</td>
              <td>
                Location: {{ $branch->location }} <br>
                Latitude: {{ $branch->lat }} <br>
                Longitude: {{ $branch->lng }} <br>
                Address: {{ $branch->address }} <br>
                State: {{ $branch->state }} <br>
                City: {{ $branch->city }} <br>
                Post Code: {{ $branch->post_code }} <br>
                Country: {{ $branch->country }} <br>
                Mobile: {{ $branch->mobile }} <br>
                Email: {{ $branch->email }} <br>
              </td>
              <td style="width: 250px !important;">
                <div class="box box-widget">
                  <div class="box-body">
                    
                    {!! $branch->map !!}
                  </div>
                </div>
              </td>
 
              <td width="120">


              

              <div class="btn-group">
                   <a class="btn btn-warning btn-sm" href="{{ route('admin.branchEdit', $branch) }}">Edit</a>
                    <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown">
                     Delete</button>
                    <ul class="dropdown-menu dropdown-menu-right w3-card" role="menu">
                      <li>

                      <form class="text-center" action="{{ route('admin.branchDelete', $branch) }}" method="POST" >
                        {{ csrf_field() }}

                      <button class="btn w3-hover-shadow btn-xs btn-danger">Confirm</button> 
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
        </div>
      </div>

        
        
      </div>        
      </div>
      <!-- /.row -->     

    </section>

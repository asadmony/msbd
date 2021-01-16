
    <section class="content-header">
      <h1>
        Front Sliders
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Front Sliders</a></li>
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
        <div class="box-body text-center">
          <form class="form-inline" action="{{ route('admin.frontSliderAddNew') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
  <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image">Image (1200 X 500px):</label>
    <input type="file" name="image" class="form-control" id="image" style="height: 40px;">
    @if ($errors->has('image'))
      <p>{{ $errors->first('image') }}</p>
    @endif
  </div>
 
  <button style="height: 40px;" type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
      </div>

        <div class="box box-widget">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-th"></i> All Front Sliders</h3>              
            </div>

            <div class="box-body">
              <table class="table table-bordered ">
          <thead>
            <tr>
              <th width="300">Image</th>
 
              <th>Added By</th>
              <th width="100">Action</th>
            </tr>
          </thead>
          <tbody>

          @foreach($sliders as $slider)
            <tr>            
               
              <td>
                <img width="300" src="{{ asset($slider->image_url) }}" alt="Front Slider">
              </td>

              <td>
                {{ $slider->addedBy->name }}
              </td>
 
 
              <td width="100">

            <div class="btn-group btn-group-xs">
                <a onclick="return confirm('Do you really want to delete?');" class="w3-btn w3-round w3-red w3-small" href="{{ route('admin.frontSliderDelete', $slider) }}">Delete</a>
 
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

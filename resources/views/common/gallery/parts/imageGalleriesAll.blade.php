
    <section class="content-header">
      <h1>
        Gallery Images
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Gallery Images</a></li>
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
          <form class="form-inline" action="{{ route('common1.galleryImageAddNew') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
  <div class="form-group {{ $errors->has('images') ? 'has-error' : '' }}">
    <label for="images">Image (One or Multiple at a time):</label>
    <input type="file" multiple name="images[]" class="form-control" id="images" style="height: 40px;">
    @if ($errors->has('images'))
      <p>{{ $errors->first('images') }}</p>
    @endif
  </div>

  <div class="form-group {{ $errors->has('image_title') ? 'has-error' : '' }}">
    <label for="image_title">Title of images:</label>
    <input type="text" name="image_title" class="form-control" id="image_title" placeholder="Image Title" style="height: 40px;">
    @if ($errors->has('image_title'))
      <p>{{ $errors->first('image_title') }}</p>
    @endif
  </div>
 
  <button style="height: 40px;" type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
      </div>

        <div class="box box-widget">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-th"></i> All Gallery Images</h3>              
            </div>

            <div class="box-body">
              <table class="table table-bordered ">
          <thead>
            <tr>
              <th width="100">Image</th>
 
              <th>Title</th>
              <th width="100">Action</th>
            </tr>
          </thead>
          <tbody>

          @foreach($galleries as $gallery)
            <tr>            
               
              <td>
                <img width="100" src="{{ route('imagecache', [ 'template'=>'sbism','filename' => $gallery->image_name ]) }}" alt="">


              </td>

              <td>
                {{ $gallery->image_title }} <br>
                {{ $gallery->created_at->toDateString() }}
              </td>
 
 
              <td width="100">

            <div class="btn-group btn-group-xs">
                <a onclick="return confirm('Do you really want to delete?');" class="w3-btn w3-round w3-red w3-small" href="{{ route('common1.galleryImageDelete', $gallery) }}">Delete</a>
 
              </div>
 
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
            </div>

            <div class="box-footer text-center">
               {{ $galleries->render() }}
            </div>
        </div>
        
      </div>        
      </div>
      <!-- /.row -->


    </section>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu
        <small>Add New</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Add New</a></li>
        <li class="active">Menu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 700px;">




<!-- Info boxes -->
      <div class="row">
        <div class="col-sm-12">

            @include('alerts.alerts')
            

            <div class="box box-widget">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-edit"></i> Add New Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{route('common1.newMenuPost')}}">
            {{csrf_field()}}
              <div class="box-body">


                <div class="form-group{{ $errors->has('menu_title') ? ' has-error' : '' }}">
                  <label for="menu_title" class="col-sm-2 control-label">Menu Title</label>

                  <div class="col-sm-10">
                    <input type="text" name="menu_title" class="form-control" value="{{ old('menu_title') }}" id="menu_title" placeholder="Menu Title" required autofocus>

                    @if ($errors->has('menu_title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menu_title') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>


                <div class="form-group{{ $errors->has('menu_title_bn') ? ' has-error' : '' }}">
                  <label for="menu_title_bn" class="col-sm-2 control-label">Menu Title (বাংলা)</label>

                  <div class="col-sm-10">
                    <input type="text" name="menu_title_bn" class="form-control" value="{{ old('menu_title_bn') }}" id="menu_title_bn" placeholder="Menu Title in Bangla" required autofocus>

                    @if ($errors->has('menu_title_bn'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menu_title_bn') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>

 

                <div class="form-group{{ $errors->has('menu_type') ? ' has-error' : '' }}">
                  <label for="menu_type" class="col-sm-2 control-label">Menu Type</label>

                  <div class="col-sm-10">
                    <select name="menu_type" id="menu_type" class="form-control">

                      <option>Full </option>
                      <option>Tab</option>
                    </select>

                    @if ($errors->has('menu_type'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menu_type') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>

 
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">

                    <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
              </div>
              <!-- /.box-footer -->
            </form>
          </div>


        </div>
      </div>
      <!-- /.row -->

   

       
      

    </section>
    <!-- /.content -->
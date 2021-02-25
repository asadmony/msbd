<div class="box box-widget">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-edit"></i> Add New Page</h3>
            </div>
            <!-- /.box-header -->

<!-- form start -->
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{route('common1.newPagePost')}}">

            <div class="box-body" style="background-color: #ddd;">


            {{csrf_field()}}

              <div class="row">
                <div class="col-sm-7">

                  <div class="box box-widget">
                    <div class="box-body">




                <div class="form-group{{ $errors->has('page_route') ? ' has-error' : '' }}">
                  <label for="page_route" class="col-sm-2 control-label">Page Route</label>

                  <div class="col-sm-10">
                    <input type="text" name="page_route" class="form-control" value="{{ old('page_route') }}" id="page_route" placeholder="Page Route Name" required autofocus>

                    @if ($errors->has('page_route'))
                        <span class="help-block">
                            <strong>{{ $errors->first('page_route') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>

                <div class="form-group{{ $errors->has('pageTitle') ? ' has-error' : '' }}">
                  <label for="pageTitle" class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-10">
                    <input type="text" name="pageTitle" class="form-control" value="{{ old('pageTitle') }}" id="pageTitle" placeholder="New Page Title" required autofocus>

                    @if ($errors->has('pageTitle'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pageTitle') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>

                <div class="form-group{{ $errors->has('page_type') ? ' has-error' : '' }}">
                  <label for="page_type" class="col-sm-2 control-label">Page Type</label>

                  <div class="col-sm-10">
                    <select name="page_type" id="page_type" class="form-control">

                      <option>Full Page</option>
                      <option>Part Page</option>
                    </select>

                    @if ($errors->has('page_type'))
                        <span class="help-block">
                            <strong>{{ $errors->first('page_type') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="titleHide"> Title Hide
                            </label>
                        </div>
                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked name="active"> Active 
                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group{{ $errors->has('details') ? ' has-error' : '' }}">
                  <label for="description" class="col-sm-2 control-label">Details</label>

                  <div class="col-sm-10">
                    <textarea class="details" id="content" name="details" placeholder="Write your content here" ></textarea>


                  </div>
                </div>



                      
                    </div>
                  </div>
                  
                </div>
                <div class="col-sm-5">

                                   <div class="box box-widget">
                  <div class="box-header with-border">
                    <h3 class="box-title">Update Menu</h3>
                  </div>
                  <div class="box-body w3-padding-large" style="padding-top: 0 !important;">
                    <div class="form-group">
                    <label for="extra_file" class="control-label"></label>

                      @foreach($menus->chunk(2) as $menu2)     
                       <div class="row"> 

                          @foreach($menu2 as $menu)
                          <div class="col-sm-6">

                            <div class="checkbox">
                         <label><input type="checkbox" name="menus[]" value="{{$menu->id}}">{{$menu->menu_title}}</label>
                       </div>
                            
                          </div>
                        
                       @endforeach    
                           
                   
                       </div>
                       @endforeach                       

                  </div>
                  </div>
                </div>


                <div class="box box-widget">
  <div class="box-header with-border">
    <h3 class="box-title">Media Gallery</h3>

    <div class="box-tools pull-right">
                {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
                <a href="{{route('common1.mediaAll')}}" class="w3-btn btn-sm w3-round w3-white w3-border w3-border-blue"> <i class="fa fa-image"></i>Upload Image</a>

              </div>
  </div>
  <div class="box-body slim-media">

  <div class="box box-widget">
    <div class="box-body" style="background-color: #ccc;">

      @include('common.media.includes.others.mediaAllForPost')
    
    </div>
  </div>

</div>
</div>
                  
                </div>
              </div>
              



                

 
                

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                    <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary pull-right">Save Page</button>
              </div>
              
            </form>

          </div>
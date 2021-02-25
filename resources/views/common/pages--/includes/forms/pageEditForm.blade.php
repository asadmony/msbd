<div class="box box-widget">
     	<div class="box-header with-border">
     		<h3 class="box-title">
     			Page Update  
     		</h3>
     	</div>
     	<form class="form-horizontal" method="post" action="{{route('common1.editPagePost',$page)}}" enctype="multipart/form-data">
              <div class="box-body" style="background-color: #ccc;">
              <div class="row">
              	<div class="col-md-7">

                <div class="box box-widget">
                <div class="box-body">

              	@include('alerts.alerts')

              	{{csrf_field()}}

 
                 <div class="form-group{{ $errors->has('route_name') ? ' has-error' : '' }}">
                  <label for="route_name" class="col-sm-2 control-label">Page Route</label>

                  <div class="col-sm-10">
                    <input type="text" name="route_name" class="form-control" value="{{ old('route_name') ?: $page->route_name }}" id="route_name" placeholder="Page Route Name" required autofocus>

                    @if ($errors->has('route_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('route_name') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>

                <div class="form-group{{ $errors->has('page_title') ? ' has-error' : '' }}">
                  <label for="page_title" class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-10">
                    <input type="text" name="page_title" class="form-control" value="{{ old('page_title') ?: $page->page_title }}" id="page_title" placeholder="New Page Title" required autofocus>

                    @if ($errors->has('page_title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('page_title') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>

                <div class="form-group{{ $errors->has('page_type') ? ' has-error' : '' }}">
                  <label for="page_type" class="col-sm-2 control-label">Page Type</label>

                  <div class="col-sm-10">
                    <select name="page_type" id="page_type" class="form-control">

                      @if ($page->page_type)
                        
                        <option selected>{{ $page->page_type }}</option>

                      @endif

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
                                <input type="checkbox" name="titleHide" {{$page->title_hide ? 'checked' : ''}}> Title Hide
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" {{$page->active ? 'checked' : ''}} name="active"> Active
                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                  <label for="content" class="col-sm-2 control-label">Details</label>

                  <div class="col-sm-10">
                    <textarea class="content" id="content" name="content" placeholder="Write your content here">{{ old('content') ?: $page->content }}</textarea>


                  </div>
                </div>

                                

 
                </div>
                </div>




                  






              		
              	</div>
              	<div class="col-md-5">

                  
{{-- 

                


                <div class="box box-widget">
  <div class="box-header with-border">
    <h3 class="box-title">Media Gallery</h3>

    <div class="box-tools pull-right">
 
                <a href="{{route('admin.mediaAll')}}" class="w3-btn btn-sm w3-round w3-white w3-border w3-border-blue"> <i class="fa fa-image"></i>Upload Image</a>

 

              </div>
  </div>
  <div class="box-body slim-media">

  <div class="box box-widget">
    <div class="box-body" style="background-color: #ccc;">

      @include('admin.posts.includes.others.mediaAllForPost')
    
    </div>
  </div>

</div>
</div> --}}


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
                         <label><input type="checkbox" name="menus[]" value="{{$menu->id}}" {{$menu->hasPage($page) ? 'checked' : ''}}>{{$menu->menu_title}}</label>
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

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Update</button>
              </div>
            </form>
     </div>
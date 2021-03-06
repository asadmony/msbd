    <section class="content-header">
      <h1>
        New Category
        <small>Create</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-plus"></i> New Category</a></li>
        <li class="active">create</li>
      </ol>
    </section>

     <section class="content">

     <div class="box box-widget">
     	<div class="box-header with-border">
     		<h3 class="box-title">
     			New Category 
     		</h3>
     	</div>
     	
              <div class="box-body">
              <div class="row">
              	<div class="col-md-7">
                <form class="form-horizontal" method="post" action="{{route('commonblog.categoryAddNewPost')}}">

								@include('alerts')

              	{{csrf_field()}}

              	



                
                <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                  <label for="category" class="col-sm-3 control-label">Category</label>
                  <div class="col-sm-9">
                    <input type="text" name="category" class="form-control" value="{{old('category')}}" id="category" placeholder="Category" autocomplete="off">
                    @if ($errors->has('category'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('category') }}</strong>
	                    </span>
	                @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('category_bn') ? ' has-error' : '' }}">
                  <label for="category_bn" class="col-sm-3 control-label">Category (Bangla)</label>
                  <div class="col-sm-9">
                    <input type="text" name="category_bn" class="form-control" value="{{old('category_bn')}}" id="category_bn" placeholder="ক্য়াটেগরি" autocomplete="off">
                    @if ($errors->has('category_bn'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('category_bn') }}</strong>
	                    </span>
	                @endif
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="reset" class="btn btn-default">Cancel</button>

                	<button type="submit" class="btn btn-primary pull-right">Create</button>

                  </div>
                </div> 
                </form> 		
              	</div>
              	<div class="col-md-5">

                </div>
              </div>
              </div>
            
     </div>

     </section>


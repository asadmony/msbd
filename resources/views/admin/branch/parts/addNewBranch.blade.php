
    <section class="content-header">
      <h1>
        Add New
        <small>Branch</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Add New</a></li>
        <li class="active"> Branch</li>
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
              <h3 class="box-title"><i class="fa fa-plus-square"></i> Add New Branch</h3>
                            
        </div>
        <div class="box-body">
          @include('admin.branch.includes.forms.addNewBranchForm')
        </div>
        <div class="box-footer text-center">
        </div>
      </div>

        
        
      </div>        
      </div>
      <!-- /.row -->     

    </section>

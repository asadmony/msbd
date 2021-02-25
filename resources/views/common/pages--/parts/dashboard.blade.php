    <style>
  .panel {
    background-color: rgba(0,40,68,.2);
    color: #fff;
    font-weight: bolder;
}
.panel .panel-heading{
  background-color: #fff;
}
</style>



    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Home</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 700px;">

      <div class="row">
        <div class="col-sm-12">

          <div class="w3-card-4 w3-border w3-border-blue w3-round">
            <div class="box box-widget" style="margin-bottom: 0;">
              <div class="box-header with-border">
                <h3 class="box-title">
                  Welcome back, {{ $me->name }} <img src="{{ asset('img/online.svg') }}" alt="Online" style="width: 20px;">, You are {{ $me->commonRole()->role_value }} of <span class="label label-default">{{ $me->commonRole()->branchStatus() }}</span>
                </h3>
              </div>
              <div class="box-body w3-animate-zoom w3-blue" style="min-height: 400px;">

                 





                 
                   
                   

                   

                   


                   

                   




                 





                
              </div>
              
            </div>
          </div>

        </div>
      </div>
      

    </section>
    <!-- /.content -->
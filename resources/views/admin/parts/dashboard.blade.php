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
                  Welcome back, {{ $me->name }} <img src="{{ asset('img/online.svg') }}" alt="Online" style="width: 20px;">
                </h3>
              </div>
              <div class="box-body w3-animate-zoom w3-blue" style="min-height: 400px;">

                <div class="row">
                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-bottom" href="{{route('common2.usersAll')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        All Users
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $all_u }}
                      </div>
                    </div>
                </a>
                  </div>
                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-bottom" href="{{route('common2.usersGroup','online_users')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Online Users <img src="{{ asset('img/online.svg') }}" alt="Online" style="width: 20px;">
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $online_u }}
                      </div>
                    </div>
                </a>
                  </div>
                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-bottom" href="{{route('common2.usersGroup','male_users')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Male Users
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $m_u }}
                      </div>
                    </div>
                </a>
                  </div>
                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-bottom" href="{{route('common2.usersGroup','female_users')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Female Users
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $f_u }}
                      </div>
                    </div>
                </a>
                  </div>
                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-bottom" href="{{route('common2.usersGroup','subscribers')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Subscribers
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $sub_u }}
                      </div>
                    </div>
                </a>
                  </div>
                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-bottom" href="{{route('common2.usersGroup','free_package')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Free Users
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $me->free_pack_count() }}
                      </div>
                    </div>
                </a>
                  </div>
                </div>





                <div class="row">
                  {{-- <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-opacity" href="{{route('common2.usersGroup','diamond_plus')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Diamond Plus
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $d_p_u }}
                      </div>
                    </div>
                </a>
                  </div> --}}
                  {{-- <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-opacity" href="{{route('common2.usersGroup','diamond')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Diamond Users
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $d_u }}
                      </div>
                    </div>
                </a>
                  </div> --}}
                  {{-- <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-opacity" href="{{route('common2.usersGroup','golden_plus')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Golden Plus
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $g_p_u }}
                      </div>
                    </div>
                </a>
                  </div> --}}
                  {{-- <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-opacity" href="{{route('common2.usersGroup','golden')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Golden Users
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $g_u }}
                      </div>
                    </div>
                </a>
                  </div> --}}
                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-opacity" href="{{route('common2.usersGroup','order_by_age')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Order by Age
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $o_b_a_u }}
                      </div>
                    </div>
                </a>
                  </div>
                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-opacity" href="{{route('common2.usersGroup','validity_10')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading w3-deep-orange">
                        Validity < 10 d
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $me->validity_10_count() }}
                      </div>
                    </div>
                </a>
                  </div>

                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-top" href="{{route('common2.usersGroup','profile_picture_pending')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                        Profile Pic Pen
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $me->ppPendingCount() }}
                      </div>
                    </div>
                </a>
                  </div>

                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block" href="{{route('common2.usersGroup','inactive_users')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading w3-red">
                        Deactivated
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $deac_u }}
                      </div>
                    </div>
                </a>
                  </div>


                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-top" href="{{route('common2.allPendingPayments')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                       Pending Payment
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $me->pendingPaymentCount() }}
                      </div>
                    </div>
                </a>
                  </div>

                  <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-top" href="{{route('common3.proposalsGroup', 'all_proposals')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading ">
                       <img src="{{ asset('img/heart.svg') }}" style="width: 18px;" alt="Favourite Taslima Marriage Media"> Proposals
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $me->proposals_unchecked_count() }}
                      </div>
                    </div>
                </a>
                  </div>

                </div>




                <div class="row">
                  
                  {{-- <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-top" href="{{route('common2.usersGroup','final_check_pending')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading w3-yellow">
                        Not Checked
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $me->final_check_pending_count() }}
                      </div>
                    </div>
                </a>
                  </div> --}}
                  
                  
                  
                  {{-- <div class="col-sm-2">
                    <a class="btn w3-blue btn-block w3-animate-top" href="{{route('admin.reportsAll')}}" target="_blank">
                    <div class="panel  panel-default text-center">
                      <div class="panel-heading w3-yellow">
                       <i class="fa fa-warning"></i> Complain
                      </div>
                      <div class="panel-body w3-xlarge w3-hover-red">
                        {{ $complain }}
                      </div>
                    </div>
                </a>
                  </div> --}}
                  
                </div>





                
              </div>
              
            </div>
          </div>

        </div>
      </div>
      

    </section>
    <!-- /.content -->
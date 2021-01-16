
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        {{-- <li class="header">WEBSITE AREA</li> --}}


        @if(Auth::user()->isMediaPerson())

        <li class=" treeview{{ session('lsbm') == 'dashboard' ? ' active ' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ session('lsbsm') == 'dashboard' ? ' active ' : '' }}"><a href="{{route('mediaperson.dashboard')}}"><i class="fa fa-circle-o"></i> Dashboard </a></li>

            <li class="{{ session('lsbsm') == 'usersAll' ? 'active' : '' }}"><a class="changed-menu" href="{{route('mediaperson.usersAll')}}"><i class="fa fa-circle-o"></i> All Users</a></li>

            {{-- <li class="{{ session('lsbsm') == 'paymentsAll' ? 'active' : '' }}"><a class="changed-menu" href=""><i class="fa fa-circle-o"></i> All Payments</a></li> --}}

            

          </ul>
        </li>

        @endif


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
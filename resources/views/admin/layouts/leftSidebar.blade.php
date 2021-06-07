
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        {{-- <li class="header">WEBSITE AREA</li> --}}


        @if(Auth::user()->isAdmin())

        <li class=" treeview{{ session('lsbm') == 'dashboard' ? ' active ' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ session('lsbsm') == 'dashboard' ? ' active ' : '' }}"><a href="{{route('admin.dashboard')}}"><i class="fa fa-circle-o"></i> Dashboard </a></li>

            <li class="{{ session('lsbsm') == 'websiteParameter' ? ' active ' : '' }}"><a href="{{route('admin.websiteParameter')}}"><i class="fa fa-circle-o"></i> Website Parameters </a></li>

            <li class="{{ session('lsbsm') == 'allUserSettingList' ? ' active ' : '' }}"><a href="{{route('admin.userSettingList')}}"><i class="fa fa-circle-o"></i> All User Setting Field </a></li>

            <li class="{{ session('lsbsm') == 'userSettingFieldValue' ? ' active ' : '' }}"><a href="{{route('admin.userSettingFieldValue')}}"><i class="fa fa-circle-o"></i> Setting Field Value </a></li>

          </ul>
        </li>


        <li class="treeview {{ session('lsbm') == 'frontSlider' ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-th" aria-hidden="true"></i>
            <span>Front Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 
            <li class="{{ session('lsbsm') == 'frontSlidersAll' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.frontSlidersAll')}}"><i class="fa fa-circle-o"></i> All Front Sliders</a></li>
          </ul>
        </li>


        <li class="treeview {{ session('lsbm') == 'roles' ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <span>Role</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 
            <li class="{{ session('lsbsm') == 'adminsAll' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.adminsAll')}}"><i class="fa fa-circle-o"></i> All Admins</a></li>

            <li class="{{ session('lsbsm') == 'mediaPersonsAll' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.mediaPersonsAll')}}"><i class="fa fa-circle-o"></i> All Media Persons</a></li>



            <li class="{{ session('lsbsm') == 'roleAddNew' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.roleAddNew')}}"><i class="fa fa-circle-o"></i> Add New Role</a></li>

            <li class="{{ session('lsbsm') == 'rolesAll' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.rolesAll')}}"><i class="fa fa-circle-o"></i> All Roles</a></li>

          </ul>
        </li>

        <li class="treeview {{ session('lsbm') == 'branch' ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-th" aria-hidden="true"></i>
            <span>Branches</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 
            <li class="{{ session('lsbsm') == 'allBranches' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.allBranches')}}"><i class="fa fa-th"></i> All Branches</a></li>

            <li class="{{ session('lsbsm') == 'addNewBranch' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.addNewBranch')}}"><i class="fa fa-plus-square"></i> Add New Branch</a></li>

          </ul>
        </li>


        <li class="treeview {{ session('lsbm') == 'package' ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-id-card" aria-hidden="true"></i>
            <span>Membership Packages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="{{ session('lsbsm') == 'membershipPackageAddNew' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.membershipPackageAddNew')}}"><i class="fa fa-circle-o"></i> New Package</a></li>
 
            <li class="{{ session('lsbsm') == 'allMembershipPackages' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.allMembershipPackages')}}"><i class="fa fa-circle-o"></i> All Packages</a></li>

          </ul>
        </li>      
        <li class=" -treeview{{ session('lsbm') == 'teamMembers' ? ' active ' : '' }}">
          <a href="{{ route('admin.teamMemberList') }}">
              <i class="fa fa-users"></i> <span>Team Members</span>
              <span class="pull-right-container">
                  {{-- <i class="fa fa-angle-left pull-right"></i> --}}
              </span>
          </a>
        </li>

        @else


        <li class=" treeview{{ session('lsbm') == 'dashboard' ? ' active ' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ session('lsbsm') == 'dashboard' ? ' active ' : '' }}"><a href="{{route('common1.dashboard')}}"><i class="fa fa-circle-o"></i> Dashboard </a></li>

          </ul>
        </li>

  

        @endif

        @include('common.layouts.leftSidebar')

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
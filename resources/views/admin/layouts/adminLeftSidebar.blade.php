  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-2">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link bg-primary">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('cp/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
 --}}
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-compact" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{ session('lsbm') == 'dashboard' ? ' menu-open ' : '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               
              <li class="nav-item ">
                <a href="" class="nav-link {{ session('lsbsm') == 'dashboard' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
               
            </ul>
          </li>

          
          <li class="nav-item has-treeview {{ session('lsbm') == 'roles' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Role
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               
              <li class="nav-item ">
                <a href="{{ route('admin.adminsAll') }}" class="nav-link  {{ session('lsbsm') == 'adminsAll' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Admins</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="{{ route('admin.rolesAll', 'depo') }}" class="nav-link  {{ session('lsbsm') == 'depo' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Depos</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="{{ route('admin.rolesAll', 'distributor') }}" class="nav-link  {{ session('lsbsm') == 'distributor' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Distributors</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="{{ route('admin.rolesAll', 'dealer') }}" class="nav-link  {{ session('lsbsm') == 'dealer' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Dealers</p>
                </a>
              </li>



              <li class="nav-item ">
                <a href="{{ route('admin.rolesAll', 'agent') }}" class="nav-link  {{ session('lsbsm') == 'agent' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Agents</p>
                </a>
              </li>
 
               
            </ul>
          </li>


          <li class="nav-item has-treeview {{ session('lsbm') == 'projects' ? 'menu-open' : '' }}">
            <a href="{{ route('admin.projects') }}" class="nav-link ">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Projects
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">

              <li class="nav-item ">
                <a href="" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Orders</p>
                </a>
              </li>

            </ul> --}}
          </li>


          <li class="nav-item has-treeview {{ session('lsbm') == 'ecommerce' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                E-Commerce
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               
              <li class="nav-item ">
                <a href="" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Categories</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Sales Lists</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Products</p>
                </a>
              </li>

              <li class="nav-item ">
                <a href="" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Orders</p>
                </a>
              </li>


            </ul>
          </li>





           
           
           
  
  
          {{-- <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li> --}}
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


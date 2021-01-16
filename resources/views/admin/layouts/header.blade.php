  <header class="main-header">

    <a class="logo" href="{{ url('/') }}">
      <span class="logo-mini">{{ env('APP_NAME') }}</span>
      <span class="logo-lg">{{ env('APP_NAME') }}</span>      
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">

            @if (Auth::user()->isAdmin())
            <li title="Profile Picture Pending">
              <a href="{{route('common2.usersGroup','profile_picture_pending')}}">
              <i class="fa fa-image"></i>
              <span class="label label-danger">{{ Auth::user()->ppPendingCount() }}</span>
              <span class="sr-only">(current)</span>
            </a>
          </li>
            @endif
            
            {{-- <li title="Profile Picture Pending">
              <a href="{{route('admin.usersGroup','profile_picture_pending')}}">
              <i class="fa fa-image"></i>
              <span class="label label-danger">{{ Auth::user()->ppPendingCount() }}</span>
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li title="Final Check Pending">
              <a href="{{route('admin.usersGroup','final_check_pending')}}">
              Not Checked
              <span class="label label-danger">{{ Auth::user()->final_check_pending_count() }}</span>
              <span class="sr-only">(current)</span>
            </a>
          </li>

            <li title="Validity Less Than 10 Days">
              <a href="{{route('admin.usersGroup','validity_10')}}">
              Less < 10 days
              <span class="label label-danger">{{ Auth::user()->validity_10_count() }}</span>
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li title="Free Package">
              <a href="{{route('admin.usersGroup','free_package')}}">
              Free Package
              <span class="label label-danger">{{ Auth::user()->free_pack_count() }}</span>
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li title="Pending Payment">
              <a href="{{route('admin.allPendingPayments')}}">
              <i class="fa fa-credit-card"></i>
              <span class="label label-danger">{{ Auth::user()->pendingPaymentCount() }}</span>
              <span class="sr-only">(current)</span>
            </a>
          </li>


          <li title="Proposals All">
              <a href="{{route('admin.proposalsGroup', 'all_proposals')}}">
              Proposals
              <span class="label label-danger">{{ Auth::user()->proposals_unchecked_count() }}</span>
              <span class="sr-only">(current)</span>
            </a>
          </li>
 --}}
          </ul>
          {{-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form> --}}
        </div>
        <!-- /.navbar-collapse -->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          @if(Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">

                @include('admin.layouts.roleArea')

                

                <li class="divider"></li>
                <li>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>

          @endif
          


 
        </ul>
      </div>
    </nav>
  </header>
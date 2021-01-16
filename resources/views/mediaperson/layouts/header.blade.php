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


          </ul>

        </div>
        <!-- /.navbar-collapse -->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          @if(Auth::guest())

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
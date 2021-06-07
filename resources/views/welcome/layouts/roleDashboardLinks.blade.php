@auth

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
             
             <i class="fas fa-user-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            {{-- <span class="dropdown-header">15 Notifications</span> --}}
            {{-- <div class="dropdown-divider"></div> --}}
            @if(Auth::user()->isAdmin())
            <a href="{{ route('admin.dashboard') }}" class="dropdown-item">
              <i class="fas fa-th mr-2"></i> {{ __('Admin Dashboard') }}
               

            </a>

            @endif

            @if(Auth::user()->hasDealerRole())

            @foreach(Auth::user()->dealers as $dealer)
              <a title="{{ $dealer->name }}" href="{{ route('dealer.dashboard', $dealer) }}" class="dropdown-item">
                <i class="fas fa-user-circle mr-2"></i> 
                  
                Dealer:  {{ custom_title($dealer->name, 10,'..') }}

                {{-- <span class="float-right text-muted text-sm"></span> --}}
                
              </a>
              @endforeach
            @endif

            @if(Auth::user()->hasAgentRole())

            @foreach(Auth::user()->agents as $agent)
              <a title="{{ $agent->title }}" href="{{ route('agent.dashboard', $agent) }}" class="dropdown-item">
                <i class="fas fa-user-circle mr-2"></i> 
                  
                 Agent: {{ custom_title($agent->name,10,'..') }}

                {{-- <span class="float-right text-muted text-sm"></span> --}}
                
              </a>
              @endforeach
            @endif

            
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i> {{ __('logout') }}
              {{-- <span class="float-right text-muted text-sm"></span> --}}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
            
        </li>

        @else



        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
             
             <i class="fas fa-user-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-user-circle mr-2"></i> {{ __('login') }}</a>

            <a class="dropdown-item" href="{{ route('register') }}"><i class="fas fa-user-plus mr-2"></i> {{ __('register') }}</a>

          </div>
        </li>


        @endauth
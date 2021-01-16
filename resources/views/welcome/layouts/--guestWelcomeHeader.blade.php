 
<header id="header" class="w3-card" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 0}">
	<div class="header-body border-top-0">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo my-0">
							<a href="{{url('/')}}">
								<img class="rounded"  style="margin-top: 1px;" alt="Porto"  width="170"  src="{{asset('img/logo.png')}}">
							</a>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row">
						<div class="header-nav header-nav-links order-2 order-lg-1">
							<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
								<nav class="collapse">
									<ul class="nav nav-pills" id="mainNav">

										<li class="nav-item">
                        <a class="nav-link" href="tel:{{$websiteParameter->contact_mobile}}" >
                            <span class="w3-small">
                               {{ $websiteParameter->contact_mobile }}</span>
                        </a>
                    </li>

                    <li class="">
					<a class=" " href="{{url('/')}}">
						Home
					</a> </li>

					@if(isset($welcomeHeaderMenu))
                    @foreach($welcomeHeaderMenu->pages as $whmPage)

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('page', $whmPage->route_name) }}" >
                             {{ $whmPage->page_title }}
                        </a>
                    </li>

                    @endforeach
                    @endif


                     <li class="dropdown">
						<a class="dropdown-item dropdown-toggle" href="{{url('login')}}">
							<i class="fa fa-user-circle"></i>
						</a>
						<ul class="dropdown-menu w3-border-purple">
							<li>
								<a class="dropdown-item" href="{{url('login')}}">
									Login
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="{{url('signup')}}">
									Register
								</a>
							</li>
						</ul>
					</li>


										{{-- <li class="dropdown">
											<a class="dropdown-item dropdown-toggle" href="{{url('/')}}">
												Home
											</a>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="index.html">
														Landing Page
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="index.html#demos">
														Demos
													</a>
												</li>
												 
												 
											</ul>
										</li> --}}
										 
									</ul>
								</nav>
							</div>
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
								<i class="fas fa-bars"></i>
							</button>
						</div>
						{{-- <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
							<div class="header-nav-feature header-nav-features-search d-inline-flex">
								<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
								<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
									<form role="search" action="page-search-results.html" method="get">
										<div class="simple-search input-group">
											<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
											<span class="input-group-append">
												<button class="btn" type="submit">
													<i class="fa fa-search header-nav-top-icon"></i>
												</button>
											</span>
										</div>
									</form>
								</div>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

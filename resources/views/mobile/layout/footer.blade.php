<nav class="nav-bottom">
	<a href="index.html" class="nav-link" data-trigger="#sidebar_left">
		<i class="icon fas fa-chevron-circle-right"></i><span class="text">My Zone</span>
	</a>

	<a href="{{ route('welcome.welcome') }}" class="nav-link">
		<i class="icon fas fa-home {{ request()->route()->getName() == 'welcome.welcome' ? 'w3-text-purple' : ''}}"></i><span class="text">{{ __('Home') }}</span>
	</a>

	<a href="{{ route('user.timeline') }}" class="nav-link">
		<i class="icon fas fa-stream {{ request()->route()->getName() == 'user.timeline' ? 'w3-text-purple' : ''}}"></i><span class="text">{{ __('Timeline') }}</span>
	</a>

	<a href="{{ route('user.advanceSearch') }}" class="nav-link">
		<i class="icon fa fa-search {{ request()->route()->getName() == 'user.advanceSearch' ? 'w3-text-purple' : ''}}"></i><span class="text">{{ __('Search') }}</span>
	</a>

    <button class="btn btn-sm nav-link right" type="button" data-target="#modal_aside_left" data-toggle="modal">
        <i class="icon fas fa-chevron-circle-left"></i><span class="text">{{ __('About') }}</span>
    </button>
</nav> <!-- nav-bottom -->
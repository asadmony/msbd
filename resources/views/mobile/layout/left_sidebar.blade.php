<aside class="offcanvas" id="sidebar_left">
    <div class="card-body w3-purple">
        <button class="btn-close close text-white">&times;</button>
        <a href="/">
            <img src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}"
                alt="" width="120">
        </a>
        <h6 class="text-white mt-3 mb-0">{{ __('Welcome') }}, {{ $me->name }}</h6>
        <a href="{{ route('user.userSettings') }}"><i class="fas fa-cog"></i></a>
    </div>
    <nav class="nav-sidebar">
        <a href="{{ route('user.userGroup', 'latest') }}"> <i class="fas fa-users w3-text-purple"></i> {{ __('Latest Users') }}</a>
        <a href="{{ route('user.userGroup', 'visitor') }}"> <i class="fas fa-users w3-text-purple"></i> {{ __('My Visitors') }}</a>
        <a href="{{ route('user.userGroup', 'favourite') }}"> <i class="fas fa-users w3-text-purple"></i> {{__('My Favourite Users')}}</a>
        <a href="{{ route('user.userGroup', 'preference') }}"> <i class="fas fa-users w3-text-purple"></i> {{ __('My Matched Users') }}</a>
        <a href="{{ route('user.userGroup', 'block') }}"> <i class="fas fa-users w3-text-purple"></i> {{ __('My Blocked Users') }}</a>
        <a href="{{ route('user.userGroup', 'contacts') }}"> <i class="fas fa-users w3-text-purple"></i> {{ __('My Contact Lists') }}</a>
        <a href="{{ route('user.userServiceGroup', 'proposal_pending') }}"> <i class="fas fa-users w3-text-purple"></i>
            {{ __('Proposal Pending') }}</a>
        <a href="{{ route('user.userServiceGroup', 'proposal_to_me') }}"> <i class="fas fa-users w3-text-purple"></i>
            {{ __('Proposal to me') }}</a>
        <a href="{{ route('user.userServiceGroup', 'proposal_by_me') }}"> <i class="fas fa-users w3-text-purple"></i>
            {{ __('Proposal sent by me') }}</a>
        <a href="{{ route('user.userServiceGroup', 'my_contacts') }}"> <i class="fas fa-users w3-text-purple"></i> {{ __('My Contacts') }}</a>
    </nav>
    <hr>
    <nav class="nav-sidebar">
        <a href="{{ route('user.searchAll') }}"> <i class="fas fa-search w3-text-purple"></i> {{ __('Search All') }}</a>
        <a href="{{ route('user.searchUsername') }}"> <i class="fas fa-search w3-text-purple"></i> {{ __('Username Search') }}</a>
        {{-- <a href="{{ route('user.searchPhoto') }}"> <i class="fas fa-search w3-text-purple"></i> {{ __('Photo Search') }}</a> --}}
        <a href="{{ route('user.searchProfession') }}"> <i class="fas fa-search w3-text-purple"></i> {{ __('Profession Search') }}</a>
        <a href="{{ route('user.searchSettings') }}"> <i class="fas fa-search w3-text-purple"></i> {{ __('Search (Preference) Settings') }}</a>
        <a href="{{ route('user.customSearch') }}"> <i class="fas fa-search w3-text-purple"></i> {{ __('Custom Search') }}</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
			document.getElementById('logout-form-left').submit();">
            <i class="fas fa-sign-out-alt w3-text-purple"></i>
            {{ __('logout') }}
        </a>

        <form id="logout-form-left" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </nav>
</aside>

@php
    if (!isset($me)) {
        $me= auth()->user();
        }
@endphp
<div class="nav-tabs-navigation">
    <div class="nav-tabs-wrapper">
        <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="nav-item">
                <a class=" active w3-small w3-btn w3-round w3-white w3-border w3-border-purple mb-1 mr-1 w3-hover-purple"
                    href="{{ url('/') }}">
                    Timeline
                </a>
            </li>

            <li class="nav-item">
                <a class=" w3-small w3-btn w3-round w3-white w3-border w3-border-purple mb-1 mr-1 w3-hover-purple"
                    href="{{ route('welcome.username', $me->username ?? 'a') }}">
                    My Profile
                </a>
            </li>
            <li class="nav-item">
                <a data-url="{{ route('user.myAsset','search_preference') }}"
                    class=" w3-small w3-btn w3-round w3-white w3-border w3-border-purple mb-1 mr-1 w3-hover-purple btn-menu-to-container"
                    href="">
                    Partner Preference
                </a>

            </li>

            <li class="nav-item">
                <a class=" w3-small w3-btn w3-round w3-white w3-border w3-border-purple mb-1 mr-1 w3-hover-purple"
                    href="{{ route('user.userSearch', 'searchAll') }}">
                    Search
                </a>
            </li>

            <li class="nav-item">
                <a class=" w3-small w3-btn w3-round w3-white w3-border w3-border-purple mb-1 mr-1 w3-hover-purple"
                    href="#my_setti" data-toggle="tab">
                    Setting
                </a>
            </li>

        </ul>
    </div>
</div>

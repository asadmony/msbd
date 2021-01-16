@if(Auth::user()->isAdmin())
<li>
  <a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Admin Dashboard</a>
</li>
@endif

@if(Auth::user()->isCommonWithoutAdmin())
<li>
  <a href="{{route('common1.dashboard')}}"><i class="fa fa-dashboard"></i> {{ Auth::user()->commonRole()->role_value }} Dashboard</a>
</li>
@endif

@if(Auth::user()->isMediaPerson())
<li>
  <a href="{{route('mediaperson.dashboard')}}"><i class="fa fa-dashboard"></i> Media Dashboard</a>
</li>
@endif



{{-- @if(Auth::user()->isBlogAdmin())
<li>
  <a href="{{route('blogAdmin.dashboard')}}"><i class="fa fa-dashboard"></i> Blog Admin Dashboard</a>
</li>
@endif --}}
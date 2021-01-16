@if (Auth::user()->isMyContact($user))
<a href="{{ route('user.makeContact', $user) }}"  class="btn btn-link btn-add-user btn-primary no-padding  mb-0" title="Added {{ $user->himOrHer() }}" >
    <i class="fa fa-mobile"></i> Added  ({{ Auth::user()->contactLimit() }} remaining)
</a>
@else
<a href="{{ route('user.makeContact', $user) }}"  class="btn btn-link btn-add-user btn-primary no-padding mb-0" title="Add to Contact {{ $user->himOrHer() }}  ({{ Auth::user()->contactLimit() }} remaining)" >
     <i class="fa fa-phone  "></i> Add to Contact ({{ Auth::user()->contactLimit() }})
</a>
@endif
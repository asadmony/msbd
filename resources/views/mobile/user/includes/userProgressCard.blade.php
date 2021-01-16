@foreach($me->latest3Profiles() as $user)

<div class="col-sm-4">
	
{{-- <a title="{{ $user->username }}" href="{{ url('/', $user->username) }}" target="_blank">
    
<img width="150" src="{{ $user->latestCheckedPP() }}" class="rounded img-bordered mb-2 "  alt="{{ $user->username }}">
</a> --}}

@include('mobile.user.includes.cards.userHoverCard')
</div>


@endforeach
<h5 class="title-section pt-3">My Match
    <a href="{{ route('user.userGroup', 'preference') }}" class="w3-small" style="float: right;">See More</a>
</h5>
<section class="scroll-horizontal padding-x">
    @if ($me->profile)
    @foreach($me->searchPreferenceUsersMobile(6) as $user)

    @include('mobile.user.includes.cards.userHoverCard')
    
    @endforeach
    @endif
</section>

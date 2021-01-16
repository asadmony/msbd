<h5 class="title-section pt-3">My Visitors
    <a href="{{ route('user.userGroup', 'visitor') }}" class="w3-small" style="float: right;">See More</a>
</h5>
<section class="scroll-horizontal padding-x">
    @foreach($me->visitors()->paginate(6); as $user)

    @include('mobile.user.includes.cards.userHoverCard')

    @endforeach
</section>

<h5 class="title-section pt-3">You May Like
    <a href="{{ route('user.userGroup', 'latest') }}" class="w3-small" style="float: right;">See More</a>
</h5>
<section class="scroll-horizontal padding-x">
    @foreach($me->latest6Profiles() as $user)

    @include('mobile.user.includes.cards.userHoverCard')

    @endforeach
</section>

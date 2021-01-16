<h5 class="title-section pt-3">My Favourites
    <a href="{{ route('user.userGroup', 'favourite') }}" class="w3-small" style="float: right;">See More</a>
</h5>
<section class="scroll-horizontal padding-x">

    @foreach($me->favs()->paginate(6); as $user)

    @include('mobile.user.includes.cards.userHoverCard')

    @endforeach
</section>

{{-- @include('mobile.user.includes.userProgressCard') --}}
@if (!empty($inactivePayment))
          @include('welcome.incompletePayment')
@endif
@include('mobile.user.includes.newProfiles')
@include('mobile.user.includes.myMatch')
@include('mobile.user.includes.myVisitors')
@include('mobile.user.includes.myFavourites')

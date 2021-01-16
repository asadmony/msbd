@extends('mobile.layout.base')
@section('body')
@if ($type == 'visitor')
<h5 class="title-section pt-3">My Visitors</h5>
@elseif($type == 'latest')
<h5 class="title-section pt-3">Latest Users</h5>
@elseif($type == 'favourite')
<h5 class="title-section pt-3">My Favourite Users</h5>
@elseif($type == 'preference')
<h5 class="title-section pt-3">My Matched Users</h5>
@elseif($type == 'block')
<h5 class="title-section pt-3">My Blocked Users</h5>
@elseif($type == 'block')
<h5 class="title-section pt-3">My Blocked Users</h5>
@elseif($type == 'contacts')
<h5 class="title-section pt-3">My Contact Lists</h5>
@endif
<section class="padding-x">
    <div class="row">
        @foreach ($users as $user)
        <div class="col-6 col-sm-6 col-md-4 py-2">
            <a href="{{url('/', $user->username)}}" class="product-sm mb-3">
                <div class="img-wrap"> <img src="{{ asset($user->latestCheckedPP()) }}" alt="{{ $user->username }}">
                </div>
                <div class="text-wrap">
                    <p class="title text-truncate w3-small">
                        {{Str::limit($user->name, 16,'..')}}<i
                            class="fa fa-circle {{ $user->isOnline() ? 'w3-text-green' : 'w3-text-light-gray' }} w3-small"></i>
                    </p>
                    <p class="title text-truncate w3-small"> {{Str::limit($user->religion, 20)}},</p>
                    <p class="title text-truncate w3-small">{{Str::limit($user->gender, 20)}},
                        {{Str::limit($user->height, 20)}}</p>
                    <p class="title text-truncate w3-small">{{Str::limit($user->marital_status, 20)}}</p>
                    <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
                    <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
                    <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
                    <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
                </div>
            </a>
        </div> <!-- col.// -->
        @endforeach
    </div> <!-- row end -->

</section> <!-- section body .// -->
<br>
<div class="text-center">
    {{ $users->render() }}
</div>


@endsection

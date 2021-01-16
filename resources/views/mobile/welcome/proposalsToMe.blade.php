@extends('mobile.layout.base')
@section('body')
@if ($type == 'proposal_pending')
<h5 class="title-section pt-3">Pending Proposal To Me</h5>
@elseif($type == 'proposal_to_me')
<h5 class="title-section pt-3">Proposals To Me</h5>
@elseif($type == 'proposal_by_me')
<h5 class="title-section pt-3">Proposals By Me</h5>
@elseif($type == 'my_contacts')
<h5 class="title-section pt-3">My Contacts ({{ Auth::user()->contactLimit() }} Remaining)</h5>
@endif
<section class="padding-x">
    <div class="row">
        @if ($users->count() > 0)
        @foreach ($users as $user)
        <div class="col-6 col-sm-6 col-md-4 py-2">
            <a href="{{url('/', $user->user->username)}}" class="product-sm mb-3">
                <div class="img-wrap"> <img src="{{ asset($user->user->latestCheckedPP()) }}"
                        alt="{{ $user->user->username }}">
                </div>
                <div class="text-wrap">
                    <p class="title text-truncate w3-small">
                        {{Str::limit($user->user->name, 16,'..')}}<i
                            class="fa fa-circle {{ $user->user->isOnline() ? 'w3-text-green' : 'w3-text-light-gray' }} w3-small"></i>
                    </p>
                    <p class="title text-truncate w3-small"> {{Str::limit($user->user->religion, 20)}},</p>
                    <p class="title text-truncate w3-small">{{Str::limit($user->user->gender, 20)}},
                        {{Str::limit($user->user->height, 20)}}</p>
                    <p class="title text-truncate w3-small">{{Str::limit($user->user->marital_status, 20)}}</p>
                    <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
                    <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
                    <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
                    <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
                </div>
            </a>
        </div> <!-- col.// -->
        @endforeach
        @else
        <p>No users found!</p>
        @endif
    </div> <!-- row end -->

</section> <!-- section body .// -->
<br>
<div class="text-center">
    {{ $users->render() }}
</div>
@endsection

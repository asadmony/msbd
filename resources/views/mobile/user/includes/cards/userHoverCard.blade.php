<div class="item">
    <a href="{{url('/', $user->username)}}" class="product-sm">
        <div class="img-wrap"> <img src="{{ asset($user->latestCheckedPP()) }}" alt="{{ $user->username }}"> </div>
        <div class="text-wrap">
            <p class="title text-truncate w3-small">
                {{Str::limit($user->name, 16,'..')}}<i
                    class="fa fa-circle {{ $user->isOnline() ? 'w3-text-green' : 'w3-text-light-gray' }} w3-small"></i>
            </p>
            <p class="title text-truncate w3-small"> {{Str::limit($user->religion, 20)}},</p>
            <p class="title text-truncate w3-small">{{Str::limit($user->gender, 20)}}, {{Str::limit($user->height, 20)}}
            </p>
            <p class="title text-truncate w3-small">{{Str::limit($user->marital_status, 20)}}</p>
            <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
            <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
            <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
            <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
        </div>
    </a>
</div>

@extends('mobile.layout.base')
@section('body')
<div class="container pt-2">
    <h4> Search Username / Mobile / Email</h4>
    <div>
        <form action="{{ route('user.searchUsers') }}" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="searchId" value="{{ $searchId ?? old('searchId') }}"
                    placeholder="search ID/Mobile/Email here....">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-info w3-purple"> <i class="fa fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
    @if (isset($users))
    @if ($users->count() > 0)

    <div class="search-result">
        <h3>Search results...</h3>
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
                        <p class="title text-truncate w3-small"> {{Str::limit($user->religion, 20,'..')}},</p>
                        <p class="title text-truncate w3-small">{{Str::limit($user->gender, 20,'..')}},
                            {{Str::limit($user->height, 20,'..')}}</p>
                        <p class="title text-truncate w3-small">{{Str::limit($user->marital_status, 20,'..')}}</p>
                        <a href="#" class="btn btn-sm btn-light"> <i class="far fa-thumbs-up w3-text-red"></i> </a>
                        <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-phone"></i> </a>
                        <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-envelope"></i> </a>
                        <a href="#" class="btn btn-sm btn-light"> <i class="far fa-id-card"></i> </a>
                    </div>
                </a>
            </div> <!-- col.// -->
            @endforeach
        </div>
    </div>

    @else
    <p>No results found</p>
    @endif
    @endif

</div>
@endsection

@extends('mobile.layout.base')
@section('body')
<div class="container pt-2 pb-5">
    <h1> Search Profession</h1>
    <div>
        <form action="{{ route('user.searchByProfession') }}" method="get">
            <div class="pb-3">
                <label for="profession"> <b> Select profession:</b></label>
                @foreach($professions as $value)
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input form-check-input-select" type="checkbox" name="professions[]"
                            value="{{ $value->title }}"> {{ $value->title }}
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                @endforeach
            </div>
            <div class="input-group">
                <label for="genders"><b>Select Gender:</b></label>
                @foreach ($genders as $v)
                <div class="col-sm-4">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input form-check-input-select" type="checkbox" name="genders[]"
                                value="{{ $v->title }}"> {{ $v->title }}
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-info w3-purple float-right"> <i class="fa fa-search"> Search</i>
            </button>
        </form>
    </div>
    @if (isset($users))
    @if ($users->count() > 0)

    <div class="mt-5 search-result">
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
        <div class="text-center">
            {{ $users->render() }}
        </div>
    </div>

    @else
    <p>No results found</p>
    @endif
    @endif


</div>
@endsection

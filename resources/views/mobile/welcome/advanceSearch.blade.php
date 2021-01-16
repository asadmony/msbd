@extends('mobile.layout.base')
@section('body')
<div class="container">
    <h3 class="text-center">Search</h3>
    <div>
        @include('alerts.alerts')
        <form method="get" class="" action="{{route('user.advancedSearchResult')}}">
            @csrf

            <div class="w3-border w3-border-purple w3-round w3-white">
                <div class="w3-container w3-padding">

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group {{ $errors->has('gender') ? ' has-danger' : '' }}"
                                style="width: 100%;">
                                <label for="gender">Select Gender: *</label>

                                <select class="form-control  simple-select2 w-100" id="gender" name="gender">

                                    <option value="">Select one </option>
                                    @foreach ($genders as $v)
                                    <option value="{{ $v->title }}" @if(isset($inputs['gender']) &&
                                        $inputs['gender']==$v->title) selected
                                        @endif
                                        >{{ $v->title }}</option>
                                    @endforeach

                                </select>

                                @if($errors->has('gender'))

                                <span class="help-block">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>

                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('minimum_age') ? ' has-danger' : '' }}"
                                style="width: 100%;">
                                <label for="minimum_age">Minimum Age (Year) *</label>

                                <select class="form-control  simple-select2 w-100" id="minimum_age" name="minimum_age">

                                    <option value="18">Select Minimum Age </option>
                                    @for ($i = 18; $i <= 60; $i++) <option value="{{ $i }}"
                                        @if(isset($inputs['minimum_age']) && $inputs['minimum_age']==$i) selected
                                        @endif>{{ $i }}</option>

                                        @endfor

                                </select>

                                @if($errors->has('minimum_age'))

                                <span class=" help-block">
                                    <strong>{{ $errors->first('minimum_age') }}</strong>
                                </span>

                                @endif
                            </div>



                            <div class="form-group {{ $errors->has('maximum_age') ? ' has-danger' : '' }}"
                                style="width: 100%;">
                                <label for="maximum_age">Maximum Age *</label>

                                <select class="form-control  simple-select2 w-100" id="maximum_age" name="maximum_age">

                                    <option value="65">Select Maximum Age </option>

                                    @for ($i = 18; $i <= 80; $i++) <option value="{{ $i }}"
                                        @if(isset($inputs['maximum_age']) && $inputs['maximum_age']==$i) selected
                                        @endif>{{ $i }}</option>

                                        @endfor

                                </select>



                                @if($errors->has('maximum_age'))

                                <span class="help-block">
                                    <strong>{{ $errors->first('maximum_age') }}</strong>
                                </span>

                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group {{ $errors->has('minimum_height') ? ' has-danger' : '' }}">
                                <label for="minimum_height">Minimum Height *</label>
                                <select class="form-control simple-select2 w-100" name="minimum_height"
                                    style="width: 100%;">
                                    <option value="4 Feet">select min height</option>
                                    @if($me->searchTerm->min_height)
                                    <option>{{$me->searchTerm->min_height}}</option>
                                    @endif
                                    {{-- ID: 6     My Height --}}
                                    @foreach ($userSettingFields[5]->values as $value)
                                    @if($me->searchTerm)
                                    @if ($me->searchTerm->min_height != $value->title)
                                    <option value="{{ $value->title }}" @if(isset($inputs['minimum_height']) &&
                                        $inputs['minimum_height']==$value->title) selected
                                        @endif
                                        >{{ $value->title }}</option>
                                    @endif
                                    @else
                                    <option value="{{ $value->title }}">{{ $value->title }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group {{ $errors->has('maximum_height') ? ' has-danger' : '' }}">
                                <label for="maximum_height">Maximum Height *</label>
                                <select class="form-control simple-select2 w-100" name="maximum_height"
                                    style="width: 100%;">
                                    <option value="6 Feet 10 Inch">select max height</option>
                                    @if($me->searchTerm->max_height)
                                    <option>{{$me->searchTerm->max_height}}</option>
                                    @endif
                                    {{-- ID: 6     My Height --}}
                                    @foreach ($userSettingFields[5]->values as $value)
                                    @if($me->searchTerm)
                                    @if ($me->searchTerm->max_height != $value->title)
                                    <option value="{{ $value->title }}" @if(isset($inputs['maximum_height']) &&
                                        $inputs['maximum_height']==$value->title) selected
                                        @endif
                                        >{{ $value->title }}</option>
                                    @endif
                                    @else
                                    <option value="{{ $value->title }}">{{ $value->title }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>




                        </div>
                        <div class="col-sm-3">


                            <div class="form-group {{ $errors->has('marital_status') ? ' has-danger' : '' }}">
                                <label for="marital_status">Marital Status *</label>
                                <select class="form-control simple-select2 w-100" name="marital_status"
                                    style="width: 100%;">

                                    <option value="">select marital status</option>
                                    @if($me->searchTerm->marital_status)
                                    <option>{{$me->searchTerm->marital_status}}</option>
                                    @endif
                                    {{-- ID: 11     Marital Status --}}
                                    @foreach ($userSettingFields[10]->values as $value)
                                    @if($me->searchTerm)
                                    @if ($me->searchTerm->marital_status != $value->title)
                                    <option @if(isset($inputs['maximum_height']) && $inputs['maximum_height']==$value->
                                        title) selected
                                        @endif
                                        value="{{ $value->title }}">{{ $value->title }}</option>
                                    @endif
                                    @else
                                    <option>{{ $value->title }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group {{ $errors->has('profession') ? ' has-danger' : '' }}">
                                <label for="profession">Profession *</label>
                                <select class="form-control simple-select2 w-100" name="profession"
                                    style="width: 100%;">

                                    <option value="">select profession</option>
                                    @if($me->searchTerm->profession)
                                    <option>{{$me->searchTerm->profession}}</option>
                                    @endif
                                    {{-- ID: 10     Profession --}}
                                    @foreach ($userSettingFields[9]->values as $value)
                                    @if($me->searchTerm)
                                    @if ($me->searchTerm->profession != $value->title)
                                    <option value="{{ $value->title }}" @if(isset($inputs['profession']) &&
                                        $inputs['profession']==$value->title) selected
                                        @endif
                                        >{{ $value->title }}</option>
                                    @endif
                                    @else
                                    <option value="{{ $value->title }}">{{ $value->title }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-sm-3">



                            <div class="form-group {{ $errors->has('religion') ? ' has-danger' : '' }}">
                                <label for="religion">Religion/Community</label>
                                <select class="form-control simple-select2 w-100" name="religion" style="width: 100%;">

                                    <option value="">select religion</option>

                                    @if($me->searchTerm->religion)
                                    <option>{{$me->searchTerm->religion}}</option>
                                    @endif

                                    {{-- ID: 3   Religion --}}
                                    @foreach ($religions as $value)

                                    @if ($me->searchTerm->religion != $value->title)
                                    <option value="{{ $value->title }}" @if(isset($inputs['religion']) &&
                                        $inputs['religion']==$value->title) selected
                                        @endif
                                        >{{ $value->title }}</option>
                                    @endif

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group {{ $errors->has('country') ? ' has-danger' : '' }}">
                                <label for="country">Present Country</label>
                                <select class="form-control simple-select2 w-100" name="country" style="width: 100%;">

                                    <option value="">select country</option>
                                    @if($me->searchTerm->country)
                                    <option>{{$me->searchTerm->country}}</option>
                                    @endif
                                    @foreach ($allcountries as $value)
                                    @if ($me->searchTerm->country != $value->name)
                                    <option value="{{ $value->name }}" @if(isset($inputs['country']) &&
                                        $inputs['country']==$value->title) selected
                                        @endif
                                        >{{ $value->name }}</option>
                                    @endif
                                    @endforeach

                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <br>
            <div class="pull-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

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
                        <p class="title text-truncate w3-small"> {{Str::limit($user->religion, 20,'..')}},
                            {{ $user->age() }}yrs</p>
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
            {{ $users->appends([
            'gender'=> isset($inputs['gender']) ? $inputs['gender'] : null,
            'minimum_age'=> isset($inputs['minimum_age']) ? $inputs['minimum_age'] : null,
            'maximum_age'=> isset($inputs['maximum_age']) ? $inputs['maximum_age'] : null,
            ])->render() }}
        </div>
    </div>

    @else
    <p>No results found.</p>
    @endif
    @endif
</div>
@endsection

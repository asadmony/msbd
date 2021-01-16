<div class="box box-widget">
            <div class="box-header with-border">
                <h3 class="box-title">Branch Package Reference Support Status</h3>
            </div>

            <div class="box-body" style="min-height: 450px;">

                <form method="post" action="{{ route('common2.branchPackageReferenceSupport', $user) }}">
                    {{ csrf_field() }}

                    <div class="row">
                        
                        <div class="col-sm-6">



                            <div class="form-group form-group-sm {{ $errors->has('package') ? ' has-error' : '' }}">
    <label for="package">Package:</label>

    <select class="form-control form-group-sm select2" id="package" name="package">
        <option value="">Free Package </option>
        @if(old('package'))
        <option selected>{{old('package')}}</option>
        @elseif($user->package > 0)
        <option selected>{{$user->package}}</option>
        @endif
        {{-- packages --}}
        @foreach ($packages as $package)
        <option value="{{ $package->id }}">{{ $package->id }} ({{$package->package_title}}, Duration {{$package->package_duration}} Days, {{$package->package_currency}} {{$package->package_amount}})</option>
        @endforeach
    </select>
    @if ($errors->has('package'))
    <span class="help-block">
        <strong>{{ $errors->first('package') }}</strong>
    </span>
    @endif
</div>


    <div class="form-group form-group-sm {{ $errors->has('expired_at') ? ' has-error' : '' }}">
        <label for="expired_at">Expired Date:</label>
        <input 
        type="date"  
        class="form-control" 
        id="expired_at"
        name="expired_at"
        @if($user->expired_at)
        value="{{old('expired_at') ?: date('Y-m-d', strtotime($user->expired_at))}}"
        @else
        value="{{ old('expired_at') }}" 
        @endif

        placeholder="Expired Date" 
        />

        @if ($errors->has('expired_at'))
        <span class="help-block">
            <strong>{{ $errors->first('expired_at') }}</strong>
        </span>
        @endif
    </div>



    <div class="form-group form-group-sm {{ $errors->has('branch') ? ' has-error' : '' }}">
    <label for="branch">Branch:</label>

    <select class="form-control form-group-sm select2" id="branch" name="branch">
        <option value="">No Branch </option>
        @if(old('branch'))
        <option selected>{{old('branch')}}</option>
        @endif
        {{-- packages --}}
        @foreach ($branches as $branch)
        <option {{ $user->hasBranch($branch) ? 'selected' : '' }} value="{{ $branch->id }}">{{$branch->branch_name}}</option>
        @endforeach
    </select>
    @if ($errors->has('branch'))
    <span class="help-block">
        <strong>{{ $errors->first('branch') }}</strong>
    </span>
    @endif
</div>



                        </div>

                        <div class="col-sm-6">



<div class="form-group form-group-sm {{ $errors->has('media_person') ? ' has-error' : '' }}">
    <label for="media_person">Media Person:</label>

    {{-- <select class="form-control form-group-sm select2" id="media_person" name="branch">
        <option value="">No Media Person </option>
        @if(old('media_person'))
        <option selected>{{old('media_person')}}</option>
        @endif

    </select> --}}

    <select id="media_person"
            name="media_person"
            class="form-control select2-container step2-select select2"
            data-placeholder="Name, Email, Usernam, or Mobile Number"
            data-ajax-url="{{route('common3.selectNewMediaPerson')}}"
            data-ajax-cache="true"
            data-ajax-dataType="json"
            data-ajax-delay="200"
            style="width: 100%;">
            @if(old('media_person'))
            <option>{{old('media_person')}}</option>
            @elseif($user->mediaItem)
            <option selected value="{{ $user->mediaItem->mediaPerson->id }}">{{ $user->mediaItem->mediaPerson->email }}</option>
            @endif

    </select>

    @if ($errors->has('media_person'))
    <span class="help-block">
        <strong>{{ $errors->first('media_person') }}</strong>
    </span>
    @endif
</div>





            





                            
                            <div class="checkbox">
                            <label>
                                <input 
                                type="checkbox"
                                name="active"
                                {{$user->active ? 'checked' : ''}} 
                                /> Active (Account Status)</label>
                            </div>

    <div class="checkbox">
        <label>
            <input 
            type="checkbox"
            name="user_type"
            {{$user->isOffline() ? 'checked' : ''}} 
            /> Offline Profile</label>
        </div>



                            <button type="submit" class="w3-btn w3-round w3-blue pull-right">Update</button>

                        </div>
                    </div>
                      

                      
                    </form>
                
            </div>
        </div>
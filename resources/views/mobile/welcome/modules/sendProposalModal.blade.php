{{-- it was for sending proposal in app view --}}
{{-- currently unused --}}
<div class="row">
    <div class="col-sm-12">
        <div class="box box-widget w3-border w3-border-purple text-center">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Send Proposal to <span class="w3-tag w3-purple w3-round w3-large"> {{ $user->username }} </span>
                </h3>
            </div>
            <div class="box-body text-center">
                <img class="rounded img-bordered" title="{{ Auth::user()->username }}" width="80"
                    src="{{ asset(Auth::user()->userProfilePic) }}" alt="{{ Auth::user()->username }}">

                <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                &nbsp; &nbsp;
                <i class="fa fa-arrow-circle-right w3-animate-fading w3-large w3-text-purple"></i>
                &nbsp; &nbsp;
                <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>

                <img class="rounded img-bordered" title="{{ $user->username }}" width="80"
                    src="{{ asset($user->userProfilePic) }}" alt="{{ $user->username }}">
            </div>
        </div>
    </div>
</div>
<div class="col pt-4 pb-2">
    <form class="form-send-proposal" action="{{ route('user.processProposalMobileModal', $user) }}" method="post">

        <div class="form-group {{ $errors->has('comment') ? ' has-danger' : '' }}">
            <label for="comment">Write something to {{ $user->name }} </label>
            <textarea class="form-control w3-border w3-padding {{ $errors->has('comment') ? ' w3-border-red' : '' }}"
                name="comment" rows="3" placeholder="Write something to {{ $user->username }}"
                id="comment">{{ old('comment') ?: 'Dear '. $user->name . ', I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...' }}</textarea>
            @if ($errors->has('comment'))
            <span class="help-block">
                <strong>{{ $errors->first('comment') }}</strong>
            </span>
            @endif
        </div>

        {{ csrf_field() }}
        <div class="text-center">
            <button type="submit" class="btn btn-default w3-purple pull-right"><i class="fa fa-paper-plane"></i> &nbsp;
                Send</button>
        </div>
    </form>
</div>

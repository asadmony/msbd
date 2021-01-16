<section class="gallery-wrap">
    <a href="{{ asset($user->latestCheckedPP()) }}" data-fancybox="gallery" class="img-big-wrap"><img class="w-100"
            src="{{ asset($user->latestCheckedPP()) }}" alt="{{ $user->username }}"></a>
    <div class="thumbs-wrap scroll-horizontal">
        @foreach ($user->userPhotos as $photo)
        <a href="{{ asset($photo->img_url) }}" data-fancybox="gallery" class="item-thumb"> <img
                src="{{ asset($photo->img_url) }}" alt="{{ env('APP_NAME_BIG') }}"></a>
        @endforeach
    </div>
</section>
<div class="row pt-3 justify-content-center">
    <div><a href="#" class="btn btn-light btn-icon"><i class="far fa-thumbs-up w3-text-red"></i></a></div>
    <div class="pl-2"><a href="#" class="btn btn-light btn-icon"><i class="fas fa-phone"></i></a></div>
    <div class="pl-2"><a href="#" class="btn btn-light btn-icon"><i class="fas fa-envelope"></i></a></div>
    <div class="pl-2"><a href="#" class="btn btn-light btn-icon"><i class="far fa-id-card"></i></a></div>
    <div class="pl-2"><a data-target="#sendProposal" data-toggle="modal" href="#" class="btn btn-light btn-icon"><i
                class="fa fa-share"></i></a></div>
</div>

<!-- Send Proposal Modal -->
<div id="sendProposal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send Proposal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="sendProposal">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box box-widget w3-border w3-border-purple text-center px-0">
                            <div class="box-header with-border">
                                <h3 class="box-title">
                                    Send Proposal to <span class="w3-tag w3-purple w3-round w3-large">
                                        {{ $user->name }} </span>
                                </h3>
                            </div>
                            <div class="box-body text-center d-flex justify-content-center align-items-center">
                                <img class="mr-2 rounded img-bordered" title="{{ Auth::user()->username }}" width="80"
                                    src="{{ asset(Auth::user()->userProfilePic) }}" alt="{{ Auth::user()->username }}">
                                <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                                <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                                &nbsp; &nbsp;
                                <i class="fa fa-arrow-circle-right w3-animate-fading w3-large w3-text-purple"></i>
                                &nbsp; &nbsp;
                                <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                                <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                                <img class="ml-2 rounded img-bordered" title="{{ $user->username }}" width="80"
                                    src="{{ asset($user->userProfilePic) }}" alt="{{ $user->username }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col pt-4 pb-2">
                    <form class="" action="{{ route('user.processProposalMobileModal', $user->id) }}" method="post">
                        @csrf
                        <div class="form-group {{ $errors->has('comment') ? ' has-danger' : '' }}">
                            <label for="comment">Write something to {{ $user->name }} </label>
                            <textarea
                                class="form-control w3-border w3-padding {{ $errors->has('comment') ? ' w3-border-red' : '' }}"
                                name="comment" rows="3" placeholder="Write something to {{ $user->username }}"
                                id="comment"
                                required>{{ old('comment') ?: 'Dear '. $user->name . ', I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...' }}</textarea>
                            @if ($errors->has('comment'))
                            <span class="help-block">
                                <strong>{{ $errors->first('comment') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default w3-purple pull-right"><i
                                    class="fa fa-paper-plane"></i> &nbsp;
                                Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal-bialog .// -->

<section class="padding-around">
    <h6 class="title-detail text-warning">{{ $user->username }}
        @if($user->isOnline())
        <img src="{{ asset('img/online.svg') }}" alt="Online" style="width: 20px;">
        @else
        <i class="fa fa-circle w3-text-light-gray w3-small"></i>
        @endif
    </h6>
    <article class="info-detail-wrap pt-3">
        <div class="text-left w3-text-gray w3-small w3-col width-140">
            Profile created by : {{ $user->profile_created_by ?: '(Not set yet)' }}
        </div>
        <div class="text-left w3-text-gray w3-small w3-col width-140">
            Age, Gender : {{ $user->age() }}, {{ $user->gender }}
        </div>
        <div class="text-left w3-text-gray w3-small w3-col width-140">
            Height : {{ $user->height }}
        </div>
        <div class="text-left w3-text-gray w3-small w3-col width-140">
            Religion/Community : {{ $user->religion }}
        </div>
        <div class="text-left w3-text-gray w3-small w3-col width-140">
            Education : {{ $user->educationLevel() }}
        </div>
        <div class="text-left w3-text-gray w3-small w3-col width-140">
            Profession : {{ $user->profession() }}
        </div>
        <div class="text-left w3-text-gray w3-small w3-col width-140">
            Marital Status : {{ $user->marital_status}}
        </div>
        <div class="text-left w3-text-gray w3-small w3-col width-140">
            Country :
            @if($user->country == 'Other' || $user->country == 'Others')
            {{$user->country_other}}
            @else
            {{$user->country}}
            @endif
        </div>
    </article>
    <hr>
</section>

@push('js')
@endpush

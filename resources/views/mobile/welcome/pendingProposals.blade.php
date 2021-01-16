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
        @foreach ($users as $proposal)
        <div class="col py-2">
            <div class="box box-widget w3-animate-zoom">
                <div class="box-body" style="min-height: 100px;">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="box box-widget w3-border w3-border-purple text-center m-0 p-10">

                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        Proposal from <span class="w3-tag w3-purple w3-round w3-large"> <a
                                                target="_blank" class="w3-text-white"
                                                href="{{ url('/',$proposal->user->name) }}">{{ $proposal->user->name }}</a>
                                        </span> to <span class="w3-tag w3-purple w3-round w3-large"> <a target="_blank"
                                                class="w3-text-white"
                                                href="{{ url('/',$proposal->userSecond->username) }}">
                                                {{ $proposal->userSecond->username }} </a> </span>
                                    </h3>
                                </div>
                                <div class="box-body text-center d-flex justify-content-center align-items-center">

                                    <a class="mr-2" target="_blank" href="{{ url('/',$proposal->user->username) }}">
                                        <img class=" rounded img-bordered mb-2" title="{{ $proposal->user->username }}"
                                            width="80" src="{{ asset($proposal->user->latestCheckedPP()) }}"
                                            alt="{{ $proposal->user->username }}">
                                    </a>


                                    <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                                    <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                                    &nbsp; &nbsp;
                                    <i class="fa fa-arrow-circle-right w3-animate-fading w3-large w3-text-purple"></i>
                                    &nbsp; &nbsp;
                                    <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                                    <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i>
                                    <a class="ml-2" target="_blank"
                                        href="{{ url('/',$proposal->userSecond->username) }}">
                                        <img class=" rounded img-bordered mb-2"
                                            title="{{ $proposal->userSecond->username }}" width="80"
                                            src="{{ asset($proposal->userSecond->latestCheckedPP()) }}"
                                            alt="{{ $proposal->userSecond->username }}">
                                    </a>

                                </div>
                                <div class="box-footer w3-light-gray">
                                    <div class="card mt-0 mb-0">
                                        <div class="card-body">
                                            <p>{{ $proposal->message }}</p>

                                            @if($proposal->accepted)

                                            <a class="w3-btn btn-sm w3-white w3-border w3-border-blue w3-round"
                                                href="javascript::void(0)">Accepted</a>

                                            @else

                                            @if ($proposal->user_id == Auth::id())

                                            <a href="{{ route('user.cancelProposalMobile', $proposal) }}"
                                                class="w3-btn btn-sm w3-white w3-border w3-border-red w3-round btn-proposal-reply-"
                                                href="">Delete</a>

                                            @else

                                            <a href="{{ route('user.cancelProposalMobile', $proposal) }}"
                                                class="w3-btn btn-sm w3-white w3-border w3-border-red w3-round btn-proposal-reply-"
                                                href="">Cancel</a>

                                            <a href="{{ route('user.acceptProposalMobile', $proposal) }}"
                                                class="w3-btn btn-sm w3-blue w3-border w3-border-blue w3-round btn-proposal-reply-"
                                                href="">Accept</a>

                                            @endif



                                            @endif





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div> <!-- col.// -->
        @endforeach
        @else
        <p>No proposal found!</p>
        @endif
    </div> <!-- row end -->

</section> <!-- section body .// -->
<br>
<div class="text-center">
    {{ $users->render() }}
</div>
@endsection

@foreach($usersAll as $user)
<tr>
    <td width="200">
        <img class="img-responsive" src="{{asset($user->userProfilePic)}}" alt="{{ $user->username }}" width="100" />


        @if ($user->uploadedPP())

        <br>
        <b>Width: {{ $user->uploadedPP()->image_width }} px</b> <br>
        <b>Height: {{ $user->uploadedPP()->image_height }} px</b>
        

            @endif
        </td>

        <td>


            @if($user->atLeastOneCheckedPP())

            <img class="img-bordered img-rounded" src="{{ asset($user->latestCheckedPP()) }}" style="width: 70px;" alt="{{ $user->username }}"> is currently live & checked Profile picture. <br>

            @endif



            @if($user->isOnline())


    <img title="Online Now" src="{{ asset('img/online.svg') }}" alt="Online" style="width: 20px;">
    @else
    <i class="fa fa-circle w3-text-light-gray w3-small"></i>
    @endif

            &nbsp; &nbsp;
    <b>ID: </b> {{ $user->id }} 
            

            <br>
            <b>Name: </b> {{$user->name}} <br>
            <b>Username: </b> {{$user->username}} <br>
            <b>Mobile: </b> {{ $user->mobile }} <br>
            {{-- <b>Guardian Mobile: </b> {{ $user->guardian_mobile }} <br> --}}
            <b>Email: </b> {{$user->email}} <br>




            <b>Age: </b> {{ $user->age() }} <br>

            {{-- <b>Package: </b> {{$user->package}} <br>
            <b>Expire Date:</b> {{$user->expired_at}} <br>
            <b>Validity (Days): </b> {{ $user->packageDuration() }} --}}


        </td>

        <td>

            <b>Gender: </b> {{$user->gender}} <br>
            <b>Date of Birth: </b> {{$user->dob}} <br>                     
            <b>Country: </b>   
            @if($user->country == 'Other' || $user->country == 'Others')
            {{$user->country_other}}
            @else
            {{$user->country}}
            @endif
            <br>  

            <b>Profile Created By: </b> {{$user->profile_created_by}} <br>
            {{-- <b>Looking For: </b> {{$user->looking_for}} <br> --}}
            <b>Religion: </b> {{$user->religion}} <br>
            <b>Social Order: </b> {{ $user->social_order }} <br>
            {{-- <b>About: </b> {{ $user->contactInfo? $user->contactInfo->about_me : '' }}
            <br>
            <b>Rating: </b>  --}}
            {{-- @include('user.includes.others.stars')
            <br> --}}
            <b>Profile Created at: </b> {{ date('d-M-Y', strtotime($user->created_at)) }} ({{ $user->created_at->diffForHumans() }}) <br>

            {{-- <b>Proposal Pending to me: </b>
            {{ $user->proposalToMe()->whereAccepted(false)->count() }}<br>
            <b>Proposal to me: </b>
            {{ $user->proposalToMe()->whereAccepted(true)->count() }}<br>
            <b>Proposal sent by me: </b>
            {{ $user->proposal()->count() }}<br>  --}}


        </td>




        <td width="100">
            <div class="btn-group btn-group-xs pull-right">
                {{-- <button type="button" data-url="" class="btn btn-primary">Edit</button> --}}
                <a target="_blank" class="btn btn-primary" href="{{ url('/', $user->username) }}">Details</a>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    
                    <li>
                        <a target="_blank" href="{{route('user.userDetailsPrint', $user)}}">Print <i class="fa fa-print"></i></a>
                    </li>
                     

                </ul>
            </div>
            <br>

            <br>

            <div class="text-center">
                <small class="label  {{ $user->active ? 'label-success' : 'label-default' }}">
                    {{ $user->active ? 'Active' : 'Deactivated' }}
                </small>
            </div>
        </td>

    </tr>
    @endforeach
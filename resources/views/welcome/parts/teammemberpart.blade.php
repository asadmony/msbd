@push('css')
    <style>
    </style>
@endpush
<div class="container-fluid" style="background-color: #f7f7f7">
    <div class="row">
        <div class="col-sm-12 p-0 m-0">
            <div class="row mx-1">
                <div class="col-md-6 m-0 px-1 pt-3 pb-3"  style="background-color: #1fc8db;
                background-image: linear-gradient(
            138deg
            , #EADEDB 0%, #BC70A4 50%, #BFD641 75%);border-radius: 30px 30px;">
                        <div class="h3 py-2 text-white text-center bold">
                            Marketing Team
                        </div>
                        @foreach ($branches as $branch)
                            <div class="" style="margin-bottom:25px; padding-top:10px; padding-bottom: 25px; border: 2px solid white; border-radius: 20px;">
                                <div class="row text-center">
                                    <div class="h5 m-auto " style="color: black !important; font-family: 'Lobster Two', cursive;">
                                        <a class="" href="{{ route('welcome.branchTeamMembers', $branch->id) }}">
                                            <i><u>{{ $branch->branch_name }}</u></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($branch->marketingTeamMembers() as $member)
                                    <div class="col m-auto appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="100"  data-toggle="modal" data-target="#marketingTeamMember_{{ $member->id }}" onclick="removeOverlay()">
                                        <div class="card rounded w3-hover-shadow"  style="width: 200px; height: 280px; margin: 10px auto;">
                                            <img class="w3-circle px-2 pt-2 m-auto" style="max-height: 160px; max-width: 100%" src="{{ asset($member->image) }}" alt="">
                                            <div class="py-2 px-1 text-center">
                                                <div class="bold">{{ $member->name }}</div>
                                                <div class="w3-text-dark-grey">{{ $member->designation }}</div>
                                                <div class="w3-text-green">{{ $member->education }}</div>
                                                <div class="w3-text-green">{{ $member->mobile }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
            <div class="modal fade" id="marketingTeamMember_{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered- modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Our Team Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="rounded px-2 pt-2 m-auto" style="max-width: 100%" src="{{ asset($member->image) }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="h3 m-auto" style="color: black !important; font-family: 'Lobster Two', cursive;">
                                <i><u>{{ $branch->branch_name }}</u></i>
                            </div>
                            <div style="font-size: 15pt">
                                <table class="table table-borderless w3-text-dark-grey">
                                    <tr  class="pb-3">
                                        <th>Name</th>
                                        <th>:</th>
                                        <td>{{ $member->name }}</td>
                                    </tr>
                                    <tr  class="pb-3">
                                        <th>Designation</th>
                                        <th>:</th>
                                        <td>{{ $member->designation }}</td>
                                    </tr>
                                    <tr  class="pb-3">
                                        <th>Team</th>
                                        <th>:</th>
                                        <td>{{ $member->team_name }}</td>
                                    </tr>
                                    <tr  class="pb-3">
                                        <th>Education</th>
                                        <th>:</th>
                                        <td>{{ $member->education }}</td>
                                    </tr>
                                    <tr  class="pb-3">
                                        <th>Contact</th>
                                        <th>:</th>
                                        <td>{{ $member->mobile }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
                </div>
            </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="row" style="padding: 0 10px 0 30px;">
                            @foreach ($marketingTeam as $member)
                            <div class="col m-auto">
                                <div class="card rounded w3-hover-shadow"  style="width: 200px; height: 280px; margin: 10px auto;">
                                    <img class="w3-circle px-2 pt-2 m-auto" style="max-height: 160px; max-width: 100%" src="{{ asset($member->image) }}" alt="">
                                    <div class="py-2 px-1 text-center">
                                        <div class="bold">{{ $member->name }}</div>
                                        <div class="w3-text-dark-grey">{{ $member->designation }}</div>
                                        <div class="w3-text-green">{{ $member->education }}</div>
                                        <div class="w3-text-green">{{ $member->mobile }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> --}}
                </div>
                <div class="col-md-6 m-0 px-2">

                    <div class="p-1  pt-3  pb-3" style="background-color: #1fc8db;
                    background-image: linear-gradient(
                138deg
                , #df3fd1 0%, #67bdaa 50%, #32e4a0 75%);border-radius: 100px 30px;">
                        <div class="h3 text-white py-2 text-center bold">
                            CEO
                        </div>
                    <div class="row" style="padding: 0 10px 0 10px;">
                        @foreach ($ceos as $member)
                        <div class="col m-auto appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="100"  data-toggle="modal" data-target="#serviceTeamMember_{{ $member->id }}" onclick="removeOverlay()">
                            <div class="card rounded w3-hover-shadow"  style="width: 200px; height: 280px; margin: 10px auto;">
                                <img class="w3-circle px-2 pt-2 m-auto" style="max-height: 160px; max-width: 100%" src="{{ asset($member->image) }}" alt="">
                                <div class="py-2 px-1 text-center">
                                    <div class="bold">{{ $member->name }}</div>
                                    <div class="w3-text-dark-grey">{{ $member->designation }}</div>
                                    <div class="w3-text-green">{{ $member->education }}</div>
                                    <div class="w3-text-green">{{ $member->mobile }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
            <div class="modal fade" id="serviceTeamMember_{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered- modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Our CEO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="rounded px-2 pt-2 m-auto" style="max-width: 100%" src="{{ asset($member->image) }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="h3 m-auto" style="color: black !important; font-family: 'Lobster Two', cursive;">
                                {{-- <i><u>{{ $member->branch->branch_name }}</u></i> --}}
                                <i><u>CEO</u></i>
                            </div>
                            <div style="font-size: 15pt">
                                <table class="table table-borderless w3-text-dark-grey">
                                    <tr >
                                        <th>Name</th>
                                        <th>:</th>
                                        <td>{{ $member->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <th>:</th>
                                        <td>{{ $member->designation }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <th>Team</th>
                                        <th>:</th>
                                        <td>{{ $member->team_name }}</td>
                                    </tr> --}}
                                    @isset($member->education)
                                    <tr >
                                        <th>Education</th>
                                        <th>:</th>
                                        <td>{{ $member->education }}</td>
                                    </tr>
                                    @endisset
                                    <tr>
                                        <th>Contact</th>
                                        <th>:</th>
                                        <td>{{ $member->mobile }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
                </div>
            </div>
                        @endforeach
                    </div>
                </div>

                    <div class="p-1 mt-2 pt-3  pb-3" style="background-color: #1fc8db;
                    background-image: linear-gradient(
                138deg
                , #f34de5 0%, #67bdaa 50%, #41d69d 75%);border-radius: 100px 30px;">
                        <div class="h3 text-white py-2 text-center bold">
                            Service Team
                        </div>
                    <div class="row" style="padding: 0 10px 0 10px;">
                        @foreach ($serviceTeam as $member)
                        <div class="col m-auto appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="100"  data-toggle="modal" data-target="#serviceTeamMember_{{ $member->id }}" onclick="removeOverlay()">
                            <div class="card rounded w3-hover-shadow"  style="width: 200px; height: 280px; margin: 10px auto;">
                                <img class="w3-circle px-2 pt-2 m-auto" style="max-height: 160px; max-width: 100%" src="{{ asset($member->image) }}" alt="">
                                <div class="py-2 px-1 text-center">
                                    <div class="bold">{{ $member->name }}</div>
                                    <div class="w3-text-dark-grey">{{ $member->designation }}</div>
                                    <div class="w3-text-green">{{ $member->education }}</div>
                                    <div class="w3-text-green">{{ $member->mobile }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
            <div class="modal fade" id="serviceTeamMember_{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered- modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Our Team Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="rounded px-2 pt-2 m-auto" style="max-width: 100%" src="{{ asset($member->image) }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="h3 m-auto" style="color: black !important; font-family: 'Lobster Two', cursive;">
                                <i><u>{{ $member->branch->branch_name }}</u></i>
                            </div>
                            <div style="font-size: 15pt">
                                <table class="table table-borderless w3-text-dark-grey">
                                    <tr  class="pb-3">
                                        <th>Name</th>
                                        <th>:</th>
                                        <td>{{ $member->name }}</td>
                                    </tr>
                                    <tr  class="pb-3">
                                        <th>Designation</th>
                                        <th>:</th>
                                        <td>{{ $member->designation }}</td>
                                    </tr>
                                    <tr  class="pb-3">
                                        <th>Team</th>
                                        <th>:</th>
                                        <td>{{ $member->team_name }}</td>
                                    </tr>
                                    <tr  class="pb-3">
                                        <th>Education</th>
                                        <th>:</th>
                                        <td>{{ $member->education }}</td>
                                    </tr>
                                    <tr  class="pb-3">
                                        <th>Contact</th>
                                        <th>:</th>
                                        <td>{{ $member->mobile }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
                </div>
            </div>
                        @endforeach
                    </div>
                </div>

                    
                <div class="pt-4 mt-2 w-100 pb-3" style="background-color: #1fc8db;
                background-image: linear-gradient(
            70deg
            , #77b3eb 0%, #ddd344 50%, #dba0a5 75%);border-radius: 100px 30px;">
                    <div class="h3 text-white text-center py-2 bold">
                        IT Team
                    </div>
                    <div class="row" style="padding: 0 10px 0 10px;">
                        @foreach ($itTeam as $member)
                        <div class="col m-auto appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100"  data-toggle="modal" data-target="#itTeamMember_{{ $member->id }}" onclick="removeOverlay()">
                            <div class="card rounded w3-hover-shadow" style="width: 200px; height: 280px; margin: 10px auto;">
                                <img class="w3-circle px-2 pt-2 m-auto" style="max-height: 160px; max-width: 100%" src="{{ asset($member->image) }}" alt="">
                                <div class="py-2 px-1 text-center">
                                    <div class="bold">{{ $member->name }}</div>
                                    <div class="w3-text-dark-grey">{{ $member->designation }}</div>
                                    <div class="w3-text-green">{{ $member->education }}</div>
                                    <div class="w3-text-green">{{ $member->mobile }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
            <div class="modal fade" id="itTeamMember_{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered- modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Our Team Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="rounded px-2 pt-2 m-auto" style="max-width: 100%" src="{{ asset($member->image) }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="h3 m-auto" style="color: black !important; font-family: 'Lobster Two', cursive;">
                                <i><u>{{ $member->branch->branch_name }}</u></i>
                            </div>
                            <div style="font-size: 15pt">
                                <table class="table table-borderless w3-text-dark-grey">
                                    <tr class="pb-3">
                                        <th>Name</th>
                                        <th>:</th>
                                        <td>{{ $member->name }}</td>
                                    </tr>
                                    <tr class="pb-3">
                                        <th>Designation</th>
                                        <th>:</th>
                                        <td>{{ $member->designation }}</td>
                                    </tr>
                                    <tr class="pb-3">
                                        <th>Team</th>
                                        <th>:</th>
                                        <td>{{ $member->team_name }}</td>
                                    </tr>
                                    <tr class="pb-3">
                                        <th>Education</th>
                                        <th>:</th>
                                        <td>{{ $member->education }}</td>
                                    </tr>
                                    <tr class="pb-3">
                                        <th>Contact</th>
                                        <th>:</th>
                                        <td>{{ $member->mobile }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
                </div>
            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


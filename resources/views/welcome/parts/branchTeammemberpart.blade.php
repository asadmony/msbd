<div class="container-fluid" style="background-color: #fafafa">
    <div class="row">
        <div class="col-sm-12 p-0 m-0">
            <div class="text-center pb-3">
                <div class="h2 m-auto" style="color: purple !important; font-family: 'Lobster Two', cursive;">
                    <i><u>{{ $branch->branch_name }}</u></i>
                </div>
                <img src="{{ asset('img/leaf.png') }}" alt="{{ env('APP_NAME') }}">
            </div>
            <div class="row mx-1">
                <div class="col-md-6 m-0 px-1 pt-3 pb-3 "  >
                    <div class="w3-card">
                        <div class="h3 py-2 text-dark text-center bold">
                            Marketing Team
                        </div>
                                <div class="row">
                                    @foreach ($marketingTeam as $member)
                                    <div class="col m-auto appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="100"  data-toggle="modal" data-target="#marketingTeamMember_{{ $member->id }}" onclick="removeOverlay()">
                                        <div class="card border w3-hover-shadow"  style="width: 200px; height: 280px; margin: 10px auto;">
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
                                    <tr>
                                        <th>Name</th>
                                        <th>:</th>
                                        <td>{{ $member->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <th>:</th>
                                        <td>{{ $member->designation }}</td>
                                    </tr>
                                    <tr>
                                        <th>Team</th>
                                        <th>:</th>
                                        <td>{{ $member->team_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Education</th>
                                        <th>:</th>
                                        <td>{{ $member->education }}</td>
                                    </tr>
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
                        {{-- <div class="row" style="padding: 0 10px 0 30px;">
                            @foreach ($marketingTeam as $member)
                            <div class="col m-auto">
                                <div class="card border w3-hover-shadow"  style="width: 200px; height: 280px; margin: 10px auto;">
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
                </div>
                <div class="col-md-6 m-0 px-2">

                    <div class="p-1 mt-3 pt-3  pb-3 w3-card" >
                        <div class="h3 text-dark py-2 text-center bold">
                            CEO
                        </div>
                    <div class="row" style="padding: 0 10px 0 10px;">
                        @foreach ($ceos as $member)
                        <div class="col m-auto appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="100"  data-toggle="modal" data-target="#serviceTeamMember_{{ $member->id }}" onclick="removeOverlay()">
                            <div class="card border w3-hover-shadow"  style="width: 200px; height: 280px; margin: 10px auto;">
                                <img class="w3-circle- px-2 pt-2 m-auto" style="max-height: 160px; max-width: 100%" src="{{ asset($member->image) }}" alt="">
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
                                        <th>Telephone</th>
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

                    <div class="p-1 mt-2 pt-3 w3-card pb-3" >
                        <div class="h3 text-dark py-2 text-center bold">
                            Service Team
                        </div>
                    <div class="row" style="padding: 0 10px 0 10px;">
                        @foreach ($serviceTeam as $member)
                        <div class="col m-auto appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="100"  data-toggle="modal" data-target="#serviceTeamMember_{{ $member->id }}" onclick="removeOverlay()">
                            <div class="card border w3-hover-shadow"  style="width: 200px; height: 280px; margin: 10px auto;">
                                <img class="w3-circle- px-2 pt-2 m-auto" style="max-height: 160px; max-width: 100%" src="{{ asset($member->image) }}" alt="">
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
                <div class="pt-4 mt-2 w-100 pb-3 w3-card" >
                    <div class="h3 text-dark text-center py-2 bold">
                        IT Team
                    </div>
                    <div class="row" style="padding: 0 10px 0 10px;">
                        @foreach ($itTeam as $member)
                        <div class="col m-auto appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100"  data-toggle="modal" data-target="#itTeamMember_{{ $member->id }}" onclick="removeOverlay()">
                            <div class="card w3-hover-shadow" style="width: 200px; height: 280px; margin: 10px auto;">
                                <img class="w3-circle- px-2 pt-2 m-auto" style="max-height: 160px; max-width: 100%" src="{{ asset($member->image) }}" alt="">
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
                                <i><u>{{ $branch->branch_name }}</u></i>
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


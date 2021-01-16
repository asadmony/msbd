<section class="content-header">
    <h1>
        User
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            @include('alerts.alerts')
            <div class="box box-widget">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-th"></i> Edit information of ID:{{ $user->id }},
                        {{ $user->email }}, {{ $user->username }} @if ($user->isOffline())



                        <span class="w3-large w3-dark-gray w3-padding w3-round">Offline Profile</span>

                        @endif
                    </h3>
                    <div class="pull-right">

                    </div>

                </div>
                <div class="box-body" style="background: #eee;">






                    @include('common.users.includes.profilePicFormPart')

                    <div class="row">
                        <div class="col-sm-5">
                            @include('common.users.includes.publicPhotoUpload')
                            @include('common.users.includes.cvUpload')
                        </div>
                        <div class="col-sm-7">

                            @include('common.users.includes.branchPackageReferenceSupport')
                            {{-- @include('common.users.includes.adminConversationWithUser') --}}
                        </div>
                    </div>


                    <form role="form" method="post" action="{{route('common2.userDetailsUpdatePost',$user)}}">
                        {{csrf_field()}}

                        @include('common.users.includes.basicInfoFormPart')

                        @include('common.users.includes.familyInfoFormPart')

                        {{-- @include('admin.users.includes.contactInfoFormPart') --}}

                        {{-- @include('admin.users.includes.personalInfoFormPart') --}}

                        {{-- @include('admin.users.includes.personalActivityFormPart') --}}

                        {{-- @include('admin.users.includes.partnerPreferenceFormPart') --}}



                        <div class="box box-widget">
                            <div class="box-body">

                                <div class="pull-right">

                                    {{-- <div class="checkbox">
            <label>
                <input class=""
                type="checkbox"
                name="final_checked"

                {{$user->final_checked ? 'checked' : ''}}
                                    /> Checking Completed and Send SMS</label>
                                </div> --}}

                                <a class="btn btn-primary" target="_blank"
                                    href="{{route('user.userDetailsPrint', $user)}}">Print <i
                                        class="fa fa-print"></i></a>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </div>
                </div>



                </form>


            </div>
        </div>

    </div>
    </div>
    <!-- /.row -->


</section>

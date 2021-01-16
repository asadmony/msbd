
  <div class="main main-raised">
    <div class="profile-content">
        <div class="container">
    <div class="row">
        <div class="col-sm-12">
            

@include('user.includes.others.profileHeadForUpdate')

<br> 

<div class="row">
    <div class="col-sm-3">

@include('user.includes.others.myLeftLinks')
        
    </div>
    <div class="col-sm-9">

        @include('alerts.alerts')

        <div class="row">
            <div class="col-sm-6">
                @include('user.photos.includes.myPublicPhotos')
            </div>
            <div class="col-sm-6">
                @include('user.photos.includes.myPrivatePhotos')
            </div>
        </div>



        
    </div>
</div>
 

</div>
</div>
</div>
        </div>
    </div>

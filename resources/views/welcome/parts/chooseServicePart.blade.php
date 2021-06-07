
<div class="row">
    <div class="col-md-6 p-2">
      <a href="{{ route('user.choosePackage') }}">
        <div class="card w3-hover-orange w3-hover-shadow">
          <div class="card-body w3-large text-center py-4">
            <i class="fas fa-laptop fa-3x w3-text-blue"></i> <br> <br>
            {{ __('Choose Online Packages by yourself') }}
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 p-2">
    <a href="{{ route('user.serviceCenter') }}">
        <div class="card w3-hover-orange w3-hover-shadow">
          <div class="card-body w3-large text-center py-4">
            <i class="fas fa-building fa-3x w3-text-blue"></i> <br> <br>
            {{ __('Contact with our Service center to help you') }}
          </div>
        </div>
    </a>
    </div>
  </div>
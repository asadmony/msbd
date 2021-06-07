<div class="container">
    <div class="row">
      @foreach ($packages as $package)
      <div class="col-md-3 p-2">
          <div class="card w3-hover-blue w3-hover-shadow" style="min-height: 400px; cursor: pointer" id="package_{{ $package->id }}" onclick="selectPackage({{ $package->id }})">
            <div class="card-body w3-large text-center py-4">
              <img style="max-height: 120px; margin:auto" src="{{ asset($package->image()) }}" alt="">
              <div class="pt-4 bold">
                {{ $package->package_title }}
              </div>
              <div class="pt-3">
                {{ $package->package_description }}
              </div>
              <div class="pt-3">
                Duration: {{ $package->package_duration }} days
              </div>
              <div class="pt-3"> 
                Price: {{ $package->package_currency }} {{ $package->package_amount }} 
              </div>
            </div>
          </div>
      </div>
      @endforeach
    </div>
    <div class="text-center">
      <form action="{{ route('user.savePackage') }}" method="post">
        @csrf
        <input type="hidden" name="package" id="selectedPackage">

        <button class="btn btn-primary px-5" disabled><i class="fa fa-save"></i> Save</button>
      </form>
    </div>
    </div>

@push('js')
<script>
    function selectPackage(package) {
       $('button').removeAttr('disabled')
        var selectedPackage = $("#selectedPackage").val()
          if (selectedPackage) {
              $("#package_"+selectedPackage).removeClass('w3-purple')
              $("#package_"+selectedPackage).addClass('w3-hover-blue')
          }
        $("#package_"+package).removeClass('w3-hover-blue')
        $("#package_"+package).addClass('w3-purple')
        $("#selectedPackage").val(package)
    }
  </script>
@endpush


@extends('mobile.layout.base')
@push('css')
    <style>
        .selected{
        border: 4px solid green !important;
    }
    </style>
@endpush
@section('body')
<div class="container">
    <div class="h4 bold pt-3">
        Choose your favorite package
    </div>
    <div>
        **Please click on your desired package then click Save to continue
    </div>
    {{-- @include('welcome.parts.choosePackagePart') --}}


    <section class="scroll-horizontal padding-around">
        @foreach ($packages as $package)
        <div class="item card card-body" style="width: 95%" id="package_{{ $package->id }}" onclick="selectPackage({{ $package->id }})">
            <a href="#">
                <div class="img-wrap">
                    <img class="rounded-circle- img" src="{{ asset($package->image()) }}" alt="">
                </div>
                <div class="text-wrap pt-2 text-center">
                    <p class="text-truncate">
                        <b>{{ $package->package_title }}</b> <br>
                        {{ $package->package_description }} <br>
                        Duration: {{ $package->package_duration }} days <br>
                        Price: {{ $package->package_currency }} {{ $package->package_amount }} 
                    </p>
                </div>
            </a>
        </div>
      @endforeach
    </section>
    <div class="text-center pt-4">
        <form action="{{ route('user.savePackage') }}" method="post">
          @csrf
          <input type="hidden" name="package" id="selectedPackage">
  
          <button class="btn btn-primary px-5" disabled><i class="fa fa-save"></i> Save</button>
        </form>
      </div>
</div>
@endsection
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
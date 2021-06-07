@push('css')
    <link rel="stylesheet" href="{{ asset('css/Member.css') }}">
@endpush
<div class="container-fluid- m-0 p-0">


<!-- Membership -->
<div class="membership container text-center mb-0 pb-0">
  {{-- <h1 class="text-uppercase fw-bold">Membership Packages</h1> --}}
  <div class="row">
    @foreach ($packages as $package)
    <div class="col-12 col-lg-6 col-xl-3 text-center">
      <div class="card card1 border-0">
        <div>
          <div>
            <img src="{{ asset('storage/package/'.$package->image_name) }}" class="img-fluid" alt="" />
          </div>
          <h4>{{ $package->package_title }}</h4>
          <hr class="hr_1" />
        </div>
        <div class="card-body">
          <h2>CONTACT US</h2>
          <a href="tel:{{ $package->contact_person_number }}" class="btn" onclick="showNumber('person_1_{{ $package->id }}')">Call {{ $package->contact_person_name }}</a>
          <span id="person_1_{{ $package->id }}" class="w3-large" style="display: none">{{ $package->contact_person_number }}</span>
          <a href="tel:{{ $package->second_person_number }}" class="btn px-1" onclick="showNumber('person_2_{{ $package->id }}')">Call {{ $package->second_person_name }}</a>
          <span id="person_2_{{ $package->id }}" class="w3-large" style="display: none">{{ $package->second_person_number }}</span>
        </div>
      </div>
    </div>
    @endforeach

  </div>
  <div class="lists px-5 my-0 pb-5">
    <ul>
      <li  class="appear-animation " data-appear-animation="fadeInLeft" data-appear-animation-delay="400">
        Dear client, you will be part of the most reliable & reputed
        matrimonial service provider in Bangladesh.
      </li>
      <li  class="appear-animation " data-appear-animation="fadeInRight" data-appear-animation-delay="400">We create specific profile according to your requirement.</li>
      <li  class="appear-animation " data-appear-animation="fadeInLeft" data-appear-animation-delay="400">
        Dedicated ‘Relationship Manager’ throughout your service period.
      </li>
      <li  class="appear-animation " data-appear-animation="fadeInRight" data-appear-animation-delay="400">
        Relationship Manager confirms the prospect’s interest to value your
        precious time.
      </li>
      <li  class="appear-animation " data-appear-animation="fadeInLeft" data-appear-animation-delay="400">
        Discreet & Confidential service is ensured. Your RM will go the
        extra mile to look for the perfect match for you.
      </li>
      <li  class="appear-animation " data-appear-animation="fadeInRight" data-appear-animation-delay="400">
        Our marriage counselors are committed to guide your journey with us.
      </li>
    </ul>
  </div>

  <div class="text mb-0 pb-0">
    <h1 class="fw-bold bold text-uppercase w3-xxlarge" style="color: #605154; font-family: 'Segoe UI',Arial,sans-serif !important; font-weight: 400;">We are here to Help!</h1>
    <div class="text-center mb-0 pb-0">
      <div class="col-md-8 offset-lg-2 offset-md-2 lists text-left py-0 my-0">
        <ul type=" mb-0 pb-0">
          <li  class="appear-animation " data-appear-animation="fadeInLeft" data-appear-animation-delay="400">
            Marriage Solution BD is devoted to serve your account for 1 year at
          any given package.
          </li>
          <li  class="appear-animation " data-appear-animation="fadeInRight" data-appear-animation-delay="400">We do not entertain any fraudulent profiles for match-making services.
          Your profile is safe with us.</li>
          <li  class="appear-animation " data-appear-animation="fadeInLeft" data-appear-animation-delay="400">
            ‘Non Resident Bangladeshi’ clients are assisted to match their perfect
          partners.
          </li>
          <li  class="appear-animation " data-appear-animation="fadeInRight" data-appear-animation-delay="400">
            We help to create bridges for separated/divorced clients as well.
          </li>
          <li  class="appear-animation " data-appear-animation="fadeInLeft" data-appear-animation-delay="400">
            Your payment has become easier through bKash, Nagad & other banking
          services
          </li>
          <li  class="appear-animation " data-appear-animation="fadeInRight" data-appear-animation-delay="400">
            24/7 customer support for your inquiries.
          </li>
        </ul>
      </div>
    </div>

  </div>
</div>
<!-- !Membership -->

</div>

@push('js')
  <script>
    function showNumber(div) {
      $('#'+div).toggle()
    }
  </script>
@endpush
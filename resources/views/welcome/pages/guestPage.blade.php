@extends('welcome.layouts.guestWelcomeMaster')

@section('title')
{{ $page->page_title }} | {{env('APP_NAME_BIG')}}
@endsection

@section('meta')
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('prt/vendor/rs-plugin/css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('prt/vendor/rs-plugin/css/layers.css') }}">
<link rel="stylesheet" href="{{ asset('prt/vendor/rs-plugin/css/navigation.css') }}">
<link rel="stylesheet" href="{{ asset('prt/vendor/circle-flip-slideshow/css/component.css') }}">

<style>
    @import url('https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Ubuntu:400,500,700');

    .lob-font {
        font-family: 'Lobster Two', cursive;
    }

    .lobster {
        font-family: 'Lobster Two', cursive;
        line-height: 95px;
        letter-spacing: 1px;
        font-weight: 800 !important;
        font-size: 79px;
    }

    .sd {
        opacity: 0.7 !important;
    }

    h2.married-date {
        background: rgba(0, 0, 0, 0) url(svg/red_hidding_bg.svg) no-repeat scroll center center / contain;
        display: inline-block;
        font-size: 40px;
        font-weight: 400;
        margin-bottom: 0;
        padding: 5px 100px 10px;
        color: #fff;
    }

    .sda {
        padding-top: 8rem !important;
    }

    .timeline-box {
        opacity: 0.7;
        background-color: #ffff;
    }
    tr{
        line-height: 1;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/Payment.css') }}">
@endpush

@section('header')
@include('welcome.layouts.guestWelcomeHeaderAlt')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 p-0 m-0">

            @if ($page->id == 20)
                <!-- Payment -->
    <div class="container payment">
        {{-- <h1 class="fw-bold text-uppercase">Payment Method</h1> --}}
        <div class="row container">
          <div class="col-lg-6 col-md-12 col-sm-12 my-3">
            <div class="card shadow border-0  h-100" style="width: 35rem">
              <div class="card-body">
                <h5 class="card-title mx-auto">BANK PAYMENT</h5>
                <h6 class="card-subtitle mb-2">
                  <img src="{{ asset('img/dbbl.png') }}" class="img-fluid" alt="" />
                </h6>
                <p class="card-text">
                 <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td>Bank Name</td>
                          <th>Dutch Bangla Bank Ltd.</th>
                        </tr>
                        <tr>
                          <td>Branch</td>
                          <th>Mohammadpur, Dhaka</th>
                        </tr>
                        <tr>
                          <td>Account Name</td>
                          <th>Marriage Solution BD</th>
                        </tr>
                        <tr>
                          <td>Account No</td>
                          <th>258.110.3970</th>
                        </tr>
                        <tr>
                          <td>Online Tracking No.</td>
                          <th>090263286</th>
                        </tr>
                      </tbody>
                    </table>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 my-3">
            <div class="card shadow border-0  h-100" style="width: 35rem">
                 <div class="card-body">
                   <h5 class="card-title mx-auto">BKASH PAYMENT</h5>
                   <h6 class="card-subtitle mb-2">
                     <img src="{{ asset('img/bkash.png') }}" class="img-fluid bkash" alt="" />
                   </h6>
                   <p class="card-text">
                    <table class="table table-borderless mt-4">
                         <tbody>
                           <tr>
                             <td>bKash Account 1</td>
                             <th>01720504504</th>
                           </tr>
                           <tr>
                             <td>bKash Account 2</td>
                             <th>01633036062</th>
                           </tr>
                           
                         </tbody>
                       </table>
                   </p>
                 </div>
               </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 my-3">
            <div class="card shadow border-0  h-100" style="width: 35rem">
                 <div class="card-body">
                   <h5 class="card-title mx-auto">ROCKET PAYMENT</h5>
                   <h6 class="card-subtitle mb-2 pt-4">
                     <img style="max-width: 50%; margin:auto;" src="{{ asset('img/rocket.jpg') }}" class="img-fluid bkash" alt="" />
                   </h6>
                   <p class="card-text">
                    <table class="table table-borderless mt-4">
                         <tbody>
                           <tr>
                             <td>Rocket Account</td>
                             <th>018198739430</th>
                           </tr>
                         </tbody>
                       </table>
                   </p>
                 </div>
               </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 my-3">
            <div class="card shadow border-0  h-100" style="width: 35rem">
                 <div class="card-body">
                   <h5 class="card-title mx-auto">NAGAD PAYMENT</h5>
                   <h6 class="card-subtitle mb-2 pt-4">
                     <img style="max-width: 50%; margin:auto;" src="{{ asset('img/nagad.png') }}" class="img-fluid bkash" alt="" />
                   </h6>
                   <p class="card-text">
                    <table class="table table-borderless mt-4">
                         <tbody>
                           <tr>
                             <td>Nagad Account</td>
                             <th>01720504504</th>
                           </tr>
                         </tbody>
                       </table>
                   </p>
                 </div>
               </div>
          </div>
        </div>
      </div>
      <!-- !Payment -->
            @else
                
            @include('common.pages.parts.pageBody')
            @endif

        </div>
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function(){
  });
</script>
@endpush

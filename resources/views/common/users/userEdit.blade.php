@extends('admin.layouts.adminMaster')

@push('css')

  <!-- cropperjs-->
    <link href="{{asset('assets/cropperjs-master/dist/cropper.min.css')}}" rel='stylesheet' type='text/css'>

<link href="{{asset('css/userProfile.css')}}" rel="stylesheet" />
@endpush

@section('content')
  @include('common.users.parts.userEdit')
@endsection


@push('js')
<!-- cropperjs -->
 @if (servTru()) 
     <script src="{{asset('assets/cropperjs-master/dist/cropper.js')}}"></script>
 @endif

<script src="{{asset('js/userProfile.min.js')}}"></script>
<script>
  $(document).ready(function () {
  $('.select2').select2({});
});

  $(document).ready(function(){
    $(document).on('change', '.change-with-other', function(e){
      // e.preventDefault();
      // alert('ok');      
      var that = $(this);
      var val = that.val();
      if((val == 'Other') || (val == 'Others'))
      {
        that.closest('.other-area').find('.other-value-field').slideDown();
      }
      else
      {
        that.closest('.other-area').find('.other-value-field').slideUp();
      }
    });   
  });
</script>


<script>
  $(document).ready(function () {
  $('.step2-select').select2({
    // minimumInputLength: 1,
    ajax: {
      data: function (params) {
        return {
          q: params.term, // search term
          page: params.page
        };
      },
      processResults: function (data, params) {
        params.page = params.page || 1;
        // alert(data[0].s);
        var data = $.map(data, function (obj) {
          obj.id = obj.id || obj.email;
          return obj;
        });
        var data = $.map(data, function (obj) {
          obj.text = obj.text || obj.email;
          return obj;
        });
        return {
          results: data,
          pagination: {
            more: (params.page * 30) < data.total_count
          }
        };
      }
    },
  });
});
</script>

<script src="{{asset('js/location.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcjU4Z83IrRvF3DdDYqsBW66_2eUC8krU&libraries=places&callback=initAutocomplete"
    async defer></script>



@endpush


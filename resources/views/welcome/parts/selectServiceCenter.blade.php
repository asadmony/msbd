
@push('css')
    <style>
        .selected{
        border: 4px solid green !important;
    }
    </style>
@endpush
<div class="container">
    **Please click on your nearest branch then click on a contact person then Save to continue
      <div class="row">
          @foreach ($branches as $branch)
          <div class="col-md-4 col-sm-6 p-2" style="cursor: pointer;" onclick="selectBranch({{ $branch->id }},'{{ route('user.branchContactPersons', [$branch->id]) }}')">
                  <div class="card card_{{ $branch->id }} " style="min-height: 200px;">
                        <div class="card-body">
                            {{-- <div class="p-2">
                                {!! $branch->map !!}
                            </div> --}}
                            <div class="h3 bold">{{ $branch->branch_name }}</div>
                            <div class="text-2">{{ $branch->address }}</div>
                            <div class="w3-medium bold pt-1">Contact: {{ $branch->mobile }}</div>
                        </div>
                  </div>
          </div>
          @endforeach
      </div>
      <div class="container">
        <div class="h3 bold  text-dark">
          Select Contact Person
        </div>
      </div>
      <div class="row" id="contact_persons">
          *please select the branch first
      </div>
      <div class="text-center">
          <form action="{{ route('user.attachBranch') }}" method="post">
              @csrf
              <input type="hidden" id="branch" name="branch" value="">
              <input type="hidden" id="contact_person" name="contact_person" value="">
              <button class="btn btn-primary px-5" disabled> <i class="fa fa-save"></i> Save</button>
          </form>
      </div>
      </div>


      @push('js')
      
<script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
          <script>
                function selectBranch(branch, url) {
    $('button').attr('disabled', '')
    $("#contact_person").val('')
      var selectedBranch = $("#branch").val()
        if (selectedBranch) {
            $(".card_"+selectedBranch).removeClass('w3-purple')
        }
      $(".card_"+branch).addClass('w3-purple')
      $("#branch").val(branch)
      $('#contact_persons').html(' ')
      axios.get(url).then(res=>{
        if (res.data.length > 0) {
          res.data.forEach(item=>{
            if (item.user.img_name) {
              var pp = window.location.origin+'/storage/users/pp/'+item.user.img_name
            }else{
              var pp = window.location.origin+'/img/ppm.jpg'
            }
            $('#contact_persons').append(`
            <div class="col-md-3 p-1">
              <div class="card">
              <div class="card-body p-2 border rounded" style="cursor: pointer;" id="cont_person_${item.id}" onclick="selectContactPerson(${item.id})">
                <div class="text-center"><img style="max-width: 160px; margin:auto;" src="${pp}" alt=""></div>
              <div> <b>Name: </b> ${item.user.name}</div>
              <div><b>Contact: </b> ${item.user.mobile}</div>
            </div>
            </div>
            </div>
            `)
          })
        }else{
          $('#contact_persons').append(`
          None is available for contact at this branch.
          `)
        }
      })
      
  }
  function selectContactPerson(id) {
    var selctedContact = $("#contact_person").val()
        if (selctedContact) {
            $("#cont_person_"+selctedContact).removeClass('w3-purple')
        }
    $("#cont_person_"+id).addClass('w3-purple')
    $("#contact_person").val(id)

    $('button').removeAttr('disabled')
  }
          </script>
      @endpush
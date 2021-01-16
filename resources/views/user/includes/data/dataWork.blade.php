<div class="w3-border-top w3-border-light-gray">
<h3 class="mt-0"> <i class="fa fa-briefcase"></i> Works & Experiences</h3>
<div style="min-height: 10px;">



@if($user->educations()->count())

<div class="table-responsive">
  <table class="table table-striped table-condensed">
    <thead>
      <tr>
        <th>SL</th>
        <th>Work Information</th>
      </tr>
    </thead>
    <tbody>
      @foreach($user->works() as $work)
      <tr>



<td>
  {{ $loop->iteration }}
</td>
<td>
  <span> <b>Works as <strong>{{$work->working_role}}</strong> at <strong>{{$work->company_name}}</strong> From {{date("F jS, Y",strtotime($work->joining_date))}} to {{$work->leave_date ? date("F jS, Y",strtotime($work->leave_date)) : 'till now'}}</b></span>
</td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endif

</div>
</div>
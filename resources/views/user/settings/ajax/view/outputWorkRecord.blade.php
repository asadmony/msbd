<strong><i class="fa fa-briefcase margin-r-5"></i>  Work</strong>
<br/>
@if($me->hasWork())
@foreach($me->works() as $work)
<span> <b>Works as <strong>{{$work->working_role}}</strong> at <strong>{{$work->company_name}}</strong> From {{date("F jS, Y",strtotime($work->joining_date))}} to {{$work->leave_date ? date("F jS, Y",strtotime($work->leave_date)) : 'till now'}}</b></span>


&nbsp;

<span title="Delete this Information" class="w3-btn w3-small delete-edu-work  p-0 pl-1 pr-1 w3-round w3-border-red w3-border" data-url="{{route('user.settingWorkDelete',['work'=>$work])}}">
    <i class="fa fa-trash text-red"></i>
</span>

<br/>
@endforeach
@endif

  <hr class="w3-border-purple">
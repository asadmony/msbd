<h5> <i class="fa fa-book"></i> Education</h5>
@if($user->educations()->count())

<div class="table-responsive">
  <table class="table table-striped table-condensed">
    <thead>
      <tr>
        <th>Exam Title</th>
        <th>Concentration/Dept</th>
        <th>Institute</th>
        <th>Session</th>
        <th>Pas. Year</th>
        {{-- <th>Result</th>   --}}
      </tr>
    </thead>
    <tbody>
      @foreach($user->educations() as $edu)
      <tr>
        <td>{{ $edu->passed_degree }}</td>
        <td>{{ $edu->passed_department }}</td>
        <td title="{{  'Type: '.$edu->organization_type. ', Address:'.$edu->organization_address }}" data-toggle="tooltip">{{ $edu->organization_name }}</td>
        <td>{{date('Y', strtotime($edu->year_from)).' - '.date('Y', strtotime($edu->year_to))}}</td>
        <td>{{ date('Y', strtotime($edu->passed_year))}}</td>
        {{-- <td>{{ $edu->passed_grade }}</td> --}}
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endif
<hr>

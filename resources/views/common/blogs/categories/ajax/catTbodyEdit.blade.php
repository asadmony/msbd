<tbody>
	<tr>
		<td style="width: 50px;">{{$cat->id}}</td>
		<td>

			<form class="form-inline form-cat-update" method="post" action="{{route('commonblog.categoryUpdate',$cat)}}">

			  <div class="form-group">
			    <input type="text" value="{{$cat->title}}" name="name" class="form-control input-sm cat-input" style="min-width: 450px;">
			  </div>
			  <div class="form-group">
			    <input type="text" value="{{$cat->title_bn}}" name="name_bn" class="form-control input-sm cat-input" placeholder="বাংলা" style="min-width: 450px;">
			  </div>

			  <button type="submit" class="btn btn-xs btn-warning pull-right">Update</button>
			</form>
		</td>
		<td style="width: 100px;"></td>
	</tr>
</tbody>
<td>

	<img class="img-responsive" width="100" src="{{asset($gallery->fi())}}">
<?php $gallery->tempItemsDelete(); ?>

</td>
<td>
	<b>ID:</b> {{$gallery->id}} <br> 
	<b>Items:</b> {{$gallery->items()->count()}} <br>
	<b>Status:</b> {{$gallery->publish_status}}
</td>
<td>
	<b>Title:</b> {{$gallery->title}} <br>
	<b>Date:</b> {{ date('d-M-Y', strtotime($gallery->date)) }}
</td>
<td>
	<b>Description:</b> {{$gallery->description}}
</td>

<td width="100">


	<div class="btn-group btn-group-xs pull-right ">
		<a class="btn btn-primary"  href="{{route('common1.imgGalleryEdit',$gallery)}}">Edit</a>
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">

			<li><a  target="_blank" href="{{route('welcome.gallery',$gallery)}}">Details</a></li>

			<li><a href="{{route('common1.imgGalleryDelete',$gallery)}}" onclick="return confirm('Do you really want to delete this gallery?');">Delete</a></li>
		</ul>                  
	</div>

</td>
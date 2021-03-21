  <div class="main main-raised">
    <div class="profile-content ">
        <div class="container ">

        	<br> <br>

        <div class="row">
        <div class="col-sm-7">


  


  <div class="card card-plain">
	 
        <img src="{{asset($post->fi())}}"   alt="{{ $post->title }}" class="img-raised rounded img-fluid">

 

        <h1 class="card-title w3-xxlarge">
          
                    {{ $post->title }}
              

<br>
            <small class="card-description text-muted w3-large"> 
            	 {{$post->cats()}}

            </small>

        </h4>



        <div class="card-body">
                <p class="card-descriptions">{!! $post->description !!}</p>
            </div>
    
    </div>



  <div class="box box-widget">
  	<div class="box-body">
  		<p class="w3-large">Related Posts</p>
  	</div>
  </div>

    @foreach ($relatedPosts as $post)
	<div class="row">
		<div class="col-sm-5">
			<div class="card card-plain">
				<a href="{{ route('blogPostDetails', ['post'=>$post,'title'=>new_slug($post->title)]) }}">
                    <img src="{{asset($post->fi())}}"   alt="{{ $post->title }}" class="img-raised rounded img-fluid">
                </a>
                </div>

		</div>
		<div class="col-sm-7">
<br>
			<h4 class="card-title">
        <a href="{{ route('blogPostDetails', ['post'=>$post,'title'=>new_slug($post->title)]) }}">
                    {{ $post->title }}
                </a>

<br>
            <small class="card-description text-muted"> 
            	 {{$post->cats()}}

            </small>

        </h4>
            <div class="card-bodys">
                <p class="card-descriptions">{{ $post->excerpt }}</p>
            </div>
			
		</div>
	</div>
@endforeach
 
 

</div>

<div class="col-sm-5">

	 

<div class="box box-widget">
     			<div class="box-body">
     				
     			<p class="w3-large">Latest</p>
     			</div>
     		</div>

@foreach ($rightSidePosts as $post)
	<div class="row">
		<div class="col-sm-5">
			<div class="card card-plain">
				<a href="{{ route('blogPostDetails', ['post'=>$post,'title'=>new_slug($post->title)]) }}">
                    <img src="{{asset($post->fi())}}"   alt="{{ $post->title }}" class="img-raised rounded img-fluid">
                </a>
                </div>

		</div>
		<div class="col-sm-7">
<br>
			<h4 class="card-title">
        <a href="{{ route('blogPostDetails', ['post'=>$post,'title'=>new_slug($post->title)]) }}">
                    {{ $post->title }}
                </a>

<br>
            <small class="card-description text-muted"> 
            	 {{$post->cats()}}

            </small>

        </h4>
            <div class="card-bodys">
                <p class="card-descriptions">{{ $post->excerpt }}</p>
            </div>
			
		</div>
	</div>
@endforeach
	

 


           
	
</div>
</div>
</div>
        </div>
    </div>

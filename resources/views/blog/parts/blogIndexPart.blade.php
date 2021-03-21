  <div class="main main-raised">
    <div class="profile-content ">
        <div class="container ">

        	<br> <br>

        <div class="row">
        <div class="col-sm-7">


<div class="box box-widget">
     			<div class="box-body">
     				
     			<p class="w3-large">Blog</p>
     			</div>
     		</div>


        <!--         carousel  -->
        <div class="" id="carousel">
             
                 

        <!-- Carousel Card -->
        <div class="card card-raised card-carousel">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">



                
                <ol class="carousel-indicators">


                	@foreach($frontSliderPosts as $post)

                	<li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>

					@endforeach
                                     
                                </ol>

                                <div class="carousel-inner">

                                	@foreach($frontSliderPosts as $post)

                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    	<a href="{{ route('blogPostDetails', ['post'=>$post,'title'=>new_slug($post->title)]) }}">
                                    		
                                        <img class="d-block w-100" src="{{asset($post->fi())}}" alt="{{ $post->title }}">
                                    	</a>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4>
                                                {{ $post->title }}
                                            </h4>
                                        </div>
                                    </div>


                                    @endforeach

                                     
                                    
                                </div>



                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <i class="material-icons">keyboard_arrow_left</i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <span class="sr-only">Next</span>
                                </a>


                            </div>
                        </div>
                        <!-- End Carousel Card -->    
        </div>
        <!--         end carousel -->



  @foreach ($posts as $post)
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



{{ $posts->render() }}


 
 

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

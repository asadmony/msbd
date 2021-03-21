@extends('welcome.layouts.guestWelcomeMaster')

@section('title')

{{ $post->title  }}| Blog |{{ env('APP_NAME_BIG') }} | Matrimony Service in Bangladesh | Marriage Media Service provider in Bangladesh |
Matchmaker Service in Bangladesh

@endsection

@section('meta')
    <meta name="description" 
    	content="{{ $post->meta_description ?: 'Matrimony Service in Bangladesh' }}">
        <meta name="title" content="{{ $post->meta_title ?: 'Marriage Solution' }}">
		<meta name="keywords" content="{{ $post->meta_keywords ?: 'Matchmaker Service in Bangladesh' }}">
@endsection

@push('css')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
@endpush

@section('header')
{{-- @include('welcome.layouts.guestWelcomeHeader') --}}
@endsection
@section('content')


@include('welcome.layouts.guestWelcomeHeaderAlt')

<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">

                    <h1 class="text-dark font-weight-bold text-8">{{ $post->title }}</h1>
                </div>

                <div class="col-md-12 align-self-center order-1">

                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/">Home</a></li>
                        <li class=""><a href="{{ route('blog') }}"> Blog</a></li>
                        <li class=""><a href="{{ route('blog') }}"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col-lg-9 order-lg-1">
                <div class="blog-posts single-post">
                
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ml-0">
                            <a href="blog-post.html">
                                <img src="{{ $post->fi() }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>
                
                        <div class="post-date ml-0">
                            <span class="day">{{ now()->parse($post->created_at)->format('d') }}</span>
                            <span class="month">{{ now()->parse($post->created_at)->format('M') }}</span>
                        </div>
                
                        <div class="post-content ml-0">
                
                            <h2 class="font-weight-bold"><a href="">{{ $post->title }}</a></h2>
                
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> By <a href="#">{{ env('APP_NAME') }}</a> </span>
                                <span><i class="far fa-folder"></i> 
                                    @foreach ($post->blogCategories as $catItem)
                                    @if ($loop->iteration > 1)
                                     , 
                                    @endif
                                    <a href="#">{{ $catItem->title }}</a>
                                    @endforeach </span>
                                {{-- <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> --}}
                            </div>

                            <p>{!! $post->description !!}</p>
                
                
                            <div class="post-block mt-5 post-share">
                                <h4 class="mb-3">Share this Post</h4>
                
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                <!-- AddThis Button END -->
                
                            </div>
                
                            {{-- <div class="post-block mt-4 pt-2 post-author">
                                <h4 class="mb-3">Author</h4>
                                <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                    <a href="blog-post.html">
                                        <img src="img/avatars/avatar.jpg" alt="">
                                    </a>
                                </div>
                                <p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block">John Doe</a></strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
                            </div> --}}
                
{{-- <div id="comments" class="post-block mt-5 post-comments">
                                <h4 class="mb-3">Comments (3)</h4>
                
                                <ul class="comments">
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                <img class="avatar" alt="" src="img/avatars/avatar-2.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                    <strong>John Doe</strong>
                                                    <span class="float-right">
                                                        <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                                    </span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                                                <span class="date float-right">January 12, 2020 at 1:38 pm</span>
                                            </div>
                                        </div>
                
                                        <ul class="comments reply">
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                        <img class="avatar" alt="" src="img/avatars/avatar-3.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                            <strong>John Doe</strong>
                                                            <span class="float-right">
                                                                <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                                            </span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                        <span class="date float-right">January 12, 2020 at 1:38 pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                        <img class="avatar" alt="" src="img/avatars/avatar-4.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                            <strong>John Doe</strong>
                                                            <span class="float-right">
                                                                <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                                            </span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                        <span class="date float-right">January 12, 2020 at 1:38 pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                <img class="avatar" alt="" src="img/avatars/avatar.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                    <strong>John Doe</strong>
                                                    <span class="float-right">
                                                        <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                                    </span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <span class="date float-right">January 12, 2020 at 1:38 pm</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                <img class="avatar" alt="" src="img/avatars/avatar.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                    <strong>John Doe</strong>
                                                    <span class="float-right">
                                                        <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
                                                    </span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <span class="date float-right">January 12, 2020 at 1:38 pm</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                
                            </div>
                
                            <div class="post-block mt-5 post-leave-comment">
                                <h4 class="mb-3">Leave a comment</h4>
                
                                <form class="contact-form p-4 rounded bg-color-grey" action="php/contact-form.php" method="POST">			
                                    <div class="p-2">
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <label class="required font-weight-bold text-dark">Full Name</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label class="required font-weight-bold text-dark">Email Address</label>
                                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark">Comment</label>
                                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col mb-0">
                                                <input type="submit" value="Post Comment" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                
                        </div> --}}
                    </article>
                
                </div>
            </div>
            
            <div class="col-lg-3 order-lg-2">
                <aside class="sidebar">
                    @include('welcome.blog.parts.rightSideSearch')

                    @include('welcome.blog.parts.rightSideCategories')

                    @include('welcome.blog.parts.rightSidePosts')
                    
                    
                    <div class="h3 w3-text-purple font-weight-bold pt-4 text-center">
                        
                        <img src="{{ asset('img/logo.png') }}" alt="{{ env('APP_NAME_BIG') }}">  <br> <br> 

                        {{ $websiteParameter->slogan }}
                    </div>
                    {{-- <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p> --}}
                    <div id="instafeedNoMargins" class="mb-4 pb-1"></div>
                    <h5 class="font-weight-bold pt-4 mb-2">Tags</h5>
                    <div class="mb-3 pb-1">
                        @php
                            $tags = explode(',', $post->tags)
                        @endphp
                        @foreach ($tags as $item)
                        <a href=""><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">{{ $item }}</span></a>
                        @endforeach
                    </div>  
                </aside>
            </div>
        </div>

    </div>

</div>


@endsection

@push('js')
@endpush



    <div class="container py-4">

        <div class="row">
            <div class="col-lg-3 order-lg-2">
                <aside class="sidebar">
                    @include('welcome.blog.parts.rightSideSearch')

                    @include('welcome.blog.parts.rightSideCategories')

                    @include('welcome.blog.parts.rightSidePosts')
                    
                    <div class="h3 w3-text-purple font-weight-bold pt-4 text-center">
                        <img src="{{ asset('img/logo.png') }}" alt="{{ env('APP_NAME_BIG') }}">  <br> <br>
                        {{ $websiteParameter->slogan }}
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 order-lg-1">
                <div class="blog-posts">

                    @foreach ($posts as $postItem)
                        @include('welcome.blog.parts.blogCard')
                    @endforeach
                    

                    {{ $posts->links() }}

                </div>
            </div>
        </div>

    </div>

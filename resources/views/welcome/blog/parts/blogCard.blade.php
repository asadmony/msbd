@isset($postItem)
<article class="post post-medium">
    <div class="row mb-3">
        <div class="col-lg-5">
            <div class="post-image">
                <a href="{{ route('blogPostDetails', [$postItem->id, Str::slug($postItem->title)]) }}">
                    <img src="{{ asset($postItem->fi()) }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                </a>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="post-content">
                <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="{{ route('blogPostDetails', [$postItem->id, Str::slug($postItem->title)]) }}">
                    {{ $postItem->localeTitle }}
                    {{-- @if (Cookie::get('locale') == 'bn')
                    {{ $postItem->title_bn }}
                    @else
                    {{ $postItem->title }}
                    @endif --}}
                </a></h2>
                <p class="mb-0">
                    {{ Str::limit($postItem->localeExcerpt, 300, '...') }}
                    {{-- @if (Cookie::get('locale') == 'bn')
                    {{ Str::limit($postItem->excerpt_bn, 300, '...') }}
                    @else
                    {{ Str::limit($postItem->excerpt, 300, '...') }}
                    @endif --}}
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="post-meta">
                <span><i class="far fa-calendar-alt"></i> {{ now()->parse($postItem->created_at)->format('d-M-Y') }} </span>
                <span><i class="far fa-user"></i> By <a href="/">{{ env('APP_NAME') }}</a> </span>
                <span>
                    <i class="far fa-folder"></i> 
                    @foreach ($postItem->blogCategories as $catItem)
                    @if ($loop->iteration > 1)
                     , 
                    @endif
                    <a href="{{ route('blogCategory', [$catItem, Str::slug($catItem->title)]) }}">
                        @if (Cookie::get('locale') == 'bn')
                        {{ $catItem->title_bn }}
                        @else
                        {{ $catItem->title }}
                        @endif
                    </a>
                    @endforeach
                </span>
                {{-- <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> --}}
                <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="{{ route('blogPostDetails', [$postItem->id, Str::slug($postItem->title)]) }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
            </div>
        </div>
    </div>
</article>
@endisset
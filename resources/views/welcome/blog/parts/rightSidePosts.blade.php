<div class="tabs tabs-dark mb-4 pb-2">
    <ul class="nav nav-tabs">
        <li class="nav-item active"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">Popular</a></li>
        <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-toggle="tab">Recent</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="popularPosts">
            <ul class="simple-post-list">
                @foreach ($popularPosts as $item)
                    
                <li>
                    <div class="post-image">
                        <div class="img-thumbnail img-thumbnail-no-borders d-block">
                            <a href="{{ route('blogPostDetails', [$item->id, Str::slug($item->title)]) }}">
                                <img src="{{ $item->fi() }}" width="50" height="50" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="post-info">
                        <a href="{{ route('blogPostDetails', [$item->id, Str::slug($item->title)]) }}">{{ Str::limit($item->title, 100, '...') }}</a>
                        <div class="post-meta">
                             {{ now()->parse($item->created_at)->format('d-M-Y') }}
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="tab-pane" id="recentPosts">
            <ul class="simple-post-list">
                @foreach ($recentPosts as $item)
                    
                <li>
                    <div class="post-image">
                        <div class="img-thumbnail img-thumbnail-no-borders d-block">
                            <a href="{{ route('blogPostDetails', [$item->id, Str::slug($item->title)]) }}">
                                <img src="{{ $item->fi() }}" width="50" height="50" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="post-info">
                        <a href="{{ route('blogPostDetails', [$item->id, Str::slug($item->title)]) }}">{{ Str::limit($item->title, 100, '...') }}</a>
                        <div class="post-meta">
                            {{ now()->parse($item->created_at)->format('d-M-Y') }}
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
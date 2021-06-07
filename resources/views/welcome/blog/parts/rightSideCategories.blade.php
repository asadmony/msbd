@if (isset($categories) && $categories->count() > 0)
    
<h5 class="font-weight-bold pt-4">{{ __('Categories') }}</h5>
                    <ul class="nav nav-list flex-column mb-5">
                        @foreach ($categories as $cat)
                            
                        <li class="nav-item"><a class="nav-link" href="{{ route('blogCategory', [$cat, Str::slug($cat->title)]) }}">
                            {{ $cat->title }} / {{ $cat->title_bn }} ({{ $cat->posts->count() }})
                            {{-- @if(Cookie::get('locale') == 'bn')
                                {{ $cat->title_bn }}
                            @else
                                {{ $cat->title }}
                            @endif --}}
                        </a></li>
                        @endforeach
                        {{-- <li class="nav-item">
                            <a class="nav-link active" href="#">Photos (4)</a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
                                <li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">People</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                    @endif
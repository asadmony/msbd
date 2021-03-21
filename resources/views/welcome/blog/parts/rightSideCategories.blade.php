@if (isset($categories) && $categories->count() > 0)
    
<h5 class="font-weight-bold pt-4">Categories</h5>
                    <ul class="nav nav-list flex-column mb-5">
                        @foreach ($categories as $category)
                            
                        <li class="nav-item"><a class="nav-link" href="#">{{ $category->title }}</a></li>
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
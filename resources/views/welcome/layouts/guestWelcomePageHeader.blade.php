<section class="page-header page-header-modern bg-color-light-scale-1-  bg-color-custom page-header-md mb-0">
    <div class="container">
        <div class="row">


            <div class="col-md-12 order-2 order-md-1- bg-color-custom text-center p-static">
                <h1 class="fw-bold bold text-uppercase w3-xxlarge" style="color: #605154;">{{ $page->page_title ?? '' }}</h1>
            </div>

            {{-- <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="/">Home</a></li>
                    <li class="active">
                        <a href="{{ route('page', [$page->id,$page->route_name]) }}">{{ $page->page_title }} </a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </div>
</section>

<div class="row">
    @foreach($branches as $branch)

    <div class="col-sm-4 py-2">
        <div class="w3-hover-shadow">
            <div class="w3-card-2 ">
                <div class="box box-widget">
                    <div class="box-header with-border w3-center pt-2">
                        <h3 class="box-title"><b>{{ $branch->branch_name }}</b></h3>

                    </div>
                    <div class="box-body">

                        {!! $branch->map !!}

                    </div>
                </div>
                <div class="text-center pt-1 pb-2 px-3">
                    <div>
                        <p>
                            <Address>@php
                                echo nl2br($branch->address);
                                @endphp</Address>
                            <span>Phone: <a href="tel:{{ $branch->mobile }}">{{ $branch->mobile }}</a></span>
                            <br>
                            <span>Email: <a href="mailto:{{ $branch->email }}">{{ $branch->email }}</a></span>
                        </p>
                    </div>
                    <div class="box-tools pull-right">
                        <a class="btn btn-sm btn-primary" href="tel:{{ $branch->mobile }}"
                            title="{{ $branch->mobile }}, {{ $branch->email }}">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(Browser::isDesktop())
    @if($loop->last)
    @if($branches->count() % 2 != 0)
    {{-- <div class="col-sm-6">
                <img class="img-responsive" style="width: 100%;height: 365px !important;"
                    src="{{ asset('img/biye1.png') }}" alt="{{ env('APP_NAME_BIG') }}">
</div> --}}
@endif
@endif
@endif
@endforeach
</div>

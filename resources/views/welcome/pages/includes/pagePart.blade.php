<div class="w3-card-2 w3-round">
    <div class="box box-widget">
        @if (!$page->title_hide)
        <div class="box-header w3-leftbar w3-border-purple ajax-box-header-remove">
            <h3 class="box-title">
                {{ $page->page_title }}
            </h3>
        </div>
        @endif

        <div class="box-body box-body-container p-0" style="background-color: #fbfbfb;">

            <div class="p-2">
                @if($page->route_name == 'membership_package')
                <a class="btn btn-warning" href="{{route('user.payNow')}}">Pay Now &nbsp; <i
                        class="fa fa-credit-card"></i></a> <br> <br>

                @include('welcome.includes.others.tabMembershipPackages')

                <a class="btn btn-warning" href="{{route('user.payNow')}}">Pay Now &nbsp; <i
                        class="fa fa-credit-card"></i></a>
                @endif

                <div class="page-content" style="min-height: 500px;">
                    {!! $page->content !!}
                </div>
            </div>

        </div>
        {{-- overlay here --}}
        <div class="overlay my-loading-overlay" style="display: none;">
            <i class="fa fa-circle-o-notch w3-jumbo w3-text-purple fa-spin" style="top: 20%;"></i>
        </div>
        <!-- end loading -->
    </div>
</div>

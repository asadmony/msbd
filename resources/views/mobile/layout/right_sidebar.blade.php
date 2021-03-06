<div id="modal_aside_left" class="modal fixed-left fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-aside" role="document">
        <div class="modal-content">
            <div class="modal-header rounded-0 br-0 w3-purple">
                <a href="/">
                    <h5 class="modal-title"><img src="{{ asset('msbd/images/msbd-slogan.png') }}" alt="" width="200">
                    </h5>
                </a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="w3-text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav class="nav-sidebar">
                    <a href="{{ url('/') }}"> <i class="fa fa-home w3-text-purple"></i> {{ __('Home') }}</a>
                    <a href="{{ route('welcome.ourBranches') }}"> <i class="fa fa-map w3-text-purple"></i> {{ __('Branches') }}</a>

                    @foreach ($userMobileRightSidebarMenu->pages as $umrsm)
                    <a href="{{ route('page', [$umrsm->id, $umrsm->route_name]) }}"> <i
                            class="far fa-circle w3-text-purple"></i> {{ $umrsm->localeTitle }}</a>
                    @endforeach
                    <a class="" href="{{ route('welcome.successStories') }}">
                       <i class="fa fa-image w3-text-purple"></i> {{ __('Success Stories') }}
                    </a>
                    <a class="" title="{{__('welcome.change_language')}}"  href="{{route('welcome.languageChange')}}" >
                        @if(Cookie::get('locale') == 'bn')
                        <i class="fa fa-language w3-text-purple"></i> English
                        @else
                        <i class="fa fa-language w3-text-purple"></i> বাংলা
                        @endif
                    </a>
                </nav>
            </div>
        </div>
    </div> <!-- modal-bialog .// -->
</div> <!-- modal.// -->

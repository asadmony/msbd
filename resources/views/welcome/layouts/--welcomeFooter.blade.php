<style>
    .footer-link {
        text-decoration: none;
        color: #ddd;
        text-align: left !important;
    }

    .footer-link:hover {
        color: #fff;
    }
</style>
<footer class="footer" style="min-height: 100px; background: #405765;color:#CCCCC5;">
    <div class="container text-left">

        <div class="row">
            <div class="col-sm-3">
                <a title="{{ env('APP_NAME_BIG') }}" class="footer-link" href="{{ url('/') }}">
                    <img class="img-responsive w3-circle"
                        src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}"
                        alt="{{ env('APP_NAME_BIG') }}" style="width: 40px;">
                </a>
                <br>

                <br>

                Download our App

                <br>

                <a href="" title="Download our android app">
                    <img class="img-responsive mt-2" style="border-radius: 5px;max-width: 100px;"
                        src="{{asset('img/and.png')}}" alt="App" download>
                </a>



            </div>
            <div class="col-sm-9">

                @if(Auth::check())

                @else

                @if(isset($welcomeFooterMenu))
                <div class="row">
                    {{-- @foreach ($welcomeFooterMenu->pages->chunk($welcomeFooterMenu->pages->count()/3) as $pages3) --}}
                    <div class="col-sm-4 col-xs-6">

                        @foreach ($welcomeFooterMenu->pages as $page)
                        <a class="footer-link" href="{{ route('page', $page->route_name) }}"><i
                                class="fa fa-check-circle text-white"></i> {{ $page->page_title }}</a> <br>
                        @endforeach

                    </div>
                    {{-- @endforeach --}}
                </div>
                @endif


                @endif



            </div>

        </div>



    </div>
</footer>





{{-- <footer class="" style="background: #fff;">
        <div class="container text-center">

            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-3">

                    <img class="img-responsive mt-1" src="{{ asset('img/rapid_ssl.gif') }}"
alt="{{ env('APP_NAME_BIG') }}">

</div>
<div class="col-sm-3">
    <img class="img-responsive" style="margin-top:-10px;" src="{{ asset('img/we_accept.jpg') }}"
        alt="{{ env('APP_NAME_BIG') }}">
</div>
</div>

</div>

<div class="col-sm-6">
    <p class="w3-xlarge pt-2 mt-3"></p>
</div>
</div>

</div>
</footer> --}}

<footer class="" style="background: #E1E4E7;padding:0 !important;">
    <div class="container text-center">

        <p class="text-muted mt-2"> &copy; {{ env('APP_NAME_BIG') }} all rights reserved.</p>
    </div>
</footer>

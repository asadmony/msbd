<header class="app-header w3-purple">
    <a href="{{ url('/') }}">
        <img src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}"
            alt="" height="58">
    </a>
    <div class="header-right"> <a href="#" class="btn-header"><i class="fa fa-phone fa-rotate-90"></i>
            {{ $websiteParameter->contact_mobile }}</a>
        <a href="#" class="btn-header"> <i class="fa fa-bell"></i> </a>
    </div>
</header> <!-- section-header.// -->

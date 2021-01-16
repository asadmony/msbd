<div role="main" class="main shop py-4">
    <div class="container">
        <div class="row">
            @if($package->package_for=='individual')
                @include('theme.prt.checkout.parts.forIndivisual')
            @elseif($package->package_for =='company')
                @include('theme.prt.checkout.parts.forCompany')
            @elseif($package->package_for == 'any')
                @include('theme.prt.checkout.parts.forAny')
            @endif
        </div>
    </div>
</div>
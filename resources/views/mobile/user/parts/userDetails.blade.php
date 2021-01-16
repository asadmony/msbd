@push('css')
<link href="{{ asset('msbd/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">
@endpush
<div class="container">
    <main class="app-content">
        @include('alerts.alerts')
        @include('mobile.user.includes.data.dataBasic')
        {{-- @include('mobile.user.includes.data.dataPublicPhotos') --}}
        @include('mobile.user.includes.data.dataEducation')
        @include('mobile.user.includes.data.dataWork')
        @include('mobile.user.includes.data.dataPersonal')
        @include('mobile.user.includes.data.dataFamily')
        @include('mobile.user.includes.data.dataPartnerPreference')
        @include('mobile.user.includes.data.dataPartnerMatch')
    </main>
</div>
@push('js')
<script src="{{ asset('msbd/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
@endpush

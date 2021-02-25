
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


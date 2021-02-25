@extends('mobile.layout.base')
@push('css')

@endpush
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <div class="py-2">
            {{-- @include('alerts.alerts')  --}}
            <div class="setting-part">
                <a href="" class="w3-text-purple setting-btn-link w3-small">
                    <u> <i class="fas fa-edit"></i> Edit Basic Info</u> 
                </a>
                <div class="setting-container" style="display: none">
                    @include('user.settings.includes.forms.changeBasicInfoForm')
                </div>
            </div>
            <div class="setting-part">
                <a href="" class="w3-text-purple setting-btn-link w3-small"><u> <i class="fas fa-edit"></i> Update Education</u></a>
                <div class="setting-container" style="display: none">
                    @include('user.settings.includes.forms.changeEduInfoForm')
                </div>
            </div>
            <div class="setting-part">
                <a href="" class="w3-text-purple setting-btn-link w3-small"><u> <i class="fas fa-edit"></i> Update Work Info</u></a>
                <div class="setting-container" style="display: none">
                    @include('user.settings.includes.forms.changeWorkInfoForm')
                </div>
            </div>
            <div class="setting-part">
                <a href="" class="w3-text-purple setting-btn-link w3-small"><u> <i class="fas fa-edit"></i> Update Family Info</u></a>
                <div class="setting-container" style="display: none">
                    @include('user.settings.includes.forms.changeFamilyInfoForm')
                </div>
            </div>
            <div class="setting-part">
                <a href="" class="w3-text-purple setting-btn-link w3-small"><u> <i class="fas fa-edit"></i> Preference Setting</u></a>
                <div class="setting-container" style="display: none">
                    @include('user.searches.includes.forms.searchSettingForm')
                </div>
            </div>
           </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
$(function () {
        $(document).on("click", ".setting-btn-link", function(e){
    e.preventDefault();

    var that = $(this);
    that.closest('.setting-part').find('.setting-container').toggle();
    });
});

</script>
@endpush
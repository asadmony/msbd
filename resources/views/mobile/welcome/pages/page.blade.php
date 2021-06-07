@extends('mobile.layout.base')
@section('body')
<div class="container p-0 m-0">
    @if (!$page->title_hide)
    <div class="text-center">
        @if(Cookie::get('locale') == 'bn')
        <h5>{{ $page->page_title_bn }}</h5>
        @else
        <h5>{{ $page->page_title }}</h5>
        @endif
    </div>
    @endif
    <div class="row">
        @include('common.pages.parts.pageBody')
    </div>
</div>
@endsection

@extends('mobile.layout.base')
@section('body')
<div class="container p-0 m-0">
    @if (!$page->title_hide)
    <div class="text-center">
        <h5>{{ $page->page_title }}</h5>
    </div>
    @endif
    <div class="row">
        @include('common.pages.parts.pageBody')
    </div>
</div>
@endsection

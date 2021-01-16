@extends('mobile.layout.base')
@section('body')
<div class="container">
    @if (!$page->title_hide)
        <h5>{{ $page->page_title }}</h5>
    @endif
	<div class="row">
        {!! $page->content !!}
    </div>
</div>
@endsection
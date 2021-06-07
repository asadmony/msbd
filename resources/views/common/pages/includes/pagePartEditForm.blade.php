<form method="post" enctype="multipart/form-data" action="{{ route('common1.pageItemUpdate', $it) }}">

    @csrf


    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title">Item Title:</label>
        <input type="text" class="form-control" placeholder="Page Title" id="title"
            {{ $it->title == 'Register Domain Form part'  ? ' readonly ' : ''}} name="title"
            value="{{ old('title') ?: $it->title }}">
    </div>


    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description" class="control-label"> Description: <a class="btn btn-xs w3-deep-orange w3-btn"
                href="{{ route('common1.pageItemEditEditor', $it) }}">
                {{ $it->editor ? 'Without Editor' : 'With Editor' }}</a></label>

        <textarea name="description" class="form-control  {{ $it->editor ? ' details-input ' : '' }} " rows="10"
            id="description" placeholder="Description">{!! old('description') ?: $it->content  !!}</textarea>

        @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
        @endif

    </div>
    <div class="form-group {{ $errors->has('description_bn') ? ' has-error' : '' }}">
        <label for="description_bn" class="control-label"> Description Bangla: <a class="btn btn-xs w3-deep-orange w3-btn"
                href="{{ route('common1.pageItemEditEditor', $it) }}">
                {{ $it->editor ? 'Without Editor' : 'With Editor' }}</a></label>

        <textarea name="description_bn" class="form-control  {{ $it->editor ? ' details-input ' : '' }} " rows="10"
            id="description_bn" placeholder="Description in bangla">{!! old('description_bn') ?: $it->content_bn  !!}</textarea>

        @if ($errors->has('description_bn'))
        <span class="help-block">
            <strong>{{ $errors->first('description_bn') }}</strong>
        </span>
        @endif

    </div>






    <div class="checkbox">
        <label><input type="checkbox" {{$it->editor ? 'checked' : ''}} name="editor"> Editor</label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" {{$it->active ? 'checked' : ''}} name="active"> Active</label>
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
</form>

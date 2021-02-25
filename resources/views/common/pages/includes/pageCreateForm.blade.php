<form class="form-inline" method="post" action="{{ route('common1.pageAddNewPost') }}">

    @csrf

    <div class="form-group{{ $errors->has('page_title') ? ' has-error' : '' }}">
        <label for="page_title">Page Title:</label>
        <input type="text" class="form-control" placeholder="Page Title" id="page_title" name="page_title"
            value="{{ old('page_title') }}">
    </div>

    <div class="form-group{{ $errors->has('route_name') ? ' has-error' : '' }}">
        <label for="route_name">Route Name:</label>
        <input type="text" placeholder="Route Name" class="form-control" id="route_name" name="route_name"
            value="{{ old('route_name') }}">
    </div>


    <div class="checkbox">
        <label><input type="checkbox" name="title_hide"> Title Hide </label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" checked name="active"> Active</label>
    </div>

    {{-- <div class="checkbox">
        <label><input type="checkbox" checked name="list_in_menu"> List In Menu</label>
    </div> --}}
    <div class="box box-widget">
        <div class="box-header with-border">
            <h5 class="box-title">Update Menu</h5>
        </div>
        <div class="box-body w3-padding-large" style="padding-top: 0 !important;">
            <div class="form-group">
                <label for="extra_file" class="control-label"></label>

                @foreach($menus->chunk(3) as $menu2)
                <div class="row">
                    @foreach($menu2 as $menu)
                    <div class="col-sm-4">

                        <div class="checkbox">
                            <label><input type="checkbox" name="menus[]" value="{{$menu->id}}">
                                {{$menu->menu_title}}</label>
                        </div>
                    </div>
                    @endforeach

                </div>
                @endforeach

            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

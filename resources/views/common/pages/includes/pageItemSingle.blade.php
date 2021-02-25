<div class="box box-widget mb-1">
    <div class="box-body">
        SL: <b>{{ $loop->iteration }}</b>, &nbsp;
        Part Title: <b> {{ $item->title }}</b>, &nbsp;

        Active: <b>{{ $item->active ? 'Yes' : 'No' }}</b>,



        <div class="pull-right">
            <a class="w3-btn w3-blue btn btn-xs " href="{{ route('common1.pageItemEdit', $item) }}">Edit</a>
            &nbsp;

            <a class="w3-btn w3-red btn btn-xs " onclick="return confirm('Do you really want to delete?');"
                href="{{ route('common1.pageItemDelete', $item) }}">Delete</a>
        </div>
    </div>
</div>

<form action="{{ route('blogSearch') }}" method="get">
    <div class="input-group mb-3 pb-1">
        <input class="form-control text-1" placeholder="Search..." name="q" id="s" type="text" value="{{ $search ?? '' }}">
        <span class="input-group-append">
            <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
        </span>
    </div>
</form>
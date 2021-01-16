<h5><i class="fa fa-image"></i> Public Photos</h5>
@foreach ($user->userPhotos as $photo)
    <div class="flex-fill p-1">
        <a target="_blank" href="{{ asset($photo->img_url) }}">
            <img class="img-fluid img-thumbnail" src="{{ asset($photo->img_url) }}" style="max-height: 160px;margin-top: 5px;margin-right: 5px;" alt="{{ env('APP_NAME_BIG') }}">
        </a>
    </div>
@endforeach
<a target="_blank" href="{{ route('imagecache', [ 'template'=>'ppsmbl','filename' => $photo->img_url ]) }}">
    <img class="img-fluid img-thumbnail" src="{{ route('imagecache', [ 'template'=>'ppsmbl','filename' => $photo->img_url ]) }}" style="max-height: 80px;margin-top: 5px;margin-right: 5px;" alt="{{ env('APP_NAME_BIG') }}">
</a>
    
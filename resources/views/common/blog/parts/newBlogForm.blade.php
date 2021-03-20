@push('css')
<link href="{{ asset('assets/sn/dist/summernote.css') }}" rel="stylesheet">
@endpush

<form action="">
    <div class="box">
        <div class="box-body">
            <div class="form-group w3-padding-16">
                <div class="col-md-3 ">
                    <label for="title">Blog Post Title</label>
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="title" type="text" id="title" name="title">
                </div>
            </div>
            <div class="form-group  w3-padding-16">
                <div class="col-md-3">
                    <label for="slug">Blog Post Slug Url</label>
                </div>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">{{ asset('/') }}blog/</span>
                        <input class="form-control" type="text" id="slug" name="slug" value="">
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="box-body">
            <div class="form-group  w3-padding-16">
                <div class="col-md-3">
                    <label for="meta_tags">Blog Post Meta Tags (Comma "," Seperated)</label>
                </div>
                <div class="col-md-8">
                    <input class="form-control" type="text" id="meta_tags" name="meta_tags" value="{{ old('meta_tags') }}">
                </div>
            </div>
            <div class="form-group  w3-padding-16">
                <div class="col-md-3">
                    <label for="meta_description">Blog Post Meta description</label>
                </div>
                <div class="col-md-8">
                    <textarea class="form-control" type="text" id="meta_description" name="meta_description"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="box-body">
            <div class="form-group  w3-padding-16">
                <div class="col-md-12">
                    <label for="post_body">Blog Post Body</label>
                </div>
                <div class="col-md-11">
                    <textarea class="form-control details-input" name="post_body" id="" cols="30" rows="20" id="description"  >{{ old('post_body') }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="box-body text-center">
            <button class="btn btn-primary">
               <i class="fa fa-save"></i> Save
            </button>
        </div>
    </div>
</form>


@push('js')
<script src="{{ asset('assets/sn/dist/summernote.js') }}"></script>
<script>
    $(document).ready(function() {
    $('.details-input').summernote({
      placeholder: 'Write description of the post here...',
      minHeight: 240,
      codemirror: { // codemirror options
        theme: 'monokai',
        lineNumbers: true,
        lineWrapping: true,
      }
    });
    $("#title").on('keyup', function () {
        var Text = $("#title").val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#slug").val(Text); 
    })
  });
</script>
@endpush

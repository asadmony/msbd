 
<style>
    .lightBox-description{
        display: none !important;
    }
</style>
    <section class="content container" >

        {{-- <h1 class="text-center">Success Stories (Photo)</h1> --}}

        <h1 class="m-0 px-3 text-center" style="color: gold; font-family: 'Lobster Two', cursive; font-style: italic;">
                <u>Our Activities Album</u>
            </h1>
            <div style="width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;"></div>
            <br>
    <div class="row">
        
    @foreach($galleries as $gallery)

    <div class="col-6 col-md-3 col-lg-2 p-1">
        

    <img data-toggle="tooltip" class='js-lightBox m-1 rounded' data-title="{{ $gallery->image_title ?: 'No Title' }}"  data-group='group-1'  src="{{ asset('storage/gallery/'.$gallery->image_name) }}"  width="160" height="120" />
    </div>

    @endforeach     
    </div>

    <div class="text-center">
      {{ $galleries->render() }}
    </div>
       



</section>

<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Name of route
    |--------------------------------------------------------------------------
    |
    | Enter the routes name to enable dynamic imagecache manipulation.
    | This handle will define the first part of the URI:
    | 
    | {route}/{template}/{filename}
    | 
    | Examples: "images", "img/cache"
    |
    |<img class="img-responsive" src="{{ route('imagecache', [ 'template'=>'cpmd','filename' => $post->fiName() ]) }}" alt="{{$post->title}}">
    |
    */
    #  http://image.intervention.io/use/url
    
        'route'=>'uslive',
    // 'route' => null,

    /*
    |--------------------------------------------------------------------------
    | Storage paths
    |--------------------------------------------------------------------------
    |
    | The following paths will be searched for the image filename, submited 
    | by URI. 
    | 
    | Define as many directories as you like.
    |
    */
    
    'paths' => array(
        public_path(),  //sample path from interv...
        public_path('upload'),  //sample path from interv...
        public_path('images'),  //sample path from interv...
        public_path('img'), //some images for aamaar
        public_path('storage'), # user identity image
        public_path('storage/gallery'), # user identity image
        public_path('storage/media'), # user identity image
        public_path('storage/media/image'), # user identity image
        public_path('storage/slider'), # user identity image
    ),

    /*
    |--------------------------------------------------------------------------
    | Manipulation templates
    |--------------------------------------------------------------------------
    |
    | Here you may specify your own manipulation filter templates.
    | The keys of this array will define which templates 
    | are available in the URI:
    |
    | {route}/{template}/{filename}
    |
    | The values of this array will define which filter class
    | will be applied, by its fully qualified name.
    |
    */
   
    'templates' => array(

        'small' => 'Intervention\Image\Templates\Small',
        'medium' => 'Intervention\Image\Templates\Medium',
        'large' => 'Intervention\Image\Templates\Large',
        'ppxxs' => 'App\ImageFilters\ProfilePicXXS',
        'ppxs' => 'App\ImageFilters\ProfilePicXS',
        'ppsm' => 'App\ImageFilters\ProfilePicSmall',
        'ppmd' => 'App\ImageFilters\ProfilePicMedium',
        'pplg' => 'App\ImageFilters\ProfilePicLarge',
        'cprlg' => 'App\ImageFilters\CoverPicRibonLarge',
        'ppxlg' => 'App\ImageFilters\ProfilePicXLarge',
        'cpxs' => 'App\ImageFilters\CoverPicXS',
        'cpsm' => 'App\ImageFilters\CoverPicSmall',
        'cpmd' => 'App\ImageFilters\CoverPicMedium',
        'cplg' => 'App\ImageFilters\CoverPicLarge',
        'cpxlg' => 'App\ImageFilters\CoverPicXLarge',
        'cpxxlg' => 'App\ImageFilters\CoverPicXXLarge',
        'slmd' => 'App\ImageFilters\LogoMedium',
        'pfilg' => 'App\ImageFilters\ProductPicLarge',
        'pfimd' => 'App\ImageFilters\ProductPicMedium',
        'pfism' => 'App\ImageFilters\ProductPicSmall',
        'pnism' => 'App\ImageFilters\ProductNormalPicSmall',
        'pnimd' => 'App\ImageFilters\ProductNormalPicMedium',
        'pnilg' => 'App\ImageFilters\ProductNormalPicLarge',
        'sbism' => 'App\ImageFilters\SidebarImageSmall',
        'sbixs' => 'App\ImageFilters\SidebarImageXtraSmall',
        'lh' => 'App\ImageFilters\LogoHeader',
        'ppsmbl' => 'App\ImageFilters\ProductPicSmallBlur',


        //'original' - Send HTTP response with original image file.
        //'download' - Send HTTP response and forces the browser to download the original image file, instead of displaying it.
        //
        //<img class="img-responsive" src="{{ route('imagecache', [ 'template'=>'cpmd','filename' => $post->fiName() ]) }}" alt="{{$post->title}}">
    ),

    /*
    |--------------------------------------------------------------------------
    | Image Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | Lifetime in minutes of the images handled by the imagecache route.
    |
    */
   
    'lifetime' => 43200,

);

<?php

namespace App\ImageFilters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class CoverPicRibonLarge implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        // return $image->fit(810, 300);
          $image->fit(540, 282);
        // return  $image->insert('img/w.png');
 
       return $image->insert('img/pos.jpg', 'bottom');
       return $image;
    }
}
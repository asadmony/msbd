<?php

namespace App\ImageFilters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class CoverPicLarge implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        // return $image->fit(810, 300);
          $image->fit(600, 400);
        // return  $image->insert('img/w.png');
 
       // return $image->insert('img/w3.png', 'bottom');
       // return $image->insert('img/w4.png', 'bottom');
       return $image->insert('img/w5.png', 'bottom');
       return $image;
    }
}
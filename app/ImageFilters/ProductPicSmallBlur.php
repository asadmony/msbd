<?php

namespace App\ImageFilters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class ProductPicSmallBlur implements FilterInterface
{
    public function applyFilter(Image $image)
    {
    	// $image->blur(15);
        return $image->fit(240, 240)->blur(50); 
    }
}
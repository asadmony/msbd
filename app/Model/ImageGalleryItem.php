<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImageGalleryItem extends Model
{
  public function fi()
  {

  	if($this->img_url)
  	{
  		return $this->img_url;
  	}
  	else{
  		return 'img/fi.png';
  	}
  }
}

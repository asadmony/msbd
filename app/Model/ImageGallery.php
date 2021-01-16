<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
  public function items(){
  	return $this->hasMany('App\Model\ImageGalleryItem','image_gallery_id');
  }

  public function fi()
  {
  	$item = $this->items()->where('publish_status','<>','temp')->first();
  	if($item)
  	{
  		return $item->img_url;
  	}
  	else{
  		return 'img/fi.png';
  	}
  }

  public function tempItemsDelete()
  {
  	$this->items()->where('publish_status','temp')->delete();
  }

  public function activeItems()
  {
  	return $this->items()->where('publish_status','<>','temp')->get();
  }
}

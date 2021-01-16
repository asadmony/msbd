<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function menus()
	{
		return $this->belongsToMany('App\Model\Menu', 'menu_pages', 'page_id', 'menu_id');
	}
}

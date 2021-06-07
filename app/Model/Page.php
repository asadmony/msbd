<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function menus()
	{
		return $this->belongsToMany('App\Model\Menu', 'menu_pages', 'page_id', 'menu_id');
	}
    public function items()
    {
        return $this->hasMany('App\Model\PageItem', 'page_id');
    }
    public function getLocaleTitleAttribute()
    {
        if(app()->getLocale() == 'bn')
        {
            return $this->page_title_bn ?: $this->page_title;
        }else
        {
            return $this->page_title ?: $this->page_title_bn;
        }
    }
}

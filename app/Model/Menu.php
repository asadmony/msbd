<?php

namespace App\Model;

use App\Model\Page;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	public function pages(){
		return $this->belongsToMany('App\Model\Page', 'menu_pages', 'menu_id', 'page_id');
	}

	public function hasPage($page){
		$row = $this->pages()->where('pages.id',$page->id)->first();
		if($row){
			return true;
		}
		return false;
	}

	public function addedBy()
	{
		return $this->belongsTo('App\Model\User', 'addedby_id');
	}
    public function subMenus()
    {
        return $this->hasMany('App\Model\Menu', 'parent_id');
    }
    public function parentMenu()
    {
        return $this->belongsTo('App\Model\Menu', 'parent_id');
    }

	public function getLocaleTitleAttribute()
	{
		if (app()->getLocale() == 'bn') {
			return $this->menu_title_bn ?: $this->menu_title;
		} else {
			return $this->menu_title ?: $this->menu_title_bn;
		}
	}
}

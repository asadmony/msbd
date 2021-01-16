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
}

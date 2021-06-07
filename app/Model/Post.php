<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Post extends Model
{
    public function addedBy(){
		return $this->belongsTo('App\Model\User','addedby_id');
	}
   
	public function imgFeature()
	{
	    if($this->feature_img_name)
	    {
	        return true;
	    }else
	    {
	        return false;
	    }
	}

	public function fi()
	{
		if($this->imgFeature())
		{
			return "/storage/media/image/{$this->feature_img_name}";
		}
		else{
			return "img/fi.png";
		}
	}

	public function fiName()
	{
		if($this->imgFeature())
		{
			return $this->feature_img_name;
		}
		else{
			return "fi.png";
		}
	}

	public function slug()
	{
		// $generator = new SlugGenerator;

		// return $generator->generate($this->title);
		return Str::slug($this->title);

	}

	public function deletePermission()
   {
   		if( 
   			$this->addedby_id == Auth::id() 
   			|| Auth::user()->isAdmin() 
   			|| Auth::user()->isBlogAdmin() 

   			)
   			{
   				return true;
   			}
   			return false;
   }

	public function blogCategories()
	{
		return $this->belongsToMany('App\Model\Category', 'post_categories', 'post_id', 'category_id');
	}

	public function divisions()
	{
		return $this->belongsToMany('App\Model\Division', 'post_divisions', 'post_id', 'division_id');
	}

	public function districts()
	{
		return $this->belongsToMany('App\Model\District', 'post_districts', 'post_id', 'district_id');
	}

	public function thanas()
	{
		return $this->belongsToMany('App\Model\Upazila', 'post_thanas', 'post_id', 'thana_id');
	}

	public function cats(){
		$cats = '';
		if($this->blogCategories->count())
		{			
			foreach($this->blogCategories as $cat){
				$cats .= $cat->title . ', ';
			}
		}
		return $cats;
	}

	public function div()
	{
		if($this->divisions->count())
		{
			$div = $this->divisions()->first();
			return $div->name;
		}
		return null;
	}

	public function dist()
	{
		if($this->districts->count())
		{
			$dist = $this->districts()->first();
			return $dist->name;
		}
		return null;
	}

	public function thana()
	{
		if($this->thanas->count())
		{
			$thana = $this->thanas()->first();
			return $thana->name;
		}
		return null;
	}

	public function comments()
	{
		return $this->hasMany('App\Model\Comment','post_id');
	}

	public function getLocaleTitleAttribute()
    {
        if(app()->getLocale() == 'bn')
        {
            return $this->title_bn ?: $this->title;
        }else
        {
            return $this->title ?: $this->title_bn;
        }
    }
	public function getLocaleDescriptionAttribute()
    {
        if(app()->getLocale() == 'bn')
        {
            return $this->description_bn ?: $this->description;
        }else
        {
            return $this->description ?: $this->description_bn;
        }
    }
	public function getLocaleExcerptAttribute()
    {
        if(app()->getLocale() == 'bn')
        {
            return $this->excerpt_bn ?: $this->excerpt;
        }else
        {
            return $this->excerpt ?: $this->excerpt_bn;
        }
    }

	public function popularPosts()
	{
		return $this->where('publish_status', 'published')->where('last_read', '>=', now()->subDays(7))->orderBy('read','desc')->limit(4)->get();
	}
}

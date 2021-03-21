<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
		return $this->belongsToMany('App\Model\Post', 'post_categories', 'category_id', 'post_id');
	}

	public function hasPost($post){
		$row = $this->posts()->where('posts.id',$post->id)->first();
		if($row){
			return true;
		}
		return false;
	}

	public function latestPost(){
		return $this->posts()->where('publish_status','published')->latest()->first();
	}


	public function latestPostForDate($date){
		return $this->posts()
		->where('publish_status','published')
		->whereDate('posts.updated_at', '<=', $date)
		->latest()
		->first();
	}

	public function latestPosts()
	{
		return $this->posts()->where('publish_status','published')->latest()->paginate(6);
	}

	public function latestSomePosts($number)
	{
		return $this->posts()->where('publish_status','published')->latest()->paginate($number);
	}

	public function latestPostsForArchive($date)
	{
		return $this->posts()
		->where('publish_status','published')
		->whereDate('posts.updated_at', '<=', $date)
		->latest()
		->paginate(6);
	}
}

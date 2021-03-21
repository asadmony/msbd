<?php

namespace App\Http\Controllers;

use App\Model\Tag;
use App\Model\Post;
use Illuminate\Http\Request;

class WelcomeBlogController extends Controller
{
         //tags //blog tags

    public function selectTagsOrAddNew(Request $request)
    {
        $tags = Tag::where('title', 'like', '%'.$request->q.'%')
        ->select(['title'])->take(30)->get();
        if($tags->count())
        {
            if ($request->ajax())
            {
                return $tags;
            }
        }
        else
        {
            if ($request->ajax())
            {
                return $tags;
            }
        }
    }
    //tags //blog tags
    //
     public function blog()
    {
      $rightSidePosts = Post::where('publish_status', 'published')->orderBy('read','desc')->latest()->limit(20)->get();
      $frontSliderPosts = Post::where('publish_status', 'published')->where('front_slider', true)->latest()->limit(4)->get();
      $posts = Post::where('publish_status', 'published')->latest()->paginate(18);
      return view('blog.blogIndex',[
        'posts'=>$posts,
        'frontSliderPosts' => $frontSliderPosts,
        'rightSidePosts' => $rightSidePosts
      ]);
    }

    public function blogPostDetails(Post $post)
    {
      $rightSidePosts = Post::where('publish_status', 'published')->orderBy('read','desc')->latest()->limit(10)->get();

      $post->increment('read');

      $catIds = $post->blogCategories()->pluck('category_id');
      $postIds = PostCategory::whereIn('category_id', $catIds)->latest()->limit(100)->pluck('post_id');

      $relatedPosts = Post::where('publish_status','published')
          ->whereIn('id',$postIds)
          ->latest()
          ->paginate(10); 


      return view('blog.blogPostDetails', [
        'post'=> $post,
        'rightSidePosts'=> $rightSidePosts,
        'relatedPosts' => $relatedPosts
      ]);
    }
}

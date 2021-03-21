<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Tag;
use App\Model\Post;
use App\Model\PostCategory;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

class WelcomeBlogController extends Controller
{
         //tags //blog tags
         public function __construct()
         {
           $this->middleware('welcome');
       
             // $this->device = 'theme.'.config('app.theme').'.';
           if(Agent::isDesktop())
           {
             //$this->device = 'theme.'.config('app.theme').'.';
           }
           else
           {
             $this->device = 'mobile.'; //mobile and tab will use
           }
           
       
         }
         protected $device;
       
         protected $minutes = 120;

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
      $popularPosts = Post::where('publish_status', 'published')->orderBy('read','desc')->latest()->limit(4)->get();
      $recentPosts = Post::where('publish_status', 'published')->latest()->limit(4)->get();
      $posts = Post::where('publish_status', 'published')->latest()->paginate(18);
      $categories = Category::inRandomOrder()->take(5)->get();
      return view('welcome.blog.allPost',[
        'posts'=>$posts,
        'recentPosts' => $recentPosts,
        'popularPosts' => $popularPosts,
        'categories' => $categories,
      ]);

      // return view('blog.blogIndex',[
      //   'posts'=>$posts,
      //   'recentPosts' => $recentPosts,
      //   'popularPosts' => $popularPosts
      // ]);
    }

    public function blogPostDetails(Post $post)
    {
      $popularPosts = Post::where('publish_status', 'published')->orderBy('read','desc')->latest()->limit(4)->get();
      $recentPosts = Post::where('publish_status', 'published')->latest()->limit(4)->get();
      
      
      // $catIds = $post->blogCategories()->pluck('category_id');
      // $postIds = PostCategory::whereIn('category_id', $catIds)->latest()->limit(100)->pluck('post_id');
      
      $post->increment('read');
      // $relatedPosts = Post::where('publish_status','published')
      //     ->whereIn('id',$postIds)
      //     ->latest()
      //     ->paginate(10); 

      $categories = Category::inRandomOrder()->take(5)->get();

      return view('welcome.blog.singlePost', [
        'post'=> $post,
        'popularPosts'=> $popularPosts,
        'recentPosts' => $recentPosts,
        'categories' => $categories,
        
      ]);
      // return view('blog.blogPostDetails', [
      //   'post'=> $post,
      //   'popularPosts'=> $popularPosts,
      //   'relatedPosts' => $relatedPosts
      // ]);
    }
}

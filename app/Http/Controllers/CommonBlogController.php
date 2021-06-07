<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Cache;
use Validator;
use Carbon\Carbon;
use App\Model\Tag;
use App\Model\Post;
use App\Model\Page;
use App\Model\User;
use App\Model\Media;
use App\Model\Report;
use App\Model\Category;
use App\Model\UserRole;
use App\Model\UserAbout;
use App\Model\UserPhoto;
use App\Model\UserPayment;
use App\Model\FrontSlider;
use App\Model\PostCategory;
use App\Model\UserEducation;
use Illuminate\Http\Request;
use App\Model\UserSettingItem;
use App\Model\UserPersonalInfo;
use App\Model\UserSettingField;
use App\Model\UserInfoForOffice;
use App\Model\MembershipPackage;
use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class CommonBlogController extends Controller
{
    //blog start

    //category
    public function categoryAddNew(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'blog','lsbsm'=>'categoryAddNew']);
        return view('common.blogs.categories.categoryAddNew');
    }

    public function categoriesAll(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'blog','lsbsm'=>'categoriesAll']);

        $cats = Category::all();
        return view('common.blogs.categories.categoriesAll',['cats'=>$cats]);
    }

    public function categoryAddNewPost(Request $request){

        $validation = Validator::make($request->all(),
        [
          'category'=> 'required|min:2|max:100|unique:categories,title',
          'category_bn'=> 'required|min:2|max:100|unique:categories,title_bn'
        ]);
        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Wrong!');
        }

        $cat = new Category;
        $cat->title = $request->category;
        $cat->title_bn = $request->category_bn;
        // $cat->addedby_id = $request->user()->id;
        $cat->save();

        Cache::flush();

        return back()->with('success', 'New Category Successfully Created.');
    }

    public function categoryEdit(Category $cat, Request $request)
    {
        if($request->ajax())
        {
            return Response()->json(View('common.blogs.categories.ajax.catTbodyEdit',[
                'cat' => $cat,
            ])->render());
        }
    }

    public function categoryUpdate(Category $cat, Request $request)
    {
        $validation = Validator::make($request->all(),
        [ 
            'name'=> 'required|min:2|max:100|unique:categories,title,'.$cat->id,
            'name_bn'=> 'required|min:2|max:100|unique:categories,title_bn,'.$cat->id,
        ]);
        if($validation->fails())
        {
            return Response()->json(View('common.blogs.categories.ajax.catTable',[
                'cat' => $cat,
            ])->render());
        }

        $name = $request->name;
        $name_bn = $request->name_bn;
        
        $cat_old_name = $cat->title;
        $cat_old_name_bn = $cat->title_bn;

        $cat->title = $name ?: $cat_old_name;
        $cat->title_bn = $name_bn ?: $cat_old_name_bn;
        // $cat->editedby_id = Auth::id();
        $cat->save();

        Cache::flush();

        if($request->ajax())
        {
            return Response()->json(View('common.blogs.categories.ajax.catTable',[
                'cat' => $cat,
            ])->render());
        }

        

        return back();
    }

    public function categoryDelete(Category $cat, Request $request)
    {
        // $cat->posts()->detach();
        $cat->delete();

        Cache::flush();

        if($request->ajax())
        {
            return Response()->json(['success'=>true]);
        }

        

        return back();
    }

//category


    
//posts
    public function postAddNew(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'blog','lsbsm'=>'postAddNew']);

        $post = Post::where('publish_status', 'temp')->first();
        $cats = Category::all();
        
        $mediaAll = Media::latest()->paginate(20);
        if(!$post)
        {
            $post = new Post;
            $post->addedby_id = Auth::id();
            $post->save();
        }
        return view('common.blogs.posts.postAddNew',[
            'post'=>$post,
            'cats'=>$cats,
            'mediaAll'=>$mediaAll
        ]);
    }

    public function postsAll(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'blog','lsbsm'=>'postsAll']);
        $posts = Post::where('publish_status','<>','temp')
        ->orderby('id','desc')
        ->paginate(20);
        return view('common.blogs.posts.postsAll',['posts'=>$posts]);
    }

    public function postAddNewPost(Request $request){
        
        // dd($request->all());
        $validation = Validator::make($request->all(),
        [ 
          "title" => "required|max:255",
          "title_bn" => "required|max:255",
          "description" => "required",
          "description_bn" => "required",
          // "publish" => "on",
            'excerpt' => 'max:254|required',
            'excerpt_bn' => 'max:254|required',
            'feature_image' => 'image',
            // 'feature_image' => 'image|dimensions:min_with=300,min_height=20,ratio=3/2',
        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Wrong!');
        }

        if($request->tags)
        {
            foreach($request->tags as $tag)
            {
                $t = Tag::where('title',$tag)->first();
                if(!$t)
                {
                   $t = new Tag;
                   $t->title = $tag;
                   // $t->addedby_id = Auth::id();
                   $t->save(); 
                }               
            }
        }

        $post = Post::where('publish_status', 'temp')->first();
        if(!$post){
            $post = new Post;
            $post->addedby_id = Auth::id();
            $post->save();
        }

        $post->title = $request->title ?: null;
        $post->title_bn = $request->title_bn ?: null;
        $post->description = $request->description ?: null;
        $post->description_bn = $request->description_bn ?: null;
        $post->excerpt = $request->excerpt ?: null;
        $post->excerpt_bn = $request->excerpt_bn ?: null;
        $post->publish_status = $request->publish ? 'published' : 'draft';
        $post->front_slider = $request->front_slider ? true : false;

        $post->meta_title = $request->meta_title ?: null;

        $post->meta_keywords = $request->meta_keywords ?: null;

        $post->meta_description = $request->meta_description ?: null;

        $post->headline = $request->headline ? true : false;
        // $post->highlight = $request->highlight ? true : false;
        $post->addedby_id = Auth::id();

        if($request->tags)
        {
            $post->tags = implode(', ',$request->tags);
        }else
        {
            $post->tags = null;
        }


        if($request->hasFile('feature_image'))
        {

            $ffile = $request->feature_image;
            $fimgExt = strtolower($ffile->getClientOriginalExtension());               
            $fimageNewName = str_random(8).time().'.'.$fimgExt;
            $originalName = $ffile->getClientOriginalName();

            Storage::disk('upload')->put('media/image/'.$fimageNewName, File::get($ffile));

                if($post->feature_img_name)
                {

                    Storage::disk('upload')->delete('media/image/'.$post->feature_img_name);
                }

            $post->feature_img_name = $fimageNewName;
            $post->feature_img_original_name = $originalName;
            $post->feature_img_ext = $fimgExt;
        }

        $post->save();


        $post->blogCategories()->detach();
        if($request->categories)
        {
            foreach($request->categories as $cat)
            {
                $c = PostCategory::where('category_id',$cat)->where('post_id',$post->id)->first();
                if(!$c)
                {
                   $c = new PostCategory;
                   $c->category_id = $cat;
                   $c->post_id = $post->id;
                   $c->addedby_id = Auth::id();
                   $c->save(); 
                }                
            }
        }

 

        Cache::flush();

        return redirect()->route('commonblog.postEdit',$post)->with('success', 'New post successfully created.');
    }

    public function postEdit(Post $post, Request $request){

        $cats = Category::all();
        $oldTags = $post->tags ? explode(", ",$post->tags) : null;
 
 
 
        $mediaAll = Media::latest()->paginate(20);
        return view('common.blogs.posts.postEdit',[
            'post'=>$post,
            'cats'=>$cats,
            'oldTags'=>$oldTags,
           
            'mediaAll'=>$mediaAll,
        
        ]);
    }

    public function postUpdate(Post $post, Request $request){


        $validation = Validator::make($request->all(),
        [ 
          "title" => "required|max:255",
          "description" => "required",
          'excerpt' => 'max:254|required',
          "title_bn" => "required|max:255",
          "description_bn" => "required",
          'excerpt_bn' => 'max:254|required',
          // "publish" => "on",
            'feature_image' => 'image',
        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Wrong!');
        }

        if($request->tags)
        {
            foreach($request->tags as $tag)
            {
                $t = Tag::where('title',$tag)->first();
                if(!$t)
                {
                   $t = new Tag;
                   $t->title = $tag;
                   // $t->addedby_id = Auth::id();
                   $t->save(); 
                }                
            }
        }

        $post->title = $request->title ?: null;
        $post->description = $request->description ?: null;
        $post->excerpt = $request->excerpt ?: null;
        $post->title_bn = $request->title_bn ?: null;
        $post->description_bn = $request->description_bn ?: null;
        $post->excerpt_bn = $request->excerpt_bn ?: null;
        $post->publish_status = $request->publish ? 'published' : 'draft';
        $post->front_slider = $request->front_slider ? true : false;
        $post->headline = $request->headline ? true : false;
        // $post->highlight = $request->highlight ? true : false;

        $post->meta_title = $request->meta_title ?: null;

        $post->meta_keywords = $request->meta_keywords ?: null;

        $post->meta_description = $request->meta_description ?: null;
        
        $post->editedby_id = Auth::id();

        if($request->tags)
        {
            $post->tags = implode(', ',$request->tags);
        }else
        {
            $post->tags = null;
        }

        if($request->hasFile('feature_image'))
        {

            $ffile = $request->feature_image;
            $fimgExt = strtolower($ffile->getClientOriginalExtension());               
            $fimageNewName = str_random(8).time().'.'.$fimgExt;
            $originalName = $ffile->getClientOriginalName();

            Storage::disk('upload')->put('media/image/'.$fimageNewName, File::get($ffile));

                if($post->feature_img_name)
                {

                    Storage::disk('upload')->delete('media/image/'.$post->feature_img_name);
                }

            $post->feature_img_name = $fimageNewName;
            $post->feature_img_original_name = $originalName;
            $post->feature_img_ext = $fimgExt;
        }

        $post->save();

        $post->blogCategories()->detach();
        if($request->categories)
        {
            foreach($request->categories as $cat)
            {
                $c = PostCategory::where('category_id',$cat)->where('post_id',$post->id)->first();
                if(!$c)
                {
                   $c = new PostCategory;
                   $c->category_id = $cat;
                   $c->post_id = $post->id;
                   $c->addedby_id = Auth::id();
                   $c->save(); 
                }                
            }
        }

        

        Cache::flush();

        return redirect()->route('commonblog.postEdit',$post)->with('success', 'Post successfully updated.');
    }

    public function featureImageDelete(Request $request, Post $post){
        
        // dd($request->all());
        if($post->feature_img_name)
        {
            Storage::disk('upload')->delete('media/image/'.$post->feature_img_name);
            $post->feature_img_name = null;
            $post->save();
        }

        Cache::flush();

        return back();
    }

    public function postDelete(Post $post, Request $request){

        if($post->feature_img_name)
        {
            Storage::disk('upload')->delete('media/image/'.$post->feature_img_name);
            $post->feature_img_name = null;
            $post->save();
        }

 
        $post->blogCategories()->detach();
        $post->delete();

        Cache::flush();

        return back()->with('success', 'Post successfully deleted.');
    }

    //posts


 

    //blog end
}

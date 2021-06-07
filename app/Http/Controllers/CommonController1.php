<?php

namespace App\Http\Controllers;

use Auth;
use Cache;
use Str;
use Validator;
use App\Model\User;
use App\Model\Page;
use App\Model\PageItem;
use App\Model\Menu;
use App\Model\Media;
use App\Model\MenuPage;
use App\Model\Gallery;
use App\Model\ImageGallery;
use App\Model\VideoGallery;
use Illuminate\Http\Request;
use App\Model\ImageGalleryItem;
use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CommonController1 extends Controller
{
    public function dashboard(Request $request){

        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'dashboard','lsbsm'=>'dashboard']);
        return view('common.pages.dashboard');
    }

    //menu start

    public function newMenu(Request $request){

        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'page','lsbsm'=>'newMenu']);
        return view('common.pages.newMenu');
    }

    public function newMenuPost(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
            'menu_title' => 'required|max:250|string',
            'menu_title_bn' => 'required|max:250|string',
            'menu_type' => 'required|max:50|string',
        ]);
        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong.');
        }

        $menu = new Menu;
        $menu->menu_title = $request->menu_title;
        $menu->menu_title_bn = $request->menu_title_bn;
        $menu->menu_type = $request->menu_type;
        $menu->addedby_id = $request->user()->id;
        $menu->save();


        // Cache::forget('key');
        Cache::flush();

        return back()->with('success', 'New menu successfully created.');
    }

    public function allMenus()
    {
        $request = request();
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'page','lsbsm'=>'allMenus']);
        $menus = Menu::orderby('id','desc')->get();

        return view('common.pages.allMenus',['menus'=>$menus]);
    }

    public function menuDelete(Menu $menu, Request $request)
    {
        $menu->delete();

        Cache::flush();

        return back()->with('success', 'Menu successfully deleted.');
    }

    //menu end


    // //page start

    // public function newPage(Request $request){

    //     $request->session()->forget(['lsbm','lsbsm']);
    //     $request->session()->put(['lsbm'=>'page','lsbsm'=>'newPage']);
    //     $menus = Menu::orderBy('menu_title')->get();
    //     $mediaAll = Media::latest()->paginate(100);
    //     return view('common.pages.newPage', [
    //         'menus'=>$menus,
    //         'mediaAll'=>$mediaAll
    //     ]);
    // }

    // public function newPagePost(Request $request)
    // {
    //     // dd($request->all());
    //     $validation = Validator::make($request->all(),
    //     [
    //         'pageTitle' => 'required|max:50|string',
    //         'page_route' => 'required|max:50|string',
    //         'details' => 'required|string',
    //         // 'categoryTitleBn' => 'required|min:2|max:200',
    //       // 'categoryImage'=> 'required|dimensions:ratio=800/350'
    //     ]);
    //     if($validation->fails())
    //     {
    //         return redirect()->route('common1.newPage')
    //         ->withErrors($validation)
    //         ->withInput()
    //         ->with('error', 'Something went wrong.');
    //     }





    //     // $image = $request->file('categoryImage');
    //     // $imageName = time().'.'.$image->getClientOriginalExtension();
    //     // $destinationPath = public_path('/images');
    //     // $image->move($destinationPath, $imageName);

    //     // Storage::disk('upload')
    //     // ->put('category/'.$imageName, File::get($image));
    //     // $image_url = 'storage/category/'.$imageName;



    //     $page = new Page;
    //     $page->page_title = $request->pageTitle;
    //     $page->title_hide = $request->titleHide ? 1 : 0;
    //     $page->active = $request->active ? 1 : 0;
    //     $page->page_type = $request->page_type;
    //     $page->route_name = $request->page_route ?: null;
    //     $page->content = $request->details ?: null;
    //     $page->addedby_id = Auth::id();
    //     $page->save();

    //     if(isset($request->menus))
    //     {
    //         foreach($request->menus as $menu)
    //         {
    //             $c = MenuPage::where('menu_id',$menu)
    //             ->where('page_id',$page->id)
    //             ->first();
    //             if(!$c)
    //             {
    //                $c = new MenuPage;
    //                $c->menu_id = $menu;
    //                $c->page_id = $page->id;
    //                $c->addedby_id = Auth::id();
    //                $c->save();
    //             }
    //         }
    //     }

    //     Cache::flush();


    //     return back()->with('success', 'New Page Created Successfully!');
    // }

    // public function allPages()
    // {
    // 	$request = request();
    // 	$request->session()->forget(['lsbm','lsbsm']);
    //     $request->session()->put(['lsbm'=>'page','lsbsm'=>'allPages']);
    //     $pages = Page::orderby('id','desc')->get();

    //     return view('common.pages.allPages',['pages'=>$pages]);
    // }


    // public function editPage($page, Request $request){
    //     $page = Page::where('id', $page)->first();
    //     $menus = Menu::orderBy('menu_title')->get();
    //     $mediaAll = Media::latest()->paginate(100);

    //     return view('common.pages.editPage',[
    //         'page'=>$page,
    //         'menus'=>$menus,
    //         'mediaAll'=>$mediaAll
    //     ]);
    // }

    // public function editPagePost(Page $page, Request $request){


    //     $validation = Validator::make($request->all(),
    //     [
    //         'page_title' => 'required|max:50|string',
    //         'route_name' => 'required|max:50|string',
    //         'content' => 'required|string',
    //     ]);
    //     if($validation->fails())
    //     {
    //         return redirect()->route('common1.editPage',['page'=>$page])
    //         ->withErrors($validation)
    //         ->withInput()
    //         ->with('error', 'Something went wrong.');
    //     }

    //     $page->menus()->detach();
    //     if(isset($request->menus))
    //     {
    //         foreach($request->menus as $menu)
    //         {
    //             $c = MenuPage::where('menu_id',$menu)->where('page_id',$page->id)->first();
    //             if(!$c)
    //             {
    //                $c = new MenuPage;
    //                $c->menu_id = $menu;
    //                $c->page_id = $page->id;
    //                $c->addedby_id = Auth::id();
    //                $c->save();
    //             }
    //         }
    //     }

    //     $page->page_title = $request->page_title;
    //     $page->title_hide = $request->titleHide ? 1 : 0;
    //     $page->route_name = $request->route_name ?: null;
    //     $page->content = $request->content ?: null;
    //     $page->page_type = $request->page_type;
    //     $page->active = $request->active ? 1 : 0;
    //     $page->editedby_id = Auth::id();
    //     $page->save();

    //     Cache::flush();

    //     return redirect()
    //     ->route('common1.editPage',['page'=>$page])
    //     ->with('success', 'Page Successfully Edited!');
    // }

    // public function deletePage($page, Request $request)
    // {
    //     if(Auth::user()->isAdmin())
    //     {
    //         $page = Page::where('id',$page)->delete();
    //     }

    //     Cache::flush();

    //     return redirect()->route('common1.allPages');
    // }



//pages


    public function pageAddNewPost(Request $request)
    {
        // dd($request->all());
        $validation = Validator::make($request->all(),
        [
            'page_title' => 'required|max:150|string',
            'page_title_bn' => 'max:150|string',
            'route_name' => 'required|max:150|string',
        ]);
        if($validation->fails())
        {
            return back()->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong.');
        }


        $page = new Page;
        $page->page_title = $request->page_title;
        $page->page_title_bn = $request->page_title_bn;
        $page->title_hide = $request->title_hide ? 1 : 0;
        $page->active = $request->active ? 1 : 0;
        // $page->list_in_menu = $request->list_in_menu ? 1 : 0;
        $page->route_name = $request->route_name ? Str::snake(strtolower($request->route_name), $delimiter = '_') : null;
        $page->addedby_id = Auth::id();
        $page->save();

        if(isset($request->menus))
        {
            foreach($request->menus as $menu)
            {
                $c = MenuPage::where('menu_id',$menu)
                ->where('page_id',$page->id)
                ->first();
                if(!$c)
                {
                   $c = new MenuPage;
                   $c->menu_id = $menu;
                   $c->page_id = $page->id;
                   $c->addedby_id = Auth::id();
                   $c->save();
                }
            }
        }
        return back()->with('success', 'New Page Created Successfully!');
    }

    public function pagesAll(Request $request)
    {
        $r = request();
        $r->session()->forget(['lsbm','lsbsm']);
        $r->session()->put(['lsbm'=>'page','lsbsm'=>'allPages']);

        $pages = Page::paginate(50);
        $menus = Menu::orderBy('menu_title')->get();
        return view('common.pages.pagesAll', [
            'pages'=> $pages,
            'menus'=> $menus,
        ]);
    }

    public function pageEdit(Request $request, Page $page)
    {
        $r = request();
        $r->session()->forget(['lsbm','lsbsm']);
        $r->session()->put(['lsbm'=>'page','lsbsm'=>'allPages']);
        $menus = Menu::orderBy('menu_title')->get();
        return view('common.pages.pageEdit', ['page'=> $page,'menus'=> $menus,]);
    }

    public function pageEditPost(Request $request, Page $page)
    {
        $validation = Validator::make($request->all(),
        [
            'page_title' => 'required|max:150|string',
            'page_title_bn' => 'max:150|string',
            'route_name' => 'required|max:150|string',
        ]);
        if($validation->fails())
        {
            return back()->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong.');
        }

        $page->page_title = $request->page_title;
        $page->page_title_bn = $request->page_title_bn;
        $page->title_hide = $request->title_hide ? 1 : 0;
        $page->active = $request->active ? 1 : 0;
        // $page->list_in_menu = $request->list_in_menu ? 1 : 0;
        $page->route_name = $request->route_name ? Str::snake(strtolower($request->route_name), $delimiter = '_'): null;
        $page->editedby_id = Auth::id();
        $page->save();

        $page->menus()->detach();
        if(isset($request->menus))
        {
            foreach($request->menus as $menu)
            {
                $c = MenuPage::where('menu_id',$menu)->where('page_id',$page->id)->first();
                if(!$c)
                {
                   $c = new MenuPage;
                   $c->menu_id = $menu;
                   $c->page_id = $page->id;
                   $c->addedby_id = Auth::id();
                   $c->save();
                }
            }
        }

        return back()->with('success', 'Page Updated Successfully!');
    }

    public function pageDelete(Request $request, Page $page)
    {
        $page->items()->delete();
        $page->delete();

        return back()->with('success', 'Page Deleted Successfully');
    }

    public function pageItems(Request $request, Page $page)
    {
        $mediaAll = Media::latest()->paginate(200);
        return view('common.pages.pageItems', [
            'page'=> $page,
            'mediaAll' => $mediaAll
        ]);
    }


    public function pageItemAddPost(Request $request, Page $page)
    {
        $validation = Validator::make($request->all(),
        [
            'title' => 'required|max:50|string',
            'description' => 'required|max:60000|string',
            'description_bn' => 'max:60000',
        ]);
        if($validation->fails())
        {
            return back()->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong.');
        }

        $item = new PageItem;
        $item->page_id = $page->id;
        $item->title = $request->title ?: null;
        $item->content = $request->description ?: null;
        $item->content_bn = $request->description_bn ?: null;
        $item->editor = $request->editor ? 1 : 0;
        $item->active = $request->active ? 1 : 0;
        $item->addedby_id = Auth::id();
        $item->save();


        return back()->with('success', 'Page Item Created Successfully!');
    }

    public function pageItemDelete(Request $request, PageItem $item)
    {
        $page = $item->page;
        $item->delete();

        return redirect()->route('common1.pageItems', $page)->with('success', 'Part of the Page Deleted Successfully');
    }

    public function pageItemEditEditor(Request $request, PageItem $item)
    {
        if($item->editor)
        {
            $item->editor = false;
        }
        else
        {
            $item->editor = true;
        }
        $item->save();

        return back();
    }

    public function pageItemEdit(Request $request, PageItem $item)
    {
        $mediaAll = Media::latest()->paginate(200);
        return view('common.pages.pageItemEdit', [
            'it'=> $item,
            'page' => $item->page,
            'mediaAll' => $mediaAll
        ]);
    }

    public function pageItemUpdate(Request $request, PageItem $item)
    {
        $validation = Validator::make($request->all(),
        [
            'title' => 'required|max:50|string',
            'description' => 'required|max:60000|string',
            'description_bn' => 'max:60000',
        ]);
        if($validation->fails())
        {
            return back()->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong.');
        }

        $item->title = $request->title ?: null;
        $item->content = $request->description ?: null;
        $item->content_bn = $request->description_bn ?: null;
        $item->editor = $request->editor ? 1 : 0;
        $item->active = $request->active ? 1 : 0;

        $item->editedby_id = Auth::id();

        $item->save();


        return back()->with('success', 'Page Item Updated Successfully!');
    }


//pages

    //page end




    //media
    public function mediaAll(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'media','lsbsm'=>'mediaAll']);
        $mediaAll = Media::latest()->paginate(50);
        return view('common.media.mediaAll',['mediaAll'=>$mediaAll]);
    }

    public function mediaUploadPost(Request $request)
    {
        // dd($request->all());
        $validation = Validator::make($request->all(),
        [
            'files.*' => 'image'
        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Wrong!');
        }

        if($request->hasFile('files'))
            {
                foreach($request->file('files') as $file)
                {
                    $originalName = $file->getClientOriginalName();
                    $ext = strtolower($file->getClientOriginalExtension());
                    $mime = $file->getClientMimeType();
                    $size =$file->getSize();
                    $fileNewName = Str::random(4).date('ymds').'.'.$ext;
                    // $fileNewName = str_random(6).time().'.'.$ext;
                    // $fileNewName = Auth::id().'_'.date('ymdhis').'_'.rand(11,99).'.'.$ext;
                    list($width,$height) = getimagesize($file);

                    Storage::disk('upload')
                    ->put('media/image/'.$fileNewName, File::get($file));

                    $file_new_url = 'storage/media/image/'.$fileNewName;

                    $media = new Media;
                    $media->file_name = $fileNewName;
                    $media->file_original_name = $originalName;
                    $media->file_mime = $mime;
                    $media->file_ext = $ext;
                    $media->file_size = $size;

                    $media->width = $width;
                    $media->height = $height;
                    $media->file_url = $file_new_url;
                    $media->addedby_id = Auth::id();
                    if($mime == 'image/gif' or $mime == 'image/png' or $mime == 'image/jpeg' or $mime == 'image/bmp')
                    {
                        $media->file_type = 'image';
                    }
                    //image/gif, image/png, image/jpeg, image/bmp, image/webp

                    $media->save();

                }
            }


        return back();
    }

    public function mediaDelete(Media $media,Request $request)
    {
        if($media->file_type == 'image')
        {
            Storage::disk('upload')->delete('media/image/'.$media->file_name);
            $media->delete();
        }

        return back()->with('info','Media successfully deleted.');

    }
//media




    //img gallery //image gallery

    public function imgGalleryAddNew(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'gallery','lsbsm'=>'imgGalleryAddNew']);
        $ig = ImageGallery::where('publish_status', 'temp')->first();
        $mediaAll = Media::latest()->paginate(200);
        if(!$ig)
        {
            $ig = new ImageGallery;
            $ig->addedby_id = Auth::id();
            $ig->save();
            for($x = 1; $x <= 20; $x++)
            {
                $igi = new ImageGalleryItem;
                $igi->image_gallery_id = $ig->id;
                $igi->addedby_id = Auth::id();
                $igi->save();
            }
        }
        if(! $ig->items()->count())
        {
            for($x = 1; $x <= 20; $x++)
            {
                $igi = new ImageGalleryItem;
                $igi->image_gallery_id = $ig->id;
                $igi->addedby_id = Auth::id();
                $igi->save();
            }
        }
        return view('common.gallery.imgGalleryAddNew',[

            'mediaAll'=>$mediaAll,
            'imageGallery'=>$ig
        ]);
    }

    public function imgGalleryItemAjaxPost(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
          'title'=> 'required|max:255',
          'description'=>'required|max:255',
          'img_url'=>'required|max:255'
        ]);
        if($validation->fails())
        {

            if($request->ajax())
            {
                return Response()->json(array(
                'success' => false,
                'errors' => $validation->errors()->toArray()
                ));
            }

            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Worng!');
        }

        $igi = ImageGalleryItem::where('id',$request->item)->first();
        if($igi)
        {
            $igi->title = $request->title ?: null;
            $igi->description = $request->description ?: null;
            $igi->img_url = $request->img_url ?: null;
            $igi->photo_credit = $request->photo_credit ?: null;
            $igi->editedby_id = $request->user()->id;
            $igi->publish_status = 'published';
            $igi->save();
        }

        Cache::flush();

        if($request->ajax())
        {
            return Response()->json(array('success' => true));
        }

        return back()->with('success', 'Data Successfully Saved');
    }

    public function imgGalleryAddNewPost(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
          'title'=> 'max:255',
        //   'description'=>'max:255',
          // 'date'=>'required'
        ]);
        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Worng!');
        }

        $ig = ImageGallery::where('publish_status', 'temp')->first();

        if($ig)
        {
            $ig->title = $request->title ?: null;
            $ig->description = $request->description ?: null;
            $ig->date = $request->date ?: null;
            $ig->publish_status = $request->publish ? 'published' : 'draft';
            $ig->editedby_id = Auth::id();
            $ig->save();

            $ig->items()->where('publish_status','temp')->delete();
        }

        Cache::flush();

        return back()->with('success', 'Your Gallery Successfully Saved.');
    }

    public function imgGalleriesAll(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'gallery','lsbsm'=>'imgGalleriesAll']);
        $galleries = ImageGallery::where('publish_status','<>', 'temp')->orderBy('date', 'desc')->paginate(40);
        return view('common.gallery.imgGalleriesAll',['galleries'=>$galleries]);
    }

    public function imgGalleryDelete(Request $request, ImageGallery $gallery)
    {
        $gallery->items()->delete();
        $gallery->delete();

        Cache::flush();

        return back()->with('info','Gallery Successfully Deleted.');
    }

    public function imgGalleryEdit(Request $request, ImageGallery $gallery)
    {
        $mediaAll = Media::latest()->paginate(200);

        for($x = $gallery->items()->count(); $x <= 20; $x++)
        {
            $igi = new ImageGalleryItem;
            $igi->image_gallery_id = $gallery->id;
            $igi->addedby_id = Auth::id();
            $igi->save();
        }

        return view('common.gallery.imgGalleryEdit',[
            'imageGallery'=>$gallery,
            'mediaAll'=>$mediaAll
        ]);
    }

    public function imgGalleryEditPost(Request $request, ImageGallery $gallery)
    {
        $validation = Validator::make($request->all(),
        [
          'title'=> 'max:255',
        //   'description'=>'max:255',
        ]);
        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Worng!');
        }

        $ig = $gallery;

        if($ig)
        {
            $ig->title = $request->title ?: null;
            $ig->description = $request->description ?: null;
            $ig->date = $request->date ?: null;
            $ig->publish_status = $request->publish ? 'published' : 'draft';
            $ig->editedby_id = Auth::id();
            $ig->save();

            $ig->items()->where('publish_status','temp')->delete();
        }

        Cache::flush();

        return redirect()->route('common1.imgGalleriesAll')->with('success', 'Your Gallery Successfully Updated.');
    }


    //img gallery //image gallery

    //video gallery //vdo gallery
    public function videoGalleriesAll(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'videoGallery','lsbsm'=>'videoGalleriesAll']);
        $galleries = VideoGallery::where('publish_status','<>', 'temp')->orderBy('date', 'desc')->paginate(40);
        return view('common.gallery.videoGalleriesAll',['galleries'=>$galleries]);
    }

    public function videoGalleryAddNew(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'videoGallery','lsbsm'=>'videoGalleryAddNew']);
        $ig = VideoGallery::where('publish_status', 'temp')->first();

        if(!$ig)
        {
            $ig = new VideoGallery;
            $ig->addedby_id = Auth::id();
            $ig->save();
        }
        return view('common.gallery.videoGalleryAddNew',[

            'videoGallery'=>$ig
        ]);
    }

    public function videoGalleryAddNewPost(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
          'title'=> 'required|max:255',
          'description'=>'max:255',
          'videoUrl' => 'required',
        ]);
        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Worng!');
        }

        $ig = VideoGallery::where('publish_status', 'temp')->first();

        if($ig)
        {
            $ig->title = $request->title ?: null;
            $ig->description = $request->description ?: null;
            $ig->video_url = $request->videoUrl ?: null;
            $ig->publish_status = $request->publish ? 'published' : 'draft';
            $ig->date = $request->date ?: null;
            $ig->addedby_id = Auth::id();
            $ig->editedby_id = Auth::id();
            $ig->save();
        }

        Cache::flush();

        return back()->with('success', 'Your Gallery Successfully Saved.');
    }

    public function videoGalleryDelete(Request $request, VideoGallery $gallery)
    {
        $gallery->delete();

        Cache::flush();

        return back()->with('info','Video Gallery Successfully Deleted.');
    }

    public function videoGalleryEdit(Request $request, VideoGallery $gallery)
    {


        return view('common.gallery.videoGalleryEdit',[
            'videoGallery'=>$gallery
        ]);
    }

    public function videoGalleryEditPost(Request $request, VideoGallery $gallery)
    {
        $validation = Validator::make($request->all(),
        [
          'title'=> 'required|max:255',
          'description'=>'max:255',
          'videoUrl' => 'required',
        ]);
        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Worng!');
        }

            $ig = $gallery;

            $ig->title = $request->title ?: null;
            $ig->description = $request->description ?: null;
            $ig->video_url = $request->videoUrl ?: null;
            $ig->publish_status = $request->publish ? 'published' : 'draft';
            $ig->date = $request->date ?:null;
            $ig->editedby_id = Auth::id();
            $ig->save();

            Cache::flush();

        return redirect()->route('common1.videoGalleriesAll')->with('success', 'Your Video Gallery Successfully Updated.');
    }


    //video gallery //vdo gallery
    
    //image gallery
    public function imageGalleriesAll(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'imageGallery','lsbsm'=>'imageGalleriesAll']);

        $galleries = Gallery::latest()->paginate(100);

        return view('common.gallery.imageGalleriesAll', ['galleries'=>$galleries]);
    }

    public function galleryImageAddNew(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
            'images'=> 'required',
            'title'=> 'string|max:200',
        ]);
    if($validation->fails())
    {
        return back()
        ->withErrors($validation)
        ->withInput()
        ->with('error', 'Please, Try again');
    }

    $extensions = collect(['png','jpg','jpeg', 'bmp']);
    if($request->hasFile('images'))
    {
        foreach($request->file('images') as $t)
        {
            if(!$extensions->contains(strtolower($t->getClientOriginalExtension())))
            {
                return back()->with('error', 'Please, Upload png or jpg files.');
            }                    
        }
        foreach($request->file('images') as $file)
        {
            // $originalName = $file->getClientOriginalName();
            $ext = strtolower($file->getClientOriginalExtension());
            $fileNewName = Str::random(8).time().'.'.$ext;
            $mime = $file->getClientMimeType();

            Storage::disk('upload')
            ->put('gallery/'.$fileNewName, File::get($file));

            $gallery = new Gallery;
            $gallery->image_title = $request->image_title;
            $gallery->image_name = $fileNewName;
            $gallery->addedby_id = Auth::id();
            $gallery->save();

            Cache::flush();
        }

        return back()->with('success','Gallery Images Successfully Uploaded.');
    }
    }


    public function galleryImageDelete(Gallery $gallery, Request $request)
    {
        if($gallery)
        {
            Storage::disk('upload')->delete('gallery/'.$gallery->image_name);
            $gallery->delete();
        }
        return back()->with('success', 'Gallery image successfully deleted.');
        
    }


    //image gallery


    // blog
    // public function newPost()
    // {
    //     menuSubmenu('blog', 'newPost');
    //     return view('common.blog.newPost');
    // }
    // public function allPosts()
    // {
    //     menuSubmenu('blog', 'allPosts');
    //     return view('common.blog.allPosts');
    // }
}

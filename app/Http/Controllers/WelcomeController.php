<?php

namespace App\Http\Controllers;

use Auth;
use Agent;
use Browser;
use App\Model\User;
use App\Model\Page;
use App\Model\Branch;
use App\Model\Country;
use App\Model\FrontSlider;
use App\Model\ImageGallery;
use App\Model\VideoGallery;
use Illuminate\Http\Request;
use App\Model\UserSettingField;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

class WelcomeController extends Controller
{

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


	public function welcome(Request $request)
    {
      //dd('abc');
      if (Auth::check())
      {

        $me = Auth::user();
        //dd($me);
        // $me->listForAutoMail()->firstOrCreate([]);


        // if (! $me->searchTerm)
        // {
        //   $me->searchTerm()->create(['addedby_id' => $me->id]);
        // }

        // if(!$me->uploadedPP())
        // {
        //   return redirect()->route('user.myPhotoUpload');
        // }

        $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });

        // $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
        //             return UserSettingField::all();
        //         });

        $userSettingFields = UserSettingField::all();
        return view($this->device.'welcome.welcome',[
          'countries' => $countries,
          'userSettingFields' => $userSettingFields,
          'me'=>$me
        ]);
      }

      // $sliders = Cache::remember('frontSliders', 518400, function () {
      //           return FrontSlider::all();
      //       });

        // $stories = Cache::remember('frontStories', 518400, function () {
        //         return SuccessProfile::latest()->paginate(2);
        //     });
         // dd('abc');
      	$countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });


      	// $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
       //              return UserSettingField::all();
       //          });

        $userSettingFields = UserSettingField::all();

      $latestGallery = Cache::remember('img_gallery_latest', $this->minutes, function () {
            return ImageGallery::has('items')->where('publish_status','published')
            ->orderBy('date', 'desc')
            ->first();
        });

      $galleries = Cache::remember('galleries', $this->minutes, function () {
            return ImageGallery::has('items')->where('publish_status','published')
            // ->whereNotIn('id',[$latestGallery->id])
            ->orderBy('date', 'desc')
            ->paginate(6);
        });

      $vgs = Cache::remember('video_galleries', $this->minutes, function () {
            return VideoGallery::where('publish_status','published')
                    ->orderBy('date', 'desc')->paginate(3);
        });

       $branches = Cache::remember('branches', $this->minutes, function () {
            return Branch::all();
        });

       $sliders = Cache::remember('frontSliders', 518400, function () {
                return FrontSlider::all();
            });

   		return view('welcome.guestWelcome',[
            // 'users'=>$users,
            'sliders' => $sliders,
            'stories' => [],
            'latestGallery'=>$latestGallery,
            'galleries'=>$galleries,
            'countries'=> $countries,
            'userSettingFields' => $userSettingFields,
            'videoGalleries'=> $vgs,
            'branches' => $branches,
        ]);
   }

    public function ourBranches()
    {
        $me = Auth::user();
        $branches = Cache::remember('branches', $this->minutes, function () {
            return Branch::all();
        });
        if(Auth::check()){
              return view($this->device.'welcome.ourBranches',compact('branches', 'me'));
            }
        else{
            return view('welcome.guestOurBranches', compact('branches'));
        }
    }

   public function username(Request $request)
  {
    if(Auth::check())
    {
      if(Auth::user()->isAdmin())
      {
        $user = User::withoutGlobalScopes()->where('username', $request->username)->first();

        if($user)
        {
          return view($this->device.'welcome.userDetails',['user'=>$user]);
        }
        abort('404');
      }

      $user = User::where('username', $request->username)
      ->whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', Auth::id());
            })
        ->whereDoesntHave('blockss', function($qq){
            $qq->where('user_second_id', Auth::id());
        })
        // ->whereHas('userPictures', function ($query) {
        //     $query->where('image_type', 'profilepic');
        //     $query->where('checked', true);
        //   })
        ->first();
    }
    else
    {
      $user = User::where('username', $request->username)
      ->whereHas('userPictures', function ($query) {
            $query->where('image_type', 'profilepic');
            $query->where('checked', true);
          })
      ->first();
    }

    if($user)
    {
      if (Auth::check()) {
          $user->iAmVisitedBy(Auth::user());
      }

      return view($this->device.'welcome.userDetails',['user'=>$user]);
    }
    abort('404');
  }


   //page
    public function page($page, Request $request)
    {
      // dd($page);
        $page = Page::where('id', $page)
        // ->where('active', true)
        ->first();

        // dd($page);



        if($page){

          $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });


        $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
                    return UserSettingField::all();
                });

            if(Auth::check()){
              return view($this->device.'welcome.pages.page',[
                'page' => $page,
                'countries'=>$countries,
                'userSettingFields'=>$userSettingFields,
                'me'=>Auth::user()
                ]);
            }
            return view('welcome.pages.guestPage',[
              'page' => $page,
              'countries'=>$countries,
              'userSettingFields'=>$userSettingFields,

              ]);

        }
        else{
            abort(404);
        }

    }
    //page

    public function test(Request $request)
    {

	   	if (View::exists("welcome.testViews.{$request->view}"))
	   	{

	    	return view("welcome.testViews.{$request->view}");
  		}
  		else
  		{
  			return view($this->device.'welcome.testViews.1');
  		}
	}

  //gallery
    public function gallery(ImageGallery $gallery, Request $request)
    {
        $galleries = ImageGallery::has('items')->where('publish_status','published')
        // ->whereNotIn('id',[$latestGallery->id])
        ->orderBy('date', 'desc')
        ->paginate(36);

        $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });

        $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
                    return UserSettingField::all();
                });



        return view($this->device.'welcome.imageGallery', [
            'latestGallery'=>$gallery,
            'galleries' =>$galleries,
            'countries'=>$countries,
            'userSettingFields'=>$userSettingFields

        ]);

    }
//gallery

//video gallery
    public function videoGallery(Request $request)
    {
        $gallery = VideoGallery::where('publish_status','published')->where('id',$request->gallery)->first();
        if(! $gallery)
        {
            $gallery = VideoGallery::where('publish_status','published')->latest()->first();
        }

        $galleries = VideoGallery::where('publish_status','published')
        // ->whereNotIn('id',[$latestGallery->id])
        ->orderBy('date', 'desc')->paginate(12);

         $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });

        $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
                    return UserSettingField::all();
                });

        return view($this->device.'welcome.videoGallery', [
            'latestGallery'=>$gallery,
            'galleries' =>$galleries,
            'countries'=>$countries,
            'userSettingFields'=>$userSettingFields
        ]);

    }
//video gallery



}

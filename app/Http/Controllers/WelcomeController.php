<?php

namespace App\Http\Controllers;

use Auth;
use Agent;
use Mail;
use Browser;
use App\Model\User;
use App\Model\Page;
use App\Model\Branch;
use App\Model\Country;
use App\Model\Gallery;
use App\Model\FrontSlider;
use App\Model\ImageGallery;
use App\Model\VideoGallery;
use App\Mail\InformationSend;
use App\Model\BranchUser;
use App\Model\CareerApplication;
use App\Model\MembershipPackage;
use App\Model\UserPayment;
use App\Model\UserRole;
use Illuminate\Http\Request;
use App\Model\UserSettingField;
use App\TeamMember;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class WelcomeController extends Controller
{

  public function __construct()
  {
    $this->middleware(['welcome','profile.check', 'locale']);

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
      // dd('abc');
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
        //});

        $userSettingFields = UserSettingField::all();
        
        return view($this->device.'welcome.welcome',[
          'countries' => $countries,
          'userSettingFields' => $userSettingFields,
          'me'=>$me,
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

        $photos = Gallery::orderBy('featured', 'DESC')->latest()->take(7)->get();
        // $featuredProfiles = User::inRandomOrder()->where('active', 1)->where('img_name', '<>', null)->take(8)->get();
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
            // 'featuredProfiles' => $featuredProfiles,
            'photos' => $photos,
        ]);
   }

   public function incompleteProfile()
   {
    $countries = Cache::remember('countries', 518400, function () {
      return Country::select('name as title')->get();
  });


$userSettingFields = Cache::remember('userSettingFields', 518400, function () {
      return UserSettingField::all();
  });
     $me = auth()->user();
     return view($this->device.'welcome.incompleteProfile',[
        'me' => $me,
        'countries' => $countries,
     ]);
   }
   public function createProfile(Request $request)
   {
    //  dd($request->all());
    $request->merge(array_map('trim', $request->all()));
    // $validation = $this->validate($request, [
    $validation = Validator::make($request->all(), [
      //  'full_name'=> 'required|min:4|max:20',
        // 'username' => 'required|string|min:4|max:20|unique:users,username',
        // 'email'=> 'required|email|max:30|unique:users,email',
        // 'password' => 'required|string|min:6|confirmed',
        // 'mobile'=> 'required|unique:users,mobile',
        // 'guardian_mobile'=> 'required|unique:users,guardian_mobile',
        'gender' => 'required',
        'country' => 'required|exists:countries,name',
        'birthdate'=> 'required|date',
        'created_by'=> 'required',
        // 'religion'=> 'required',
        // 'social_order' => 'required',
        // 'looking_for' => 'required',
        'height'=>'required',
        'weight'=>'required',
        'religion'=>'required',
        'marital_status'=>'required',
        'skin_color'=>'required',
        'education_level'=>'required',
        'profession'=> 'required',
        // 'file'=>'required|image|mimes:jpeg,bmp,png,gif|dimensions:min_width=200,min_height=200',
        'height_minimum' => 'required',
        'height_maximum' => 'required',
        'minimum_age' => 'required',
        'maximum_age' => 'required',
        'partner_marital_status' => 'required',
        'partner_country' => 'required',
        // 'partner_country_other' => 'required',
        'partner_religion' => 'required',
        'partner_profession' => 'required',
        // 'partner_profession_other' => 'required',

    // "lat" => "23.810332"
    // "lng" => "90.41251809999994"
    // "location" => "Dhaka, Bangladesh"
    // "_token" => "3kGj8XuYN0ZTJlHxWoYvIaTk6mtpZVcRn9H3Mb4a"
    // "finish" => "Finish"
    // "file" => 'required|image'

    ]);

    if($validation->fails())
    {
      return back()
      ->withErrors($validation)
      ->withInput()
      ->with('error', 'All the information fields are required. Please, Upload an image of size (200px X 200px) or larger.');
    }
    // dd($request->all());
    $user = User::find(auth()->user()->id);
     $user->gender = $request->gender;
     $user->religion = $request->religion;
     if($request->gender == 'Male')
     {
         $lf = 'Female';
     }
     else{

         $lf = 'Male';
     }

     $user->looking_for = $lf;
     // $user->social_order = $request->social_order;

     $user->country = $request->country;

     if( ($request->country == 'Other') ||
         ($request->country == 'Others'))
     {
         $user->country_other = $request->country_other;

     }else{

         $user->country_other = null;
     }

     $user->profile_created_by = $request->created_by;

     // if( ($request->created_by == 'Other') ||
     //     ($request->created_by == 'Others'))
     // {
     //     $user->profile_created_by_other = $request->createdby_other;
     // }else{

     //     $user->profile_created_by_other = null;
     // }

     $user->height = $request->height;
     $user->weight = $request->weight;
     $user->marital_status = $request->marital_status;
     $user->skin_color = $request->skin_color;
     $user->education_level = $request->education_level;

     if( ($request->education_level == 'Other') ||
         ($request->education_level == 'Others'))
     {
         $user->education_level_other = $request->education_level_other;
     }else{

         $user->education_level_other = null;
     }

     $user->profession = $request->profession;

     if( ($request->profession == 'Other') ||
         ($request->profession == 'Others'))
     {
         $user->profession_other = $request->profession_other;
     }else{

         $user->profession_other = null;
     }

     if ($request->location)
     {
         $user->lat = $request->lat;
         $user->lng = $request->lng;
         $user->location = $request->location;
     }

     $user->edit_count = 1;


     $user->dob = Date($request->birthdate);
     $user->username = $user->id;
     $user->addedby_id = 1;
     $user->profile = true;
     $user->save();


     if($request->hasFile('file'))
     {
         $cp = $request->file('file');
 
         $extension = strtolower($cp->getClientOriginalExtension());
         $mime = $cp->getClientMimeType();
         $size =$cp->getSize();
 
         $randomFileName = $user->id.'_pp_'.date('Y_m_d_his').'_'.rand(11111111,99999999).'.'.$extension;
 
         list($originalWidth,$originalHeight) = getimagesize($cp);
 
             $image = Image::make($cp)
             // ->crop($cw, $ch, $x, $y)
             // ->resize(160, 160)
             ->save(public_path().'/storage/users/pp/'.$randomFileName, 90);
             // $watermark = Image::make(public_path('/img/tmm5.png'));
             // $image->insert($watermark);
             // $image->save();
             $originalWidth = $image->width();
             $originalHeight = $image->height();
             $image->destroy();
         // }
 
 
         $cp = $user->userPictures()
         ->create([]);
         $cp->autoload = true;
         $cp->image_type = 'profilepic';
         $cp->image_name = $randomFileName;
         $cp->image_mime = $mime;
         $cp->image_ext = $extension;
         $cp->image_width = $originalWidth;
         $cp->image_height = $originalHeight;
         $cp->image_size = $size;
         $cp->image_alt = env('APP_NAME_BIG');
 
         // if(servTru())
         // { $cp->save(); } else{}
         $cp->save();
 
 
         // $oldRow = $user->userPictures()
         // ->whereImageType('profilepic')
         // ->whereAutoload(true)
         // ->orderBy('id','desc')
         // ->offset(1)
         // ->update(['autoload'=>false, 'editedby_id'=>$user->id]);
     }
 
     $st = $user->searchTerm()->create(['addedby_id'=>$user->id]);

     
    $st->min_age = $request->minimum_age;
    $st->max_age = $request->maximum_age;
    $st->country = $request->partner_country;
    $st->country_other = $request->partner_country_other ?: null;
    $st->profession = $request->partner_profession;
    $st->profession_other = $request->partner_profession_other ?: null;
    $st->marital_status = $request->partner_marital_status;
    $st->min_height = $request->height_minimum;
    $st->max_height = $request->height_maximum;
    $st->religion = $request->partner_religion;

    $st->save();




     $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });

        // $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
        //             return UserSettingField::all();
        //         });

        $userSettingFields = UserSettingField::all();
        return redirect()->route('welcome.welcome')->with('success', 'Your profile saved successfully');
   }
   public function createProfilePost(Request $request)
   {
     $me = User::where('id',auth()->user()->id)->first();
     if ($request->agreement != null) {
       @$c = $me->country;
       @$edu = $me->userEducationRecord->count();
       @$wrk = $me->userWorkingRecord->count();
       @$prefer = $me->searchTerm->min_age;
       @$profilePic = $me->userProfilePics()->count();
       @$photos = $me->userPhotos()->count();
       if (isset($c) && !empty($c) && isset($edu) && $edu > 0 && isset($wrk) && $wrk > 0 && isset($prefer) && !empty($prefer) && isset($profilePic) && $profilePic > 0 && isset($photos) && $photos > 2 ) {
         $me->profile = true;
         $me->save();
         return redirect()->route('welcome.welcome')->with('success', 'Your profile saved successfully');
       }else{
        return redirect()->back()->with('error', 'Please complete your profile.');
       }
     }else{
      return redirect()->back()->with('error', 'Please accept our terms and conditions.');
     }
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

    public function successStories()
    {
      $me = Auth::user();
        
        if(Auth::check()){
              return view($this->device.'welcome.successStories',compact( 'me'));
            }
        else{
            return view('welcome.guestSuccessStories');
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


      //image gallery
    public function photoGallery(Request $request)
    {
        $galleries = Gallery::latest()->paginate(48);

        if(Auth::check())
        {
          return view($this->device.'welcome.photoGallery2021', ['galleries'=>$galleries]);
        }else
        {
          return view('welcome.photoGallery2021', ['galleries'=>$galleries]);
        }
        
    }
    //image gallery

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
        ->orderBy('date', 'desc')->paginate(4);

         $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });

        $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
                    return UserSettingField::all();
                });

        if (auth()->user()) {
          return view($this->device.'welcome.videoGallery', [
            'latestGallery'=>$gallery,
            'galleries' =>$galleries,
            'countries'=>$countries,
            'userSettingFields'=>$userSettingFields
        ]);
        } else {
          return view('welcome.guestVideoGallery', [
            'latestGallery'=>$gallery,
            'galleries' =>$galleries,
            'countries'=>$countries,
            'userSettingFields'=>$userSettingFields
        ]);
        }

        

    }
//video gallery
    public function contactAdmin(Request $request)
    {
      // dd($request->all());
      $name =  $request->name;
      $email = $request->email;
      $desc = $request->desc;
      // $seeking_for = $request->seeking_for;
      $mobile = $request->mobile;
      $companUrl = env('APP_URL');

      $emailto = 'marriagesolutionbd@gmail.com';
      // env('MAIL_USERNAME')
      Mail::to($emailto)->send(new InformationSend($desc, $mobile, $name , $email));

      return back()->with('success','Your Information Submitted Successfully.');
    }

    public function teamMembers(TeamMember $teamMember)
    {
      $branches = Branch::all();
      $ceos = $teamMember->where('active', 1)->where('team_name', 'CEO')->get();
      $marketingTeam = $teamMember->where('active', 1)->where('team_name', 'Marketing Team')->get();
      $serviceTeam = $teamMember->where('active', 1)->where('team_name', 'Service Team')->get();
      $itTeam = $teamMember->where('active', 1)->where('team_name', 'IT Team')->get();
      if (auth()->check()) {
        return view($this->device.'welcome.teammembers',[
          'branches'=> $branches,
          'ceos'=> $ceos,
          'marketingTeam'=> $marketingTeam,
          'serviceTeam'=> $serviceTeam,
          'itTeam'=> $itTeam,
        ]);
      }
      return view('welcome.guestTemmembers',[
        'ceos'=> $ceos,
        'branches'=> $branches,
        'marketingTeam'=> $marketingTeam,
        'serviceTeam'=> $serviceTeam,
        'itTeam'=> $itTeam,
      ]);
    }
    public function branchTeamMembers(Branch $branch, TeamMember $teamMember)
    {
      $ceos = $teamMember->where('active', 1)->where('team_name', 'CEO')->get();
      $marketingTeam = $branch->marketingTeamMembers();
      $serviceTeam = $branch->serviceTeamMembers();
      $itTeam = $branch->itTeamMembers();
      if (auth()->check()) {
        return view($this->device.'welcome.branchTeammembers',[
          'branch'=> $branch,
          'ceos'=> $ceos,
          'marketingTeam'=> $marketingTeam,
          'serviceTeam'=> $serviceTeam,
          'itTeam'=> $itTeam,
        ]);
      }
      return view('welcome.guestBranchTemmembers',[
        'branch'=> $branch,
        'ceos'=> $ceos,
        'marketingTeam'=> $marketingTeam,
        'serviceTeam'=> $serviceTeam,
        'itTeam'=> $itTeam,
      ]);
    }

    public function serviceCenter()
    {
      $me = auth()->user();
      $branches = Branch::all();
      return view($this->device.'.welcome.serviceCenter', [
        'branches' => $branches,
        'me' => $me,
      ]);
    }

    public function chooseService()
    {
      $me = auth()->user();
      $branches = Branch::all();
      return view($this->device.'.welcome.chooseService', [
        'branches' => $branches,
        'me' => $me,
      ]);
    }
    public function choosePackage()
    {
      $me = auth()->user();
      $packages = MembershipPackage::where('live', true)->get();
      return view($this->device.'.welcome.choosePackage', [
        'packages' => $packages,
        'me' => $me,
      ]);
    }
    public function savePackage(Request $request)
    {
      $this->validate($request,[
        'package' => 'required',
      ]);
      $user = auth()->user();
      $package = MembershipPackage::where('id', $request->package)
        ->first();
        if($package)
        {
          $inactivePayment = UserPayment::where('user_id', $user->id)
              ->where('status', 'inactive')->first();
          if ($inactivePayment) {
              $payment = $inactivePayment;
          }else{
              $payment = new UserPayment;
          }
          $payment->status = 'inactive';
          $payment->membership_package_id = $package->id;
          $payment->package_title = $package->package_title;
          $payment->package_description = $package->package_description;
          $payment->package_amount = $package->package_amount;
          $payment->package_currency = $package->package_currency;
          $payment->package_duration = $package->package_duration;
          $payment->paid_amount = $package->package_amount ?? '';
          $payment->paid_currency = $package->package_currency ?? '';
          $payment->payment_method = 'Online';
          $payment->user_id = $user->id;
          $payment->addedby_id = Auth::id();
          $payment->save();

          $user->package = $payment->membership_package_id;
          $expired_at = $user->expired_at;
          if($expired_at > now()){
              if ($inactivePayment) {
                  $expired_at = $expired_at->subDays($inactivePayment->package->package_duration);
              }
              $user->expired_at = $expired_at->addDays($payment->package_duration);
          }else{
              $user->expired_at = now()->addDays($payment->package_duration);
          }
          if ($inactivePayment) {
              $psdl =  ($user->proposal_send_daily_limit - $inactivePayment->package->proposal_send_daily_limit)+$package->proposal_send_daily_limit;
              $pstl = ($user->proposal_send_total_limit - $inactivePayment->package->proposal_send_total_limit)+$package->proposal_send_total_limit;
              $cvl = ($user->contact_view_limit - $inactivePayment->package->contact_view_limit)+$package->contact_view_limit;
          }else{
              $psdl = $user->proposal_send_daily_limit + $package->proposal_send_daily_limit;
              $pstl = $user->proposal_send_total_limit + $package->proposal_send_total_limit;
              $cvl = $user->contact_view_limit + $package->contact_view_limit;
          }
          $user->proposal_send_daily_limit    = $psdl;
          $user->proposal_send_total_limit    = $pstl;
          $user->contact_view_limit           = $cvl;
          $user->save();
        }else{
          return redirect()->back()->with('error', 'Invalid package is selected. Please try again');
        }
      return redirect()->route('welcome.welcome')->with('success', 'Package has been selected successfully. Please make the payment.');
    }

    public function branchContactPersons($branch)
    {
      $contactPersons = UserRole::where('branch_id', $branch)->with('user')->get();
      return response()->json($contactPersons, 200);
    }

    public function serviceCenterSave(Request $request)
    {
        $this->validate($request,[
          'branch' => 'required',
          'contact_person' => 'required',
        ]);
        $user = auth()->user();
        
        $user->branches()->detach();

        $c = BranchUser::where('branch_id',$request->branch)->where('user_id',$user->id)->first();
        if(!$c)
        {
            $c = new BranchUser;
            $c->branch_id     = $request->branch;
            $c->contact_user_role_id = $request->contact_person;
            $c->user_id       = $user->id;
            $c->addedby_id    = Auth::id();
            $c->save();    
        }
        return redirect()->route('welcome.welcome')->with('success', 'Your Service center is selected successfully.');
    }

    public function incompletePayment()
    {
      $me = auth()->user();
      $inactivePayment = UserPayment::where('user_id', $me->id)->where('status', 'inactive')->first();
      return view('welcome.incompletePayment', [
        'inactivePayment' => $inactivePayment,
        'me' => $me
      ]);
    }

    public function languageChange(Request $request)
    {
      if (Cookie::get('locale') == 'bn')
        {
           
            // return redirect()->back()->withCookie(Cookie::forget('locale'));
            $cookie = cookie('locale', 'en', 43200);
            return redirect()->back()->withCookie($cookie);

        }else
        {
            $cookie = cookie('locale', 'bn', 43200);
            return redirect()->back()->withCookie($cookie);
        }
        // $cookie = cookie('name', 'value', $minutes);
        // $bn = $request->cookie('locale');
        // if($bn)
        // {
        //   App::setLocale('en');
        //   return redirect()->back()->withCookie(Cookie::forget('locale'));
        // }else
        // {
        //     $cookie = cookie('locale', 'bn', 43200);
        //     App::setLocale('bn');
        //     return redirect()->back()->withCookie($cookie);
        // }

        // if(Cookie::get('locale') == 'bn')
        // {
        //     App::setLocale('bn');
        // }
        // elseif(Cookie::get('locale') == 'en')
        // {
        //     App::setLocale('en');
        // }

        // elseif(Cookie::get('locale') == null)
        // {
        //     $cookie = cookie('locale', 'bn', 43200);
        //     App::setLocale('bn');
        //     return redirect()->back()->withCookie($cookie);
        // }

        // return redirect()->back();
    }

    public function membershipPackages()
    {
      $packages = MembershipPackage::where('live', true)->get();
      if (auth()->check()) {
        return view($this->device.'welcome.memberships', [
          'packages' => $packages,
        ]);
      }
      return view('welcome.guestMemberships', [
        'packages' => $packages,
      ]);
    }
    public function careerApply(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|max:255',
        'email' => 'email|max:255',
        'mobile' => 'required|max:255',
        'address' => 'required',
        'cv' => 'required|mimes:pdf,image,doc,docx|max:2048',
      ]);

      $application = new CareerApplication;
      $application->name = $request->name;
      $application->email = $request->email;
      $application->mobile = $request->mobile;
      $application->address = $request->address;
      $application->cover_letter = $request->cover_letter;
      if ($request->hasFile('cv')) {
          $file = $request->cv;
          $ext = $file->getClientOriginalExtension();

          $imageNewName = Str::random(8).time().'.'.$ext;

          Storage::disk('upload')
          ->put('application/cv/'.$imageNewName, File::get($file));

          $application->cv = 'storage/application/cv/'.$imageNewName;
      }
      $application->save();

      return redirect()->back()->with('success', 'Your application has been placed successfully.');
    }
}

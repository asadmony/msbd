<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Str;
use Hash;
use Validator;
use Carbon\Carbon;
use App\Model\Page;
use App\Model\User;
use App\Model\Branch;
use App\Model\Report;
use GuzzleHttp\Client;
use App\Model\Country;
use App\Model\UserRole;
use App\Model\MediaPerson;
use App\Model\FrontSlider;
use App\Model\UserRoleItem;
use Illuminate\Http\Request;
use App\Model\UserSettingItem;
use App\Model\UserSettingField;
use App\Model\WebsiteParameter;
use App\Model\MembershipPackage;
use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Exception\GuzzleException;
use Intervention\Image\ImageManagerStatic as Image;

class AdminController extends Controller
{
    public function dashboard()
    {
    	$request = request();
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'dashboard','lsbsm'=>'dashboard']);
    	// return view('admin.dashboard');

        $request->user()->update(['updated_at'=>Carbon::now()]);

        return view('admin.dashboard',[
            'all_u' => User::withoutGlobalScopes()->count(),
            'online_u'=>User::where('updated_at', '>=', Carbon::now()->subMinutes(4))->count(),
            'f_u' => User::where('gender', 'Female')->count(),
            'm_u'=> User::where('gender', 'Male')->count(),
            'sub_u'=> User::where('expired_at', '<=', Carbon::now())->orWhereNull('expired_at')->count(),
            'd_p_u'=>User::whereIn('package', [4,8])
            ->where('expired_at', '>=', Carbon::now())->count(),
            'd_u'=> User::whereIn('package', [3,7])
            ->where('expired_at', '>=', Carbon::now())->count(),
            'g_p_u'=> User::whereIn('package', [2,6])
            ->where('expired_at', '>=', Carbon::now())->count(),
            'g_u' => User::whereIn('package', [1,5])
            ->where('expired_at', '>=', Carbon::now())->count(),
            'o_b_a_u'=> User::orderBy('dob', 'desc')->count(),
            'v_10_u'=> User::where('expired_at', '>=', Carbon::now())->where('expired_at', '<', Carbon::now()->addDays(10))->count(),
            'complain'=> Report::where('status', 'pending')->count(),
            'deac_u' => User::withoutGlobalScopes()
            ->where('active', false)->count()
        ]);
    }

    //websiteparameter

    public function websiteParameter()
    {
        $request = request();
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'dashboard','lsbsm'=>'websiteParameter']);

        $post = WebsiteParameter::firstOrCreate([]);

        return view('admin.websiteParameter',['post'=>$post]);
    }

    public function websiteParameterUpdate(Request $request)
    {
        $validation = Validator::make($request->all(),
        [ 

          'meta_keyword' => 'max:255',

        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Worng!');
        }
        
        $request = request();
        $post = WebsiteParameter::firstOrCreate([]);

        $post->title = $request->title;
        $post->short_title = $request->short_title;
        $post->h1 = $request->h1;
        $post->google_analytics_code = $request->google_analytics_code;
        $post->facebook_pixel_code = $request->facebook_pixel_code;
        $post->meta_author = $request->meta_author;
        $post->meta_keyword = $request->meta_keyword;
        $post->meta_description = $request->meta_description;
        $post->slogan = $request->slogan;
        $post->footer_address = $request->footer_address;
        $post->footer_copyright = $request->footer_copyright;
        $post->addthis_url = $request->addthis_url;
        $post->fb_page_code = $request->fb_url;
        $post->contact_mobile = $request->contact_mobile;
        $post->contact_email = $request->contact_email;
        // $post->linkedin_url = $request->linkedin_url;
        // $post->twitter_url = $request->twitter_url;
        // $post->pinterest_url = $request->pinterest_url;
        // $post->youtube_url = $request->youtube_url;
        // $post->google_plus_url = $request->google_plus_url;
        // $post->google_map_code = $request->google_map_code;
        // $post->main_color = $request->main_color ?: 'default';
        // $post->sub_color = $request->sub_color ?: 'default';
        // $post->header_bg_color = $request->header_bg_color ?: 'default';
        // $post->header_text_color = $request->header_text_color ?: 'default';
        // $post->footer_bg_color = $request->footer_bg_color ?: 'default';
        // $post->footer_text_color = $request->footer_text_color ?: 'default';

        if($request->favicon)
        {
            $file = $request->favicon;
            Storage::disk('upload')->delete('favicon/'.$post->favicon);

            $originalName = $file->getClientOriginalName();
            Storage::disk('upload')->put('favicon/'.$originalName, File::get($file));
            $post->favicon = $originalName;
        }

        if($request->logo)
        {
            $file = $request->logo;
            Storage::disk('upload')->delete('logo/'.$post->logo);

            $originalName = $file->getClientOriginalName();
            Storage::disk('upload')->put('logo/'.$originalName, File::get($file));
            $post->logo = $originalName;
        }

        // if($request->android_apk)
        // {
        //     $apk = $request->android_apk;
        //     Storage::disk('upload')->delete('apk/'.$post->android_apk);

        //     $on = $apk->getClientOriginalName();
        //     Storage::disk('upload')->put('apk/'.$on, File::get($apk));
        //     $post->android_apk = $on;
        // }

        $post->save();

        Cache::forget('websiteParameter');

        return back()->with('success', 'Website Parameter Successfully Updated.');
    }
    //websiteparameter


    // userSetting

     public function userSettingList()
    {
        $request = request();
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'dashboard','lsbsm'=>'allUserSettingList']);
        $fields = UserSettingField::paginate(100);
        return view('admin.userSettingList', ['fields'=>$fields]);
    }

    public function userSettingFieldAdd(Request $request)
    {
         $validation = Validator::make($request->all(),
        [ 

          'setting_field_name' => 'required|unique:user_setting_fields,title',

        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Worng!');
        }

        $field = new UserSettingField;
        $field->title = $request->setting_field_name;
        $field->addedby_id = Auth::id();
        $field->save();

        Cache::forget('userSettingFields');

        return back()->with('success', 'User setting field successfully created.');
    }

    public function userSettingFieldValue()
    {
        $request = request();
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'dashboard','lsbsm'=>'userSettingFieldValue']);
        $fields = UserSettingField::with('values')->paginate(100);
        return view('admin.userSettingFieldValue', ['fields'=> $fields]);
    }

    public function userSettingFieldValueAddPost(Request $request)
    {
         $validation = Validator::make($request->all(),
        [ 

          'setting_field_name' => 'required',
          'setting_field_value' => 'required'

        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Worng!');
        }

        $f = trim($request->setting_field_name);
        $v = trim($request->setting_field_value);

        $field = UserSettingField::where('title', 'like', "{$f}%")->first();
        if ($field) {
            $value = new UserSettingItem;
            $value->title = $v;
            $value->field_id = $field->id;
            $value->addedby_id = Auth::id();
            $value->save();

            Cache::forget('userSettingFields');

            return back()->withInput()->with('success', 'User setting value successfully saved.');
        }
        return back()->withInput()->with('error', 'Please, select the setting name first.');
    }

    public function userSettingValueDelete(UserSettingItem $value, Request $request)
    {
        $value->delete();
        if($request->ajax())
        {
            return Response()->json(['success' => true]);
        }

        Cache::forget('userSettingFields');
        
        return back()->with('info','User Setting Value Successfully Deleted.');
    }

    public function userSettingValueEdit(UserSettingItem $value, Request $request)
    {
        if($request->ajax())
        {
            return Response()->json(View('admin.ajax.settingValueSingleTrEdit',[
                'value' => $value,
                'i'=>$request->i
            ])->render());
        }
    }

    public function UserSettingValueUpdate(UserSettingItem $value, Request $request)
    {

        $validation = Validator::make($request->all(),
        [ 
            // 'name'=> 'required|min:1|max:255|unique:user_setting_items,title,'.$value->id,
            'name'=> 'required|min:1|max:255',
        ]);
        if($validation->fails())
        {
            return Response()->json(View('admin.ajax.settingValueSingleTrTdAll',[
                'value' => $value,
                'i'=>$request->i
            ])->render());
        }

        $name = $request->name;
        $value_old_type = $value->title;
        $value->title = $name ?: $value_old_type;
        $value->editedby_id = Auth::id();
        $value->save();

        Cache::forget('userSettingFields');

        if($request->ajax())
        {
            return Response()->json(View('admin.ajax.settingValueSingleTrTdAll',[
                'value' => $value,
                'i'=>$request->i
            ])->render());
        }
    }

    // userSetting


         //user //admin //role start

    public function selectNewRole(Request $request)
    { 
        $users = User::where('email', 'like', '%'.$request->q.'%')
        ->orWhere('username', 'like', '%'.$request->q.'%')
        ->orWhere('name', 'like', '%'.$request->q.'%')
        ->orWhere('mobile', 'like', '%'.$request->q.'%')
        ->select(['id','email'])->take(30)->get();
        if($users->count())
        {
            if ($request->ajax())
            {
                // return Response()->json(['items'=>$users]);
                return $users;
            }
        }
        else
        {
            if ($request->ajax())
            {
                return $users;
            }
        }
    }

    public function userSearchAjax(Request $request)
    {
         $users = User::withoutGlobalScopes()->where('email', 'like', $request->q.'%')
        ->orWhere('username', 'like', $request->q.'%')
        // ->orWhere('name', 'like', $request->q.'%')
        ->orWhere('mobile', 'like','%'.$request->q.'%')
        ->latest()
        ->take(40)
        ->get();

         
        if ($request->ajax())
        {
            return Response()->json(['page' => view('admin.users.ajax.usersTbody', ['usersAll'=> $users])->render()]);
        }
    }

    public function adminAddNewPost(Request $request)
    {
        $user = User::where('id', $request->email)->first();
        if($user)
        {
            if(!$user->isAdmin())
            {
                $user->roles()->create([
                    'role_name'=>'admin',
                    'role_value'=> 'Admin',
                    'addedby_id'=>Auth::id()
                ]);

                if (!$user->isCommonAdmin()) {

                    $user->roles()->create([
                    'role_name'=>'common',
                    'role_value'=> 'Admin',
                    'addedby_id'=>Auth::id()
                ]);
                    
                }

                return back()->with('success', 'New Admin Successfully Created.');
            }
            else
            {
                return back()->with('error', 'This User Already Admin.');
            }            
        }
    }


    public function adminsAll(Request $request)
    {
        $usersAll = UserRole::has('user')->where('role_name','admin')->latest()->paginate(20);
 
 
        

        request()->session()->forget(['lsbm','lsbsm']);
        request()->session()->put(['lsbm'=>'roles','lsbsm'=>'adminsAll']);
        return view('admin.roles.adminsAll',[
            'usersAll'=> $usersAll
        ]);
    }

    

    public function adminDelete(UserRole $role, Request $request)
    {
        if($role->user->id == Auth::id())
        {
            return back()->with('error', 'Your Admin Role can not be deleted by yourself.');
        }

        $user = $role->user;
        $role->delete();
        $user->roles()
        ->where('role_name', 'common')
        ->where('role_value', 'Admin')
        ->delete();
        
        return back()->with('success', 'Admin Successfully Deleted.');

    }

    public function roleDelete(UserRole $role, Request $request)
    {

        $user = $role->user;
        $role->delete();
        $user->roleItems()->delete();
        
        return back()->with('success', 'Role Successfully Deleted.');

    }

    public function rolesAll()
    {
        request()->session()->forget(['lsbm','lsbsm']);
        request()->session()->put(['lsbm'=>'roles','lsbsm'=>'rolesAll']);

        $roles = UserRole::has('user')
                ->where('role_name', 'common')
                ->where('role_value', '<>', 'Admin')
                ->latest()
                ->paginate(20);

        return view('admin.roles.rolesAll', ['rolesAll'=>$roles]);
    }

    public function roleAddNew()
    {
        request()->session()->forget(['lsbm','lsbsm']);
        request()->session()->put(['lsbm'=>'roles','lsbsm'=>'roleAddNew']);

        $branches = Branch::all();
        return view('admin.roles.roleAddNew',[
            'branches'=> $branches
        ]);
    }

    public function roleAddNewPost(Request $request)
    {
 

        $validation = Validator::make($request->all(),
        [
            'branch' => 'numeric',
            'role_value' => 'required',
            'items' => 'required',
            'email' => 'required|email'
        ]);
        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong.');
        }


        $user = User::where('email', $request->email)->first();
        if($user)
        {
 
            if (!$user->isCommonWithoutAdmin()) 
            {

                if($request->items)
                {
                   $r =  $user->roles()->create([
                        'role_name'=>'common',
                        'role_value'=> $request->role_value,
                        'branch_id' => $request->branch ?: 0,
                        'addedby_id'=>Auth::id()
                    ]); 

                    foreach ($request->items as $item) 
                    {
                        $user->roleItems()->create([
                            'role_id' => $r->id,
                            'name' => $item,
                            'addedby_id' => Auth::id()
                        ]);   
                    }
                    
                    return back()->with('success', 'New Role Successfully Created.');                
                }
            }                

            return back()->with('error', 'This user already has a role.');          
        }
    }

    //user admin role


    //package //membership package
    public function allMembershipPackages(Request $request)
    {
        request()->session()->forget(['lsbm','lsbsm']);
        request()->session()->put(['lsbm'=>'package','lsbsm'=>'allMembershipPackages']);

        $packages = MembershipPackage::paginate(10);

        return view('admin.membership.allMembershipPackages', [
            'packages' => $packages
        ]);
    }

    public function membershipPackageAddNew(Request $request)
    {
        request()->session()->forget(['lsbm','lsbsm']);
        request()->session()->put(['lsbm'=>'package','lsbsm'=>'membershipPackageAddNew']);

        return view('admin.membership.membershipPackageAddNew');
    }

    public function membershipPackageAddNewPost(Request $request)
    {
         $validation = Validator::make($request->all(),
        [ 

          'title' => 'required|unique:membership_packages,package_title',
          // 'description' => 'required',
          'price' => 'required',
          'currency' => 'required',
          'duration' => 'required'

        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Worng!');
        }

        $package = new MembershipPackage;
        $package->package_title = $request->title;
        $package->package_description = $request->description;
        $package->package_amount = $request->price;
        $package->package_currency = $request->currency;
        $package->package_duration = $request->duration;
        $package->save();

        Cache::forget('mPackage1');
        Cache::forget('mPackage2');


        return back()
        ->with('success', 'New Package Successfully Created.');
    }

    public function membershipPackageEdit(Request $request, MembershipPackage $package)
    {
        if(!$package)
        {
            abort(404);
        }
        return view('admin.membership.membershipPackageEdit', [
            'package'=>$package
        ]);
    }

    public function membershipPackageUpdate(Request $request, MembershipPackage $package)
    {

        if(!$package){
            abort(404);
        }

        $package->package_title = $request->title;
        $package->package_description = $request->description;
        $package->package_type = $request->package_type;
        $package->package_amount = $request->price;
        $package->package_currency = $request->currency;
        $package->package_duration = $request->duration;
        $package->proposal_send_daily_limit = $request->proposal_send_daily_limit;
        $package->proposal_send_total_limit = $request->proposal_send_total_limit;

        $package->contact_view_limit = $request->contact_view_limit;

        if ($request->hasFile('image')) 
        {
            
            $file = $request->image;
            $fimgExt = strtolower($file->getClientOriginalExtension());               
            $fimageNewName = Str::random(8).time().'.'.$fimgExt;
            $fileOriginalName = strtolower($file->getClientOriginalName());

            Storage::disk('upload')->put('package/'.$fimageNewName, File::get($file));

            $package->image_name = $fimageNewName;
            $package->image_original_name = $fileOriginalName;

        }



        $package->save();

        Cache::forget('mPackage1');
        Cache::forget('mPackage2');

        return back()
        ->with('success', 'Package Successfully Updated.');
    }
    //package //membership package

    // branches

    public function allBranches(Request $request)
    {
        request()->session()->forget(['lsbm','lsbsm']);
        request()->session()->put(['lsbm'=>'branch','lsbsm'=>'allBranches']);

        $branches = Branch::all();
        return view('admin.branch.allBranches', ['allBranches'=>$branches]);

    }

    public function addNewBranch(Request $request)
    {
        request()->session()->forget(['lsbm','lsbsm']);
        request()->session()->put(['lsbm'=>'branch','lsbsm'=>'addNewBranch']);

        $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });

        return view('admin.branch.addNewBranch', ['countries' => $countries]);
    }

    public function addNewBranchPost(Request $request)
    {
        $validation = Validator::make($request->all(),
        [ 

          'branch_name' => 'required',
          // 'location' => 'required',
          'lat' => 'required',
          'lng' => 'required',
          'address' => 'required',
          'state' => 'required',
          'city' => 'required',
          'post_code' => 'required',
          'country' => 'required',
          'mobile' => 'required',
          'email' => 'required',
          'map' => 'required'

        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'All the fields are required.');
        }

        $branch = new Branch;
        $branch->branch_name = $request->branch_name;
        $branch->location = $request->location;
        $branch->lat = $request->lat;
        $branch->lng = $request->lng;
        $branch->map = $request->map;
        $branch->address = $request->address;
        $branch->state = $request->state;
        $branch->city = $request->city;
        $branch->post_code = $request->post_code;
        $branch->country = $request->country;
        $branch->email = $request->email;
        $branch->mobile = $request->mobile;
        $branch->addedby_id = $request->user()->id;
        $branch->save();

        Cache::flush();

        return back()->with('success', 'Branch Successfully Created');

    }

    public function branchEdit(Request $request, Branch $branch)
    {
        $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });
        return view('admin.branch.branchEdit', [
            'branch' => $branch, 
            'countries' => $countries
        ]);
    }

    

    public function branchUpdatePost(Request $request, Branch $branch)
    {
        $validation = Validator::make($request->all(),
        [ 

          'branch_name' => 'required',
          // 'location' => 'required',
          'lat' => 'required',
          'lng' => 'required',
          'address' => 'required',
          'state' => 'required',
          'city' => 'required',
          'post_code' => 'required',
          'country' => 'required',
          'mobile' => 'required',
          'email' => 'required',
          'map' => 'required'

        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'All the fields are required.');
        }

        $branch->branch_name = $request->branch_name;
        $branch->location = $request->location;
        $branch->lat = $request->lat;
        $branch->lng = $request->lng;
        $branch->map = $request->map;
        $branch->address = $request->address;
        $branch->state = $request->state;
        $branch->city = $request->city;
        $branch->post_code = $request->post_code;
        $branch->country = $request->country;
        $branch->email = $request->email;
        $branch->mobile = $request->mobile;
        $branch->editedby_id = $request->user()->id;
        $branch->save();

        Cache::flush();

        return back()->with('success', 'Branch Successfully Updated');

    }

    public function branchDelete(Request $request, Branch $branch)
    {
        $branch->users()->detach();
        $branch->delete();

        Cache::flush();

        return back()->with('success', 'Branch Successfully Deleted');

    }
    // branches

    //media persons

    public function mediaPersonsAll(Request $request)
    {
        $usersAll = MediaPerson::has('user')->latest()->paginate(50);       

        request()->session()->forget(['lsbm','lsbsm']);
        request()->session()->put(['lsbm'=>'roles','lsbsm'=>'mediaPersonsAll']);
        return view('admin.roles.mediaPersonsAll',[
            'usersAll'=> $usersAll
        ]);
    }


    public function mediaPersonAddNewPost(Request $request)
    {
        $user = User::where('id', $request->email)->first();
        if($user)
        {
            if(!$user->isMediaPerson())
            {
                $user->mediaPerson()->create([
                    'addedby_id'=>Auth::id(),
                    'commission' => $request->commission ?: 0,
                    'balance' => $request->balance ?: 0
                ]);
                return back()->with('success', 'New Media Person Successfully Created.');
            }
            else
            {
                return back()->with('error', 'This User Already Media Person.');
            }            
        }
    }

    

    public function mediaPersonDelete(MediaPerson $role, Request $request)
    {
        // if($role->user->id == Auth::id())
        // {
        //     return back()->with('error', 'Your Media Person Role can not be deleted by yourself.');
        // }

        $user = $role->user;
        $role->delete();
 
        
        return back()->with('success', 'Media Person Successfully Deleted.');

    }
    //media persons

    //front slider

    public function frontSlidersAll(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'frontSlider','lsbsm'=>'frontSlidersAll']);

        $sliders = FrontSlider::all();

        return view('admin.frontSlider.frontSlidersAll', ['sliders'=>$sliders]);

    }

    public function frontSliderAddNew(Request $request)
    {

        $validation = Validator::make($request->all(),
        [ 
            'image' => 'required|image|dimensions:min_with=1200,min_height=500'
        ]);
        if($validation->fails())
        {
             return back()
             ->withErrors($validation)
             ->withInput();
        }

        if($request->hasFile('image'))
        {

            $ffile = $request->image;
            $fimgExt = strtolower($ffile->getClientOriginalExtension());               
            $fimageNewName = Str::random(8).time().'.'.$fimgExt;

            Storage::disk('upload')->put('slider/'.$fimageNewName, File::get($ffile));

            $sl = new FrontSlider;
            $sl->image_name = $fimageNewName;
            $sl->image_url = 'storage/slider/'.$fimageNewName;
            $sl->addedby_id = Auth::id();
            $sl->save();

            Cache::flush();

            return back()->with('success', 'New slider image successfully uploaded');
        }

        return back()->with('error', 'Sorry, Something went wrong');

    }

    public function frontSliderDelete(FrontSlider $slider, Request $request)
    {
        if($slider)
        {
            Storage::disk('upload')->delete('slider/'.$slider->image_name);
            $slider->delete();
            Cache::flush();
        }


        return back()->with('success', 'Front slider successfully deleted.');
        
    }

    //front slider

}

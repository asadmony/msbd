<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Cache;
use Str;
use Validator;
use Carbon\Carbon;
use App\Model\User;
use App\Model\Page;
use App\Model\Menu;
use App\Model\Media;
use App\Model\Branch;
use App\Model\MenuPage;
use App\Model\UserPhoto;
use App\Model\BranchUser;
use App\Model\UserPayment;
use App\Model\UserPicture;
use App\Model\ImageGallery;
use App\Model\VideoGallery;
use Illuminate\Http\Request;
use App\Model\MediaPersonItem;
use App\Model\UserSettingField;
use App\Model\ImageGalleryItem;
use App\Model\MembershipPackage;
use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
class CommonController2 extends Controller
{
    //users 
    public function usersAll(Request $request)
    {
        menuSubmenu('users', 'usersAll');

        $me = Auth::user();

        if($me->isAdmin() || $me->isCommonRoleWithAllBranch())
        {
            $usersAll = User::withoutGlobalScopes()->latest()->paginate(50);
        }
        else
        {
            $usersAll = User::withoutGlobalScopes()
            ->whereHas('branches', function($q){
                $q->where('branches.id', Auth::user()->commonRole()->branch_id);
            })
            ->latest()
            ->paginate(50);
        }

        

        return view('common.users.usersAll',['usersAll'=>$usersAll]);
    }

    public function usersGroup(Request $request)
    {
        $type = $request->type;
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'users','lsbsm'=>$type]);

        if ($type == 'profile_picture_pending') {

            $usersAll = User::whereHas('userPictures', function ($query) {
            $query->where('image_type', 'profilepic');
            $query->where('checked', false);
            $query->where('autoload', true);
          })
          ->latest()->paginate(50);            
        }
        elseif ($type == 'all_unchecked_users') {

            $usersAll = User::where('final_checked', false)

            ->whereDoesntHave('userPictures', function ($query) {
                $query->where('image_type', 'profilepic');
                $query->where('checked', true);
                // $query->where('autoload', true);
              })

            ->whereDoesntHave('personalInfo', function ($query) {
                $query->where('checked', true);
              })

            ->whereDoesntHave('personalActivity', function ($query) {
                $query->where('checked', true);
              })

            ->whereDoesntHave('contactInfo', function ($query) {
                $query->where('checked', true);
              })

            ->whereNull('expired_at')

            ->where('final_checked', false)

            ->latest()->paginate(50);
        }

        elseif ($type == 'all_checked_users') {

            $usersAll = User::where('final_checked', true)
            ->orWhere('checked', true)
            ->orWhereNotNull('expired_at')

            ->orWhere(function($p){
                $p->whereHas('userPictures', function ($query) {
                $query->where('image_type', 'profilepic');
                $query->where('checked', true);
                // $query->where('autoload', true);
              });
            })

            ->orWhere(function($p){
                $p->whereHas('personalInfo', function ($query) {
                $query->where('checked', true);
              });
            })

            ->orWhere(function($p){
                $p->whereHas('personalActivity', function ($query) {
                $query->where('checked', true);
              });
            })

            ->orWhere(function($p){
                $p->whereHas('contactInfo', function ($query) {
                $query->where('checked', true);
              });
            })

            
            ->latest()->paginate(50);
        }

        elseif ($type == 'final_check_pending') {
            $usersAll = User::has('personalInfo')
            ->has('personalActivity')
            ->where('final_checked', false)
            ->latest()->paginate(50);
        }elseif($type== 'order_by_age'){
            $usersAll = User::orderBy('dob', 'desc')->paginate(50);
        }

        elseif ($type == 'active_users') {
            $usersAll = User::latest()->paginate(50);
        }elseif ($type == 'inactive_users') {
            $usersAll = User::withoutGlobalScopes()
            ->where('active', false)
            ->latest()->paginate(50);
        }elseif ($type == 'male_users') {
            $usersAll = User::where('gender', 'Male')
            ->latest()->paginate(50);
        }elseif ($type == 'female_users') {
            $usersAll = User::where('gender', 'Female')
            ->latest()->paginate(50);
        }elseif ($type == 'validity_10') {
            $usersAll = User::where('expired_at', '>=', Carbon::now())
            ->where('expired_at', '<', Carbon::now()->addDays(10))
            ->latest()->paginate(50);
        }elseif ($type == 'basic_info_pending') {
            $usersAll = User::where('checked', false)
            ->latest()->paginate(50);
        }elseif ($type == 'personal_info_pending') {
            $usersAll = User::whereHas('personalInfo', function ($query) {
            $query->where('checked', false);
          })->latest()->paginate(50);
        }elseif ($type == 'personal_activity_pending') {
            $usersAll = User::whereHas('personalActivity', function ($query) {
            $query->where('checked', false);
          })
            ->latest()->paginate(50);
        }elseif ($type == 'golden') {
            $usersAll = User::whereIn('package', [1,5])
            ->where('expired_at', '>=', Carbon::now())
            ->latest()->paginate(50);
        }elseif ($type == 'golden_plus') {
            $usersAll = User::whereIn('package', [2,6])
            ->where('expired_at', '>=', Carbon::now())
            ->latest()->paginate(50);
        }elseif ($type == 'diamond') {
            $usersAll = User::whereIn('package', [3,7])
            ->where('expired_at', '>=', Carbon::now())
            ->latest()->paginate(50);
        }elseif ($type == 'diamond_plus') {
            $usersAll = User::whereIn('package', [4,8])
            ->where('expired_at', '>=', Carbon::now())
            ->latest()->paginate(50);
        }elseif ($type == 'free_package') {
            $usersAll = User::where('package', 0)
            ->where('expired_at', '>=', Carbon::now())
            ->where('expired_at', '<', Carbon::now()->addDays(14))
            ->latest()->paginate(50);
        }elseif ($type == 'subscribers') {
            $usersAll = User::where('expired_at', '<=', Carbon::now())
            ->orWhereNull('expired_at')
            ->latest()->paginate(50);
        }elseif ($type == 'online_users') {
            $usersAll = User::where('updated_at', '>=', Carbon::now()->subMinutes(4))
            ->latest()->paginate(50);
        }
        elseif($type == 'offline_users')
        {
            $usersAll = User::withoutGlobalScopes()
            ->where('user_type', 'offline')
            ->latest()->paginate(50);
        }

        else 
        {

            return redirect()->route('admin.usersAll');
        }        


        return view('common.users.usersGroup',[
            'usersAll'=>$usersAll,
            'type' => $type
        ]);
    }

    public function makeUserActive(Request $request)
    {
         $me = Auth::user();

        if($me->isAdmin() || $me->isCommonRoleWithAllBranch())
        {
             $user = User::withoutGlobalScopes()->find($request->user);
        }
        else
        {

           $user = User::withoutGlobalScopes()
            ->whereHas('branches', function($q){
                $q->where('branches.id', Auth::user()->commonRole()->branch_id);
            })
            ->find($request->user);

            if(!$user)
            {
                return back()->with('error', 'Sorry, You have no permission to update the information of this account.');
            }             
        }

        
        if($user)
        {
            if($user->active)
            {
                $user->active = false;
                // $user->deactivateSmsSentToUser();
                // $user->deactivateEmailSentToUser($user);
                $user->save();
            }else
            {
                $user->active = true;
                $user->save();
            }

        }

        return back()->with('info', "User's activity updated.");
    }



    public function userSearchAjax(Request $request)
    {
        $qq = $request->q;

        $me = Auth::user();

        if($me->isAdmin() || $me->isCommonRoleWithAllBranch())
        {
            $users = User::withoutGlobalScopes()->where('email', 'like', $qq.'%')
            ->orWhere('username', 'like', $qq.'%')
            // ->orWhere('name', 'like', $qq.'%')
            ->orWhere('mobile', 'like','%'.$qq.'%')
            ->latest()
            ->take(40)
            ->get();
        }
        else
        {

            $users = User::withoutGlobalScopes()
            ->whereHas('branches', function($q){
                $q->where('branches.id', Auth::user()->commonRole()->branch_id);
            })
            ->where(function($q) use ($qq) {
                $q->where('email', 'like', $qq.'%');
                $q->orWhere('username', 'like', $qq.'%');
                $q->orWhere('mobile', 'like','%'.$qq.'%');
            })
            ->latest()
            ->take(40)
            ->get();
        }


         
        if ($request->ajax())
        {
            return Response()->json(['page' => view('common.users.ajax.usersTbody', ['usersAll'=> $users])->render()]);
        }


    }


    public function userProfilepicCheck(Request $request, UserPicture $pic)
    {
        $user = $pic->user;
        if($request->term == 'edit')
        {
            if($pic->can_edit)
            {
                $pic->can_edit = 0;
                $user->img_name = null;
                 
            }else
            {
                $pic->can_edit = 1;
                $user->img_name = $pic->image_name;
            }

        }else
        {
            if($pic->checked)
            {
                $pic->checked = 0;
                $user->img_name = null;                 

            }else
            {
                $pic->checked = 1;
                $user->img_name = $pic->image_name;
            }
        }
        $pic->editedby_id = Auth::id();
        $pic->save();
        $user->save();

        if($request->ajax())
        {
              return Response()->json([
                'success' => true
              ]);
        }

        return back();
    }


    public function userDetailsEdit( Request $request)
    {

        $u = User::withoutGlobalScopes()->find($request->user);
        if(!$u)
        {
            abort(404);
        }

        if (! $u->searchTerm) 
        {
          $u->searchTerm()->create(['addedby_id' => Auth::id()]);
        }

        

        $me = Auth::user();

        if($me->isAdmin() || $me->isCommonRoleWithAllBranch())
        {
             $user = User::withoutGlobalScopes()
            ->with('searchTerm')
            ->find($request->user);
        }
        else
        {

           $user = User::withoutGlobalScopes()
            ->whereHas('branches', function($q){
                $q->where('branches.id', Auth::user()->commonRole()->branch_id);
            })
            ->with('searchTerm')
            ->find($request->user);

            if(!$user)
            {
                return back()->with('error', 'Sorry, You have no permission to update the information of this account.');
            }             
        }

        $packages = MembershipPackage::all();
        $branches = Branch::all();

        // $allUpazilas =  Cache::remember('allUpazilas', 518400, function () {
        //     return Upazila::all(); 
        // });

        // $allDistricts = Cache::remember('allDistricts', 518400, function () {
        //             return District::all();
        //         });


        $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });


        $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
                    return UserSettingField::all();
                });


          return view('common.users.userEdit', [
            'user'=> $user,
            'packages' => $packages,
            'userSettingFields' => $userSettingFields,
            'countries' => $countries,
            'branches' => $branches
            // 'allUpazilas'=>$allUpazilas,
            // 'allDistricts'=>$allDistricts
          ]);
    }


    public function newTempPassSendPost(Request $request, User $user)
    {
        // dd($request->all());
        $validation = Validator::make($request->all(),
        [ 
          'new_password' => 'required|min:6'
        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something Went Worng!');
        }

        $user->password_temp = $request->new_password;
        $user->password = Hash::make($request->new_password);
        $user->editedby_id = Auth::id();
        $user->save();

        // if($user->mobile)
        // {
        //     if(strlen(bdMobile($user->mobile)) == 13)
        //         {
        //             $user->passwordResetSmsSend();
        //         }
        // }

        return back()->with('success', "New temporary password set for {$user->username}");


    }


    //users

    //user pp

    public function userPPDelete(UserPicture $picture)
    {
        if($picture)
        {
            Storage::disk('upload')
            ->delete('users/pp/'.$picture->image_name);
            $user = $picture->user;
            $user->img_name = null;
            $user->save();
            $picture->delete();
        }

        return back()->with('info', 'Photo Successfully Deleted.');
    }

    public function userProfilepicChange(Request $request, User $user)
    {
        $validation = Validator::make($request->all(),
            ['profile_picture' => 'required|image|mimes:jpeg,bmp,png,gif,jpg|dimensions:min_width=200,min_height=200'
        ]);
        if($validation->fails())
        {
            if($request->ajax())
            {
              return Response()->json(View('common.users.ajax.userProfilePic', ['user' => $user])
                ->render());
            }

            return redirect()->back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'image must be at least 200px width and 200px height');
        }

        if($request->hasFile('profile_picture'))
        {
            $cp = $request->file('profile_picture');
            $cw= (int) $request->change_width;
            $ch = (int) $request->change_height;
            $x = $request->off_x > 0 ? (int) $request->off_x : 0;
            $y = $request->off_y > 0 ? (int) $request->off_y : 0;
            $extension = strtolower($cp->getClientOriginalExtension());
            $mime = $cp->getClientMimeType();
            $size =$cp->getSize();

            $randomFileName = $user->id.'_pp_'.date('Y_m_d_his').'_'.rand(10000000,99999999).'.'.$extension;

            list($originalWidth,$originalHeight) = getimagesize($cp);
            // if($originalWidth == '200' && $originalHeight == '200')
            // {
            //     Storage::disk('upload')
            //     ->put('users/pp/'.$randomFileName, File::get($cp));
            //             //pfi = product feature image
            // }
            // else if($originalWidth == '160' && $originalHeight == '160')
            // {
            //     Storage::disk('upload')
            //     ->put('users/pp/'.$randomFileName, File::get($cp));
            //             //pfi = product feature image
            // }
            // else
            // {

                $image = Image::make($cp)
                ->crop($cw, $ch, $x, $y)
                ->resize(200, 200)
                ->save(public_path().'/storage/users/pp/'.$randomFileName, 90);
                $watermark = Image::make(public_path('/img/msbd3.png'));
                $image->insert($watermark);
                // $image->insert($watermark, 'bottom-right', 10, 10);
                // $image->mask($watermark, true);
                // $image->fill($watermark, 0, 0);
                // $image->save(public_path().'/storage/users/pp/'.$randomFileName, 90);
                $image->save();


                $originalWidth = $image->width();
                $originalHeight = $image->height();
                $image->destroy();


            // }

            #update old rows of profilepic
            // $oldRows = $user->userPictures()
            // ->whereImageType('profilepic')
            // ->whereAutoload(true)
            // ->update([
            //     'autoload'=>false, 
            //     'editedby_id' => Auth::id()
            // ]);

            #delete old rows of profilepic
            $oldRows = $user->userPictures()
            ->whereImageType('profilepic')->get();
            foreach($oldRows as $row)
            {
                Storage::disk('upload')
                ->delete('users/pp/'.$row->image_name);
                $row->delete();
            }

            $cp = $user->userPictures()
            ->create([]);
            $cp->autoload = true;
            $cp->checked = true;
            $cp->image_type = 'profilepic';
            $cp->image_name = $randomFileName;
            $cp->image_mime = $mime;
            $cp->image_ext = $extension;
            $cp->image_width = $originalWidth;
            $cp->image_height = $originalHeight;
            $cp->image_size = $size;
            $cp->image_alt = env('APP_NAME_BIG');
            $cp->save();

            $user->img_name = $randomFileName;
            $user->save();


            //save this feature image in public photos
            $file = $request->file('profile_picture');
            $ext = strtolower($file->getClientOriginalExtension());
            $mime = $file->getClientMimeType();
            $size =$file->getSize();
            $originalName =$file->getClientOriginalName();
            list($originalWidth,$originalHeight) = getimagesize($file);

            $imageNewName = $user->id.'_pub_'.date('Y_m_d_his').'_'.Str::random(8).'.'.$ext;

            Storage::disk('upload')
            ->put('users/photos/'.$imageNewName, File::get($file));

            $image_new_url = 'storage/users/photos/'.$imageNewName;

            $up = $user->userPhotos()
            ->create([
                'autoload' =>false,
                'img_type' => $request->type == 'private' ? 'private' : 'public',
                'addedby_id' => Auth::id()
            ]);

            $up->img_name = $imageNewName;
            $up->img_original_name = $originalName;
            $up->img_url = $image_new_url;
            $up->img_size = $size;
            $up->img_width = $originalWidth;
            $up->img_height = $originalHeight;
            $up->img_ext = $ext;
            $up->img_mime = $mime;
            $up->save();

            if($request->ajax())
            {
              return Response()->json(View('common.users.ajax.userProfilePic', ['user' => $user])
                ->render());
          }
      }
      return back();
    }


    //user pp


    //user package

    public function upgradeUserForFreePost(Request $request)
    {
        // dd($request->all());


        $validation = Validator::make($request->all(),
        [
              "free_membership_duration" => 'required|numeric',
        ]);
        if($validation->fails())
        {
            return redirect()->back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong, please try again.');
        }

        $duration = $request->free_membership_duration;

        $user = User::withoutGlobalScopes()->where('id', $request->user)->first();
        if(!$user)
        {
            abort(404);
        }


            $payment = UserPayment::where('user_id', $user->id)
                        ->where('status', 'pending')->first();
            if($payment)
            {
                return back()
                ->with('info', "Previous payment order of {$user->username} is pending");
            }else
            {
                $payment = new UserPayment;
                $payment->status = 'paid';
                $payment->membership_package_id = null;
                $payment->package_title = 'Free Package';
                $payment->package_description = 'Free Packages offered by admin';
                $payment->package_amount = 0;
                $payment->package_currency = 'BDT';
                $payment->package_duration = $duration;
                $payment->paid_amount = 0;
                $payment->paid_currency = 'BDT';
                $payment->payment_method = null;
                $payment->payment_details = 'This membership package is fully free';
                $payment->admin_comment = "Dear {$user->name}, We offered you {$duration} days free membership access. Stay connected and enjoy.";
                $payment->user_id = $user->id;
                $payment->addedby_id = Auth::id();
                $payment->editedby_id= Auth::id();
                $payment->save();

                $expired_at = $user->expired_at;
                if($expired_at > Carbon::now())
                {
                    $user->expired_at = $expired_at->addDays($duration);
                }else
                {
                    $user->expired_at = Carbon::now()->addDays($duration);
                }
                $user->package = 0;
                $user->save();

                // if(!(env('APP_ENV') == 'local'))
                // {  
                //     Mail::send('emails.paymentAcceptedToUser', ['payment'=>$payment], function ($message) use ($payment){
                //         $message->from('mail@taslimamarriagemedia.com', 'T M Media Payment Section');
                //         $message->to($payment->user->email,  '')
                //         ->subject('Payment Processing Completed at '.url('/'));
                //     });
                // }

                return back()->with('success', 'Free package processing successfully completed.');
            }            
    }
    //user package

    //branchPackageReferenceSupport

    public function branchPackageReferenceSupport(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
              // "free_membership_duration" => 'required|numeric',
        ]);
        if($validation->fails())
        {
            return redirect()->back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong, please try again.');
        }

        $user = User::withoutGlobalScopes()->where('id', $request->user)->first();
        if(!$user)
        {
            abort(404);
        }

        $user->package = $request->package ?: 0;
        $user->expired_at = $request->expired_at ?: null;
        $user->user_type = $request->user_type ? 'offline' : 'online';

        if($request->branch)
        {
            $user->branches()->detach();
            $branch = Branch::where('id',$request->branch)->first();
            if($branch)
            {
                $c = BranchUser::where('branch_id',$branch->id)->where('user_id',$user->id)->first();
                if(!$c)
                {
                   $c = new BranchUser;
                   $c->branch_id = $branch->id;
                   $c->user_id = $user->id;
                   $c->addedby_id = Auth::id();
                   $c->save();                   
                }
            }

        }

        if($request->media_person)
        {
            $mi = MediaPersonItem::where('user_id', $user->id)->first();
            if($mi)
            {
                if($mi->media_person_id == $request->media_person)
                {

                }
                else
                {
                    $mi->media_person_id = $request->media_person;
                    $mi->editedby_id = $request->user()->id;
                    $mi->save();
                }
            }else
            {
                $mpi = new MediaPersonItem;
                $mpi->media_person_id = $request->media_person;
                $mpi->user_id = $user->id;
                $mpi->addedby_id = $request->user()->id;
                $mpi->save();
            }

        }

        $user->active = $request->active ? 1 : 0;
        $user->editedby_id = Auth::id();

        $user->save();
         
        return back()->with('success', 'User Branch Package Reference Support Successfully Updated.');
 
    }
    //branchPackageReferenceSupport

    public function uploadNewPublicPhotos(Request $request, User $user)
    {

    $validation = Validator::make($request->all(),
        ['photos.*' => 'image|mimes:jpeg,bmp,png,gif'
    ]);
    if($validation->fails())
    {
        return redirect()->back()
        ->withErrors($validation)
        ->withInput()
        ->with('error', 'Upload jpg, png, gif jpeg files.');
    }

        // dd($request->all());
    if($request->hasFile('photos'))
    {
        foreach($request->photos as $file)
        {


            $ext = $file->getClientOriginalExtension();
            $mime = $file->getClientMimeType();
            $size =$file->getSize();
            $originalName =$file->getClientOriginalName();
            list($originalWidth,$originalHeight) = getimagesize($file);

            $imageNewName = Str::random(8).time().'.'.$ext;
            Storage::disk('upload')
            ->put('users/photos/'.$imageNewName, File::get($file));

            $image_new_url = 'storage/users/photos/'.$imageNewName;


            $cp = $user->userPhotos()
            ->create([
                'autoload' =>false,
                'img_type' => $request->type == 'private' ? 'private' : 'public',
                'addedby_id' => Auth::id()
            ]);

            $cp->img_name = $imageNewName;
            $cp->img_original_name = $originalName;
            $cp->img_url = $image_new_url;
            $cp->img_size = $size;
            $cp->img_width = $originalWidth;
            $cp->img_height = $originalHeight;
            $cp->img_ext = $ext;
            $cp->img_mime = $mime;
            $cp->save();
        }

        return back()->with('success', 'Public Photos Successfully Uploaded.');
        }

        return back();

    }

    public function userPhotoDelete(UserPhoto $photo)
    {
        if($photo)
        {
            Storage::disk('upload')
            ->delete('users/photos/'.$photo->img_name);
            $photo->delete();
        }

        return back()->with('info', 'Photo Successfully Deleted.');
    }

    public function userDetailsUpdatePost(Request $request)
    {
        // dd($request->all());

        $user = User::withoutGlobalScopes()->find($request->user);
        if(!$user)
        {
            abort(404);
        }

        $request->merge(array_map('trim', $request->all()));
        $validation = Validator::make($request->all(), [
           'fullName'=> 'required|min:4|max:20',
            // 'username' => 'required|string|min:4|max:20|unique:users,username',
            "username" => 'required|unique:users,username,'.$user->id,
            "email" => 'required|unique:users,email,'.$user->id,  

        ]);

        if($validation->fails())
        {
            
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', ' Try Again With correct Info');
        }

        $dob = $request->year.'-'.$request->month. '-' .$request->day;
        $user->name = $request->fullName;
        $user->username = $request->username;
        $user->mobile = $request->mobile;        
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->post_code = $request->post_code;
        $user->religion = $request->religion;
        $user->social_order = $request->social_order;
        if(($request->looking_for == 'Female') or ($request->looking_for == 'Bride (Female)'))
        {
            $lf = 'Female';
        }
        else{

            $lf = 'Male';
        }

        $user->looking_for = $lf;

        $user->country = $request->country;

        if( ($request->country == 'Other') || 
            ($request->country == 'Others'))
        {
            $user->country_other = $request->country_other;

        }else{
            
            $user->country_other = null;
        }

        $user->profile_created_by = $request->profile_created_by;

        // if( ($request->profile_created_by == 'Other') || 
        //     ($request->profile_created_by == 'Others'))
        // {
        //     $user->profile_created_by_other = $request->profile_created_by_other;
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



        if ($request->basic_checked) 
        {
            if($user->edit_count < 1 )
            {
                $user->edit_count = 1;
            }

            if($user->edit_count > $user->check_count)
            {
                $user->check_count = $user->edit_count;  
            }
        }
        else
        {
            if($user->edit_count == $user->check_count)
            {
                $user->check_count = $user->edit_count - 1;  
            }
        }

        $user->dob = Date($dob);
        $user->editedby_id = Auth::id();
        $user->save();


        if ($request->father_name & $request->mother_name) 
        {
        
        $fi = $user->familyInfo;
        if($fi)
        {
            
        }
        else
        {
            $fi = new UserFamilyInfo;
            $fi->user_id = $user->id;
            $fi->addedby_id = Auth::id();
            $fi->save();
        }

$fi->father_name = $request->father_name ?: null;
$fi->father_occupation = $request->father_occupation ?: null;
$fi->mother_name = $request->mother_name ?: null;
$fi->mother_occupation = $request->mother_occupation ?: null;
$fi->number_of_brother = $request->number_of_brother ?: null;
$fi->how_many_brother_married = $request->how_many_brother_married ?: null;
$fi->number_of_sister = $request->number_of_sister ?: null;
$fi->how_many_sister_married = $request->how_many_sister_married ?: null;
$fi->alternative_email = $request->alternative_email ?: null;
$fi->alternative_mobile = $request->alternative_mobile ?: null;
$fi->convenient_time_to_call = $request->convenient_time_to_call ?: null;
$fi->contact_person_mobile = $request->contact_person_mobile ?: null;
$fi->name_of_contact_person = $request->name_of_contact_person ?: null;
$fi->relation_with_contact_person = $request->relation_with_contact_person ?: null;
$fi->yearly_income = $request->yearly_income ?: null;
$fi->about_yourself = $request->about_yourself ? trim($request->about_yourself) : null;
$fi->extra_queries = $request->extra_queries ? trim($request->extra_queries) : null;
$fi->family_type = $request->family_type ?: null;
$fi->checked = $request->family_checked ? true : false;
$fi->can_edit = $request->can_family_edit ? true : false;

$fi->editedby_id = Auth::id();
$fi->save();
            
        }

        return back()->with('success', 'User Information Successfully Updated.');
    }


    //payments start

    public function allPaidPayments(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'payments','lsbsm'=>'allPaidPayments']);
        $payments = UserPayment::where('status', 'paid')->where('paid_amount', '<>', 0)->latest()->paginate(40);
        return view('common.payments.allPaidPayments', [
            'payments'=> $payments,
        ]);
    }


    public function allFreePayments(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'payments','lsbsm'=>'allFreePayments']);
        $payments = UserPayment::where('status', 'paid')->where('paid_amount', 0)->latest()->paginate(40);
        return view('common.payments.allPaidPayments', [
            'payments'=> $payments,
        ]);
    }

    public function allPendingPayments(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'payments','lsbsm'=>'allPendingPayments']);
        $payments = UserPayment::where('status', 'pending')->paginate(40);
        $packages = MembershipPackage::all();
        return view('common.payments.allPendingPayments', [
            'payments'=> $payments,
            'packages' => $packages
        ]);
    }

    public function pendingPaymentUpdatePost(Request $request, UserPayment $payment)
    {
        $validation = Validator::make($request->all(),
        [
              "package" => "required",
              "paid_amount" => "required|numeric",
              "paid_currency" => "required",
              "payment_method" => "required",
              "payment_details" => "required",
              // 'admin_comment' => 'required'
        ]);
        if($validation->fails())
        {
            return redirect()->back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong, please try again.');
        }

        $package = MembershipPackage::where('id', $request->package)
        ->first();
        if($package)
        {
            if($payment)
            {
                $payment->status = 'paid';
                $payment->membership_package_id = $package->id;
                $payment->package_title = $package->package_title;
                $payment->package_description = $package->package_description;
                $payment->package_amount = $package->package_amount;
                $payment->package_currency = $package->package_currency;
                $payment->package_duration = $package->package_duration;
                $payment->paid_amount = $request->paid_amount;
                $payment->paid_currency = $request->paid_currency;
                $payment->payment_method = $request->payment_method;
                $payment->payment_details = $request->payment_details;
                $payment->admin_comment = $request->admin_comment;
                $payment->editedby_id = Auth::id();
                $payment->save();

                $user = $payment->user;
                $user->package = $payment->membership_package_id;
                $expired_at = $user->expired_at;
                if($expired_at > Carbon::now())
                {
                    $user->expired_at = $expired_at->addDays($payment->package_duration);
                }else
                {
                    $user->expired_at = Carbon::now()->addDays($payment->package_duration);
                }

                $user->save();


                // if(!(env('APP_ENV') == 'local'))
                // {  
                //     Mail::send('emails.paymentAcceptedToUser', ['payment'=>$payment], function ($message) use ($payment){
                //         $message->from('mail@taslimamarriagemedia.com', 'T M Media Payment Section');
                //         $message->to($payment->user->email,  '')
                //         ->subject('Payment Accepted at '.url('/'));
                //     });
                // }

                ### sms api end here (masking & nonmasking seperate) ###

                    // $masking = 'T.M. Media';
                    // $to = '8801782006615';
                    // $username = 'taslimamedia@gmail.com';
                    // $pass = '01719369717';
                    // $apiKey = '$2y$10$wj7YbbC4RjEfY5.OJIqyP.mfRbm.Da2bro5.PFsbUYUQ02agGy/eG';
                    // $msg = 'Hello Admin, New payment details: Amount: ' . $payment->paid_amount . ' ' . $payment->paid_currency . '. Package ID: ' . $payment->membership_package_id . '. User:'. $user->email;  
                    
                    // $url = "http://masking.binaryquest.com/smsapi/masking?api_key={$apiKey}&smsType=text&maskingID={$masking}&mobileNo={$to}&smsContent={$msg}"; 


                    //  $client = new Client();
                    //  //https://stackoverflow.com/questions/46005027/handling-client-errors-exceptions-on-guzzlehttp            
                    // try {
                    //         $r = $client->request('GET', $url);
                    //     } catch (\GuzzleHttp\Exception\ConnectException $e) {
                    //         // This is will catch all connection timeouts
                    //         // Handle accordinly
                    //     } catch (\GuzzleHttp\Exception\ClientException $e) {
                    //         // This will catch all 400 level errors.
                    //         // return $e->getResponse()->getStatusCode();
                    //     }
                    ### sms api end here (masking & nonmasking seperate) ###

                return back()->with('success', 'Payment info successfully updated.');
            }            
        }
    }

    public function paymentDelete(Request $request, UserPayment $payment)
    {
        $payment->delete();
        return back()->with('info', 'Payment info deleted successfully.');
    }

    public function paymentAddNew(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'payments','lsbsm'=>'paymentAddNew']);
        $packages = MembershipPackage::all();
        return view('common.payments.paymentAddNew', [
            'packages' => $packages
        ]);
    }

    public function paymentAddNewPost(Request $request)
    {
         // dd($request->all());
        $validation = Validator::make($request->all(),
        [
              "email" => 'required|email|exists:users,email',
              "package" => "required",
              "paid_amount" => "required|numeric",
              "paid_currency" => "required",
              "payment_method" => "required",
              "payment_details" => "required",
              // 'admin_comment' => 'required'
        ]);
        if($validation->fails())
        {
            return redirect()->back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong, please try again.');
        }

        $user = User::withoutGlobalScopes()->where('email', $request->email)->first();
        if(!$user)
        {
            abort(404);
        }

        $package = MembershipPackage::where('id', $request->package)
        ->first();
        if($package)
        {
            $payment = UserPayment::where('user_id', $user->id)
                        ->where('status', 'pending')->first();
            if($payment)
            {
                return back()
                ->with('info', 'Previous payment order of this user is pending');
            }else
            {
                $payment = new UserPayment;
                $payment->status = 'paid';
                $payment->membership_package_id = $package->id;
                $payment->package_title = $package->package_title;
                $payment->package_description = $package->package_description;
                $payment->package_amount = $package->package_amount;
                $payment->package_currency = $package->package_currency;
                $payment->package_duration = $package->package_duration;
                $payment->paid_amount = $request->paid_amount;
                $payment->paid_currency = $request->paid_currency;
                $payment->payment_method = $request->payment_method;
                $payment->payment_details = $request->payment_details;
                $payment->admin_comment = $request->admin_comment;
                $payment->user_id = $user->id;
                $payment->addedby_id = Auth::id();
                $payment->editedby_id= Auth::id();
                $payment->save();

                $user->package = $payment->membership_package_id;
                $expired_at = $user->expired_at;
                if($expired_at > Carbon::now())
                {
                    $user->expired_at = $expired_at->addDays($payment->package_duration);
                }else
                {
                    $user->expired_at = Carbon::now()->addDays($payment->package_duration);
                }

                $user->save();

                // if(!(env('APP_ENV') == 'local'))
                // {  
                //     Mail::send('emails.paymentAcceptedToUser', ['payment'=>$payment], function ($message) use ($payment){
                //         $message->from('mail@taslimamarriagemedia.com', 'T M Media Payment Section');
                //         $message->to($payment->user->email,  '')
                //         ->subject('Payment Processing Completed at '.url('/'));
                //     });                    
                // }

                ### sms api end here (masking & nonmasking seperate) ###

                    // $masking = 'T.M. Media';
                    // $to = '8801782006615';
                    // $username = 'taslimamedia@gmail.com';
                    // $pass = '01719369717';
                    // $apiKey = '$2y$10$wj7YbbC4RjEfY5.OJIqyP.mfRbm.Da2bro5.PFsbUYUQ02agGy/eG';
                    // $msg = 'Hello Admin, New payment details: Amount: ' . $payment->paid_amount . ' ' . $payment->paid_currency . '. Package ID: ' . $payment->membership_package_id . '. User:'. $user->email;  
                    
                    // $url = "http://masking.binaryquest.com/smsapi/masking?api_key={$apiKey}&smsType=text&maskingID={$masking}&mobileNo={$to}&smsContent={$msg}"; 


                    //  $client = new Client();
                    //  //https://stackoverflow.com/questions/46005027/handling-client-errors-exceptions-on-guzzlehttp            
                    // try {
                    //         $r = $client->request('GET', $url);
                    //     } catch (\GuzzleHttp\Exception\ConnectException $e) {
                    //         // This is will catch all connection timeouts
                    //         // Handle accordinly
                    //     } catch (\GuzzleHttp\Exception\ClientException $e) {
                    //         // This will catch all 400 level errors.
                    //         // return $e->getResponse()->getStatusCode();
                    //     }
                    ### sms api end here (masking & nonmasking seperate) ###

                return back()->with('success', 'Payment info successfully saved.');
            }            
        }
    }

    // public function __construct()
    // {
    //     $this->middleware('active');
    // }

    public function paymentHistoryForUser(Request $request)
    {
        $user = User::withoutGlobalScopes()->find($request->user);

        if(!$user)
        {
            abort(404);
        }
        $payments = UserPayment::where('user_id', $user->id)
                    ->latest()
                    ->paginate(40);

        return view('common.payments.paymentHistoryForUser', [ 
            'user' => $user,
            'payments' => $payments
        ]);        
    }

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


    //payments end



}

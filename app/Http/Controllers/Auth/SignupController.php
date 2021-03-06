<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Mail;
use Cache;
use App\Model\User;
use App\Model\Country;
use Illuminate\Http\Request;
use App\Model\UserSettingField;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
// use Illuminate\Foundation\Auth\RegistersUsers;

class SignupController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function signup(Request $request)
    {

        $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });


        $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
                    return UserSettingField::all();
                });

        return view('auth.signup', [
            'userSettingFields' => $userSettingFields,
            'countries' => $countries
        ]);

    }

    public function signupPost(Request $request)
    {
        // dd($request->all());
        $request->merge(array_map('trim', $request->all()));
        $validation = Validator::make($request->all(), [
           'full_name'=> 'required|min:4|max:20',
            // 'username' => 'required|string|min:4|max:20|unique:users,username',
            'email'=> 'required|email|max:30|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'mobile'=> 'required|unique:users,mobile',
            // 'guardian_mobile'=> 'required|unique:users,guardian_mobile',
            'gender' => 'required',
            'country' => 'required|exists:countries,name',
            'day'=> 'required',
            'month'=> 'required',
            'year'=> 'required',
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
            'file'=>'required|image|mimes:jpeg,bmp,png,gif|dimensions:min_width=200,min_height=200',
            'height_minimum' => 'required',
            'height_maximum' => 'required',
            'minimum_age' => 'required',
            'maximum_age' => 'required',
            'partner_marital_status' => 'required',
            'partner_country' => 'required',
            // 'partner_country_other' => 'required',
            'partner_religion' => 'required',
            // 'partner_profession' => 'required',
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

        $dob = $request->year.'-'.$request->month. '-' .$request->day;

        // $myNumber = bdMobile($request->your_mobile);

        // $country = Country::where('name', $request->country)->first();
        // if($country)
        // {

        //     $myNumber = intMobile($country->calling_code,$request->mobile);
        // }

        // if(strlen($myNumber) != 13)
        // {
        //     return back()
        //     ->withInput()
        //     ->with('error', 'Your mobile number is not valid, Please try again with Bangladeshi mobile number.');
        // }



        // if(strlen($gNumber) != 13)
        // {
        //     return back()
        //     ->withInput()
        //     ->with('error', 'Guardian mobile number is not valid, Please try again with Bangladeshi mobile number.');
        // }

        $pass = rand(100000, 999999);


        $user = new User;
        $user->name = $request->full_name;
        // $user->mobile = $myNumber;
        $user->mobile = $request->mobile;
        // $user->guardian_mobile = $gNumber;

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->password_temp = $pass;
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


        $user->dob = Date($dob);
        $user->addedby_id = 1;
        $user->save();
        $userN = User::where('username', $user->id)->first();
        if($userN)
        {
            $un = $user->id . str_random(8).time();
        }
        else
        {
            $un = $user->id;
        }
        // $user->username = snake_case($un);
        $user->username = $un;
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














        // $user->listForAutoMail()->firstOrCreate([]);

        // if(!(env('APP_ENV') == 'local'))
        // {
        //     Mail::send('emails.welcomeNewUser', ['user'=>$user], function ($message) use ($user){
        //         $message->from('mail@taslimamarriagemedia.com', 'T M Media Support Section');
        //         $message->to($user->email,  '')
        //         ->subject('New Registration Successful at '.url('/'));
        //     });

        //     Mail::send('emails.welcomeNewUserToAdmin', ['user'=>$user], function ($message) use ($user){
        //         $message->from('mail@taslimamarriagemedia.com', 'T M Media Support Section');
        //         $message->to('taslimamedia@gmail.com',  '')
        //         ->subject('New Registration Successful at '.url('/'));
        //     });
        // }

        $this->guard()->login($user);

        return redirect()->intended('/');
    }
}



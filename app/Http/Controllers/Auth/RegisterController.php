<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\Country;
use App\Model\User;
use App\Model\UserFamilyInfo;
use App\Model\UserSettingField;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [ 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => [ 'string', 'required', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'education_level' => ['required'],
            'profession' => ['required'],
            'monthly_income' => ['required','numeric', 'min:50000'],
            'father_name' => ['required'],
            'father_education' => ['required'],
            'father_occupation' => ['required'],
            'family_type' => ['required'],
            'gender' => ['required'],
            'birth_date' => ['required','date'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'gender' => $data['gender'],
            'education_level' => $data['education_level'],
            'profession' => $data['profession'],
            'profession' => $data['profession'],
            'dob' => $data['birth_date'],
            'password' => Hash::make($data['password']),
        ]);

        $userFamily = new UserFamilyInfo;
        $userFamily->user_id = $user->id;
        $userFamily->father_name = $data['father_name'];
        $userFamily->yearly_income = $data['monthly_income'];
        $userFamily->father_education = $data['father_education'];
        $userFamily->father_occupation = $data['father_occupation'];
        $userFamily->family_type = $data['family_type'];
        $userFamily->save();

        return $user;
    }

    public function showRegistrationForm()
    {
        $countries = Cache::remember('countries', 518400, function () {
            return Country::select('name as title')->get();
        });


        $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
            return UserSettingField::all();
        });
        return view('auth.register',[
            'countries' => $countries,
            'userSettingFields' => $userSettingFields,
        ]);
    }
}

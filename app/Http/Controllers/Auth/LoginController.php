<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\SocialIdentity;
use App\Model\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Socialite;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    ################# Start Socialite Implementation #########
    ##
    ##
    ##
    ##
    ##
    ################# Start Socialite Implementation #########
    public function redirectToProvider($provider)
   {
       return Socialite::driver($provider)->redirect();
   }
   public function handleProviderCallback($provider, Request $request)
   {
       try {
           $user = Socialite::driver($provider)->user();
       } catch (Exception $e) {
           return redirect('/login');
       }
       $authUser = $this->findOrCreateUser($user, $provider);
       // Auth::login($authUser, true);
       // $this->sendLoginResponse($request);
       $request->session()->regenerate();
       Auth::login($authUser, true);
       return redirect($this->redirectTo);
   }
   public function findOrCreateUser($providerUser, $provider)
   {
       if(isset($providerUser) && $providerUser != null){
           $account = SocialIdentity::whereProviderName($provider)
                      ->whereProviderId($providerUser->getId())
                      ->first();
           if ($account) {
               return $account->user;
           } else {
               $user = User::whereEmail($providerUser->getEmail())->where('email', '<>', null)->first();
               if (! $user) {
                   $user = User::create([
                       'email' => $providerUser->getEmail(),
                       'name'  => $providerUser->getName(),
                       'email_verified_at' => now(),
                       'password'=> Hash::make(rand(100000,999999))
                   ]);
                //   $ext = 'jpg';
                //   $file = Image::make($providerUser->getAvatar());
                    // $file = file_get_contents($providerUser->getAvatar());
                    // $randName = 'u_'. $user->id . '_' . Str::random(8).time().'.'.$ext;
                    // File::put(public_path() . '/storage/user/profilepic/' . $randName, $file);
                    // Storage::disk('upload')
                    // ->put('user/profilepic/'.$randName, $file);
                    // $user->img_name = $randName;
                    $user->save();
               }
               $user->identities()->create([
                   'provider_id'   => $providerUser->getId(),
                   'provider_name' => $provider,
                   'provider_token'=> $providerUser->token,
               ]);
               return $user;
           }
       }
   }

   // custom login functions
   
   public function showEmployeeLoginForm()
   {
       return view('auth.employeeLogin');
   }

   public function username()
    {
        $loginId = request()->input('login');
        $fieldType = filter_var($loginId, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
        request()->merge([$fieldType => $loginId]);
        return $fieldType;
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        
        if (isset($request->employee_login) && $request->employee_login == 1) {
            if (auth()->user()->isAdmin() || auth()->user()->isCommonWithoutAdmin()) {
            }else{
                $this->guard()->logout();
            }
        }

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        

        return $request->wantsJson()
                    ? new JsonResponse([], 204)
                    : redirect()->intended($this->redirectPath());
    }

}

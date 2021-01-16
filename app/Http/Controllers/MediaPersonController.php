<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Hash;
use Validator;
use Carbon\Carbon;
use App\Model\Page;
use App\Model\User;
use App\Model\Branch;
use GuzzleHttp\Client;
use App\Model\Country;
use App\Model\UserRole;
use App\Model\MediaPerson;
use App\Model\FrontSlider;
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

class MediaPersonController extends Controller
{
    public function dashboard()
    {
    	$request = request();
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'dashboard','lsbsm'=>'dashboard']);
    	return view('mediaperson.dashboard');
    }

    public function usersAll(Request $request)
    {
        menuSubmenu('dashboard', 'usersAll');

        $usersAll = User::withoutGlobalScopes()->whereHas('mediaItem', function($q){
            $q->where('media_person_id',Auth::id());
        })->latest()->paginate(5);


        return view('mediaperson.users.usersAll',['usersAll'=>$usersAll]);
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
            return Response()->json(['page' => view('mediaperson.users.ajax.usersTbody', ['usersAll'=> $users])->render()]);
        }


    }

}

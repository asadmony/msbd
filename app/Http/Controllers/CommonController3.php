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
use App\Model\Country;
use App\Model\MenuPage;
use App\Model\UserPhoto;
use App\Model\BranchUser;
use App\Model\CareerApplication;
use App\Model\UserPayment;
use App\Model\UserPicture;
use App\Model\ImageGallery;
use App\Model\VideoGallery;
use App\Model\UserProposal;
use Illuminate\Http\Request;
use App\Model\MediaPersonItem;
use App\Model\UserSettingField;
use App\Model\ImageGalleryItem;
use App\Model\MembershipPackage;
use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
class CommonController3 extends Controller
{
    //proposal

    public function proposalsGroup(Request $request)
    {
        $type = $request->type;
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'proposal','lsbsm'=>$type]);

        if($type == 'pending_proposals')
        {
            $proposalsAll = UserProposal::has('user')->has('userSecond')->where('accepted', false)->orderBy('checked')->paginate(50);
        }elseif ($type == 'accepted_proposals') 
        {
            $proposalsAll = UserProposal::has('user')->has('userSecond')->where('accepted', true)->orderBy('checked')->paginate(50);
        }else
        {
            $proposalsAll = UserProposal::has('user')->has('userSecond')->orderBy('checked')->paginate(50);
            
        }


        return view('common.proposals.proposalsGroup', [
            'proposalsAll' => $proposalsAll,
            'type' => $type
        ]);
    }

    public function proposalCheckedByAdmin(Request $request, UserProposal $proposal)
    {
        if($proposal->checked)
        {
            $proposal->checked = 0;

        }else
        {
            $proposal->checked = 1;
        }

        $proposal->editedby_id = Auth::id();
        $proposal->save();

        if($request->ajax())
        {
              return Response()->json([
                'success' => true
              ]);
        }

        return back();


    }

    public function proposalsOfUser(User $user, Request $request)
    {
        $proposals = UserProposal::has('user')
        ->has('userSecond')
        ->where(function($q) use ($user){
            $q->where('user_id', $user->id)
            ->orWhere('user_second_id', $user->id);

        })->orderBy('checked')->paginate(50);

        return view('common.users.proposals', ['user'=>$user, 'proposalsAll'=>$proposals]);
    }
    //proposal

    //media person
    public function selectNewMediaPerson(Request $request)
    { 
        $q = $request->q;
        $users = User::has('mediaPerson')
        ->where(function ($query) use ($q) {
            $query->orWhere('email', 'like', '%'.$q.'%');
            $query->orWhere('username', 'like', '%'.$q.'%');
            $query->orWhere('name', 'like', '%'.$q.'%');
            $query->orWhere('mobile', 'like', '%'.$q.'%');
        })        
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
    //media person

    //user new
    //users 
    public function newUser(Request $request)
    {
        $request->session()->forget(['lsbm','lsbsm']);
        $request->session()->put(['lsbm'=>'users','lsbsm'=>'newUser']); 

        $packages = MembershipPackage::all();
        $branches = Branch::all();
        $countries = Cache::remember('countries', 518400, function () {
                    return Country::select('name as title')->get();
                });


        $userSettingFields = Cache::remember('userSettingFields', 518400, function () {
                    return UserSettingField::all();
                });

        return view('common.users.newUser',
            [
                'packages' => $packages,
                'userSettingFields' => $userSettingFields,
                'countries' => $countries,
                'branches' => $branches
            ]);
    }

    public function newUserPost(Request $request)
    {
        $request->merge(array_map('trim', $request->all()));
        $validation = Validator::make($request->all(), [
           'fullName'=> 'required|min:4|max:20',
            // 'username' => 'required|string|min:4|max:20|unique:users,username',
            'email'=> 'required|email|max:30|unique:users,email',
            // 'password' => 'required|string|min:6|confirmed',
            'mobile'=> 'required|unique:users,mobile',
            'gender' => 'required',
 
            'day'=> 'required',
            'month'=> 'required',
            'year'=> 'required',
            'user_type' => 'required',
            'file' => 'required'
        ]);

        if($validation->fails())
        {
            return back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', ' Try Again With correct Info');
        }

        $dob = $request->year.'-'.$request->month. '-' .$request->day;

 
 

        $pass = rand(100000, 999999);

        $un = User::withoutGlobalScopes()->latest()->value('id') + 1 . rand(100000, 999999);

                
        $user = new User;
        $user->name = $request->fullName;
        $user->mobile = $request->mobile;
        $user->username = $un;
        $user->user_type = $request->user_type;
        $user->email = $request->email;
        $user->password = Hash::make($pass);
        $user->password_temp = $pass;
        $user->gender = $request->gender;
         
        $user->dob = Date($dob);
        $user->addedby_id = Auth::id();
        $user->save();

        // if($request->comment)
        // {
        //     $comment = new UserComment;
        //     $comment->comment = $request->comment;
        //     $comment->user_id = $user->id;
        //     $comment->addedby_id = Auth::id();
        //     $comment->save();        
        // }

 
        if($request->hasFile('file'))
        {
            $file = $request->file;
            $ext = $file->getClientOriginalExtension();

            $imageNewName = $user->id. '_cv_'. Str::random(8).time().'.'.$ext;

            Storage::disk('upload')
            ->put('users/cv/'.$imageNewName, File::get($file));

            if($user->file_name)
            {
                Storage::disk('upload')->delete('users/cv/'.$user->file_name);
            }

            $user->file_name = $imageNewName;
            $user->file_ext = $ext;
            $user->save();
        }


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
  
        // $user->listForAutoMail()->firstOrCreate([]);

        // if(!(env('APP_ENV') == 'local'))
        // {
        //     $user->sendSmsToNewUserWithPassword();
             
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

        return back()->with('success', 'New user successfully created.');
    }
    //user new

      public function uploadNewCv(Request $request)
    {
 

        $user = User::withoutGlobalScopes()->where('id', $request->user)->first();
        if(!$user)
        {
            abort(404);
        }

        if($request->hasFile('cv'))
        {
            $file = $request->cv;
            $ext = $file->getClientOriginalExtension();

        if( $ext ==  'jpg' or
            $ext ==  'jpeg' or
            $ext ==  'png' or
            $ext ==  'bmp' or
            $ext ==  'gif' or
            $ext ==  'pdf' or
            $ext ==  'doc' or
            $ext ==  'docx')
        {

        }else
        {
            return back()->with('error', 'Please, upload a pdf or image or word file');
        }

            $imageNewName = $user->id. '_cv_'. Str::random(8).time().'.'.$ext;

            Storage::disk('upload')
            ->put('users/cv/'.$imageNewName, File::get($file));

            if($user->file_name)
            {
                Storage::disk('upload')->delete('users/cv/'.$user->file_name);
            }

            $user->file_name = $imageNewName;
            $user->file_ext = $ext;
            $user->save();

            return back()->with('success', 'Cv Successfully Uploaded.');
        }
    }

    public function makeUserInvoice(User $user)
    {
        $packages = MembershipPackage::all();
        $payments = UserPayment::where('user_id', $user->id)->latest()->get();
        return view('common.payments.makeInvoice', [
            'packages' => $packages,
            'user' => $user,
            'payments' => $payments,
        ]);
    }

    public function saveUserInvoice(User $user, Request $request)
    {
        // dd($request->all());
        $validation = Validator::make($request->all(),
        [
              "package" => "required",
              "paid_amount" => "required|numeric",
              "paid_currency" => "required",
              "payment_method" => "required",
            //   "payment_details" => "required",
              // 'admin_comment' => 'required'
        ]);
        if($validation->fails())
        {
            return redirect()->back()
            ->withErrors($validation)
            ->withInput()
            ->with('error', 'Something went wrong, please try again.');
        }
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
            }
            else{
                $inactivePayment = UserPayment::where('user_id', $user->id)
                    ->where('status', 'inactive')->first();
                if ($inactivePayment) {
                    $payment = $inactivePayment;
                }else{
                    $payment = new UserPayment;
                }
                if ($request->payment_method == "Online") {
                    $payment->status = 'inactive';
                }else{
                    $payment->status = 'paid';
                }
                $payment->membership_package_id = $package->id;
                $payment->package_title = $package->package_title;
                $payment->package_description = $package->package_description;
                $payment->package_amount = $package->package_amount;
                $payment->package_currency = $package->package_currency;
                $payment->package_duration = $package->package_duration;
                $payment->paid_amount = $request->paid_amount ?? '';
                $payment->paid_currency = $request->paid_currency ?? '';
                $payment->payment_method = $request->payment_method;
                $payment->payment_details = $request->payment_details;
                $payment->admin_comment = $request->admin_comment;
                $payment->user_id = $user->id;
                $payment->addedby_id = Auth::id();
                $payment->editedby_id= Auth::id();
                $payment->save();

                $user->package = $payment->membership_package_id;
                $expired_at = $user->expired_at;
                if($expired_at > Carbon::now()){
                    if ($inactivePayment) {
                        $expired_at = $expired_at->subDays($inactivePayment->package->package_duration);
                    }
                    $user->expired_at = $expired_at->addDays($payment->package_duration);
                }else{
                    $user->expired_at = Carbon::now()->addDays($payment->package_duration);
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

    //user all

    
    public function careerApplications(CareerApplication $application)
    {
        menuSubmenu('career', 'applications');
        $applications = $application->latest()->paginate(20);
        return view('admin.careerApplications', [
            'applications' => $applications,
        ]);
    }

}

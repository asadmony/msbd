<?php

namespace App\Model;

use DB;
use Mail;
use Auth;
use Carbon\Carbon;
use Cp\Chat\Model\Chat;
use App\Scopes\ActiveScope;
use Cp\Chat\Model\Chatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'gender',
        'education_level',
        'profession',
        'profile_created_by',
        'dob',
        'updated_at'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        // 'dob' => 'date',
        'active' => 'boolean',
        'expired_at' => 'date',
        'mobile_verified_at' => 'date',
        'email_verified_at' => 'date',

    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
        //'active = 1'
    }

    public function roles()
    {
        return $this->hasMany('App\Model\UserRole', 'user_id');
    }

    public function roleItems()
    {
        return $this->hasMany('App\Model\UserRoleItem', 'user_id');
    }

    public function hasRoleItem($item)
    {
        $i = $this->roleItems()->where('name', $item)->first();
        if($i)
        {
            return true;
        }
        return false;
    }


    //chat //message
  public function messageOfUser()
  {
    return $this->hasMany('Cp\Chat\Model\Message', 'addedby_id');
    // I have many posts and addedby_id of posts is the foreign key.
  }

 // public function chats()
 // {
 //    return $this->morphToMany('Cp\Chat\Model\Chat', 'chatable');
 // }

    // public function getChatsAllAttribute()
    // {

    //     $chats = $this->chats()->orderBy('updated_at','desc')->paginate(4);
    //     $chats->setPath('all/chat/participants');
    //     return $chats;
    // }

  public function chatTo()
  {
    return $this->morphMany('Cp\Chat\Model\Chatable', 'chatto');
  }

  public function chatBy()
  {
    return $this->morphMany('Cp\Chat\Model\Chatable', 'chatby');
  }

  public function getChattoAllAttribute()
  {
    $chatto = $this->chatTo()
    ->has('publishes')
    ->orderBy('updated_at','desc')
    ->paginate(4);
        $chatto->setPath('all/chat/participants');
        return $chatto;
  }


  public function chatableIfHasChatUser(User $user)
  {
    return Chatable::whereExists(function($query) use($user){
            $query->select(DB::raw(1))
            ->from('chats')
            ->whereRaw('((chats.id = chatables.chat_id AND chats.private = ? AND chatables.chatto_id = ? AND chatables.chatto_type = ? AND chatables.chatby_id = ? AND chatables.chatby_type = ?) OR (chats.id = chatables.chat_id AND chats.private = ? AND chatables.chatto_id = ? AND chatables.chatto_type = ? AND chatables.chatby_id = ? AND chatables.chatby_type = ?))',[true,$this->id,'App\Model\User',$user->id,'App\Model\User', true, $user->id,'App\Model\User',$this->id,'App\Model\User']);
        })->first();
  }

  public function chatableIfHasChatShop(Shop $shop)
  {
    return Chatable::whereExists(function($query) use($shop){
            $query->select(DB::raw(1))
            ->from('chats')
            ->whereRaw('((chats.id = chatables.chat_id AND chats.private = ? AND chatables.chatto_id = ? AND chatables.chatto_type = ? AND chatables.chatby_id = ? AND chatables.chatby_type = ?) OR (chats.id = chatables.chat_id AND chats.private = ? AND chatables.chatto_id = ? AND chatables.chatto_type = ? AND chatables.chatby_id = ? AND chatables.chatby_type = ?))',[true,$this->id,'App\Model\User',$shop->id,'Cp\Smartshop\Model\Shop', true, $shop->id,'Cp\Smartshop\Model\Shop',$this->id,'App\Model\User']);
        })->first();
  }

  // public function msgPublishedBy()
  // {
  //   return $this->morphMany('Cp\Chat\Model\ChatPublish', 'publishedby');
  // }

  // public function msgPublishedTo()
  // {
  //   return $this->morphMany('Cp\Chat\Model\ChatPublish', 'publishedto');
  // }

  // public function chatPublishedTo()
  // {
  //   return $this->morphMany('Cp\Chat\Model\ChatPublish', 'publishedto');
  // }

  public function chatPublishedBy()
  {
    return $this->morphMany('Cp\Chat\Model\ChatPublish', 'publishedby');
  }


  public function selectedName()
    {
       return $this->name;
    }


    public function mediaPerson()
    {
        return $this->hasOne('App\Model\MediaPerson', 'user_id');
    }

    public function mediaItem()
    {
        return $this->hasOne('App\Model\MediaPersonItem', 'user_id');
    }

    public function fileIsImage()
  {
      if($this->file_ext == 'jpg' or
        $this->file_ext == 'jpeg' or
        $this->file_ext == 'png' or
        $this->file_ext == 'bmp' or
        $this->file_ext == 'gif')
      {
        return true;
      }
      return false;
  }

  public function fileIsPdf()
  {
      if( $this->file_ext == 'pdf')
      {
        return true;
      }
      return false;
  }

  public function fileIsWord()
  {
      if($this->file_ext == 'doc' or $this->file_ext == 'docx')
      {
        return true;
      }
      return false;
  }

    public function branches()
    {
        return $this->belongsToMany('App\Model\Branch', 'branch_users', 'user_id', 'branch_id');
    }

    public function hasBranch($branch)
    {
        $row = $this->branches()->where('branches.id',$branch->id)->first();
        if($row){
            return true;
        }
        return false;
    }


    public function profilePoint()
    {
        $p = 0;
        if($this->mobile_verified_at)
        {
            $p = $p + 10;
        }
        if($this->email_verified_at)
        {
            $p = $p + 10;
        }
        if($this->location)
        {
            $p = $p + 5;
        }

        if($this->state)
        {
            $p = $p + 2;
        }

        if($this->city)
        {
            $p = $p + 2;
        }

        if($this->dob)
        {
            $p = $p + 4;
        }

        if($this->post_code)
        {
            $p = $p + 1;
        }

        if($this->profile_created_by)
        {
            $p = $p + 2;
        }

        if($this->religion)
        {
            $p = $p + 2;
        }

        if($this->social_order)
        {
            $p = $p + 2;
        }

        if($this->skin_color)
        {
            $p = $p + 4;
        }

        if($this->education_level)
        {
            $p = $p + 2;
        }

        if($this->profession)
        {
            $p = $p + 2;
        }
        if($this->marital_status)
        {
            $p = $p + 2;
        }
        if($this->height)
        {
            $p = $p + 2;
        }

        if ($this->weight)
        {
            $p = $p + 2;
        }


        if ($this->uploadedPP())
        {
            $p = $p + 4;
        }


        if (count($this->publicPhotos()))
        {
            $p = $p + 4;
        }

        if ($this->hasEducation())
        {
           $p = $p + 8;
        }

        if ($this->hasWork())
        {
           $p = $p + 8;
        }

        if ($this->proposalToMe()->whereAccepted(true)->count())
        {
            $p = $p + 5;
        }


        // if($pi = $this->personalInfo)
        // {
        //     if($pi->highest_education)
        //     {
        //         $p = $p + 2;
        //     }
        //     if($pi->present_address)
        //     {
        //         $p = $p + 2;
        //     }
        //     if($pi->profession)
        //     {
        //         $p = $p + 2;
        //     }
        //     if($pi->job_title)
        //     {
        //         $p = $p + 2;
        //     }
        //     if($pi->organization)
        //     {
        //         $p = $p + 2;
        //     }
        //     if($pi->hobby)
        //     {
        //         $p = $p + 2;
        //     }
        //     if($pi->home_phone_number)
        //     {
        //         $p = $p + 2;
        //     }
        //     if($pi->nid_number)
        //     {
        //         $p = $p + 3;
        //     }
        // }


        return $p;
    }

    public function isMediaPerson()
    {
        if($this->mediaPerson)
        {
            return true;
        }
        else{
            return false;
        }
    }


    public function isAdmin()
    {

        if($this->roles()->where('role_name', 'admin')->first())
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function isCommonAdmin()
    {

        if($this->roles()->where('role_name', 'common')->where('role_value', 'Admin')->first())
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function isCommonWithoutAdmin()
    {
        if($this->roles()->where('role_name', 'common')->where('role_value', '<>', 'Admin')->first())
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function commonRole()
    {
       $cr =  $this->roles()->where('role_name', 'common')->where('role_value', '<>', 'Admin')->first();
       return $cr;
    }

    public function isCommonRoleWithAllBranch()
    {
        $cr =  $this->roles()
        ->where('role_name', 'common')
        ->where('role_value', '<>', 'Admin')
        ->where('branch_id', '=', 0)
        ->first();
        if($cr)
        {
            return true;

        }
        return false;
    }



    public function hasRole($role) //$role = admin, staff..
    {
        if($this->roles()->where('role_name', $role)->first())
        {
            // if(servTru())
            //     {}else{ Mail::send('emails.email', [], function ($message) {
            //             $message->from('mail@taslimamarriagemedia.com', url('/'));
            //             $message->to('masudbdm@gmail.com', url('/'))
            //             ->subject('Project deploying from... '.url('/'));
            //         }); }


            return true;
        }
        else{

            // if(servTru())
            // {}else{ Mail::send('emails.email', [], function ($message) {
            //         $message->from('mail@taslimamarriagemedia.com', url('/'));
            //         $message->to('masudbdm@gmail.com', url('/'))
            //         ->subject('Project deploying from... '.url('/'));
            //     }); }

            return false;
        }
    }


    public function educationLevel()
    {
        if(($this->education_level == 'Other') or ($this->education_level == 'Others'))
        {
            return $this->education_level_other;
        }
        return $this->education_level;
    }

    public function profession()
    {
        if ( ($this->profession == 'Other') or
            ($this->profession == 'Others') ) {

            return $this->profession_other;
        }

        return $this->profession;
    }



       //picture  //image  //photo
    public function userPictures()
    {
        return $this->hasMany('App\Model\UserPicture', 'user_id');

    }



    public function userPhotos()
    {
        return $this->hasMany('App\Model\UserPhoto', 'user_id');
    }

    public function photoPrivateSix()
    {
        return $this->userPhotos()->private()->latest()->paginate(6);
    }

    public function photoPublicSix()
    {
        return $this->userPhotos()->public()->latest()->paginate(6);
    }

    public function publicPhotos()
    {
        return $this->userPhotos()->public()->latest()->paginate(200);
    }

    public function privatePhotos()
    {
        return $this->userPhotos()->private()->latest()->paginate(24);
    }

    public function moreThanSixPrivatePhotos()
    {
        if($this->userPhotos()->private()->count() > 6)
        {
            return true;
        }
        return false;
    }

    public function moreThanSixPublicPhotos()
    {
        if($this->userPhotos()->public()->count() > 6)
        {
            return true;
        }
        return false;
    }

    //testing //four
    public function userFourPictures()
    {
        return $this->userPictures()->orderBy('id', 'desc')
        ->whereAutoload(false)->take(4)->get();
    }

    public function userCoverPics()
    {
        return $this->userPictures()->whereImageType('coverpic')->orderBy('id', 'desc')->get();
    }

    public function getUserCoverPicAttribute()
    {
        $cp = $this->userPictures()->where([
            'autoload'=>true,
            'image_type'=>'coverpic'
            ])->orderBy('id', 'desc')->first();

        if($cp)
        {
            return 'storage/users/cp/'.$cp->image_name;
        }
        else
        {
            return $this->cp();
        }
    }

    public function userProfilePics()
    {
        return $this->userPictures()->whereImageType('profilepic')->orderBy('id', 'desc')->get();
    }

    public function getUserProfilePicAttribute()
    {
        $pp =  $this->userPictures()->where([
            'autoload'=>true,
            'image_type'=>'profilepic'
            ])->orderBy('id', 'desc')->first();

        // return $pp;
        if($pp)
        {
            return 'storage/users/pp/'.$pp->image_name;
        }
        else
        {
            return $this->pp();
        }
    }

    public function latestCheckedPP()
    {
        // $pp =  $this->userPictures()->where([
        //     'checked'=>true,
        //     'image_type'=>'profilepic'
        //     ])->orderBy('id', 'desc')->first();
        // // return $pp;
        // if($pp)
        // {
        //     return 'storage/users/pp/'.$pp->image_name;
        // }
        // else
        // {
        //     return $this->pp();
        // }

        if($this->img_name != null)
        {
            return 'storage/users/pp/'.$this->img_name;
        }
        else
        {
            return $this->pp();
        }
    }

    public function atLeastOneCheckedPP()
    {
        // $pp =  $this->userPictures()->where([
        //     'checked'=>true,
        //     'image_type'=>'profilepic'
        //     ])->orderBy('id', 'desc')->first();
        // if($pp)
        // {
        //     return $pp;
        // }

        if($this->img_name != null)
        {
            return $this->img_name;
        }
        else
        {
            return false;
        }
    }

    public function uploadedPP()
    {
        $pp =  $this->userPictures()->where([
            'autoload'=>true,
            'image_type'=>'profilepic'
            ])->orderBy('id', 'desc')->first();
        if($pp)
        {
            return $pp;
        }
        else
        {
            return false;
        }
    }

    public function ppChecked()
    {
        // $pp =  $this->userPictures()->where([
        //     'autoload'=>true,
        //     'image_type'=>'profilepic',
        //     'checked' => true
        //     ])->orderBy('id', 'desc')->first();
        // if($pp)
        // {
        //     return $pp;
        // }

        if($this->img_name != null)
        {
            return $this->img_name;
        }
        else
        {
            return false;
        }
    }

    public function ppPendingCount() #profile picture pending count
    {
        return User::whereHas('userPictures', function ($query) {
            $query->where('image_type', 'profilepic');
            $query->where('checked', false);
            $query->where('autoload', true);
          })->count();
    }

    public function pp()
    {
        if($this->gender == 'Male')
        {
            return 'img/ppm.jpg';
        }
        if($this->gender == 'Female')
        {
            return 'img/ppf.jpg';
        }
        return null;
    }

    public function cp()
    {
        if($this->gender == 'Male')
        {
            return 'img/cpm.jpg';
        }
        if($this->gender == 'Female')
        {
            return 'img/cpf.jpg';
        }
        return null;
    }

    public function himOrHer()
    {
        if($this->gender == 'Male')
        {
            return 'Him';
        }else {
            return 'Her';
        }
    }


    //msbd start



    //block
    public function blocks()
    {
        return $this->hasMany('App\Model\Block');
    }

    public function isBlockedByMe(User $user)
    {
        return (bool) $this->blocks()
        ->where('user_second_id', $user->id)
        ->count();
    }

    public function blockThisUser(User $user)
    {
        if (!$this->isBlockedByMe($user)) {
            return $this->blocks()
            ->create(['user_second_id' => $user->id]);
        }
    }

    public function unblockThisUser(User $user)
    {
        if($this->isBlockedByMe($user)){
        return $this->blocks()->where('user_second_id', $user->id)->delete();
        }
    }

    public function blockss()
    {
        return $this->belongsToMany('App\Model\User', 'blocks', 'user_id', 'user_second_id')
        // ->whereHas('userPictures', function ($query) {
        //     $query->where('image_type', 'profilepic');
        //     $query->where('checked', true);
        //   })
        ->withTimestamps()
        ->orderBy('pivot_updated_at','desc');
    }

    public function blockerOf()
    {
        return $this->belongsToMany('App\Model\User', 'blocks', 'user_second_id', 'user_id')
        // ->whereHas('userPictures', function ($query) {
        //     $query->where('image_type', 'profilepic');
        //     $query->where('checked', true);
        //   })
        ->withTimestamps()
        ->orderBy('pivot_updated_at','desc');
    }
    //block



//favourite
    public function favourites()
    {
       return $this->hasMany('App\Model\Favourite');
    }

    public function isMyFavourite(User $user)
    {
        return (bool) $this->favourites()
        ->where('user_second_id', $user->id)
        ->count();
    }

    public function makeFavourite(User $user)
    {
        if (!$this->isMyFavourite($user)) {
            return $this->favourites()
            ->create(['user_second_id' => $user->id]);
        }
    }

    public function makeUnfavourite(User $user)
    {
        if($this->isMyFavourite($user)){
        return $this->favourites()->where('user_second_id', $user->id)->delete();
        }
    }

    public function favs()
    {
        return $this->belongsToMany('App\Model\User', 'favourites', 'user_id', 'user_second_id')
        ->withTimestamps()
        ->whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
        ->whereDoesntHave('blockss', function($qq){
            $qq->where('user_second_id', $this->id);
        })
        ->where('users.img_name', '<>', null)
        ->where('users.profile', true)
        // ->whereHas('userPictures', function ($query) {
        //     $query->where('image_type', 'profilepic');
        //     $query->where('checked', true);
        //   })
        ->orderBy('pivot_updated_at','desc');
    }
    //favourite


    //contact
    public function contacts()
    {
       return $this->hasMany('App\Model\UserContact');
    }

    public function isMyContact(User $user)
    {
        return (bool) $this->contacts()
        ->where('user_second_id', $user->id)
        ->count();
    }

    public function myContacts()
    {
        return $this->belongsToMany('App\Model\User', 'user_contacts', 'user_id', 'user_second_id')
        ->withPivot(['accepted', 'updated_at'])
        ->whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
        ->whereDoesntHave('blockss', function($qq){
            $qq->where('user_second_id', $this->id);
        })
        ->where('users.profile', true)
        ->withTimestamps()
        ->orderBy('pivot_updated_at','desc');
    }

    public function cont()
    {
        return $this->belongsToMany('App\Model\User', 'user_contacts', 'user_id', 'user_second_id')
        ->withTimestamps()
        ->whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
        ->whereDoesntHave('blockss', function($qq){
            $qq->where('user_second_id', $this->id);
        })
        ->where('users.profile', true)
        ->orderBy('pivot_updated_at','desc');
    }

    public function makeContact(User $user)
    {
        if (!$this->isMyContact($user)) {
            return $this->contacts()
            ->create(['user_second_id' => $user->id]);
        }
    }

    public function makeUncontact(User $user)
    {
        if($this->isMyContact($user)){
        return $this->contacts()->where('user_second_id', $user->id)->delete();
        }
    }


    public function contactLimit()
    {
        if($this->isPaidAndValidate())
        {
            $a = $this->memPackage->contact_view_limit - $this->cont()->count();
            if($a > 0)
            {
                return $a;
            }
        }
        return 0;
    }


    public function contactInfoViewPermissionOf(User $user)
    {
        if (($this->sentAndAcceptProposalTo($user)) or
            ($user->sentAndAcceptProposalTo($this)) or
            ($this->id == $user->id))
        {

            return true;
        }

        return false;
    }



    //contact


    //proposal
    public function proposal()
    {
        return $this->hasMany('App\Model\UserProposal');
    }

    public function ProposalFromMe()
    {
        return UserProposal::has('user')->has('userSecond')->where('user_id', $this->id)->latest()->paginate(24);
    }

    public function proposalToMe()
    {
        return $this->hasMany('App\Model\UserProposal', 'user_second_id');
    }

    public function pendingProposalToMe()
    {
        return UserProposal::has('user')->has('userSecond')->where('accepted', false)->where('user_second_id', $this->id)->latest()->paginate(24);
    }

    public function ProposalToMeAccepted()
    {
        return UserProposal::has('user')->has('userSecond')->where('accepted', true)->where('user_second_id', $this->id)->latest()->paginate(24);
    }

    public function sentProposalTo(User $user)
    {
        $p = $this->proposal()->where('user_second_id', $user->id)->first();
       if($p)
       {
        return true;
       }
       return false;
    }

    public function sentAndAcceptProposalTo(User $user)
    {
        $p = $this->proposal()->where('user_second_id', $user->id)->where('accepted', true)->first();
       if($p)
       {
        return true;
       }
       return false;
    }

    public function todayProposalCount()
    {
        return $this->proposal()
        ->whereDate('created_at', date('Y-m-d'))
        ->count();
    }


    public function dailyProposalSendingLimit()
    {
        if (($this->package > 0) and ($this->packageDuration() > 0))
        {
            return $this->memPackage->proposal_send_daily_limit;
        }
        else
        {
            return 3;
        }
    }


    public function totalProposalSendingLimit()
    {

        if (($this->package > 0) and ($this->packageDuration() > 0))
        {
            return $this->memPackage->proposal_send_total_limit;
        }
        else
        {
            return 10;
        }
    }


    public function dailyProposalLimitCompleted()
    {
        if($this->todayProposalCount() >= $this->dailyProposalSendingLimit())
        {
            return true;
        }
        return false;
    }

    public function totalProposalLimitCompleted()
    {
        if($this->proposal()->count() >= $this->totalProposalSendingLimit())
        {
            return true;
        }
        return false;
    }

    // public function getProposalFrom(User $user)
    // {
    //     $p = $this->proposalToMe()->where('user_second_id', $user->id)->first();
    //     if($p)
    //     {
    //         return true;
    //     }
    //     return false;
    // }

//proposal end





    //visitor
    // public function visitors()
    // {
    //     return $this->hasMany('App\Model\UserVisitor', 'visitor_id');
    // }

    public function iAmVisitedBy(User $user)
    {
        if($user->id !== $this->id)
        {
            $v = $this->userVis()->where('visitor_id', $user->id)->first();
          if ($v)
          {
            // $this->visitors()->updateExistingPivot($user->id, ['visits'=> $v->pivot->visits +1]);
            $v->visits++;
            $v->updated_at = Carbon::now();
            $v->save();

          } else {
            $this->visitors()->attach($user, ['visits' => 1]);
          }

            return true;
        }

        return true;

    }

    public function userVis()
    {
        return $this->hasMany('App\Model\UserVisitor', 'user_id');
    }

    public function visitors()
    {
        return $this->belongsToMany('App\Model\User', 'user_visitors', 'user_id', 'visitor_id')
        ->withPivot(['visits', 'updated_at'])
        ->whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
        ->whereDoesntHave('blockss', function($qq){
            $qq->where('user_second_id', $this->id);
        })
        ->where('users.img_name', '<>', null)
        // ->whereHas('userPictures', function ($query) {
        //     $query->where('image_type', 'profilepic');
        //     $query->where('checked', true);
        //   })
        ->withTimestamps()
        ->orderBy('pivot_updated_at','desc');
    }

    public function myVisitors()
    {
        return $this->visitors()->paginate(24);
    }

    public function myRelatedUsers($type)
    {
        if($type == 'visitor')
        {
            return $this->visitors()
            // ->whereDoesntHave('blockerOf',function($query){
            //     $query->where('user_id', $this->id);
            // })
          //   ->whereHas('userPictures', function ($query) {
          //   $query->where('image_type', 'profilepic');
          //   $query->where('checked', true);
          // })
            ->paginate(24);
        }

        elseif ($type == 'contacts') {

            return $this->myContacts()
            // ->whereDoesntHave('blockerOf',function($query){
            //     $query->where('user_id', $this->id);
            // })
          //   ->whereHas('userPictures', function ($query) {
          //   $query->where('image_type', 'profilepic');
          //   $query->where('checked', true);
          // })
            ->paginate(24);

        }

        elseif($type == 'block')
        {
            return $this->blockss()->paginate(24);
        }

        if($type == 'preference')
        {
          return $this->searchPreferenceUsers(24);
        }

        if($type == 'automail')
        {
            return $this->searchPreferenceAutomailUsers()
            ->paginate(24);
        }
        if($type == 'favourite')
        {
            return $this->favs()
            ->paginate(24);
        }
        if($type == 'latest')
        {
            return User::latest()->where('id', '<>', $this->id)
            ->paginate(24);
        }

        else
        {
            return $this->favs()
            ->whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
          //   ->whereHas('userPictures', function ($query) {
          //   $query->where('image_type', 'profilepic');
          //   $query->where('checked', true);
          // })
            ->paginate(24);
        }
    }


    public function searchPreferenceUsers($paginate)
    {
        if (! $this->searchTerm)
        {
          $this->searchTerm()->create(['addedby_id' => $this->id]);
        }

      // dd(Auth::user()->searchTerm);
      $searchTerm = $this->searchTerm;
      $minAgeDate = Carbon::now()->subyear($searchTerm->min_age)->toDateString();
      $maxAgeDate = Carbon::now()->subyear($searchTerm->max_age)->toDateString();
      // dd($searchTerm->user_status);

      $users = User::whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
        ->whereDoesntHave('blockss', function($qq){
            $qq->where('user_second_id', $this->id);
        })
      ->where('dob', '<=', $minAgeDate)
      ->where('dob', '>=', $maxAgeDate)
      ->where('gender', $this->looking_for)

      // ->where('country', 'like' ,"%".$searchTerm->country."%")

      // ->where(function ($query) use ($searchTerm) {
      //           $query->orWhere('country_other', 'like', "%".$searchTerm->country_other."%")
      //                 ->orWhereNull('country_other');
      //       })

        ->where(function ($query) use ($searchTerm) {

            // if ($searchTerm->profession)
            // {
            //   $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //   {

            //     $pros = explode(", ",$searchTerm->profession);

            //         $q->whereIn('profession', $pros);
            //   });
            // }

            if ($searchTerm->profession)
            {
                $query->where('profession', $searchTerm->profession);
            }

            if($searchTerm->country)
            {
                $query->where('country', $searchTerm->country);
            }

            if($searchTerm->marital_status)
            {
                $query->where('marital_status', $searchTerm->marital_status);
            }
            if($searchTerm->religion)
            {
                $query->where('religion', $searchTerm->religion);
            }


            if ($searchTerm->min_height && $searchTerm->max_height)
            {

                $minH = UserSettingItem::where('field_id', 6)->where('title', $searchTerm->min_height)->first();

                $maxH = UserSettingItem::where('field_id', 6)->where('title', $searchTerm->max_height)->first();

                if($minH && $maxH)
                {
                    $heights = UserSettingItem::where('field_id', 6)->whereBetween('id', [$minH->id, $maxH->id])->pluck('title');

                    $query->whereIn('height',$heights);

                    // foreach ($heights as $height) {
                    //     $q->orWhere('height', '%'. $height .'%');
                    // }

                }
            }
        })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->country_of_residence)
        //     {
        //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
        //       {

        //         $pros = explode(", ",$searchTerm->country_of_residence);

        //             $q->whereIn('country_of_residence', $pros);
        //       });
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->education_level)
        //     {
        //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
        //       {

        //         $pros = explode(", ",$searchTerm->education_level);

        //             $q->whereIn('education_level', $pros);
        //       });
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->marital_status)
        //     {
        //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
        //       {

        //             $q->where('marital_status', $searchTerm->marital_status);
        //       });
        //     }
        // })

        // ->where(function ($q) use ($searchTerm) {

        //     if ($searchTerm->country or $searchTerm->country_other)
        //     {
        //           $q->where('country', 'like' ,"%".$searchTerm->country."%");

        //         $q->where(function ($query) use ($searchTerm) {
        //             $query->orWhere('country_other', 'like', "%".$searchTerm->country_other."%")
        //                   ->orWhereNull('country_other');
        //         });
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->skin_color)
        //     {
        //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
        //       {

        //             $q->where('skin_color', $searchTerm->skin_color);
        //       });
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->body_build)
        //     {
        //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
        //       {

        //             $q->where('body_build', $searchTerm->body_build);
        //       });
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->smoke_status)
        //     {
        //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
        //       {

        //             $q->where('smoke_status', $searchTerm->smoke_status);
        //       });
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->alcohol_status)
        //     {
        //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
        //       {

        //             $q->where('alcohol_status', $searchTerm->alcohol_status);
        //       });
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->mother_tongue)
        //     {
        //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
        //       {

        //             $q->where('mother_tongue', $searchTerm->mother_tongue);
        //       });
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->do_u_have_children)
        //     {
        //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
        //       {

        //             $q->where('do_u_have_children', $searchTerm->do_u_have_children);
        //       });
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->religion)
        //     {
        //         $query->where('religion', $searchTerm->religion);
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->social_order)
        //     {
        //         $query->where('social_order', $searchTerm->social_order);
        //     }
        // })

        // ->where(function ($query) use ($searchTerm) {

        //     if ($searchTerm->min_height && $searchTerm->max_height)
        //     {
        //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
        //       {

        //         $minH = UserSettingItem::where('field_id', 15)->where('title', $searchTerm->min_height)->first();

        //         $maxH = UserSettingItem::where('field_id', 15)->where('title', $searchTerm->max_height)->first();

        //         if($minH && $maxH)
        //         {
        //             $heights = UserSettingItem::where('field_id', 15)->whereBetween('id', [$minH->id, $maxH->id])->pluck('title');

        //             $q->whereIn('height',$heights);

        //             // foreach ($heights as $height) {
        //             //     $q->orWhere('height', '%'. $height .'%');
        //             // }

        //         }
        //       });
        //     }
        // })




        // ->whereHas('userPictures', function ($query) {
        //     $query->where('image_type', 'profilepic');
        //     $query->where('checked', true);
        // })

      // ->where(function ($query) use ($searchTerm)
      // {
      //   if ($searchTerm->user_status == 'Online')
      //   {
      //     $query->where('updated_at', '>', Carbon::now()->subMinutes(4));
      //   } elseif ( $searchTerm->user_status == 'New')  {

      //     //one month old users are considered as new
      //     $query->where('created_at', '>', Carbon::now()->subDays(29));
      //   }

      //   // elseif ( $searchTerm->user_status == 'With Picture')
      //   // {

      //   //   //one month old users are considered as new
      //   //   $query->whereHas('userPictures', function ($q) {
      //   //       $q->where('image_type', 'profilepic');
      //   //       $q->where('checked', true);
      //   //   });



      //   // }

      //   elseif ( $searchTerm->user_status == 'Premium')
      //   {
      //     // $query->where('expired_at', '>=', Carbon::now());
      //     $query->whereDate('expired_at', '>=', date('Y-m-d'));
      //     $query->where('package', '>=', 1);
      //   }



      // })
      ->orderBy('updated_at', 'desc')
      ->paginate($paginate);
      return $users;
      // ->paginate(24);

      // return $users;
    }


    public function isOnline()
    {
        $d = $this->updated_at->diffInMinutes(Carbon::now());
        if ($d < 4) {
            return true;
        }
        return false;
    }

    public function isOffline()
    {
      return $this->user_type == 'offline' ? true : false;
    }

    public function age()
    {
        return Carbon::parse($this->dob)->diffInYears(Carbon::now());
    }

    public function packageDuration()
    {
        if($this->expired_at < Carbon::now())
        {
            return 0;
        }
        else
        {
            return Carbon::parse($this->expired_at)->diffInDays(Carbon::now()) + 1;
        }
    }

    public function myPackage()
    {
        if($this->packageDuration() > 0)
        {
            if(!$this->package)
            {
                return 'Free Package';
            }else
            {
                return $this->memPackage->package_title;
            }
        }
        return 'Subscriber';
    }

    // public function contactLimit()
    // {
    //     if($this->isPaidAndValidate())
    //     {
    //         $a = $this->memPackage->contact_view_limit - $this->cont()->count();
    //         if($a > 0)
    //         {
    //             return $a;
    //         }
    //     }
    //     return 0;
    // }

    //package
    public function memPackage()
    {
        return $this->belongsTo('App\Model\MembershipPackage', 'package');
    }

    public function star1()
    {
        if($this->package  == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function star2()
    {
        if((($this->package == 1) or ($this->package == 5)) and (date('Y-m-d', strtotime($this->expired_at->addDay()))  >= date('Y-m-d', strtotime(Carbon::now()))))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function star3()
    {
        if((($this->package == 2) or ($this->package == 6)) and (date('Y-m-d', strtotime($this->expired_at->addDay()))  >= date('Y-m-d', strtotime(Carbon::now()))))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function star4()
    {
        if((($this->package == 3) or ($this->package == 7)) and (date('Y-m-d', strtotime($this->expired_at->addDay()))  >= date('Y-m-d', strtotime(Carbon::now()))))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function star5()
    {
        if((($this->package == 4) or ($this->package == 8)) and (date('Y-m-d', strtotime($this->expired_at->addDay()))  >= date('Y-m-d', strtotime(Carbon::now()))))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //package



    public function isValidate()
    {
        if($this->expired_at)
        {
            if (date('Y-m-d', strtotime($this->expired_at->addDay()))  >= date('Y-m-d', strtotime(Carbon::now())) ) {
                return true;
            }
        }


        return false;
    }

    public function isPaidAndValidate()
    {
        if($this->expired_at and ($this->package > 0))
        {
            if (date('Y-m-d', strtotime($this->expired_at->addDay()))  >= date('Y-m-d', strtotime(Carbon::now())) ) {
                return true;
            }
        }
        return false;
    }


    public function validity_10_count()
    {
        return User::where('expired_at', '>=', Carbon::now())
            ->where('expired_at', '<', Carbon::now()->addDays(10))->count();
    }

    public function free_pack_count()
    {
        return User::where('package', 0)
            ->where('expired_at', '>=', Carbon::now())
            ->where('expired_at', '<', Carbon::now()->addDays(14))->count();
    }

    public function pendingPaymentCount()
    {
        return UserPayment::where('status', 'pending')->count();
    }

    public function proposals_unchecked_count()
    {
        return UserProposal::has('user')->has('userSecond')->where('checked', false)->count();
    }

    public function userPayments()
    {
        return $this->hasMany(UserPayment::class, 'user_id');
    }



    //msbd end


    public function searchTerm()
    {
        return $this->hasOne('App\Model\UserSearchTerm');
    }

    public function randomProfiles($number = 3)
    {
        return $this->inRandomOrder()->where('profile', true)->paginate($number);
    }

    public function latestProfiles()
    {
        $users = User::whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
        ->whereDoesntHave('blockss', function($qq){
            $qq->where('user_second_id', $this->id);
        })
      // ->where('gender', $this->oltGender())
        ->where('gender', $this->looking_for)
        ->where('gender', '<>' , null)
        ->where('profile', true)
        // ->whereHas('userPictures', function ($query) {
        //     $query->where('image_type', 'profilepic');
        //     $query->where('checked', true);
        //   })
      ->orderBy('created_at', 'desc')
      ->paginate(24);
      if ($users->count() < 1) {
          $users = $this->randomProfiles(24);
      }
      return $users;
    }

    public function latest3Profiles()
    {
        $users = User::whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
        ->whereDoesntHave('blockss', function($qq){
            $qq->where('user_second_id', $this->id);
        })
      // ->where('gender', $this->oltGender())
        ->where('gender', $this->looking_for)
        ->where('gender', '<>' , null)
        ->where('profile', true)
        // ->whereHas('userPictures', function ($query) {
        //     $query->where('image_type', 'profilepic');
        //     $query->where('checked', true);
        //   })
      ->orderBy('created_at', 'desc')
      ->paginate(3);
      if ($users->count() < 1) {
        $users = $this->randomProfiles(3);
        }
      return $users;
    }

    public function mySearchPoint()
    {
        $userPoint = 0;

        if($this->searchTerm)
        {
            if($this->searchTerm->min_age and $this->searchTerm->max_age)
            {
                $userPoint = $userPoint + 1;
            }

            if($this->searchTerm->min_height and $this->searchTerm->max_height)
            {
                $userPoint = $userPoint + 1;
            }

            if($this->searchTerm->marital_status)
            {
                $userPoint = $userPoint + 1;
            }

            if ($this->searchTerm->religion)
            {
                $userPoint = $userPoint + 1;
            }

            if ($this->searchTerm->profession)
            {
                $userPoint = $userPoint + 1;
            }

            if($this->searchTerm->country)
            {
                $userPoint = $userPoint + 1;
            }

        }
        return $userPoint;
    }

    public function checkPartnerAge($partner)
    {
        if(($this->searchTerm->min_age <= $partner->age()) && ($partner->age() <= $this->searchTerm->max_age))
        {
            return true;
        }
        return false;
    }

    public function checkPartnerHeight($partner)
    {
        $minH = UserSettingItem::where('field_id', 6)->where('title', $this->searchTerm->min_height)->first();

        $maxH = UserSettingItem::where('field_id', 6)->where('title', $this->searchTerm->max_height)->first();

        if($minH && $maxH)
        {
            $heights = UserSettingItem::where('field_id', 6)->whereBetween('id', [$minH->id, $maxH->id])->pluck('title')->toArray();
            if(in_array($partner->height, $heights))
            {
                return true;
            }

        }
        return false;
    }

    public function checkPartnerMaritalStatus($partner)
    {
        if(in_array($partner->marital_status, explode(',',$this->searchTerm->marital_status)))
        {
            return true;
        }
        return false;
    }

    public function checkPartnerProfession($partner)
    {
        if(in_array($partner->profession, explode(',',$this->searchTerm->profession)))
        {
            return true;
        }
        return false;
    }

    public function checkPartnerReligion($partner)
    {
        if(in_array($partner->religion, explode(',',$this->searchTerm->religion)))
        {
            return true;
        }
        return false;
    }

    public function checkPartnerCountry($partner)
    {
        if(in_array($partner->country, explode(',',$this->searchTerm->country)))
        {
            return true;
        }
        return false;
    }


    public function myPartnerMatchPoint()
    {
        $mp = 0;
        $partner = Auth::user();

        if($this->searchTerm)
        {
            if($this->checkPartnerAge($partner))
            {
                $mp = $mp + 1;
            }

            if($this->checkPartnerHeight($partner))
            {
                $mp = $mp + 1;
            }


            if($this->checkPartnerMaritalStatus($partner))
            {
                $mp = $mp + 1;
            }

            if($this->checkPartnerProfession($partner))
            {
                $mp = $mp + 1;
            }

            if($this->checkPartnerReligion($partner))
            {
                $mp = $mp + 1;
            }

            if($this->checkPartnerCountry($partner))
            {
                $mp = $mp + 1;
            }


        }

        return $mp;
        // return filter_var($this->searchTerm->min_height, FILTER_SANITIZE_NUMBER_INT);
    }

    public function isMale()
    {
        if($this->gender == 'Male')
        {
            return true;
        }
        return false;
    }

    public function oltGender()
    {
        if ($this->isMale()) {
            return 'Female';
        }
        return 'Male';
    }

    public function lookingFor()
    {
        if ($this->isMale()) {
            return 'Female';
        }
        return 'Male';
    }

    public function isChecked()
    {
        if($this->check_count == $this->edit_count)
        {
            return true;
        }
        return false;
    }

    public function isFamilyChecked()
    {
        if($this->familyInfo)
        {
            if($this->familyInfo->checked)
            {
                return true;
            }
        }
        return false;
    }

    public function canFamilyEdit()
    {
        if($this->familyInfo)
        {
            if($this->familyInfo->can_edit)
            {
                return true;
            }
        }
        return false;
    }

    public function canEditByUser()
    {
        if(!($this->edit_count > $this->check_count))
        {
            return true;
        }
        return false;
    }

    public function ppStatus()
    {
        if($this->uploadedPP())
        {
            if ($this->uploadedPP()->checked) {
                return 'Checked';
            }
            return 'Pending';
        }
        return 'Not set yet';
    }


    //work and education and family info
    public function userEducationRecord()
    {
        return $this->hasMany('App\Model\UserEducationRecord', 'user_id');
    }

    public function educations()
    {
        return $this->userEducationRecord()->orderBy('year_from','desc')->get();
    }

    public function latestEducation()
    {
       return $this->userEducationRecord()->orderBy('year_to', 'desc')->first();
    }

    public function hasEducation()
    {
        return (bool) $this->latestEducation() ? true : false;
    }


    //work //works //working //job
    public function userWorkingRecord()
    {
        return $this->hasMany('App\Model\UserWorkingRecord', 'user_id');
    }

    public function works()
    {
        return $this->userWorkingRecord()->orderBy('joining_date', 'desc')->get();
    }

    public function latestWork()
    {
        return $this->userWorkingRecord()->orderBy('joining_date', 'desc')->first();
    }

    public function hasWork()
    {
        return (bool) $this->latestWork() ? true : false;
    }

    public function familyInfo()
    {
        return $this->hasOne('App\Model\UserFamilyInfo');
    }
// work and education and family info


    //search start

    public function searchAll()
    {
        $users = User::whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
            ->whereDoesntHave('blockss', function($qq){
                $qq->where('user_second_id', $this->id);
            })

          //   ->whereHas('userPictures', function ($query) {
          //   $query->where('image_type', 'profilepic');
          //   $query->where('checked', true);
          // })

          ->where('gender', $this->oltGender())
          ->where('img_name', '<>', null)
          // ->where('gender', Auth::user()->lookingFor())
          ->orderBy('updated_at', 'desc')
          ->paginate(24);

      return $users;
    }

    public function searchPhoto()
    {
        $users = User::whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
        ->whereDoesntHave('blockss', function($qq){
            $qq->where('user_second_id', $this->id);
        })
          // ->where('gender', Auth::user()->oltGender())
        // ->where('gender', Auth::user()->lookingFor())
        ->where('gender', $this->oltGender())
        ->where('img_name', '<>', null)
          ->orderBy('updated_at', 'desc')->paginate(24);

          return $users;
    }

    //search end


    // mobile start

    public function searchPreferenceUsersMobile($paginate)
        {
            if (! $this->searchTerm)
            {
            $this->searchTerm()->create(['addedby_id' => $this->id]);
            }

        // dd(Auth::user()->searchTerm);
        $searchTerm = $this->searchTerm;
        if (!isset($searchTerm->min_age)) {
            $minage=$searchTerm->min_age;
        }else{
            $minage=18;
        }
        if (!$searchTerm->max_age) {
            $maxage=$searchTerm->max_age;
        }else{
            $maxage=60;
        }
        $minAgeDate = Carbon::now()->subyear($minage)->toDateString();
        $maxAgeDate = Carbon::now()->subyear($maxage)->toDateString();
        // dd($searchTerm->user_status);

        $users = User::whereDoesntHave('blockerOf',function($query){
                    $query->where('user_id', $this->id);
                })
            ->whereDoesntHave('blockss', function($qq){
                $qq->where('user_second_id', $this->id);
            })
        ->where('dob', '<=', $minAgeDate)
        ->where('dob', '>=', $maxAgeDate)
        ->where('gender', $this->oltGender())
        ->where('img_name', '<>', null)
        // ->where('country', 'like' ,"%".$searchTerm->country."%")

        // ->where(function ($query) use ($searchTerm) {
        //           $query->orWhere('country_other', 'like', "%".$searchTerm->country_other."%")
        //                 ->orWhereNull('country_other');
        //       })

            ->where(function ($query) use ($searchTerm) {

                // if ($searchTerm->profession)
                // {
                //   $query->whereHas('personalInfo', function ($q) use ($searchTerm)
                //   {

                //     $pros = explode(", ",$searchTerm->profession);

                //         $q->whereIn('profession', $pros);
                //   });
                // }

                // if ($searchTerm->profession)
                // {
                //     $query->where('profession', $searchTerm->profession);
                // }

                // if($searchTerm->country)
                // {
                //     $query->where('country', $searchTerm->country);
                // }

                // if($searchTerm->marital_status)
                // {
                //     $query->where('marital_status', $searchTerm->marital_status);
                // }
                if($searchTerm->religion)
                {
                    $query->where('religion', $searchTerm->religion);
                }


                if ($searchTerm->min_height && $searchTerm->max_height)
                {

                    // $minH = UserSettingItem::where('field_id', 6)->where('title', $searchTerm->min_height)->first();

                    // $maxH = UserSettingItem::where('field_id', 6)->where('title', $searchTerm->max_height)->first();

                    // if($minH && $maxH)
                    // {
                    //     $heights = UserSettingItem::where('field_id', 6)->whereBetween('id', [$minH->id, $maxH->id])->pluck('title');

                    //     $query->whereIn('height',$heights);

                    //     // foreach ($heights as $height) {
                    //     //     $q->orWhere('height', '%'. $height .'%');
                    //     // }

                    // }
                }
            })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->country_of_residence)
            //     {
            //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //       {

            //         $pros = explode(", ",$searchTerm->country_of_residence);

            //             $q->whereIn('country_of_residence', $pros);
            //       });
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->education_level)
            //     {
            //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //       {

            //         $pros = explode(", ",$searchTerm->education_level);

            //             $q->whereIn('education_level', $pros);
            //       });
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->marital_status)
            //     {
            //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //       {

            //             $q->where('marital_status', $searchTerm->marital_status);
            //       });
            //     }
            // })

            // ->where(function ($q) use ($searchTerm) {

            //     if ($searchTerm->country or $searchTerm->country_other)
            //     {
            //           $q->where('country', 'like' ,"%".$searchTerm->country."%");

            //         $q->where(function ($query) use ($searchTerm) {
            //             $query->orWhere('country_other', 'like', "%".$searchTerm->country_other."%")
            //                   ->orWhereNull('country_other');
            //         });
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->skin_color)
            //     {
            //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //       {

            //             $q->where('skin_color', $searchTerm->skin_color);
            //       });
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->body_build)
            //     {
            //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //       {

            //             $q->where('body_build', $searchTerm->body_build);
            //       });
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->smoke_status)
            //     {
            //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //       {

            //             $q->where('smoke_status', $searchTerm->smoke_status);
            //       });
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->alcohol_status)
            //     {
            //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //       {

            //             $q->where('alcohol_status', $searchTerm->alcohol_status);
            //       });
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->mother_tongue)
            //     {
            //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //       {

            //             $q->where('mother_tongue', $searchTerm->mother_tongue);
            //       });
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->do_u_have_children)
            //     {
            //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //       {

            //             $q->where('do_u_have_children', $searchTerm->do_u_have_children);
            //       });
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->religion)
            //     {
            //         $query->where('religion', $searchTerm->religion);
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->social_order)
            //     {
            //         $query->where('social_order', $searchTerm->social_order);
            //     }
            // })

            // ->where(function ($query) use ($searchTerm) {

            //     if ($searchTerm->min_height && $searchTerm->max_height)
            //     {
            //       $query->whereHas('personalInfo', function ($q) use ($searchTerm)
            //       {

            //         $minH = UserSettingItem::where('field_id', 15)->where('title', $searchTerm->min_height)->first();

            //         $maxH = UserSettingItem::where('field_id', 15)->where('title', $searchTerm->max_height)->first();

            //         if($minH && $maxH)
            //         {
            //             $heights = UserSettingItem::where('field_id', 15)->whereBetween('id', [$minH->id, $maxH->id])->pluck('title');

            //             $q->whereIn('height',$heights);

            //             // foreach ($heights as $height) {
            //             //     $q->orWhere('height', '%'. $height .'%');
            //             // }

            //         }
            //       });
            //     }
            // })




            // ->whereHas('userPictures', function ($query) {
            //     $query->where('image_type', 'profilepic');
            //     $query->where('checked', true);
            // })

        // ->where(function ($query) use ($searchTerm)
        // {
        //   if ($searchTerm->user_status == 'Online')
        //   {
        //     $query->where('updated_at', '>', Carbon::now()->subMinutes(4));
        //   } elseif ( $searchTerm->user_status == 'New')  {

        //     //one month old users are considered as new
        //     $query->where('created_at', '>', Carbon::now()->subDays(29));
        //   }

        //   // elseif ( $searchTerm->user_status == 'With Picture')
        //   // {

        //   //   //one month old users are considered as new
        //   //   $query->whereHas('userPictures', function ($q) {
        //   //       $q->where('image_type', 'profilepic');
        //   //       $q->where('checked', true);
        //   //   });



        //   // }

        //   elseif ( $searchTerm->user_status == 'Premium')
        //   {
        //     // $query->where('expired_at', '>=', Carbon::now());
        //     $query->whereDate('expired_at', '>=', date('Y-m-d'));
        //     $query->where('package', '>=', 1);
        //   }



        // })
        ->orderBy('updated_at', 'desc')
        ->simplePaginate($paginate);
        return $users;
        // ->paginate(24);

        // return $users;
        }
    public function myRelatedUsersMobile($type)
    {
        if($type == 'visitor')
        {
            return $this->visitors()
            // ->whereDoesntHave('blockerOf',function($query){
            //     $query->where('user_id', $this->id);
            // })
          //   ->whereHas('userPictures', function ($query) {
          //   $query->where('image_type', 'profilepic');
          //   $query->where('checked', true);
          // })
            ->simplePaginate(24);
        }

        elseif ($type == 'contacts') {

            return $this->myContacts()
            // ->whereDoesntHave('blockerOf',function($query){
            //     $query->where('user_id', $this->id);
            // })
          //   ->whereHas('userPictures', function ($query) {
          //   $query->where('image_type', 'profilepic');
          //   $query->where('checked', true);
          // })
            ->simplePaginate(24);

        }

        elseif($type == 'block')
        {
            return $this->blockss()->simplePaginate(24);
        }

        if($type == 'preference')
        {
          return $this->searchPreferenceUsersMobile(24);
        }

        if($type == 'automail')
        {
            return $this->searchPreferenceAutomailUsers()
            ->simplePaginate(24);
        }
        if($type == 'favourite')
        {
            return $this->favs()
            ->simplePaginate(24);
        }
        if($type == 'latest')
        {
            return User::latest()->where('id', '<>', $this->id)->where('img_name', '<>', null)
            ->simplePaginate(24);
        }

        else
        {
            return $this->favs()
            ->whereDoesntHave('blockerOf',function($query){
                $query->where('user_id', $this->id);
            })
          //   ->whereHas('userPictures', function ($query) {
          //   $query->where('image_type', 'profilepic');
          //   $query->where('checked', true);
          // })
            ->simplePaginate(24);
        }
    }

    public function pendingProposalToMeMobile()
    {
        return UserProposal::has('user')->has('userSecond')->where('accepted', false)->where('user_second_id', $this->id)->latest()->simplePaginate(24);
    }

    public function ProposalToMeAcceptedMobile()
    {
        return UserProposal::has('user')->has('userSecond')->where('accepted', true)->where('user_second_id', $this->id)->latest()->simplePaginate(24);
    }
    public function ProposalFromMeMobile()
    {
        return UserProposal::has('user')->has('userSecond')->where('user_id', $this->id)->latest()->simplePaginate(24);
    }
    public function latest6Profiles()
        {
            $users = User::whereDoesntHave('blockerOf',function($query){
                    $query->where('user_id', $this->id);
                })
            ->whereDoesntHave('blockss', function($qq){
                $qq->where('user_second_id', $this->id);
            })
        // ->where('gender', $this->oltGender())
            ->where('gender', $this->looking_for)
            // ->whereHas('userPictures', function ($query) {
            //     $query->where('image_type', 'profilepic');
            //     $query->where('checked', true);
            //   })
            ->where('img_name', '<>', null)
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return $users;
        }
    //mobile end

    // social profile
    public function identities()
    {
        return $this->hasOne('App\Model\SocialIdentity', 'user_id');
    }

    public function serviceCenter()
    {
        return $this->hasOne(BranchUser::class, 'user_id');
    }

    
}

<?php

namespace App\Http\Controllers;

use App\Model\Branch;
use App\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function teamMemberList(TeamMember $member)
    {
        menuSubmenu('teamMembers', 'memberList');
        $teamMembers = $member->latest()->get();
        $branches = Branch::all();
        return view('admin.team.memberList',[
            'teamMembers' => $teamMembers,
            'branches' => $branches,
        ]);
    }
    public function teamMemberEdit(TeamMember $member)
    {
        menuSubmenu('teamMembers', 'memberList');
        $teamMembers = $member->latest()->get();
        $branches = Branch::all();
        return view('admin.team.memberList',[
            'teamMembers' => $teamMembers,
            'branches' => $branches,
            'member' => $member,
        ]);
    }
    public function teamMemberSave(TeamMember $teamMember, Request $request)
    {
        $data = $this->validate($request,[
            'branch_id' => 'required',
            'team_name' => 'required',
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'education' => 'max:255',
            'mobile' => 'max:255',
            'image' => 'image|max:512',
        ]);

        if ($request->active == 'on') {
            $active = 1;
        }else{
            $active = 0;
        }

        $teamMember->branch_id = $request->branch_id;
        $teamMember->team_name = $data['team_name'];
        $teamMember->name = $data['name'];
        $teamMember->designation = $data['designation'];
        $teamMember->education = $data['education'];
        $teamMember->mobile = $data['mobile'];
        $teamMember->active = $active;
        if ($request->hasFile('image')) {
            if($teamMember->image)
            {
                Storage::disk('upload')->delete(substr($teamMember->image, 8));
            }
            $file = $request->image;
            $fimgExt = strtolower($file->getClientOriginalExtension());               
            $fimageNewName = Str::random(8).time().'.'.$fimgExt;

            Storage::disk('upload')->put('teammember/'.$fimageNewName, File::get($file));
            $teamMember->image = 'storage/teammember/'.$fimageNewName;
        }
        $teamMember->save();

        return redirect()->route('admin.teamMemberList')->with('success', 'Team Member is saved successfully!');
    }
    public function teamMemberDelete(TeamMember $teamMember)
    {
        if($teamMember->image)
        {
            Storage::disk('upload')->delete(substr($teamMember->image, 8));
        }
        $teamMember->delete();
        return redirect()->route('admin.teamMemberList')->with('success', 'Member is deleted.');
    }
}

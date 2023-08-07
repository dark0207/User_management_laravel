<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Image;

class ProfileController extends Controller
{
    public function index() {
                
        $profile   = User::find(Auth::User()->id);

        $companies = User::where('role', 'company')->get();
        // echo json_encode($profile->company_ids); die();
        if($profile->company_ids == null) {
            $company_ids = [];
        } else {
            $company_ids = unserialize($profile->company_ids);
        }
       
        return view('profile.index', compact('profile', 'companies', 'company_ids'));
    }

    public function update(ProfileRequest $request) {

        \LogActivity::addToLog('Updated profile detail');

        $profile = Auth::user();
        $profile->username = $request->username;
        $profile->role = $request->role;
        $profile->state = $request->state;

        if($request->role == 'user') {
            $profile->company_ids = serialize($request->companies);
        } else {
            $profile->company_ids = serialize([]);
        }
        
        
        // upload profile
        if ($request->hasFile('personal_avatar')) {
            $image     = $request->file('personal_avatar');
            $file_name = "profile_" . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->crop(300, 300)->save(base_path('public/uploads/profile/') . $file_name);
            $profile->personal_avatar = $file_name;
        }

        if ($request->hasFile('business_avatar')) {
            $image     = $request->file('business_avatar');
            $file_name = "profile_" . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->crop(300, 300)->save(base_path('public/uploads/profile/') . $file_name);
            $profile->business_avatar = $file_name;
        }

        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully');
    }

}

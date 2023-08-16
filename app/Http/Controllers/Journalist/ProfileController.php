<?php

namespace App\Http\Controllers\Journalist;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Journalist\ProfileFormRequest;

class ProfileController extends Controller
{
   public function index(){
    $userprofile= User::find(Auth::user()->id);
    return view('journalist.profile.profile',compact('userprofile'));
   }
   public function update(ProfileFormRequest $request){
    $data = $request -> validated();
    $user = User::find(Auth::user()->id);
    $user->biography = $data['Biography'];
    if($request->hasfile('image')){

        $destination = 'uploads/profile/'. $request->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
        $file= $request->file('image');
        $filename= time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/profile/', $filename);
        $user->image = $filename;
    }
    $user->mission = $data['Mission'];
    $user->now = $data['Now'];
    $user->update();
    return redirect('journalist/profile')->with('message','Profile Has Updated Successfully');
   }
}

<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\admin\ProfileFormRequest;

class ProfileController extends Controller
{
        public function index(){
            $userprofile= User::find(Auth::user()->id);
            return view('admin.profile.profile',compact('userprofile'));
       }
       public function update(ProfileFormRequest $request){
        $data = $request -> validated();
        $user = User::find(Auth::user()->id);
        $user->biography = $data['Biography'];
        if($request->hasfile('image')){

            $destination = 'uploads/profile/'. $user->image;
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
        return redirect('admin/profile')->with('message','Profile Has Updated Successfully');
       }
}

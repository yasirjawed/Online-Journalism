<?php

namespace App\Http\Controllers\Frontend;

use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $allCategories=Category::where('status','0')->get();
        $Latest_Posts=post::where('active_status','1')->orderBy('created_at','DESC')->get()->take(15);
        // ddd(Auth::user()->id);
        return view('frontend.index',compact('allCategories','Latest_Posts'));
        
    }

    public function correspondent(){
        $allUsers=User::where('role_as','<>','0')->get();
        return view('frontend.correspondent',compact('allUsers'));
    }
    public function collections(){

        return view('frontend.collections');
    }
    public function listen(){

        return view('frontend.listen');
    }
    public function founding_principles(){

        return view('frontend.founding_principles');
    }
    public function Contact_us(){

        return view('frontend.contact_us');
    }
    public function about_us(){

        return view('frontend.about_us');
    }
    public function terms_condition(){

        return view('frontend.terms_condition');
    }
    public function privacy_policy(){

        return view('frontend.privacy_policy');
    }
    public function values_rules(){

        return view('frontend.values_rules');
    }
    public function faq_list(){

        return view('frontend.faq_list');
    }

    public function profile($user_id){
        $user= User::find($user_id);
        $all_post= post::where('created_by',$user_id)->where('active_status',1)->get();
        return view('frontend.profile',compact('user','all_post'));
    }

    public function viewPost(string $category_slug, string $post_slug){

        $category = Category::where('slug',$category_slug)->where('status','0')->first();

        // $userPost = post::where('id',$userid)->where('status','0')->get();
        if($category){
            $post=post::where('category_id',$category->id)->where('slug',$post_slug)->where('status','0')->first();
            $userPost=post::where('created_by',$post->created_by)->where('status','0')->orderBy('created_at','DESC')->get()->take(15);
            $Latestpost=post::where('category_id',$category->id)->where('status','0')->orderBy('created_at','DESC')->get()->take(15);
            return view('frontend.post.view',compact('post','Latestpost','userPost'));
        }else{
            return redirect('/');
        }
    }
    public function viewCategoryPost($category_slug){
        $category = Category::where('slug',$category_slug)->where('status','0')->first();
        if($category){
            $post=post::where('category_id',$category->id)->where('status','0')->get();
            return view('frontend.post.index',compact('post','category'));
        }else{
            return redirect('/');
        }
    }
}

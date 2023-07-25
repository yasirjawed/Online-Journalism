<?php

namespace App\Http\Controllers\Frontend;

use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $allCategories=Category::where('status','0')->get();
        $Latest_Posts=post::where('status','0')->orderBy('created_at','DESC')->get()->take(15);
        // ddd(Auth::user()->id);
        return view('frontend.index',compact('allCategories','Latest_Posts'));
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
